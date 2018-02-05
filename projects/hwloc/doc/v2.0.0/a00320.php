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
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Importing and exporting topologies from/to XML files </div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><p> 
<div class="section">
</p>
<p>hwloc offers the ability to export topologies to XML files and reload them later. This is for instance useful for loading topologies faster (see <a class="el" href="a00326.php#faq_xml">I do not want hwloc to rediscover my enormous machine topology every time I rerun a process</a>), manipulating other nodes' topology, or avoiding the need for privileged processes (see <a class="el" href="a00326.php#faq_privileged">Does hwloc require privileged access?</a>).</p>
<p>Topologies may be exported to XML files thanks to <a class="el" href="a00170.php#ga333f79975b4eeb28a3d8fad3373583ce" title="Export the topology into an XML file. ">hwloc_topology_export_xml()</a>, or to a XML memory buffer with <a class="el" href="a00170.php#gad33b7f7c11db10459505a3b1634fd3f1" title="Export the topology into a newly-allocated XML memory buffer. ">hwloc_topology_export_xmlbuffer()</a>. The lstopo program can also serve as a XML topology export tool.</p>
<p>XML topologies may then be reloaded later with <a class="el" href="a00156.php#ga879439b7ee99407ee911b3ac64e9a25e" title="Enable XML-file based topology. ">hwloc_topology_set_xml()</a> and <a class="el" href="a00156.php#ga2745616b65595e1c1e579ecc7e461fa8" title="Enable XML based topology using a memory buffer (instead of a file, as with hwloc_topology_set_xml())...">hwloc_topology_set_xmlbuffer()</a>. The HWLOC_XMLFILE environment variable also tells hwloc to load the topology from the given XML file.</p>
<dl class="section note"><dt>Note</dt><dd>Loading XML topologies disables binding because the loaded topology may not correspond to the physical machine that loads it. This behavior may be reverted by asserting that loaded file really matches the underlying system with the HWLOC_THISSYSTEM environment variable or the <a class="el" href="a00157.php#ggada025d3ec20b4b420f8038d23d6e7bdea6ecb6abc6a0bb75e81564f8bca85783b" title="Assume that the selected backend provides the topology for the system on which we are running...">HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM</a> topology flag.</dd>
<dd>
The topology flag <a class="el" href="a00157.php#ggada025d3ec20b4b420f8038d23d6e7bdea1b66bbd66e900e5c837f71defb32ad89" title="Get the set of allowed resources from the local operating system even if the topology was loaded from...">HWLOC_TOPOLOGY_FLAG_THISSYSTEM_ALLOWED_RESOURCES</a> may be used to load a XML topology that contains the entire machine and restrict it to the part that is actually available to the current process (e.g. when Linux Cgroup/Cpuset are used to restrict the set of resources).</dd>
<dd>
hwloc also offers the ability to export/import <a class="el" href="a00186.php">Topology differences</a>.</dd>
<dd>
XML topology files are not localized. They use a dot as a decimal separator. Therefore any exported topology can be reloaded on any other machine without requiring to change the locale.</dd>
<dd>
XML exports contain all details about the platform. It means that two very similar nodes still have different XML exports (e.g. some serial numbers or MAC addresses are different). If a less precise exporting/importing is required, one may want to look at <a class="el" href="a00321.php">Synthetic topologies</a> instead.</dd></dl>
<p> 
</div><div class="section" id="xml_backends">
 </p>
<h1><a class="anchor" id="xml_backends"></a>
libxml2 and minimalistic XML backends</h1>
<p>hwloc offers two backends for importing/exporting XML.</p>
<p>First, it can use the libxml2 library for importing/exporting XML files. It features full XML support, for instance when those files have to be manipulated by non-hwloc software (e.g. a XSLT parser). The libxml2 backend is enabled by default if libxml2 development headers are available (the relevant development package is usually <code>libxml2-devel</code> or <code>libxml2-dev</code>).</p>
<p>If libxml2 is not available at configure time, or if <code>--disable-libxml2</code> is passed, hwloc falls back to a custom backend. Contrary to the aforementioned full XML backend with libxml2, this minimalistic XML backend cannot be guaranteed to work with external programs. It should only be assumed to be compatible with the same hwloc release (even if using the libxml2 backend). Its advantage is, however, to always be available without requiring any external dependency.</p>
<p>If libxml2 is available but the core hwloc library should not directly depend on it, the libxml2 support may be built as a dynamicall-loaded plugin. One should pass <code>--enable-plugins</code> to enable plugin support (when supported) and build as plugins all component that support it. Or pass <code>--enable-plugins=xml_libxml</code> to only build this libxml2 support as a plugin.</p>
<p> 
</div><div class="section" id="xml_errors">
 </p>
<h1><a class="anchor" id="xml_errors"></a>
XML import error management</h1>
<p>Importing XML files can fail at least because of file access errors, invalid XML syntax or non-hwloc-valid XML contents.</p>
<p>Both backend cannot detect all these errors when the input XML file or buffer is selected (when <a class="el" href="a00156.php#ga879439b7ee99407ee911b3ac64e9a25e" title="Enable XML-file based topology. ">hwloc_topology_set_xml()</a> or <a class="el" href="a00156.php#ga2745616b65595e1c1e579ecc7e461fa8" title="Enable XML based topology using a memory buffer (instead of a file, as with hwloc_topology_set_xml())...">hwloc_topology_set_xmlbuffer()</a> is called). Some errors such non-hwloc-valid contents can only be detected later when loading the topology with <a class="el" href="a00150.php#gabdf58d87ad77f6615fccdfe0535ff826" title="Build the actual topology. ">hwloc_topology_load()</a>.</p>
<p>It is therefore strongly recommended to check the return value of both <a class="el" href="a00156.php#ga879439b7ee99407ee911b3ac64e9a25e" title="Enable XML-file based topology. ">hwloc_topology_set_xml()</a> (or <a class="el" href="a00156.php#ga2745616b65595e1c1e579ecc7e461fa8" title="Enable XML based topology using a memory buffer (instead of a file, as with hwloc_topology_set_xml())...">hwloc_topology_set_xmlbuffer()</a>) and <a class="el" href="a00150.php#gabdf58d87ad77f6615fccdfe0535ff826" title="Build the actual topology. ">hwloc_topology_load()</a> to handle all these errors. </p>
</div></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");