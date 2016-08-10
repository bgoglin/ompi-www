<?
$subject_val = "Re: [OMPI devel] 1.10.3rc MTT failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 25 10:14:35 2016" -->
<!-- isoreceived="20160425141435" -->
<!-- sent="Mon, 25 Apr 2016 23:14:25 +0900" -->
<!-- isosent="20160425141425" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.3rc MTT failures" -->
<!-- id="CAAkFZ5sbiE5gVLga+ZfNTy4kESFp5B8HBtFsSzCUVRKej1EuQg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20160425140631.GD16742_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.3rc MTT failures<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-25 10:14:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18815.php">Ralph Castain: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>Previous message:</strong> <a href="18813.php">Adrian Reber: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>In reply to:</strong> <a href="18813.php">Adrian Reber: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18816.php">Josh Hursey: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>Reply:</strong> <a href="18816.php">Josh Hursey: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a known bug that is being discussed at
<br>
<a href="https://github.com/open-mpi/ompi/pull/1473/commits/0d1431f02c6b2876cdeee4fd783d6b6807dfff2a">https://github.com/open-mpi/ompi/pull/1473/commits/0d1431f02c6b2876cdeee4fd783d6b6807dfff2a</a>
<br>
it affects big endian machine or 8 bytes fortran integer
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Monday, April 25, 2016, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Errors like that (Win::Get_attr: Got wrong value for disp unit) are from
</span><br>
<span class="quotelev1">&gt; my ppc64 machine: <a href="https://mtt.open-mpi.org/index.php?do_redir=2295">https://mtt.open-mpi.org/index.php?do_redir=2295</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MTT setup is checking out the tests from github directly:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test get: ibm]
</span><br>
<span class="quotelev1">&gt; module = SCM
</span><br>
<span class="quotelev1">&gt; scm_module = Git
</span><br>
<span class="quotelev1">&gt; scm_url = <a href="https://github.com/open-mpi/ompi-tests.git">https://github.com/open-mpi/ompi-tests.git</a>
</span><br>
<span class="quotelev1">&gt; scm_subdir = ibm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure Ralph meant those errors. But they only happen on ppc64 and not
</span><br>
<span class="quotelev1">&gt; on x86_64 with a very similar mtt configuration file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Adrian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 25, 2016 at 10:50:03PM +0900, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Cisco mtt looks clean
</span><br>
<span class="quotelev2">&gt; &gt; since ompi_tests repo is private, it cannot be automatically pulled
</span><br>
<span class="quotelev1">&gt; unless
</span><br>
<span class="quotelev2">&gt; &gt; a password is saved (https) or a public key was uploaded to github (ssh)
</span><br>
<span class="quotelev2">&gt; &gt; for that reason, I would not simply assume the latest test suite is used
</span><br>
<span class="quotelev1">&gt; :-(
</span><br>
<span class="quotelev2">&gt; &gt; and fwiw, Jeff uses an internally mirrored repo for ompi-tests, so it
</span><br>
<span class="quotelev1">&gt; Cisco
</span><br>
<span class="quotelev2">&gt; &gt; clusters should use the latest test suites.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Geoffrey,
</span><br>
<span class="quotelev2">&gt; &gt; can you please comment on the config of the ibm cluster ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Monday, April 25, 2016, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden] &lt;javascript:;&gt;');&gt;&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I don&#226;&#128;&#153;t know - this isn&#226;&#128;&#153;t on my machine, but rather in the weekend and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; nightly MTT reports. I&#226;&#128;&#153;m assuming folks are running the latest test
</span><br>
<span class="quotelev1">&gt; suite,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; but...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Apr 25, 2016, at 6:20 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; gilles.gouaillardet_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ralph,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; can you make sure the ibm test suite is up to date ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I pushed a fix for datatypes a few days ago, and it should be fine now.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I will double check this tomorrow anyway
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Cheers,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Gilles
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Monday, April 25, 2016, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I&#226;&#128;&#153;m seeing some consistent errors in the 1.10.3rc MTT results and
</span><br>
<span class="quotelev1">&gt; would
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; appreciate it if folks could check them out:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ONESIDED:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; onesided/cxx_win_attr:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [**ERROR**]: MPI_COMM_WORLD rank 0, file cxx_win_attr.cc:50:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Win::Get_attr: Got wrong value for disp unit
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [**ERROR**]: MPI_COMM_WORLD rank 1, file cxx_win_attr.cc:50:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Win::Get_attr: Got wrong value for disp
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; DATATYPE:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; datatype/predefined-datatype-name
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI_LONG_LONG                    != MPI_LONG_LONG_INT
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; LOOP SPAWN:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; too many retries sending message to &lt;addr&gt;, giving up
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18809.php">http://www.open-mpi.org/community/lists/devel/2016/04/18809.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18810.php">http://www.open-mpi.org/community/lists/devel/2016/04/18810.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18812.php">http://www.open-mpi.org/community/lists/devel/2016/04/18812.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18813.php">http://www.open-mpi.org/community/lists/devel/2016/04/18813.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18814/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18815.php">Ralph Castain: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>Previous message:</strong> <a href="18813.php">Adrian Reber: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>In reply to:</strong> <a href="18813.php">Adrian Reber: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18816.php">Josh Hursey: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>Reply:</strong> <a href="18816.php">Josh Hursey: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
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