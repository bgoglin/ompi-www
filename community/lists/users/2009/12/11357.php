<?
$subject_val = "Re: [OMPI users] mpirun is using one PBS node only";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 22:34:14 2009" -->
<!-- isoreceived="20091202033414" -->
<!-- sent="Tue, 01 Dec 2009 22:34:04 -0500" -->
<!-- isosent="20091202033404" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun is using one PBS node only" -->
<!-- id="4B15E02C.5060705_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="COL113-W535F5889E39831D79A0372F4950_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun is using one PBS node only<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 22:34:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11358.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Previous message:</strong> <a href="11356.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11353.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11338.php">Jeff Squyres: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Belaid
<br>
<p>Belaid MOA wrote:
<br>
<span class="quotelev1">&gt; You made my day Gus! Thank you very much. 
</span><br>
<p>I'm glad it helped.
<br>
I hope it is working for you now.
<br>
<p><span class="quotelev1">&gt; If I asked before, I would 
</span><br>
<span class="quotelev1">&gt; have finished within two hours
</span><br>
<span class="quotelev1">&gt; (but I guess that's part of the learning process). 
</span><br>
<p>Oh, well, that's nothing to worry about.
<br>
On these mailing list exchanges what often
<br>
takes longer is for one side to understand what the
<br>
other side is talking about.
<br>
Once the language is agreed upon, progress is fast.
<br>
With multiple sides (Ralph, Jeff, they're the real pros)
<br>
the conversation gets even more exciting and faster!
<br>
<p><span class="quotelev1"> &gt; Very straight
</span><br>
<span class="quotelev1">&gt; forward! Although I tried doing exactly
</span><br>
<span class="quotelev1">&gt; what you said, the Googled-information is not clear and sometimes 
</span><br>
<span class="quotelev1">&gt; misleading about what to install and where. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Yes, putting OpenMPI, executables, etc,
<br>
on head node NFS mounted directories
<br>
is the simplest way to achieve homogeneity and data visibility
<br>
across your working nodes.
<br>
<p><span class="quotelev1">&gt; Thanks a lot Gus.
</span><br>
<span class="quotelev1">&gt; ~Belaid.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Don't forget to fix your web site links to Paul Krugman!  :)
<br>
Here are two that work:
<br>
<p><a href="http://krugman.blogs.nytimes.com/">http://krugman.blogs.nytimes.com/</a>
<br>
<a href="http://www.princeton.edu/~pkrugman/">http://www.princeton.edu/~pkrugman/</a>
<br>
<p>Best of luck,
<br>
Gus
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;  &gt; Date: Tue, 1 Dec 2009 19:15:53 -0500
</span><br>
<span class="quotelev2">&gt;  &gt; From: gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; Subject: Re: [OMPI users] mpirun is using one PBS node only
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Hi Belaid Moa
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Belaid MOA wrote:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; In that case, the way I installed it is not right. I thought that only
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; the HN should be configured with the tm support
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; not the worker nodes; the worker nodes only have the PBS daemon 
</span><br>
<span class="quotelev1">&gt; clients
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; - No need for tm support on the worker nodes.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; When I ran ompi_info | grep tm on the worker nodes, the output is 
</span><br>
<span class="quotelev1">&gt; empty.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Yes, it is clear that OpenMPI on your worker nodes
</span><br>
<span class="quotelev2">&gt;  &gt; doesn't have &quot;tm&quot; support.
</span><br>
<span class="quotelev2">&gt;  &gt; Again, I would guess this is the reason you can't get even hostname
</span><br>
<span class="quotelev2">&gt;  &gt; to run on more than one node.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Just reinstall OpemMPI with TM support on the head node
</span><br>
<span class="quotelev2">&gt;  &gt; *on a NFS mounted directory*, and life will be much easier!
</span><br>
<span class="quotelev2">&gt;  &gt; All nodes, head and worker, will see the same OpenMPI version.
</span><br>
<span class="quotelev2">&gt;  &gt; It works very well for me here.
</span><br>
<span class="quotelev2">&gt;  &gt; The only additional
</span><br>
<span class="quotelev2">&gt;  &gt; thing you may need to do is to add the OpenMPI bin directory
</span><br>
<span class="quotelev2">&gt;  &gt; to your PATH and the OpenMPI lib directory to LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;  &gt; on your .bashrc/.cshrc file (or on appropriate .csh and .sh files in
</span><br>
<span class="quotelev2">&gt;  &gt; the /etc/profile.d directory).
</span><br>
<span class="quotelev2">&gt;  &gt; Upgrades will be also much simpler.
</span><br>
<span class="quotelev2">&gt;  &gt; The only disadvantage of this scheme may be on large clusters,
</span><br>
<span class="quotelev2">&gt;  &gt; where scaling may bump on NFS limitations, but with only three
</span><br>
<span class="quotelev2">&gt;  &gt; nodes that is certainly not your case.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; The information on the following link has mislead me then:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; <a href="http://www.physics.iitm.ac.in/~sanoop/linux_files/cluster.html">http://www.physics.iitm.ac.in/~sanoop/linux_files/cluster.html</a>
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; (check OpenMPI Configuration section.)
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; I suggest that you refer to the OpenMPI site instead.
</span><br>
<span class="quotelev2">&gt;  &gt; That is the authoritative source of information about OpenMPI.
</span><br>
<span class="quotelev2">&gt;  &gt; Their FAQs have a lot of information:
</span><br>
<span class="quotelev2">&gt;  &gt; <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
</span><br>
<span class="quotelev2">&gt;  &gt; Likewise, the README file that comes with the OpenMPI tarball
</span><br>
<span class="quotelev2">&gt;  &gt; is very clarifying.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;  &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;  &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;  &gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;  &gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;  &gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;  &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; ~Belaid.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Date: Tue, 1 Dec 2009 18:36:15 -0500
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; From: gus_at_[hidden]
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Subject: Re: [OMPI users] mpirun is using one PBS node only
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Hi Belaid Moa
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; The OpenMPI I install and use is on a NFS mounted directory.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Hence, all the nodes see the same version, which has &quot;tm&quot; support.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; After reading your OpenMPI configuration parameters on the headnode
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; and working nodes (and the difference between them),
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; I would guess (just a guess) that the problem you see is because your
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; OpenMPI version on the nodes (probably) do not have Torque support.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; However, you should first verify that this is really the case,
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; because if the OpenMPI configure script
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; finds the torque libraries it will (probably) configure and
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; install OpenMPI with &quot;tm&quot; support, even if you don't ask it
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; explicitly on the working nodes.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Hence, ssh to WN1 or WN2 and do &quot;ompi_info&quot; to check this out first.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; If there is no Torque on WN1 and WN2 then OpenMPI won't find it
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; and you won't have &quot;tm&quot; support on the nodes.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; In any case, if OpenMPI &quot;tm&quot; support is missing on WN[1,2},
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; I would suggest that you reinstall OpenMPI on WN1 and WN2 *with tm
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; support*.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; This will require that you have Torque on the working nodes also,
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; and use the same configure command line that you used on the 
</span><br>
<span class="quotelev1">&gt; headnode.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; A low-tech alternative is to copy over your OpenMPI directory tree to
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; the WN1 and WN2 nodes.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; A yet simpler alternative is to reinstall OpenMPI on the headnode
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; on a NFS mounted directory (as I do here), then
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; add the corresponding &quot;bin&quot; path to your PATH,
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; and the corresponding &quot;lib&quot; path to your LD_LIBRARY_PATH environment
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; variables.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Think about maintenance, and upgrades:
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; On an NFS mounted directory
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; you need to install only once, whereas the way you have it now 
</span><br>
<span class="quotelev1">&gt; you need
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; to do it N+1 times (or have a mechanism to propagate a single
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; installation from the head node to the compute nodes).
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; NFS is your friend! :)
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; I hope this helps,
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Gustavo Correa
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Belaid MOA wrote:
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; I tried -bynode option but it did not change anything. I also 
</span><br>
<span class="quotelev1">&gt; tried
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; the
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &quot;hostname&quot; name command and
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; I keep getting only the name of one node repeated according to 
</span><br>
<span class="quotelev1">&gt; the -n
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; value.
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; Just to make sure I did the right installation, here is what I did:
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; -- On the head node (HN), I installed openMPI using the --with-tm
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; option
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; as follows:
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; ./configure --with-tm=/var/spool/torque --enable-static
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; make install all
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; -- On the worker nodes (WN1 and WN2), I installed openMPI 
</span><br>
<span class="quotelev1">&gt; without tm
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; option as follows (it is a local installation on each worker node):
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; ./configure --enable-static
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; make install all
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; Is this correct?
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; Thanks a lot in advance.
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; ~Belaid.
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Date: Tue, 1 Dec 2009 17:07:58 -0500
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; From: gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Subject: Re: [OMPI users] mpirun is using one PBS node only
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Hi Belaid Moa
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Belaid MOA wrote:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; Thanks a lot Gus for you help again. I only have one CPU 
</span><br>
<span class="quotelev1">&gt; per node.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; The -n X option (no matter what the value of X is) shows X
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; processes
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; running on one node only (the other one is free).
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; So, somehow it is oversubscribing your single processor
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; on the first node.
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; A simple diagnostic:
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Have you tried to run &quot;hostname&quot; on the two nodes through 
</span><br>
<span class="quotelev1">&gt; Torque/PBS
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; and mpiexec?
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; [PBS directives, cd $PBS_O_WORKDIR, etc]
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; ...
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; /full/path/to/openmpi/bin/mpiexec -n 2 hostname
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Try also with the -byslot and -bynode options.
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; If I add the machinefile option with WN1 and WN2 in it, the 
</span><br>
<span class="quotelev1">&gt; right
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; behavior is manifested. According to the documentation,
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; mpirun should get the PBS_NODEFILE automatically from the PBS.
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Yes, if you compiled OpenMPI you are using with Torque (&quot;tm) 
</span><br>
<span class="quotelev1">&gt; support.
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Did you?
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Make sure the it has tm support.
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Run &quot;ompi_info&quot; with full path if needed, to check that.
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Are you sure the correct path to what you want is
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; /usr/local/bin/mpirun ?
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Linux distributions, compilers, and other tools come with their
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; mpiexec and put them in places that you may not suspect, to 
</span><br>
<span class="quotelev1">&gt; better
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; double check you get what you want.
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; That has been a source of repeated confusion on this and other
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; mailing lists.
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Also, make sure that passwordless ssh across the nodes is 
</span><br>
<span class="quotelev1">&gt; working.
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Yet another thing to check, for easy name resolution,
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; your /etc/hosts file on *all*
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; nodes including the headnode should
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; have a list of all nodes and their IP addresses.
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Something like this:
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; 127.0.0.1 localhost.localdomain localhost
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; 192.168.0.1 WN1
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; 192.168.0.2 WN2
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; (The IPs above are guesswork of mine, you know better which 
</span><br>
<span class="quotelev1">&gt; to use.)
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; So, I do
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; not need to use machinefile.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; True assuming the first condition above (OpenMPI *with* &quot;tm&quot; 
</span><br>
<span class="quotelev1">&gt; suport).
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; Any ideas?
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Yes, and I sent it to you on my last email!
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Try the &quot;-bynode&quot; option of mpiexec.
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; (&quot;man mpiexec&quot; is your friend!)
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; Thanks a lot in advance.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; ~Belaid.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Best of luck!
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; PS - Your web site link to Paul Krugman is out of date.
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; Here are one to his (active) blog,
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; and another to his (no longer updated) web page: :)
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; <a href="http://krugman.blogs.nytimes.com/">http://krugman.blogs.nytimes.com/</a>
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; <a href="http://www.princeton.edu/~pkrugman/">http://www.princeton.edu/~pkrugman/</a>
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; Date: Tue, 1 Dec 2009 15:42:30 -0500
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; From: gus_at_[hidden]
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; Subject: Re: [OMPI users] mpirun is using one PBS node only
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; Hi Belaid Moa
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; Belaid MOA wrote:
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; Here is another elementary question. I tried the following
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; steps found
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; in the FAQ section of www.open-mpi.org with a simple hello
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; world
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; example
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; (with PBS/torque):
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; $ qsub -l nodes=2 my_script.sh
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; my_script.sh is pasted below:
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; ========================
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; #!/bin/sh -l
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; #PBS -N helloTest
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; #PBS -j eo
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; echo `cat $PBS_NODEFILE` # shows two nodes: WN1 WN2
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; /usr/local/bin/mpirun hello
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; ========================
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; When the job is submitted, only one process is ran. When I
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; add the
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; -n 2
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; option to the mpirun command,
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; two processes are ran but on one node only.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; Do you have a single CPU/core per node?
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; Or are they multi-socket/multi-core?
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; Check &quot;man mpiexec&quot; for the options that control on which
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; nodes and
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; slots, etc your program will run.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; (&quot;Man mpiexec&quot; will tell you more than I possibly can.)
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; The default option is &quot;-byslot&quot;,
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; which will use all &quot;slots&quot; (actually cores
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; or CPUs) available on a node before it moves to the next 
</span><br>
<span class="quotelev1">&gt; node.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; Reading your question and your surprise with the result,
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; I would guess what you want is &quot;-bynode&quot; (not the default).
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; Also, if you have more than one CPU/core per node,
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; you need to put this information in your Torque/PBS 
</span><br>
<span class="quotelev1">&gt; &quot;nodes&quot; file
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; (and restart your pbs_server daemon).
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; Something like this (for 2 CPUs/cores per node):
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; WN1 np=2
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; WN2 np=2
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; I hope this helps,
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; Gustavo Correa
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; Note that echo `cat
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; $PBS_NODEFILE` outputs
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; the two nodes I am using: WN1 and WN2.
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; The output from ompi_info is shown below:
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; $ ompi_info | grep tm
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component 
</span><br>
<span class="quotelev1">&gt; v1.3.3)
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; MCA ras: tm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; MCA plm: tm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; Any help on why openMPI/mpirun is using only one PBS node
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; is very
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; appreciated.
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; Thanks a lot in advance and sorry for bothering you guys
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; with my
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; elementary questions!
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; ~Belaid.
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; Windows Live: Keep your friends up to date with what 
</span><br>
<span class="quotelev1">&gt; you do
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; online.
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; &lt;<a href="http://go.microsoft.com/?linkid=9691810">http://go.microsoft.com/?linkid=9691810</a>&gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; Windows Live: Keep your friends up to date with what you do 
</span><br>
<span class="quotelev1">&gt; online.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; &lt;<a href="http://go.microsoft.com/?linkid=9691810">http://go.microsoft.com/?linkid=9691810</a>&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; Get a great deal on Windows 7 and see how it works the way you
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; want. See
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; the Windows 7 offers now. &lt;<a href="http://go.microsoft.com/?linkid=9691813">http://go.microsoft.com/?linkid=9691813</a>&gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Windows Live: Keep your friends up to date with what you do online.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &lt;<a href="http://go.microsoft.com/?linkid=9691810">http://go.microsoft.com/?linkid=9691810</a>&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;  &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Windows Live: Keep your friends up to date with what you do online. 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://go.microsoft.com/?linkid=9691810">http://go.microsoft.com/?linkid=9691810</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11358.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Previous message:</strong> <a href="11356.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11353.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11338.php">Jeff Squyres: "Re: [OMPI users] mpirun is using one PBS node only"</a>
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
