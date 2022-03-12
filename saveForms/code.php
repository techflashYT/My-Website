<?php
    $file = fopen("/var/www/mainSite/formData/code.txt", "w") or die("Uh oh, somehow failed to open the file!");
    fwrite($file, "Name:" . htmlspecialchars($_POST["name"]) . "\r\nFor Project: " . htmlspecialchars($_POST["forproject"]) . "\r\nData: " . htmlspecialchars($_POST["data"]) . "\r\n");
    fclose($file);
?>