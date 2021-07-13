<?php
$browser = get_browser(null, true);
print_r($browser);
$link = "http://75.167.232.199";
if (substr($_SERVER["REMOTE_ADDR"], 0, 8) === "192.168.") $link = "http://NAS/";
?><html>

<head>
    <title>Welcome to the games page!</title>
    <link href=".stylesheet.css" rel="stylesheet" type="text/css">
    <link href=".stylesheet-links.css" rel="stylesheet" type="text/css">
</head>

<body>
    <meta name=”viewport” content=”width=device-width, initial-scale=1″> <!-- Makes the page fit the device with, makes the website at least slightly more mobile friendly -->
    <a href="<?php echo $link ?>Main-Page.php">Back to Main Page</a></br></br>
    </br>This is the games page and you are visiting from <?php echo $_SERVER['HTTP_USER_AGENT'] . "\n\n"; ?> <!-- Some code to tell you your user agent, idk why I did this -->
    </br></br></br><a href="<?php echo $link ?>.games/.bitcoiner.php">Bitcoiner Game</a></br></br> <!-- Hyperlink to .games/.bitcoiner.php, my Bitcoiner embed from crazygames -->
    <a href="<?php echo $link ?>.games/.candy-clicker-2.php">Candy Clicker 2 Game</a></br></br> <!-- Hyperlink to .games/.candy-clicker-2.php, my Candy Clicker 2 embed from crazygames -->
    <a href="<?php echo $link ?>.games/.mineclicker.php">MineClicker Game</a></br></br> <!-- Hyperlink to .games/.mineclicker.php, my MineClicker embed from crazygames -->
    <a href="<?php echo $link ?>.games/.m13n-miniaturization.php">M13n: Miniaturizaiton Game</a></br></br> <!-- Hyperlink to .games/.m13n-miniaturization.php, my M13n: Miniaturization embed from crazygames -->