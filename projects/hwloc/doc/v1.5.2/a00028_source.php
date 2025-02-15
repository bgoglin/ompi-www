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
<!-- Generated by Doxygen 1.8.3.1 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_d44c64559bbebec7f509842c48db8b23.php">include</a></li><li class="navelem"><a class="el" href="dir_5cb306d949c7931a3b6c77517393dd34.php">hwloc</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">cuda.h</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">/*</span></div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment"> * Copyright © 2010-2012 inria.  All rights reserved.</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment"> * Copyright © 2010-2011 Université Bordeaux 1</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment"> * Copyright © 2011 Cisco Systems, Inc.  All rights reserved.</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment"> * See COPYING in top-level directory.</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment"> */</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;</div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="preprocessor">#ifndef HWLOC_CUDA_H</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define HWLOC_CUDA_H</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="preprocessor">#include &lt;hwloc.h&gt;</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="preprocessor">#include &lt;hwloc/autogen/config.h&gt;</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="preprocessor">#include &lt;hwloc/linux.h&gt;</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="preprocessor">#include &lt;hwloc/helper.h&gt;</span></div>
<div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;</div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="preprocessor">#include &lt;cuda.h&gt;</span></div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;</div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;</div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div>
<div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;<span class="preprocessor"></span><span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> {</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keyword">static</span> inline <span class="keywordtype">int</span></div>
<div class="line"><a name="l00039"></a><span class="lineno"><a class="code" href="a00070.php#gae45c92fbc7ac538cf69fdfcc73994ed9">   39</a></span>&#160;<a class="code" href="a00070.php#gae45c92fbc7ac538cf69fdfcc73994ed9" title="Return the domain, bus and device IDs of device cudevice.">hwloc_cuda_get_device_pci_ids</a>(<a class="code" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology ,</div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;                               CUdevice cudevice, <span class="keywordtype">int</span> *domain, <span class="keywordtype">int</span> *bus, <span class="keywordtype">int</span> *dev)</div>
<div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;{</div>
<div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;  CUresult cres;</div>
<div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;</div>
<div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;<span class="preprocessor">#if CUDA_VERSION &gt;= 4000</span></div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;<span class="preprocessor"></span>  cres = cuDeviceGetAttribute(domain, CU_DEVICE_ATTRIBUTE_PCI_DOMAIN_ID, cudevice);</div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;  <span class="keywordflow">if</span> (cres != CUDA_SUCCESS) {</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;    errno = ENOSYS;</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;  }</div>
<div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;<span class="preprocessor">#else</span></div>
<div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;<span class="preprocessor"></span>  *domain = 0;</div>
<div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;<span class="preprocessor"></span>  cres = cuDeviceGetAttribute(bus, CU_DEVICE_ATTRIBUTE_PCI_BUS_ID, cudevice);</div>
<div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;  <span class="keywordflow">if</span> (cres != CUDA_SUCCESS) {</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;    errno = ENOSYS;</div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;  }</div>
<div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;  cres = cuDeviceGetAttribute(dev, CU_DEVICE_ATTRIBUTE_PCI_DEVICE_ID, cudevice);</div>
<div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;  <span class="keywordflow">if</span> (cres != CUDA_SUCCESS) {</div>
<div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;    errno = ENOSYS;</div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;  }</div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;</div>
<div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;  <span class="keywordflow">return</span> 0;</div>
<div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;}</div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;</div>
<div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;<span class="keyword">static</span> inline <span class="keywordtype">int</span></div>
<div class="line"><a name="l00078"></a><span class="lineno"><a class="code" href="a00070.php#gae06cf330d2f0d9949feb52b146b7d136">   78</a></span>&#160;<a class="code" href="a00070.php#gae06cf330d2f0d9949feb52b146b7d136" title="Get the CPU set of logical processors that are physically close to device cudevice.">hwloc_cuda_get_device_cpuset</a>(<a class="code" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology ,</div>
<div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;                             CUdevice cudevice, <a class="code" href="a00040.php#ga4bbf39b68b6f568fb92739e7c0ea7801" title="A CPU set is a bitmap whose bits are set according to CPU physical OS indexes.">hwloc_cpuset_t</a> <span class="keyword">set</span>)</div>
<div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;{</div>
<div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;<span class="preprocessor">#ifdef HWLOC_LINUX_SYS</span></div>
<div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;<span class="preprocessor"></span>  <span class="comment">/* If we&#39;re on Linux, use the sysfs mechanism to get the local cpus */</span></div>
<div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;<span class="preprocessor">#define HWLOC_CUDA_DEVICE_SYSFS_PATH_MAX 128</span></div>
<div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;<span class="preprocessor"></span>  <span class="keywordtype">char</span> path[HWLOC_CUDA_DEVICE_SYSFS_PATH_MAX];</div>
<div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;  FILE *sysfile = NULL;</div>
<div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;  <span class="keywordtype">int</span> domainid, busid, deviceid;</div>
<div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;</div>
<div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;  <span class="keywordflow">if</span> (<a class="code" href="a00070.php#gae45c92fbc7ac538cf69fdfcc73994ed9" title="Return the domain, bus and device IDs of device cudevice.">hwloc_cuda_get_device_pci_ids</a>(topology, cudevice, &amp;domainid, &amp;busid, &amp;deviceid))</div>
<div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;</div>
<div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;  <span class="keywordflow">if</span> (!<a class="code" href="a00046.php#ga0d109e33fc7990f62f665d336e5e5111" title="Does the topology context come from this system?">hwloc_topology_is_thissystem</a>(topology)) {</div>
<div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;    errno = EINVAL;</div>
<div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;  }</div>
<div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;</div>
<div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;  sprintf(path, <span class="stringliteral">&quot;/sys/bus/pci/devices/%04x:%02x:%02x.0/local_cpus&quot;</span>, domainid, busid, deviceid);</div>
<div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;  sysfile = fopen(path, <span class="stringliteral">&quot;r&quot;</span>);</div>
<div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;  <span class="keywordflow">if</span> (!sysfile)</div>
<div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;</div>
<div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;  <a class="code" href="a00067.php#gaeacad897c30dbea284948374ad4b010c" title="Convert a linux kernel cpumap file file into hwloc CPU set.">hwloc_linux_parse_cpumap_file</a>(sysfile, <span class="keyword">set</span>);</div>
<div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;  <span class="keywordflow">if</span> (<a class="code" href="a00065.php#gaa94fed35d2a598bc4a8657b6955b7bf5" title="Test whether bitmap bitmap is empty.">hwloc_bitmap_iszero</a>(<span class="keyword">set</span>))</div>
<div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;    <a class="code" href="a00065.php#gab14743355fa03b36cef521cbcd2fbf64" title="Copy the contents of bitmap src into the already allocated bitmap dst.">hwloc_bitmap_copy</a>(<span class="keyword">set</span>, <a class="code" href="a00060.php#ga418ebb39eaf1eac8f9cf4047cf59a534" title="Get complete CPU set.">hwloc_topology_get_complete_cpuset</a>(topology));</div>
<div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;</div>
<div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;  fclose(sysfile);</div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;<span class="preprocessor">#else</span></div>
<div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;<span class="preprocessor"></span>  <span class="comment">/* Non-Linux systems simply get a full cpuset */</span></div>
<div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;  <a class="code" href="a00065.php#gab14743355fa03b36cef521cbcd2fbf64" title="Copy the contents of bitmap src into the already allocated bitmap dst.">hwloc_bitmap_copy</a>(<span class="keyword">set</span>, <a class="code" href="a00060.php#ga418ebb39eaf1eac8f9cf4047cf59a534" title="Get complete CPU set.">hwloc_topology_get_complete_cpuset</a>(topology));</div>
<div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;<span class="preprocessor"></span>  <span class="keywordflow">return</span> 0;</div>
<div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;}</div>
<div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;</div>
<div class="line"><a name="l00121"></a><span class="lineno">  121</span>&#160;<span class="keyword">static</span> inline <a class="code" href="a00016.php" title="Structure of a topology object.">hwloc_obj_t</a></div>
<div class="line"><a name="l00122"></a><span class="lineno"><a class="code" href="a00070.php#ga04d1f8bd566a7f0b30d5e498f9228042">  122</a></span>&#160;<a class="code" href="a00070.php#ga04d1f8bd566a7f0b30d5e498f9228042" title="Get the hwloc object for the PCI device corresponding to device cudevice.">hwloc_cuda_get_device_pcidev</a>(<a class="code" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology, CUdevice cudevice)</div>
<div class="line"><a name="l00123"></a><span class="lineno">  123</span>&#160;{</div>
<div class="line"><a name="l00124"></a><span class="lineno">  124</span>&#160;  <span class="keywordtype">int</span> domain, bus, dev;</div>
<div class="line"><a name="l00125"></a><span class="lineno">  125</span>&#160;</div>
<div class="line"><a name="l00126"></a><span class="lineno">  126</span>&#160;  <span class="keywordflow">if</span> (<a class="code" href="a00070.php#gae45c92fbc7ac538cf69fdfcc73994ed9" title="Return the domain, bus and device IDs of device cudevice.">hwloc_cuda_get_device_pci_ids</a>(topology, cudevice, &amp;domain, &amp;bus, &amp;dev))</div>
<div class="line"><a name="l00127"></a><span class="lineno">  127</span>&#160;    <span class="keywordflow">return</span> NULL;</div>
<div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;</div>
<div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;  <span class="keywordflow">return</span> <a class="code" href="a00064.php#ga546e1d690c63fb24177f3013ed78ceb1" title="Find the PCI device object matching the PCI bus id given domain, bus device and function PCI bus id...">hwloc_get_pcidev_by_busid</a>(topology, domain, bus, dev, 0);</div>
<div class="line"><a name="l00130"></a><span class="lineno">  130</span>&#160;}</div>
<div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;</div>
<div class="line"><a name="l00135"></a><span class="lineno">  135</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div>
<div class="line"><a name="l00136"></a><span class="lineno">  136</span>&#160;<span class="preprocessor"></span>} <span class="comment">/* extern &quot;C&quot; */</span></div>
<div class="line"><a name="l00137"></a><span class="lineno">  137</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00138"></a><span class="lineno">  138</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00139"></a><span class="lineno">  139</span>&#160;</div>
<div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;<span class="preprocessor">#endif </span><span class="comment">/* HWLOC_CUDA_H */</span><span class="preprocessor"></span></div>
</div><!-- fragment --></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
