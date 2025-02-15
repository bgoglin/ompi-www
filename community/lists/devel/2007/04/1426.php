<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 17 09:12:14 2007" -->
<!-- isoreceived="20070417131214" -->
<!-- sent="Tue, 17 Apr 2007 16:12:08 +0300" -->
<!-- isosent="20070417131208" -->
<!-- name="Sharon Melamed" -->
<!-- email="sharonm_at_[hidden]" -->
<!-- subject="[OMPI devel] (no subject)" -->
<!-- id="39C75744D164D948A170E9792AF8E7CA02B371_at_exil.voltaire.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Sharon Melamed (<em>sharonm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-17 09:12:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1427.php">Jeff Squyres: "Re: [OMPI devel] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="1425.php">Ralph H Castain: "Re: [OMPI devel] ORTE scalability issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1427.php">Jeff Squyres: "Re: [OMPI devel] (no subject)"</a>
<li><strong>Reply:</strong> <a href="1427.php">Jeff Squyres: "Re: [OMPI devel] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I added an MCA parameter and I want the user to apply an Hex value to
<br>
this parameter (0x...).
<br>
<p>In order to do so I needed to change the 'atoi' call in the
<br>
mca_base_param.c file to 'strtol' call.
<br>
<p>&nbsp;
<br>
<p>My question is: Can this code run on all platforms?
<br>
<p>&nbsp;
<br>
<p>Index: opal/mca/base/mca_base_param.c
<br>
<p>===================================================================
<br>
<p>--- opal/mca/base/mca_base_param.c     (revision 14391)
<br>
<p>+++ opal/mca/base/mca_base_param.c  (working copy)
<br>
<p>@@ -1673,7 +1673,7 @@
<br>
<p>&nbsp;&nbsp;&nbsp;if (NULL != param-&gt;mbp_env_var_name &amp;&amp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL != (env = getenv(param-&gt;mbp_env_var_name))) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (MCA_BASE_PARAM_TYPE_INT == param-&gt;mbp_type) {
<br>
<p>-      storage-&gt;intval = atoi(env);
<br>
<p>+      storage-&gt;intval = strtol(env,(char**)NULL,0);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (MCA_BASE_PARAM_TYPE_STRING == param-&gt;mbp_type) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;storage-&gt;stringval = strdup(env);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>@@ -1714,7 +1714,7 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (0 == strcmp(fv-&gt;mbpfv_param, param-&gt;mbp_full_name)) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (MCA_BASE_PARAM_TYPE_INT == param-&gt;mbp_type) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != fv-&gt;mbpfv_value) {
<br>
<p>-                    param-&gt;mbp_file_value.intval =
<br>
atoi(fv-&gt;mbpfv_value);
<br>
<p>+                    param-&gt;mbp_file_value.intval =
<br>
strtol(fv-&gt;mbpfv_value,(char**)NULL,0);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;param-&gt;mbp_file_value.intval = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>Thanks.
<br>
<p>&nbsp;
<br>
<p>Sharon.
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1426/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1427.php">Jeff Squyres: "Re: [OMPI devel] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="1425.php">Ralph H Castain: "Re: [OMPI devel] ORTE scalability issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1427.php">Jeff Squyres: "Re: [OMPI devel] (no subject)"</a>
<li><strong>Reply:</strong> <a href="1427.php">Jeff Squyres: "Re: [OMPI devel] (no subject)"</a>
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
