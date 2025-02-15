<?
$subject_val = "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 30 09:50:26 2010" -->
<!-- isoreceived="20100330135026" -->
<!-- sent="Tue, 30 Mar 2010 09:50:25 -0400" -->
<!-- isosent="20100330135025" -->
<!-- name="Abhishek Kulkarni" -->
<!-- email="adkulkar_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC 1/1: improvements to the &amp;quot;notifier&amp;quot; framework and ORTE WDC" -->
<!-- id="F4A0863A-7B0F-48B4-A5D4-2B043D80D6B7_at_osl.iu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52A08C0F-E306-4FDC-9DEF-3BD504738086_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC<br>
<strong>From:</strong> Abhishek Kulkarni (<em>adkulkar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-30 09:50:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/04/7684.php">Ralph Castain: "[OMPI devel] RFC: Remove messaging loop in proc state update procedure"</a>
<li><strong>Previous message:</strong> <a href="7682.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>In reply to:</strong> <a href="7679.php">Ralph Castain: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7920.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7920.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 29, 2010, at 9:16 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 29, 2010, at 5:53 PM, Abhishek Kulkarni wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, 29 Mar 2010, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For now, I think that yes, this is a unique identifier. However,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in my opinion, this could be improved in the future replacing it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by a unique string.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Something like :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define ORTE_NOTIFIER_DEFINE_EVENT(eventstr, associated_text) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	 static int event = -1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	 if (OPAL_UNLIKELY(event == -1) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	 	event = opal_sos_create_new_event(eventstr, associated_text);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	 }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	 ...&lt;increase event counter&gt;...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This would move the event numbering to the OPAL layer, making it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; transparent to the developper.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a good suggestion, but then I think we end up relying on  
</span><br>
<span class="quotelev2">&gt;&gt; run-time generation of the event numbers and have to pay the extra  
</span><br>
<span class="quotelev2">&gt;&gt; cost of looking up the event in a list/array/hash each time we log  
</span><br>
<span class="quotelev2">&gt;&gt; the event.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since it is -solely- intended to be in an error path, I fail to see  
</span><br>
<span class="quotelev1">&gt; the concern here.
</span><br>
<p>My bad. Clearly I misunderstood here -- mostly because I vaguely  
<br>
remember (from [1]) that the original motivation
<br>
was to put conditional #ifdef'd hooks in the &quot;fast path&quot; as well. But  
<br>
if they ought to be on the &quot;slow path&quot;, I think
<br>
it would be fair enough to consider Sylvain's suggestion of pushing  
<br>
the event numbering to SOS. In that, the
<br>
SOS hashtable could map the notifier events to their unique identifier  
<br>
and the threshold counter itself could be
<br>
encoded inside the identifier returned by SOS.
<br>
<p>[1] <a href="http://www.open-mpi.org/community/lists/devel/2009/05/6132.php">http://www.open-mpi.org/community/lists/devel/2009/05/6132.php</a>
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From what I understand, and from the discussions that took place  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when this
</span><br>
<span class="quotelev2">&gt;&gt; proposal was first put up on the devel list, is that since the  
</span><br>
<span class="quotelev2">&gt;&gt; event tracing hooks could lie in the critical path, we want the  
</span><br>
<span class="quotelev2">&gt;&gt; overhead to be as low as possible. By manually defining the unique  
</span><br>
<span class="quotelev2">&gt;&gt; identifiers, we can generate the event tracing macro at compile- 
</span><br>
<span class="quotelev2">&gt;&gt; time and have a minimal tracing impact.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Surely you jest - yes?? The event tracing hooks should -never- be in  
</span><br>
<span class="quotelev1">&gt; the critical path. The notifier is intended -solely- to be called  
</span><br>
<span class="quotelev1">&gt; when an error (or some other critical event) has already been  
</span><br>
<span class="quotelev1">&gt; detected. The idea was that we detect an error, and then (if  
</span><br>
<span class="quotelev1">&gt; selected) notify someone about it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The last thing we want to do, IMHO, is put the notifier in a  
</span><br>
<span class="quotelev1">&gt; critical path. If we do, I personally will regret having created  
</span><br>
<span class="quotelev1">&gt; it :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My 2&#162; ofcourse.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Abhishek
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just my 2 cents ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sylvain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, 29 Mar 2010, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Abhishek
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm confused by the WDC wiki page, specifically the part about the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; new ORTE_NOTIFIER_DEFINE_EVENT macro. Are you saying
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that I (as the developer) have to provide this macro with a unique
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; notifier id? So that would mean that ORTE/OMPI would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have to maintain a global notifier id counter to ensure it is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unique?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If so, that seems really cumbersome. Could you please clarify?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 29, 2010, at 8:57 AM, Abhishek Kulkarni wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      [RFC 1/2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      WHAT: Merge improvements to the &quot;notifier&quot; framework from  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the OPAL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      SOS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          and the ORTE WDC mercurial branches into the SVN trunk.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      WHY: Some improvements and interface changes were put into  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the ORTE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         notifier framework during the development of the OPAL  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SOS[1] and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ORTE WDC[2] branches.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      WHERE: Mostly restricted to ORTE notifier files and files  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; using the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           notifier interface in OMPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      TIMEOUT: The weekend of April 2-3.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      REFERENCE MERCURIAL REPOS:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      * SOS development: <a href="http://bitbucket.org/jsquyres/opal-sos-fixed/">http://bitbucket.org/jsquyres/opal-sos-fixed/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      * WDC development: <a href="http://bitbucket.org/derbeyn/orte-wdc">http://bitbucket.org/derbeyn/orte-wdc</a>- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fixed/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      BACKGROUND:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      The notifier interface and its components underwent a host of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      improvements and changes during the development of the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SOS[1] and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      WDC[2] branches.  The ORTE WDC (Warning Data Capture) branch  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; enables
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      accounting of events through the use of notifier interface,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; whereas
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      OPAL SOS uses the notifier interface by setting up callbacks  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      relay
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      out logged events.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Some of the improvements include:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      - added more severity levels.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      - &quot;ftb&quot; notifier improvements.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      - &quot;command&quot; notifier improvements.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      - added &quot;file&quot; notifier component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      - changes in the notifier modules selection
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      - activate only a subset of the callbacks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      (i.e. any combination of log, help, log_peer)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      - define different output media for any given callback (e.g.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      log_peer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      can be redirected to the syslog and smtp, while the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; show_help can be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      sent to the hnp).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      - ORTE_NOTIFIER_LOG_EVENT() (that accounts and warns about  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unusual
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      events)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Much more information is available on these two wiki pages:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      [1] <a href="http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      [2] <a href="http://svn.open-mpi.org/trac/ompi/wiki/ORTEWDC">http://svn.open-mpi.org/trac/ompi/wiki/ORTEWDC</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      NOTE: This is first of a two-part RFC to bring the SOS and WDC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      branches
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      to the trunk. This only brings in the &quot;notifier&quot; changes  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      SOS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      branch, while the rest of the branch will be brought over  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; after the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      timeout of the second RFC.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/04/7684.php">Ralph Castain: "[OMPI devel] RFC: Remove messaging loop in proc state update procedure"</a>
<li><strong>Previous message:</strong> <a href="7682.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>In reply to:</strong> <a href="7679.php">Ralph Castain: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7920.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7920.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
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
