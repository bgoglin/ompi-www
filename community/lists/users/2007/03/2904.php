<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 23 14:06:39 2007" -->
<!-- isoreceived="20070323180639" -->
<!-- sent="Fri, 23 Mar 2007 14:06:33 -0400" -->
<!-- isosent="20070323180633" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI processes  swapping out" -->
<!-- id="46041729.1050803_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C228356B.127C%heywood_at_cshl.edu" -->
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
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-23 14:06:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2905.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Previous message:</strong> <a href="2903.php">Mike Houston: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2883.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2905.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Reply:</strong> <a href="2905.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Todd:
<br>
<p>I assume the system time is being consumed by
<br>
the calls to send and receive data over the TCP sockets.
<br>
As the number of processes in the job increases, then more
<br>
time is spent waiting for data from one of the other processes.
<br>
<p>I did a little experiment on a single node to see the difference
<br>
in system time consumed when running over TCP vs when
<br>
running over shared memory.   When running on a single
<br>
node and using the sm btl, I see almost 100% user time. 
<br>
I assume this is because the sm btl handles sending and
<br>
receiving its data within a shared memory segment. 
<br>
However, when I switch over to TCP, I see my system time
<br>
go up.  Note that this is on Solaris.
<br>
<p>RUNNING OVER SELF,SM
<br>
<span class="quotelev1"> &gt; mpirun -np 8 -mca btl self,sm hpcc.amd64
</span><br>
<p>&nbsp;&nbsp;&nbsp;PID USERNAME USR SYS TRP TFL DFL LCK SLP LAT VCX ICX SCL SIG PROCESS/NLWP
<br>
&nbsp;&nbsp;3505 rolfv    100 0.0 0.0 0.0 0.0 0.0 0.0 0.0   0  75 182   0 hpcc.amd64/1
<br>
&nbsp;&nbsp;3503 rolfv    100 0.0 0.0 0.0 0.0 0.0 0.0 0.2   0  69 116   0 hpcc.amd64/1
<br>
&nbsp;&nbsp;3499 rolfv     99 0.0 0.0 0.0 0.0 0.0 0.0 0.5   0 106 236   0 hpcc.amd64/1
<br>
&nbsp;&nbsp;3497 rolfv     99 0.0 0.0 0.0 0.0 0.0 0.0 1.0   0 169 200   0 hpcc.amd64/1
<br>
&nbsp;&nbsp;3501 rolfv     98 0.0 0.0 0.0 0.0 0.0 0.0 1.9   0 127 158   0 hpcc.amd64/1
<br>
&nbsp;&nbsp;3507 rolfv     98 0.0 0.0 0.0 0.0 0.0 0.0 2.0   0 244 200   0 hpcc.amd64/1
<br>
&nbsp;&nbsp;3509 rolfv     98 0.0 0.0 0.0 0.0 0.0 0.0 2.0   0 282 212   0 hpcc.amd64/1
<br>
&nbsp;&nbsp;3495 rolfv     97 0.0 0.0 0.0 0.0 0.0 0.0 3.2   0 237  98   0 hpcc.amd64/1
<br>
<p>RUNNING OVER SELF,TCP
<br>
<span class="quotelev1"> &gt;mpirun -np 8 -mca btl self,tcp hpcc.amd64
</span><br>
<p>&nbsp;&nbsp;&nbsp;PID USERNAME USR SYS TRP TFL DFL LCK SLP LAT VCX ICX SCL SIG PROCESS/NLWP
<br>
&nbsp;&nbsp;4316 rolfv     93 6.9 0.0 0.0 0.0 0.0 0.0 0.2   5 346 .6M   0 hpcc.amd64/1
<br>
&nbsp;&nbsp;4328 rolfv     91 8.4 0.0 0.0 0.0 0.0 0.0 0.4   3  59 .15   0 hpcc.amd64/1
<br>
&nbsp;&nbsp;4324 rolfv     98 1.1 0.0 0.0 0.0 0.0 0.0 0.7   2 270 .1M   0 hpcc.amd64/1
<br>
&nbsp;&nbsp;4320 rolfv     88  12 0.0 0.0 0.0 0.0 0.0 0.8   4 244 .15   0 hpcc.amd64/1
<br>
&nbsp;&nbsp;4322 rolfv     94 5.1 0.0 0.0 0.0 0.0 0.0 1.3   2 150 .2M   0 hpcc.amd64/1
<br>
&nbsp;&nbsp;4318 rolfv     92 6.7 0.0 0.0 0.0 0.0 0.0 1.4   5 236 .9M   0 hpcc.amd64/1
<br>
&nbsp;&nbsp;4326 rolfv     93 5.3 0.0 0.0 0.0 0.0 0.0 1.7   7 117 .2M   0 hpcc.amd64/1
<br>
&nbsp;&nbsp;4314 rolfv     91 6.6 0.0 0.0 0.0 0.0 1.3 0.9  19 150 .10   0 hpcc.amd64/1
<br>
<p>I also ran HPL over a larger cluster of 6 nodes, and noticed even higher
<br>
system times. 
<br>
<p>And lastly, I ran a simple MPI test over a cluster of 64 nodes, 2 procs 
<br>
per node
<br>
using Sun HPC ClusterTools 6, and saw about a 50/50 split between user
<br>
and system time.
<br>
<p>&nbsp;&nbsp;PID USERNAME USR SYS TRP TFL DFL LCK SLP LAT VCX ICX SCL SIG PROCESS/NLWP
<br>
&nbsp;11525 rolfv     55  44 0.1 0.0 0.0 0.0 0.1 0.4  76 960 .3M   0 
<br>
maxtrunc_ct6/1
<br>
&nbsp;11526 rolfv     54  45 0.0 0.0 0.0 0.0 0.0 1.0   0 362 .4M   0 
<br>
maxtrunc_ct6/1
<br>
<p>Is it possible that everything is working just as it should?
<br>
<p>Rolf
<br>
<p>Heywood, Todd wrote On 03/22/07 13:30,:
<br>
<p><span class="quotelev1">&gt;Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Well, according to the FAQ, aggressive mode can be &quot;forced&quot; so I did try
</span><br>
<span class="quotelev1">&gt;setting OMPI_MCA_mpi_yield_when_idle=0 before running. I also tried turning
</span><br>
<span class="quotelev1">&gt;processor/memory affinity on. Efffects were minor. The MPI tasks still cycle
</span><br>
<span class="quotelev1">&gt;bewteen run and sleep states, driving up system time well over user time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Mpstat shows SGE is indeed giving 4 or 2 slots per node as approporiate
</span><br>
<span class="quotelev1">&gt;(depending on memory) and the MPI tasks are using 4 or 2 cores, but to be
</span><br>
<span class="quotelev1">&gt;sure, I also tried running directly with a hostfile with slots=4 or slots=2.
</span><br>
<span class="quotelev1">&gt;The same behavior occurs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This behavior is a function of the size of the job. I.e. As I scale from 200
</span><br>
<span class="quotelev1">&gt;to 800 tasks the run/sleep cycling increases, so that system time grows from
</span><br>
<span class="quotelev1">&gt;maybe half the user time to maybe 5 times user time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This is for TCP/gigE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Todd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 3/22/07 12:19 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Just for clarification: ompi_info only shows the *default* value of the MCA
</span><br>
<span class="quotelev2">&gt;&gt;parameter. In this case, mpi_yield_when_idle defaults to aggressive, but
</span><br>
<span class="quotelev2">&gt;&gt;that value is reset internally if the system sees an &quot;oversubscribed&quot;
</span><br>
<span class="quotelev2">&gt;&gt;condition.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;The issue here isn't how many cores are on the node, but rather how many
</span><br>
<span class="quotelev2">&gt;&gt;were specifically allocated to this job. If the allocation wasn't at least 2
</span><br>
<span class="quotelev2">&gt;&gt;(in your example), then we would automatically reset mpi_yield_when_idle to
</span><br>
<span class="quotelev2">&gt;&gt;be non-aggressive, regardless of how many cores are actually on the node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On 3/22/07 7:14 AM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Yes, I'm using SGE. I also just noticed that when 2 tasks/slots run on a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;4-core node, the 2 tasks are still cycling between run and sleep, with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;higher system time than user time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Ompi_info shows the MCA parameter mpi_yield_when_idle to be 0 (aggressive),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;so that suggests the tasks aren't swapping out on bloccking calls.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Still puzzled.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Todd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;On 3/22/07 7:36 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Are you using a scheduler on your system?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;More specifically, does Open MPI know that you have for process slots
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;on each node?  If you are using a hostfile and didn't specify
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&quot;slots=4&quot; for each host, Open MPI will think that it's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;oversubscribing and will therefore call sched_yield() in the depths
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;of its progress engine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;On Mar 21, 2007, at 5:08 PM, Heywood, Todd wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;P.s. I should have said this this is a pretty course-grained
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;application,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;and netstat doesn't show much communication going on (except in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;stages).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;On 3/21/07 4:21 PM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;I noticed that my OpenMPI processes are using larger amounts of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;system time
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;than user time (via vmstat, top). I'm running on dual-core, dual-CPU
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;Opterons, with 4 slots per node, where the program has the nodes to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;themselves. A closer look showed that they are constantly
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;switching between
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;run and sleep states with 4-8 page faults per second.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;Why would this be? It doesn't happen with 4 sequential jobs
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;running on a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;node, where I get 99% user time, maybe 1% system time.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;The processes have plenty of memory. This behavior occurs whether
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;I use
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;processor/memory affinity or not (there is no oversubscription).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;Todd
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;            
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2905.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Previous message:</strong> <a href="2903.php">Mike Houston: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2883.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2905.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Reply:</strong> <a href="2905.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
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
