<?php
$link = "http://75.167.190.201";
if (substr($_SERVER["REMOTE_ADDR"], 0, 8) === "192.168.") $link = "http://nas/";
?><html>
    <head>
        <link href="/.stylesheet.css" rel="stylesheet" type="text/css">
        <title>Credits</title>
    </head>
    <body>
        <br>
        <a class="nav" href="<?php echo $link; ?>/Main-Page.php">Back to Main Page</a>  <! Hyperlink to Main-Page.php, the main page >
	<br>
	<br>
	<p>Me: Creator, hoster</p>
	<p>"BlueToonYoshi": Helped with the images on the "Useful Links" section</p>
	<p>"Void B⃢ot", "TheShadowEevee", "ping for so-so wii help | snare" "avane": helped a lot with the coding and setting up of the web server itself, a major thanks to these guys.</p>
	<p>"nezzie": helped a lot with setting up PHP and setting up the switcher code, the code that switches the links if you are on my LAN, so that nobody gets dead links, big thanks.</p>
