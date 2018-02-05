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
<div class="title">shmem.h</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">/*</span></div><div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment"> * Copyright © 2013-2018 Inria.  All rights reserved.</span></div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment"> * See COPYING in top-level directory.</span></div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment"> */</span></div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;</div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="preprocessor">#ifndef HWLOC_SHMEM_H</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#define HWLOC_SHMEM_H</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="preprocessor">#include &lt;hwloc.h&gt;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;</div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> {</div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="preprocessor">#elif 0</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;}</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="preprocessor">#endif</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;</div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;HWLOC_DECLSPEC <span class="keywordtype">int</span> <a class="code" href="a00187.php#ga772ab52750cdd0eec85128df24888001">hwloc_shmem_topology_get_length</a>(<a class="code" href="a00150.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology,</div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;                                                   <span class="keywordtype">size_t</span> *lengthp,</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;                                                   <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> flags);</div><div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;</div><div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;HWLOC_DECLSPEC <span class="keywordtype">int</span> <a class="code" href="a00187.php#ga61b20e346fc76f76420e3a88cc80a671">hwloc_shmem_topology_write</a>(<a class="code" href="a00150.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology,</div><div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;                                              <span class="keywordtype">int</span> fd, hwloc_uint64_t fileoffset,</div><div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;                                              <span class="keywordtype">void</span> *mmap_address, <span class="keywordtype">size_t</span> length,</div><div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;                                              <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> flags);</div><div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;</div><div class="line"><a name="l00125"></a><span class="lineno">  125</span>&#160;HWLOC_DECLSPEC <span class="keywordtype">int</span> <a class="code" href="a00187.php#ga21545bd0f09d9b554c8e60a630e0e629">hwloc_shmem_topology_adopt</a>(<a class="code" href="a00150.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> *topologyp,</div><div class="line"><a name="l00126"></a><span class="lineno">  126</span>&#160;                                              <span class="keywordtype">int</span> fd, hwloc_uint64_t fileoffset,</div><div class="line"><a name="l00127"></a><span class="lineno">  127</span>&#160;                                              <span class="keywordtype">void</span> *mmap_address, <span class="keywordtype">size_t</span> length,</div><div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;                                              <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> flags);</div><div class="line"><a name="l00132"></a><span class="lineno">  132</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div><div class="line"><a name="l00133"></a><span class="lineno">  133</span>&#160;} <span class="comment">/* extern &quot;C&quot; */</span></div><div class="line"><a name="l00134"></a><span class="lineno">  134</span>&#160;<span class="preprocessor">#endif</span></div><div class="line"><a name="l00135"></a><span class="lineno">  135</span>&#160;</div><div class="line"><a name="l00136"></a><span class="lineno">  136</span>&#160;</div><div class="line"><a name="l00137"></a><span class="lineno">  137</span>&#160;<span class="preprocessor">#endif </span><span class="comment">/* HWLOC_SHMEM_H */</span><span class="preprocessor"></span></div><div class="ttc" id="a00150_php_ga9d1e76ee15a7dee158b786c30b6a6e38"><div class="ttname"><a href="a00150.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a></div><div class="ttdeci">struct hwloc_topology * hwloc_topology_t</div><div class="ttdoc">Topology context. </div><div class="ttdef"><b>Definition:</b> hwloc.h:626</div></div>
<div class="ttc" id="a00187_php_ga772ab52750cdd0eec85128df24888001"><div class="ttname"><a href="a00187.php#ga772ab52750cdd0eec85128df24888001">hwloc_shmem_topology_get_length</a></div><div class="ttdeci">int hwloc_shmem_topology_get_length(hwloc_topology_t topology, size_t *lengthp, unsigned long flags)</div><div class="ttdoc">Get the required shared memory length for storing a topology. </div></div>
<div class="ttc" id="a00187_php_ga21545bd0f09d9b554c8e60a630e0e629"><div class="ttname"><a href="a00187.php#ga21545bd0f09d9b554c8e60a630e0e629">hwloc_shmem_topology_adopt</a></div><div class="ttdeci">int hwloc_shmem_topology_adopt(hwloc_topology_t *topologyp, int fd, hwloc_uint64_t fileoffset, void *mmap_address, size_t length, unsigned long flags)</div><div class="ttdoc">Adopt a shared memory topology stored in a file. </div></div>
<div class="ttc" id="a00187_php_ga61b20e346fc76f76420e3a88cc80a671"><div class="ttname"><a href="a00187.php#ga61b20e346fc76f76420e3a88cc80a671">hwloc_shmem_topology_write</a></div><div class="ttdeci">int hwloc_shmem_topology_write(hwloc_topology_t topology, int fd, hwloc_uint64_t fileoffset, void *mmap_address, size_t length, unsigned long flags)</div><div class="ttdoc">Duplicate a topology to a shared memory file. </div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");