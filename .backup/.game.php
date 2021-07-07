<?php
$link = "http://75.167.190.201";
if (substr($_SERVER["REMOTE_ADDR"], 0, 8) === "192.168.") $link = "http://NAS";
?><html>
    <head>
        <title>Welcome to my embed of a game!</title>
        <link href=".stylesheet.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <a href="<?php echo $link; ?>/Main-Page.php">Back to Main Page</a>
        <br>
        <iframe width="1050" height="812" src="https://www.crazygames.com/embed/bitcoiner" frameborder="0" allowfullscreen></iframe>
        <p>Bitcoiner is a game all about mining bitcoin!  You start off with basic machines, no cooling and a small room, as you get more bitcoins, you can upgrade all of those things!  Can you get to 1 million bitcoin?</p>
    </body>
</html>
