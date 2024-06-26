<?
$subject_val = "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 18 13:24:26 2014" -->
<!-- isoreceived="20140718172426" -->
<!-- sent="Fri, 18 Jul 2014 13:24:23 -0400" -->
<!-- isosent="20140718172423" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal" -->
<!-- id="CAMJJpkVM_wrArPGgfN-=zKVhHEF3M-9fC_igzAcj7CZ2U3uojw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="51396904-9E76-40E9-956A-E8B211A816C0_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-18 13:24:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15200.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15198.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15194.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15200.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15200.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1. If I remember correctly, this topic has already been raised in the
<br>
Forum. And the decision was to maintain the current behavior (tools and MPI
<br>
init/fini are independent/disconnected).
<br>
<p>2. Having to manually set a global flag in order to correctly finalize a
<br>
library is HORRIBLE by any reasonable CS standards.
<br>
<p>3. Let's not go in shadowy corners of the MPI_T usage, and stay mainstream.
<br>
Here is a partial snippet of the most usual way the tool interface is
<br>
supposed to be used.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_T_init_thread(MPI_THREAD_SINGLE, &amp;provided);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;With the proposed patch, we clean up all OPAL memory as soon as we reach
<br>
the MPI_Finalize (aka. without the call to MPI_T_finalize).  All MPI_T
<br>
calls after MPI_Finalize will trigger a segfault.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Thu, Jul 17, 2014 at 10:55 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; As I said, I don't know which solution is the one to follow - they both
</span><br>
<span class="quotelev1">&gt; have significant &quot;ick&quot; factors, though I wouldn't go so far as to
</span><br>
<span class="quotelev1">&gt; characterize either of them as &quot;horrible&quot;. Not being &quot;clean&quot; after calling
</span><br>
<span class="quotelev1">&gt; MPI_Finalize seems just as strange.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nathan and I did discuss the init-after-finalize issue, and he intends to
</span><br>
<span class="quotelev1">&gt; raise it with the Forum as it doesn't seem a logical thing to do. So that
</span><br>
<span class="quotelev1">&gt; issue may go away. Still leaves us pondering the right solution, and
</span><br>
<span class="quotelev1">&gt; hopefully coming up with something better than either of the ones we have
</span><br>
<span class="quotelev1">&gt; so far.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 17, 2014, at 7:48 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think Case #1 is only a partial solution, as it only solves the example
</span><br>
<span class="quotelev1">&gt; attached to the ticket. Based on my reading the the tool chapter calling
</span><br>
<span class="quotelev1">&gt; MPI_T_init after MPI_Finalize is legit, and this case is not covered by the
</span><br>
<span class="quotelev1">&gt; patch. But this is not the major issue I have with this patch. From a
</span><br>
<span class="quotelev1">&gt; coding perspective, it makes the initialization of OPAL horribly unnatural,
</span><br>
<span class="quotelev1">&gt; requiring any other layer using OPAL to make a horrible gymnastic just to
</span><br>
<span class="quotelev1">&gt; tear it down correctly (setting opal_init_util_init_extra to the right
</span><br>
<span class="quotelev1">&gt; value).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 16, 2014 at 11:29 AM, Pritchard, Howard r &lt;howardp_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HI Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I vote for solution #1.  Doesn't change current behavior.  Doesn't open
</span><br>
<span class="quotelev2">&gt;&gt; the door to becoming dependent on availability of
</span><br>
<span class="quotelev2">&gt;&gt; ctor/dtor feature in future toolchains.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Nathan Hjelm
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, July 16, 2014 9:08 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] RFC: Add an __attribute__((destructor))
</span><br>
<span class="quotelev2">&gt;&gt; function to opal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 16, 2014 at 07:59:14AM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I discussed this over IM with Nathan to try and get a better
</span><br>
<span class="quotelev2">&gt;&gt; understanding of the options. Basically, we have two approaches available
</span><br>
<span class="quotelev2">&gt;&gt; to us:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1. my solution resolves the segv problem and eliminates leaks so long
</span><br>
<span class="quotelev2">&gt;&gt; as the user calls MPI_Init/Finalize after calling the MPI_T init/finalize
</span><br>
<span class="quotelev2">&gt;&gt; functions. This method will still leak memory if the user doesn't use MPI
</span><br>
<span class="quotelev2">&gt;&gt; after calling the MPI_T functions, but does mean that all memory used by
</span><br>
<span class="quotelev2">&gt;&gt; MPI will be released upon MPI_Finalize. So if the user program continues
</span><br>
<span class="quotelev2">&gt;&gt; beyond MPI, they won't be carrying the MPI memory footprint with them. This
</span><br>
<span class="quotelev2">&gt;&gt; continues our current behavior.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2. the destructor method, which release the MPI memory footprint upon
</span><br>
<span class="quotelev2">&gt;&gt; final program termination instead of at MPI_Finalize. This also solves the
</span><br>
<span class="quotelev2">&gt;&gt; segv and leak problems, and ensures that someone calling only the MPI_T
</span><br>
<span class="quotelev2">&gt;&gt; init/finalize functions will be valgrind-clean, but means that a user
</span><br>
<span class="quotelev2">&gt;&gt; program that runs beyond MPI will carry the MPI memory footprint with them.
</span><br>
<span class="quotelev2">&gt;&gt; This is a change in our current behavior.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Correct. Though the only thing we will carry around until termination is
</span><br>
<span class="quotelev2">&gt;&gt; the memory associated with opal/mca/if, opal/mca/event, opal_net,
</span><br>
<span class="quotelev2">&gt;&gt; opal_malloc, opal_show_help, opal_output, opal_dss, opal_datatype, and
</span><br>
<span class="quotelev2">&gt;&gt; opal_class. Not sure how much memory this is.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15172.php">http://www.open-mpi.org/community/lists/devel/2014/07/15172.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15193.php">http://www.open-mpi.org/community/lists/devel/2014/07/15193.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15194.php">http://www.open-mpi.org/community/lists/devel/2014/07/15194.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15199/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15200.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15198.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15194.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15200.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15200.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
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
