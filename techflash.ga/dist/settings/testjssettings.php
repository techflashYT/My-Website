<?php header("Content-Encoding: gzip");$a=microtime(true);$f=str_replace("\$","\\\$",str_replace("`","\`",str_replace("> <","><",str_replace(array("\r","\n","\t"),"",exec("cd /srv/www/techflash.ga/dist/settings&&echo $(php testjssettings.unmin.php)")))));$b=microtime(true);$c=$b-$a;$x=substr($f, strpos($f,"ServerTiming:"));$f=str_replace($x, "", $f);$h=microtime(true);$g=passthru("cd /srv/www/techflash.ga/dist&&gzip -c9nf - << HEREEOF\r\n$f");$v=microtime(true);$u=$v-$h;print($g);$j=str_replace("ServerTiming:", "", $x);header("Server-Timing: minhtml;dur=$c,compr;dur=$u,readjs;dur=$j");?>