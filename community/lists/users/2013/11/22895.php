<?
$subject_val = "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  1 16:51:55 2013" -->
<!-- isoreceived="20131101205155" -->
<!-- sent="Fri, 1 Nov 2013 15:51:54 -0500" -->
<!-- isosent="20131101205154" -->
<!-- name="Jim Parker" -->
<!-- email="jimparker96313_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing" -->
<!-- id="CAEGKUywKTK6P=e2cdhJtAckG8zx3LC4MFgxURqG9AKmp3YQsOw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F9A11F1_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing<br>
<strong>From:</strong> Jim Parker (<em>jimparker96313_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-01 16:51:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22896.php">San B: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="22894.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/10/22890.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22944.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Reply:</strong> <a href="22944.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
@Jeff,
<br>
<p>&nbsp;Well, it may have been &quot;just for giggles&quot;, but it Worked!! My helloWorld
<br>
program ran as expected.  My original code ran through the initialization
<br>
parts without overwriting data.  It will take a few days to finish
<br>
computation and analysis to ensure it ran as expected.  I'll report back
<br>
when I get done.
<br>
<p>It looks like a good Friday!
<br>
<p>Cheers,
<br>
--Jim
<br>
<p>On Thu, Oct 31, 2013 at 4:06 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; For giggles, try using MPI_STATUS_IGNORE (assuming you don't need to look
</span><br>
<span class="quotelev1">&gt; at the status at all).  See if that works for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Meaning: I wonder if we're computing the status size for Fortran
</span><br>
<span class="quotelev1">&gt; incorrectly in the -i8 case...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2013, at 1:58 PM, Jim Parker &lt;jimparker96313_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Some additional info that may jog some solutions.  Calls to MPI_SEND do
</span><br>
<span class="quotelev1">&gt; not cause memory corruption.  Only calls to MPI_RECV.  Since the main
</span><br>
<span class="quotelev1">&gt; difference is the fact that MPI_RECV needs a &quot;status&quot; array and SEND does
</span><br>
<span class="quotelev1">&gt; not, seems to indicate to me that something is wrong with status.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, I can run a C version of the helloWorld program with no errors.
</span><br>
<span class="quotelev1">&gt;  However, int types are only 4-byte.  To send 8byte integers, I define
</span><br>
<span class="quotelev1">&gt; tempInt as long int and pass MPI_LONG as a type.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; @Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;   I got a copy of the openmpi conf.log.  See attached.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt; --Jim
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Oct 30, 2013 at 10:55 PM, Jim Parker &lt;jimparker96313_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Ok, all, where to begin...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Perhaps I should start with the most pressing issue for me.  I need
</span><br>
<span class="quotelev1">&gt; 64-bit indexing
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; @Martin,
</span><br>
<span class="quotelev2">&gt; &gt;    you indicated that even if I get this up and running, the MPI library
</span><br>
<span class="quotelev1">&gt; still uses signed 32-bit ints to count (your term), or index (my term) the
</span><br>
<span class="quotelev1">&gt; recvbuffer lengths.  More concretely,
</span><br>
<span class="quotelev2">&gt; &gt; in a call to MPI_Allgatherv( buffer, count, MPI_Integer, recvbuf,
</span><br>
<span class="quotelev1">&gt; recv-count, displ, MPI_integer, MPI_COMM_WORLD, status, mpierr): count,
</span><br>
<span class="quotelev1">&gt; recvcounts, and displs must be  32-bit integers, not 64-bit.  Actually, all
</span><br>
<span class="quotelev1">&gt; I need is displs to hold 64-bit values...
</span><br>
<span class="quotelev2">&gt; &gt; If this is true, then compiling OpenMPI this way is not a solution.
</span><br>
<span class="quotelev1">&gt;  I'll have to restructure my code to collect 31-bit chunks...
</span><br>
<span class="quotelev2">&gt; &gt; Not that it matters, but I'm not using DIRAC, but a custom code to
</span><br>
<span class="quotelev1">&gt; compute circuit analyses.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; @Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;   Interesting, your runtime behavior has a different error than mine.
</span><br>
<span class="quotelev1">&gt;  You have problems with the passed variable tempInt, which would make sense
</span><br>
<span class="quotelev1">&gt; for the reasons you gave.  However, my problem involves the fact that the
</span><br>
<span class="quotelev1">&gt; local variable &quot;rank&quot; gets overwritten by a memory corruption after
</span><br>
<span class="quotelev1">&gt; MPI_RECV is called.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Re: config.log. I will try to have the admin guy recompile tomorrow and
</span><br>
<span class="quotelev1">&gt; see if I can get the log for you.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; BTW, I'm using the gcc 4.7.2 compiler suite on a Rocks 5.4 HPC cluster.
</span><br>
<span class="quotelev1">&gt;  I use the options -m64 and -fdefault-integer-8
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt; --Jim
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Oct 30, 2013 at 7:36 PM, Martin Siegert &lt;siegert_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jim,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have quite a bit experience with compiling openmpi for dirac.
</span><br>
<span class="quotelev2">&gt; &gt; Here is what I use to configure openmpi:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=$instdir \
</span><br>
<span class="quotelev2">&gt; &gt;             --disable-silent-rules \
</span><br>
<span class="quotelev2">&gt; &gt;             --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev2">&gt; &gt;             --with-threads=posix \
</span><br>
<span class="quotelev2">&gt; &gt;             --enable-cxx-exceptions \
</span><br>
<span class="quotelev2">&gt; &gt;             --with-tm=$torquedir \
</span><br>
<span class="quotelev2">&gt; &gt;             --with-wrapper-ldflags=&quot;-Wl,-rpath,${instdir}/lib&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;             --with-openib \
</span><br>
<span class="quotelev2">&gt; &gt;             --with-hwloc=$hwlocdir \
</span><br>
<span class="quotelev2">&gt; &gt;             CC=gcc \
</span><br>
<span class="quotelev2">&gt; &gt;             CXX=g++ \
</span><br>
<span class="quotelev2">&gt; &gt;             FC=&quot;$FC&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;             F77=&quot;$FC&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;             CFLAGS=&quot;-O3&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;             CXXFLAGS=&quot;-O3&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;             FFLAGS=&quot;-O3 $I8FLAG&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;             FCFLAGS=&quot;-O3 $I8FLAG&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You need to set FC to either ifort or gfortran (those are the two
</span><br>
<span class="quotelev1">&gt; compilers
</span><br>
<span class="quotelev2">&gt; &gt; that I have used) and set I8FLAG to -fdefault-integer-8 for gfortran or
</span><br>
<span class="quotelev2">&gt; &gt; -i8 for ifort.
</span><br>
<span class="quotelev2">&gt; &gt; Set torquedir to the directory where torque is installed ($torquedir/lib
</span><br>
<span class="quotelev2">&gt; &gt; must contain libtorque.so), if you are running jobs under torque;
</span><br>
<span class="quotelev1">&gt; otherwise
</span><br>
<span class="quotelev2">&gt; &gt; remove the --with-tm=... line.
</span><br>
<span class="quotelev2">&gt; &gt; Set hwlocdir to the directory where you have hwloc installed. You many
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev2">&gt; &gt; need the -with-hwloc=... option because openmpi comes with a hwloc
</span><br>
<span class="quotelev1">&gt; version
</span><br>
<span class="quotelev2">&gt; &gt; (I don't have experience with that because we install hwloc
</span><br>
<span class="quotelev1">&gt; independently).
</span><br>
<span class="quotelev2">&gt; &gt; Set instdir to the directory where you what to install openmpi.
</span><br>
<span class="quotelev2">&gt; &gt; You may or may not need the --with-openib option depending on whether
</span><br>
<span class="quotelev2">&gt; &gt; you have an Infiniband interconnect.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; After configure/make/make install this so compiled version can be used
</span><br>
<span class="quotelev2">&gt; &gt; with dirac without changing the dirac source code.
</span><br>
<span class="quotelev2">&gt; &gt; (there is one caveat: you should make sure that all &quot;count&quot; variables
</span><br>
<span class="quotelev2">&gt; &gt; in MPI calls in dirac are smaller than 2^31-1. I have run into a few
</span><br>
<span class="quotelev1">&gt; cases
</span><br>
<span class="quotelev2">&gt; &gt; when that is not the case; this problem can be overcome by replacing
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Allreduce calls in dirac with a wrapper that calls MPI_Allreduce
</span><br>
<span class="quotelev2">&gt; &gt; repeatedly). This is what I use to setup dirac:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; export PATH=$instdir/bin
</span><br>
<span class="quotelev2">&gt; &gt; ./setup --prefix=$diracinstdir \
</span><br>
<span class="quotelev2">&gt; &gt;         --fc=mpif90 \
</span><br>
<span class="quotelev2">&gt; &gt;         --cc=mpicc \
</span><br>
<span class="quotelev2">&gt; &gt;         --int64 \
</span><br>
<span class="quotelev2">&gt; &gt;         --explicit-libs=&quot;-lmkl_intel_ilp64 -lmkl_sequential -lmkl_core&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; where $instdir is the directory where you installed openmpi from above.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would never use the so-compiled openmpi version for anything other
</span><br>
<span class="quotelev2">&gt; &gt; than dirac though. I am not saying that it cannot work (at a minimum
</span><br>
<span class="quotelev2">&gt; &gt; you need to compile Fortran programs with the appropriate I8FLAG),
</span><br>
<span class="quotelev2">&gt; &gt; but it is an unnecessary complication: I have not encountered a piece
</span><br>
<span class="quotelev2">&gt; &gt; of software other than dirac that requires this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt; Martin
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Martin Siegert
</span><br>
<span class="quotelev2">&gt; &gt; Head, Research Computing
</span><br>
<span class="quotelev2">&gt; &gt; WestGrid/ComputeCanada Site Lead
</span><br>
<span class="quotelev2">&gt; &gt; Simon Fraser University
</span><br>
<span class="quotelev2">&gt; &gt; Burnaby, British Columbia
</span><br>
<span class="quotelev2">&gt; &gt; Canada
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Oct 30, 2013 at 06:00:56PM -0500, Jim Parker wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Jeff,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      Here's what I know:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    1.  Checked FAQs.  Done
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    2.  Version 1.6.5
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    3. config.log file has been removed by the sysadmin...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    4. ompi_info -a from head node is in attached as headnode.out
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    5. N/A
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    6. compute node info in attached as compute-x-yy.out
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    7. As discussed, local variables are being overwritten after calls
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    MPI_RECV from Fortran code
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    8. ifconfig output from head node and computes listed as
</span><br>
<span class="quotelev1">&gt; *-ifconfig.out
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Cheers,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    --Jim
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    On Wed, Oct 30, 2013 at 5:29 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    &lt;[1]jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      Can you send the information listed here:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;          [2]<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    On Oct 30, 2013, at 6:22 PM, Jim Parker &lt;[3]
</span><br>
<span class="quotelev1">&gt; jimparker96313_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; Jeff and Ralph,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt;   Ok, I downshifted to a helloWorld example (attached), bottom
</span><br>
<span class="quotelev1">&gt; line
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    after I hit the MPI_Recv call, my local variable (rank) gets borked.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; I have compiled with -m64 -fdefault-integer-8 and even have
</span><br>
<span class="quotelev1">&gt; assigned
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    kind=8 to the integers (which would be the preferred method in my
</span><br>
<span class="quotelev1">&gt; case)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; Your help is appreciated.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; Cheers,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; --Jim
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; On Wed, Oct 30, 2013 at 4:49 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    &lt;[4]jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; On Oct 30, 2013, at 4:35 PM, Jim Parker &lt;[5]
</span><br>
<span class="quotelev1">&gt; jimparker96313_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;    &gt; &gt;   I have recently built a cluster that uses the 64-bit indexing
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    feature of OpenMPI following the directions at
</span><br>
<span class="quotelev1">&gt; &gt; &gt;    &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    [6]
</span><br>
<span class="quotelev1">&gt; <a href="http://wiki.chem.vu.nl/dirac/index.php/How_to_build_MPI_libraries_fo">http://wiki.chem.vu.nl/dirac/index.php/How_to_build_MPI_libraries_fo</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    r_64-bit_integers
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; That should be correct (i.e., passing -i8 in FFLAGS and FCFLAGS
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    OMPI 1.6.x).
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;    &gt; &gt; My question is what are the new prototypes for the MPI calls ?
</span><br>
<span class="quotelev1">&gt; &gt; &gt;    &gt; &gt; specifically
</span><br>
<span class="quotelev1">&gt; &gt; &gt;    &gt; &gt; MPI_RECV
</span><br>
<span class="quotelev1">&gt; &gt; &gt;    &gt; &gt; MPI_Allgathterv
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; They're the same as they've always been.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; The magic is that the -i8 flag tells the compiler &quot;make all
</span><br>
<span class="quotelev1">&gt; Fortran
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    INTEGERs be 8 bytes, not (the default) 4.&quot;  So Ralph's answer was
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    correct in that all the MPI parameters are INTEGERs -- but you can
</span><br>
<span class="quotelev1">&gt; tell
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    the compiler that all INTEGERs are 8 bytes, not 4, and therefore get
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    &quot;large&quot; integers.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; Note that this means that you need to compile your application
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    -i8, too.  That will make *your* INTEGERs also be 8 bytes, and then
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    you'll match what Open MPI is doing.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;    &gt; &gt; I'm curious because some off my local variables get killed (set
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    null) upon my first call to MPI_RECV.  Typically, this is due (in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Fortran) to someone not setting the 'status' variable to an
</span><br>
<span class="quotelev1">&gt; appropriate
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    array size.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; If you didn't compile your application with -i8, this could well
</span><br>
<span class="quotelev1">&gt; be
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    because your application is treating INTEGERs as 4 bytes, but OMPI
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    treating INTEGERs as 8 bytes.  Nothing good can come from that.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; If you *did* compile your application with -i8 and you're seeing
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    kind of wonkyness, we should dig deeper and see what's going on.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;    &gt; &gt; My review of mpif.h and mpi.h seem to indicate that the
</span><br>
<span class="quotelev1">&gt; functions
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    are defined as C int types and therefore , I assume, the coercion
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    during the compile makes the library support 64-bit indexing.  ie.
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    -&gt; long int
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; FWIW: We actually define a type MPI_Fint; its actual type is
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    determined by configure (int or long int, IIRC).  When your Fortran
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    code calls C, we use the MPI_Fint type for parameters, and so it
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    be either a 4 or 8 byte integer type.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; [7]jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    [8]<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; [9]users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; [10]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &lt;mpi-test-64bit.tar.bz2&gt;____________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      ___
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; [11]users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;    &gt; [12]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    --
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    [13]jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    [14]<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    [15]users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    [16]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; References
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    1. mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    2. <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    3. mailto:jimparker96313_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    4. mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    5. mailto:jimparker96313_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    6.
</span><br>
<span class="quotelev1">&gt; <a href="http://wiki.chem.vu.nl/dirac/index.php/How_to_build_MPI_libraries_for_64-bit_integers">http://wiki.chem.vu.nl/dirac/index.php/How_to_build_MPI_libraries_for_64-bit_integers</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    7. mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    8. <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    9. mailto:users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   10. <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   11. mailto:users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   12. <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   13. mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   14. <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   15. mailto:users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   16. <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &lt;openmpi-1.6.5.config.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22895/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22896.php">San B: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="22894.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/10/22890.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22944.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Reply:</strong> <a href="22944.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
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
