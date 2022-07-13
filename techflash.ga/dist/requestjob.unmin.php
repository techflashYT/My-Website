<?php
include '../js.php';
include '../style.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style><?php $s=st("main,navbarBase,navbarHome,link")?></style>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Request</title>
	<style id="dnone">*{display: none!important;}</style>
	<script><?php $j=getJS('load')?></script>
</head>
<body>
	<nav id="navbarContainer">
		<ul id="navbar">
			<li class="navbarItem navbarItemHome navbarFirst"><a href="/" class="navbarLink">Home</a></li>
			<li class="navbarItem"><a href="/currentprojects" class="navbarLink">Current Projects</a></li>
			<li class="navbarItem"><a href="/comingsoon" class="navbarLink">Placeholder</a></li>
			<li class="navbarItem"><a href="/settings" class="navbarLink navbarSettings">Settings</a></li>
		</ul>
	</nav>
	<div class="bodyContainer">
		<h1 class="heading">Reqest a job</h1>
		<p>You can request a job to be done here!<br>Please fill out the form detailing what you would like to request.</p>
		<form action="saveForms/job" method="post">
			<label for="name" class="formLabel">Name: </label>
			<input type="text" name="name" id="name">
			<label for="title" class="formLabel"></label>
			<input type="text" id="subject">
			<label for="subject" class="formLabel">Subject: </label>
			<input type="text" name="subject" id="subject">
			<label for="message" class="formLabel">Message: </label>
			<textarea name="message" id="message" cols="30" rows="10"></textarea>
		</form>
	</div>
</body>
</html>
<?php exit("ServerTiming:$j,$s");?>