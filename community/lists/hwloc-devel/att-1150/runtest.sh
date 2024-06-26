#!/bin/bash
#vim: fdm=marker
# To get folding work in vim use command set fdm=marker 
# Please make sure that rh-tests-performance-common_functions.noarch is installed
# Or install it manually from 
# http://cvs.devel.redhat.com/cgi-bin/cvsweb.cgi/tests/performance/common_functions/common-performance-functions.sh
# To lint this script please run 
# bash -n ./runtest.sh

#{{{ Global variables and settings
STARTTIME=$(date +%Y-%b-%d_%Hh%Mm)
RESULTSDIR=`pwd`/${STARTTIME}_results
CONFIGDIR=$RESULTSDIR/proc
BUILDRUNLOG=${RESULTSDIR}/build-run.log
CPU_AFFINITY_DIR=${RESULTSDIR}/CPU_AFFINITY
#}}}

#{{{ Prepare directories for output
rm -rf ${RESULTSDIR} >& /dev/null
mkdir -p ${RESULTSDIR} ${CONFIGDIR} ${CPU_AFFINITY_DIR}
cp /proc/cpuinfo ${CONFIGDIR}/cpuinfo
#}}}

# {{{ RHTS environment check
IN_RHTS=0
if [ "${RESULT_SERVER}xx" != "xx" ]; 
then
    IN_RHTS=1;
    OUTPUTFILE=${RESULTSDIR}/run.log
    rm -f ${OUTPUTFILE}
    touch ${OUTPUTFILE}

    exec 5>&1 6>&2 			# Creates file descriptor 5 to be the same as descriptor 1
    exec >> "${OUTPUTFILE}" 2>&1	# All outputs goes to OUTPUTFILE

    [ -x /usr/bin/rhts-environment.sh ] && . /usr/bin/rhts-environment.sh
else
    TEST="/performance/hwloc/install"
    USERID=`id -u`
    if [ ${USERID} -ne 0 ]; then
	printf "You need to run as root\n"
	exit 1
    fi

    exec 5>&1 6>&2
    exec > >(tee -a ${RESULTSDIR}/run.log)
    exec 2>&1
fi
# }}}

#{{{ Source common-performance-functions.sh
LIBRARY=/mnt/tests/performance/common_functions/lib/common-performance-functions.sh
LIBRARY_BASENAME=./$(basename ${LIBRARY})
if [[ ! -r ${LIBRARY} && ! -r ${LIBRARY_BASENAME} ]]
then
    echo "Can find neither ${LIBRARY} nor ${LIBRARY_BASENAME}"
    echo "Trying to install it."
    set -v
    set -x
    yum -y install rh-tests-performance-common_functions.noarch
    set +x
    set +v
    if [[ ! -r ${LIBRARY} ]]
    then
	echo "Please install rh-tests-performance-common_functions.noarch or copy file"
	echo "http://cvs.devel.redhat.com/cgi-bin/cvsweb.cgi/tests/performance/common_functions/common-performance-functions.sh"
	echo "into `pwd`"
	if [[ ${IN_RHTS} == 1 ]]; then
	    set +o nounset
	    DATE=$(date +%T)
	    report_result ${DATE}_${TEST}/SUMMARY FAIL
	fi
	exit 1
    fi
fi

if [[ -r  ${LIBRARY_BASENAME} ]]
then
    if ! source ${LIBRARY_BASENAME}
    then
	echo "Failed to load ${LIBRARY_BASENAME} "
	if [[ ${IN_RHTS} == 1 ]]; then
	    set +o nounset
	    DATE=$(date +%T)
	    report_result ${DATE}_${TEST}/SUMMARY FAIL
	fi
	exit 1
    fi
else
    if ! source ${LIBRARY}
    then
	echo "Failed to load ${LIBRARY}"
	if [[ ${IN_RHTS} == 1 ]]; then
	    set +o nounset
	    DATE=$(date +%T)
	    report_result ${DATE}_${TEST}/SUMMARY FAIL
	fi
	exit 1
    fi
fi
#}}}
 
#{{{ Compile & Install hwloc if not yet installed
if ! which lstopo > /dev/null 2>&1
then
    (
	yum -y install libX11-devel libxml2-devel cairo-devel
	tar zxvf hwloc-*.tar.gz
	cd hwloc-*
	./configure
	make
	make install
    ) >>${BUILDRUNLOG} 2>&1
