<?php
$browser = get_browser(null, true);
print_r($browser);
$link = "http://75.167.232.199";
if (substr($_SERVER["REMOTE_ADDR"], 0, 8) === "192.168.") $link = "http://NAS/";
?><html>

<head>
    <title>Welcome to the *change this to the page name of the page you are making*</title>
    <link href="<?php echo $link ?>.stylesheet-blank.css" rel="stylesheet" type="text/css">
</head>

<body>
    <meta name=”viewport” content=”width=device-width, initial-scale=1″></br> <!-- Makes the page fit the device with, makes the website at least slightly more mobile friendly -->
    <script type="text/javascript" src="<?php echo $link; ?>.games\.my-game\.js\.my-game.js">
    </script>
    <script type="text/javascript" src="<?php echo $link; ?>.games\.my-game\.js\p5.js">
    </script>
    <script type="text/javascript" src="<?php echo $link; ?>.games\.my-game\.js\sketch.js">
    </script>
    <p id="test" />
    <script>
        document.getElementById("test").innerHTML = '';
    </script>