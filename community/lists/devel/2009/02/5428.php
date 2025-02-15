<?
$subject_val = "Re: [OMPI devel] RFC:	Eliminateompi/class/ompi_[circular_buffer_]fifo.h";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 16 14:12:36 2009" -->
<!-- isoreceived="20090216191236" -->
<!-- sent="Mon, 16 Feb 2009 14:12:26 -0500" -->
<!-- isosent="20090216191226" -->
<!-- name="Matney Sr, Kenneth D." -->
<!-- email="matneykdsr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC:	Eliminateompi/class/ompi_[circular_buffer_]fifo.h" -->
<!-- id="537C6C0940C6C143AA46A88946B8541710E9D942_at_ORNLEXCHANGE.ornl.gov" -->
<!-- charset="iso-8859-7" -->
<!-- inreplyto="4995A2E6.1000708_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC:	Eliminateompi/class/ompi_[circular_buffer_]fifo.h<br>
<strong>From:</strong> Matney Sr, Kenneth D. (<em>matneykdsr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-16 14:12:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5429.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562"</a>
<li><strong>Previous message:</strong> <a href="5427.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] RFC:	Eliminateompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>In reply to:</strong> <a href="5414.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5409.php">Jeff Squyres: "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry about the premature send...
<br>
<p>The basic mechanics of this is similar to the problem with the portals 
<br>
BTL that I fixed.  However, in my case, the problem manifested itself 
<br>
with the Intel test MPI_Send_Fairness_c (and MPI_Isend_Fairness_c) at 
<br>
60 processes (the limit that MTT imposes on the Intel tests).
<br>
<p>The original code followed the portals design document for MPI pretty 
<br>
well.  When the receiver is overwhelmed, a &quot;reject&quot; entry is used to 
<br>
handle the excess messages.  One of the features of this &quot;reject&quot; entry 
<br>
is that the receiver (at the BTL level) never interacts with the actual 
<br>
message.  The problem was that the sender did not recognize the return 
<br>
ACK from portals [in mca_btl_portals_component_progress()] as a failure.
<br>
So, the sender did not resend a message that the receiver was expecting.
<br>
While I fixed it in the trunk, I had to disable mca_btl_portals_sendi()
<br>
because there is a potential for this function to be used with a 0-byte
<br>
portals message payload.  For this particular test, 
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1791">https://svn.open-mpi.org/trac/ompi/ticket/1791</a>, we would not have
<br>
seen a failure because, the root process would not know that it had
<br>
missed a message and the non-root processes would not have diagnosed
<br>
a need to resend.  As corrected, the root process still is FD&amp;H and
<br>
the non-root processes will keep re-transmitting until success.
<br>
<p>Sorry for boring you about portals.  In the sm case, the non-root 
<br>
processes continually are appending to FIFOs.  Obviously, these blasters 
<br>
can append to the FIFOs much more quickly than the processes can remove 
<br>
entries:  
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;S7 --&gt; S0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;S6 --&gt; S1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;S5 --&gt; S2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;S4 --&gt; S3
<br>
<p>In the first cycle, everyone is busy.  In the second cycle, S7, S6, S5, 
<br>
and S4 are ready for the next reduction, but S3, S2, S1, and S0 still 
<br>
are on the hook, meaning that the latter FIFOs are going to grow at
<br>
a faster rate:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;S3 --&gt; S0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;S2 --&gt; S1
<br>
<p>Now, S3 and S2 are ready for the next reduction, but S0 and S1 still have
<br>
work left in the current reduction:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;S1 --&gt; S0
<br>
<p>Since S0 (the root process) takes a little time to finish processing the
<br>
reduction, it is going to be a little behind S1.  So we end up with the 
<br>
Following timings:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;S0: (3+&#196;)T
<br>
&nbsp;&nbsp;&nbsp;&nbsp;S1:     3T
<br>
&nbsp;&nbsp;&nbsp;&nbsp;S2:     2T
<br>
&nbsp;&nbsp;&nbsp;&nbsp;S3:     2T
<br>
&nbsp;&nbsp;&nbsp;&nbsp;S4:     1T
<br>
&nbsp;&nbsp;&nbsp;&nbsp;S5:     1T    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;S6:     1T    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;S7:     1T    
<br>
<p>If sm used a system of ACKs as in portals, we would know when we
<br>
are overloading the root process.  However, since it does not, and the
<br>
reduction itself is non-blocking, we have the potential to exhaust memory.
<br>
I guess that the real question is whether the reduction should be blocking
<br>
or whether we expect the user to protect himself.
<br>
<pre>
--
-----Original Message-----
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Eugene Loh
Sent: Friday, February 13, 2009 11:42 AM
To: Open MPI Developers
Subject: Re: [OMPI devel] RFC: Eliminateompi/class/ompi_[circular_buffer_]fifo.h
George Bosilca wrote:
&gt; I can't confirm or deny. The only thing I can tell is that the same  
&gt; test works fine over other BTL, so this tent either to pinpoint a  
&gt; problem in the sm BTL or in a particular path in the PML (the one 
&gt; used  by the sm BTL). I'll have to dig a little bit more into it, but 
&gt; I was  hoping to do it in the context of the new sm BTL (just to avoid 
&gt; having  to do it twice).
Okay.  I'll try to get &quot;single queue&quot; put back soon and might look at 
1791 along the way.
But here is what I wonder.  Let's say you have one-way traffic -- either 
rank A sending rank B messages without ever any traffic in the other 
direction, or repeated MPI_Reduce operations always with the same root 
-- and the senders somehow get well ahead of the receiver.  Say, A wants 
to pump 1,000,000 messages over and B is busy doing something else.  
What should happen?  What should the PML and BTL do?  The conditions 
could range from B not being in MPI at all, or B listening to the BTL 
without yet having the posted receives to match.  Should the connection 
become congested and force the sender to wait -- and if so, is this in 
the BTL or PML?  Or, should B keep on queueing up the unexpected messages?
After some basic &quot;single queue&quot; putbacks, I'll try to look at the code 
and understand what the PML is doing in cases like this.
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5429.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562"</a>
<li><strong>Previous message:</strong> <a href="5427.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] RFC:	Eliminateompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>In reply to:</strong> <a href="5414.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5409.php">Jeff Squyres: "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
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
