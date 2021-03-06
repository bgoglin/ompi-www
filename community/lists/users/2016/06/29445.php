<?
$subject_val = "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 14 17:51:41 2016" -->
<!-- isoreceived="20160614215141" -->
<!-- sent="Tue, 14 Jun 2016 14:51:36 -0700" -->
<!-- isosent="20160614215136" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2" -->
<!-- id="EDF23FED-68B3-4D6E-B874-927B5CECCA46_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CA+LevYKkzx8ra-tnMLZ1UHPu6AXyP=1yo6_U+3Liq+1cKMnPAg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-14 17:51:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29446.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="29444.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>In reply to:</strong> <a href="29444.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29446.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Reply:</strong> <a href="29446.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You don&#226;&#128;&#153;t want to always use those options as your performance will take a hit - TCP vs Infiniband isn&#226;&#128;&#153;t a good option. Sadly, this is something we need someone like Nathan to address as it is a bug in the code base, and in an area I&#226;&#128;&#153;m not familiar with
<br>
<p>For now, just use TCP so you can move forward
<br>
<p><p><span class="quotelev1">&gt; On Jun 14, 2016, at 2:14 PM, Jason Maldonis &lt;maldonis_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph, The problem *does* go away if I add &quot;-mca btl tcp,sm,self&quot; to the mpiexec cmd line. (By the way, I am using mpiexec rather than mpirun; do you recommend one over the other?) Will you tell me what this means for me? For example, should I always append these arguments to mpiexec for my non-test jobs as well?   I do not know what you mean by fabric unfortunately, but I can give you some system information (see end of email). Unfortunately I am not a system admin so I do not have sudo rights. Just let me know if I can tell you something more specific though and I will get it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nathan,  Thank you for your response. Unfortunately I have no idea what that means :(  I can forward that to our cluster managers, but I do not know if that is enough information for them to understand what they might need to do to help me with this issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ lscpu
</span><br>
<span class="quotelev1">&gt; Architecture:          x86_64
</span><br>
<span class="quotelev1">&gt; CPU op-mode(s):        32-bit, 64-bit
</span><br>
<span class="quotelev1">&gt; Byte Order:            Little Endian
</span><br>
<span class="quotelev1">&gt; CPU(s):                20
</span><br>
<span class="quotelev1">&gt; On-line CPU(s) list:   0-19
</span><br>
<span class="quotelev1">&gt; Thread(s) per core:    1
</span><br>
<span class="quotelev1">&gt; Core(s) per socket:    10
</span><br>
<span class="quotelev1">&gt; Socket(s):             2
</span><br>
<span class="quotelev1">&gt; NUMA node(s):          2
</span><br>
<span class="quotelev1">&gt; Vendor ID:             GenuineIntel
</span><br>
<span class="quotelev1">&gt; CPU family:            6
</span><br>
<span class="quotelev1">&gt; Model:                 63
</span><br>
<span class="quotelev1">&gt; Stepping:              2
</span><br>
<span class="quotelev1">&gt; CPU MHz:               2594.159
</span><br>
<span class="quotelev1">&gt; BogoMIPS:              5187.59
</span><br>
<span class="quotelev1">&gt; Virtualization:        VT-x
</span><br>
<span class="quotelev1">&gt; L1d cache:             32K
</span><br>
<span class="quotelev1">&gt; L1i cache:             32K
</span><br>
<span class="quotelev1">&gt; L2 cache:              256K
</span><br>
<span class="quotelev1">&gt; L3 cache:              25600K
</span><br>
<span class="quotelev1">&gt; NUMA node0 CPU(s):     0,2,4,6,8,10,12,14,16,18
</span><br>
<span class="quotelev1">&gt; NUMA node1 CPU(s):     1,3,5,7,9,11,13,15,17,19
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jason
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jason Maldonis
</span><br>
<span class="quotelev1">&gt; Research Assistant of Professor Paul Voyles
</span><br>
<span class="quotelev1">&gt; Materials Science Grad Student
</span><br>
<span class="quotelev1">&gt; University of Wisconsin, Madison
</span><br>
<span class="quotelev1">&gt; 1509 University Ave, Rm M142
</span><br>
<span class="quotelev1">&gt; Madison, WI 53706
</span><br>
<span class="quotelev1">&gt; maldonis_at_[hidden] &lt;mailto:maldonis_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 608-295-5532
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 14, 2016 at 1:27 PM, Nathan Hjelm &lt;hjelmn_at_[hidden] &lt;mailto:hjelmn_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; That message is coming from udcm in the openib btl. It indicates some sort of failure in the connection mechanism. It can happen if the listening thread no longer exists or is taking too long to process messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 14, 2016, at 12:20 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmm&#226;&#128;&#166;I&#226;&#128;&#153;m unable to replicate a problem on my machines. What fabric are you using? Does the problem go away if you add &#226;&#128;&#156;-mca btl tcp,sm,self&#226;&#128;&#157; to the mpirun cmd line?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 14, 2016, at 11:15 AM, Jason Maldonis &lt;maldonis_at_[hidden] &lt;mailto:maldonis_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph, et. al,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Great, thank you for the help. I downloaded the mpi loop spawn test directly from what I think is the master repo on github:  <a href="https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c">https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c</a> &lt;<a href="https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c">https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am still using the mpi code from 1.10.2, however.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is that test updated with the correct code? If so, I am still getting the same &quot;too many retries sending message to 0x0184:0x00001d27, giving up&quot; errors. I also just downloaded the June 14 nightly tarball (7.79MB) from: <a href="https://www.open-mpi.org/nightly/v2.x/">https://www.open-mpi.org/nightly/v2.x/</a> &lt;<a href="https://www.open-mpi.org/nightly/v2.x/">https://www.open-mpi.org/nightly/v2.x/</a>&gt; and I get the same error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you please point me to the correct code?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you need me to provide more information please let me know.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jason
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jason Maldonis
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Research Assistant of Professor Paul Voyles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Materials Science Grad Student
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Wisconsin, Madison
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1509 University Ave, Rm M142
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Madison, WI 53706
</span><br>
<span class="quotelev3">&gt;&gt;&gt; maldonis_at_[hidden] &lt;mailto:maldonis_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 608-295-5532 &lt;tel:608-295-5532&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Jun 14, 2016 at 10:59 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I dug into this a bit (with some help from others) and found that the spawn code appears to be working correctly - it is the test in orte/test that is wrong. The test has been correctly updated in the 2.x and master repos, but we failed to backport it to the 1.10 series. I have done so this morning, and it will be in the upcoming 1.10.3 release (out very soon).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 13, 2016, at 3:53 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No, that PR has nothing to do with loop_spawn. I&#226;&#128;&#153;ll try to take a look at the problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jun 13, 2016, at 3:47 PM, Jason Maldonis &lt;maldonis_at_[hidden] &lt;mailto:maldonis_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am using OpenMPI 1.10.2 compiled with Intel. I am trying to get the spawn functionality to work inside a for loop, but continue to get the error &quot;too many retries sending message to &lt;addr&gt;, giving up&quot; somewhere down the line in the for loop, seemingly because the processors are not being fully freed when disconnecting/finishing. I found the orte/test/mpi/loop_spawn.c &lt;<a href="https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c">https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c</a>&gt; example/test, and it has the exact same problem. I also found this &lt;<a href="https://www.open-mpi.org/community/lists/devel/2016/04/18814.php">https://www.open-mpi.org/community/lists/devel/2016/04/18814.php</a>&gt; mailing list post from ~ a month and a half ago.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is this PR (<a href="https://github.com/open-mpi/ompi/pull/1473">https://github.com/open-mpi/ompi/pull/1473</a> &lt;<a href="https://github.com/open-mpi/ompi/pull/1473">https://github.com/open-mpi/ompi/pull/1473</a>&gt;) about the same issue I am having (ie the loop_spawn example not working)? If so, do you know if we can downgrade to e.g. 1.10.1 or another version? Or is there another solution to fix this bug until you get a new release out (or is one coming shortly to fix this maybe?)?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Below is the output of the loop_spawn test on our university's cluster, which I know very little about in terms of architecture but can get information if it's helpful. The large group of people who manage this cluster are very good.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks for your time.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jason
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec -np 5 loop_spawn
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent*******************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: Launching MPI*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent*******************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: Launching MPI*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent*******************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: Launching MPI*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent*******************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: Launching MPI*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent*******************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: Launching MPI*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #0 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #0 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #0 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #0 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #0 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child: launch
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child merged rank = 5, size = 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #0 rank 4, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #0 rank 0, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #0 rank 2, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #0 rank 3, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #0 rank 1, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child 329941: exiting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #1 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #1 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #1 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #1 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #1 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child: launch
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #1 rank 0, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #1 rank 2, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #1 rank 1, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #1 rank 3, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child merged rank = 5, size = 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #1 rank 4, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child 329945: exiting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #2 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #2 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #2 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #2 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #2 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child: launch
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #2 rank 3, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #2 rank 0, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #2 rank 2, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child merged rank = 5, size = 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #2 rank 1, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #2 rank 4, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child 329949: exiting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #3 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #3 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #3 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #3 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #3 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child: launch
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [node:port?] too many retries sending message to &lt;addr&gt;, giving up
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child job 5 terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Process name: [[...],0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Exit code:    255
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29425.php">http://www.open-mpi.org/community/lists/users/2016/06/29425.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29425.php">http://www.open-mpi.org/community/lists/users/2016/06/29425.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29435.php">http://www.open-mpi.org/community/lists/users/2016/06/29435.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29435.php">http://www.open-mpi.org/community/lists/users/2016/06/29435.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29438.php">http://www.open-mpi.org/community/lists/users/2016/06/29438.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29438.php">http://www.open-mpi.org/community/lists/users/2016/06/29438.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29439.php">http://www.open-mpi.org/community/lists/users/2016/06/29439.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29439.php">http://www.open-mpi.org/community/lists/users/2016/06/29439.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29440.php">http://www.open-mpi.org/community/lists/users/2016/06/29440.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29440.php">http://www.open-mpi.org/community/lists/users/2016/06/29440.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29444.php">http://www.open-mpi.org/community/lists/users/2016/06/29444.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29445/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29446.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="29444.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>In reply to:</strong> <a href="29444.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29446.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Reply:</strong> <a href="29446.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
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
