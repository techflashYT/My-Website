<?php
$link = "http://75.167.190.201";
if (substr($_SERVER["REMOTE_ADDR"], 0, 8) === "192.168.") $link = "http://nas/";
?><html>
    <head>
        <link href="/.stylesheet.css" rel="stylesheet" type="text/css">
        <title>Welcome to my page!</title>
    </head>
    <body>
        <br>
        <a class="nav" href="<?php echo $link; ?>/Main-Page.php">Back to Main Page</a>  <! Hyperlink to Main-Page.php, the main page >
        <br>
        <p>This will be all about me in a bit!!<p>
        <br>
        <br>
        <img style="height: 5%;" src=".logos/.Discord-transparent.png" alt="Discord Logo, why are you reading this text.">
        <a href="https://discord.gg/cPdSqvcXc9">My Discord Server!</a>  <! Hyperlink to my Discord Server >
        <br>
	<br>
	<img style="height: 4.5%;" src=".logos/.Youtube-Transparent.png" alt="YouTube Logo, once again, why are you reading this text.">
        <a href="https://www.youtube.com/channel/UCZNRlvLcjqN8nw6YO73IPOg">My YouTube Channel!</a>  <! Hyperlink to my Youtube channel >
    </body>
</html>