<?
$subject_val = "Re: [OMPI users] rank file error: Rankfile claimed...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 07:37:13 2009" -->
<!-- isoreceived="20090817113713" -->
<!-- sent="Mon, 17 Aug 2009 05:37:00 -0600" -->
<!-- isosent="20090817113700" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] rank file error: Rankfile claimed..." -->
<!-- id="E4418545-D2F3-4FB3-BCAA-DA498E664A59_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0908170345j7d2b8ec2w2f669821f860c75c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] rank file error: Rankfile claimed...<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 07:37:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10382.php">Jeff Squyres: "Re: [OMPI users] Totalview and OpenMPI problem solved"</a>
<li><strong>Previous message:</strong> <a href="10380.php">jody: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>In reply to:</strong> <a href="10380.php">jody: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10383.php">Lenny Verkhovsky: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>Reply:</strong> <a href="10383.php">Lenny Verkhovsky: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Is there an explanation for this?
</span><br>
<p>I believe the word is &quot;bug&quot;. :-)
<br>
<p>The rank_file mapper has been substantially revised lately - we are  
<br>
discussing now how much of that revision to bring to 1.3.4 versus the  
<br>
next major release.
<br>
<p>Ralph
<br>
<p>On Aug 17, 2009, at 4:45 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi Lenny
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think it has something to do with your environment,  /etc/hosts,  
</span><br>
<span class="quotelev2">&gt;&gt; IT setup,
</span><br>
<span class="quotelev2">&gt;&gt; hostname function return value e.t.c
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure if it has something to do with Open MPI at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK. I just thought this was Open MPI related because i was able to  
</span><br>
<span class="quotelev1">&gt; use the
</span><br>
<span class="quotelev1">&gt; aliases of the hosts (i.e. plankton instead of plankton.uzh.ch) in
</span><br>
<span class="quotelev1">&gt; the host file...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I encountered a new problem:
</span><br>
<span class="quotelev1">&gt; if the rankfile lists all the entries which occur in the host file
</span><br>
<span class="quotelev1">&gt; there is an error message.
</span><br>
<span class="quotelev1">&gt; In the following example, the hostfile is
</span><br>
<span class="quotelev1">&gt; [jody_at_plankton neander]$ cat th_02
</span><br>
<span class="quotelev1">&gt; nano_00.uzh.ch  slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt; nano_02.uzh.ch  slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the rankfile is:
</span><br>
<span class="quotelev1">&gt; [jody_at_plankton neander]$ cat rf_02
</span><br>
<span class="quotelev1">&gt; rank  0=nano_00.uzh.ch  slot=0
</span><br>
<span class="quotelev1">&gt; rank  2=nano_00.uzh.ch  slot=1
</span><br>
<span class="quotelev1">&gt; rank  1=nano_02.uzh.ch  slot=0
</span><br>
<span class="quotelev1">&gt; rank  3=nano_02.uzh.ch  slot=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the error:
</span><br>
<span class="quotelev1">&gt; [jody_at_plankton neander]$ mpirun -np 4 -hostfile th_02  -rf rf_02 ./ 
</span><br>
<span class="quotelev1">&gt; HelloMPI
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are not enough slots available in the system to satisfy the 4  
</span><br>
<span class="quotelev1">&gt; slots
</span><br>
<span class="quotelev1">&gt; that were requested by the application:
</span><br>
<span class="quotelev1">&gt;    ./HelloMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Either request fewer slots for your application, or make more slots  
</span><br>
<span class="quotelev1">&gt; available
</span><br>
<span class="quotelev1">&gt; for use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1  while  
</span><br>
<span class="quotelev1">&gt; attempting to
</span><br>
<span class="quotelev1">&gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to  
</span><br>
<span class="quotelev1">&gt; have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If i use a hostfile with one more entry
</span><br>
<span class="quotelev1">&gt; [jody_at_aim-plankton neander]$ cat th_021
</span><br>
<span class="quotelev1">&gt; aim-nano_00.uzh.ch  slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt; aim-nano_02.uzh.ch  slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt; aim-nano_01.uzh.ch  slots=1 max-slots=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then this works fine:
</span><br>
<span class="quotelev1">&gt; [jody_at_aim-plankton neander]$ mpirun -np 4 -hostfile th_021  -rf  
</span><br>
<span class="quotelev1">&gt; rf_02 ./HelloMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there an explanation for this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt;  Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lenny.
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Aug 17, 2009 at 12:59 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Lenny
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks - using the full names makes it work!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a reason why the rankfile option treats
</span><br>
<span class="quotelev3">&gt;&gt;&gt; host names differently than the hostfile option?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Aug 17, 2009 at 11:20 AM, Lenny
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Verkhovsky&lt;lenny.verkhovsky_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This message means
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that you are trying to use host &quot;plankton&quot;, that was not  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allocated via
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hostfile or hostlist.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But according to the files and command line, everything seems fine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you try using &quot;plankton.uzh.ch&quot; hostname instead of &quot;plankton&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mon, Aug 17, 2009 at 10:36 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When i use a rankfile, i get an error message which i don't  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; understand:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [jody_at_plankton tests]$ mpirun -np 3 -rf rankfile -hostfile  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; testhosts
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./HelloMPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rankfile claimed host plankton that was not allocated or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; oversubscribed it's slots:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [plankton.uzh.ch:24327] [[44857,0],0] ORTE_ERROR_LOG: Bad  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parameter in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file rmaps_rank_file.c at line 108
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [plankton.uzh.ch:24327] [[44857,0],0] ORTE_ERROR_LOG: Bad  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parameter in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [plankton.uzh.ch:24327] [[44857,0],0] ORTE_ERROR_LOG: Bad  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parameter in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [plankton.uzh.ch:24327] [[44857,0],0] ORTE_ERROR_LOG: Bad  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parameter in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file plm_rsh_module.c at line 990
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1  while  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; attempting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There may be more information reported by the environment (see  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; above).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; shared
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; With out the '-rf rankfile' option everything works as expected.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My hostfile :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [jody_at_plankton tests]$ cat testhosts
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # The following node is a quad-processor machine, and we  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; absolutely
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # want to disallow over-subscribing it:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; plankton slots=3  max-slots=3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # The following nodes are dual-processor machines:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nano_00  slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nano_01  slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nano_02  slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nano_03  slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nano_04  slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nano_05  slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nano_06  slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; my rank file:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [jody_at_plankton neander]$ cat rankfile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rank  0=nano_00  slot=1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rank  1=plankton slot=0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rank  2=nano_01  slot=1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; my Open MPI version: 1.3.2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i get the same error if i use a rankfile which has a single line
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  rank  0=plankton  slot=0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (plankton is my local machine) and call mpirun with np 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What does the &quot;Rankfile claimed...&quot; message mean?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Did i make an error in my rankfile?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If yes, what would be the correct way to write it?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Jody
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="10382.php">Jeff Squyres: "Re: [OMPI users] Totalview and OpenMPI problem solved"</a>
<li><strong>Previous message:</strong> <a href="10380.php">jody: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>In reply to:</strong> <a href="10380.php">jody: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10383.php">Lenny Verkhovsky: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>Reply:</strong> <a href="10383.php">Lenny Verkhovsky: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
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
