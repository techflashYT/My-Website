<?php
include '../js.php';
include '../style.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style><?php $s=st("main,navbarBase,navbarHome")?></style>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Coming Soon!</title>
	<style id="dnone">*{display:none!important;}</style>
	<script><?php $j=getJS('load');?></script>
</head>
<body>
	<nav id="navbarContainer">
		<ul id="navbar">
			<li class="navbarItem navbarItemHome navbarFirst"><a href="/" class="navbarLink">Home</a></li>
			<li class="navbarItem"><a href="/currentprojects" class="navbarLink">Current Projects</a></li>
			<li class="navbarItem"><a href="/requestjob" class="navbarLink">Request a Coding Project</a></li>
			<li class="navbarItem"><a href="/settings" class="navbarLink navbarSettings">Settings</a></li>
		</ul>
	</nav>
	<div class="bodyContainer">
		<h1 class="heading">Sorry!</h1>
		<p>This page is unfinished :(, check back later!</p>
	</div>
</body>
</html>
<?php exit("ServerTiming:$j,$s");?>