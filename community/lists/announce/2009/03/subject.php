<? 
if (preg_match("/\/[12][0-9][0-9][0-9]\/[01][0-9]\//", $_SERVER["REQUEST_URI"])) {
    include("../../include/index-header.inc");
} else {
    include("include/index-header.inc");
}
?>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="author.php">Author view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/announce/2009/02/subject.php">Previous Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/announce/2009/04/subject.php">Next Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/announce/index.php">List of Folders</a></th></tr>
</table>
</div>
<div class="center">
<table>
<tr>
<th colspan="4">3 Messages</th>
</tr>
<tr>
  <th>Starting:</th><td><em>2005-08-22 13:22:14</em></td>
  <th>Ending:</th><td><em>2016-07-27 12:01:44</em></td>
</tr>
</table>
</div>
<hr>
<ul>
<li><strong>[Open MPI Announce] Critical bug notice</strong>
<ul><li><a href="0029.php">Jeff Squyres</a> <a name="29"><em>(2009-03-27 14:34:46)</em></a></li></ul>
<li><strong>[Open MPI Announce] New Open MPI release numbering scheme</strong>
<ul><li><a href="0028.php">Jeff Squyres</a> <a name="28"><em>(2009-03-20 07:09:01)</em></a></li></ul>
<li><strong>[Open MPI Announce] Open MPI v1.3.1 released</strong>
<ul><li><a href="0027.php">Ralph Castain</a> <a name="27"><em>(2009-03-19 09:35:38)</em></a></li></ul>
</ul>
<hr>
<div class="center">
<table>
<tr><th><a name="end">Last message date: </a></th><td><em>2016-07-27 12:01:44</em></td>
<th>Archived on: </th><td><em>2016-07-27 12:02:09 EDT</em></td>
</table>
</div>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="author.php">Author view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/announce/2009/02/subject.php">Previous Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/announce/2009/04/subject.php">Next Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/announce/index.php">List of Folders</a></th></tr>
</table>
</div>
<!-- trailer="footer" -->
<? 
if (preg_match("/\/[12][0-9][0-9][0-9]\/[01][0-9]\//", $_SERVER{'REQUEST_URI'})) {
    include("../../include/index-footer.inc");
} else {
    include("include/index-footer.inc");
}
?>
