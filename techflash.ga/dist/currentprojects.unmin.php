<?php
include '../js.php';
include '../style.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style><?php $s=st("main,navbarBase,navbarHome,code")?>.load{display:inline-block;width:100%;text-align:center}</style>
	<link rel="preload" href="/decomp?fn=styleraw/gh-md.gz&tp=text/css" as="style" type="text/css">
	<link rel="preload" href="/decomp?fn=js/MD/MD-Render.gz&tp=application/javascript" as="script" crossorigin>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style id="dnone">*{display:none};html{display:block}</style>
	<script><?php $j=getJS('load');?></script>
	<script defer>"registerElement"in document&&!("customElements"in window)?(el=document.createElement("script"),el.setAttribute("type","module"),el.setAttribute("src","/decomp?fn=js/MD/MD-Render-legacy.gz&type=application/javascipt"),document.children[0].children[0].appendChild(el)):"customElements"in window?(el=document.createElement("script"),el.setAttribute("type","module"),el.setAttribute("src","/decomp?fn=js/MD/MD-Render.gz&tp=application/javascript"),document.children[0].children[0].appendChild(el)):(alert("Error: Custom elements are not supported on your browser.  Switching to fallback markdown viewer (if it still doesn't work, please report it via the help button)."),el=document.createElement("script"),el.setAttribute("src","/decomp?fn=js/MD/MD-Render-legacy.gz?tp=application/javascript"),document.appendChild(el));</script>
	<title>My Current Projects</title>
</head>
<body>
	<nav id="navbarContainer">
		<ul id="navbar">
			<li class="navbarItem navbarFirst navbarItemHome"><a href="/" class="navbarLink">Home</a></li>
			<li class="navbarItem"><a href="/requestjob.html" class="navbarLink">Request a Coding Project</a></li>
			<li class="navbarItem"><a href="/comingsoon" class="navbarLink">Placeholder</a></li>
			<li class="navbarItem"><a href="/settings" class="navbarLink navbarSettings">Settings</a></li>
		</ul>
	</nav>
	<div class="bodyContainer">
		<h1 class="heading">Current Projects:</h1>
		<p>This page is unfinished, check back later!</p>
		<div class="grid grid-cols-3">
			<div class="col codeContainer">
				<div class="codeBorder">
					<?php $i="data:image/gif;base64,R0lGODlhIAAgAIIAAAAAAAAAADExMVlZWVpaWlxcXM7OztDQ0CH/C05FVFNDQVBFMi4wAwEAAAAh+QQJEAAAACwBAAEAGgAeAAADZwi6vPamyengo1hZmzX0W5SFQHhhZipSaUmiJnjCr9tV281yevP1khrQJey1hsQc8rhUImXPCWFK6Aiu1wZ1S8F6F1vuxIsFh6cKMTmbPlfPgLWA4a7L6WFAPf7VUttwSHtPgVFiEwkAIfkECRAAAAAsAQABAB4AGgAAA2cIusxmLcr5Kpw42pfl+IOyVSKHgSAwcuOEgmvsvZ+62W1D1/gl6zvKavYS3lyozBHI6zQsC5rTcduFpjHrtGfRYlde5xAg3XIv5JS5ZGoI3u/1BE6XR+hwuxsv0DP4fX4KgIJ/eXoJACH5BAkQAAAALAQAAQAaAB4AAANrCLpM7izK+Oq8q1q8hFfaA4qMZwpACIXl6akwobhmqtksQH+43G862gXWEU5UERcnx1kSDtBmE0o9SC/V6DWS1W4XXeuX0R1zqWawN11OA8LSqiIsxpTpHDrerm9j4X5/bWhxcGxZbnOEHAkAIfkECRAAAAAsAQAEAB0AGwAAA2UIutwuULhJV4w12wu15phHgZ04keYIpmrIHDDMAkW9xHha7woem7ug7ycK7oayorEAQOqMTd8s+ErOMrkM1OGkLJmNbvSg+IKrUintyx2Of+Z2FsmezJ1LE5JcPov2V2hEgWgeCQA7"?>
					<span id="pw1" class="load"><img src="<?php print("$i")?>" alt="Loading..."></span>
					<zero-md id="zm1" src="/decomp?fn=md/curProj/1.gz&tp=text/markdown"></zero-md>
				</div>
			</div>
			<div class="col codeContainer">
				<div class="codeBorder">
					<span id="pw2" class="load"><img src="<?php print("$i")?>" alt="Loading..."></span>
					<zero-md id="zm2" src="/decomp?fn=md/curProj/2.gz&tp=text/markdown"></zero-md>
				</div>
			</div>
			<div class="col codeContainer">
				<div class="codeBorder">
					<span id="pw3" class="load"><img src="<?php print("$i")?>" alt="Loading..."></span>
					<zero-md id="zm3" src="/decomp?fn=md/curProj/3.gz&tp=text/markdown"></zero-md>
				</div>
			</div>
		</div>
		<script>function g(e){return document.getElementById(e)};g('zm1').addEventListener('zero-md-rendered',function(){g('pw1').innerHTML=""});g('zm2').addEventListener('zero-md-rendered',function(){g('pw2').innerHTML=""});g('zm3').addEventListener('zero-md-rendered',function(){g('pw3').innerHTML=""})</script>
	</div>
</body>
</html>
<?php exit("ServerTiming:$j,$s")?>