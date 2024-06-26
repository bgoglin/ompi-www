<?
$subject_val = "Re: [OMPI devel] [RFC] mca_base_select()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 14:09:46 2008" -->
<!-- isoreceived="20080506180946" -->
<!-- sent="Tue, 6 May 2008 14:09:43 -0400" -->
<!-- isosent="20080506180943" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] mca_base_select()" -->
<!-- id="A547A8F9-3E50-4DD1-8645-A2CC00383652_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6E02B552-6C14-4DAC-92C3-EDEAC109FD60_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [RFC] mca_base_select()<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-06 14:09:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3847.php">Ralph H Castain: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>Previous message:</strong> <a href="3845.php">Josh Hursey: "[OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>In reply to:</strong> <a href="3833.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3847.php">Ralph H Castain: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>Reply:</strong> <a href="3847.php">Ralph H Castain: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>Reply:</strong> <a href="3864.php">Pak Lui: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>Reply:</strong> <a href="3888.php">Lenny Verkhovsky: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This has been committed in r18381
<br>
<p>Please let me know if you have any problems with this commit.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On May 5, 2008, at 10:41 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Awesome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The branch is updated to the latest trunk head. I encourage folks to
</span><br>
<span class="quotelev1">&gt; check out this repository and make sure that it builds on their
</span><br>
<span class="quotelev1">&gt; system. A normal build of the branch should be enough to find out if
</span><br>
<span class="quotelev1">&gt; there are any cut-n-paste problems (though I tried to be careful,
</span><br>
<span class="quotelev1">&gt; mistakes do happen).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I haven't heard any problems so this is looking like it will come in
</span><br>
<span class="quotelev1">&gt; tomorrow after the teleconf. I'll ask again there to see if there are
</span><br>
<span class="quotelev1">&gt; any voices of concern.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 5, 2008, at 9:58 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This all sounds good to me!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 29, 2008, at 6:35 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What:  Add mca_base_select() and adjust frameworks &amp; components to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why:   Consolidation of code for general goodness.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where: <a href="https://svn.open-mpi.org/svn/ompi/tmp-public/jjh-mca-play">https://svn.open-mpi.org/svn/ompi/tmp-public/jjh-mca-play</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When:  Code ready now. Documentation ready soon.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Timeout: May 6, 2008 (After teleconf) [1 week]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Discussion:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For a number of years a few developers have been talking about
</span><br>
<span class="quotelev3">&gt;&gt;&gt; creating a MCA base component selection function. For various  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reasons
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this was never implemented. Recently I decided to give it a try.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A base select function will allow Open MPI to provide completely
</span><br>
<span class="quotelev3">&gt;&gt;&gt; consistent selection behavior for many of its frameworks (18 of 31  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be exact at the moment). The primary goal of this work is to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; improving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code maintainability through code reuse. Other benefits also result
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such as a slightly smaller memory footprint.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The mca_base_select() function represented the most commonly used
</span><br>
<span class="quotelev3">&gt;&gt;&gt; logic for component selection: Select the one component with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; highest priority and close all of the not selected components. This
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function can be found at the path below in the branch:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal/mca/base/mca_base_components_select.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To support this I had to formalize a query() function in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_base_component_t of the form:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int mca_base_query_component_fn(mca_base_module_t **module, int
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *priority);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This function is specified after the open and close component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functions in this structure as to allow compatibility with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; frameworks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that do not use the base selection logic. Frameworks that do *not*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this function are *not* effected by this commit. However, every
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component in the frameworks that use the mca_base_select function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; must
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adjust their component query function to fit that specified above.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 18 frameworks in Open MPI have been changed. I have updated all of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; components in the 18 frameworks available in the trunk on my branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The effected frameworks are:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - OPAL Carto
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - OPAL crs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - OPAL maffinity
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - OPAL memchecker
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - OPAL paffinity
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - ORTE errmgr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - ORTE ess
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - ORTE Filem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - ORTE grpcomm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - ORTE odls
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - ORTE pml
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - ORTE ras
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - ORTE rmaps
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - ORTE routed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - ORTE snapc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - OMPI crcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - OMPI dpm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - OMPI pubsub
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There was a question of the memory footprint change as a result of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this commit. I used 'pmap' to determine process memory footprint  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hello world MPI program. Static and Shared build numbers are below
</span><br>
<span class="quotelev3">&gt;&gt;&gt; along with variations on launching locally and to a single node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocated by SLURM. All of this was on Indiana University's Odin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine. We compare against the trunk (r18276) representing the last
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SVN sync point of the branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Process(shared)| Trunk    | Branch  | Diff (Improvement)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ---------------+----------+---------+-------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mpirun (orted) |   39976K |  36828K | 3148K
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  hello (0)      |  229288K | 229268K |   20K
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  hello (1)      |  229288K | 229268K |   20K
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ---------------+----------+---------+-------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mpirun         |   40032K |  37924K | 2108K
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  orted          |   34720K |  34660K |   60K
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  hello (0)      |  228404K | 228384K |   20K
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  hello (1)      |  228404K | 228384K |   20K
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Process(static)| Trunk    | Branch  | Diff (Improvement)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ---------------+----------+---------+-------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mpirun (orted) |   21384K |  21372K |  12K
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  hello (0)      |  194000K | 193980K |  20K
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  hello (1)      |  194000K | 193980K |  20K
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ---------------+----------+---------+-------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mpirun         |   21384K |  21372K |  12K
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  orted          |   21208K |  21196K |  12K
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  hello (0)      |  193116K | 193096K |  20K
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  hello (1)      |  193116K | 193096K |  20K
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As you can see there are some small memory footprint improvements on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my branch that result from this work. The size of the Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; project
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shrinks a bit as well. This commit cuts between 3,500 and 2,000  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lines
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of code (depending on how you count) so about a ~1% code shrink.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The branch is stable in all of the testing I have done, but there  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some platforms on which I cannot test. So please give this branch a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; try and let me know if you find any problems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="3847.php">Ralph H Castain: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>Previous message:</strong> <a href="3845.php">Josh Hursey: "[OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>In reply to:</strong> <a href="3833.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3847.php">Ralph H Castain: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>Reply:</strong> <a href="3847.php">Ralph H Castain: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>Reply:</strong> <a href="3864.php">Pak Lui: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>Reply:</strong> <a href="3888.php">Lenny Verkhovsky: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
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
