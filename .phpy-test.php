<?php
$link = "http://75.167.232.199";
if (substr($_SERVER["REMOTE_ADDR"], 0, 8) === "192.168.") $link = "http://NAS";
$command = escapeshellcmd('/var/www/html/NAS/.send_script.py');
$output = shell_exec($command);
echo $output;
?><html>
    <head>
      <body>
        <title>Welcome to the PHP to python script test!</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		<link href="/.stylesheet.css" rel="stylesheet" type="text/css">
      </body>
    </head>
</br>
    <a class="nav" href="<?php echo $link; ?>/Main-Page.php">Back to Main Page</a>  <! Hyperlink back to the Main Page of the Web server >


