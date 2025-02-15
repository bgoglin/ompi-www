<?
$subject_val = "Re: [OMPI users] SIGSEV when running OMPI Java binding";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 01:33:55 2014" -->
<!-- isoreceived="20140311053355" -->
<!-- sent="Tue, 11 Mar 2014 01:33:54 -0400" -->
<!-- isosent="20140311053354" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGSEV when running OMPI Java binding" -->
<!-- id="CA+ssbKWnjEy0nytxTqFcBHdAyf7Axre5pH1-xrOBpu0Ei+B-BQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="25AAE7E4-E2E5-4CE3-BB75-996D01949AE7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SIGSEV when running OMPI Java binding<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-11 01:33:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23791.php">Alex A. Granovsky: "Re: [OMPI users] Problems with computation-communication overlap innon-blocking mode"</a>
<li><strong>Previous message:</strong> <a href="23789.php">Ralph Castain: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
<li><strong>In reply to:</strong> <a href="23787.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23795.php">Ralph Castain: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>Reply:</strong> <a href="23795.php">Ralph Castain: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>Reply:</strong> <a href="23802.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just tested that this happens even with the simple Hello.java program given
<br>
in OMPI distribution.
<br>
<p>I've made a tarball containing details of the error adhering to
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>. Please let me know if I have
<br>
missed any info necessary.
<br>
<p>Thank you,
<br>
Saliya
<br>
<p><p><p><p>On Mon, Mar 10, 2014 at 10:46 AM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Greetings, and thanks for trying out our Java bindings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you provide some more details?  E.g., is there a particular program
</span><br>
<span class="quotelev1">&gt; you're running that incurs these problems?  Or is there even a particular
</span><br>
<span class="quotelev1">&gt; MPI function that you're using that results in this segv (e.g., perhaps we
</span><br>
<span class="quotelev1">&gt; have a specific bug somewhere)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you reduce the segv to a small example that we can reproduce (and
</span><br>
<span class="quotelev1">&gt; therefore fix)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 10, 2014, at 12:05 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have 8 nodes each with 2 quad core sockets. Also, the nodes have IB
</span><br>
<span class="quotelev1">&gt; connectivity. I am trying to run OMPI Java binding in OMPI trunk revision
</span><br>
<span class="quotelev1">&gt; 30301 with 8 procs per node totaling 64 procs. This gives a SIGSEV error as
</span><br>
<span class="quotelev1">&gt; below.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I wonder if you have any suggestion to resolve this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you,
</span><br>
<span class="quotelev2">&gt; &gt; Saliya
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; #  SIGSEGV (0xb) at pc=0x000000313867b75b, pid=12229, tid=47864973515072
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; # JRE version: Java(TM) SE Runtime Environment (8.0-b118) (build
</span><br>
<span class="quotelev1">&gt; 1.8.0-ea-b118)
</span><br>
<span class="quotelev2">&gt; &gt; # Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b60 mixed mode
</span><br>
<span class="quotelev1">&gt; linux-amd64 compressed oops)
</span><br>
<span class="quotelev2">&gt; &gt; # Problematic frame:
</span><br>
<span class="quotelev2">&gt; &gt; # C  [libc.so.6+0x7b75b]  memcpy+0x15b
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake esaliya_at_[hidden]
Cell 812-391-4914 Home 812-961-6383
<a href="http://saliya.org">http://saliya.org</a>

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23790/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23790/hellobug.tar.gz">hellobug.tar.gz</a>
</ul>
<!-- attachment="hellobug.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23791.php">Alex A. Granovsky: "Re: [OMPI users] Problems with computation-communication overlap innon-blocking mode"</a>
<li><strong>Previous message:</strong> <a href="23789.php">Ralph Castain: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
<li><strong>In reply to:</strong> <a href="23787.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23795.php">Ralph Castain: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>Reply:</strong> <a href="23795.php">Ralph Castain: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>Reply:</strong> <a href="23802.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
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
