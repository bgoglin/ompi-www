<?
$subject_val = "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 22:17:53 2008" -->
<!-- isoreceived="20080923021753" -->
<!-- sent="Mon, 22 Sep 2008 20:17:48 -0600" -->
<!-- isosent="20080923021748" -->
<!-- name="Brian Harker" -->
<!-- email="brian.harker_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure and Build ok, but mpi module not recognized?" -->
<!-- id="48535380809221917qed7a802u59f01a977114dc0e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48D84CD2.8010106_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configure and Build ok, but mpi module not recognized?<br>
<strong>From:</strong> Brian Harker (<em>brian.harker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 22:17:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6690.php">Terry Frankcombe: "Re: [OMPI users] Configure and Build ok, but mpi module not	recognized?"</a>
<li><strong>Previous message:</strong> <a href="6688.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6688.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6690.php">Terry Frankcombe: "Re: [OMPI users] Configure and Build ok, but mpi module not	recognized?"</a>
<li><strong>Reply:</strong> <a href="6690.php">Terry Frankcombe: "Re: [OMPI users] Configure and Build ok, but mpi module not	recognized?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, I'm stumped then...my top-level program is the only one that
<br>
uses MPI interfaces.  I USE other f90 module files, but none of them
<br>
are dependent on MPI functions.  For example here's the first few
<br>
lines of code where things act up:
<br>
<p>PROGRAM main
<br>
INCLUDE 'mpif.h'      (this line used to be &quot;USE mpi&quot;...this is
<br>
correct replacement, right?)
<br>
USE local_module
<br>
IMPLICIT NONE
<br>
...
<br>
STOP
<br>
END PROGRAM main
<br>
<p>with local_module.f90:
<br>
<p>MODULE local_module
<br>
CONTAINS
<br>
<p>SUBROUTINE local_subroutine
<br>
IMPLICIT NONE
<br>
...
<br>
RETURN
<br>
END SUBROUTINE local_subroutine
<br>
<p>END MODULE local_module
<br>
<p>and mpif90 gives me grief about local_module being out of scope within
<br>
main.  To the best of my knowledge, I have never used fixed-form or
<br>
had free-vs-fixed form compiler issues with ifort.  Thanks!
<br>
<p>On Mon, Sep 22, 2008 at 7:56 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Brian and list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On my code I have
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with single quotes around the file name.
</span><br>
<span class="quotelev1">&gt; I use single quotes, but double quotes are also possible according to the
</span><br>
<span class="quotelev1">&gt; F90 standard.
</span><br>
<span class="quotelev1">&gt; If you start at column 7 and end at column 72,
</span><br>
<span class="quotelev1">&gt; you avoid any problems with free vs. fixed Fortran form (which may happen if
</span><br>
<span class="quotelev1">&gt; one decides
</span><br>
<span class="quotelev1">&gt; to mess the compiler options on Makefiles, for instance).
</span><br>
<span class="quotelev1">&gt; This is PDP, paranoid defensive programming.
</span><br>
<span class="quotelev1">&gt; I type the Fortran commands in lowercase (include) but this may not really
</span><br>
<span class="quotelev1">&gt; make any difference
</span><br>
<span class="quotelev1">&gt; (although there are compiler options to transliterate upper to lower, be/not
</span><br>
<span class="quotelev1">&gt; be case sensitive, etc)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, since you asked, I changed the &quot;include 'mpif.h'&quot; location to
</span><br>
<span class="quotelev1">&gt; column 1, column 6,
</span><br>
<span class="quotelev1">&gt; etc, and I could compile the code with OpenMPI mpif90 without any problems.
</span><br>
<span class="quotelev1">&gt; Hence, I presume mpif90 uses the free form as default.
</span><br>
<span class="quotelev1">&gt; So, I wonder if you still have some residual mix of gfortran and ifort
</span><br>
<span class="quotelev1">&gt; there,
</span><br>
<span class="quotelev1">&gt; or if there is some funny configuration on your ifort.cfg file choosing the
</span><br>
<span class="quotelev1">&gt; fixed form as a default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In any case, going out of scope probably has nothing to do with fixed vs
</span><br>
<span class="quotelev1">&gt; free form.
</span><br>
<span class="quotelev1">&gt; I only have one &quot;use mpi&quot; statement, no other modules &quot;used&quot; in the little
</span><br>
<span class="quotelev1">&gt; hello_f90.
</span><br>
<span class="quotelev1">&gt; It may well be that if you try other &quot;use&quot;  statements, particularly if the
</span><br>
<span class="quotelev1">&gt; respective modules
</span><br>
<span class="quotelev1">&gt; involve other MPI modules or MPI function interfaces, things may break and
</span><br>
<span class="quotelev1">&gt; be out of scope.
</span><br>
<span class="quotelev1">&gt; I presume you are not talking of hello_f90 anymore, but of a larger code.
</span><br>
<span class="quotelev1">&gt; The large code examples I have here use other F90 modules (not mpi.mod),
</span><br>
<span class="quotelev1">&gt; but they don't rely on MPI interfaces.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Glad to know that the main problem is gone (I read the more recent
</span><br>
<span class="quotelev1">&gt; messages).
</span><br>
<span class="quotelev1">&gt; I was reluctant to tell you to do a &quot;make distclean&quot;, and start fresh,
</span><br>
<span class="quotelev1">&gt; configure again, make again,
</span><br>
<span class="quotelev1">&gt; because you said you had built the OpenMPI library more than once.
</span><br>
<span class="quotelev1">&gt; Now I think that was exactly what I should have told you to do.
</span><br>
<span class="quotelev1">&gt; Everybody builds these things many times to get them right.
</span><br>
<span class="quotelev1">&gt; Then a few more times to make it efficient, to optimize, etc.
</span><br>
<span class="quotelev1">&gt; Can you imagine how many times Rutherford set up that gold foil experiment
</span><br>
<span class="quotelev1">&gt; until he got it right?  :)
</span><br>
<span class="quotelev1">&gt; After it is done, the past errors become trivial, and all the rest is
</span><br>
<span class="quotelev1">&gt; reduced just to stamp collecting.  :)
</span><br>
<span class="quotelev1">&gt; Configure is always complex, and dumping its output to a log file is
</span><br>
<span class="quotelev1">&gt; worth the effort, to check out for sticky problems like this, which often
</span><br>
<span class="quotelev1">&gt; happen.
</span><br>
<span class="quotelev1">&gt; (Likewise for make and make install.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Harker wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gus-
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the idea.  One question: how do you position INCLUDE
</span><br>
<span class="quotelev2">&gt;&gt; statements in a fortran program, because if I just straight substitute
</span><br>
<span class="quotelev2">&gt;&gt; ' INCLUDE &quot;mpif.h&quot; ' for ' USE mpi ', I get a lot of crap telling me
</span><br>
<span class="quotelev2">&gt;&gt; my other USE statements are not positioned correctly within the scope
</span><br>
<span class="quotelev2">&gt;&gt; and nothing compiles.  I have tried various positions, but I seem to
</span><br>
<span class="quotelev2">&gt;&gt; be suffering from a lot of BS.  Am I overlooking something very
</span><br>
<span class="quotelev2">&gt;&gt; obvious?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Sep 22, 2008 at 5:42 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Brian and list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I seldom used the &quot;use mpi&quot; syntax before.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a lot of code here written in Fortran 90,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but and mpif.h is included instead &quot;use mpi&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The MPI function calls are the same in Fortran 77 and Fortran 90 syntax,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hence there is just one line of code to change, if one wants to go fully
</span><br>
<span class="quotelev3">&gt;&gt;&gt; F90.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All works well, though.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This style is a legacy from the times when the Fortran90 interface of MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was not fully developed,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and the mpi.mod was broken most of the time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That is no longer the case, though.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This mixed mode may be one way around your problem, although not ideal.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The main drawback of using the &quot;include mpif.h&quot; syntax
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is that there is no parameter checking of the MPI function calls,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whereas the &quot;use mpi&quot; syntax provide some level of parameter checking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; through the mpi.mod module.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you are careful when you write your MPI calls,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and check if all parameters match the syntax requirements strictly,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this shouldn't be a problem, though.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Nevertheless, a few days ago somebody was suffering here on the list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem that was just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a missing &quot;ierr&quot; parameter in an MPI_Send call.   Jeff found it out,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; after
</span><br>
<span class="quotelev3">&gt;&gt;&gt; several emails back and forth.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If not for anything else, just for the fun of it, to see how far the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilation goes,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would comment out &quot;use mpi&quot; and replace it by &quot;include mpif.h&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As for architecture and compiler, I have used with no problem OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  (and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPICH2 and MPICH-1) on various
</span><br>
<span class="quotelev3">&gt;&gt;&gt; x86 and x86_64 machines, both AMD and Intel, under different Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flavors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Fedora, CentOS, Red Hat),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in standalone machines (using SMP and shared memory),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and on a small cluster using Ethernet 100T , then using  Gigabit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ethernet,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiling it with gcc and ifort and with gcc and pgf90.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that I don't have icc, I use gcc and g++.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are the icc and ifort versions that you have the same?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't know if different versions may not mix well, but it is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; possibility.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to reproduce your problem by writing a simple hello_f90.f90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the &quot;use mpi&quot; syntax,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and compiling it with the OpenMPI mpif90.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, the program compiled without any problem,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and I didn't need to point to the mpi.mod directory using the &quot;-module&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flag
</span><br>
<span class="quotelev3">&gt;&gt;&gt; either,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; despite my having a &quot;gfortran-openmpi&quot; version of mpi.mod in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/openmpi/.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The program runs fine too, with  2 processes, 4 processes, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On your first message on this thread, your configure command declares
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; variables for CC, CXX, F77, and FC without full paths.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I wonder if there is any chance that there are multiple versions of Intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers on your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system, that somehow may be the cause for the confusion (perhaps as early
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the build time).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, note that mpi.mod is not an include file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is located in the lib directory of openmpi.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There was some confusion about this before, with a discussion about &quot;-I&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directories, etc,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but hopefully this was clarified already.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another thing to check is if there is any funny compiler configuration
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (say
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in /opt/intel/fc/bla/bla/ifort.cfg).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yet another thing I would look at are the logs for OpenMPI configure,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and make install,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if you saved them, to see if the Fortran90 interface was built to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; completion.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, a suggestion is to compile with the verbose &quot;-v&quot; option, to see if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spits out some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clue to what is going on.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope this helps.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (from the stamp-collecting side of science :) )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian Harker wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi guys-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Still no dice.  The only mpi.mod files I have are the ones generated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from my compile and build from source (and they are where they should
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be), so there's definitely no confusion amongst the modules.  And
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specifying the fulls path to the correct mpi.mod module (like Gus
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; suggested with the -module option) gives no change.  I am running out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of ideas and patience, as I'm sure you all are too!  Perhaps openMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; just doesn't play nice with my compiler suite and hardware
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; architecture...?  Thanks for all the input!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mon, Sep 22, 2008 at 11:27 AM, Gus Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Brian and list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I read your original posting and Jeff's answers.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here on CentOS from Rocks Cluster I have a &quot;native&quot; OpenMPI, with a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpi.mod,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compiled with gfortran.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Note that I don't even have gfortran installed!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is besides the MPI versions (MPICH2 and OpenMPI)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I installed from scratch using combinations of ifort and pgi with gcc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It may be that mpif90 is not picking the right mpi.mod, as Jeff
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; suggested.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Something like this may be part of your problem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; A &quot;locate mpi.mod&quot; should show what your system has.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Have you tried to force the directory where mpi.mod is searched for?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Something like this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /full/path/to/openmpi/bin/mpif90  -module
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /full/path/to/openmpi_mpi.mod_directory/   hello_f90.f90
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The ifort man pages has the &quot;-module&quot; syntax details.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I hope this helps.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Brian Harker wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi Gus-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks for the input.  I have been using full path names to both the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wrapper compilers and mpiexec from the first day I had two MPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; implementations on my machine, depending on if I want to use MPICH or
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; openMPI, but still the problem remains.  ARGGGGGG!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Mon, Sep 22, 2008 at 9:40 AM, Gus Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello Brian and list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; My confusing experiences with multiple MPI implementations
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; were fixed the day I decided to use full path names to the MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; compiler
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrappers (mpicc, mpif77, etc) at compile time,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and to the MPI job launcher (mpirun, mpiexec, and so on) at run time,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and to do this in a consistent fashion (using the tools from the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; install to compile and to run the programs).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Most Linux distributions come with built in MPI implementations
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (often
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; times
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; more than one),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and so do commercial compilers and other tools.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; You end up with a mess of different MPI versions on your &quot;native&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; PATH,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; as well as variety of bin, lib, and include directories containing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; different
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI stuff.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The easy way around is to use full path names, particularly if you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; install
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; yet another MPI implementation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; from scratch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Another way is to fix your PATH on your initialization files (.cshrc,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; etc)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; to point to your preferred implementation (put the appropriate bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ahead of everything else).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Yet another is to install the &quot;environment modules&quot; package on your
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; system
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and use it consistently.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; My two cents.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Brian Harker wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I built and installed both MPICH2 and openMPI from source, so no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; distribution packages or anything.  MPICH2 has the modules located
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/include, which I assume would be found (since its in my
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; path), were it not for specifying -I$OPENMPI_HOME/lib at compile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; time,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; right?  I can't imagine that if you tell it where to look for the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; correct modules, it would search through your path first before
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; going
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to where you tell it to go.  Or am I too optimistic?  Thanks again
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the input!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Mon, Sep 22, 2008 at 8:58 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 22, 2008, at 10:10 AM, Brian Harker wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks for the reply...crap, $HOME/openmpi/lib does contains all
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; various lilbmpi* files as well as mpi.mod,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; That should be correct.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; but still get the same
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; error at compile-time.  Yes, I made sure to specifically build
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openMPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; with ifort 10.1.012, and did run the --showme command right after
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; installation to make sure the wrapper compiler was using ifort as
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; well.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ok, good.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Before posting to this mailing list, I did uninstall and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; re-install
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openMPI several times to make sure I had a clean install.  Still
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; luck.  :(
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ok.  Have you checked around your machine to ensure that there is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; other
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi.mod that the compiler is finding first?  E.g., in your MPICH2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; installation?  Or is Open MPI installed by your distro, perchance?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; might want to try a &quot;rpm -qa | grep openmpi&quot; (or whatever your
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; distro's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; equivalent is to check already-installed packages).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><p><pre>
-- 
Cheers,
Brian
brian.harker_at_[hidden]
&quot;In science, there is only physics; all the rest is stamp-collecting.&quot;
 -Ernest Rutherford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6690.php">Terry Frankcombe: "Re: [OMPI users] Configure and Build ok, but mpi module not	recognized?"</a>
<li><strong>Previous message:</strong> <a href="6688.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6688.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6690.php">Terry Frankcombe: "Re: [OMPI users] Configure and Build ok, but mpi module not	recognized?"</a>
<li><strong>Reply:</strong> <a href="6690.php">Terry Frankcombe: "Re: [OMPI users] Configure and Build ok, but mpi module not	recognized?"</a>
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
