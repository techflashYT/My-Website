<?php
$browser = get_browser(null, true);
print_r($browser);
$link = "http://75.167.232.199";
if (substr($_SERVER["REMOTE_ADDR"], 0, 8) === "192.168.") $link = "http://NAS";
?><html>

<head>
	<title>Welcome to the Main Page!</title>
	<link href=".stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
	<meta name=”viewport” content=”width=device-width, initial-scale=1″>
	</br>This is the main page and you are visiting from <?php echo $_SERVER['HTTP_USER_AGENT'] . "\n\n"; ?></br></br>
	<img style="height: 32px;" src=".logos/.Internet.png" alt="Internet globe icon">
	<a href="<?php echo $link; ?>/.links.php">Useful Links</a></br></br> <!-- Hyperlink to links.php, which has a lot of useful links on it -->
	<img style="height: 32px;" src=".logos/.Game-Controller.png" alt="Game Controller icon">
	<a href="<?php echo $link; ?>/.game.php">Bitcoiner Game</a></br></br> <!-- Hyperlink to game.php, my Bitcoiner embed from crazygames -->
	<img style="height: 32px;" src=".logos/.Server.png" alt="Server Icon">
	<a href="<?php echo $link; ?>">Network Server</a></br></br> <!-- Hyperlink to the website root -->
	<a href="<?php echo $link; ?>/.aboutme.php">Me</a></br></br> <!-- Hyperlink to aboutme.php, a page about me -->
	<a href="<?php echo $link; ?>/.credits.php">Credits</a></br></br> <!-- Hyperlink to credits.php, a list of everyone who helped make this site possible -->
	<a href="<?php echo $link; ?>/.help.php">Support/Suggestions</a> <!-- Hyperlink to help.php, where users can suggest things or ask for support -->
</body>
</head>

</html>