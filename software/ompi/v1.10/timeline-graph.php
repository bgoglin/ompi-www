<?php
$topdir = "../../..";
include_once("$topdir/includes/timeline-graph.inc");

$vpos = 0;
$graph = 0;
$data = array();

$first_date = "2015-05-01";

# The graph needs about a year time span for the title to display properly.
# So pick either a year beyond the first date or 90 days beyond now,
# whichever is greater.

# 3 months from today
$ts1 = time() + (90 * 24 * 60 * 60);
# 1 year beyond the first date (this i
$ts2 = mktime(0, 0, 0, 5, 1, 2016);

$ts = (int) max($ts1, $ts2);
$beyond_end_date = strftime("%Y-%m-%d", $ts);

//////////////////////////////////////////////////////////////////////////
// v1.10 release series
series("v1.10 series", $first_date, $beyond_end_date, $data, $vpos, $graph);
milestone("branch", "2015-05-23", $data, $vpos);

// Party on
$graph->CreateSimple($data);
$graph->Stroke();