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
	<title>JS Settings API Test</title>
	<style id="dnone">*{display:none!important;}</style>
	<script><?php $j=getJS('load,settings')?></script>
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
		<h3>Yes, I know this is extremely barebones right now, but it works-ish</h3>
		<h2 class="heading">Save</h2>
		<label for="setname" class="formLabel">Name: </label>
		<input type="text" id="setname"><br>
		<label for="setvalue" class="formLabel">Value: </label>
		<input type="text" id="setvalue"><br>
		<button onclick="a=setname.value;b=setvalue.value;if(a==null||a==undefined||a==''||b==null||b==undefined||b==''){alert('Both fields must be set!');return}settings.save(a,b)">Save</button><br/>
		<h2 class="heading">Load</h2>
		<label for="setnameload" class="formLabel">Name: </label>
		<input type="text" id="setnameload"><br>
		<button onclick="e=settings.load(setnameload.value);h=output;if(e!=null&&e!=undefined){h.innerText=e}else{h.innerText='none'}">Load</button><br/>
		Value: <span id="output"></span>
		<h2 class="heading">Clear settings</h2>
		<button onclick="window.localStorage.clear()">Clear</button><br/>
		<h2 class="heading">List settings</h2>
		<button onclick="a=output2;b=Object.keys(localStorage);if(b.length==0){a.innerHTML='None<br>'};for(c=0;c<b.length;b++){a.innerHTML+=(b[c]+'<br>')}">List</button><br/>
		Output:<br> <span id="output2">None<br></span>
	</div>
</body>
</html>
<?php exit("ServerTiming:$j,$s")?>