<?
$subject_val = "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 31 19:33:33 2014" -->
<!-- isoreceived="20140201003333" -->
<!-- sent="Fri, 31 Jan 2014 16:33:01 -0800" -->
<!-- isosent="20140201003301" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV" -->
<!-- id="1405472F-D2EC-4388-AE18-E2394A40FA9C_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17GA77xfAY+ZwUtO4ufD==T76sVQaF31+j_-7fKQ6ytCQ_at_mail.gmail.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-31 19:33:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/02/13973.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris"</a>
<li><strong>Previous message:</strong> <a href="13971.php">Paul Hargrove: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<li><strong>In reply to:</strong> <a href="13971.php">Paul Hargrove: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/02/13997.php">Ralph Castain: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/02/13997.php">Ralph Castain: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No worries about PBS itself - better to allow you to just run this way. Easy to add a switch for this purpose.
<br>
<p>For now, just add --oversubscribe to the command line
<br>
<p>On Jan 31, 2014, at 3:32 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The mods may have been done by the staff at PSC rather than by SGI.
</span><br>
<span class="quotelev1">&gt; Note the &quot;_psc&quot; suffix:
</span><br>
<span class="quotelev1">&gt; $ which pbsnodes
</span><br>
<span class="quotelev1">&gt; /usr/local/packages/torque/2.3.13_psc/bin/pbsnodes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Their sources appear to be available in the f/s too.
</span><br>
<span class="quotelev1">&gt; Using &quot;tar -d&quot; to compare that to the pristine torque-2.3.13 tarball show the following files were modified:
</span><br>
<span class="quotelev1">&gt; torque-2.3.13/src/resmom/job_func.c
</span><br>
<span class="quotelev1">&gt; torque-2.3.13/src/resmom/mom_main.c
</span><br>
<span class="quotelev1">&gt; torque-2.3.13/src/resmom/requests.c
</span><br>
<span class="quotelev1">&gt; torque-2.3.13/src/resmom/linux/mom_mach.h
</span><br>
<span class="quotelev1">&gt; torque-2.3.13/src/resmom/linux/mom_mach.c
</span><br>
<span class="quotelev1">&gt; torque-2.3.13/src/resmom/linux/cpuset.c
</span><br>
<span class="quotelev1">&gt; torque-2.3.13/src/resmom/start_exec.c
</span><br>
<span class="quotelev1">&gt; torque-2.3.13/src/scheduler.tcl/pbs_sched.c
</span><br>
<span class="quotelev1">&gt; torque-2.3.13/src/cmds/qalter.c
</span><br>
<span class="quotelev1">&gt; torque-2.3.13/src/cmds/qsub.c
</span><br>
<span class="quotelev1">&gt; torque-2.3.13/src/cmds/qstat.c
</span><br>
<span class="quotelev1">&gt; torque-2.3.13/src/server/resc_def_all.c
</span><br>
<span class="quotelev1">&gt; torque-2.3.13/src/server/req_quejob.c
</span><br>
<span class="quotelev1">&gt; torque-2.3.13/torque.spec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll provide what assistance I can in testing.
</span><br>
<span class="quotelev1">&gt; That includes providing (off-list) the actual diffs of PSC's torque against the tarball, if desired.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the meantime, since -npernode didn't work, what is the right way to say:
</span><br>
<span class="quotelev1">&gt;   &quot;I have 1 slot but I want to overcommit and run 16 mpi ranks&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 31, 2014 at 3:20 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 31, 2014, at 3:13 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As I said this is NOT a cluster - it is a 4k-core shared memory machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understood - that wasn't the nature of my question
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; TORQUE is allocating cpus (time-shared mode, IIRC), not nodes.
</span><br>
<span class="quotelev2">&gt;&gt; So, there is always exactly one line in $PBS_NODESFILE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Interesting - because that isn't the standard way Torque behaves. It is supposed to put one line/slot in the nodefile, each line containing the name of the node. Clearly, SGI has reconfigured Torque to do something different.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The system runs as 2 partitions of 2k-cores each.
</span><br>
<span class="quotelev2">&gt;&gt; So, the contents odf$PBS_NODESFILE has exactly 2 possible values, each 1 line.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The values of PBS_PPN and PBS_NCPUS both reflect the size of the allocation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At a minimum, shouldn't Open MPI be multiplying the lines in $PBS_NODESFILE by the value of $PBS_PPN?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, as above, that isn't the way Torque generally behaves. It would appear that we need a &quot;switch&quot; here to handle SGI's modifications. Should be doable - just haven't had anyone using an SGI machine before :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Additionally, when I try &quot;mpirun -npernode 16 ./ring_c&quot; I am still told there are not enough slots.
</span><br>
<span class="quotelev2">&gt;&gt; Shouldn't that be working with 1 line is $PBS_NODESFILE?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jan 31, 2014 at 2:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We read the nodes from the PBS_NODEFILE, Paul - can you pass that along?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 31, 2014, at 2:33 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to test the trunk on an SGI UV (to validate Nathan's port of btl:vader to SGI's variant of xpmem).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At configure time, PBS's TM support was correctly located.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My PBS batch script includes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   #PBS -l ncpus=16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because that is what this installation requires (not nodes, mppnodes, or anything like that).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One is allocating cpus on a large shared-memory machine, not a set of nodes in a cluster.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, this appears to be causing mpirun to think I have just 1 slot:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + mpirun -np 2 ./ring_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are not enough slots available in the system to satisfy the 2 slots 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that were requested by the application:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ./ring_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Either request fewer slots for your application, or make more slots available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In case they contain useful info, here are the PBS env vars in the job:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_HT_NCPUS=32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_VERSION=TORQUE-2.3.13
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_JOBNAME=qs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_ENVIRONMENT=PBS_BATCH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_HOME=/var/spool/torque
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_O_WORKDIR=/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-x86_64-uv-trunk/BLD/examples
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_PPN=16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_TASKNUM=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_O_HOME=/usr/users/6/hargrove
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_MOMPORT=15003
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_O_QUEUE=debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_O_LOGNAME=hargrove
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_O_LANG=en_US.UTF-8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_JOBCOOKIE=9EEF5DF75FA705A241FEF66EDFE01C5B
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_NODENUM=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_O_SHELL=/usr/psc/shells/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_SERVER=tg-login1.blacklight.psc.teragrid.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_JOBID=314827.tg-login1.blacklight.psc.teragrid.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_NCPUS=16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_O_HOST=tg-login1.blacklight.psc.teragrid.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_VNODENUM=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_QUEUE=debug_r1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_O_MAIL=/var/mail/hargrove
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_NODEFILE=/var/spool/torque/aux//314827.tg-login1.blacklight.psc.teragrid.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_O_PATH=[...removed...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If any additional info is needed to help make mpirun &quot;just work&quot;, please let me know.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, at this point I am mostly interested in any work-arounds that will let me run something other than a singleton on this system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13972/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/02/13973.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris"</a>
<li><strong>Previous message:</strong> <a href="13971.php">Paul Hargrove: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<li><strong>In reply to:</strong> <a href="13971.php">Paul Hargrove: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/02/13997.php">Ralph Castain: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/02/13997.php">Ralph Castain: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
