<?php
$link = "http://75.167.232.199";
if (substr($_SERVER["REMOTE_ADDR"], 0, 8) === "192.168.") $link = "http://nas/";
?><html>
    <head>
        <link href="/.stylesheet.css" rel="stylesheet" type="text/css">
        <title>Support</title>
    </head>
    <body>
    <meta name=”viewport” content=”width=device-width, initial-scale=1″>
        <br>
        <a class="nav" href="<?php echo $link; ?>/Main-Page.php">Back to Main Page</a>  <! Hyperlink to Main-Page.php, the main page >
    </body>
