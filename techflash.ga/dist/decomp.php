<?php if(str_contains($_GET['fn'],"..")){header("HTTP/1.1 403 Forbidden",true,403);print("<html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You are not allowed to use '..' in the request. This is for security reasons.</p><hr><address></address>");die();}header("Content-Encoding: gzip",true,200);$a=$_GET['tp'];header("Content-Type: $a");$b=$_GET['fn'];$c="/srv/www/techflash.ga/dist/$b";print(file_get_contents($c));?>