<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Cornell SEBA - Get Involved</title>

	<link rel="stylesheet" href="stylesheets/blueprint/screen.css" type="text/css" media="screen, projection"/>
	<link rel="stylesheet" href="stylesheets/blueprint/print.css" type="text/css" media="print"/>
	<!--[if lt IE 8]>
	  <link rel="stylesheet" href="stylesheets/blueprint/ie.css" type="text/css" media="screen, projection"/>
	<![endif]-->
	<link rel="stylesheet" href="stylesheets/style.css" type= "text/css"/>
</head>

<body>
<div id= "wrap" class= "container">
	<div id= "header" class= "column span-23">
		<h1 id= "logo"><a href="index.html">Cornell Science and Engineering Business Association</a></h1>
		<div id= "navbar" class= "column span-12 last">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="events.html">Events</a></li>
				<li><a href="board.html">Executive Board</a></li>
				<li class="active"><a href="contact.php">Get Involved</a></li>
			</ul>
		</div>
	</div>

	<div id= "contact" class= "column span-22">
		<h1>Get Involved</h1>
		
		<p>If you would like to be added to our listserv, or have any general questions or comments, please fill out the following information:</p>
			
		<form method="post" action="contact.php">
		<p>
			Name:<br/>
			<input type="text" size="30" maxlength="40" name="name" value="<?php print(isset($_POST['name']))? $_POST['name']:"";?>"/><br/><br/>
			Email:<br/>
			<input type="text" size="30" maxlength="40" name="email" value="<?php print(isset($_POST['email']))? $_POST['email']:"";?>"/><br/><br/>
			Questions or Comments:<br/>
			<textarea rows="3" cols="20" name="comments"><?php print(isset($_POST['comments']))? $_POST['comments']:"";?></textarea><br/>
			<input type="submit" value="Submit" name= "submit"/>
			<input type="reset" value="Reset"/>
		</p>
		</form>
		
		<?php require("process.php"); ?>

	</div>
	
	<div id= "footer" class= "column span-23">
		&copy; 2011 - Cornell Science and Engineering Business Association
	</div>
</div>
</body>
</html>