<?
$subject_val = "Re: [OMPI users] CUDA RDMA not selected by default";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 19 16:15:49 2012" -->
<!-- isoreceived="20120319201549" -->
<!-- sent="Mon, 19 Mar 2012 14:15:45 -0600 (MDT)" -->
<!-- isosent="20120319201545" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CUDA RDMA not selected by default" -->
<!-- id="alpine.OSX.2.00.1203191414240.81297_at_panthera.lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="362BCC5D-CCAB-4540-9504-99BFFD8843F2_at_umn.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] CUDA RDMA not selected by default<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-19 16:15:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18802.php">Jeffrey Squyres: "Re: [OMPI users] CUDA RDMA not selected by default"</a>
<li><strong>Previous message:</strong> <a href="18800.php">Jens Glaser: "[OMPI users] CUDA RDMA not selected by default"</a>
<li><strong>In reply to:</strong> <a href="18800.php">Jens Glaser: "[OMPI users] CUDA RDMA not selected by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18802.php">Jeffrey Squyres: "Re: [OMPI users] CUDA RDMA not selected by default"</a>
<li><strong>Reply:</strong> <a href="18802.php">Jeffrey Squyres: "Re: [OMPI users] CUDA RDMA not selected by default"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The selection of cm is not wrong per se. You will find that the psm mtl is much better than the openib btl for QLogic harware.
<br>
<p>-Nathan
<br>
<p>On Mon, 19 Mar 2012, Jens Glaser wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using the latest trunk version of OMPI, in order to take advantage of the new CUDA RDMA features (smcuda BTL). RDMA support is superb, however, I have to give a manual parameter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca pml ob1 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to have the OB1 upper layer selected and, consequently, to get smcuda activated. Otherwise mpirun chooses the cm upper layer, which is wrong. The hardware is a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; InfiniBand: QLogic Corp. IBA7322 QDR InfiniBand HCA (rev 02).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the output of
</span><br>
<span class="quotelev1">&gt; mpirun - mca pml_base_verbose 100
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cas002:05518] select: component cm selected
</span><br>
<span class="quotelev1">&gt; [cas002:05518] mca: base: close: component v closed
</span><br>
<span class="quotelev1">&gt; [cas002:05518] mca: base: close: unloading component v
</span><br>
<span class="quotelev1">&gt; [cas002:05518] mca: base: close: component bfo closed
</span><br>
<span class="quotelev1">&gt; [cas002:05518] mca: base: close: unloading component bfo
</span><br>
<span class="quotelev1">&gt; [cas002:05518] mca: base: close: component csum closed
</span><br>
<span class="quotelev1">&gt; [cas002:05518] mca: base: close: unloading component csum
</span><br>
<span class="quotelev1">&gt; [cas002:05518] mca: base: close: component dr closed
</span><br>
<span class="quotelev1">&gt; [cas002:05518] mca: base: close: unloading component dr
</span><br>
<span class="quotelev1">&gt; [cas002:05518] mca: base: close: component ob1 closed
</span><br>
<span class="quotelev1">&gt; [cas002:05518] mca: base: close: unloading component ob1
</span><br>
<span class="quotelev1">&gt; [cas002:05520] mca: base: components_open: component cm open function successful
</span><br>
<span class="quotelev1">&gt; [cas002:05520] mca: base: components_open: found loaded component csum
</span><br>
<span class="quotelev1">&gt; [cas002:05520] mca: base: components_open: component csum has no register function
</span><br>
<span class="quotelev1">&gt; [cas002:05520] mca: base: components_open: component csum open function successful
</span><br>
<span class="quotelev1">&gt; [cas002:05520] mca: base: components_open: found loaded component dr
</span><br>
<span class="quotelev1">&gt; [cas002:05520] mca: base: components_open: component dr has no register function
</span><br>
<span class="quotelev1">&gt; [cas002:05520] mca: base: components_open: component dr open function successful
</span><br>
<span class="quotelev1">&gt; [cas002:05520] mca: base: components_open: found loaded component ob1
</span><br>
<span class="quotelev1">&gt; [cas002:05520] mca: base: components_open: component ob1 has no register function
</span><br>
<span class="quotelev1">&gt; [cas002:05520] mca: base: components_open: component ob1 open function successful
</span><br>
<span class="quotelev1">&gt; [cas002:05520] select: component v not in the include list
</span><br>
<span class="quotelev1">&gt; [cas002:05520] select: component bfo not in the include list
</span><br>
<span class="quotelev1">&gt; [cas002:05520] select: initializing pml component cm
</span><br>
<span class="quotelev1">&gt; [cas002:05520] select: init returned priority 30
</span><br>
<span class="quotelev1">&gt; [cas002:05520] select: component csum not in the include list
</span><br>
<span class="quotelev1">&gt; [cas002:05520] select: component dr not in the include list
</span><br>
<span class="quotelev1">&gt; [cas002:05520] select: initializing pml component ob1
</span><br>
<span class="quotelev1">&gt; [cas002:05520] select: init returned failure for component ob1
</span><br>
<span class="quotelev1">&gt; [cas002:05520] selected cm best priority 30
</span><br>
<span class="quotelev1">&gt; [cas002:05520] select: component cm selected
</span><br>
<span class="quotelev1">&gt; [cas002:05520] mca: base: close: component v closed
</span><br>
<span class="quotelev1">&gt; [cas002:05520] mca: base: close: unloading component v
</span><br>
<span class="quotelev1">&gt; [cas002:05520] mca: base: close: component bfo closed
</span><br>
<span class="quotelev1">&gt; [cas002:05520] mca: base: close: unloading component bfo
</span><br>
<span class="quotelev1">&gt; [cas002:05520] mca: base: close: component csum closed
</span><br>
<span class="quotelev1">&gt; [cas002:05520] mca: base: close: unloading component csum
</span><br>
<span class="quotelev1">&gt; [cas002:05520] mca: base: close: component dr closed
</span><br>
<span class="quotelev1">&gt; [cas002:05520] mca: base: close: unloading component dr
</span><br>
<span class="quotelev1">&gt; [cas002:05520] mca: base: close: component ob1 closed
</span><br>
<span class="quotelev1">&gt; [cas002:05520] mca: base: close: unloading component ob1
</span><br>
<span class="quotelev1">&gt; [cas002:05518] check:select: checking my pml cm against rank=0 pml cm
</span><br>
<span class="quotelev1">&gt; [cas002:05517] check:select: rank=0
</span><br>
<span class="quotelev1">&gt; [cas002:05520] check:select: checking my pml cm against rank=0 pml cm
</span><br>
<span class="quotelev1">&gt; [cas002:05519] check:select: checking my pml cm against rank=0 pml cm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configure options:
</span><br>
<span class="quotelev1">&gt; ./configure --with-openib --with-cuda --prefix=/home/it1/glaser/local --with-tm=/opt/torque --enable-shared
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have any idea what causes openmpi to select cm by default?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jens.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18802.php">Jeffrey Squyres: "Re: [OMPI users] CUDA RDMA not selected by default"</a>
<li><strong>Previous message:</strong> <a href="18800.php">Jens Glaser: "[OMPI users] CUDA RDMA not selected by default"</a>
<li><strong>In reply to:</strong> <a href="18800.php">Jens Glaser: "[OMPI users] CUDA RDMA not selected by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18802.php">Jeffrey Squyres: "Re: [OMPI users] CUDA RDMA not selected by default"</a>
<li><strong>Reply:</strong> <a href="18802.php">Jeffrey Squyres: "Re: [OMPI users] CUDA RDMA not selected by default"</a>
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
