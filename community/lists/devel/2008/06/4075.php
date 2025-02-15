<?
$subject_val = "[OMPI devel]  SM BTL NUMA awareness patches";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  3 07:39:09 2008" -->
<!-- isoreceived="20080603113909" -->
<!-- sent="Tue, 3 Jun 2008 14:38:59 +0300" -->
<!-- isosent="20080603113859" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="[OMPI devel]  SM BTL NUMA awareness patches" -->
<!-- id="453d39990806030438l281531a3qa38e7ed59c0d0e61_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080528131727.GO4014_at_minantech.com" -->
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
<strong>Subject:</strong> [OMPI devel]  SM BTL NUMA awareness patches<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-03 07:38:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4076.php">Pavel Shamis (Pasha): "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<li><strong>Previous message:</strong> <a href="4074.php">Pavel Shamis (Pasha): "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/05/4055.php">Gleb Natapov: "[OMPI devel] SM BTL NUMA awareness patches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4115.php">Lenny Verkhovsky: "[OMPI devel] Fwd:  SM BTL NUMA awareness patches"</a>
<li><strong>Reply:</strong> <a href="4115.php">Lenny Verkhovsky: "[OMPI devel] Fwd:  SM BTL NUMA awareness patches"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, all,
<br>
If there are no comments for this patch
<br>
I can commit it.
<br>
<p>Lenny.
<br>
<p>---------- Forwarded message ----------
<br>
From: Gleb Natapov &lt;glebn_at_[hidden]&gt;
<br>
Date: 2008/5/28
<br>
Subject: [OMPI devel] SM BTL NUMA awareness patches
<br>
To: devel_at_[hidden]
<br>
<p><p>Hi,
<br>
<p>Attached two patches implement NUMA awareness in SM BTL. The first one
<br>
adds two new functions to maffinity framework required by the second
<br>
patch. The functions are:
<br>
<p>&nbsp;opal_maffinity_base_node_name_to_id() - gets a string that represents a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memory node name and translates
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;it to memory node id.
<br>
&nbsp;opal_maffinity_base_bind()            - binds an address range to specific
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memory node.
<br>
<p>The bind() function cannot be implemented by all maffinity components.
<br>
(There is no way first_use maffinity component can implement such
<br>
functionality). In this case this function can be set to NULL.
<br>
<p>The second one adds NUMA awareness support to SM BTL and SM MPOOL. Each
<br>
process determines what CPU it is running on and exchange this info with
<br>
other local processes. Each process creates separate MPOOL for every
<br>
memory node available and use them to allocate memory on specific memory
<br>
nodes if needed. For instance circular buffer memory is always allocated
<br>
on memory node local to receiver process.
<br>
<p>To use this on a Linux machine carto file with HW topology description
<br>
should
<br>
be provided. Processes should be bound to specific CPU (by specifying
<br>
rank file for instance) and session directory should be created on tmpfs
<br>
file system (otherwise Linux ignores memory binding commands) by
<br>
setting orte_tmpdir_base parameter to point to tmpfs mount point.
<br>
<p>Questions and suggestion are alway welcome.
<br>
<p><pre>
--
                       Gleb.
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4075/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4075/maffinity.diff">maffinity.diff</a>
</ul>
<!-- attachment="maffinity.diff" -->
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4075/sm_btl_memory_affinity.diff">sm_btl_memory_affinity.diff</a>
</ul>
<!-- attachment="sm_btl_memory_affinity.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4076.php">Pavel Shamis (Pasha): "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<li><strong>Previous message:</strong> <a href="4074.php">Pavel Shamis (Pasha): "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/05/4055.php">Gleb Natapov: "[OMPI devel] SM BTL NUMA awareness patches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4115.php">Lenny Verkhovsky: "[OMPI devel] Fwd:  SM BTL NUMA awareness patches"</a>
<li><strong>Reply:</strong> <a href="4115.php">Lenny Verkhovsky: "[OMPI devel] Fwd:  SM BTL NUMA awareness patches"</a>
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
