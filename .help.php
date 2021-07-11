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
	If something doesn't work correctly on the website, feel free to email me at michaelfgarofalo@gmail.com, preferably with screenshots of the issue. </br> If you want to suggest something, title your email "Suggestion for the website" or at least something simillar.
	<input type="radio" name="Suggest/Help"> Suggestion
	<input type="radio" name="Suggest/Help"> Support
	<div><span>
	 <form>
<form method="post" action="send_script.php">
  <input type="text" name="name" placeholder="Name" style="height: 30px"> </br> </br>
  <input type="email" name="email" style="width: 250px; height: 30px" placeholder="Email"> </br> </br>
  <input type="text" name="subject" placeholder="Subject" style="height: 30px"> </br> </br>
  <textarea name="msg" style="height: 250px; width: 1000px" placeholder="Message"></textarea> </br> </br>
  <button type="submit" name="send_message_btn" style="background-color: DeepSkyBlue; height: 50px; width: 120px">Send</button>
</form>
</span></div>
</body>
</html>
