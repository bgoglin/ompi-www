<?
$subject_val = "Re: [OMPI users] Compiler Choice in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 12:24:39 2008" -->
<!-- isoreceived="20080516162439" -->
<!-- sent="Sat, 17 May 2008 00:35:08 +0800" -->
<!-- isosent="20080516163508" -->
<!-- name="Wen Hao Wang" -->
<!-- email="wangwhao_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiler Choice in openmpi" -->
<!-- id="OFCAC407C3.96BA5E3D-ON4825744B.005A3EC5-4825744B.0059FCFE_at_cn.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8C969C28-F152-4F24-9C13-BC1B862DBF82_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiler Choice in openmpi<br>
<strong>From:</strong> Wen Hao Wang (<em>wangwhao_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-16 12:35:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5686.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<li><strong>Previous message:</strong> <a href="5684.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>In reply to:</strong> <a href="5682.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5686.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<li><strong>Reply:</strong> <a href="5686.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the info. But even with the all the default arguments,
<br>
&quot;./configure&quot; of lamtests failed with similar error.
<br>
<p>[root_at_xblade08 lamtests-7.1.4]# ./configure
<br>
Configuring LAM test suite version 7.1.4
<br>
checking for a BSD-compatible install... /usr/bin/install -c
<br>
checking whether build environment is sane... yes
<br>
checking for gawk... gawk
<br>
checking whether make sets $(MAKE)... yes
<br>
checking build system type... i686-pc-linux-gnu
<br>
checking host system type... i686-pc-linux-gnu
<br>
checking for mpicc... yes
<br>
checking for gcc... mpicc
<br>
checking for C compiler default output file name... a.out
<br>
checking whether the C compiler works... configure: error: cannot run C
<br>
compiled programs.
<br>
If you meant to cross compile, use `--host'.
<br>
See `config.log' for more details.
<br>
[root_at_xblade08 lamtests-7.1.4]# grep cannot config.log
<br>
./a.out: error while loading shared libraries: libopen-rte.so.0: cannot
<br>
open shared object file: No such file or directory
<br>
configure:2388: error: cannot run C compiled programs.
<br>
<p>I am attaching the config.log of lamtests this time.
<br>
(See attached file: config.log.lamtest.default)
<br>
<p>Wen Hao Wang
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jeff Squyres                                                  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;jsquyres_at_cisco.c                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;om&gt;                                                        To 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent by:                  Open MPI Users &lt;users_at_[hidden]&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users-bounces_at_ope                                          cc 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n-mpi.org                                                     
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Re: [OMPI users] Compiler Choice in 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2008-05-16 23:51          openmpi                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please respond to                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI Users                                               
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;users_at_open-mpi.o                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rg&gt;                                                    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><p><p>Ah, this is a simple problem.  Don't override the CC/etc. for the
<br>
lamtests suite; it should default to mpicc and friends.  If you
<br>
override the CC for the lamtests configure, it'll use those compilers
<br>
directly (not mpicc and friends).
<br>
<p>Make sense?
<br>
<p><p>On May 16, 2008, at 11:44 AM, Wen Hao Wang wrote:
<br>
<p><span class="quotelev1">&gt; Here are the details of my env. My machine has only one ethernet
</span><br>
<span class="quotelev1">&gt; network adapter. If anything is missed, please let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_xblade08 wwh]# uname -a
</span><br>
<span class="quotelev1">&gt; Linux xblade08.clusters.com 2.6.18-87.el5 #1 SMP Tue Mar 25 17:28:02
</span><br>
<span class="quotelev1">&gt; EDT 2008 i686 i686 i386 GNU/Linux
</span><br>
<span class="quotelev1">&gt; [root_at_xblade08 wwh]# cat /etc/*release
</span><br>
<span class="quotelev1">&gt; Red Hat Enterprise Linux Server release 5.2 Beta (Tikanga)
</span><br>
<span class="quotelev1">&gt; [root_at_xblade08 wwh]# echo $PATH
</span><br>
<span class="quotelev1">&gt; /opt/intel/fc/10.1.015/bin:/opt/intel/cc/10.1.015/bin:/usr/kerberos/
</span><br>
<span class="quotelev1">&gt; sbin:/usr/kerberos/bin:/usr/local/sbin:/usr/local/bin:/sbin:/bin:/
</span><br>
<span class="quotelev1">&gt; usr/sbin:/usr/bin:/opt/bin:/opt/xcat/bin:/opt/xcat/sbin:/opt/intel/
</span><br>
<span class="quotelev1">&gt; cc/10.1.015/bin:/opt/intel/fc/10.1.015/bin:/root/bin
</span><br>
<span class="quotelev1">&gt; [root_at_xblade08 wwh]# echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /opt/intel/fc/10.1.015/lib:/opt/intel/cc/10.1.015/lib
</span><br>
<span class="quotelev1">&gt; [root_at_xblade08 wwh]# rpm -qa|grep intel
</span><br>
<span class="quotelev1">&gt; intel-ifort101015-10.1.015-1
</span><br>
<span class="quotelev1">&gt; intel-isubh101015-10.1.015-1
</span><br>
<span class="quotelev1">&gt; intel-iidb101015-10.1.015-1
</span><br>
<span class="quotelev1">&gt; intel-icc101015-10.1.015-1
</span><br>
<span class="quotelev1">&gt; [root_at_xblade08 wwh]# ifconfig
</span><br>
<span class="quotelev1">&gt; eth0 Link encap:Ethernet HWaddr 00:0D:60:9C:09:CA
</span><br>
<span class="quotelev1">&gt; inet addr:172.20.3.24 Bcast:172.20.255.255 Mask:255.255.0.0
</span><br>
<span class="quotelev1">&gt; inet6 addr: fe80::20d:60ff:fe9c:9ca/64 Scope:Link
</span><br>
<span class="quotelev1">&gt; UP BROADCAST RUNNING MULTICAST MTU:1500 Metric:1
</span><br>
<span class="quotelev1">&gt; RX packets:1030390 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt; TX packets:422275 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt; collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt; RX bytes:78898265 (75.2 MiB) TX bytes:155746699 (148.5 MiB)
</span><br>
<span class="quotelev1">&gt; Interrupt:169
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lo Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt; inet addr:127.0.0.1 Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt; inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt; UP LOOPBACK RUNNING MTU:16436 Metric:1
</span><br>
<span class="quotelev1">&gt; RX packets:2154 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt; TX packets:2154 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt; collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt; RX bytes:177404 (173.2 KiB) TX bytes:177404 (173.2 KiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I run &quot;./configure CC=icc CXX=icpc FC=ifort F77=ifort&quot; and &quot;make all
</span><br>
<span class="quotelev1">&gt; install&quot; to install open mpi. The config.log can be got in the
</span><br>
<span class="quotelev1">&gt; attched tarball. After these two command, mpic* commands seem to work.
</span><br>
<span class="quotelev1">&gt; [root_at_xblade08 wwh]# mpicc --showme
</span><br>
<span class="quotelev1">&gt; icc -I/usr/local/include -pthread -L/usr/local/lib -lmpi -lopen-rte -
</span><br>
<span class="quotelev1">&gt; lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil
</span><br>
<span class="quotelev1">&gt; [root_at_xblade08 wwh]# mpif77 --showme
</span><br>
<span class="quotelev1">&gt; ifort -I/usr/local/include -pthread -L/usr/local/lib -lmpi_f77 -lmpi
</span><br>
<span class="quotelev1">&gt; -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I used open mpi to compile lamtests 7.1.4, downloaded from
</span><br>
<a href="http://www.lam-mpi.org/7.1/test-suite.php">http://www.lam-mpi.org/7.1/test-suite.php</a>
<br>
<span class="quotelev1">&gt; . &quot;./configure CC=icc CXX=icpc FC=ifort F77=ifort&quot; failed with
</span><br>
<span class="quotelev1">&gt; following message:
</span><br>
<span class="quotelev1">&gt; [root_at_xblade08 lamtests-7.1.4]# ./configure CC=icc CXX=icpc FC=ifort
</span><br>
<span class="quotelev1">&gt; F77=ifort
</span><br>
<span class="quotelev1">&gt; Configuring LAM test suite version 7.1.4
</span><br>
<span class="quotelev1">&gt; checking for a BSD-compatible install... /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; checking whether build environment is sane... yes
</span><br>
<span class="quotelev1">&gt; checking for gawk... gawk
</span><br>
<span class="quotelev1">&gt; checking whether make sets $(MAKE)... yes
</span><br>
<span class="quotelev1">&gt; checking build system type... i686-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt; checking host system type... i686-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt; checking for mpicc... yes
</span><br>
<span class="quotelev1">&gt; checking for gcc... mpicc
</span><br>
<span class="quotelev1">&gt; checking for C compiler default output file name... a.out
</span><br>
<span class="quotelev1">&gt; checking whether the C compiler works... configure: error: cannot
</span><br>
<span class="quotelev1">&gt; run C compiled programs.
</span><br>
<span class="quotelev1">&gt; If you meant to cross compile, use `--host'.
</span><br>
<span class="quotelev1">&gt; See `config.log' for more details.
</span><br>
<span class="quotelev1">&gt; [root_at_xblade08 lamtests-7.1.4]# grep cannot config.log
</span><br>
<span class="quotelev1">&gt; ./a.out: error while loading shared libraries: libopen-rte.so.0:
</span><br>
<span class="quotelev1">&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; configure:2388: error: cannot run C compiled programs.
</span><br>
<span class="quotelev1">&gt; [root_at_xblade08 lamtests-7.1.4]# file /usr/local/lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libopen-rte.so.0: symbolic link to `libopen-rte.so.
</span><br>
<span class="quotelev1">&gt; 0.0.0'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (See attached file: mpilibs.tar.gz)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wen Hao Wang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;graycol.gif&gt;Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent by: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 2008-05-16 22:35
</span><br>
<span class="quotelev1">&gt; Please respond to
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; To
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; cc
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Compiler Choice in openmpi
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 15, 2008, at 12:58 PM, Wen Hao Wang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; After I run &quot;./configure CC=icc CXX=icpc FC=ifort F77=ifort&quot; and
</span><br>
<span class="quotelev2">&gt; &gt; &quot;make all install&quot;, some libs are installed to /usr/local/lib. These
</span><br>
<span class="quotelev2">&gt; &gt; libs can not be found when compiling my program, how should I do?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send all the information listed here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And also the output you're seeing when your application fails to
</span><br>
<span class="quotelev1">&gt; compile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mpilibs.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
--
Jeff Squyres
Cisco Systems
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<p>
<p><p>


<br><p>
<p><p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5685/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-5685/graycol.gif" alt="graycol.gif">
<!-- attachment="graycol.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-5685/pic03803.gif" alt="pic03803.gif">
<!-- attachment="pic03803.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-5685/ecblank.gif" alt="ecblank.gif">
<!-- attachment="ecblank.gif" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5685/config.log.lamtest.default">config.log.lamtest.default</a>
</ul>
<!-- attachment="config.log.lamtest.default" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5686.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<li><strong>Previous message:</strong> <a href="5684.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>In reply to:</strong> <a href="5682.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5686.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<li><strong>Reply:</strong> <a href="5686.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
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
