<?php
$topdir = "../../..";
$title = "MPI_Comm_compare(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Comm_compare</B>  -  Compares two communicators.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Comm_compare(MPI_Comm <I>comm1</I>, MPI_Comm <I>comm2</I>, int <I>*result</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_COMM_COMPARE(<I>COMM1,</I> <I>COMM2,</I> <I>RESULT,</I> <I>IERROR</I>)
            INTEGER   <I>COMM1,</I> <I>COMM2,</I> <I>RESULT,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       static int Comm::Compare(const Comm&amp; <I>comm1</I>, const Comm&amp; <I>comm2</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       comm1     Comm1 (handle).

       comm2     Comm2 (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       result    Result of comparison (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_IDENT  results  if  and only if comm1 and comm2 are handles for the
       same object (identical groups and same contexts). MPI_CONGRUENT results
       if  the underlying groups are identical in constituents and rank order;
       these communicators differ only by context. MPI_SIMILAR results of  the
       group  members  of  both  communicators are the same but the rank order
       differs. MPI_UNEQUAL results otherwise.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before the error value is returned, the current MPI  error  handler  is
       called.  By  default, this error handler aborts the MPI job, except for
       I/O  function  errors.  The  error  handler   may   be   changed   with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may be used to cause error values to be returned. Note  that  MPI  does
       not guarantee that an MPI program can continue past an error.

</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
