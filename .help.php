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
	<span>
	 <form>
<form method="post" action="send_script.php">
  Name: <input type="text" name="name" > <br />
  email: <input type="email" name="email" > <br />
  Subject: <input type="text" name="subject" > <br />
  Message: <textarea name="msg"></textarea>
  <button type="submit" name="send_message_btn">Send</button>
</form>
</body>
</html>
