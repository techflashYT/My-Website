<?php
$link = "http://75.167.232.199";
if (substr($_SERVER["REMOTE_ADDR"], 0, 8) === "192.168.") $link = "http://NAS";
?><html>
    <head>
        <title>Welcome to the Main Page!</title>
		<link href=".stylesheet.css" rel="stylesheet" type="text/css">
    </head>
    <body>
	<meta name=”viewport” content=”width=device-width, initial-scale=1″>
		<br>
		<img style="height: 32px;" src=".logos/.Internet.png" alt="">
	        <a href="<?php echo $link; ?>/.links.php">Useful Links</a>  <! Hyperlink to links.php, which has a lot of useful links on it >
		<br>
		<br>
		<img style="height: 32px;" src=".logos/.Game-Controller.png" alt="Game Controller icon">
		<a href="<?php echo $link; ?>/.game.php">Bitcoiner Game</a>  <! Hyperlink to game.php, my Bitcoiner embed from crazygames >
		<br>
		<br>
		<a href="<?php echo $link; ?>">Network Server</a>  <! Hyperlink to the website root >
		<br>
		<br>
		<a href="<?php echo $link; ?>/.aboutme.php">Me</a>  <! Hyperlink to aboutme.php, a page about me >
		<br>
		<br>
		<a href="<?php echo $link; ?>/.credits.php">Credits</a>  <! Hyperlink to credits.php, a list of everyone who helped make this site possible >
		<br>
		<br>
		<a href="<?php echo $link; ?>/.help.php">Support/Suggestions</a>  <! Hyperlink to help.php, where users can suggest things or ask for support >
	</body>
</head>
</html>

