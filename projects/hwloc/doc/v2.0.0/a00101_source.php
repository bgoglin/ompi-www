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
<div class="title">distances.h</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">/*</span></div><div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment"> * Copyright © 2010-2017 Inria.  All rights reserved.</span></div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment"> * See COPYING in top-level directory.</span></div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment"> */</span></div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;</div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="preprocessor">#ifndef HWLOC_DISTANCES_H</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#define HWLOC_DISTANCES_H</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="preprocessor">#ifndef HWLOC_H</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="preprocessor">#error Please include the main hwloc.h instead</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="preprocessor">#endif</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;</div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> {</div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="preprocessor">#elif 0</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;}</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="preprocessor">#endif</span></div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;</div><div class="line"><a name="l00041"></a><span class="lineno"><a class="line" href="a00267.php">   41</a></span>&#160;<span class="keyword">struct </span><a class="code" href="a00267.php">hwloc_distances_s</a> {</div><div class="line"><a name="l00042"></a><span class="lineno"><a class="line" href="a00267.php#a4ca2af858cebbce7324ec49903d09474">   42</a></span>&#160;  <span class="keywordtype">unsigned</span> <a class="code" href="a00267.php#a4ca2af858cebbce7324ec49903d09474">nbobjs</a>;              </div><div class="line"><a name="l00043"></a><span class="lineno"><a class="line" href="a00267.php#af1e78b2d628d191fa6cae3fbfe891078">   43</a></span>&#160;  <a class="code" href="a00199.php">hwloc_obj_t</a> *<a class="code" href="a00267.php#af1e78b2d628d191fa6cae3fbfe891078">objs</a>;            </div><div class="line"><a name="l00048"></a><span class="lineno"><a class="line" href="a00267.php#aef9c83cf467da1b1fa4c36493febb3b5">   48</a></span>&#160;  <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> <a class="code" href="a00267.php#aef9c83cf467da1b1fa4c36493febb3b5">kind</a>;           </div><div class="line"><a name="l00049"></a><span class="lineno"><a class="line" href="a00267.php#ae43e19b2c743de05c93d71a30beaca75">   49</a></span>&#160;  hwloc_uint64_t *<a class="code" href="a00267.php#ae43e19b2c743de05c93d71a30beaca75">values</a>;       </div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;};</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;</div><div class="line"><a name="l00067"></a><span class="lineno"><a class="line" href="a00172.php#gab1bb10d3adb85b52cdc6fe5a7f74f108">   67</a></span>&#160;<span class="keyword">enum</span> <a class="code" href="a00172.php#gab1bb10d3adb85b52cdc6fe5a7f74f108">hwloc_distances_kind_e</a> {</div><div class="line"><a name="l00071"></a><span class="lineno"><a class="line" href="a00172.php#ggab1bb10d3adb85b52cdc6fe5a7f74f108a90dc38248c8d5392d4dd3e88f391e984">   71</a></span>&#160;  <a class="code" href="a00172.php#ggab1bb10d3adb85b52cdc6fe5a7f74f108a90dc38248c8d5392d4dd3e88f391e984">HWLOC_DISTANCES_KIND_FROM_OS</a> = (1UL&lt;&lt;0),</div><div class="line"><a name="l00075"></a><span class="lineno"><a class="line" href="a00172.php#ggab1bb10d3adb85b52cdc6fe5a7f74f108a0148d7f9be833a04f5a55455437c227b">   75</a></span>&#160;  <a class="code" href="a00172.php#ggab1bb10d3adb85b52cdc6fe5a7f74f108a0148d7f9be833a04f5a55455437c227b">HWLOC_DISTANCES_KIND_FROM_USER</a> = (1UL&lt;&lt;1),</div><div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;</div><div class="line"><a name="l00083"></a><span class="lineno"><a class="line" href="a00172.php#ggab1bb10d3adb85b52cdc6fe5a7f74f108afd6a3503fbc8f7c1a31235373cefc4c6">   83</a></span>&#160;  <a class="code" href="a00172.php#ggab1bb10d3adb85b52cdc6fe5a7f74f108afd6a3503fbc8f7c1a31235373cefc4c6">HWLOC_DISTANCES_KIND_MEANS_LATENCY</a> = (1UL&lt;&lt;2),</div><div class="line"><a name="l00090"></a><span class="lineno"><a class="line" href="a00172.php#ggab1bb10d3adb85b52cdc6fe5a7f74f108a41b19f141a3c0ffe85f9affaca4b0293">   90</a></span>&#160;  <a class="code" href="a00172.php#ggab1bb10d3adb85b52cdc6fe5a7f74f108a41b19f141a3c0ffe85f9affaca4b0293">HWLOC_DISTANCES_KIND_MEANS_BANDWIDTH</a> = (1UL&lt;&lt;3)</div><div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;};</div><div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;</div><div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;HWLOC_DECLSPEC <span class="keywordtype">int</span></div><div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;<a class="code" href="a00172.php#ga613e6b2a5d0f06626ee8d0c12fa46691">hwloc_distances_get</a>(<a class="code" href="a00150.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology,</div><div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;                    <span class="keywordtype">unsigned</span> *nr, <span class="keyword">struct</span> <a class="code" href="a00267.php">hwloc_distances_s</a> **distances,</div><div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;                    <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> <a class="code" href="a00267.php#aef9c83cf467da1b1fa4c36493febb3b5">kind</a>, <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> flags);</div><div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;</div><div class="line"><a name="l00124"></a><span class="lineno">  124</span>&#160;HWLOC_DECLSPEC <span class="keywordtype">int</span></div><div class="line"><a name="l00125"></a><span class="lineno">  125</span>&#160;<a class="code" href="a00172.php#ga5d1d35eccfcc2ebcef71a10972ce9b03">hwloc_distances_get_by_depth</a>(<a class="code" href="a00150.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <span class="keywordtype">int</span> depth,</div><div class="line"><a name="l00126"></a><span class="lineno">  126</span>&#160;                             <span class="keywordtype">unsigned</span> *nr, <span class="keyword">struct</span> <a class="code" href="a00267.php">hwloc_distances_s</a> **distances,</div><div class="line"><a name="l00127"></a><span class="lineno">  127</span>&#160;                             <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> <a class="code" href="a00267.php#aef9c83cf467da1b1fa4c36493febb3b5">kind</a>, <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> flags);</div><div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;</div><div class="line"><a name="l00133"></a><span class="lineno">  133</span>&#160;<span class="keyword">static</span> __hwloc_inline <span class="keywordtype">int</span></div><div class="line"><a name="l00134"></a><span class="lineno"><a class="line" href="a00172.php#ga9a5db596e1543581c5136b06eaede4b1">  134</a></span>&#160;<a class="code" href="a00172.php#ga9a5db596e1543581c5136b06eaede4b1">hwloc_distances_get_by_type</a>(<a class="code" href="a00150.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="code" href="a00148.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type,</div><div class="line"><a name="l00135"></a><span class="lineno">  135</span>&#160;                            <span class="keywordtype">unsigned</span> *nr, <span class="keyword">struct</span> <a class="code" href="a00267.php">hwloc_distances_s</a> **distances,</div><div class="line"><a name="l00136"></a><span class="lineno">  136</span>&#160;                            <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> <a class="code" href="a00267.php#aef9c83cf467da1b1fa4c36493febb3b5">kind</a>, <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> flags)</div><div class="line"><a name="l00137"></a><span class="lineno">  137</span>&#160;{</div><div class="line"><a name="l00138"></a><span class="lineno">  138</span>&#160;  <span class="keywordtype">int</span> depth = <a class="code" href="a00151.php#ga8bec782e21be313750da70cf7428b374">hwloc_get_type_depth</a>(topology, type);</div><div class="line"><a name="l00139"></a><span class="lineno">  139</span>&#160;  <span class="keywordflow">if</span> (depth == <a class="code" href="a00151.php#ggaf4e663cf42bbe20756b849c6293ef575a0565ab92ab72cb0cec91e23003294aad">HWLOC_TYPE_DEPTH_UNKNOWN</a> || depth == <a class="code" href="a00151.php#ggaf4e663cf42bbe20756b849c6293ef575ae99465995cacde6c210d5fc2e409798c">HWLOC_TYPE_DEPTH_MULTIPLE</a>) {</div><div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;    *nr = 0;</div><div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;    <span class="keywordflow">return</span> 0;</div><div class="line"><a name="l00142"></a><span class="lineno">  142</span>&#160;  }</div><div class="line"><a name="l00143"></a><span class="lineno">  143</span>&#160;  <span class="keywordflow">return</span> <a class="code" href="a00172.php#ga5d1d35eccfcc2ebcef71a10972ce9b03">hwloc_distances_get_by_depth</a>(topology, depth, nr, distances, kind, flags);</div><div class="line"><a name="l00144"></a><span class="lineno">  144</span>&#160;}</div><div class="line"><a name="l00145"></a><span class="lineno">  145</span>&#160;</div><div class="line"><a name="l00147"></a><span class="lineno">  147</span>&#160;HWLOC_DECLSPEC <span class="keywordtype">void</span></div><div class="line"><a name="l00148"></a><span class="lineno">  148</span>&#160;<a class="code" href="a00172.php#ga1dd78c1f9acd54f26aba0e284e97e51d">hwloc_distances_release</a>(<a class="code" href="a00150.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <span class="keyword">struct</span> <a class="code" href="a00267.php">hwloc_distances_s</a> *distances);</div><div class="line"><a name="l00149"></a><span class="lineno">  149</span>&#160;</div><div class="line"><a name="l00162"></a><span class="lineno">  162</span>&#160;<span class="keyword">static</span> __hwloc_inline <span class="keywordtype">int</span></div><div class="line"><a name="l00163"></a><span class="lineno"><a class="line" href="a00173.php#gab9e770c7d56c5d6040f26bd1dc8854cd">  163</a></span>&#160;<a class="code" href="a00173.php#gab9e770c7d56c5d6040f26bd1dc8854cd">hwloc_distances_obj_index</a>(<span class="keyword">struct</span> <a class="code" href="a00267.php">hwloc_distances_s</a> *distances, <a class="code" href="a00199.php">hwloc_obj_t</a> obj)</div><div class="line"><a name="l00164"></a><span class="lineno">  164</span>&#160;{</div><div class="line"><a name="l00165"></a><span class="lineno">  165</span>&#160;  <span class="keywordtype">unsigned</span> i;</div><div class="line"><a name="l00166"></a><span class="lineno">  166</span>&#160;  <span class="keywordflow">for</span>(i=0; i&lt;distances-&gt;<a class="code" href="a00267.php#a4ca2af858cebbce7324ec49903d09474">nbobjs</a>; i++)</div><div class="line"><a name="l00167"></a><span class="lineno">  167</span>&#160;    <span class="keywordflow">if</span> (distances-&gt;<a class="code" href="a00267.php#af1e78b2d628d191fa6cae3fbfe891078">objs</a>[i] == obj)</div><div class="line"><a name="l00168"></a><span class="lineno">  168</span>&#160;      <span class="keywordflow">return</span> (<span class="keywordtype">int</span>)i;</div><div class="line"><a name="l00169"></a><span class="lineno">  169</span>&#160;  <span class="keywordflow">return</span> -1;</div><div class="line"><a name="l00170"></a><span class="lineno">  170</span>&#160;}</div><div class="line"><a name="l00171"></a><span class="lineno">  171</span>&#160;</div><div class="line"><a name="l00179"></a><span class="lineno">  179</span>&#160;<span class="keyword">static</span> __hwloc_inline <span class="keywordtype">int</span></div><div class="line"><a name="l00180"></a><span class="lineno"><a class="line" href="a00173.php#ga3c665b23056e3269f777b21a67148c82">  180</a></span>&#160;<a class="code" href="a00173.php#ga3c665b23056e3269f777b21a67148c82">hwloc_distances_obj_pair_values</a>(<span class="keyword">struct</span> <a class="code" href="a00267.php">hwloc_distances_s</a> *distances,</div><div class="line"><a name="l00181"></a><span class="lineno">  181</span>&#160;                                <a class="code" href="a00199.php">hwloc_obj_t</a> obj1, <a class="code" href="a00199.php">hwloc_obj_t</a> obj2,</div><div class="line"><a name="l00182"></a><span class="lineno">  182</span>&#160;                                hwloc_uint64_t *value1to2, hwloc_uint64_t *value2to1)</div><div class="line"><a name="l00183"></a><span class="lineno">  183</span>&#160;{</div><div class="line"><a name="l00184"></a><span class="lineno">  184</span>&#160;  <span class="keywordtype">int</span> i1 = <a class="code" href="a00173.php#gab9e770c7d56c5d6040f26bd1dc8854cd">hwloc_distances_obj_index</a>(distances, obj1);</div><div class="line"><a name="l00185"></a><span class="lineno">  185</span>&#160;  <span class="keywordtype">int</span> i2 = <a class="code" href="a00173.php#gab9e770c7d56c5d6040f26bd1dc8854cd">hwloc_distances_obj_index</a>(distances, obj2);</div><div class="line"><a name="l00186"></a><span class="lineno">  186</span>&#160;  <span class="keywordflow">if</span> (i1 &lt; 0 || i2 &lt; 0)</div><div class="line"><a name="l00187"></a><span class="lineno">  187</span>&#160;    <span class="keywordflow">return</span> -1;</div><div class="line"><a name="l00188"></a><span class="lineno">  188</span>&#160;  *value1to2 = distances-&gt;<a class="code" href="a00267.php#ae43e19b2c743de05c93d71a30beaca75">values</a>[i1 * distances-&gt;<a class="code" href="a00267.php#a4ca2af858cebbce7324ec49903d09474">nbobjs</a> + i2];</div><div class="line"><a name="l00189"></a><span class="lineno">  189</span>&#160;  *value2to1 = distances-&gt;<a class="code" href="a00267.php#ae43e19b2c743de05c93d71a30beaca75">values</a>[i2 * distances-&gt;<a class="code" href="a00267.php#a4ca2af858cebbce7324ec49903d09474">nbobjs</a> + i1];</div><div class="line"><a name="l00190"></a><span class="lineno">  190</span>&#160;  <span class="keywordflow">return</span> 0;</div><div class="line"><a name="l00191"></a><span class="lineno">  191</span>&#160;}</div><div class="line"><a name="l00192"></a><span class="lineno">  192</span>&#160;</div><div class="line"><a name="l00202"></a><span class="lineno"><a class="line" href="a00174.php#ga22428b6bab271411e3834e6b4ca22e37">  202</a></span>&#160;<span class="keyword">enum</span> <a class="code" href="a00174.php#ga22428b6bab271411e3834e6b4ca22e37">hwloc_distances_add_flag_e</a> {</div><div class="line"><a name="l00206"></a><span class="lineno"><a class="line" href="a00174.php#gga22428b6bab271411e3834e6b4ca22e37a7f6baba797d70538d03c9d13052c62ab">  206</a></span>&#160;  <a class="code" href="a00174.php#gga22428b6bab271411e3834e6b4ca22e37a7f6baba797d70538d03c9d13052c62ab">HWLOC_DISTANCES_ADD_FLAG_GROUP</a> = (1UL&lt;&lt;0),</div><div class="line"><a name="l00212"></a><span class="lineno"><a class="line" href="a00174.php#gga22428b6bab271411e3834e6b4ca22e37a5233ccf631c3bc53dd5c3e7a5d5c9b77">  212</a></span>&#160;  <a class="code" href="a00174.php#gga22428b6bab271411e3834e6b4ca22e37a5233ccf631c3bc53dd5c3e7a5d5c9b77">HWLOC_DISTANCES_ADD_FLAG_GROUP_INACCURATE</a> = (1UL&lt;&lt;1)</div><div class="line"><a name="l00213"></a><span class="lineno">  213</span>&#160;};</div><div class="line"><a name="l00214"></a><span class="lineno">  214</span>&#160;</div><div class="line"><a name="l00229"></a><span class="lineno">  229</span>&#160;HWLOC_DECLSPEC <span class="keywordtype">int</span> <a class="code" href="a00174.php#gac5a71d96cd86efe31d6f8d282aae3d97">hwloc_distances_add</a>(<a class="code" href="a00150.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology,</div><div class="line"><a name="l00230"></a><span class="lineno">  230</span>&#160;                                       <span class="keywordtype">unsigned</span> <a class="code" href="a00267.php#a4ca2af858cebbce7324ec49903d09474">nbobjs</a>, <a class="code" href="a00199.php">hwloc_obj_t</a> *<a class="code" href="a00267.php#af1e78b2d628d191fa6cae3fbfe891078">objs</a>, hwloc_uint64_t *<a class="code" href="a00267.php#ae43e19b2c743de05c93d71a30beaca75">values</a>,</div><div class="line"><a name="l00231"></a><span class="lineno">  231</span>&#160;                                       <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> <a class="code" href="a00267.php#aef9c83cf467da1b1fa4c36493febb3b5">kind</a>, <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> flags);</div><div class="line"><a name="l00232"></a><span class="lineno">  232</span>&#160;</div><div class="line"><a name="l00241"></a><span class="lineno">  241</span>&#160;HWLOC_DECLSPEC <span class="keywordtype">int</span> <a class="code" href="a00174.php#gac188d9b64d9560255ce5f6d0a20f9c0a">hwloc_distances_remove</a>(<a class="code" href="a00150.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology);</div><div class="line"><a name="l00242"></a><span class="lineno">  242</span>&#160;</div><div class="line"><a name="l00247"></a><span class="lineno">  247</span>&#160;HWLOC_DECLSPEC <span class="keywordtype">int</span> <a class="code" href="a00174.php#gaa642a4c1a21c84f38ae23fca8a27845d">hwloc_distances_remove_by_depth</a>(<a class="code" href="a00150.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <span class="keywordtype">int</span> depth);</div><div class="line"><a name="l00248"></a><span class="lineno">  248</span>&#160;</div><div class="line"><a name="l00253"></a><span class="lineno">  253</span>&#160;<span class="keyword">static</span> __hwloc_inline <span class="keywordtype">int</span></div><div class="line"><a name="l00254"></a><span class="lineno"><a class="line" href="a00174.php#ga93db53773c96f5b83815e8441e2ebb93">  254</a></span>&#160;<a class="code" href="a00174.php#ga93db53773c96f5b83815e8441e2ebb93">hwloc_distances_remove_by_type</a>(<a class="code" href="a00150.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="code" href="a00148.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type)</div><div class="line"><a name="l00255"></a><span class="lineno">  255</span>&#160;{</div><div class="line"><a name="l00256"></a><span class="lineno">  256</span>&#160;  <span class="keywordtype">int</span> depth = <a class="code" href="a00151.php#ga8bec782e21be313750da70cf7428b374">hwloc_get_type_depth</a>(topology, type);</div><div class="line"><a name="l00257"></a><span class="lineno">  257</span>&#160;  <span class="keywordflow">if</span> (depth == <a class="code" href="a00151.php#ggaf4e663cf42bbe20756b849c6293ef575a0565ab92ab72cb0cec91e23003294aad">HWLOC_TYPE_DEPTH_UNKNOWN</a> || depth == <a class="code" href="a00151.php#ggaf4e663cf42bbe20756b849c6293ef575ae99465995cacde6c210d5fc2e409798c">HWLOC_TYPE_DEPTH_MULTIPLE</a>)</div><div class="line"><a name="l00258"></a><span class="lineno">  258</span>&#160;    <span class="keywordflow">return</span> 0;</div><div class="line"><a name="l00259"></a><span class="lineno">  259</span>&#160;  <span class="keywordflow">return</span> <a class="code" href="a00174.php#gaa642a4c1a21c84f38ae23fca8a27845d">hwloc_distances_remove_by_depth</a>(topology, depth);</div><div class="line"><a name="l00260"></a><span class="lineno">  260</span>&#160;}</div><div class="line"><a name="l00261"></a><span class="lineno">  261</span>&#160;</div><div class="line"><a name="l00265"></a><span class="lineno">  265</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div><div class="line"><a name="l00266"></a><span class="lineno">  266</span>&#160;} <span class="comment">/* extern &quot;C&quot; */</span></div><div class="line"><a name="l00267"></a><span class="lineno">  267</span>&#160;<span class="preprocessor">#endif</span></div><div class="line"><a name="l00268"></a><span class="lineno">  268</span>&#160;</div><div class="line"><a name="l00269"></a><span class="lineno">  269</span>&#160;</div><div class="line"><a name="l00270"></a><span class="lineno">  270</span>&#160;<span class="preprocessor">#endif </span><span class="comment">/* HWLOC_DISTANCES_H */</span><span class="preprocessor"></span></div><div class="ttc" id="a00267_php_ae43e19b2c743de05c93d71a30beaca75"><div class="ttname"><a href="a00267.php#ae43e19b2c743de05c93d71a30beaca75">hwloc_distances_s::values</a></div><div class="ttdeci">hwloc_uint64_t * values</div><div class="ttdoc">Matrix of distances between objects, stored as a one-dimension array. </div><div class="ttdef"><b>Definition:</b> distances.h:49</div></div>
<div class="ttc" id="a00172_php_gab1bb10d3adb85b52cdc6fe5a7f74f108"><div class="ttname"><a href="a00172.php#gab1bb10d3adb85b52cdc6fe5a7f74f108">hwloc_distances_kind_e</a></div><div class="ttdeci">hwloc_distances_kind_e</div><div class="ttdoc">Kinds of distance matrices. </div><div class="ttdef"><b>Definition:</b> distances.h:67</div></div>
<div class="ttc" id="a00151_php_ga8bec782e21be313750da70cf7428b374"><div class="ttname"><a href="a00151.php#ga8bec782e21be313750da70cf7428b374">hwloc_get_type_depth</a></div><div class="ttdeci">int hwloc_get_type_depth(hwloc_topology_t topology, hwloc_obj_type_t type)</div><div class="ttdoc">Returns the depth of objects of type type. </div></div>
<div class="ttc" id="a00172_php_ga5d1d35eccfcc2ebcef71a10972ce9b03"><div class="ttname"><a href="a00172.php#ga5d1d35eccfcc2ebcef71a10972ce9b03">hwloc_distances_get_by_depth</a></div><div class="ttdeci">int hwloc_distances_get_by_depth(hwloc_topology_t topology, int depth, unsigned *nr, struct hwloc_distances_s **distances, unsigned long kind, unsigned long flags)</div><div class="ttdoc">Retrieve distance matrices for object at a specific depth in the topology. </div></div>
<div class="ttc" id="a00174_php_gga22428b6bab271411e3834e6b4ca22e37a5233ccf631c3bc53dd5c3e7a5d5c9b77"><div class="ttname"><a href="a00174.php#gga22428b6bab271411e3834e6b4ca22e37a5233ccf631c3bc53dd5c3e7a5d5c9b77">HWLOC_DISTANCES_ADD_FLAG_GROUP_INACCURATE</a></div><div class="ttdoc">If grouping, consider the distance values as inaccurate and relax the comparisons during the grouping...</div><div class="ttdef"><b>Definition:</b> distances.h:212</div></div>
<div class="ttc" id="a00267_php_a4ca2af858cebbce7324ec49903d09474"><div class="ttname"><a href="a00267.php#a4ca2af858cebbce7324ec49903d09474">hwloc_distances_s::nbobjs</a></div><div class="ttdeci">unsigned nbobjs</div><div class="ttdoc">Number of objects described by the distance matrix. </div><div class="ttdef"><b>Definition:</b> distances.h:42</div></div>
<div class="ttc" id="a00150_php_ga9d1e76ee15a7dee158b786c30b6a6e38"><div class="ttname"><a href="a00150.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a></div><div class="ttdeci">struct hwloc_topology * hwloc_topology_t</div><div class="ttdoc">Topology context. </div><div class="ttdef"><b>Definition:</b> hwloc.h:626</div></div>
<div class="ttc" id="a00267_php_aef9c83cf467da1b1fa4c36493febb3b5"><div class="ttname"><a href="a00267.php#aef9c83cf467da1b1fa4c36493febb3b5">hwloc_distances_s::kind</a></div><div class="ttdeci">unsigned long kind</div><div class="ttdoc">OR&amp;#39;ed set of hwloc_distances_kind_e. </div><div class="ttdef"><b>Definition:</b> distances.h:48</div></div>
<div class="ttc" id="a00174_php_gga22428b6bab271411e3834e6b4ca22e37a7f6baba797d70538d03c9d13052c62ab"><div class="ttname"><a href="a00174.php#gga22428b6bab271411e3834e6b4ca22e37a7f6baba797d70538d03c9d13052c62ab">HWLOC_DISTANCES_ADD_FLAG_GROUP</a></div><div class="ttdoc">Try to group objects based on the newly provided distance information. </div><div class="ttdef"><b>Definition:</b> distances.h:206</div></div>
<div class="ttc" id="a00173_php_gab9e770c7d56c5d6040f26bd1dc8854cd"><div class="ttname"><a href="a00173.php#gab9e770c7d56c5d6040f26bd1dc8854cd">hwloc_distances_obj_index</a></div><div class="ttdeci">static int hwloc_distances_obj_index(struct hwloc_distances_s *distances, hwloc_obj_t obj)</div><div class="ttdoc">Find the index of an object in a distances structure. </div><div class="ttdef"><b>Definition:</b> distances.h:163</div></div>
<div class="ttc" id="a00172_php_ggab1bb10d3adb85b52cdc6fe5a7f74f108afd6a3503fbc8f7c1a31235373cefc4c6"><div class="ttname"><a href="a00172.php#ggab1bb10d3adb85b52cdc6fe5a7f74f108afd6a3503fbc8f7c1a31235373cefc4c6">HWLOC_DISTANCES_KIND_MEANS_LATENCY</a></div><div class="ttdoc">Distance values are similar to latencies between objects. Values are smaller for closer objects...</div><div class="ttdef"><b>Definition:</b> distances.h:83</div></div>
<div class="ttc" id="a00174_php_ga93db53773c96f5b83815e8441e2ebb93"><div class="ttname"><a href="a00174.php#ga93db53773c96f5b83815e8441e2ebb93">hwloc_distances_remove_by_type</a></div><div class="ttdeci">static int hwloc_distances_remove_by_type(hwloc_topology_t topology, hwloc_obj_type_t type)</div><div class="ttdoc">Remove distance matrices for objects of a specific type in the topology. </div><div class="ttdef"><b>Definition:</b> distances.h:254</div></div>
<div class="ttc" id="a00151_php_ggaf4e663cf42bbe20756b849c6293ef575ae99465995cacde6c210d5fc2e409798c"><div class="ttname"><a href="a00151.php#ggaf4e663cf42bbe20756b849c6293ef575ae99465995cacde6c210d5fc2e409798c">HWLOC_TYPE_DEPTH_MULTIPLE</a></div><div class="ttdoc">Objects of given type exist at different depth in the topology (only for Groups). ...</div><div class="ttdef"><b>Definition:</b> hwloc.h:757</div></div>
<div class="ttc" id="a00267_php_af1e78b2d628d191fa6cae3fbfe891078"><div class="ttname"><a href="a00267.php#af1e78b2d628d191fa6cae3fbfe891078">hwloc_distances_s::objs</a></div><div class="ttdeci">hwloc_obj_t * objs</div><div class="ttdoc">Array of objects described by the distance matrix. These objects are not in any particular order...</div><div class="ttdef"><b>Definition:</b> distances.h:43</div></div>
<div class="ttc" id="a00173_php_ga3c665b23056e3269f777b21a67148c82"><div class="ttname"><a href="a00173.php#ga3c665b23056e3269f777b21a67148c82">hwloc_distances_obj_pair_values</a></div><div class="ttdeci">static int hwloc_distances_obj_pair_values(struct hwloc_distances_s *distances, hwloc_obj_t obj1, hwloc_obj_t obj2, hwloc_uint64_t *value1to2, hwloc_uint64_t *value2to1)</div><div class="ttdoc">Find the values between two objects in a distances structure. </div><div class="ttdef"><b>Definition:</b> distances.h:180</div></div>
<div class="ttc" id="a00174_php_gac188d9b64d9560255ce5f6d0a20f9c0a"><div class="ttname"><a href="a00174.php#gac188d9b64d9560255ce5f6d0a20f9c0a">hwloc_distances_remove</a></div><div class="ttdeci">int hwloc_distances_remove(hwloc_topology_t topology)</div><div class="ttdoc">Remove all distance matrices from a topology. </div></div>
<div class="ttc" id="a00172_php_ggab1bb10d3adb85b52cdc6fe5a7f74f108a90dc38248c8d5392d4dd3e88f391e984"><div class="ttname"><a href="a00172.php#ggab1bb10d3adb85b52cdc6fe5a7f74f108a90dc38248c8d5392d4dd3e88f391e984">HWLOC_DISTANCES_KIND_FROM_OS</a></div><div class="ttdoc">These distances were obtained from the operating system or hardware. </div><div class="ttdef"><b>Definition:</b> distances.h:71</div></div>
<div class="ttc" id="a00199_php"><div class="ttname"><a href="a00199.php">hwloc_obj</a></div><div class="ttdoc">Structure of a topology object. </div><div class="ttdef"><b>Definition:</b> hwloc.h:347</div></div>
<div class="ttc" id="a00174_php_ga22428b6bab271411e3834e6b4ca22e37"><div class="ttname"><a href="a00174.php#ga22428b6bab271411e3834e6b4ca22e37">hwloc_distances_add_flag_e</a></div><div class="ttdeci">hwloc_distances_add_flag_e</div><div class="ttdoc">Flags for adding a new distances to a topology. </div><div class="ttdef"><b>Definition:</b> distances.h:202</div></div>
<div class="ttc" id="a00172_php_ga9a5db596e1543581c5136b06eaede4b1"><div class="ttname"><a href="a00172.php#ga9a5db596e1543581c5136b06eaede4b1">hwloc_distances_get_by_type</a></div><div class="ttdeci">static int hwloc_distances_get_by_type(hwloc_topology_t topology, hwloc_obj_type_t type, unsigned *nr, struct hwloc_distances_s **distances, unsigned long kind, unsigned long flags)</div><div class="ttdoc">Retrieve distance matrices for object of a specific type. </div><div class="ttdef"><b>Definition:</b> distances.h:134</div></div>
<div class="ttc" id="a00174_php_gac5a71d96cd86efe31d6f8d282aae3d97"><div class="ttname"><a href="a00174.php#gac5a71d96cd86efe31d6f8d282aae3d97">hwloc_distances_add</a></div><div class="ttdeci">int hwloc_distances_add(hwloc_topology_t topology, unsigned nbobjs, hwloc_obj_t *objs, hwloc_uint64_t *values, unsigned long kind, unsigned long flags)</div><div class="ttdoc">Provide a distance matrix. </div></div>
<div class="ttc" id="a00148_php_gacd37bb612667dc437d66bfb175a8dc55"><div class="ttname"><a href="a00148.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a></div><div class="ttdeci">hwloc_obj_type_t</div><div class="ttdef"><b>Definition:</b> hwloc.h:172</div></div>
<div class="ttc" id="a00172_php_ga613e6b2a5d0f06626ee8d0c12fa46691"><div class="ttname"><a href="a00172.php#ga613e6b2a5d0f06626ee8d0c12fa46691">hwloc_distances_get</a></div><div class="ttdeci">int hwloc_distances_get(hwloc_topology_t topology, unsigned *nr, struct hwloc_distances_s **distances, unsigned long kind, unsigned long flags)</div><div class="ttdoc">Retrieve distance matrices. </div></div>
<div class="ttc" id="a00151_php_ggaf4e663cf42bbe20756b849c6293ef575a0565ab92ab72cb0cec91e23003294aad"><div class="ttname"><a href="a00151.php#ggaf4e663cf42bbe20756b849c6293ef575a0565ab92ab72cb0cec91e23003294aad">HWLOC_TYPE_DEPTH_UNKNOWN</a></div><div class="ttdoc">No object of given type exists in the topology. </div><div class="ttdef"><b>Definition:</b> hwloc.h:756</div></div>
<div class="ttc" id="a00172_php_ggab1bb10d3adb85b52cdc6fe5a7f74f108a41b19f141a3c0ffe85f9affaca4b0293"><div class="ttname"><a href="a00172.php#ggab1bb10d3adb85b52cdc6fe5a7f74f108a41b19f141a3c0ffe85f9affaca4b0293">HWLOC_DISTANCES_KIND_MEANS_BANDWIDTH</a></div><div class="ttdoc">Distance values are similar to bandwidths between objects. Values are higher for closer objects...</div><div class="ttdef"><b>Definition:</b> distances.h:90</div></div>
<div class="ttc" id="a00267_php"><div class="ttname"><a href="a00267.php">hwloc_distances_s</a></div><div class="ttdoc">Matrix of distances between a set of objects. </div><div class="ttdef"><b>Definition:</b> distances.h:41</div></div>
<div class="ttc" id="a00172_php_ga1dd78c1f9acd54f26aba0e284e97e51d"><div class="ttname"><a href="a00172.php#ga1dd78c1f9acd54f26aba0e284e97e51d">hwloc_distances_release</a></div><div class="ttdeci">void hwloc_distances_release(hwloc_topology_t topology, struct hwloc_distances_s *distances)</div><div class="ttdoc">Release a distance structure previously returned by hwloc_distances_get(). </div></div>
<div class="ttc" id="a00174_php_gaa642a4c1a21c84f38ae23fca8a27845d"><div class="ttname"><a href="a00174.php#gaa642a4c1a21c84f38ae23fca8a27845d">hwloc_distances_remove_by_depth</a></div><div class="ttdeci">int hwloc_distances_remove_by_depth(hwloc_topology_t topology, int depth)</div><div class="ttdoc">Remove distance matrices for objects at a specific depth in the topology. </div></div>
<div class="ttc" id="a00172_php_ggab1bb10d3adb85b52cdc6fe5a7f74f108a0148d7f9be833a04f5a55455437c227b"><div class="ttname"><a href="a00172.php#ggab1bb10d3adb85b52cdc6fe5a7f74f108a0148d7f9be833a04f5a55455437c227b">HWLOC_DISTANCES_KIND_FROM_USER</a></div><div class="ttdoc">These distances were provided by the user. </div><div class="ttdef"><b>Definition:</b> distances.h:75</div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");