<?php
$link = "http://75.167.232.199";
if (substr($_SERVER["REMOTE_ADDR"], 0, 8) === "192.168.") $link = "http://NAS";
?><html>
    <head>
        <title>Welcome to my useful links!</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		<link href="/.stylesheet.css" rel="stylesheet" type="text/css">
    </head>
    <body>
	<meta name=”viewport” content=”width=device-width, initial-scale=1″>  					 		<!-- Makes the page fit the device with, makes the website at least slightly more mobile friendly -->
	<a class="nav" href="<?php echo $link; ?>/Main-Page.php">Main Page</a></br></br>  							 <!-- Hyperlink back to the Main Page of the Web server -->
	<img style="padding-left: 5px;" src=".logos/.Google.png" alt="Google Logo" height="32px;"> 				    	  <!-- Embeds .Google.png, the Google logo -->
        <a href="https://www.google.com">Google</a></br></br>  																<!-- Hyperlink to Google -->
	<img style="padding-left: 5px;" src=".logos/.YouTube.png" alt="YouTube Logo" height="32px;">  					 <!-- Embeds .YouTube.png, the YouTube logo -->
    <a href="https://www.youtube.com">YouTube</a></br></br>  																<!-- Hyperlink to Youtube -->
	<img style="padding-left: 5px;" src=".logos/.Google-Drive.png" alt="Google Drive Logo" height="32px;">    	<!-- Embeds .Google-Drive.png, the Google Drive logo -->
        <a href="https://drive.google.com">Google Drive</a></br></br>  								  						<!-- Hyperlink to Google Drive -->
	<img style="padding-left: 5px;" src=".logos/.Wikipedia.ico" alt="Wikipedia Logo" height="32px;">  		 	 	<!-- Embeds .Wikipedia.ico, the Wikipedia logo -->
	<a href="https://wikipedia.com">Wikipedia</a></br></br>  																<!-- Hyperlink to Wikipedia -->
	<img style="padding-left: 5px;" src=".logos/.Yuzu-Emu.ico" alt="Yuzu Emulator Logo" height="32px;">	 			<!-- Embeds .Yuzu-Emu.ico, the Yuzu Emulator logo -->
	<a href="https://www.yuzu-emu.org/wiki/switch-mods/">Yuzu Mods</a></br></br>  									<!-- Hyperlink to the Yuzu Emulator Mods page -->
	<img style="padding-left: 5px;" src=".logos/.ROM-Patcher.png" alt="Online ROM Patcher Logo" height="32px;"> <!-- Embeds .Rom-Patcher.png, the Online ROM Patcher logo -->
	<a href="https://www.marcrobledo.com/RomPatcher.js/">Online ROM Patcher</a></br></br>  							<!-- Hyperlink to the Online ROM Patcher -->
	<img style="padding-left: 5px;" src=".logos/.SM64JS.png" alt="SM64JS Logo" height="32px;">						<!-- Embeds .SM64JS.png, the SM64JS logo -->
	<a href="https://sm64js.com">SM64JS</a>  																		<!-- Hyperlink to the SM64JS website -->
    </body>
</html>



