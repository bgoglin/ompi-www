<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 31 12:47:30 2007" -->
<!-- isoreceived="20070831164730" -->
<!-- sent="Fri, 31 Aug 2007 12:47:26 -0400" -->
<!-- isosent="20070831164726" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT users] Database submit error" -->
<!-- id="88915700-3F07-4A84-B1E5-6B09E89C27C9_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="67EB56CF-1B8E-4124-A14C-96812A003F38_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-08-31 12:47:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0071.php">Jeff Squyres: "Re: [MTT devel] [MTT users] Database submit error"</a>
<li><strong>Previous message:</strong> <a href="0069.php">Jeff Squyres: "[MTT devel] Testbake results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0071.php">Jeff Squyres: "Re: [MTT devel] [MTT users] Database submit error"</a>
<li><strong>Reply:</strong> <a href="0071.php">Jeff Squyres: "Re: [MTT devel] [MTT users] Database submit error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was looking at the data from Monday Aug 27, 8 am to Tuesday Aug 28,  
<br>
Noonish when this problem was occuring, and the data is mostly  
<br>
invalid. We have test_builds pointing at the wrong test_suites. Since  
<br>
this brings all of this data inso suspicion I'm going through and  
<br>
flaging them all as 'trial'.
<br>
<p>If you don't have any conflict, then I'd like to remove this data  
<br>
alltogether from the database so the normalization tables can be  
<br>
cleaned up.
<br>
<p>Any objections to removing the set of data in the time range Monday  
<br>
Aug 27, 8 am to Tuesday Aug 28, Noonish? it's about 8,000 test_runs  
<br>
since most of the test runs were getting rejected during that time  
<br>
period we are not losing any good data.
<br>
<p>-- Josh
<br>
<p><p>On Aug 28, 2007, at 10:27 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Short Version:
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt; I just finished the fix, and the submit script is back up and running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This was a bug that arose in testing, but somehow did not get
</span><br>
<span class="quotelev1">&gt; propagated to the production database.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Long Version:
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; The new databases uses partition tables to archive test results. As
</span><br>
<span class="quotelev1">&gt; part of this there are some complex rules to mask the partition table
</span><br>
<span class="quotelev1">&gt; complexity from the users of the db. There was a bug in the insert
</span><br>
<span class="quotelev1">&gt; rule in which the 'id' of the submitted result (mpi_install,
</span><br>
<span class="quotelev1">&gt; test_build, and test_run) was a different value than expected since
</span><br>
<span class="quotelev1">&gt; the 'id' was not translated properly to the partition table setup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The fix was to drop all rules and replace them with the correct
</span><br>
<span class="quotelev1">&gt; versions. The submit errors you saw below were caused by integrity
</span><br>
<span class="quotelev1">&gt; checks in the submit script that keep data from being submitted that
</span><br>
<span class="quotelev1">&gt; do not have a proper lineage (e.g., you cannot submit a test_run
</span><br>
<span class="quotelev1">&gt; without having submitted a test_build and an mpi_install result). The
</span><br>
<span class="quotelev1">&gt; bug caused the client and the server to become confused on what the
</span><br>
<span class="quotelev1">&gt; proper 'id' should be and when the submit script attempted to 'guess'
</span><br>
<span class="quotelev1">&gt; the correct run it was unsuccessful and errored out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So sorry this bug lived this long, but it should be fixed now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 28, 2007, at 10:16 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh found the problem and is in the process of fixing it.  DB
</span><br>
<span class="quotelev2">&gt;&gt; submits are currently disabled while Josh is working on the fix.
</span><br>
<span class="quotelev2">&gt;&gt; More specific details coming soon.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, it looks like all data from last night will be
</span><br>
<span class="quotelev2">&gt;&gt; junk.  :-(  You might as well kill any MTT scripts that are still
</span><br>
<span class="quotelev2">&gt;&gt; running from last night.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 28, 2007, at 9:14 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh and I are investigating -- the total runs in the db in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; summary report from this morning is far too low.  :-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 28, 2007, at 9:13 AM, Tim Prins wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It installed and the tests built and made it into the database:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mtt/reporter.php?do_redir=293">http://www.open-mpi.org/mtt/reporter.php?do_redir=293</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Did you get a correct MPI install section for mpich2?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Aug 28, 2007, at 9:05 AM, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am working with the jms branch, and when trying to use mpich2,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I get
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the following submit error:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *** WARNING: MTTDatabase server notice:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpi_install_section_name is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; not in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      mtt database.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      MTTDatabase server notice: number_of_results is not in mtt
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; database.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      MTTDatabase server notice: phase is not in mtt database.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      MTTDatabase server notice: test_type is not in mtt database.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      MTTDatabase server notice: test_build_section_name is not in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mtt
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      database.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      MTTDatabase server notice: variant is not in mtt database.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      MTTDatabase server notice: command is not in mtt database.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      MTTDatabase server notice: fields is not in mtt database.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      MTTDatabase server notice: resource_manager is not in mtt
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; database.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      MTT submission for test run
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      MTTDatabase server notice: Invalid test_build_id (47368)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; given.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Guessing that it should be -1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      MTTDatabase server error: ERROR: Unable to find a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; test_build to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      associate with this test_run.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      MTTDatabase abort: (Tried to send HTTP error) 400
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      MTTDatabase abort:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      No test_build associated with this test_run
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *** WARNING: MTTDatabase did not get a serial; phases will be
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; isolated from
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      each other in the reports
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Reported to MTTDatabase: 1 successful submit, 0 failed submits
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (total of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    12 results)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This happens for each test run section.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0071.php">Jeff Squyres: "Re: [MTT devel] [MTT users] Database submit error"</a>
<li><strong>Previous message:</strong> <a href="0069.php">Jeff Squyres: "[MTT devel] Testbake results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0071.php">Jeff Squyres: "Re: [MTT devel] [MTT users] Database submit error"</a>
<li><strong>Reply:</strong> <a href="0071.php">Jeff Squyres: "Re: [MTT devel] [MTT users] Database submit error"</a>
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
