<?
$subject_val = "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 17:03:15 2014" -->
<!-- isoreceived="20141120220315" -->
<!-- sent="Thu, 20 Nov 2014 23:03:03 +0100" -->
<!-- isosent="20141120220303" -->
<!-- name="Marc H&#246;ppner" -->
<!-- email="marc.hoeppner_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems" -->
<!-- id="546E6517.8060802_at_bils.se" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0869F690-347A-4917-B488-3C9BC30BD770_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems<br>
<strong>From:</strong> Marc H&#246;ppner (<em>marc.hoeppner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-20 17:03:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16328.php">Ralph Castain: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>Previous message:</strong> <a href="16326.php">Ralph Castain: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>In reply to:</strong> <a href="16326.php">Ralph Castain: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16328.php">Ralph Castain: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>Reply:</strong> <a href="16328.php">Ralph Castain: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yes, lsrun exists under openlava.
<br>
<p>Using mpirun is fine, but openlava currently requires that to be 
<br>
launched through a bash script (openmpi-mpirun). Would be neater if one 
<br>
could do away with that.
<br>
<p>Agan, thanks for looking into this!
<br>
<p>/Marc
<br>
<p><span class="quotelev1">&gt; Hold on - was discussing this with a (possibly former) OpenLava 
</span><br>
<span class="quotelev1">&gt; developer who made some suggestions that would make this work. It all 
</span><br>
<span class="quotelev1">&gt; hinges on one thing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you please check and see if you have &quot;lsrun&quot; on your system? If 
</span><br>
<span class="quotelev1">&gt; you do, then I can offer a tight integration in that we would use 
</span><br>
<span class="quotelev1">&gt; OpenLava to actually launch the OMPI daemons. Still not sure I could 
</span><br>
<span class="quotelev1">&gt; support you directly launching MPI apps without using mpirun, if 
</span><br>
<span class="quotelev1">&gt; that's what you are after.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 18, 2014, at 7:58 AM, Marc H&#246;ppner &lt;marc.hoeppner_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:marc.hoeppner_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I really appreciate you guys looking into this! At least now I know 
</span><br>
<span class="quotelev2">&gt;&gt; that there isn't a better way to run mpi jobs. Probably worth looking 
</span><br>
<span class="quotelev2">&gt;&gt; into LSF again..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Marc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I took a brief gander at the OpenLava source code, and a couple of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; things jump out. First, OpenLava is a batch scheduler and only 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supports batch execution - there is no interactive command for &quot;run 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this job&quot;. So you would have to &quot;bsub&quot; mpirun regardless.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Once you submit the job, mpirun can certainly read the local 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocation via the environment. However, we cannot use the OpenLava 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; internal functions to launch the daemons or processes as the code is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GPL2, and thus has a viral incompatible license. Ordinarily, we get 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; around that by just executing the interactive job execution command, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but OpenLava doesn't have one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So we'd have no other choice but to use ssh to launch the daemons on 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the remote nodes. This is exactly what the provided openmpi wrapper 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; script that comes with OpenLava already does.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bottom line: I don't see a way to do any deeper integration minus 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the interactive execution command. If OpenLava had a way of getting 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an allocation and then interactively running jobs, we could support 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what you requested. This doesn't seem to be what they are intending, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unless I'm missing something (the documentation is rather incomplete).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Nov 18, 2014 at 6:20 AM, Marc H&#246;ppner&lt;marc.hoeppner_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:marc.hoeppner_at_[hidden]&gt;&gt;wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     sure, no problem. And about the C Api, I really don't know more
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     than what I was told in the google group post I referred to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i.e. the API is essentially identical to LSF 4-6, which should
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     be on the web).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     The output of env can be found here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="https://dl.dropboxusercontent.com/u/1918141/env.txt">https://dl.dropboxusercontent.com/u/1918141/env.txt</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /M
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Marc P. Hoeppner, PhD
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Team Leader
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     BILS Genome Annotation Platform
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Department for Medical Biochemistry and Microbiology
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Uppsala University, Sweden
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     marc.hoeppner_at_[hidden] &lt;mailto:marc.hoeppner_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     On 18 Nov 2014, at 15:14, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     If you could just run a single copy of &quot;env&quot; and send the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     output along, that would help a lot. I'm not interested in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     usual path etc, but would like to see the envars that OpenLava
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     is setting.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     On Tue, Nov 18, 2014 at 2:19 AM, Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Gouaillardet&lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt;wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Marc,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         the reply you pointed is a bit confusing to me :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &quot;There is a native C API which can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         submit/start/stop/kill/re queue jobs&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         this is not what i am looking for :-(
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &quot;you need to make an appropriate call to openlava to start
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         a remote process&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         this is what i am interested in :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         could you be more specific (e.g. point me to the functions,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         since the OpenLava doc is pretty minimal ...)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         the goal here is to spawn the orted daemons as part of the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         parallel job,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         so these daemons are accounted within the parallel job.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         /* if we use an API that simply spawns orted, but the orted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         is not related whatsoever to the parallel job,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         then we can simply use ssh */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         On 2014/11/18 18:24, Marc H&#246;ppner wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Hi Gilles,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         thanks for the prompt reply. Yes, as far as I know there is a C API to interact with jobs etc. Some mentioning here:<a href="https://groups.google.com/forum/#!topic/openlava-users/w74cRUe9Y9E">https://groups.google.com/forum/#!topic/openlava-users/w74cRUe9Y9E</a>  &lt;<a href="https://groups.google.com/forum/#%21topic/openlava-users/w74cRUe9Y9E">https://groups.google.com/forum/#%21topic/openlava-users/w74cRUe9Y9E</a>&gt;  &lt;<a href="https://groups.google.com/forum/#!topic/openlava-users/w74cRUe9Y9E">https://groups.google.com/forum/#!topic/openlava-users/w74cRUe9Y9E</a>&gt;  &lt;<a href="https://groups.google.com/forum/#%21topic/openlava-users/w74cRUe9Y9E">https://groups.google.com/forum/#%21topic/openlava-users/w74cRUe9Y9E</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         /Marc Marc P. Hoeppner, PhD Team Leader BILS Genome
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Annotation Platform Department for Medical Biochemistry
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         and Microbiology Uppsala University, Sweden
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         marc.hoeppner_at_[hidden] &lt;mailto:marc.hoeppner_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         On 18 Nov 2014, at 08:40, Gilles Gouaillardet&lt;gilles.gouaillardet_at_[hidden]&gt;  &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         Hi Marc,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         OpenLava is based on a pretty old version of LSF (4.x if i remember
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         correctly)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         and i do not think LSF had support for parallel jobs tight integration
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         at that time.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         my understanding is that basically, there is two kind of direct
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         integration :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         - mpirun launch: mpirun spawns orted via the API provided by the batch
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         manager
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         - direct launch: the mpi tasks are launched directly from the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         script/command line and no mpirun/orted is involved
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;           at that time, it works with SLURM and possibly other PMI capable batch
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         manager
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         i think OpenLava simply gets a list of hosts from the environment, build
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         a machinefile, pass it to mpirun that spawns orted with ssh, so this is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         really loose integration.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         OpenMPI is based on plugins, so as long as the queing system provides an
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         API to start/stop/kill tasks, mpirun launch should not
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         be a huge effort.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         Are you aware of such an API provided by OpenLava ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         Gilles
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         On 2014/11/18 16:31, Marc H&#246;ppner wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Hi list,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         I have recently started to wonder how hard it would be to add support for queuing systems to the tight integration function of OpenMPI (unfortunately, I am not a developer myself). Specifically, we are working with OpenLava (www.openlava.org  &lt;<a href="http://www.openlava.org/">http://www.openlava.org/</a>&gt;), which is based on an early version of Lava/LSF and open source. It's proven quite useful in environments where some level of LSF compatibility is needed, but without actually paying for a (rather pricey) LSF license.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Given that openLava shares quite a bit of DNA with LSF, I was wondering how hard it would be to add OL tight integration support to OpenMPI. Currently, OL enables OpenMPI jobs through a wrapper script, but that's obviously not ideal and doesn't work for some programs that have MPI support built-in (and thus expect to be able to just execute mpirun).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Any thoughts on this would be greatly appreciated!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Marc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Marc P. Hoeppner, PhD
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Team Leader
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         BILS Genome Annotation Platform
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Department for Medical Biochemistry and Microbiology
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Uppsala University, Sweden
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         marc.hoeppner_at_[hidden]  &lt;mailto:marc.hoeppner_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         devel_at_[hidden]  &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16312.php">http://www.open-mpi.org/community/lists/devel/2014/11/16312.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         devel_at_[hidden]  &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16313.php">http://www.open-mpi.org/community/lists/devel/2014/11/16313.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         _______________________________________________ devel
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         mailing list devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         &lt;mailto:devel_at_[hidden]&gt; Subscription:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16314.php">http://www.open-mpi.org/community/lists/devel/2014/11/16314.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Link to this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         post:<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16315.php">http://www.open-mpi.org/community/lists/devel/2014/11/16315.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Link to this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     post:<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16316.php">http://www.open-mpi.org/community/lists/devel/2014/11/16316.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Link to this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     post:<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16317.php">http://www.open-mpi.org/community/lists/devel/2014/11/16317.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16318.php">http://www.open-mpi.org/community/lists/devel/2014/11/16318.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this 
</span><br>
<span class="quotelev2">&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16319.php">http://www.open-mpi.org/community/lists/devel/2014/11/16319.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16326.php">http://www.open-mpi.org/community/lists/devel/2014/11/16326.php</a>
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16327/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16328.php">Ralph Castain: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>Previous message:</strong> <a href="16326.php">Ralph Castain: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>In reply to:</strong> <a href="16326.php">Ralph Castain: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16328.php">Ralph Castain: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>Reply:</strong> <a href="16328.php">Ralph Castain: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
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
