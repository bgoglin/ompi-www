<?
$subject_val = "Re: [OMPI users] No core dump in some cases";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 11 03:37:51 2016" -->
<!-- isoreceived="20160511073751" -->
<!-- sent="Wed, 11 May 2016 16:37:50 +0900" -->
<!-- isosent="20160511073750" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] No core dump in some cases" -->
<!-- id="CAAkFZ5uaAj-McnRnNzjh0VNy0mPU-6XQgG1sEMok8VYEXVUyhA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHXxYDgD_L04WbN=D4pfWXPZk9-EJiaru0C21jDapcZqWq6B_g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] No core dump in some cases<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-11 03:37:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29171.php">Ilias Miroslav: "Re: [OMPI users] 'AINT' undeclared"</a>
<li><strong>Previous message:</strong> <a href="29169.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>In reply to:</strong> <a href="29169.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29176.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29176.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Durga,
<br>
<p>you might wanna try to restore the signal handler for other signals as well
<br>
(SIGSEGV, SIGBUS, ...)
<br>
ompi_info --all | grep opal_signal
<br>
does list the signal you should restore the handler
<br>
<p><p>only one backtrace component is built (out of several candidates :
<br>
execinfo, none, printstack)
<br>
nm -l libopen-pal.so | grep backtrace
<br>
will hint you which component was built
<br>
<p>your two similar distros might have different backtrace component
<br>
<p><p><p>Gus,
<br>
<p>btr is a plain text file with a back trace &quot;ala&quot; gdb
<br>
<p><p><p>Nathan,
<br>
<p>i did a 'grep btr' and could not find anything :-(
<br>
opal_backtrace_buffer and opal_backtrace_print are only used with stderr.
<br>
so i am puzzled who creates the tracefile name and where ...
<br>
also, no stack is printed by default unless opal_abort_print_stack is true
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On Wed, May 11, 2016 at 3:43 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your response. Could you please be more specific? Adding the
</span><br>
<span class="quotelev1">&gt; following after MPI_Init() does not seem to make a difference.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   signal(SIGABRT, SIG_DFL);
</span><br>
<span class="quotelev1">&gt;   signal(SIGTERM, SIG_DFL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also find it puzzling that nearly identical OMPI distro running on a
</span><br>
<span class="quotelev1">&gt; different machine shows different behaviour.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The surgeon general advises you to eat right, exercise regularly and quit
</span><br>
<span class="quotelev1">&gt; ageing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, May 10, 2016 at 10:02 AM, Hjelm, Nathan Thomas &lt;hjelmn_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btr files are indeed created by open mpi's backtrace mechanism. I think we
</span><br>
<span class="quotelev2">&gt;&gt; should revisit it at some point but for now the only effective way i have
</span><br>
<span class="quotelev2">&gt;&gt; found to prevent it is to restore the default signal handlers after
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Excuse the quoting style. Good sucks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: users on behalf of dpchoudh .
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, May 09, 2016 2:59:37 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] No core dump in some cases
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gus
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your suggestion. But I am not using any resource manager (i.e.
</span><br>
<span class="quotelev2">&gt;&gt; I am launching mpirun from the bash shell.). In fact, both of the two
</span><br>
<span class="quotelev2">&gt;&gt; clusters I talked about run CentOS 7 and I launch the job the same way on
</span><br>
<span class="quotelev2">&gt;&gt; both of these, yet one of them creates standard core files and the other
</span><br>
<span class="quotelev2">&gt;&gt; creates the 'btr; files. Strange thing is, I could not find anything on the
</span><br>
<span class="quotelev2">&gt;&gt; .btr (= Backtrace?) files on Google, which is any I asked on this forum.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The surgeon general advises you to eat right, exercise regularly and quit
</span><br>
<span class="quotelev2">&gt;&gt; ageing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, May 9, 2016 at 12:04 PM, Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; &lt;gus_at_[hidden]&lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just in case ...
</span><br>
<span class="quotelev2">&gt;&gt; If you're using a resource manager to start the jobs (Torque, etc),
</span><br>
<span class="quotelev2">&gt;&gt; you need to have them set the limits (for coredump size, stacksize, locked
</span><br>
<span class="quotelev2">&gt;&gt; memory size, etc).
</span><br>
<span class="quotelev2">&gt;&gt; This way the jobs will inherit the limits from the
</span><br>
<span class="quotelev2">&gt;&gt; resource manager daemon.
</span><br>
<span class="quotelev2">&gt;&gt; On Torque (which I use) I do this on the pbs_mom daemon
</span><br>
<span class="quotelev2">&gt;&gt; init script (I am still before the systemd era, that lovely POS).
</span><br>
<span class="quotelev2">&gt;&gt; And set the hard/soft limits on /etc/security/limits.conf as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 05/07/2016 12:27 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid I don't know what a .btr file is -- that is not something that
</span><br>
<span class="quotelev2">&gt;&gt; is controlled by Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You might want to look into your OS settings to see if it has some kind of
</span><br>
<span class="quotelev2">&gt;&gt; alternate corefile mechanism...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 6, 2016, at 8:58 PM, dpchoudh .
</span><br>
<span class="quotelev2">&gt;&gt; &lt;dpchoudh_at_[hidden]&lt;mailto:dpchoudh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I run MPI jobs (for test purpose only) on two different 'clusters'. Both
</span><br>
<span class="quotelev2">&gt;&gt; 'clusters' have two nodes only, connected back-to-back. The two are very
</span><br>
<span class="quotelev2">&gt;&gt; similar, but not identical, both software and hardware wise.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Both have ulimit -c set to unlimited. However, only one of the two creates
</span><br>
<span class="quotelev2">&gt;&gt; core files when an MPI job crashes. The other creates a text file named
</span><br>
<span class="quotelev2">&gt;&gt; something like
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;program_name_that_crashed&gt;.80s-&lt;a-number-that-looks-like-a-PID&gt;,&lt;hostname-where-the-crash-happened&gt;.btr
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd much prefer a core file because that allows me to debug with a lot
</span><br>
<span class="quotelev2">&gt;&gt; more options than a static text file with addresses. How do I get a core
</span><br>
<span class="quotelev2">&gt;&gt; file in all situations? I am using MPI source from the master branch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The surgeon general advises you to eat right, exercise regularly and quit
</span><br>
<span class="quotelev2">&gt;&gt; ageing.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29124.php">http://www.open-mpi.org/community/lists/users/2016/05/29124.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29141.php">http://www.open-mpi.org/community/lists/users/2016/05/29141.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29154.php">http://www.open-mpi.org/community/lists/users/2016/05/29154.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29169.php">http://www.open-mpi.org/community/lists/users/2016/05/29169.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29171.php">Ilias Miroslav: "Re: [OMPI users] 'AINT' undeclared"</a>
<li><strong>Previous message:</strong> <a href="29169.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>In reply to:</strong> <a href="29169.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29176.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29176.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
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
