<?php
include '../../js.php';
include '../../style.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style><?php $s=st("main,navbarBase,navbarHome,link")?></style>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Settings</title>
	<style id="dnone">*{display: none!important;}</style>
	<script><?php $j=getJS('load')?></script>
</head>
<body>
	<nav id="navbarContainer">
		<ul id="navbar">
			<li class="navbarItem navbarItemHome navbarFirst"><a href="/" class="navbarLink">Home</a></li>
			<li class="navbarItem"><a href="/currentprojects" class="navbarLink">Current projects</a></li>
			<li class="navbarItem"><a href="/requestjob" class="navbarLink">Request a Coding Project</a></li>
			<li class="navbarItem"><a href="/comingsoon" class="navbarLink">Placeholder</a></li>
		</ul>
	</nav>
	<div class="bodyContainer">
		<h1 class="heading">Settings</h1>
		<p>This page is unfinished! &nbsp;Come back later!</p>
		<a href="testjssettings" class="link">Test out the new JS settings API!</a><br>
		<a href="testbackend" class="link">Test out the new backend Node.JS Server!</a>
	</div>
</body>
</html>
<?php exit("ServerTiming:$j,$s");?>