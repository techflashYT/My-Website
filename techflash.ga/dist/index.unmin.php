<?php
include '../js.php';
include '../style.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style><?php $s=st("main,navbarBase,link,line")?></style>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Welcome to techflash.ga!  The official site of the Techflash YouTube channel!">
	<meta name="theme-color" content="#757575">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome!</title>
	<style id="dnone">*{display:none}</style>
	<script><?php $j=getJS('load');?></script>
</head>
<body>
	<nav id="navbarContainer">
		<ul id="navbar">
			<li class="navbarItem navbarFirst"><a href="/currentprojects" class="navbarLink">Current Projects</a></li>
			<li class="navbarItem"><a href="/requestjob" class="navbarLink">Request a Coding Project</a></li>
			<li class="navbarItem"><a href="/comingsoon" class="navbarLink">Placeholder</a></li>
			<li class="navbarItem"><a href="/settings/" class="navbarLink navbarSettings">Settings</a></li>
		</ul>
	</nav>
	<div class="bodyContainer">
		<h1 class="heading">Welcome!</h1>
		<p>The website is currently undergoing a complete recreation. &nbsp;Come back later for more!</p>
		<hr>
		<p class="mainPageBlock">
I am Techflash, &nbsp;I make <a class="link" href="https://www.youtube.com/channel/UCZNRlvLcjqN8nw6YO73IPOg">YouTube</a> videos and livestream on <a class="link" href="https://twitch.tv/techflashYT">Twitch</a>!<br>
I also do a lot of programming on my <a class="link" href="https://github.com/techflashYT">GitHub</a> account!<br>
		</p>
	</div>
</body>
</html>
<?php exit("ServerTiming:$j,$s");?>