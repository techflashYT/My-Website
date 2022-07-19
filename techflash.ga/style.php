<?php function st($s){$z=array(0,0,0,0,0,0,0); // main, nbBase, nbHome, link, code, gh-md, line
		$d=microtime(1);
		$b=explode(",",$s);
		$y=array("main","navbarBase","navbarHome","link","projects","gh-md","line");
		for ($i=0; $i<count($b); $i++) {
			if ($b[$i]=="main") {
				$z[0]=1;
			}
			else if ($b[$i]=="navbarBase") {
				$z[1]=1;
			}
			else if ($b[$i]=="navbarHome") {
				$z[2]=1;
			}
			else if ($b[$i]=="link") {
				$z[3]=1;
			}
			else if ($b[$i]=="code") {
				$z[4] = 1;
			}
			else if ($b[$i]=="gh-md") {
				$z[5] = 1;
			}
			else if ($b[$i]=="line") {
				$z[6] = 1;
			}
			else {
				die();
			}
		}
		$f="";
		for ($i=0; $i<count($z); $i++) {
			if ($z[$i]) {
				$f=$f.file_get_contents("/srv/www/techflash.ga/dist/styleraw/$y[$i].css");
			}
		}
		print($f);
		return microtime(1)-$d;
	}
?>
