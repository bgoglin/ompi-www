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
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/users/2005/03/subject.php">Previous Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/users/2005/05/subject.php">Next Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/users/index.php">List of Folders</a></th></tr>
</table>
</div>
<div class="center">
<table>
<tr>
<th colspan="4">5 Messages</th>
</tr>
<tr>
  <th>Starting:</th><td><em>2005-01-11 11:35:37</em></td>
  <th>Ending:</th><td><em>2016-07-27 12:01:45</em></td>
</tr>
</table>
</div>
<hr>
<ul>
<li><strong>[Beowulf] Alternative to MPI ABI</strong>
<ul><li><a href="0050.php">Joe Landman</a> <a name="50"><em>(2005-04-03 20:06:42)</em></a></li></ul>
<ul><li><a href="0049.php">Mark Hahn</a> <a name="49"><em>(2005-04-03 19:14:04)</em></a></li></ul>
<ul><li><a href="0048.php">Joe Landman</a> <a name="48"><em>(2005-04-03 17:16:56)</em></a></li></ul>
<ul><li><a href="0047.php">Greg Lindahl</a> <a name="47"><em>(2005-04-03 14:32:46)</em></a></li></ul>
<ul><li><a href="0046.php">Jeff Squyres</a> <a name="46"><em>(2005-04-03 13:19:39)</em></a></li></ul>
</ul>
<hr>
<div class="center">
<table>
<tr><th><a name="end">Last message date: </a></th><td><em>2016-07-27 12:01:45</em></td>
<th>Archived on: </th><td><em>2016-07-27 12:02:26 EDT</em></td>
</table>
</div>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="author.php">Author view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/users/2005/03/subject.php">Previous Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/users/2005/05/subject.php">Next Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/users/index.php">List of Folders</a></th></tr>
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
