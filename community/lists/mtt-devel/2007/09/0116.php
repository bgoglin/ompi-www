<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Sep 22 10:58:47 2007" -->
<!-- isoreceived="20070922145847" -->
<!-- sent="Sat, 22 Sep 2007 10:56:44 -0400" -->
<!-- isosent="20070922145644" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT server error (user: cisco)" -->
<!-- id="8F205C21-964C-4A72-A0C8-017C6192492B_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200709221223.l8MCNJax016799_at_milliways.osl.iu.edu" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-22 10:56:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0117.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<li><strong>Previous message:</strong> <a href="0115.php">Josh Hursey: "Re: [MTT devel] 2nd cut at MTT web site"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0117.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<li><strong>Reply:</strong> <a href="0117.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0154.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0180.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/01/0201.php">Ethan Mallove: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So I got two of these emails this morning. Any thoughts on why these  
<br>
2 latency/bandwidth submissions are failing?
<br>
<p>The problem is with:
<br>
SQL ERROR: ERROR:  malformed array literal:  
<br>
&quot;{136.36,124.59,124.58,124.61,124.74,124.52,124.57,137.98,124.62,124.69, 
<br>
, 
<br>
124.81,140.91,186.13,187.51,309.31,419.06,743.33,1574.05,3542.81,7342.21 
<br>
,15831.27,38853.38,77511.53,130775.23}&quot;
<br>
<p>More specifically it is probably the empty array entry about 11  
<br>
entries into the array (&quot;124.69,,124.81&quot;). Could this be the result  
<br>
of an error that was not caught properly?
<br>
<p>-- josh
<br>
<p>On Sep 22, 2007, at 8:23 AM, jjhursey_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SQL QUERY: INSERT INTO latency_bandwidth
</span><br>
<span class="quotelev1">&gt; 	(latency_bandwidth_id, message_size, latency_min, latency_avg,  
</span><br>
<span class="quotelev1">&gt; latency_max, bandwidth_min, bandwidth_avg, bandwidth_max) VALUES
</span><br>
<span class="quotelev1">&gt; 	('107215',  
</span><br>
<span class="quotelev1">&gt; '{0,1,2,4,8,16,32,64,128,256,19024,512,1024,2048,4096,8192,16384,32768 
</span><br>
<span class="quotelev1">&gt; ,65536,131072,262144,524288,1048576,2097152,4194304}',  
</span><br>
<span class="quotelev1">&gt; '{135.69,124.04,124.28,124.20,124.40,124.27,124.17,124.29,124.26,124.2 
</span><br>
<span class="quotelev1">&gt; 9,5,124.40,140.17,185.32,187.23,307.94,418.52,741.56,1568.65,3537.90,7 
</span><br>
<span class="quotelev1">&gt; 314.73,15428.99,37013.45,68857.91,111194.49}',  
</span><br>
<span class="quotelev1">&gt; '{136.36,124.59,124.58,124.61,124.74,124.52,124.57,137.98,124.62,124.6 
</span><br>
<span class="quotelev1">&gt; 9,,124.81,140.91,186.13,187.51,309.31,419.06,743.33,1574.05,3542.81,73 
</span><br>
<span class="quotelev1">&gt; 42.21,15831.27,38853.38,77511.53,130775.23}',  
</span><br>
<span class="quotelev1">&gt; '{137.07,125.04,125.02,125.07,125.17,124.93,124.93,151.80,125.04,125.0 
</span><br>
<span class="quotelev1">&gt; 8,,125.29,141.53,187.11,187.89,310.59,419.98,744.73,1580.83,3546.58,73 
</span><br>
<span class="quotelev1">&gt; 71.56,16254.56,40249.37,87200.25,149653.98}', DEFAULT,  
</span><br>
<span class="quotelev1">&gt; '{0.00,0.03,0.06,0.12,0.24,0.49,0.98,1.61,3.90,7.81,,15.59,27.60,41.75 
</span><br>
<span class="quotelev1">&gt; , 
</span><br>
<span class="quotelev1">&gt; 83.16,100.61,148.82,167.85,158.14,140.98,135.66,123.04,99.38,91.74,106 
</span><br>
<span class="quotelev1">&gt; .91}', DEFAULT)
</span><br>
<span class="quotelev1">&gt; SQL ERROR: ERROR:  malformed array literal:  
</span><br>
<span class="quotelev1">&gt; &quot;{136.36,124.59,124.58,124.61,124.74,124.52,124.57,137.98,124.62,124.6 
</span><br>
<span class="quotelev1">&gt; 9,,124.81,140.91,186.13,187.51,309.31,419.06,743.33,1574.05,3542.81,73 
</span><br>
<span class="quotelev1">&gt; 42.21,15831.27,38853.38,77511.53,130775.23}&quot;
</span><br>
<span class="quotelev1">&gt; SQL ERROR:
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0117.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<li><strong>Previous message:</strong> <a href="0115.php">Josh Hursey: "Re: [MTT devel] 2nd cut at MTT web site"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0117.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<li><strong>Reply:</strong> <a href="0117.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0154.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0180.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/01/0201.php">Ethan Mallove: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
