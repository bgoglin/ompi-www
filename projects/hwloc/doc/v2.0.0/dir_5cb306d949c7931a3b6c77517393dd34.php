<?php
$topdir = "../../../..";
# Note that we must use the PHP "$$" indirection to assign to the
# "title" variable, because if we list "$ title" (without the space)
# in this file, Doxygen will replace it with a string title.
$ver = basename(getcwd());
$thwarting_doxygen_preprocessor = "title";
$$thwarting_doxygen_preprocessor = "Portable Hardware Locality (hwloc) Documentation: $ver";
$header_include_file = "$topdir/projects/hwloc/doc/$ver/www.open-mpi.org-css.inc";
include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
?>
<!-- Generated by Doxygen 1.8.13 -->
<script type="text/javascript" src="menudata.js"></script>
<script type="text/javascript" src="menu.js"></script>
<script type="text/javascript">
$(function() {
  initMenu('',false,false,'search.php','Search');
});
</script>
<div id="main-nav"></div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_d44c64559bbebec7f509842c48db8b23.php">include</a></li><li class="navelem"><a class="el" href="dir_5cb306d949c7931a3b6c77517393dd34.php">hwloc</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">hwloc Directory Reference</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="files"></a>
Files</h2></td></tr>
<tr class="memitem:a00095"><td class="memItemLeft" align="right" valign="top">file &#160;</td><td class="memItemRight" valign="bottom"><b>bitmap.h</b> <a href="a00095_source.php">[code]</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a00116"><td class="memItemLeft" align="right" valign="top">file &#160;</td><td class="memItemRight" valign="bottom"><b>cuda.h</b> <a href="a00116_source.php">[code]</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a00119"><td class="memItemLeft" align="right" valign="top">file &#160;</td><td class="memItemRight" valign="bottom"><b>cudart.h</b> <a href="a00119_source.php">[code]</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a00134"><td class="memItemLeft" align="right" valign="top">file &#160;</td><td class="memItemRight" valign="bottom"><b>diff.h</b> <a href="a00134_source.php">[code]</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a00101"><td class="memItemLeft" align="right" valign="top">file &#160;</td><td class="memItemRight" valign="bottom"><b>distances.h</b> <a href="a00101_source.php">[code]</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a00098"><td class="memItemLeft" align="right" valign="top">file &#160;</td><td class="memItemRight" valign="bottom"><b>export.h</b> <a href="a00098_source.php">[code]</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a00125"><td class="memItemLeft" align="right" valign="top">file &#160;</td><td class="memItemRight" valign="bottom"><b>gl.h</b> <a href="a00125_source.php">[code]</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a00110"><td class="memItemLeft" align="right" valign="top">file &#160;</td><td class="memItemRight" valign="bottom"><b>glibc-sched.h</b> <a href="a00110_source.php">[code]</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a00092"><td class="memItemLeft" align="right" valign="top">file &#160;</td><td class="memItemRight" valign="bottom"><b>helper.h</b> <a href="a00092_source.php">[code]</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a00128"><td class="memItemLeft" align="right" valign="top">file &#160;</td><td class="memItemRight" valign="bottom"><b>intel-mic.h</b> <a href="a00128_source.php">[code]</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a00107"><td class="memItemLeft" align="right" valign="top">file &#160;</td><td class="memItemRight" valign="bottom"><b>linux-libnuma.h</b> <a href="a00107_source.php">[code]</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a00104"><td class="memItemLeft" align="right" valign="top">file &#160;</td><td class="memItemRight" valign="bottom"><b>linux.h</b> <a href="a00104_source.php">[code]</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a00122"><td class="memItemLeft" align="right" valign="top">file &#160;</td><td class="memItemRight" valign="bottom"><b>nvml.h</b> <a href="a00122_source.php">[code]</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a00113"><td class="memItemLeft" align="right" valign="top">file &#160;</td><td class="memItemRight" valign="bottom"><b>opencl.h</b> <a href="a00113_source.php">[code]</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a00131"><td class="memItemLeft" align="right" valign="top">file &#160;</td><td class="memItemRight" valign="bottom"><b>openfabrics-verbs.h</b> <a href="a00131_source.php">[code]</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a00140"><td class="memItemLeft" align="right" valign="top">file &#160;</td><td class="memItemRight" valign="bottom"><b>plugins.h</b> <a href="a00140_source.php">[code]</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a00137"><td class="memItemLeft" align="right" valign="top">file &#160;</td><td class="memItemRight" valign="bottom"><b>shmem.h</b> <a href="a00137_source.php">[code]</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");