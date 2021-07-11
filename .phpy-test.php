<?php
$link = "http://75.167.190.201";
if (substr($_SERVER["REMOTE_ADDR"], 0, 8) === "192.168.") $link = "http://NAS";
$command = escapeshellcmd('/var/www/html/NAS/send_script.py');
$output = shell_exec($command);
echo $output;
?><html>
    <head>
        <title>Welcome to my useful links!</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		<link href="/.stylesheet.css" rel="stylesheet" type="text/css">
    </head>
    <body>
</br>
    <a class="nav" href="<?php echo $link; ?>/Main-Page.php">Main Page</a>  <! Hyperlink back to the Main Page of the Web server >


