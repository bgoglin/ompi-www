<?
$subject_val = "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 23:41:13 2010" -->
<!-- isoreceived="20100729034113" -->
<!-- sent="Wed, 28 Jul 2010 22:40:48 -0500" -->
<!-- isosent="20100729034048" -->
<!-- name="David Akin" -->
<!-- email="nospamou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core" -->
<!-- id="AANLkTi=QvNSWxo_CAc8UETdRHyCLFCswaHB5r9AgoB24_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="92EA530F-F1C8-4693-B7F3-A99BF434D6FC_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core<br>
<strong>From:</strong> David Akin (<em>nospamou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 23:40:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13864.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Previous message:</strong> <a href="13862.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>In reply to:</strong> <a href="13862.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13864.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Reply:</strong> <a href="13864.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's the exact command I'm running when all threads *are* pinned to
<br>
a single core:
<br>
<p>/usr/mpi/gcc/openmpi-1.4-qlc/bin/mpirun -host c005,c006 -np 2
<br>
OMP_NUM_THREADS=4 hybrid4.gcc
<br>
<p>Can anyone verify they have the same issue?
<br>
<p>On Wed, Jul 28, 2010 at 7:52 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; How are you running it when the threads are all on one core?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are specifying --bind-to-core, then of course all the threads will be on one core since we bind the process (not the thread). If you are specifying -mca mpi_paffinity_alone 1, then the same behavior results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Generally, if you want to bind threads, the only way to do it is with a rank file. We -might- figure out a way to provide an interface for thread-level binding, but I'm not sure about that right now. As things stand, OMPI has no visibility into the fact that your app spawned threads.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 28, 2010, at 5:47 PM, David Akin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All,
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to get the OpenMP portion of the code below to run
</span><br>
<span class="quotelev2">&gt;&gt; multicore on a couple of 8 core nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Good news: multiple threads are being spawned on each node in the run.
</span><br>
<span class="quotelev2">&gt;&gt; Bad news: each of the threads only runs on a single core, leaving 7
</span><br>
<span class="quotelev2">&gt;&gt; cores basically idle.
</span><br>
<span class="quotelev2">&gt;&gt; Sorta good news: if I provide a rank file I get the threads running on
</span><br>
<span class="quotelev2">&gt;&gt; different cores within each node (PITA.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's the first lines of output.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/mpi/gcc/openmpi-1.4-qlc/bin/mpirun -host c005,c006 -np 2 -rf
</span><br>
<span class="quotelev2">&gt;&gt; rank.file -x OMP_NUM_THREADS=4 hybrid4.gcc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello from thread 2 out of 4 from process 1 out of 2 on c006.local
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region: &#160; &#160; &#160; name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=2
</span><br>
<span class="quotelev2">&gt;&gt; Hello from thread 3 out of 4 from process 1 out of 2 on c006.local
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region: &#160; &#160; &#160; name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=3
</span><br>
<span class="quotelev2">&gt;&gt; Hello from thread 1 out of 4 from process 1 out of 2 on c006.local
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region: &#160; &#160; &#160; name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=1
</span><br>
<span class="quotelev2">&gt;&gt; Hello from thread 1 out of 4 from process 0 out of 2 on c005.local
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region: &#160; &#160; &#160; name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=1
</span><br>
<span class="quotelev2">&gt;&gt; Hello from thread 3 out of 4 from process 0 out of 2 on c005.local
</span><br>
<span class="quotelev2">&gt;&gt; Hello from thread 2 out of 4 from process 0 out of 2 on c005.local
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region: &#160; &#160; &#160; name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=3
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region: &#160; &#160; &#160; name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=2
</span><br>
<span class="quotelev2">&gt;&gt; Hello from thread 0 out of 4 from process 0 out of 2 on c005.local
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region: &#160; &#160; &#160; name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=0
</span><br>
<span class="quotelev2">&gt;&gt; Hello from thread 0 out of 4 from process 1 out of 2 on c006.local
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region: &#160; &#160; &#160; name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=0
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region: &#160; &#160; &#160; name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=3
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region: &#160; &#160; &#160; name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=2
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region: &#160; &#160; &#160; name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=0
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region: &#160; &#160; &#160; name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=3
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region: &#160; &#160; &#160; name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=3
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region: &#160; &#160; &#160; name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=2
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region: &#160; &#160; &#160; name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=0
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region: &#160; &#160; &#160; name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=1
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's the simple code:
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;omp.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev2">&gt;&gt; &#160;int numprocs, rank, namelen;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev2">&gt;&gt; &#160;int iam = 0, np = 1;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;char name[MPI_MAX_PROCESSOR_NAME]; &#160; /* MPI_MAX_PROCESSOR_NAME ==
</span><br>
<span class="quotelev2">&gt;&gt; 128 &#160; &#160; &#160; &#160; */
</span><br>
<span class="quotelev2">&gt;&gt; &#160;int O_ID; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;/* OpenMP thread ID
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; */
</span><br>
<span class="quotelev2">&gt;&gt; &#160;int M_ID; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;/* MPI rank ID
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; */
</span><br>
<span class="quotelev2">&gt;&gt; &#160;int rtn_val;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt; &#160;MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
</span><br>
<span class="quotelev2">&gt;&gt; &#160;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt; &#160;MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;#pragma omp parallel default(shared) private(iam, np,O_ID)
</span><br>
<span class="quotelev2">&gt;&gt; &#160;{
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;np = omp_get_num_threads();
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;iam = omp_get_thread_num();
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;printf(&quot;Hello from thread %d out of %d from process %d out of %d on %s\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; iam, np, rank, numprocs, processor_name);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;int i=0;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;int j=0;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;double counter=0;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;for(i =0;i&lt;99999999;i++)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;{
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; O_ID = omp_get_thread_num(); &#160; &#160; &#160; &#160; &#160;/* get OpenMP
</span><br>
<span class="quotelev2">&gt;&gt; thread ID &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; */
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; MPI_Get_processor_name(name,&amp;namelen);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; rtn_val = MPI_Comm_rank(MPI_COMM_WORLD,&amp;M_ID);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; printf(&quot;another parallel region: &#160; &#160; &#160; name:%s
</span><br>
<span class="quotelev2">&gt;&gt; MPI_RANK_ID=%d OMP_THREAD_ID=%d\n&quot;, name,M_ID,O_ID);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; for(j = 0;j&lt;999999999;j++)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160;{
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; counter=counter+i;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13864.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Previous message:</strong> <a href="13862.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>In reply to:</strong> <a href="13862.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13864.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Reply:</strong> <a href="13864.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
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
