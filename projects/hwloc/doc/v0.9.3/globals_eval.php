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
<!-- Generated by Doxygen 1.6.1 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul>
      <li><a href="index.php"><span>Main&nbsp;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div class="tabs">
    <ul>
      <li><a href="files.php"><span>File&nbsp;List</span></a></li>
      <li class="current"><a href="globals.php"><span>Globals</span></a></li>
    </ul>
  </div>
  <div class="tabs">
    <ul>
      <li><a href="globals.php"><span>All</span></a></li>
      <li><a href="globals_func.php"><span>Functions</span></a></li>
      <li><a href="globals_type.php"><span>Typedefs</span></a></li>
      <li><a href="globals_enum.php"><span>Enumerations</span></a></li>
      <li class="current"><a href="globals_eval.php"><span>Enumerator</span></a></li>
      <li><a href="globals_defs.php"><span>Defines</span></a></li>
    </ul>
  </div>
</div>
<div class="contents">
&nbsp;<ul>
<li>HWLOC_CPUBIND_PROCESS
: <a class="el" href="group__hwlocality__binding.php#gga9b2de9a34a18edb39fb272adf9c33622a2e0dd0128dac6b03408c7dd170477fdc">hwloc.h</a>
</li>
<li>HWLOC_CPUBIND_STRICT
: <a class="el" href="group__hwlocality__binding.php#gga9b2de9a34a18edb39fb272adf9c33622a679a7e0f0c7ee06b123565f90d98e7fa">hwloc.h</a>
</li>
<li>HWLOC_CPUBIND_THREAD
: <a class="el" href="group__hwlocality__binding.php#gga9b2de9a34a18edb39fb272adf9c33622af1b6bbad00d7b1017b918e3719f4d421">hwloc.h</a>
</li>
<li>HWLOC_OBJ_CACHE
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a56ee0b7eca88f363b75b34fdde8c9ddc">hwloc.h</a>
</li>
<li>HWLOC_OBJ_CORE
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55ac793958f330bca371aa1535de8aff45f">hwloc.h</a>
</li>
<li>HWLOC_OBJ_MACHINE
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a3f4e83ffc4a259354959ae8a9eaa2a80">hwloc.h</a>
</li>
<li>HWLOC_OBJ_MISC
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a19f8a6953fa91efc76bcbcdf2d22de4d">hwloc.h</a>
</li>
<li>HWLOC_OBJ_NODE
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd">hwloc.h</a>
</li>
<li>HWLOC_OBJ_PROC
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a5e0ccbbd5922cbb07b53fe892b91b8f2">hwloc.h</a>
</li>
<li>HWLOC_OBJ_SOCKET
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a1ac6e07775ae4324b3fe9dbd72c785ec">hwloc.h</a>
</li>
<li>HWLOC_OBJ_SYSTEM
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a3aa1b842d1fd4207ebce171f95a244ec">hwloc.h</a>
</li>
<li>HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM
: <a class="el" href="group__hwlocality__configuration.php#ggada025d3ec20b4b420f8038d23d6e7bdea6ecb6abc6a0bb75e81564f8bca85783b">hwloc.h</a>
</li>
<li>HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM
: <a class="el" href="group__hwlocality__configuration.php#ggada025d3ec20b4b420f8038d23d6e7bdea129b4fea1300be22bbaf0bb0958994c8">hwloc.h</a>
</li>
</ul>
</div>
<?php
include_once("$topdir/includes/footer.inc");
