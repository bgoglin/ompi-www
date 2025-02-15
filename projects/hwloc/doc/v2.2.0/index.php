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
<!-- Generated by Doxygen 1.8.17 -->
<script type="text/javascript" src="menudata.js"></script>
<script type="text/javascript" src="menu.js"></script>
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:cf05388f2679ee054f2beb29a391d25f4e673ac3&amp;dn=gpl-2.0.txt GPL-v2 */
$(function() {
  initMenu('',false,false,'search.php','Search');
});
/* @license-end */</script>
<div id="main-nav"></div>
</div><!-- top -->
<div class="PageDoc"><div class="header">
  <div class="headertitle">
<div class="title">Hardware Locality </div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><h1 class="sub">Portable abstraction of parallel architectures for high-performance computing</h1>
<hr  />
<p> 
<div class="section" id="common_introduction">
 </p>
<h1><a class="anchor" id="common_introduction"></a>
Introduction</h1>
<p>The Hardware Locality (hwloc) software project aims at easing the process of discovering hardware resources in parallel architectures. It offers command-line tools and a C API for consulting these resources, their locality, attributes, and interconnection. hwloc primarily aims at helping high-performance computing (HPC) applications, but is also applicable to any project seeking to exploit code and/or data locality on modern computing platforms.</p>
<p>hwloc is actually made of two subprojects distributed together: </p><ul>
<li>
<b>The original hwloc project for describing the internals of computing nodes</b>. It is described in details starting at section <a class="el" href="a00324.php">Hardware Locality (hwloc) Introduction</a>.  </li>
<li>
<b>The network-oriented companion called netloc (Network Locality)</b>, described in details starting with section <a class="el" href="a00340.php">Network Locality (netloc)</a>.  </li>
</ul>
<p> 
<b>See also the Related pages tab above for links to other sections.</b>
</p>
<p>Netloc may be disabled, but the original hwloc cannot. Both hwloc and netloc APIs are documented after these sections.</p>
<p> 
</div><div class="section" id="common_installation">
 </p>
<h1><a class="anchor" id="common_installation"></a>
Installation</h1>
<p>hwloc (<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>) is available under the BSD license. It is hosted as a sub-project of the overall Open MPI project (<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>). Note that hwloc does not require any functionality from Open MPI &ndash; it is a wholly separate (and much smaller!) project and code base. It just happens to be hosted as part of the overall Open MPI project.</p>
<h2><a class="anchor" id="basic_installation"></a>
Basic Installation</h2>
<p>Installation is the fairly common GNU-based process:</p>
<pre class="fragment">shell$ ./configure --prefix=...
shell$ make
shell$ make install
</pre><p>hwloc- and netloc-specific configure options and requirements are documented in sections <a class="el" href="a00324.php#hwloc_installation">hwloc Installation</a> and <a class="el" href="a00340.php#netloc_installation">Netloc Installation</a> respectively.</p>
<p>Also note that if you install supplemental libraries in non-standard locations, hwloc's configure script may not be able to find them without some help. You may need to specify additional CPPFLAGS, LDFLAGS, or PKG_CONFIG_PATH values on the configure command line.</p>
<p>For example, if libpciaccess was installed into /opt/pciaccess, hwloc's configure script may not find it be default. Try adding PKG_CONFIG_PATH to the ./configure command line, like this:</p>
<pre class="fragment">./configure PKG_CONFIG_PATH=/opt/pciaccess/lib/pkgconfig ...
</pre><p>Running the "lstopo" tool is a good way to check as a graphical output whether hwloc properly detected the architecture of your node. Netloc command-line tools can be used to display the network topology interconnecting your nodes.</p>
<h2><a class="anchor" id="gitclone_installation"></a>
Installing from a Git clone</h2>
<p>Additionally, the code can be directly cloned from Git:</p>
<pre class="fragment">shell$ git clone https://github.com/open-mpi/hwloc.git
shell$ cd hwloc
shell$ ./autogen.sh
</pre><p>Note that GNU Autoconf &gt;=2.63, Automake &gt;=1.11 and Libtool &gt;=2.2.6 are required when building from a Git clone.</p>
<p>Nightly development snapshots are available on the web site, they can be configured and built without any need for Git or GNU Autotools.</p>
<p> 
</div><div class="section" id="bugs">
 </p>
<h1><a class="anchor" id="bugs"></a>
Questions and Bugs</h1>
<p>Bugs should be reported in the tracker (<a href="https://github.com/open-mpi/hwloc/issues">https://github.com/open-mpi/hwloc/issues</a>). Opening a new issue automatically displays lots of hints about how to debug and report issues.</p>
<p>Questions may be sent to the users or developers mailing lists (<a href="http://www.open-mpi.org/community/lists/hwloc.php">http://www.open-mpi.org/community/lists/hwloc.php</a>).</p>
<p>There is also a <code>#hwloc</code> IRC channel on Freenode (<code><a href="irc.freenode.net">irc.freenode.net</a></code>). </p>
</div></div><!-- PageDoc -->
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
