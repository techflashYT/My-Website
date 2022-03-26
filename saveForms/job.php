<?php
    $file = fopen("/var/www/mainSite/formData/job.txt", "w") or die("Uh oh, somehow failed to open the file!");
    fwrite($file, "Name:" . htmlspecialchars($_POST["name"]) . "\r\nSubject: " . htmlspecialchars($_POST["subject"]) . "\r\nData: " . htmlspecialchars($_POST["message"]) . "\r\n\r\n");
    fclose($file);
?>