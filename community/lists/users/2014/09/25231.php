<?
$subject_val = "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt;	28	slots	(updated findings)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  2 17:08:52 2014" -->
<!-- isoreceived="20140902210852" -->
<!-- sent="Tue, 2 Sep 2014 14:08:39 -0700" -->
<!-- isosent="20140902210839" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun 1.5.4 problems when request &amp;gt;	28	slots	(updated findings)" -->
<!-- id="1BAD6351-2EB8-4F96-A4F5-8A7126E09597_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF293E2F4D0_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mpirun 1.5.4 problems when request &gt;	28	slots	(updated findings)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-02 17:08:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25232.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Previous message:</strong> <a href="25230.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.6.5 or 1.8.1 Please respond to	swamyk@us.ibm.com"</a>
<li><strong>In reply to:</strong> <a href="25229.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt;	28	slots	(updated findings)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25352.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun 1.5.4 problems when request	&gt;	28	slots	(updated findings)"</a>
<li><strong>Reply:</strong> <a href="25352.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun 1.5.4 problems when request	&gt;	28	slots	(updated findings)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Argh - yeah, I got confused as things context switched a few too many times. The 1.8.2 release should certainly understand that arrangement, and --hetero-nodes. The only way it wouldn't see the latter is if you configure it --without-hwloc, or hwloc refused to build.
<br>
<p>Since there was a question about the numactl-devel requirement, I suspect that is the root cause of all evil in this case and the lack of --hetero-nodes would confirm that diagnosis :-)
<br>
<p><p><p>On Sep 2, 2014, at 1:49 PM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These latest issues (since 8/28/14) all occurred after we upgraded our cluster
</span><br>
<span class="quotelev1">&gt; to OpenMPI 1.8.2 on . Maybe I should've created a new thread rather
</span><br>
<span class="quotelev1">&gt; than tacking on these issues to my existing thread.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Bill Lane
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, September 02, 2014 11:03 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Mpirun 1.5.4 problems when request &gt;  28      slots   (updated findings)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 2, 2014, at 10:48 AM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There are at least three different permutations of CPU configurations in the cluster
</span><br>
<span class="quotelev2">&gt;&gt; involved. Some are blades that have two sockets with two cores per Intel CPU (and not all
</span><br>
<span class="quotelev2">&gt;&gt; sockets are filled). Some are IBM x3550 systems having two sockets with three cores
</span><br>
<span class="quotelev2">&gt;&gt; per Intel CPU (and not all sockets are populated). All nodes have hyperthreading turned
</span><br>
<span class="quotelev2">&gt;&gt; on as well.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I will look into getting the numactl-devel package installed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I will try the --bind-to none switch again. For some reason the --hetero-nodes switch wasn't
</span><br>
<span class="quotelev2">&gt;&gt; recognized by mpirun. Is the --hetero-nodes swtich an MCA parameter?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My bad - I forgot that you are using a very old OMPI version. I think you'll need to upgrade, though, as I don't believe something that old will know how to handle such a hybrid system. I suspect this may be at the bottom of the problem you are seeing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You'll really need to get up to the 1.8 series, I'm afraid - I'm not sure even 1.6 can handle this setup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Bill Lane
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Saturday, August 30, 2014 7:15 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28       slots   (updated findings)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; hwloc requires the numactl-devel package in addition to the numactl one
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I understand the email thread correctly, it sounds like you have at least some nodes in your system that have fewer cores than others - is that correct?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here are the definitions of the two parallel environments tested (with orte always failing when
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; more slots are requested than there are CPU cores on the first node allocated to the job by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SGE):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If that is the situation, then you need to add --hetero-nodes to your cmd line so we look at the actual topology of every node. Otherwise, for scalability reasons, we only look at the first node in the allocation and assume all nodes are the same.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If that isn't the case, then it sounds like we are seeing fewer cores than exist on the system for some reason. You could try installing hwloc independently, and then running &quot;lstopo&quot; to find out what it detects. Another thing you could do is add &quot;-mca plm_base_verbose 100&quot; to your cmd line (I suggest doing that with just a couple of nodes in your allocation) and that will dump the detected topology to stderr.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm surprised the bind-to none option didn't remove the error - it definitely should as we won't be binding when that is given. However, I note that you misspelled it in your reply, so maybe you just didn't type it correctly? It is &quot;--bind-to none&quot; - note the space between the &quot;to&quot; and the &quot;none&quot;. You'll take a performance hit, but it should at least run.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 29, 2014, at 11:29 PM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The --bind-to-none switch didn't help, I'm still getting the same errors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The only NUMA package installed on the nodes in this CentOS 6.2 cluster is the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; numactl-2.0.7-3.el6.x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this package is described as: numactl.x86_64 : Library for tuning for Non Uniform Memory Access machines
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since many of these systems are NUMA systems (with separate memory address spaces
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the sockets) could it be that the correct NUMA libraries aren't installed?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here are some of the other NUMA packages available for CentOS 6.x:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yum search numa | less
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Loaded plugins: fastestmirror
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Loading mirror speeds from cached hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              ============================== N/S Matched: numa ===============================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              numactl-devel.i686 : Development package for building Applications that use numa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              numactl-devel.x86_64 : Development package for building Applications that use
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   : numa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              numad.x86_64 : NUMA user daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              numactl.i686 : Library for tuning for Non Uniform Memory Access machines
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              numactl.x86_64 : Library for tuning for Non Uniform Memory Access machines
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Bill Lane
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users [users-bounces_at_[hidden]] on behalf of Reuti [reuti_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Thursday, August 28, 2014 3:27 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots (updated findings)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 28.08.2014 um 10:09 schrieb Lane, William:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have some updates on these issues and some test results as well.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We upgraded OpenMPI to the latest version 1.8.2, but when submitting jobs via the SGE orte parallel environment received
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; errors whenever more slots are requested than there are actual cores on the first node allocated to the job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does &quot;-bind-to none&quot; help? The binding is switched on by default in Open MPI 1.8 onwards.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The btl tcp,self switch passed to mpirun made significant differences in performance as per the below:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Even with the oversubscribe option, the memory mapping errors still persist. On 32 core nodes and with HPL run compiled for openmpi/1.8.2,  it reliably starts failing at 20 cores allocated. Note that I tested with 'btl tcp,self' defined and it does slow down the solve by 2 on a quick solve. The results on a larger solve would probably be more dramatic:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Quick HPL 16 core with SM: ~19GFlops
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Quick HPL 16 core without SM: ~10GFlops
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unfortunately, a recompiled HPL did not work, but it did give us more information (error below). Still trying a couple things.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Bind to:     CORE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Node:        csclprd3-0-7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #processes:  2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #cpus:       1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; option to your binding directive.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When using the SGE make parallel environment to submit jobs everything worked perfectly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I noticed when using the make PE, the number of slots allocated from each node to the job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; corresponded to the number of CPU's and disregarded any additional cores within a CPU and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; any hyperthreading cores.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For SGE the hyperthreading cores count as normal cores. In principle it's possible to have an RQS defined in SGE (`qconf -srqsl`) which will limit the number of cores for the &quot;make&quot; PE, or (better) limit it in each exechost defintion to the physical installed ones (this is what I set up usually - maybe leaving hyperthreading switched on gives some room for the kernel processes this way).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here are the definitions of the two parallel environments tested (with orte always failing when
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; more slots are requested than there are CPU cores on the first node allocated to the job by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SGE):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_csclprd3 ~]# qconf -sp orte
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pe_name            orte
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; slots              9999
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; user_lists         NONE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; xuser_lists        NONE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; start_proc_args    /bin/true
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stop_proc_args     /bin/true
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allocation_rule    $fill_up
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; control_slaves     TRUE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; urgency_slots      min
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; accounting_summary TRUE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; qsort_args         NONE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_csclprd3 ~]# qconf -sp make
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pe_name            make
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; slots              999
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; user_lists         NONE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; xuser_lists        NONE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; start_proc_args    NONE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stop_proc_args     NONE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allocation_rule    $round_robin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; control_slaves     TRUE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; urgency_slots      min
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; accounting_summary TRUE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; qsort_args         NONE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Although everything seems to work with the make PE, I'd still like
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to know why? Because on a much older version of openMPI loaded
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on an older version of CentOS, SGE and ROCKS, using all physical
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cores, as well as all hyperthreads was never a problem (even on NUMA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What is the recommended SGE parallel environment definition for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI 1.8.2?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Whether you prefer $fill_up or $round_robin is up to you - do you prefer all your processes on the least amount of machines or spread around in the cluster. If there is much communication maybe it's better on less machines, but if each process has heavy I/O to the local scratch disk spreading it around may be the preferred choice. This doesn't make any difference to Open MPI, as the generated $PE_HOSTFILE contains just the list of granted slots. Doing it in an $fill_up style will of course fill the first node including the hyperthreading ones before moving to the next machine (`man sge_pe`).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I apologize for the length of this, but I thought it best to provide more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; information than less.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you in advance,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Bill Lane
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users [users-bounces_at_[hidden]] on behalf of Jeff Squyres (jsquyres) [jsquyres_at_[hidden]]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Friday, August 08, 2014 5:25 AM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI User's List
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 8, 2014, at 1:24 AM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Using the &quot;--mca btl tcp,self&quot; switch to mpirun solved all the issues (in addition to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the requirement to include the --mca btl_tcp_if_include eth0 switch). I believe
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the &quot;--mca btl tcp,self&quot; switch limits inter-process communication within a node to using the TCP
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; loopback rather than shared memory.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Correct.  You will not be using shared memory for MPI communication at all -- just TCP.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I should also point out that all of the nodes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on this cluster feature NUMA architecture.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Will using the &quot;--mca btl tcp,self&quot; switch to mpirun result in any degraded performance
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; issues over using shared memory?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Generally yes, but it depends on your application.  If your application does very little MPI communication, then the difference between shared memory and TCP is likely negligible.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'd strongly suggest two things:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Upgrade to at least Open MPI 1.6.5 (1.8.x would be better, if possible)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Run your program through a memory-checking debugger such as Valgrind
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Seg faults like you initially described can be caused by errors in your MPI application itself -- the fact that using TCP only (and not shared memory) avoids the segvs does not mean that the issue is actually fixed; it may well mean that the error is still there, but is happening in a case that doesn't seem to cause enough damage to cause a segv.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24951.php">http://www.open-mpi.org/community/lists/users/2014/08/24951.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED. If you have received this message in error, please notify us immediately by calling (310) 423-6428 and destroy the related message. Thank You for your cooperation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25176.php">http://www.open-mpi.org/community/lists/users/2014/08/25176.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25179.php">http://www.open-mpi.org/community/lists/users/2014/08/25179.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED. If you have received this message in error, please notify us immediately by calling (310) 423-6428 and destroy the related message. Thank You for your cooperation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25202.php">http://www.open-mpi.org/community/lists/users/2014/08/25202.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25203.php">http://www.open-mpi.org/community/lists/users/2014/08/25203.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED. If you have received this message in error, please notify us immediately by calling (310) 423-6428 and destroy the related message. Thank You for your cooperation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25224.php">http://www.open-mpi.org/community/lists/users/2014/09/25224.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25226.php">http://www.open-mpi.org/community/lists/users/2014/09/25226.php</a>
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED. If you have received this message in error, please notify us immediately by calling (310) 423-6428 and destroy the related message. Thank You for your cooperation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25229.php">http://www.open-mpi.org/community/lists/users/2014/09/25229.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25232.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Previous message:</strong> <a href="25230.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.6.5 or 1.8.1 Please respond to	swamyk@us.ibm.com"</a>
<li><strong>In reply to:</strong> <a href="25229.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt;	28	slots	(updated findings)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25352.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun 1.5.4 problems when request	&gt;	28	slots	(updated findings)"</a>
<li><strong>Reply:</strong> <a href="25352.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun 1.5.4 problems when request	&gt;	28	slots	(updated findings)"</a>
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
