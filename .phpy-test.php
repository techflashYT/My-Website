<?php 

$command = escapeshellcmd('/var/www/html/NAS/test.py');
$output = shell_exec($command);
echo $output;

?>

