<?php
$link = "http://75.167.232.199";
if (substr($_SERVER["REMOTE_ADDR"], 0, 8) === "192.168.") $link = "http://NAS";
?><html>
    <head>
        <title>Welcome to my embed of a game!</title>
        <link href=".stylesheet.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <meta name=”viewport” content=”width=device-width, initial-scale=1″>  <!-- Makes the page fit the device with, makes the website at least slightly more mobile friendly -->
        <a href="<?php echo $link; ?>/Main-Page.php">Back to Main Page</a>
        <br>
        <iframe width="1050" height="812" src="https://www.crazygames.com/embed/bitcoiner" frameborder="0" allowfullscreen></iframe>
        <?php echo "Bitcoiner is a game all about mining bitcoin!  </br> You start off with basic machines, no cooling and a small room. </br> As you get more bitcoins, you can upgrade all of those things!  </br> Can you get to 1 million bitcoin?"; ?>
    </body>
</html>
