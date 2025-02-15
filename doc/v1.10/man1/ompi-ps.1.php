<?php
$topdir = "../../..";
$title = "ompi-ps(1) man page (version 1.10.1)";
$meta_desc = "Open MPI v1.10.1 man page: ompi-ps(1)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
         <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
 ompi-ps, orte-ps - Displays information about the active
jobs and processes  in Open MPI.  <p>
 <b>NOTE:</b> <i>ompi-ps</i>, and <i>orte-ps</i> are exact synonyms
for each other. Using any of the names will result in exactly identical
behavior.
<h2><a name='sect1' href='#toc1'>Synopsis</a></h2>
 <b>ompi-ps</b> <b>[ options ]</b>
<h2><a name='sect2' href='#toc2'>Options</a></h2>
 <i>ompi-ps</i> will display
information about running job(s) in the current universe.
<dl>

<dt><b>-h | --help</b> </dt>
<dd>Display
help for this command   </dd>

<dt><b>-v | --verbose</b> </dt>
<dd>Enable verbose output for debugging
  </dd>

<dt><b>--daemons</b> </dt>
<dd>Display daemon job information.   </dd>

<dt><b>-j | --jobid</b> </dt>
<dd>Display the state of
a specific job in the universe. By default all jobs will be displayed.
</dd>

<dt><b>-p | --vpid</b> </dt>
<dd>Display the state of a specific vpid (process) in the universe.
By default all vpids cooresponding to processes will be displayed. Must
be used in conjunction with the <b>--jobid</b> option.   </dd>

<dt><b>-n | --nodes</b> </dt>
<dd>Display all of
the allocated nodes, and their cooresponding states. By default this is
disabled.   </dd>

<dt><b>-gmca | --gmca &lt;key&gt; &lt;value&gt;</b> </dt>
<dd>Pass global MCA parameters that are applicable
to all contexts. <i>&lt;key&gt;</i> is the parameter name; <i>&lt;value&gt;</i> is the parameter value.
  </dd>

<dt><b>-mca | --mca &lt;key&gt; &lt;value&gt;</b> </dt>
<dd>Send arguments to various MCA modules.      </dd>
</dl>

<h2><a name='sect3' href='#toc3'>Description</a></h2>

<p>
<i>ompi-ps</i> displays the state of jobs running inside an Open RTE universe.

<h2><a name='sect4' href='#toc4'>See Also</a></h2>
<i>orterun(1)</i>, <i>orte-clean(1)</i>  <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Synopsis</a></li>
<li><a name='toc2' href='#sect2'>Options</a></li>
<li><a name='toc3' href='#sect3'>Description</a></li>
<li><a name='toc4' href='#sect4'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
