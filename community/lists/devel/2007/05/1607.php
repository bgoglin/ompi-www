<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 29 13:44:32 2007" -->
<!-- isoreceived="20070529174432" -->
<!-- sent="Tue, 29 May 2007 11:44:26 -0600" -->
<!-- isosent="20070529174426" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ORTE registry patch" -->
<!-- id="C281C29A.2E41%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1FC6363E-B97A-450A-8257-56FE609A00FD_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-29 13:44:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1608.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14789"</a>
<li><strong>Previous message:</strong> <a href="1606.php">Tim Prins: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>In reply to:</strong> <a href="1606.php">Tim Prins: "Re: [OMPI devel] ORTE registry patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1612.php">Ralph Castain: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>Reply:</strong> <a href="1612.php">Ralph Castain: "Re: [OMPI devel] ORTE registry patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/29/07 11:02 AM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Well, after fixing many of the tests...
</span><br>
<p>Interesting - they worked fine for me. Perhaps a difference in environment.
<br>
<p><span class="quotelev1">&gt; It passes all the tests
</span><br>
<span class="quotelev1">&gt; except the spawn tests. However, the spawn tests are seriously broken
</span><br>
<span class="quotelev1">&gt; without this patch as well, and the ibm mpi spawn tests seem to work
</span><br>
<span class="quotelev1">&gt; fine.
</span><br>
<p>Then something is seriously wrong. The spawn tests were working as of my
<br>
last commit - that is a test I religiously run. If the spawn test here
<br>
doesn't work, then it is hard to understand how the mpi spawn can work since
<br>
the call is identical.
<br>
<p>Let me see what's wrong first...
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I'm concerned, this should assuage any fear of problems
</span><br>
<span class="quotelev1">&gt; with these changes and they should now go in.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 29, 2007, at 11:34 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Well, I'll be the voice of caution again...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tim: did you run all of the orte tests in the orte/test/system
</span><br>
<span class="quotelev2">&gt;&gt; directory? If
</span><br>
<span class="quotelev2">&gt;&gt; so, and they all run correctly, then I have no issue with doing the
</span><br>
<span class="quotelev2">&gt;&gt; commit.
</span><br>
<span class="quotelev2">&gt;&gt; If not, then I would ask that we not do the commit until that has
</span><br>
<span class="quotelev2">&gt;&gt; been done.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In running those tests, you need to run them on a multi-node
</span><br>
<span class="quotelev2">&gt;&gt; system, both
</span><br>
<span class="quotelev2">&gt;&gt; using mpirun and as singletons (you'll have to look at the tests to
</span><br>
<span class="quotelev2">&gt;&gt; see
</span><br>
<span class="quotelev2">&gt;&gt; which ones make sense in the latter case). This will ensure that we
</span><br>
<span class="quotelev2">&gt;&gt; have at
</span><br>
<span class="quotelev2">&gt;&gt; least some degree of coverage.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 5/29/07 9:23 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd be happy to commit the patch into the trunk. But after what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happened last time, I'm more than cautious. If the community think
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the patch is worth having it, let me know and I'll push it in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk asap.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 29, 2007, at 10:56 AM, Tim Prins wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think both patches should be put in immediately. I have done some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; simple testing, and with 128 nodes of odin, with 1024 processes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; running mpi hello, these decrease our running time from about 14.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; seconds to 10.9 seconds. This is a significant decrease, and as the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scale increases there should be increasing benefit.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'd be happy to commit these changes if no one objects.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 24, 2007, at 8:39 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks - I'll take a look at this (and the prior ones!) in the next
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; couple
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of weeks when time permits and get back to you.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 5/23/07 1:11 PM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Attached is another patch to the ORTE layer, more specifically the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; replica. The idea is to decrease the number of strcmp by using a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; small hash function before doing the strcmp. The hask key for each
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; registry entry is computed when it is added to the registry. When
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; we're doing a query, instead of comparing the 2 strings we first
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; check if the hash key match, and if they do match then we compare
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2 strings in order to make sure we eliminate collisions from our
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; answers.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; There is some benefit in terms of performance. It's hardly visible
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; for few processes, but it start showing up when the number of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; processes increase. In fact the number of strcmp in the trace file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; drastically decrease. The main reason it works well, is because
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; most
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of the keys start with basically the same chars (such as orte-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; blahblah) which transform the strcmp on a loop over few chars.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph, please consider it for inclusion on the ORTE layer.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      george.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1608.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14789"</a>
<li><strong>Previous message:</strong> <a href="1606.php">Tim Prins: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>In reply to:</strong> <a href="1606.php">Tim Prins: "Re: [OMPI devel] ORTE registry patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1612.php">Ralph Castain: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>Reply:</strong> <a href="1612.php">Ralph Castain: "Re: [OMPI devel] ORTE registry patch"</a>
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
