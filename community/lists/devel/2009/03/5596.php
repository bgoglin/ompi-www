<?
$subject_val = "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 16:13:51 2009" -->
<!-- isoreceived="20090309201351" -->
<!-- sent="Mon, 9 Mar 2009 14:10:56 -0600" -->
<!-- isosent="20090309201056" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer" -->
<!-- id="538D2CE3-A674-4EDE-8C54-969BFC04F625_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="68FCE6E8-C3A9-463C-85CA-2E3CD6DE3001_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-09 16:10:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5597.php">Jeff Squyres: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Previous message:</strong> <a href="5595.php">Brian W. Barrett: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>In reply to:</strong> <a href="5594.php">George Bosilca: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5595.php">Brian W. Barrett: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 9, 2009, at 1:55 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 9, 2009, at 15:13 , Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you please clarify - what is going to happen on Mar 23 (your  
</span><br>
<span class="quotelev2">&gt;&gt; timeout date)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It also wasn't clear about your testing. Are you calling up into  
</span><br>
<span class="quotelev2">&gt;&gt; the ONET layer to run it from the RTE? I believe this was the point  
</span><br>
<span class="quotelev2">&gt;&gt; of concern regarding performance - what impact it would have on  
</span><br>
<span class="quotelev2">&gt;&gt; things if we enabled that capability. For example, do you need a  
</span><br>
<span class="quotelev2">&gt;&gt; quality-of-service flag to avoid delaying MPI comm when an RTE comm  
</span><br>
<span class="quotelev2">&gt;&gt; occurs? When someone calls into the MPI library, are you going to  
</span><br>
<span class="quotelev2">&gt;&gt; first progress MPI messages, and then if-and-only-if they all  
</span><br>
<span class="quotelev2">&gt;&gt; complete, progress any RTE ONET messages? How will this be handled?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will emphasize a very important point, deeply discussed during our  
</span><br>
<span class="quotelev1">&gt; meeting in Louisville:  there is no support for ONET in ORTE at this  
</span><br>
<span class="quotelev1">&gt; stage, and no plan for such a support has been presented so far (and  
</span><br>
<span class="quotelev1">&gt; I doubt there will be in a near future). Moreover, as the ONET layer  
</span><br>
<span class="quotelev1">&gt; is agnostic to any semantic the upper layer will give to the data  
</span><br>
<span class="quotelev1">&gt; moved around, there is no reason to enforce any &quot;quality-of- 
</span><br>
<span class="quotelev1">&gt; services&quot; in the ONET layer. Whatever upper layer will be  
</span><br>
<span class="quotelev1">&gt; implemented on top of this ONET BTL will have to deal with such  
</span><br>
<span class="quotelev1">&gt; things.
</span><br>
<p>I agree, except that ORNL continues to emphasize their intent to call  
<br>
ONET from the RTE level. This was the entire purpose of the callback  
<br>
registration functionality laid out in the RFC and in Louisville.
<br>
<p>So while I agree with your description for those cases where someone  
<br>
intends to put another layer (not MPI) on top of ONET, my concerns and  
<br>
questions remain regarding ORNL's intention of calling ONET from below  
<br>
that layer, using it simultaneously for two functions (MPI and RTE  
<br>
comm). I would like to understand how the ONET will bootstrap, how  
<br>
contention will be resolved etc. so we can assess any performance  
<br>
impact of such matters (as I described above).
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I doubt anyone expects to see a performance impact of doing nothing  
</span><br>
<span class="quotelev2">&gt;&gt; but renaming things, so these questions remain at the heart of the  
</span><br>
<span class="quotelev2">&gt;&gt; discussion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope we will not spend our time during tomorrow morning phone call  
</span><br>
<span class="quotelev1">&gt; talking about name changes ...
</span><br>
<p>Me too!
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, could you clarify what happened to the datatype engine? Is  
</span><br>
<span class="quotelev2">&gt;&gt; this moving to OPAL, ONET, or...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, as discussed during the meeting in Louisville, at the end of  
</span><br>
<span class="quotelev1">&gt; the move the datatype engine will be divided in two parts: one MPI  
</span><br>
<span class="quotelev1">&gt; agnostic only able to deal with common predefined types, and one  
</span><br>
<span class="quotelev1">&gt; encapsulating the MPI knowledge (how to build an indexed array or  
</span><br>
<span class="quotelev1">&gt; any other MPI fancy type). The first one will be moved in the OPAL  
</span><br>
<span class="quotelev1">&gt; layer, while the second one will stay where it is today (i.e. the  
</span><br>
<span class="quotelev1">&gt; MPI layer).
</span><br>
<p>Thanks - guess I missed or forgot that part.
<br>
<p>Ralph
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 9, 2009, at 12:51 PM, Rainer Keller wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What:     Move BTLs into separate layer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why:      Several projects have expressed interest to use the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTLs. Use-cases
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such as the RTE using the BTLs for modex or tools collecting/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; distributing data
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the fastest possible way may be possible.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where:    This would affect several components, that the BTLs  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; depend on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (namely allocator, mpool, rcache and the common part of the BTLs).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Additionally some changes to classes were/are necessary.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When:     Preferably 1.5 (in case we use the Feature/Stable  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Release cycle ;-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Timeout:  23.03.2009
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There has been much speculation about this project.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This RFC should shed some light, if there is some more information  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; required,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; please feel free to ask/comment. Of course, suggestions are welcome!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The BTLs offer access to fast communication framework. Several  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; projects have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expressed interest to use them separate of other layers of Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Additionally (with further changes) BTLs maybe used within ORTE  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; itself.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; COURSE OF WORK:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The extraction is not easy (as was the extraction of ORTE and OMPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; early stages of Open MPI?).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In order to get as much input and be as visible as possible (e.g.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in TRACS),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the tmp-branch for this work has been set up on:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl">https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We propose to have a separate ONET library living in onet, based  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on orte (see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attached fig).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In order to keep the diff between the trunk and the branch to a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; minimum
</span><br>
<span class="quotelev3">&gt;&gt;&gt; several cleanup patches have already been applied to the trunk (e.g.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unnecessary #include of ompi and orte header files, integration of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_bitmap_t into opal_bitmap_t, #include &quot;*_config.h&quot;).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Additionally a script (attached below) has been kept up-to-date  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (contrib/move-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl-into-onet), that will perform this separation on a fresh  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checkout of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn list <a href="https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl/contrib/move-btl">https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl/contrib/move-btl</a>-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into-onet
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This script requires several patches (see attached TAR-ball).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please update the variable PATCH_DIR to match the location of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; patches.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./move-btl-into-onet ompi-clean/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Lots of output deleted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cd ompi-clean/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rm -fr ompi/mca/common/  # No two mcas called common, too bad...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./autogen.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OTHER RTEs:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A preliminary header file is provided in onet/include/rte.h to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; accommodate the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; requirements of other RTEs (such as stci), that replaces selected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functionality, as proposed by Jeff and Ralph in the Louisville  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; meeting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Additionally, this header file is included before orte-header  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; files (within
</span><br>
<span class="quotelev3">&gt;&gt;&gt; onet)...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; By default, this does not change anything in the standard case  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ORTE),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; otherwise -DHAVE_STCI, redefinitions for components orte- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functionality
</span><br>
<span class="quotelev3">&gt;&gt;&gt; required within onet is done.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TESTS:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; First tests have been done locally on Linux/x86_64.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The branch compiles without warnings.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The wrappers have been updated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The Intel Testsuite runs without failures:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./run-tests.pl  all_tests_no_perf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PERFORMANCE:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; !!!Before any merge, do extensive performance tests on real  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machines!!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Initial tests on the cluster smoky, show no difference in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comparison to ompi-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please see the enclosed output of NetPipe-3.7.1 run on a single  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node (--mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl sm,self) on smoky.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TODOS:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are still some todos, to finalize this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Dependencies in the onet-layer into the ompi-layer (ompi_proc_t,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_converter)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are working on these, and have shortly talked about the latter  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Better abstraction from orte / cleanups, such as modex
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If these involve code-changes (and not just &quot;save&quot; and non- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intrusive renames),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such as a opal_keyval-change, we will continue to write RFCs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;ompi_onet-2009.02.27.pdf&gt;&lt;move-btl-patches.tar&gt;&lt;move-btl-into- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; onet&gt;&lt;NPmpi-ompi.out&gt;&lt;NPmpi-koenig-BTL- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte.out&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5597.php">Jeff Squyres: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Previous message:</strong> <a href="5595.php">Brian W. Barrett: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>In reply to:</strong> <a href="5594.php">George Bosilca: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5595.php">Brian W. Barrett: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
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
