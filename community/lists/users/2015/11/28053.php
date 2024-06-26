<?
$subject_val = "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 05:32:00 2015" -->
<!-- isoreceived="20151119103200" -->
<!-- sent="Thu, 19 Nov 2015 11:31:37 +0100" -->
<!-- isosent="20151119103137" -->
<!-- name="Nick Papior" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler" -->
<!-- id="CAAbhqc75n+NAx9AA2pqNecuFaZW3HZR32dbj=FXS3frz8pLDRw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="8337B490252F0944BF1D38541059627E173BA290_at_DLREXMBX01.intra.dlr.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler<br>
<strong>From:</strong> Nick Papior (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-19 05:31:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28054.php">Federico Reghenzani: "Re: [OMPI users] Strange problem with SSH"</a>
<li><strong>Previous message:</strong> <a href="28052.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with	Intel-Ftn-compiler"</a>
<li><strong>In reply to:</strong> <a href="28052.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with	Intel-Ftn-compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28055.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Reply:</strong> <a href="28055.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe I can chip in,
<br>
<p>We use OpenMPI 1.10.1 with Intel /2016.1.0.423501 without problems.
<br>
<p>I could not get 1.10.0 to work, one reason is:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2015/09/27655.php">http://www.open-mpi.org/community/lists/users/2015/09/27655.php</a>
<br>
<p>On a side-note, please note that if you require scalapack you may need to
<br>
follow this approach:
<br>
<a href="https://software.intel.com/en-us/forums/intel-math-kernel-library/topic/590302">https://software.intel.com/en-us/forums/intel-math-kernel-library/topic/590302</a>
<br>
<p>2015-11-19 11:24 GMT+01:00 &lt;Michael.Rachner_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Sorry, Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I cannot  update to more recent versions, because what I used is the
</span><br>
<span class="quotelev1">&gt; newest combination of OpenMPI and Intel-Ftn  available on that cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When looking at the list of improvements  on the OpenMPI website for
</span><br>
<span class="quotelev1">&gt;  OpenMPI 1.10.1 compared to 1.10.0, I do not remember having seen this item
</span><br>
<span class="quotelev1">&gt; to be corrected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greeting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael Rachner
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Von:* users [mailto:users-bounces_at_[hidden]] *Im Auftrag von *Gilles
</span><br>
<span class="quotelev1">&gt; Gouaillardet
</span><br>
<span class="quotelev1">&gt; *Gesendet:* Donnerstag, 19. November 2015 10:21
</span><br>
<span class="quotelev1">&gt; *An:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Betreff:* Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0
</span><br>
<span class="quotelev1">&gt; with Intel-Ftn-compiler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I remember i saw similar reports.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you give a try to the latest v1.10.1 ?
</span><br>
<span class="quotelev1">&gt; And if that still does not work, can you upgrade icc suite and give it an
</span><br>
<span class="quotelev1">&gt; other try ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I cannot remember whether this is an ifort bug or the way ompi uses
</span><br>
<span class="quotelev1">&gt; fortran...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Btw, any reason why you do not
</span><br>
<span class="quotelev1">&gt; Use mpi_f08 ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael.Rachner_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear developers of OpenMPI,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to run our parallelized Ftn-95 code on a Linux cluster with
</span><br>
<span class="quotelev1">&gt; OpenMPI-1-10.0 and Intel-16.0.0 Fortran compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the code I use the  module MPI  (&#226;&#128;&#156;use MPI&#226;&#128;&#157;-stmts).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However I am not able to compile the code, because of compiler error
</span><br>
<span class="quotelev1">&gt; messages like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /src_SPRAY/mpi_wrapper.f90(2065): error #6285: There is no matching
</span><br>
<span class="quotelev1">&gt; specific subroutin for this generic subroutine call.   [MPI_REDUCE]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem seems for me to be this one:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The interfaces in the module MPI for the MPI-routines do not accept a send
</span><br>
<span class="quotelev1">&gt; or receive buffer array, which is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; actually a variable, an array element or a constant (like MPI_IN_PLACE).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Example 1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      This does not work (gives the compiler error message:      error
</span><br>
<span class="quotelev1">&gt; #6285: There is no matching specific subroutin for this generic subroutine
</span><br>
<span class="quotelev1">&gt; call  )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              ivar=123    ! &#195;&#159; ivar is an integer variable, not an array
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           *call* MPI_BCAST( ivar, 1, MPI_INTEGER, 0, MPI_COMM_WORLD),
</span><br>
<span class="quotelev1">&gt; ierr_mpi )    ! &#195;&#159;- this should work, but is not accepted by the compiler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       only this cumbersome workaround works:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               ivar=123
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 allocate( iarr(1) )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 iarr(1) = ivar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *         call* MPI_BCAST( iarr, 1, MPI_INTEGER, 0, MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt; ierr_mpi )    ! &#195;&#159;- this workaround works
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 ivar = iarr(1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 deallocate( iarr(1) )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Example 2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Any call of an MPI-routine with MPI_IN_PLACE does not work, like that
</span><br>
<span class="quotelev1">&gt; coding:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       *if*(lmaster) *then*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         *call* MPI_REDUCE( MPI_IN_PLACE, rbuffarr, nelem, MPI_REAL8,
</span><br>
<span class="quotelev1">&gt; MPI_MAX &amp;    ! &#195;&#159;- this should work, but is not accepted by the compiler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                          ,0_INT4, MPI_COMM_WORLD, ierr_mpi
</span><br>
<span class="quotelev1">&gt; )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       *else*  ! slaves
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         *call* MPI_REDUCE( rbuffarr, rdummyarr, nelem, MPI_REAL8, MPI_MAX
</span><br>
<span class="quotelev1">&gt; &amp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         ,0_INT4, MPI_COMM_WORLD, ierr_mpi )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       *endif*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     This results in this compiler error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       /src_SPRAY/mpi_wrapper.f90(2122): error #6285: There is no matching
</span><br>
<span class="quotelev1">&gt; specific subroutine for this generic subroutine call.   [MPI_REDUCE]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             call MPI_REDUCE( MPI_IN_PLACE, rbuffarr, nelem, MPI_REAL8,
</span><br>
<span class="quotelev1">&gt; MPI_MAX &amp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In our code I observed the bug with MPI_BCAST, MPI_REDUCE, MPI_ALLREDUCE,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but probably there may be other MPI-routines with the same kind of bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This bug occurred for                               :     OpenMPI-1.10.0
</span><br>
<span class="quotelev1">&gt;  with Intel-16.0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In contrast, this bug did NOT occur for:     OpenMPI-1.8.8    with
</span><br>
<span class="quotelev1">&gt; Intel-16.0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    OpenMPI-1.8.8    with Intel-15.0.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                              OpenMPI-1.10.0  with
</span><br>
<span class="quotelev1">&gt; gfortran-5.2.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael Rachner
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28052.php">http://www.open-mpi.org/community/lists/users/2015/11/28052.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28053/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28054.php">Federico Reghenzani: "Re: [OMPI users] Strange problem with SSH"</a>
<li><strong>Previous message:</strong> <a href="28052.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with	Intel-Ftn-compiler"</a>
<li><strong>In reply to:</strong> <a href="28052.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with	Intel-Ftn-compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28055.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Reply:</strong> <a href="28055.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
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
