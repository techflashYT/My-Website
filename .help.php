<?php
$link = "http://75.167.190.201";
if (substr($_SERVER["REMOTE_ADDR"], 0, 8) === "192.168.") $link = "http://nas/";
?><html>
    <head>
        <link href="/.stylesheet.css" rel="stylesheet" type="text/css">
        <title>Support</title>
    </head>
    <body>
        <br>
        <a class="nav" href="<?php echo $link; ?>/Main-Page.php">Back to Main Page</a>  <! Hyperlink to Main-Page.php, the main page >
        <br>
        <br>
	<p>If something doesn't work correctly on the website, feel free to email me at michaelfgarofalo@gmail.com, preferably with screenshots of the issue.  If you want to suggest something, title your email "Suggestion for the website" or at least something simillar.</p>
	<input type="radio" name="Suggest/Help"> Suggestion
	<input type="radio" name="Suggest/Help"> Support
	<form>
	  <input style="height:500px;width:1400px;font-size:14pt;" textarea rows="2" cols="25"</textarea></input>  <! This is currently very messed up, while the text field DOES work, the text is stuck in the center vertically with only 1 line of text >
	</form>
	<input type="submit" name="Submit" style="background: teal;height: 40px;width: 120px">
    </body>

