<?php
$topdir = "../../..";

include_once("version.inc");
$title = "Open MPI: Version $release_series";

include_once("$topdir/software/ompi/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/downloads.inc");

$project = "Open MPI";
$list_name = "announce";
$prev_describe = "the v$release_series download page";

$news_url = "https://github.com/open-mpi/ompi/raw/$release_branch/NEWS";

include_once("$topdir/includes/subscribe-announce.inc");
?>

<p><hr>

<h2>Changes in this release:</h2>

<ul>
<li><a href="../major-changes.php">See this page</a> if you are
upgrading from a prior major release series of Open MPI.  It shows the
Big Changes for which end users need to be aware.</li>
<li><?php print("<a href=\"$news_url\">"); ?>See the NEWS file</a> for
a more fine-grained listing of changes between each release and
sub-release of the Open MPI v<?php print($release_series);
?> series.</li>
</ul>

<p>See the <a href="<?php print($topdir);
?>/software/ompi/versions/timeline.php">version timeline</a> for
information on the chronology of Open MPI releases.</p>

<p>
<B>NOTE</B>: Open MPI 4.1.7 incorrectly changed the shared library
   versioning information for the OpenSHMEM interface, potentially
   causing link errors when updating from prior releases of Open MPI
   to 4.1.7.  Open MPI 4.1.8 resets the shared library version number
   history to allow updates from Open MPI 4.1.6 and prior.  Customers
   who updated to 4.1.7 and relinked their OpenSHMEM applications will
   have to relink their application again when updating to Open MPI
   4.1.8 or later.
<p>
<div align="center">


<?php
print_release_section("openmpi", "open-mpi-release", $s3_prefix, $download_prefix,
                       $releases, $prereleases, $cygwin_note);
?>
</div>
</p>

<?php
  include_once("$topdir/includes/footer.inc");
