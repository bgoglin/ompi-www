<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 14:44:21 2007" -->
<!-- isoreceived="20070710184421" -->
<!-- sent="Tue, 10 Jul 2007 14:44:04 -0400" -->
<!-- isosent="20070710184404" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] warning:regcache incompatible with malloc" -->
<!-- id="186DDA1C-0826-4530-BA9D-A73FD0D2E4B3_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45D909C1-37DF-4E03-B1A4-46256F476A0B_at_lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 14:44:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3626.php">Brian Barrett: "Re: [OMPI users] Connection to HNP lost"</a>
<li><strong>Previous message:</strong> <a href="3624.php">Brian Barrett: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>In reply to:</strong> <a href="3624.php">Brian Barrett: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3627.php">Tim Prins: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Reply:</strong> <a href="3627.php">Tim Prins: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I always use MX_RCACHE=2 for both MTL and BTL. So far I didn't had  
<br>
any problems with it.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 10, 2007, at 2:37 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 10, 2007, at 11:40 AM, Scott Atchley wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 10, 2007, at 1:14 PM, Christopher D. Maestas wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Has anyone seen the following message with Open MPI:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning:regcache incompatible with malloc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We don't see this message with mpich-mx-1.2.7..4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MX has an internal registration cache that can be enabled with
</span><br>
<span class="quotelev2">&gt;&gt; MX_RCACHE=1 or disabled with MX_RCACHE=0 (the default before MX-1.2.1
</span><br>
<span class="quotelev2">&gt;&gt; was off, and starting with 1.2.1 the default is on). If it is on, MX
</span><br>
<span class="quotelev2">&gt;&gt; checks to see if the application is trying to override malloc() and
</span><br>
<span class="quotelev2">&gt;&gt; other memory handling functions. If so, it prints the error that you
</span><br>
<span class="quotelev2">&gt;&gt; are seeing and fails to use the registration cache.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI can use the regcache if you set MX_RCACHE=2. This tells MX
</span><br>
<span class="quotelev2">&gt;&gt; to skip the malloc() check and use the cache regardless. In the case
</span><br>
<span class="quotelev2">&gt;&gt; of Open MPI, this is believed to be safe. That will not be true for
</span><br>
<span class="quotelev2">&gt;&gt; all applications.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPICH-MX does not manage memory, so MX_RCACHE=1 is safe to use unless
</span><br>
<span class="quotelev2">&gt;&gt; the user's application manages memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm having trouble getting the warning to go away with Open MPI.
</span><br>
<span class="quotelev1">&gt; I've disabled our copy of ptmalloc2, so we're not providing a malloc
</span><br>
<span class="quotelev1">&gt; anymore.  I'm wondering if there's also something with the use of
</span><br>
<span class="quotelev1">&gt; DSOs to load libmyriexpress?  Is your belief that MX_RCACHE=2 is safe
</span><br>
<span class="quotelev1">&gt; just for the BTL or for the MTL as well?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;    Networking Team, CCS-1
</span><br>
<span class="quotelev1">&gt;    Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3626.php">Brian Barrett: "Re: [OMPI users] Connection to HNP lost"</a>
<li><strong>Previous message:</strong> <a href="3624.php">Brian Barrett: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>In reply to:</strong> <a href="3624.php">Brian Barrett: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3627.php">Tim Prins: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Reply:</strong> <a href="3627.php">Tim Prins: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
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
