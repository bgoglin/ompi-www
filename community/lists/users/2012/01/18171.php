<?
$subject_val = "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 16 18:25:39 2012" -->
<!-- isoreceived="20120116232539" -->
<!-- sent="Mon, 16 Jan 2012 16:25:31 -0700" -->
<!-- isosent="20120116232531" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision" -->
<!-- id="9733691B-D7DC-4BA3-A484-9D2E8A3610F6_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAN7CqretgorVZyencQ1ATStVL2=ccUsLNOtEXo59KbA45gu=RA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-16 18:25:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18172.php">MM: "[OMPI users] localhost only"</a>
<li><strong>Previous message:</strong> <a href="18170.php">Andrew Senin: "[OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>In reply to:</strong> <a href="18170.php">Andrew Senin: "[OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18175.php">Ralph Castain: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Reply:</strong> <a href="18175.php">Ralph Castain: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmmm....probably a bug. I haven't tested that branch yet. Will take a look.
<br>
<p>Sent from my iPad
<br>
<p>On Jan 16, 2012, at 11:56 AM, Andrew Senin &lt;andrew.senin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think I've found a bug in the hear revision of the OpenMPI 1.5
</span><br>
<span class="quotelev1">&gt; branch. If it is configured with --disable-debug it crashes in
</span><br>
<span class="quotelev1">&gt; finalize on the hello_c.c example. Did I miss something out?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Configure options:
</span><br>
<span class="quotelev1">&gt; ./configure --with-pmi=/usr/ --with-slurm=/usr/ --without-psm
</span><br>
<span class="quotelev1">&gt; --disable-debug --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; --prefix=/hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Runtime command and output:
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=$LD_LIBRARY_PATH:../lib ./mpirun --mca btl openib,self
</span><br>
<span class="quotelev1">&gt; --npernode 1 --host mir1,mir2 ./hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 2
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 2
</span><br>
<span class="quotelev1">&gt; [mir1:05542] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [mir1:05542] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [mir1:05542] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [mir1:05542] Failing at address: 0xe8
</span><br>
<span class="quotelev1">&gt; [mir2:10218] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [mir2:10218] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [mir2:10218] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [mir2:10218] Failing at address: 0xe8
</span><br>
<span class="quotelev1">&gt; [mir1:05542] [ 0] /lib64/libpthread.so.0() [0x390d20f4c0]
</span><br>
<span class="quotelev1">&gt; [mir1:05542] [ 1]
</span><br>
<span class="quotelev1">&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(+0x1346a8)
</span><br>
<span class="quotelev1">&gt; [0x7f4588cee6a8]
</span><br>
<span class="quotelev1">&gt; [mir1:05542] [ 2]
</span><br>
<span class="quotelev1">&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(opal_hwloc_base_close+0x32)
</span><br>
<span class="quotelev1">&gt; [0x7f4588cee700]
</span><br>
<span class="quotelev1">&gt; [mir1:05542] [ 3]
</span><br>
<span class="quotelev1">&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(opal_finalize+0x73)
</span><br>
<span class="quotelev1">&gt; [0x7f4588d1beb2]
</span><br>
<span class="quotelev1">&gt; [mir1:05542] [ 4]
</span><br>
<span class="quotelev1">&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(orte_finalize+0xfe)
</span><br>
<span class="quotelev1">&gt; [0x7f4588c81eb5]
</span><br>
<span class="quotelev1">&gt; [mir1:05542] [ 5]
</span><br>
<span class="quotelev1">&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(ompi_mpi_finalize+0x67a)
</span><br>
<span class="quotelev1">&gt; [0x7f4588c217c3]
</span><br>
<span class="quotelev1">&gt; [mir1:05542] [ 6]
</span><br>
<span class="quotelev1">&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(PMPI_Finalize+0x59)
</span><br>
<span class="quotelev1">&gt; [0x7f4588c39959]
</span><br>
<span class="quotelev1">&gt; [mir1:05542] [ 7] ./hello(main+0x69) [0x4008fd]
</span><br>
<span class="quotelev1">&gt; [mir1:05542] [ 8] /lib64/libc.so.6(__libc_start_main+0xfd) [0x390ca1ec5d]
</span><br>
<span class="quotelev1">&gt; [mir1:05542] [ 9] ./hello() [0x4007d9]
</span><br>
<span class="quotelev1">&gt; [mir1:05542] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [mir2:10218] [ 0] /lib64/libpthread.so.0() [0x3a6dc0f4c0]
</span><br>
<span class="quotelev1">&gt; [mir2:10218] [ 1]
</span><br>
<span class="quotelev1">&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(+0x1346a8)
</span><br>
<span class="quotelev1">&gt; [0x7f409f31d6a8]
</span><br>
<span class="quotelev1">&gt; [mir2:10218] [ 2]
</span><br>
<span class="quotelev1">&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(opal_hwloc_base_close+0x32)
</span><br>
<span class="quotelev1">&gt; [0x7f409f31d700]
</span><br>
<span class="quotelev1">&gt; [mir2:10218] [ 3]
</span><br>
<span class="quotelev1">&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(opal_finalize+0x73)
</span><br>
<span class="quotelev1">&gt; [0x7f409f34aeb2]
</span><br>
<span class="quotelev1">&gt; [mir2:10218] [ 4]
</span><br>
<span class="quotelev1">&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(orte_finalize+0xfe)
</span><br>
<span class="quotelev1">&gt; [0x7f409f2b0eb5]
</span><br>
<span class="quotelev1">&gt; [mir2:10218] [ 5]
</span><br>
<span class="quotelev1">&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(ompi_mpi_finalize+0x67a)
</span><br>
<span class="quotelev1">&gt; [0x7f409f2507c3]
</span><br>
<span class="quotelev1">&gt; [mir2:10218] [ 6]
</span><br>
<span class="quotelev1">&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(PMPI_Finalize+0x59)
</span><br>
<span class="quotelev1">&gt; [0x7f409f268959]
</span><br>
<span class="quotelev1">&gt; [mir2:10218] [ 7] ./hello(main+0x69) [0x4008fd]
</span><br>
<span class="quotelev1">&gt; [mir2:10218] [ 8] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3a6d41ec5d]
</span><br>
<span class="quotelev1">&gt; [mir2:10218] [ 9] ./hello() [0x4007d9]
</span><br>
<span class="quotelev1">&gt; [mir2:10218] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 5542 on node mir1 exited
</span><br>
<span class="quotelev1">&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Andrew Senin
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18172.php">MM: "[OMPI users] localhost only"</a>
<li><strong>Previous message:</strong> <a href="18170.php">Andrew Senin: "[OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>In reply to:</strong> <a href="18170.php">Andrew Senin: "[OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18175.php">Ralph Castain: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Reply:</strong> <a href="18175.php">Ralph Castain: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
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
