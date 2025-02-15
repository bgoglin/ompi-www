<?
$subject_val = "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 27 16:02:45 2014" -->
<!-- isoreceived="20140127210245" -->
<!-- sent="Mon, 27 Jan 2014 13:02:43 -0800" -->
<!-- isosent="20140127210243" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures" -->
<!-- id="CAAvDA17fgDyUHLdq527K7J+w+8dz9FDCH-aCGym2HiG03PPiuw_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="3A982546-8633-4B2E-81C3-3A10582A8BB2_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-27 16:02:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13928.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<li><strong>Previous message:</strong> <a href="13926.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<li><strong>In reply to:</strong> <a href="13926.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13928.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>To encourage you to focus on 1.7.4, I will delay testing vader on the SGI
<br>
UV until I've tested the next 1.7.4 release candidate (or final).
<br>
<p>-Paul
<br>
<p><p>On Mon, Jan 27, 2014 at 12:55 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Just FWIW: I believe that problem did indeed make it over to 1.7.4, and
</span><br>
<span class="quotelev1">&gt; that release is on &quot;hold&quot; pending your fix. So while I'm happy to hear
</span><br>
<span class="quotelev1">&gt; about xpmem on SGI, please do let us release 1.7.4!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 27, 2014, at 8:19 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yup. Has to do with not having 64-bit atomic math. The fix is complete
</span><br>
<span class="quotelev2">&gt; &gt; but I am working on another update to enable using xpmem on SGI
</span><br>
<span class="quotelev2">&gt; &gt; systems. I will push the changes once that is complete.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Jan 27, 2014 at 04:00:08PM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is this the same issue Absoft is seeing in 32 bit builds on the trunk?
</span><br>
<span class="quotelev1">&gt;  (i.e., 100% failure rate)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    <a href="http://mtt.open-mpi.org/index.php?do_redir=2142">http://mtt.open-mpi.org/index.php?do_redir=2142</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jan 27, 2014, at 10:38 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This shouldn't be affecting 1.7.4 since neither the vader or coll/ml
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; updates have been moved yet. As for trunk I am working on a 32-bit fix
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; for vader and it should be in later today. I will have to track down
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; what is going wrong the basesmuma initialization.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Sun, Jan 26, 2014 at 04:10:29PM +0100, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I noticed two major issues on 32 bits machines. The first one is with
</span><br>
<span class="quotelev1">&gt; the vader BTL and the second with the selection logic in basesmuma
</span><br>
<span class="quotelev1">&gt; (bcol_basesmuma_bank_init_opti). Both versions are impacted: trunk and 1.7.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; If I turn off vader and boll via the MCA parameters everything runs
</span><br>
<span class="quotelev1">&gt; just fine.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; George.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ../trunk/configure --enable-debug --disable-mpi-cxx
</span><br>
<span class="quotelev1">&gt; --disable-mpi-fortran --disable-io-romio
</span><br>
<span class="quotelev1">&gt; --enable-contrib-no-build=vt,libtrace --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; - Vader generates a segfault for any application even with only 2
</span><br>
<span class="quotelev1">&gt; processes, so this should be pretty easy to track.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #0  0x00000000 in ?? ()
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #1  0x00ae43b3 in mca_btl_vader_poll_fifo ()
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   at ../../../../../trunk/ompi/mca/btl/vader/btl_vader_component.c:394
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #2  0x00ae444a in mca_btl_vader_component_progress ()
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   at ../../../../../trunk/ompi/mca/btl/vader/btl_vader_component.c:421
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #3  0x008fdb95 in opal_progress ()
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   at ../../trunk/opal/runtime/opal_progress.c:186
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #4  0x001961bc in ompi_request_default_test_some (count=13,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   requests=0xb1f01d48, outcount=0xb2afb2d0, indices=0xb1f01f60,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   statuses=0xb1f02178) at ../../trunk/ompi/request/req_test.c:316
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #5  0x001def9a in PMPI_Testsome (incount=13, requests=0xb1f01d48,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   outcount=0xb2afb2d0, indices=0xb1f01f60, statuses=0xb1f02178)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   at ptestsome.c:81
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; - basesmuma overwrite the memory. The results_array can&#146;t be released
</span><br>
<span class="quotelev1">&gt; as the memory is corrupted. I did not have time to investigate too much but
</span><br>
<span class="quotelev1">&gt; it looks like the pload_mgmt-&gt;data_bffs either too small or somehow data is
</span><br>
<span class="quotelev1">&gt; stored outside its boundaries.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; *** glib detected ***
</span><br>
<span class="quotelev1">&gt; /home/bosilca/unstable/dplasma/trunk/build/debug/dplasma/testing/testing_dpotrf:
</span><br>
<span class="quotelev1">&gt; free(): invalid next size (fast): 0x081f0798 ***
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #0  0x00130424 in __kernel_vsyscall ()
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #1  0x006bfb11 in raise () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #2  0x006c13ea in abort () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #3  0x006ff9d5 in __libc_message () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #4  0x00705e31 in malloc_printerr () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #5  0x00708571 in _int_free () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #6  0x00c02d0e in bcol_basesmuma_bank_init_opti (ml_module=0x81dfe60,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   bcol_module=0xb30b3008, reg_data=0x81e6698)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   at
</span><br>
<span class="quotelev1">&gt; ../../../../../trunk/ompi/mca/bcol/basesmuma/bcol_basesmuma_buf_mgmt.c:472
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #7  0x00b7035f in mca_coll_ml_register_bcols (ml_module=0x81dfe60)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   at ../../../../../trunk/ompi/mca/coll/ml/coll_ml_module.c:513
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #8  0x00b70651 in ml_module_memory_initialization
</span><br>
<span class="quotelev1">&gt; (ml_module=0x81dfe60)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   at ../../../../../trunk/ompi/mca/coll/ml/coll_ml_module.c:560
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #9  0x00b733fd in ml_discover_hierarchy (ml_module=0x81dfe60)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   at ../../../../../trunk/ompi/mca/coll/ml/coll_ml_module.c:1585
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #10 0x00b7786e in mca_coll_ml_comm_query (comm=0x8127da0,
</span><br>
<span class="quotelev1">&gt; priority=0xbfffe558)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   at ../../../../../trunk/ompi/mca/coll/ml/coll_ml_module.c:2998
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #11 0x00202ea6 in query_2_0_0 (component=0xbc6500, comm=0x8127da0,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   priority=0xbfffe558, module=0xbfffe580)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   at ../../../../trunk/ompi/mca/coll/base/coll_base_comm_select.c:375
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #12 0x00202e7f in query (component=0xbc6500, comm=0x8127da0,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   priority=0xbfffe558, module=0xbfffe580)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   at ../../../../trunk/ompi/mca/coll/base/coll_base_comm_select.c:358
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #13 0x00202d9e in check_one_component (comm=0x8127da0,
</span><br>
<span class="quotelev1">&gt; component=0xbc6500,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   module=0xbfffe580)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   at ../../../../trunk/ompi/mca/coll/base/coll_base_comm_select.c:320
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #14 0x00202bce in check_components (components=0x253d70,
</span><br>
<span class="quotelev1">&gt; comm=0x8127da0)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   at ../../../../trunk/ompi/mca/coll/base/coll_base_comm_select.c:284
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #15 0x001fbbe1 in mca_coll_base_comm_select (comm=0x8127da0)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   at ../../../../trunk/ompi/mca/coll/base/coll_base_comm_select.c:117
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #16 0x0019872f in ompi_mpi_init (argc=7, argv=0xbfffee74, requested=0,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   provided=0xbfffe970) at ../../trunk/ompi/runtime/ompi_mpi_init.c:894
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; #17 0x001c9509 in PMPI_Init (argc=0xbfffe9c0, argv=0xbfffe9c4) at
</span><br>
<span class="quotelev1">&gt; pinit.c:84
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13927/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13928.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<li><strong>Previous message:</strong> <a href="13926.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<li><strong>In reply to:</strong> <a href="13926.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13928.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
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
