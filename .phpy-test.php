<?php 

$command = escapeshellcmd('/var/www/html/NAS/send_script.py');
$output = shell_exec($command);
echo $output;

?>

