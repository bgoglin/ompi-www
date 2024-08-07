<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 11:45:01 2008" -->
<!-- isoreceived="20080917154501" -->
<!-- sent="Wed, 17 Sep 2008 17:44:02 +0200" -->
<!-- isosent="20080917154402" -->
<!-- name="Sofia Aparicio Secanellas" -->
<!-- email="saparicio_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="FD75C75B58F24D58BCC8E5AF1B4F5DC5_at_aparicio1" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="48D0E8E1.9010906_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_Send and MPI_Recv<br>
<strong>From:</strong> Sofia Aparicio Secanellas (<em>saparicio_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 11:44:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6580.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6578.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<li><strong>In reply to:</strong> <a href="6566.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6580.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Terry,
<br>
<p>I was trying to do the debug. I was setting all the debugging parameters for 
<br>
the MPI layer. Only with 1 parameter I obtain something different. I enclose 
<br>
the result of the following command:
<br>
<p>mpirun --mca mpi_show_mca_params 1 -np 2 --host 
<br>
10.4.5.123,edu_at_10.4.5.126 --prefix /usr/local ./PruebaSumaParalela.out
<br>
<p><p>Thanks again.
<br>
<p>Sofia
<br>
<p>----- Original Message ----- 
<br>
From: &quot;Terry Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt;
<br>
To: &lt;users_at_[hidden]&gt;
<br>
Sent: Wednesday, September 17, 2008 1:24 PM
<br>
Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
<br>
<p><p><span class="quotelev1">&gt; Sofia,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I took your program and actually ran it successfully on my systems using 
</span><br>
<span class="quotelev1">&gt; Open MPI r19400.  A couple questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.  Have you tried to run the program on a single node?
</span><br>
<span class="quotelev1">&gt;     mpirun -np 2 --host 10.4.5.123 --prefix /usr/local 
</span><br>
<span class="quotelev1">&gt; ./PruebaSumaParalela.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2.  Can you try and run the code the following way and is the output 
</span><br>
<span class="quotelev1">&gt; different?
</span><br>
<span class="quotelev1">&gt;     mpirun -np 2 --host 10.4.5.123,edu_at_10.4.5.126 --mca mpi_preconnect_all 
</span><br>
<span class="quotelev1">&gt; 1 --prefix /usr/local ./PruebaSumaParalela.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3.  When the program hangs can you attach a debugger to one of the 
</span><br>
<span class="quotelev1">&gt; processes and print out a stack?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4.  What version of Open MPI are you using, on what type of machine, using 
</span><br>
<span class="quotelev1">&gt; which OS?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 16 Sep 2008 18:15:59 +0200
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;Sofia Aparicio Secanellas&quot; &lt;saparicio_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Problem with MPI_Send and MPI_Recv
</span><br>
<span class="quotelev2">&gt;&gt; To: &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;D99B2E131E0640C9A2A4D8A0FD2472A5_at_aparicio1&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am new using MPI. I want to run a simple program (I enclose the 
</span><br>
<span class="quotelev2">&gt;&gt; program) in 2 different computers. I have installed MPI in both 
</span><br>
<span class="quotelev2">&gt;&gt; computers. I have compiled the program using:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiCC -o PruebaSumaParalela.out PruebaSumaParalela.cpp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have copied the executable PruebaSumaParalela.out  to my /home directoy 
</span><br>
<span class="quotelev2">&gt;&gt; in both computers. Then I run:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 --host 10.4.5.123,edu_at_10.4.5.126 --prefix /usr/local 
</span><br>
<span class="quotelev2">&gt;&gt; ./PruebaSumaParalela.out
</span><br>
<span class="quotelev2">&gt;&gt; The 10.4.5.123 computer prints:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Inicio
</span><br>
<span class="quotelev2">&gt;&gt; Inicio
</span><br>
<span class="quotelev2">&gt;&gt; totalnodes:2
</span><br>
<span class="quotelev2">&gt;&gt; mynode:0
</span><br>
<span class="quotelev2">&gt;&gt; Inicio Recv
</span><br>
<span class="quotelev2">&gt;&gt; totalnodes:2
</span><br>
<span class="quotelev2">&gt;&gt; mynode:1
</span><br>
<span class="quotelev2">&gt;&gt; Inicio Send
</span><br>
<span class="quotelev2">&gt;&gt; sum:375250
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The edu_at_10.4.5.126 computer prints:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Inicio
</span><br>
<span class="quotelev2">&gt;&gt; Inicio
</span><br>
<span class="quotelev2">&gt;&gt; totalnodes:2
</span><br>
<span class="quotelev2">&gt;&gt; mynode:1
</span><br>
<span class="quotelev2">&gt;&gt; Inicio Send
</span><br>
<span class="quotelev2">&gt;&gt; sum:375250
</span><br>
<span class="quotelev2">&gt;&gt; totalnodes:2
</span><br>
<span class="quotelev2">&gt;&gt; mynode:0
</span><br>
<span class="quotelev2">&gt;&gt; Inicio Recv
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But the program does not finish on any computer. It seems that the Send 
</span><br>
<span class="quotelev2">&gt;&gt; and Recv does not work. Master computer is waiting to receive something 
</span><br>
<span class="quotelev2">&gt;&gt; that the slave does not send.
</span><br>
<span class="quotelev2">&gt;&gt; Do you know what the problem could be ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sofia
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No virus found in this outgoing message
</span><br>
<span class="quotelev2">&gt;&gt; Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a>
</span><br>
<span class="quotelev2">&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev2">&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt;&gt; An embedded and charset-unspecified text was scrubbed...
</span><br>
<span class="quotelev2">&gt;&gt; Name: PruebaSumaParalela.cpp
</span><br>
<span class="quotelev2">&gt;&gt; URL: 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/20080916/d19b7a37/attachment.ksh">http://www.open-mpi.org/MailArchives/users/attachments/20080916/d19b7a37/attachment.ksh</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No virus found in this incoming message
</span><br>
<span class="quotelev1">&gt; Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
</span><br>
<span class="quotelev1">&gt; <a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a> 
</span><br>
<p>No virus found in this outgoing message
<br>
Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
<br>
<a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a>
<br>
<p><p>
<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6579/debugPrueba.abw">debugPrueba.abw</a>
</ul>
<!-- attachment="debugPrueba.abw" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6580.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6578.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<li><strong>In reply to:</strong> <a href="6566.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6580.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
