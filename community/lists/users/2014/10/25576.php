<?
$subject_val = "Re: [OMPI users] Problem with Yosemite";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 24 12:32:17 2014" -->
<!-- isoreceived="20141024163217" -->
<!-- sent="Fri, 24 Oct 2014 09:32:12 -0700" -->
<!-- isosent="20141024163212" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with Yosemite" -->
<!-- id="F1D59A3E-3471-4593-A593-4A1EFAB20B04_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAKPyHN0RXEUFj9Y4yDGeFSPjNGz=7rvMxtnTSTW=GcKrJKEvMg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with Yosemite<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-24 12:32:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25577.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with Yosemite"</a>
<li><strong>Previous message:</strong> <a href="25575.php">Siegmar Gross: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>In reply to:</strong> <a href="25574.php">Bert Wesarg: "Re: [OMPI users] Problem with Yosemite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25577.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with Yosemite"</a>
<li><strong>Reply:</strong> <a href="25577.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with Yosemite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could well be - I&#226;&#128;&#153;m using the libtool from Apple
<br>
<p>&nbsp;Apple Inc. version cctools-855
<br>
<p>Just verified that 1.8 is working fine as well.
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Oct 24, 2014, at 9:23 AM, Bert Wesarg &lt;bert.wesarg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is maybe related to a problem in libtool:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://lists.gnu.org/archive/html/libtool-patches/2014-09/msg00002.html">http://lists.gnu.org/archive/html/libtool-patches/2014-09/msg00002.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 24, 2014 at 6:09 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I was able to build and run the trunk without problem on Yosemite with:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; gcc (MacPorts gcc49 4.9.1_0) 4.9.1
</span><br>
<span class="quotelev2">&gt;&gt; GNU Fortran (MacPorts gcc49 4.9.1_0) 4.9.1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Will test 1.8 branch now, though I believe the fortran support in 1.8 is
</span><br>
<span class="quotelev2">&gt;&gt; up-to-date
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 24, 2014, at 6:46 AM, Guillaume Houzeaux &lt;guillaume.houzeaux_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Good morning/afternoon/night,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I actualized my OS two days ago from Maverick to Yosemite (Xcode6.1).
</span><br>
<span class="quotelev2">&gt;&gt; I recompiled openmpi-1.4.1, openmpi-1.6.3, openmpi-1.8.3 and get the same
</span><br>
<span class="quotelev2">&gt;&gt; problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What I did:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. mpif90 test_openmpi.f90 -o test_openmpi.x
</span><br>
<span class="quotelev2">&gt;&gt; 2. ./test_openmpi.x
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and get
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; BEFORE
</span><br>
<span class="quotelev2">&gt;&gt; [bsccs456.int.bsc.es:81492] [[INVALID],INVALID] ORTE_ERROR_LOG: Unknown
</span><br>
<span class="quotelev2">&gt;&gt; error: -1 in file runtime/orte_globals.c at line 173
</span><br>
<span class="quotelev2">&gt;&gt; input in flex scanner failed
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Guillaume
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Le camembert, de son fumet de venaison, avait vaincu les odeurs plus sourdes
</span><br>
<span class="quotelev2">&gt;&gt; du marolles
</span><br>
<span class="quotelev2">&gt;&gt; et du limbourg; il &#195;&#169;largissait ses exhalaisons, &#195;&#169;touffait les autres
</span><br>
<span class="quotelev2">&gt;&gt; senteurs sous une
</span><br>
<span class="quotelev2">&gt;&gt; abondance surprenante d&#226;&#128;&#153;haleines g&#195;&#162;t&#195;&#169;es. Cependant, au milieu de cette
</span><br>
<span class="quotelev2">&gt;&gt; phrase vigoureuse,
</span><br>
<span class="quotelev2">&gt;&gt; le parmesan jetait par moments un filet mince de fl&#195;&#187;te champ&#195;&#170;tre ; tandis
</span><br>
<span class="quotelev2">&gt;&gt; que les brie y
</span><br>
<span class="quotelev2">&gt;&gt; mettaient des douceurs fades de tambourins humides. Il y eut une reprise
</span><br>
<span class="quotelev2">&gt;&gt; suffocante du
</span><br>
<span class="quotelev2">&gt;&gt; livarot. Et cette symphonie se tint un moment sur une note aigu&#195;&#171; du g&#195;&#169;rom&#195;&#169;
</span><br>
<span class="quotelev2">&gt;&gt; anis&#195;&#169;,
</span><br>
<span class="quotelev2">&gt;&gt; prolong&#195;&#169;e en point d&#226;&#128;&#153;orgue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Emile Zola - Le Ventre de Paris
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Guillaume Houzeaux
</span><br>
<span class="quotelev2">&gt;&gt; Team Leader
</span><br>
<span class="quotelev2">&gt;&gt; Dpt. Computer Applications in Science and Engineering
</span><br>
<span class="quotelev2">&gt;&gt; Barcelona Supercomputing Center (BSC-CNS)
</span><br>
<span class="quotelev2">&gt;&gt; Edificio NEXUS I, Office 204
</span><br>
<span class="quotelev2">&gt;&gt; c) Gran Capitan 2-4
</span><br>
<span class="quotelev2">&gt;&gt; 08034 Barcelona, Spain
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +34 93 405 4291
</span><br>
<span class="quotelev2">&gt;&gt; Fax: +34 93 413 7721
</span><br>
<span class="quotelev2">&gt;&gt; Skype user: guillaume_houzeaux_bsc
</span><br>
<span class="quotelev2">&gt;&gt; WWW: CASE department
</span><br>
<span class="quotelev2">&gt;&gt; ResearcherID: D-4950-2012
</span><br>
<span class="quotelev2">&gt;&gt; Scientific Profile: &lt;rg-15.png&gt; &lt;gs-15.png&gt; &lt;orcid-15.png&gt; &lt;r-15.png&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;BSC.gif&gt; &lt;SO.png&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WARNING / LEGAL TEXT: This message is intended only for the use of the
</span><br>
<span class="quotelev2">&gt;&gt; individual or entity to which it is addressed and may contain information
</span><br>
<span class="quotelev2">&gt;&gt; which is privileged, confidential, proprietary, or exempt from disclosure
</span><br>
<span class="quotelev2">&gt;&gt; under applicable law. If you are not the intended recipient or the person
</span><br>
<span class="quotelev2">&gt;&gt; responsible for delivering the message to the intended recipient, you are
</span><br>
<span class="quotelev2">&gt;&gt; strictly prohibited from disclosing, distributing, copying, or in any way
</span><br>
<span class="quotelev2">&gt;&gt; using this message. If you have received this communication in error, please
</span><br>
<span class="quotelev2">&gt;&gt; notify the sender and destroy and delete any copies you may have received.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.bsc.es/disclaimer">http://www.bsc.es/disclaimer</a>
</span><br>
<span class="quotelev2">&gt;&gt; &lt;config.log.bz2&gt;&lt;environment_variables.bz2&gt;&lt;ompi_info.bz2&gt;&lt;ompi_infovompi.bz2&gt;&lt;test_openmpi.f90.bz2&gt;&lt;guillaume_houzeaux.vcf&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25570.php">http://www.open-mpi.org/community/lists/users/2014/10/25570.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25573.php">http://www.open-mpi.org/community/lists/users/2014/10/25573.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25574.php">http://www.open-mpi.org/community/lists/users/2014/10/25574.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25576/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25577.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with Yosemite"</a>
<li><strong>Previous message:</strong> <a href="25575.php">Siegmar Gross: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>In reply to:</strong> <a href="25574.php">Bert Wesarg: "Re: [OMPI users] Problem with Yosemite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25577.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with Yosemite"</a>
<li><strong>Reply:</strong> <a href="25577.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with Yosemite"</a>
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
