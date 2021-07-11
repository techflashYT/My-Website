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
	<meta name=”viewport” content=”width=device-width, initial-scale=1″>
	<a class="nav" href="<?php echo $link; ?>/Main-Page.php">Main Page</a>  <! Hyperlink back to the Main Page of the Web server >
	<br>
	<br>
	<img style="height: 32px;" src=".logos/.Google.png" alt="Google Logo">
        <a href="https://www.google.com">Google</a>  <! Hyperlink to Google >
        <br>
        <br>
	<img style="height: 32px;" src=".logos/.YouTube.png" alt="YouTube Logo">
        <a href="https://www.youtube.com">YouTube</a>  <! Hyperlink to Youtube >
        <br>
        <br>
	<img style="height: 32px;" src=".logos/.Google-Drive.png" alt="Google Drive Logo">
        <a href="https://drive.google.com">Google Drive</a>  <! Hyperlink to Google Drive >
	<br>
	<br>
	<img style="height: 32px;" src=".logos/.Wikipedia.ico" alt="Wikipedia Logo">
	<a href="https://wikipedia.com">Wikipedia</a>  <! Hyperlink to Wikipedia >
	<br>
	<br>
	<img style="height: 32px;" src=".logos/.Yuzu-Emu.ico" alt="Yuzu Emulator Logo">
	<a href="https://www.yuzu-emu.org/wiki/switch-mods/">Yuzu Mods</a>
	<br>
	<br>
	<img style="height: 32px;" src=".logos/.ROM-Patcher.png" alt="ROM Patcher Logo">
	<a href="https://www.marcrobledo.com/RomPatcher.js/">Online ROM Patcher</a>
	<br>
	<br>
	<img style="height: 32px;" src=".logos/.SM64JS.png" alt="SM64JS Logo">
	<a href="https://sm64js.com">SM64JS</a>
    </body>
</html>



