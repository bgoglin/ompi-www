<?
$subject_val = "[OMPI devel] ROMIO+Lustre problems 2.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 07:16:08 2015" -->
<!-- isoreceived="20151208121608" -->
<!-- sent="Tue, 8 Dec 2015 13:16:03 +0100" -->
<!-- isosent="20151208121603" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI devel] ROMIO+Lustre problems 2.0" -->
<!-- id="5666CA03.103_at_itc.rwth-aachen.de" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] ROMIO+Lustre problems 2.0<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-08 07:16:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18406.php">Baldassari Caroline: "Re: [OMPI devel] Problem with the 1.8.8 version"</a>
<li><strong>Previous message:</strong> <a href="18404.php">Geoffrey Paulsen: "[OMPI devel] Agenda 12/8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18415.php">Paul Kapinos: "Re: [OMPI devel] ROMIO+Lustre problems 2.0"</a>
<li><strong>Reply:</strong> <a href="18415.php">Paul Kapinos: "Re: [OMPI devel] ROMIO+Lustre problems 2.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI and ROMIO developer,
<br>
<p>In short: ROMIO in actual OpenMPI versions cannot configure using old versions 
<br>
of Intel compiler.
<br>
<p><p>A while ago we reported about trouble in compiling Open MPI =&gt;1.8.3 with ROMIO 
<br>
support, cf. (1), which was reported to be fixed (2).
<br>
<p>However we've found out that actual version 1.10.1 still failing in our 
<br>
environment to configure ROMIO subsystem  *whenever using Intel compiler 11.1*, 
<br>
whereby the very same configure command success when using Intel compiler 14.0.
<br>
<p>Log snippet for compiling the 'conftest.c' program may be seen (4)
<br>
<p>A simple comparison of configure logs lead to observation:
<br>
- intel/11.1 use -std=c99
<br>
- intel/14.0 use -std=gnu99
<br>
However, try to compile the failed conftest.c just by switching to new Intel 
<br>
compiler and -std=gnu99 also failed (whereby the unknown conftest.c from 
<br>
building the whole Sw using new compiler worked fine), following our assumption 
<br>
'maybe there is something wrong with overall configure procedure using older 
<br>
versions of Intel compiler, or maybe ROMIO do not support old versions of Intel 
<br>
compilers at all'.
<br>
<p>Could someone have a look at this? The whole build and install dirs may be found 
<br>
at (3) (89 MB!)
<br>
<p>Best wishes
<br>
<p>Paul Kapinos
<br>
<p><p><p><p>1) <a href="https://www.open-mpi.org/community/lists/devel/2014/10/16106.php">https://www.open-mpi.org/community/lists/devel/2014/10/16106.php</a>
<br>
<p>2) <a href="https://www.open-mpi.org/community/lists/devel/2014/10/16109.php">https://www.open-mpi.org/community/lists/devel/2014/10/16109.php</a>
<br>
<a href="https://github.com/hppritcha/ompi/commit/53fd425a6a0843a5de0a8c544901fbf01246ed31">https://github.com/hppritcha/ompi/commit/53fd425a6a0843a5de0a8c544901fbf01246ed31</a>
<br>
<p>3)
<br>
<a href="https://rwth-aachen.sciebo.de/index.php/s/Ii6G4gULNZjC8CL">https://rwth-aachen.sciebo.de/index.php/s/Ii6G4gULNZjC8CL</a>
<br>
<p>4) (OpenMPI's config.log)
<br>
.....
<br>
It was created by Open MPI configure 1.10.1, which was
<br>
generated by GNU Autoconf 2.69.  Invocation command line was
<br>
<p>&nbsp;&nbsp;&nbsp;$ ./configure --with-verbs --with-lsf --with-devel-headers 
<br>
--enable-contrib-no-build=vt --enable-heterogeneous --enable-cxx-exceptions 
<br>
--enable-orterun-prefix-by-default 
<br>
--with-io-romio-flags=--with-file-system=testfs+ufs+nfs+lustre --enable-mpi-ext 
<br>
CFLAGS=-O3 -ip -axAVX,SSE4.2,SSE4.1 -fp-model fast=2   -m64   CXXFLAGS=-O3 -ip 
<br>
-axAVX,SSE4.2,SSE4.1 -fp-model fast=2   -m64   FFLAGS=-O3 -ip 
<br>
-axAVX,SSE4.2,SSE4.1 -fp-model fast=2   -m64   FCFLAGS=-O3 -ip 
<br>
-axAVX,SSE4.2,SSE4.1 -fp-model fast=2   -m64   LDFLAGS=-O3 -ip 
<br>
-axAVX,SSE4.2,SSE4.1 -fp-model fast=2   -m64 
<br>
--prefix=/opt/MPI/openmpi-1.10.1test/linux/intel_11.1.080 
<br>
--mandir=/opt/MPI/openmpi-1.10.1test/linux/intel_11.1.080/man 
<br>
--bindir=/opt/MPI/openmpi-1.10.1test/linux/intel_11.1.080/bin 
<br>
--libdir=/opt/MPI/openmpi-1.10.1test/linux/intel_11.1.080/lib 
<br>
--includedir=/opt/MPI/openmpi-1.10.1test/linux/intel_11.1.080/include 
<br>
--datarootdir=/opt/MPI/openmpi-1.10.1test/linux/intel_11.1.080/share
<br>
.....
<br>
<p>(ROMIO's config.log)
<br>
&nbsp;&nbsp;.....
<br>
generated by GNU Autoconf 2.69.  Invocation command line was
<br>
<p>&nbsp;&nbsp;&nbsp;$ ./configure --with-file-system=testfs+ufs+nfs+lustre FROM_OMPI=yes CC=icc 
<br>
-std=c99 CFLAGS=-DNDEBUG -O3 -ip -axAVX,SSE4.2,SSE4.1 -fp-model fast=2 -m64 
<br>
-finline-functions -fno-strict-aliasing -restrict -fexceptions 
<br>
-Qoption,cpp,--extended_float_types -pthread CPPFLAGS= 
<br>
-I/w0/tmp/pk224850/linuxc2_6000/openmpi-1.10.1test_linux64_intel_11.1.080/opal/mca/hwloc/hwloc191/hwloc/include 
<br>
-I/w0/tmp/pk224850/linuxc2_6000/openmpi-1.10.1test_linux64_intel_11.1.080/opal/mca/event/libevent2021/libevent 
<br>
-I/w0/tmp/pk224850/linuxc2_6000/openmpi-1.10.1test_linux64_intel_11.1.080/opal/mca/event/libevent2021/libevent/include 
<br>
FFLAGS=-O3 -ip -axAVX,SSE4.2,SSE4.1 -fp-model fast=2   -m64   LDFLAGS=-O3 -ip 
<br>
-axAVX,SSE4.2,SSE4.1 -fp-model fast=2   -m64   -fexceptions  --enable-shared 
<br>
--disable-static --with-file-system=testfs+ufs+nfs+lustre 
<br>
--prefix=/opt/MPI/openmpi-1.10.1test/linux/intel_11.1.080 --disable-aio 
<br>
--cache-file=/dev/null --srcdir=. --disable-option-checking
<br>
......
<br>
......
<br>
......
<br>
configure:20968: checking lustre/lustre_user.h usability
<br>
configure:20968: icc -std=c99 -c -DNDEBUG -O3 -ip -axAVX,SSE4.2,SSE4.1 -fp-model 
<br>
fast=2 -m64 -finline-functions -fno-strict-aliasing -restrict -fexceptions 
<br>
-Qoption,cpp,--extended_float_types -pthread 
<br>
-I/w0/tmp/pk224850/linuxc2_6000/openmpi-1.10.1test_linux64_intel_11.1.080/opal/mca/hwloc/hwloc191/hwloc/include 
<br>
-I/w0/tmp/pk224850/linuxc2_6000/openmpi-1.10.1test_linux64_intel_11.1.080/opal/mca/event/libevent2021/libevent 
<br>
-I/w0/tmp/pk224850/linuxc2_6000/openmpi-1.10.1test_linux64_intel_11.1.080/opal/mca/event/libevent2021/libevent/include 
<br>
conftest.c &gt;&amp;5
<br>
/usr/include/sys/quota.h(221): error: identifier &quot;caddr_t&quot; is undefined
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caddr_t __addr) __THROW;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>compilation aborted for conftest.c (code 2)
<br>
configure:20968: $? = 2
<br>
configure: failed program was:
<br>
..........
<br>
configure:20968: result: no
<br>
<p>(conftest.c  and /usr/include/sys/quota.h attached)
<br>
<p><p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, IT Center
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915


</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18405/conftest.c">conftest.c</a>
</ul>
<!-- attachment="conftest.c" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18405/quota.h">quota.h</a>
</ul>
<!-- attachment="quota.h" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18405/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18406.php">Baldassari Caroline: "Re: [OMPI devel] Problem with the 1.8.8 version"</a>
<li><strong>Previous message:</strong> <a href="18404.php">Geoffrey Paulsen: "[OMPI devel] Agenda 12/8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18415.php">Paul Kapinos: "Re: [OMPI devel] ROMIO+Lustre problems 2.0"</a>
<li><strong>Reply:</strong> <a href="18415.php">Paul Kapinos: "Re: [OMPI devel] ROMIO+Lustre problems 2.0"</a>
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