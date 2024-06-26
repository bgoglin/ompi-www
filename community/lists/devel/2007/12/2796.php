<?
$subject_val = "Re: [OMPI devel] matching code rewrite in OB1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 16:14:30 2007" -->
<!-- isoreceived="20071211211430" -->
<!-- sent="Tue, 11 Dec 2007 16:14:13 -0500" -->
<!-- isosent="20071211211413" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] matching code rewrite in OB1" -->
<!-- id="C38467D5.11D21%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071211164728.GJ3360_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] matching code rewrite in OB1<br>
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-11 16:14:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2797.php">Jon Mason: "[OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<li><strong>Previous message:</strong> <a href="2795.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2794.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2815.php">Jeff Squyres: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2815.php">Jeff Squyres: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will re-iterate my concern.  The code that is there now is mostly nine
<br>
years old (with some mods made when it was brought over to Open MPI).  It
<br>
took about 2 months of testing on systems with 5-13 way network parallelism
<br>
to track down all KNOWN race conditions.  This code is at the center of MPI
<br>
correctness, so I am VERY concerned about changing it w/o some very strong
<br>
reasons.  Not apposed, just very cautious.
<br>
<p>Rich
<br>
<p><p>On 12/11/07 11:47 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Dec 11, 2007 at 08:36:42AM -0800, Andrew Friedley wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Possibly, though I have results from a benchmark I've written indicating
</span><br>
<span class="quotelev2">&gt;&gt; the reordering happens at the sender.  I believe I found it was due to
</span><br>
<span class="quotelev2">&gt;&gt; the QP striping trick I use to get more bandwidth -- if you back down to
</span><br>
<span class="quotelev2">&gt;&gt; one QP (there's a define in the code you can change), the reordering
</span><br>
<span class="quotelev2">&gt;&gt; rate drops.
</span><br>
<span class="quotelev1">&gt; Ah, OK. My assumption was just from looking into code, so I may be
</span><br>
<span class="quotelev1">&gt; wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also I do not make any recursive calls to progress -- at least not
</span><br>
<span class="quotelev2">&gt;&gt; directly in the BTL; I can't speak for the upper layers.  The reason I
</span><br>
<span class="quotelev2">&gt;&gt; do many completions at once is that it is a big help in turning around
</span><br>
<span class="quotelev2">&gt;&gt; receive buffers, making it harder to run out of buffers and drop frags.
</span><br>
<span class="quotelev2">&gt;&gt;   I want to say there was some performance benefit as well but I can't
</span><br>
<span class="quotelev2">&gt;&gt; say for sure.
</span><br>
<span class="quotelev1">&gt; Currently upper layers of Open MPI may call BTL progress function
</span><br>
<span class="quotelev1">&gt; recursively. I hope this will change some day.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Andrew
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gleb Natapov wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Dec 11, 2007 at 08:03:52AM -0800, Andrew Friedley wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Try UD, frags are reordered at a very high rate so should be a good test.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Good Idea I'll try this. BTW I thing the reason for such a high rate of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reordering in UD is that it polls for MCA_BTL_UD_NUM_WC completions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (500) and process them one by one and if progress function is called
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recursively next 500 completion will be reordered versus previous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; completions (reordering happens on a receiver, not sender).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Andrew
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gleb,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   I would suggest that before this is checked in this be tested on a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; system
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that has N-way network parallelism, where N is as large as you can find.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is a key bit of code for MPI correctness, and out-of-order operations
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; will break it, so you want to maximize the chance for such operations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 12/11/07 10:54 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    I did a rewrite of matching code in OB1. I made it much simpler and 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; times smaller (which is good, less code - less bugs). I also got rid
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of huge macros - very helpful if you need to debug something. There
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; is no performance degradation, actually I even see very small performance
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; improvement. I ran MTT with this patch and the result is the same as on
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; trunk. I would like to commit this to the trunk. The patch is attached
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; for everybody to try.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Gleb.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gleb.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2797.php">Jon Mason: "[OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<li><strong>Previous message:</strong> <a href="2795.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2794.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2815.php">Jeff Squyres: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2815.php">Jeff Squyres: "Re: [OMPI devel] matching code rewrite in OB1"</a>
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
