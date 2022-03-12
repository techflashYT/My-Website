<?php
    $file = fopen("/var/www/mainSite/SiteUpdated.php", "w") or die("Uh oh, somehow failed to open the file!");
    die("Not Implemented yet!");
    fwrite($file, "<?php\r\n    siteHasBeenUpdated = true;\r\n?>");
    fclose($file);
    // TODO: Find a way to put files in an "UPDATE" folder.  Maybe use HTTP PUT request somehow?
?>