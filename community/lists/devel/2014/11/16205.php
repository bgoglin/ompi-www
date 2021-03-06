<?
$subject_val = "Re: [OMPI devel] thread-tests hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 11:38:01 2014" -->
<!-- isoreceived="20141105163801" -->
<!-- sent="Wed, 5 Nov 2014 18:37:55 +0200" -->
<!-- isosent="20141105163755" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] thread-tests hang" -->
<!-- id="CAAO1KyaJxTjKEhXm-sfnCeM6h29uEV=yXF=GLzOtDNY=R=3RNg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="3907E84C-2141-4792-8EAC-F3C087401D83_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] thread-tests hang<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-05 11:37:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16206.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Previous message:</strong> <a href="16204.php">Nathan Hjelm: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>In reply to:</strong> <a href="16200.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16206.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16206.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
the problem is that now the behavior is changed.
<br>
Before: user provided single flag and could use MT support.
<br>
Now same method will not work starting from v1.8.4 which is production
<br>
branch and will live for a long time with it.
<br>
<p>Is that possible that some1 familiar with this configure kung-fu will fix
<br>
it to keep old behave by enabling both flags if one of them is ON?
<br>
Thanks
<br>
<p><p>On Wed, Nov 5, 2014 at 5:41 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On Nov 5, 2014, at 9:42 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hey Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; now we use only this &quot;--enable-mpi-thread-multiple&quot; and it worked.
</span><br>
<span class="quotelev2">&gt; &gt; does it mean that now we need to pass &quot;--enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt; --enable-opal-multi-threads&quot; to get it working again?
</span><br>
<span class="quotelev2">&gt; &gt; Maybe if one of the params used it should enable another one as well?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe that that is the case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Keep in mind: this mess is cleaned up on the trunk; the threading options
</span><br>
<span class="quotelev1">&gt; are simpler.  This is &quot;legacy&quot; now, on the v1.8 branch, and likely won't be
</span><br>
<span class="quotelev1">&gt; updated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The change that happened recently was that THREAD_MULTIPLE support was
</span><br>
<span class="quotelev1">&gt; accidentally enabled by default on the v1.8 branch (which wasn't
</span><br>
<span class="quotelev1">&gt; intended).  The change a few days ago was to turn THREAD_MULTIPLE support
</span><br>
<span class="quotelev1">&gt; off by default.
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16200.php">http://www.open-mpi.org/community/lists/devel/2014/11/16200.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind Regards,
M.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16205/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16206.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Previous message:</strong> <a href="16204.php">Nathan Hjelm: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>In reply to:</strong> <a href="16200.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16206.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16206.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
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
