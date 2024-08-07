<?
$subject_val = "Re: [OMPI users] unable to access or execute";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 15 07:05:22 2009" -->
<!-- isoreceived="20090915110522" -->
<!-- sent="Tue, 15 Sep 2009 14:05:17 +0300" -->
<!-- isosent="20090915110517" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unable to access or execute" -->
<!-- id="453d39990909150405i7c2127b1s8bb395b45ce7acad_at_mail.gmail.com" -->
<!-- charset="ISO-8859-2" -->
<!-- inreplyto="1253007406.4542.1.camel_at_eddy" -->
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
<strong>Subject:</strong> Re: [OMPI users] unable to access or execute<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-15 07:05:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10653.php">Jeff Squyres: "Re: [OMPI users] unable to access or execute"</a>
<li><strong>Previous message:</strong> <a href="10651.php">Marcin Stolarek: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<li><strong>In reply to:</strong> <a href="10650.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] unable to access or execute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10653.php">Jeff Squyres: "Re: [OMPI users] unable to access or execute"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
you can use a shared ( i.e. NFS ) folder with this app, or provide a full
<br>
PATH to it.
<br>
ex:
<br>
$mpirun -np 2 -hostfile hostfile  /home/user/app
<br>
<p>2009/9/15 Dominik T&#195;&#161;borsk&#195;&#189; &lt;bremby_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; So I have to manually copy the compiled hello world program to all of
</span><br>
<span class="quotelev1">&gt; the nodes so that they can be executed? I really didn't expect that...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, where (in the filesystem) does the executable have to be? On the
</span><br>
<span class="quotelev1">&gt; same place as on the master?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dominik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain p&#195;&#173;&#197;&#161;e v &#195;&#154;t 15. 09. 2009 v 02:27 +0200:
</span><br>
<span class="quotelev2">&gt; &gt;         I assume this
</span><br>
<span class="quotelev2">&gt; &gt;         executable doesn't have to be on the node - that would be
</span><br>
<span class="quotelev2">&gt; &gt;         silly
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Not silly at all - we don't preposition the binary for you. It has to
</span><br>
<span class="quotelev2">&gt; &gt; be present on the node where it is to be executed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have added an option to preposition binaries in the OMPI developer's
</span><br>
<span class="quotelev2">&gt; &gt; trunk, but that feature isn't scheduled for release until the next
</span><br>
<span class="quotelev2">&gt; &gt; major code release.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2009/9/14 Dominik T&#195;&#161;borsk&#195;&#189; &lt;bremby_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;         Hi again,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         Since last time I made progress - I compiled openMPI 1.3.3
</span><br>
<span class="quotelev2">&gt; &gt;         from sources,
</span><br>
<span class="quotelev2">&gt; &gt;         now I'm trying to run it on one of my nodes. I am using the
</span><br>
<span class="quotelev2">&gt; &gt;         same
</span><br>
<span class="quotelev2">&gt; &gt;         software on the master, but master is Ubuntu 9.04 (NOT using
</span><br>
<span class="quotelev2">&gt; &gt;         openMPI
</span><br>
<span class="quotelev2">&gt; &gt;         1.3.2 from repos) and the node is my own Linux system - it
</span><br>
<span class="quotelev2">&gt; &gt;         lacks many
</span><br>
<span class="quotelev2">&gt; &gt;         features so there might be the source of the problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         When I try to run hello world program, it gives me this error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         $ /openMPI/bin/mpirun
</span><br>
<span class="quotelev2">&gt; &gt;         -hostfile /home/eddy/Dreddux/host.machine5
</span><br>
<span class="quotelev1">&gt; ./projekty/openMPI/hello/hello
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;         mpirun was unable to launch the specified application as it
</span><br>
<span class="quotelev2">&gt; &gt;         could not
</span><br>
<span class="quotelev2">&gt; &gt;         access
</span><br>
<span class="quotelev2">&gt; &gt;         or execute an executable:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         Executable: ./projekty/openMPI/hello/hello
</span><br>
<span class="quotelev2">&gt; &gt;         Node: machine5
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         while attempting to start process rank 0.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         The executable is hello world program and is executable. I
</span><br>
<span class="quotelev2">&gt; &gt;         assume this
</span><br>
<span class="quotelev2">&gt; &gt;         executable doesn't have to be on the node - that would be
</span><br>
<span class="quotelev2">&gt; &gt;         silly. So, I
</span><br>
<span class="quotelev2">&gt; &gt;         don't understand what am I missing. Any ideas? Please!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         Dominik
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         PS: thanks for your time!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;         users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;         users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10652/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10653.php">Jeff Squyres: "Re: [OMPI users] unable to access or execute"</a>
<li><strong>Previous message:</strong> <a href="10651.php">Marcin Stolarek: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<li><strong>In reply to:</strong> <a href="10650.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] unable to access or execute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10653.php">Jeff Squyres: "Re: [OMPI users] unable to access or execute"</a>
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
