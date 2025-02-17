<?php include "_HTMLPreHead.php"; // Includes the HTML version to use ?>
<title>Download DPSF (Dynamic Particle System Framework)</title>
<meta name="description" content="Download DPSF (Dynamic Particle System Framework) and create custom particle systems quickly and easily in your own XNA projects." />
<meta name="keywords" content="DPSF, Dynamic, Particle, Particle System, Particle Systems, Framework, XNA, C#, Custom, Flexible, API, Library, Tool, Free, Flexible, Engine, Particle Engine, Particle Engines, Effect, Particle Effect, Particle Effects, Code, Download, Get" />
<?php include "_HTMLHead.php"; // Includes the Head information ?>
</head>

<body>
<?php $SelectedTab = "Download"; ?>
<?php include '_CommonSiteElements.php'; ?>

<div id="Content">
<h1>Download DPSF</h1>

<p>The DPSF installer contains the assemlies (i.e. dlls), setup manual / help file (includes tutorials and source code), templates to start from, and 
the DPSF Demo solution showing how to create many different particle systems. If you only want the assemblies, they are available on Nuget.</p>

<!-- <a href="http://games.softpedia.com/progClean/DPSF-Clean-37725.html"><img src="Images/SoftpediaFreeAward.gif" class="NoBorder" style="float:right; margin-top:-1.5em;" alt="Softpedia 100% Spyware/Virus/Malware Free Award" title="Softpedia 100% Spyware/Virus/Malware Free Award" /></a> -->

<span style="float:right;margin-right:5em" title="Get just the DPSF assemblies from NuGet">
	<a href="http://www.nuget.org/packages/DPSF/">
        <div align="center"><img src="Images/NuGetProjectLogo.png" class="NoBorder Centered" alt="DPSF on NuGet" /></div>
        DPSF on NuGet
    </a>
</span>

<span style="float:right; margin-right:5em;" title="Donate and support DPSF">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="Centered">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="5785518">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</span>

<div class="Centered SmallFont" title="Download the DPSF installer">
<!-- <a href="http://dpsf.freeforums.org/download-dpsf-f4.html"> -->
<!-- <a href="http://download.cnet.com/DPSF/3000-2121_4-10910185.html?part=dl-&subj=dl&tag=button">
<img src="http://i.i.com.com/cnwk.1d/i/dl/button/dl-button_a.gif" alt="Get DPSF from CNET Download.com!" height="60" width="150" align="center" border="0" style="display:inline"></a> -->
    <span>
        <a href="DPSF Installer.zip"><img src="Images/Download.png" class="NoBorder" alt="Download DPSF" /></a>
    </span>
</div>


<!-- Version Specific Highlights go here -->
<h3>Highlights to versions 2.5.0 (XNA 4) - August 31, 2013</h3>
<ul>
	<li>Fixed Android bug where IndexOutOfRangeException would be thrown on some Android devices, depending on their hardware capabilities.</li>
	<li>Added SetEnabledStateForAllParticleSystems(), SetVisibleStateForAllParticleSystems(), and SetEnabledAndVisibleStatesForAllParticleSystems() functions to the ParticleSystemManager class.</li>
	<li>Added new DisabledWithEarlyRecycling memory management mode to allow recycling the oldest active particle when we want to add a new particle, but have no more memory available for it.</li>
	<li>Added new DPSFDebugWarningExceptions that are only thrown when debugging and are meant to help users catch when they do not have DPSF setup ideally.</li>
	<li>Created iOS friendly DPSF assemblies, but still not fully tested due to lack of Mac hardware required for testing.</li>
	<li>Fixed performance bug in ParticleEmitterCollection, as it was generating garbage for the Garbage Collector every time the Emitters and IDs properties were accessed (impacted Xbox greatly).</li>
</ul>

<p>See the <a href="ChangeLog.php">full change log and download older versions of DPSF here</a>, including XNA 3.1 compatible versions.</p>


<h2>We Would Appreciate...</h2>
<ul>
    <li>Announce the release of any application that uses DPSF on the <a href="http://forums.xnaparticles.com">DPSF Forums</a> so that others can see how DPSF is being used.  Your product may even be featured on <a href="http://www.xnaparticles.com">XNAParticles.com</a>. This is a form of free advertising for your application, encouraging more people to check it out.</li>
    
    <li>A mention of DPSF on your product's website along with a link back to <a href="http://www.xnaparticles.com">XNAParticles.com</a>.</li>
    
    <li>If you post a video of your product, please mention DPSF in the description, and include "DPSF" in the video keywords so that your video will be found when people search for DPSF.</li>
    
    <li>Donate any amount that you think is appropriate to DPSF. This will help keep DPSF free and encourage development to continue on it. Any amount helps, no matter how small.</li>
</ul>

</div>

<?php include '_Footer.php'; ?>
</body>
</html>
