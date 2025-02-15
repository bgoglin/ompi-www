<?
$subject_val = "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  6 16:03:41 2015" -->
<!-- isoreceived="20151006200341" -->
<!-- sent="Tue, 6 Oct 2015 13:03:35 -0700" -->
<!-- isosent="20151006200335" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM" -->
<!-- id="ACAC8BC2-D294-4E9B-A890-3A839E7FCBE2_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="561423E9.8000308_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-06 16:03:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27824.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_CART_CREATE no matching specific subroutine"</a>
<li><strong>Previous message:</strong> <a href="27822.php">Mike Dubman: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<li><strong>In reply to:</strong> <a href="27821.php">marcin.krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Oct 6, 2015, at 12:41 PM, marcin.krotkiewski &lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph, maybe I was not precise - most likely --cpu_bind does not work on my system because it is disabled in SLURM, and is not caused by any problem in OpenMPI. I am not certain and I will have to investigate this further, so please do not waste your time on this.
</span><br>
<p>No problem - I understood your note. It does require you to enable it in the slurm config.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What do you mean by 'loss of dynaics support&#226;&#128;&#153;?
</span><br>
<p>There is no support for things like connect/accept, comm_spawn (since the procs cannot do a connect/accept after start), publish, lookup, etc. These are all considered part of MPI's dynamics definitions.
<br>
<p>You&#226;&#128;&#153;ll also have a lesser number of map/bind options, if that matters.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Marcin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/06/2015 09:35 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I&#226;&#128;&#153;ll have to fix it later this week - out due to eye surgery today. Looks like something didn&#226;&#128;&#153;t get across to 1.10 as it should have. There are other tradeoffs that occur when you go to direct launch (e.g., loss of dynamics support) - may or may not be of concern to your usage.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 6, 2015, at 11:57 AM, marcin.krotkiewski &lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks, Gilles. This is a good suggestion and I will pursue this direction. The problem is that currently SLURM does not support --cpu_bind on my system for whatever reasons. I may work towards turning this option on if that will be necessary, but it would also be good to be able to do it with pure openmpi..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 10/06/2015 08:01 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Marcin,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; did you investigate direct launch (e.g. srun) instead of mpirun ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for example, you can do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; srun --ntasks=2 --cpus-per-task=4 -l grep Cpus_allowed_list /proc/self/status
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; note, you might have to use the srun --cpu_bind option, and make sure your slurm config does support that :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; srun --ntasks=2 --cpus-per-task=4 --cpu_bind=core,verbose -l grep Cpus_allowed_list /proc/self/status
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 10/6/2015 4:38 AM, marcin.krotkiewski wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Yet another question about cpu binding under SLURM environment..
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Short version: will OpenMPI support SLURM_CPUS_PER_TASK for the purpose of cpu binding?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Full version: When you allocate a job like, e.g., this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; salloc --ntasks=2 --cpus-per-task=4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; SLURM will allocate 8 cores in total, 4 for each 'assumed' MPI tasks. This is useful for hybrid jobs, where each MPI process spawns some internal worker threads (e.g., OpenMP). The intention is that there are 2 MPI procs started, each of them 'bound' to 4 cores. SLURM will also set an environment variable
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; SLURM_CPUS_PER_TASK=4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; which should (probably?) be taken into account by the method that launches the MPI processes to figure out the cpuset. In case of OpenMPI + mpirun I think something should happen in orte/mca/ras/slurm/ras_slurm_module.c, where the variable _is_ actually parsed. Unfortunately, it is never really used...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As a result, cpuset of all tasks started on a given compute node includes all CPU cores of all MPI tasks on that node, just as provided by SLURM (in the above example - 8). In general, there is no simple way for the user code in the MPI procs to 'split' the cores between themselves. I imagine the original intention to support this in OpenMPI was something like
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun --bind-to subtask_cpuset
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with an artificial bind target that would cause OpenMPI to divide the allocated cores between the mpi tasks. Is this right? If so, it seems that at this point this is not implemented. Is there plans to do this? If no, does anyone know another way to achieve that?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks a lot!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27803.php">http://www.open-mpi.org/community/lists/users/2015/10/27803.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27812.php">http://www.open-mpi.org/community/lists/users/2015/10/27812.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27818.php">http://www.open-mpi.org/community/lists/users/2015/10/27818.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27820.php">http://www.open-mpi.org/community/lists/users/2015/10/27820.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27821.php">http://www.open-mpi.org/community/lists/users/2015/10/27821.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27824.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_CART_CREATE no matching specific subroutine"</a>
<li><strong>Previous message:</strong> <a href="27822.php">Mike Dubman: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<li><strong>In reply to:</strong> <a href="27821.php">marcin.krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<!-- nextthread="start" -->
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
