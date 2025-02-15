<?
$subject_val = "Re: [OMPI users] Runtime error while running mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 10:12:06 2009" -->
<!-- isoreceived="20091102151206" -->
<!-- sent="Mon, 02 Nov 2009 16:11:57 +0100" -->
<!-- isosent="20091102151157" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Runtime error while running mpirun" -->
<!-- id="4AEEF6BD.8010901_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="23DA2F26196D9B4DB6F773D07E76756E13C68B_at_BLR-EC-MBX05.wipro.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Runtime error while running mpirun<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-02 10:11:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11052.php">Jeff Squyres: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Previous message:</strong> <a href="11050.php">Shiqing Fan: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/11023.php">basant.lakhotiya_at_[hidden]: "[OMPI users] Runtime error while running mpirun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Basant,
<br>
<p>Yes, rename the output file name should solve the problem. I'll try to 
<br>
fix it ASAP.
<br>
<p>Could you send me again the log files, but maybe off list, I can't open 
<br>
it, it got corrupted somehow. And please also send me the output of 
<br>
ompi_info, and 
<br>
ompi-src/contrib/platform/win32/CMakeModules/check_mca_subdirs.cmake .  
<br>
These would be very helpful for me to look into the problem. Thanks a lot.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>basant.lakhotiya_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Hi Shiqing,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks for quick response. I checked my output directory there are many mca dlls with &quot;lib&quot; prefix.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  And the output file name is &quot;libmca_paffinity_windowsd.dll&quot; in linker-&gt;general. Should I change it to mca_paffinity_windowsd.dll.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Also I am attaching CMakeOutput.log and CMakeError.log.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Basant
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Mon 11/2/2009 7:55 PM
</span><br>
<span class="quotelev1">&gt; To: Basant Lakhotiya (WT01 - Computing and Storage IPG)
</span><br>
<span class="quotelev1">&gt; Cc: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Runtime error while running mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Basant,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you please also check in your Open MPI solutions, that do you have
</span><br>
<span class="quotelev1">&gt; the mca_paffinity_windows project? and in the property of this project,
</span><br>
<span class="quotelev1">&gt; go to linker-&gt;General, in &quot;Output File&quot; field, you will see the file
</span><br>
<span class="quotelev1">&gt; name of this DLL, is the name &quot;libmca_paffinity_windows.dll&quot; or
</span><br>
<span class="quotelev1">&gt; &quot;mca_paffinity_windows.dll&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just want to make sure the generated solution is correct. If it's
</span><br>
<span class="quotelev1">&gt; correct, you can just rebuilt this single project, and then check if the
</span><br>
<span class="quotelev1">&gt; correct dll is generated. If the project property is not correct, then I
</span><br>
<span class="quotelev1">&gt; think I need to take a look your CMake cache file which you will find in
</span><br>
<span class="quotelev1">&gt; the root directory of the solution. Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; basant.lakhotiya_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi Shiqing,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for misunderstanding. I checked its not creating mca_paffinity_windows.dll and mca_paffinity_windowsd.dll instead that files are libmca_paffinity_windows.dll and libmca_paffinity_windowsd.dll. Only .lib files are there for mca_paffinity_windows and mca_paffinity_windowsd.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The corresponding new errors are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [8puq2akbo:04880] mca: base: component_find: unable to open C:/Sou
</span><br>
<span class="quotelev2">&gt;&gt; rce/installed/lib/openmpi/debug/mca_paffinity_windows: can't open the module (ig
</span><br>
<span class="quotelev2">&gt;&gt; nored)
</span><br>
<span class="quotelev2">&gt;&gt; [8puq2akbo:04880] mca: base: component_find: unable to open C:/Sou
</span><br>
<span class="quotelev2">&gt;&gt; rce/installed/lib/openmpi/debug/mca_paffinity_windowsd: can't open the module (i
</span><br>
<span class="quotelev2">&gt;&gt; gnored)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;   opal_paffinity_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [8puq2akbo:04880] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file ..
</span><br>
<span class="quotelev2">&gt;&gt; \..\Source\orte\runtime\orte_init.c at line 79
</span><br>
<span class="quotelev2">&gt;&gt; [8puq2akbo:04880] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file ..
</span><br>
<span class="quotelev2">&gt;&gt; \..\..\..\Source\orte\tools\orterun\orterun.c at line 570
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Basant
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Mon 11/2/2009 6:13 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Basant Lakhotiya (WT01 - Computing and Storage IPG)
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Runtime error while running mpirun
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Basant,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The mca_paffinity_windowsd.dll is the debug version of
</span><br>
<span class="quotelev2">&gt;&gt; mca_paffinity_windows.dll, but orterun.exe should know which one it can
</span><br>
<span class="quotelev2">&gt;&gt; use when you build it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Because you were building Open MPI with libtool support, probably the
</span><br>
<span class="quotelev2">&gt;&gt; problem could be that libtool is not loaded correctly. Could you check
</span><br>
<span class="quotelev2">&gt;&gt; that libtool bin directory is in the PATH environment variable? If Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI can't find correct libtool library to call, it can't load any mca
</span><br>
<span class="quotelev2">&gt;&gt; libraries for sure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope this will be helpful for you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; basant.lakhotiya_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Terry,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I complied OMPI again, Its creating mca_paffinity_windows and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_paffinity_windowsd.dll.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And also I have checked the dependency of both dll through &quot;VS2005
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Depends&quot;. Its not showing any missing dependency for these dlls.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While running orterun.exe its giving the same error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Basant
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *From:* Basant [mailto:basant.lakhotiya_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Sent:* Mon 11/2/2009 12:14 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *To:* 'Open MPI Users'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Subject:* RE: [OMPI users] Runtime error while running mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Terry,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Its not creating mca_paffinity_windows.dll but there is a file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_paffinity_windowsd.dll.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you have any idea why it is not creating mca_paffinity_windows's dll.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Basant
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Behalf Of Terry Dontje
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Friday, October 30, 2009 11:05 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Runtime error while running mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Basant,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not familiar with Windows builds of Open MPI.  However, can you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you Open MPI build actually created a mca_paffinity_window's dll?  I could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; imagine the issue might be that the dll is not finding a needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dependency.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Under Windows is there a command similar to Unix's ldd command you can run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the dll (if it exists)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *Subject:* [OMPI users] Runtime error while running mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *From:* /basant.lakhotiya_at_[hidden]/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mailto:basant.lakhotiya_at_%5Bhidden%5D?Subject=Re:%20%5BOMPI%20users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; %5D%20Runtime%20error%20while%20running%20mpirun&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *Date:* 2009-10-30 10:09:20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I compiled OpenMPI in windows server 2003 through Cygwin and also
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; through CMake and Visual Studio. In both the method I successfully
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; complied in cygwin I configured with following command
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --enable-mca-no-build=timer-windows,memory_mallopt,maffinity,paffinity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; without these flags I was getting error.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I got same error while running mpirun.exe/orterun.exe.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can anyone help me to rectify these errors.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C:\openmpi_sln\debug&gt;orterun.exe -np 2 ipconfig [8puq2akbo:07476] mca:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; base: component_find: &quot;mca_paffinity_windows&quot; does not appear to be a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; valid paffinity MCA dynamic component (ignored):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The specifie
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; d module could not be found.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It looks like opal_init failed for some reason; your parallel process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   opal_paffinity_base_select failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [8puq2akbo:07476] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file ..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; \..\Linpack\Source\orte\runtime\orte_init.c at line 79
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [8puq2akbo:07476] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file ..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; \..\..\..\Linpack\Source\orte\tools\orterun\orterun.c at line 570
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Basant
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Please do not print this email unless it is absolutely necessary. *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The information contained in this electronic message and any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attachments to this message are intended for the exclusive use of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; addressee(s) and may contain proprietary, confidential or privileged
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information. If you are not the intended recipient, you should not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; disseminate, distribute or copy this e-mail. Please notify the sender
</span><br>
<span class="quotelev3">&gt;&gt;&gt; immediately and destroy all copies of this message and any attachments.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: Computer viruses can be transmitted via email. The recipient
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should check this email and any attachments for the presence of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; viruses. The company accepts no liability for any damage caused by any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; virus transmitted by this email.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.wipro.com
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing           Tel.: +49 711 685 87234
</span><br>
<span class="quotelev2">&gt;&gt;   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
</span><br>
<span class="quotelev2">&gt;&gt; Address:Allmandring 30               email: fan_at_[hidden]  
</span><br>
<span class="quotelev2">&gt;&gt; 70569 Stuttgart
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please do not print this email unless it is absolutely necessary.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; www.wipro.com
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev1">&gt; High Performance Computing           Tel.: +49 711 685 87234
</span><br>
<span class="quotelev1">&gt;   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
</span><br>
<span class="quotelev1">&gt; Address:Allmandring 30               email: fan_at_[hidden]   
</span><br>
<span class="quotelev1">&gt; 70569 Stuttgart
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please do not print this email unless it is absolutely necessary. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.wipro.com
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
  Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]    
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11052.php">Jeff Squyres: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Previous message:</strong> <a href="11050.php">Shiqing Fan: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/11023.php">basant.lakhotiya_at_[hidden]: "[OMPI users] Runtime error while running mpirun"</a>
<!-- nextthread="start" -->
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
