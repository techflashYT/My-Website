<?php function getJS($a){$d=microtime(true);$c="";$b=explode(",",$a);for($i=0;$i<count($b);$i++){if($b[$i]=="load"){$c=$c.file_get_contents("/srv/www/techflash.ga/dist/js/load.js","r");}elseif($b[$i]=="settings"){$c=$c.file_get_contents("/srv/www/techflash.ga/dist/js/settings.js","r");}elseif($b[$i]=="backend"){$c=$c.file_get_contents("/srv/www/techflash.ga/dist/js/backend.js");}}print(str_replace(array("\r","\n","\t"),"",$c));$e=microtime(true);return$e-$d;}?>