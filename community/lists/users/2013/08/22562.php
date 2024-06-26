<?
$subject_val = "Re: [OMPI users] Unable to schedule an MPI tasks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 27 03:39:04 2013" -->
<!-- isoreceived="20130827073904" -->
<!-- sent="Tue, 27 Aug 2013 15:39:03 +0800" -->
<!-- isosent="20130827073903" -->
<!-- name="Ng Shi Wei" -->
<!-- email="nsw_1216_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to schedule an MPI tasks" -->
<!-- id="COL126-W99CE50FC816BF40816F86FE4A0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="295269B4-0746-405B-A9B4-414668D6F14D_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to schedule an MPI tasks<br>
<strong>From:</strong> Ng Shi Wei (<em>nsw_1216_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-27 03:39:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22563.php">Reuti: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Previous message:</strong> <a href="22561.php">Reuti: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>In reply to:</strong> <a href="22561.php">Reuti: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22563.php">Reuti: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Reply:</strong> <a href="22563.php">Reuti: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Reuti,
<br>
I dont get what you meant ? Can you explain it more details ? Which file i should check whether mpiexec is included or not ?
<br>
Thank you in advance.
<br>
Best Regards,Shi Wei
<br>
<p><span class="quotelev1">&gt; From: reuti_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Tue, 27 Aug 2013 09:03:54 +0200
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Unable to schedule an MPI tasks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 27.08.2013 um 08:56 schrieb Ng Shi Wei:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regarding the permission, I think I have the permission to run the at command because I can use the at command to schedule other programs except mpi program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe the `mpiexec` isn't found and a submitted script could help:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; . ~/.profile
</span><br>
<span class="quotelev1">&gt; which mpiexec # remove this line when it's working
</span><br>
<span class="quotelev1">&gt; mpiexec ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (Replace ~/.profile with ~/.bash_profile or ~/.bash_login in case you use these. In case `mpiexec` is available even without these: is there something like /etc/profile which needs to be sourced?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is there any other scheduling command to schedule task?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thank you in advance.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Best Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Shi Wei
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --- Original Message ---
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; From: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sent: 27 August 2013 11:33
</span><br>
<span class="quotelev2">&gt; &gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Unable to schedule an MPI tasks
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Perhaps I don't understand, but mpirun has no problem being executed using the &quot;at&quot; command. Perhaps the problem is that you don't have permission for &quot;at&quot;? Per the man page:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   The superuser may use these commands in any case.  For  other  users,  permission  to  use  at  is  determined  by  the  files  /etc/at.allow  and
</span><br>
<span class="quotelev2">&gt; &gt;        /etc/at.deny.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        If the file /etc/at.allow exists, only usernames mentioned in it are allowed to use at.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        If /etc/at.allow does not exist, /etc/at.deny is checked, every username not mentioned in it is then allowed to use at.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        If neither exists, only the superuser is allowed use of at.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        An empty /etc/at.deny means that every user is allowed use these commands, this is the default configuration.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You also might check to see what directory mpirun is executed from when &quot;at&quot; actually runs, and that the path to both mpirun and your executable are correct for that location.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 26, 2013, at 6:45 PM, Ng Shi Wei &lt;nsw_1216_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Due to the time constraints, I would like to run the mpi program by scheduling the program to run on desired time using the &quot;at&quot; command. However, it seems that the mpirun doesn't execute the mpi program at the desired time using the &quot;at&quot; command.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I would like to ask is there any other method to schedule a program to run ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For best, it can straight away starts the second mpi program once the previous program is finished.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hope to get some reply from you all.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Best Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Shi Wei
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22562/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22563.php">Reuti: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Previous message:</strong> <a href="22561.php">Reuti: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>In reply to:</strong> <a href="22561.php">Reuti: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22563.php">Reuti: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Reply:</strong> <a href="22563.php">Reuti: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
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
