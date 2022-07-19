<?php
include '../../js.php';
include '../../style.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style><?php $s=st("main,navbarBase,navbarHome")?></style>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Test backend</title>
	<style id="dnone">*{display:none!important;}</style>
	<script><?php $j=getJS('load,backend')?></script>
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
		<a href="/settings">Back</a>
		<h1 class="heading">Settings</h1>
		<p>This page is unfinished! &nbsp;Come back later!</p>
		<h3>Here you can test the backend of the server, running on port 8080.</h3>
		<label for="urltoget">URL to Get (deafaults to /): </label>
		<input type="text" name="urltoget" id="urltoget"><br>
		<button onclick="u='';v=document.getElementById('urltoget').value;o=document.getElementById('output');if(!(v== null||v==undefined)){u=v};a=backend.GET(u);setTimeout(function(){if(a.readyState==4){o.innerHTML+=a.responseText+'<br>'}else{setTimeout(function(){o.innerHTML+=a.responseText+'<br>'},2000)}},100);">Go!</button>
		<div id="output">Output:<br></div>
	</div>
</body>
</html>
<?php exit("ServerTiming:$j,$s");?>