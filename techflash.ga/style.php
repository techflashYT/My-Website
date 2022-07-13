<?php
	function st($s) {
		$z=array(false,false,false,false,false,false,false); // main, nbBase, nbHome, link, code, gh-md, line
		$d=microtime(true);
		$b=explode(",",$s);
		$y=array("main","navbarBase","navbarHome","link","projects","gh-md","line");
		for ($i=0; $i<count($b); $i++) {
			if ($b[$i]=="main") {
				$z[0]=true;
			}
			else if ($b[$i]=="navbarBase") {
				$z[1]=true;
			}
			else if ($b[$i]=="navbarHome") {
				$z[2]=true;
			}
			else if ($b[$i]=="link") {
				$z[3]=true;
			}
			else if ($b[$i]=="code") {
				$z[4] = true;
			}
			else if ($b[$i]=="gh-md") {
				$z[5] = true;
			}
			else if ($b[$i]=="line") {
				$z[6] = true;
			}
		}
		$f="";
		for ($i=0; $i<count($z); $i++) {
			if ($z[$i]) {
				$f=$f.file_get_contents("/srv/www/techflash.ga/dist/styleraw/$y[$i].css");
			}
		}
		print($f);
		return microtime(true)-$d;
	}
?>
