<?php
$link = "http://75.167.232.199";
if (substr($_SERVER["REMOTE_ADDR"], 0, 8) === "192.168.") $link = "http://NAS/";
?><html>

<head>
    <title>Welcome to my embed of a game!</title>
    <link href="<?php echo $link; ?>.stylesheet.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $link; ?>.stylesheet-links.css" rel="stylesheet" type="text/css">
</head>

<body>
    <meta name=”viewport” content=”width=device-width, initial-scale=1″> <!-- Makes the page fit the device with, makes the website at least slightly more mobile friendly -->
    </br><a href="<?php echo $link; ?>Main-Page.php">Back to Main Page</a> <!-- Hyperlink to Main-Page.php, the Main Page of the Web Server -->
    </br><a href="<?php echo $link; ?>.games.php">Back to Games page</a> <!-- Hyperlink to .games.php, the list of games embeds -->
    </br></br></br><iframe width="1050" height="812" src="https://www.crazygames.com/embed/boombox-inc" frameborder="0" allowfullscreen></iframe> <!-- iframe of the Boombox Inc. game from Crazygames -->
    <?php echo "Bitcoiner is a game all about mining bitcoin!  </br> You start off with basic machines, no cooling and a small room. </br> As you get more bitcoins, you can upgrade all of those things!  </br> Can you get to 1 million bitcoin?"; ?>
</body>

</html>