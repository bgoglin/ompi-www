<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 16 12:07:32 2007" -->
<!-- isoreceived="20070816160732" -->
<!-- sent="Thu, 16 Aug 2007 12:07:24 -0400" -->
<!-- isosent="20070816160724" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with group code" -->
<!-- id="0EF16F64-6652-4388-AEE4-4958F87777EE_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46C472FF.4050600_at_cs.indiana.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-16 12:07:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2162.php">Brian Barrett: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>Previous message:</strong> <a href="2160.php">Tim Prins: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>In reply to:</strong> <a href="2160.php">Tim Prins: "Re: [OMPI devel] Problem with group code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2162.php">Brian Barrett: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>Reply:</strong> <a href="2162.php">Brian Barrett: "Re: [OMPI devel] Problem with group code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can this patch be moved out of the ompi internals ? If possible it  
<br>
should go in the MPI level functions somewhere. I looked into the mpi/ 
<br>
c/group_incl.c and we have a bunch of tests, but this particular one  
<br>
is missing.
<br>
<p>Long ago we decided to do most of the checking outside the internals  
<br>
in order to have a clean [and fast] execution path once we get inside  
<br>
the ompi functions. Of course, we suppose that all our internal calls  
<br>
will never generate any problems (i.e. all the required checks will  
<br>
be done prior to calling another function).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 16, 2007, at 11:53 AM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; Mohamad,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2 process was plenty. Like I said, when running in debug mode, it  
</span><br>
<span class="quotelev1">&gt; tends
</span><br>
<span class="quotelev1">&gt; to 'work' since memory is initialized to \0 and we fall through. In an
</span><br>
<span class="quotelev1">&gt; optimized build, looking at the mtt results it looks like it segfaults
</span><br>
<span class="quotelev1">&gt; about 10% of the time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But if you apply the patch I sent, it will tell you when an invaild
</span><br>
<span class="quotelev1">&gt; lookup happens, which should be every time it runs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hey Tim,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I understand what you are talking about.
</span><br>
<span class="quotelev2">&gt;&gt; Im trying to reproduce the problem. How many processes are your  
</span><br>
<span class="quotelev2">&gt;&gt; running
</span><br>
<span class="quotelev2">&gt;&gt; with, because with the default (4 for the group) it's passing..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Mohamad
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, August 16, 2007 7:49 am, Tim Prins wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry, I pushed the wrong button and sent this before it was  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ready....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim Prins wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi folks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am running into a problem with the ibm test 'group'. I will  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; try to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; explain what I think is going on, but I do not really understand  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; group code so please forgive me if it is wrong...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The test creates a group based on MPI_COMM_WORLD (group1), and a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that has half the procs in group1 (newgroup). Next, all the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; do:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Group_intersection(newgroup,group1,&amp;group2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_group_intersection figures out what procs are needed for  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; group2,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; then calls
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_group_incl, passing 'newgroup' and '&amp;group2'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This then calls (since I am not using sparse groups)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_group_incl_plist
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, ompi_group_plist assumes that the current process is a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; member
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of the passed group ('newgroup'). Thus when it calls
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_group_peer_lookup on 'newgroup', half of the processes get  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; garbage
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; back since they are not in 'newgroup'. In most cases, memory is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; initialized to \0 and things fall through, but we get intermittent
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; segfaults in optimized builds.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is a patch to a error check which highlights the problem:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Index: group/group.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- group/group.h       (revision 15869)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ group/group.h       (working copy)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -308,7 +308,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   static inline struct ompi_proc_t* ompi_group_peer_lookup 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ompi_group_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *group, int peer_id)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   #if OMPI_ENABLE_DEBUG
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    if (peer_id &gt;= group-&gt;grp_proc_count) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if (peer_id &gt;= group-&gt;grp_proc_count || peer_id &lt; 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           opal_output(0, &quot;ompi_group_lookup_peer: invalid peer index
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (%d)&quot;, peer_id);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="2162.php">Brian Barrett: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>Previous message:</strong> <a href="2160.php">Tim Prins: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>In reply to:</strong> <a href="2160.php">Tim Prins: "Re: [OMPI devel] Problem with group code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2162.php">Brian Barrett: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>Reply:</strong> <a href="2162.php">Brian Barrett: "Re: [OMPI devel] Problem with group code"</a>
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