fi
pushd ${RESULTSDIR} > /dev/null 2>&1
#}}}

#{{{ Run hwloc
print_rhts_header ${IN_RHTS} ${CONFIGDIR} ${TEST}
if which lstopo > /dev/null 2>&1
then
    #{{{ Main output
    fmt_printline "hwloc version" `lstopo --version |  awk '{ print $2 }'`
    fmt_printline "hwloc supported output file formats" $(lstopo --help | grep "Supported output file formats" | sed -e 's/^.*formats://g')
    fmt_printline "results directory" ${RESULTSDIR}

    echo
    COMMAND="lstopo --physical -"
    echo "Output of command: \"${COMMAND}\""
    eval ${COMMAND}
    #}}}

    #{{{ Pictures and different output formats
    OUTPUT_BASE_NAME=$(uname -r)
    read -ra HWLOC_FILE_FORMAT_ARRAY <<< $(lstopo --help | grep "Supported output file formats" | sed -e 's/^.*formats://g' | sed -e 's/[,]//g')
    for HWLOC_FILE_FORMAT in "${HWLOC_FILE_FORMAT_ARRAY[@]}"
    do
	printf "Creating output in %4s format:\t" "${HWLOC_FILE_FORMAT}"
	if lstopo --physical ${OUTPUT_BASE_NAME}_OS-indexing${HWLOC_FILE_FORMAT}
	then
	    echo OK
	else
	    echo "There was an error, return code is $?"
	fi 
    done
    lstopo -v -v -v --cpuset --physical - > ${OUTPUT_BASE_NAME}_OS-indexing_cpuset_full.log
    lstopo -v -v -v --merge --cpuset --physical - > ${OUTPUT_BASE_NAME}_OS-indexing_cpuset_short.log
    lstopo -v -v -v --cpuset - > ${OUTPUT_BASE_NAME}_hwloc-intern-indexing_cpuset_full.log
    #}}}

    #{{{ Test hwloc-distrib and hwloc-bind, report results with lstopo --top 
    pushd ${CPU_AFFINITY_DIR} > /dev/null 2>&1
    CPU_COUNT=$(grep -c "^processor" /proc/cpuinfo)
    for SUB_PROCESS_COUNT in `seq ${CPU_COUNT}`
    do
	(
	    declare -a ARRAY
	    ARGLIST=$(hwloc-distrib --single ${SUB_PROCESS_COUNT})
	    ARRAY=(${ARGLIST})
	    PID=""
	    for CPUSET in ${ARRAY[@]}
	    do
		COMMAND="hwloc-bind ${CPUSET} sleep $((100+${SUB_PROCESS_COUNT})) &"
		echo ${COMMAND}
		eval ${COMMAND}
		PID="${PID} $!"
	    done
	    echo "PIDS:"
	    echo ${PID}
	    sleep 1
	    COMMAND="lstopo --physical --top -"
	    echo ${COMMAND}
	    echo
	    eval ${COMMAND}
	    kill ${PID}
	) > `printf "%04d" ${SUB_PROCESS_COUNT}`.log 2>&1
    done
    popd > /dev/null 2>&1
    #}}}

    #{{{ Tar output files
    if [[ ${IN_RHTS} == 1 ]]
    then
	ARCHIVEFILE="${STARTTIME}_hwloc-results.tar.gz"
	cd `dirname ${RESULTSDIR}`
	ARCHIVEDIRNAME=./`basename ${RESULTSDIR}`
	tar zcf ${ARCHIVEFILE} ${ARCHIVEDIRNAME}
	rhts-submit-log -T ${RECIPETESTID} -S ${RESULT_SERVER} -l ${ARCHIVEFILE}
   fi
   #}}}

    RESULT=PASS
else
    RESULT=FAIL
fi
#}}}

#{{{ Restore file descriptors and close temporary file descriptors
exec 1>&5 5>&- 
exec 2>&6 6>&-
#}}}

#{{{ Report result
if [[ ${IN_RHTS} == 1 ]]
then
    report_result_nounset_safe $TEST ${RESULT}
fi
#}}}


