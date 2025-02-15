<?
$subject_val = "Re: [OMPI devel] regression running mpi applications with dvm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 14:34:42 2015" -->
<!-- isoreceived="20150917183442" -->
<!-- sent="Thu, 17 Sep 2015 11:34:39 -0700" -->
<!-- isosent="20150917183439" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] regression running mpi applications with dvm" -->
<!-- id="CAMD57oeM9s74dF8q6NosRO3ZZvmuVmR0UjASdk1oz_Np9KLpRg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="8BC6DE35-EC9E-4337-BDC3-B426B1404CB7_at_rutgers.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] regression running mpi applications with dvm<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-17 14:34:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18066.php">Mark Santcroos: "Re: [OMPI devel] regression running mpi applications with dvm"</a>
<li><strong>Previous message:</strong> <a href="18064.php">Mark Santcroos: "[OMPI devel] regression running mpi applications with dvm"</a>
<li><strong>In reply to:</strong> <a href="18064.php">Mark Santcroos: "[OMPI devel] regression running mpi applications with dvm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18066.php">Mark Santcroos: "Re: [OMPI devel] regression running mpi applications with dvm"</a>
<li><strong>Reply:</strong> <a href="18066.php">Mark Santcroos: "Re: [OMPI devel] regression running mpi applications with dvm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ouch - this is on current master HEAD? I'm on travel right now, but I'll be
<br>
back Fri evening and can look at it this weekend. Probably something silly
<br>
that needs to be fixed.
<br>
<p><p>On Thu, Sep 17, 2015 at 11:30 AM, Mark Santcroos &lt;mark.santcroos_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Hi (Ralph),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Over the last months I have been focussing on exec throughput, and not so
</span><br>
<span class="quotelev1">&gt; much on the application payload (read: mainly using /bin/sleep ;-)
</span><br>
<span class="quotelev1">&gt; As things are stabilising now, I returned my attention to &quot;real&quot;
</span><br>
<span class="quotelev1">&gt; applications.
</span><br>
<span class="quotelev1">&gt; To discover that launching MPI applications (build with the same Open MPI
</span><br>
<span class="quotelev1">&gt; version) within a DVM doesn't work anymore (see error below).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been doing a binary search, but that turned out to be not so trivial
</span><br>
<span class="quotelev1">&gt; because of other problems in the window of the change.
</span><br>
<span class="quotelev1">&gt; So far I've narrowed it down to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 64ec498 - mar 5 - works on my laptop (but not on the Crays)
</span><br>
<span class="quotelev1">&gt; b67b361 - mar 28 - works once per DVM launch on my laptop, but consecutive
</span><br>
<span class="quotelev1">&gt; orte-submits get a connect error
</span><br>
<span class="quotelev1">&gt; b209c9e - March 30 - same MPI_Init issue as HEAD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Going further into mid-March I run into build issues with verb, runtime
</span><br>
<span class="quotelev1">&gt; issues with default binding complaining about missing libnumactl, runtime
</span><br>
<span class="quotelev1">&gt; tcp oob errors, etc.
</span><br>
<span class="quotelev1">&gt; So I don't know whether the binary search will yield much more than I was
</span><br>
<span class="quotelev1">&gt; able to dig up now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What can I do to get closer to debugging the actual issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_PREFIX=/Users/mark/proj/openmpi/installed/HEAD
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_orte_hnp_uri=723386368.0;usock;tcp://192.168.0.103:56672
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_ess=tool
</span><br>
<span class="quotelev1">&gt; [netbook:70703] Job [11038,3] has launched
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ompi_mpi_init: ompi_rte_init failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;(null)&quot; (-43) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [netbook:70704] Local abort before MPI_INIT completed completed
</span><br>
<span class="quotelev1">&gt; successfully, but am not able to aggregate error messages, and not able to
</span><br>
<span class="quotelev1">&gt; guarantee that all other processes were killed!
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18064.php">http://www.open-mpi.org/community/lists/devel/2015/09/18064.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18065/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18066.php">Mark Santcroos: "Re: [OMPI devel] regression running mpi applications with dvm"</a>
<li><strong>Previous message:</strong> <a href="18064.php">Mark Santcroos: "[OMPI devel] regression running mpi applications with dvm"</a>
<li><strong>In reply to:</strong> <a href="18064.php">Mark Santcroos: "[OMPI devel] regression running mpi applications with dvm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18066.php">Mark Santcroos: "Re: [OMPI devel] regression running mpi applications with dvm"</a>
<li><strong>Reply:</strong> <a href="18066.php">Mark Santcroos: "Re: [OMPI devel] regression running mpi applications with dvm"</a>
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
