<?
$subject_val = "Re: [OMPI users] Regression in MPI_File_close?!";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  2 07:41:39 2016" -->
<!-- isoreceived="20160602114139" -->
<!-- sent="Thu, 2 Jun 2016 06:41:40 -0500" -->
<!-- isosent="20160602114140" -->
<!-- name="Edgar Gabriel" -->
<!-- email="egabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regression in MPI_File_close?!" -->
<!-- id="e931fad7-89c0-6c23-507d-2895b4ebdccd_at_central.uh.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="392262f3-0c58-8b64-04aa-271446b4e6b1_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Regression in MPI_File_close?!<br>
<strong>From:</strong> Edgar Gabriel (<em>egabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-02 07:41:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29349.php">Ping Wang: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Previous message:</strong> <a href="29347.php">Gilles Gouaillardet: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/05/29337.php">Gilles Gouaillardet: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29394.php">Rob Latham: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>Reply:</strong> <a href="29394.php">Rob Latham: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>I think the semantics of MPI_File_close does not necessarily mandate 
<br>
that there has to be an MPI_Barrier based on that text snippet. However, 
<br>
I think what the Barrier does in this scenario is 'hide' a consequence 
<br>
of an implementation aspect. So the MPI standard might not mandate a 
<br>
Barrier synchronization, but the actual implementation does.
<br>
<p>( I have btw. not have had yet the time to think through the different 
<br>
mechanisms that ompio offers for shared file pointers, and whether all 
<br>
of them truly require a Barrier for the same reason). Hope to get to 
<br>
that soon.
<br>
<p>THanks
<br>
<p>EDga
<br>
<p><p>On 5/31/2016 9:33 PM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Edgar,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is the bug reported at 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29333.php">http://www.open-mpi.org/community/lists/users/2016/05/29333.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; now i am having some second thoughts about it ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; per the MPI_File_close man page :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;MPI_File_close  first  synchronizes  file  state, then closes the 
</span><br>
<span class="quotelev1">&gt; file associated with fh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_File_close is a collective routine. The user is responsible for 
</span><br>
<span class="quotelev1">&gt; ensuring that all outstanding requests associated with fh have 
</span><br>
<span class="quotelev1">&gt; completed before calling MPI_File_close.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; does this implies MPI_File_close() internally performs a MPI_Barrier() ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or am i over-interpreting the man page ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My point is if all tasks but one call MPI_File_close() *before* the 
</span><br>
<span class="quotelev1">&gt; other one calls MPI_File_write_at(), there is really nothing to flush, 
</span><br>
<span class="quotelev1">&gt; and though MPI_File_close() is a collective routine (just like 
</span><br>
<span class="quotelev1">&gt; MPI_Bcast() ) that does not necessarily means it has a MPI_Barrier() 
</span><br>
<span class="quotelev1">&gt; semantic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/31/2016 11:18 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; just for my understanding, which bug in ompio are you referring? I am 
</span><br>
<span class="quotelev2">&gt;&gt; only aware of a single (pretty minor) pending issue in the 2.x series
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 5/31/2016 1:28 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the report.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the romio included in the v1.10 series is a bit old and did not 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; include the fix,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i made PR #1206 for that 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29333.php">http://www.open-mpi.org/community/lists/users/2016/05/29333.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; feel free to manually apply the patch available at 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://github.com/open-mpi/ompi-release/commit/a0ea9fb6cbe4cf71567c9fc7fd8f4be384617ad4.diff">https://github.com/open-mpi/ompi-release/commit/a0ea9fb6cbe4cf71567c9fc7fd8f4be384617ad4.diff</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; note that the issue is already fixed in romio of the v2.x series and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; master.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that being said, the default io module here is ompio, and it is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; currently buggy, so if you are using these series, you need to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --mca io romio314 ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the time being
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 5/31/2016 2:27 PM, Cihan Altinay wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello list,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I recently upgraded my distribution-supplied OpenMPI packages 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (debian) from 1.6.5 to 1.10.2 and the attached test is no longer 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; guaranteed to produce the expected output.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In plain English what the test is doing is:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1) open a file in parallel (all on the same local ext3/4 filesystem),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2) use MPI_File_write_at() or MPI_File_write_shared() to write to it,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3) close the file using MPI_File_close(),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4) then check the file size (either by stat(), or by fseek+ftell)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My reading of the standard is that MPI_File_close() is a collective 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; operation so I should reliably get the correct file size in step 4. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, while this worked with version 1.6.5 and with Intel MPI 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this is no longer the case with the current OpenMPI version.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I was able to confirm the same behaviour on a fresh Ubuntu 16.0.4 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; install in a VM.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The more ranks I use the more likely I get a wrong file size.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there anything I'm missing or is this a regression?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cihan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/05/29333.php">http://www.open-mpi.org/community/lists/users/2016/05/29333.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev2">&gt;&gt; Associate Professor
</span><br>
<span class="quotelev2">&gt;&gt; Parallel Software Technologies Lab<a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev2">&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev2">&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev2">&gt;&gt; --
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
<span class="quotelev2">&gt;&gt; Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/05/29335.php">http://www.open-mpi.org/community/lists/users/2016/05/29335.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
--
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29348/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29349.php">Ping Wang: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Previous message:</strong> <a href="29347.php">Gilles Gouaillardet: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/05/29337.php">Gilles Gouaillardet: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29394.php">Rob Latham: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>Reply:</strong> <a href="29394.php">Rob Latham: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
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
