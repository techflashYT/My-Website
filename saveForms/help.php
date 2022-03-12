<?php
    $file = fopen("/var/www/mainSite/formData/help.txt", "w") or die("Uh oh, somehow failed to open the file!");
    fwrite($file, "Name:" . htmlspecialchars($_POST["name"]) . "\r\nSubject: " . htmlspecialchars($_POST["subject"]) . "\r\nData: " . htmlspecialchars($_POST["data"]) . "\r\n");
    fclose($file);
?>