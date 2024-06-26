<?
$subject_val = "Re: [OMPI users] Errors for openib, mpirun fails";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 22 09:50:05 2014" -->
<!-- isoreceived="20140722135005" -->
<!-- sent="Tue, 22 Jul 2014 13:50:02 +0000" -->
<!-- isosent="20140722135002" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Errors for openib, mpirun fails" -->
<!-- id="772E2D6E-2F06-4F92-9E21-B675C693A071_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMvdAs+z6Dt-YE+xpMeaOnuj2Pos2dqX0_=qW6ab2k7OaT3yww_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Errors for openib, mpirun fails<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-22 09:50:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24846.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<li><strong>Previous message:</strong> <a href="24844.php">Joshua Ladd: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<li><strong>In reply to:</strong> <a href="24841.php">Syed Ahsan Ali: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24854.php">Syed Ahsan Ali: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<li><strong>Reply:</strong> <a href="24854.php">Syed Ahsan Ali: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm, this does not make sense.
<br>
Your copy-n-paste shows that both machines (00 and 01) have the same guid/lid (sort of equivalent of mac address in ethernet world).
<br>
As you can guess these two can not be identical for two different machines (unless you moved the card around).
<br>
<p>Best,
<br>
Pasha
<br>
<p>On Jul 21, 2014, at 11:26 PM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&lt;mailto:ahsanshah01_at_[hidden]&gt;&gt; wrote:
<br>
<p>Yes I had checked running mpirun on all nodes one by one to see the problematic one. I had already mentioned that compute-01-01 is causing problem, when I remove it from the hostlist mpirun works fine. Here is ibstatus of compute-01-01.
<br>
<p>Infiniband device 'mlx4_0' port 1 status:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default gid:     fe80:0000:0000:0000:0024:e890:97ff:1c61
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base lid:        0x5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm lid:          0x1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:           4: ACTIVE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys state:      5: LinkUp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rate:            20 Gb/sec (4X DDR)
<br>
Infiniband device 'mlx4_0' port 2 status:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default gid:     fe80:0000:0000:0000:0024:e890:97ff:1c62
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base lid:        0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm lid:          0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:           2: INIT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys state:      5: LinkUp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rate:            20 Gb/sec (4X DDR)
<br>
<p><p>On Mon, Jul 21, 2014 at 6:57 PM, Shamis, Pavel &lt;shamisp_at_[hidden]&lt;mailto:shamisp_at_[hidden]&gt;&gt; wrote:
<br>
<p>You have to check the ports states on *all* nodes in the run/job/submission. Checking on a single node is not enough.
<br>
My guess is the 01-00 tries to connect 01-01 and the ports are down on 01-01.
<br>
<p>You may disable support for infiniband by adding --mca btl ^openib.
<br>
<p>Best,
<br>
Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Jul 21, 2014, at 3:17 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&lt;mailto:ahsanshah01_at_[hidden]&gt;&lt;mailto:ahsanshah01_at_[hidden]&lt;mailto:ahsanshah01_at_[hidden]&gt;&gt;&gt; wrote:
Dear All
I need your help to solve this cluster related issue causing mpirun malfunction. I get following warning for some of the nodes and then the route failure message comes causing failure to mpirun.
WARNING: There is at least one OpenFabrics device found but there are no active ports detected (or Open MPI was unable to use them).  This
is most certainly not what you wanted.  Check your cables, subnet
manager configuration, etc.  The openib BTL will be ignored for this
job.
   Local host: compute-01-01.private.dns.zone
--------------------------------------------------------------------------
   SETUP OF THE LM
     INITIALIZATIONS
     INPUT OF THE NAMELISTS
[pmd.pakmet.com:30198&lt;<a href="http://pmd.pakmet.com:30198/">http://pmd.pakmet.com:30198/</a>&gt;&lt;<a href="http://pmd.pakmet.com:30198/">http://pmd.pakmet.com:30198/</a>&gt;] 7 more processes have sent help message help-mpi-btl-openib.txt / no active ports found
[pmd.pakmet.com:30198&lt;<a href="http://pmd.pakmet.com:30198/">http://pmd.pakmet.com:30198/</a>&gt;&lt;<a href="http://pmd.pakmet.com:30198/">http://pmd.pakmet.com:30198/</a>&gt;] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
[compute-01-00.private.dns.zone][[40500,1],5][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.108.14 failed: No route to host (113)
[compute-01-00.private.dns.zone][[40500,1],4][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.108.14 failed: No route to host (113)
My questions are.
I don't include flags for running openmpi over infiniband then why it still gives warning. If the infiniband ports are not active then it should start the job over gigabit ethernet of cluster. Why it is unable to find the route while the node can be pinged and ssh from other nodes and master node as well.
The ibstatus of the above node (for which I was getting error) shows that both ports are up. What is causing error then?
[root_at_compute-01-00 ~]# ibstatus
Infiniband device 'mlx4_0' port 1 status:
        default gid:     fe80:0000:0000:0000:0024:e890:97ff:1c61
        base lid:        0x5
        sm lid:          0x1
        state:           4: ACTIVE
        phys state:      5: LinkUp
        rate:            20 Gb/sec (4X DDR)
Infiniband device 'mlx4_0' port 2 status:
        default gid:     fe80:0000:0000:0000:0024:e890:97ff:1c62
        base lid:        0x0
        sm lid:          0x0
        state:           2: INIT
        phys state:      5: LinkUp
        rate:            20 Gb/sec (4X DDR)
Thank you in advance for your guidance and support.
Regards
--
Ahsan
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24833.php">http://www.open-mpi.org/community/lists/users/2014/07/24833.php</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24835.php">http://www.open-mpi.org/community/lists/users/2014/07/24835.php</a>
--
Syed Ahsan Ali Bokhari
Electronic Engineer (EE)
Research &amp; Development Division
Pakistan Meteorological Department H-8/4, Islamabad.
Phone # off  +92518358714
Cell # +923155145014
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24841.php">http://www.open-mpi.org/community/lists/users/2014/07/24841.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24846.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<li><strong>Previous message:</strong> <a href="24844.php">Joshua Ladd: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<li><strong>In reply to:</strong> <a href="24841.php">Syed Ahsan Ali: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24854.php">Syed Ahsan Ali: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<li><strong>Reply:</strong> <a href="24854.php">Syed Ahsan Ali: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
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
