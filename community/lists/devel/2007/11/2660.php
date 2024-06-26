<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 21 05:17:04 2007" -->
<!-- isoreceived="20071121101704" -->
<!-- sent="Wed, 21 Nov 2007 02:17:00 -0800" -->
<!-- isosent="20071121101700" -->
<!-- name="Brad Penoff" -->
<!-- email="penoff_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723" -->
<!-- id="b89c3c270711210217j3a0ee20bs79f3913c45284d5a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b89c3c270711200948q2128f2d7xf9ab7651d125f04c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723<br>
<strong>From:</strong> Brad Penoff (<em>penoff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-21 05:17:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2661.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Previous message:</strong> <a href="2659.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16762"</a>
<li><strong>In reply to:</strong> <a href="2655.php">Brad Penoff: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The change is in:
<br>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/16764">https://svn.open-mpi.org/trac/ompi/changeset/16764</a>
<br>
<p>Thanks for the heads-up,
<br>
brad
<br>
<p>On Nov 20, 2007 9:48 AM, Brad Penoff &lt;penoff_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Sorry, saw this thread late.  We'll try to make the change later today
</span><br>
<span class="quotelev1">&gt; after a few meetings!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; brad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 14, 2007 8:16 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tim - excellent catch!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  I totally agree.  We must be very mindful of IP-related issues.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  -jms
</span><br>
<span class="quotelev2">&gt; &gt;  Sent from my PDA
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt;  From:   Tim Prins [mailto:tprins_at_[hidden]]
</span><br>
<span class="quotelev2">&gt; &gt;  Sent:   Wednesday, November 14, 2007 09:44 AM Eastern Standard Time
</span><br>
<span class="quotelev2">&gt; &gt;  To:     devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;  Subject:        Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  The following files bother me about this commit:
</span><br>
<span class="quotelev2">&gt; &gt;       trunk/ompi/mca/btl/sctp/sctp_writev.c
</span><br>
<span class="quotelev2">&gt; &gt;       trunk/ompi/mca/btl/sctp/sctp_writev.h
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  They bother me for 2 reasons:
</span><br>
<span class="quotelev2">&gt; &gt;  1. Their naming does not follow the prefix rule
</span><br>
<span class="quotelev2">&gt; &gt;  2. They are LGPL licensed. While I personally like the LGPL, I do not
</span><br>
<span class="quotelev2">&gt; &gt;  believe it is compatible with the BSD license that OMPI is distributed
</span><br>
<span class="quotelev2">&gt; &gt;  under. I think (though I could be wrong) that these files need to be
</span><br>
<span class="quotelev2">&gt; &gt;  removed from the repository and the functionality implemented in some
</span><br>
<span class="quotelev2">&gt; &gt;  other way.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Tim
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  penoff_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; Author: penoff
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; Date: 2007-11-13 18:39:16 EST (Tue, 13 Nov 2007)
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; New Revision: 16723
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16723">https://svn.open-mpi.org/trac/ompi/changeset/16723</a>
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; Log:
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; initial SCTP BTL commit
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; Added:
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;    trunk/ompi/mca/btl/sctp/
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;    trunk/ompi/mca/btl/sctp/.ompi_ignore
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;    trunk/ompi/mca/btl/sctp/.ompi_unignore
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;    trunk/ompi/mca/btl/sctp/Makefile.am
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;    trunk/ompi/mca/btl/sctp/btl_sctp.c
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;    trunk/ompi/mca/btl/sctp/btl_sctp.h
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_addr.h
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_component.c
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_component.h
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_endpoint.c
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_endpoint.h
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_frag.c
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_frag.h
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_hdr.h
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_proc.c
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_proc.h
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_recv_handler.c
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_recv_handler.h
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_utils.c
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;    trunk/ompi/mca/btl/sctp/btl_sctp_utils.h
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;    trunk/ompi/mca/btl/sctp/configure.m4
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;    trunk/ompi/mca/btl/sctp/configure.params
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;    trunk/ompi/mca/btl/sctp/sctp_writev.c
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;    trunk/ompi/mca/btl/sctp/sctp_writev.h
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; Diff not shown due to size (201438 bytes).
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; To see the diff, run the following command:
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;       svn diff -r 16722:16723 --no-diff-deleted
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; svn mailing list
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt; &gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;  devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;  devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2661.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Previous message:</strong> <a href="2659.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16762"</a>
<li><strong>In reply to:</strong> <a href="2655.php">Brad Penoff: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
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
