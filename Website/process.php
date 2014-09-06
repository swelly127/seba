<?php
if(isset($_POST['submit'])){
	if(isset($_POST["name"]) && empty($_POST["name"])){
		print("<script type= \"text/javascript\"> \n");
		print("alert(\"Please fill in your name.\") \n");
		print("</script>");
	} elseif (isset($_POST["email"]) && empty($_POST["email"])){
		print("<script type= \"text/javascript\"> \n");
		print("alert(\"Please fill in your email address.\") \n");
		print("</script>");
	} elseif (isset($_POST["comments"]) && empty($_POST["comments"])){
		print("<script type= \"text/javascript\"> \n");
		print("alert(\"Please fill in your comment.\") \n");
		print("</script>");
	} else{
		$name= $_POST["name"];
		$email = $_POST["email"];
		$comments = $_POST["comments"];

		$to = "CornellSEBA@gmail.com";
		$subject = "Listserv Request";
		$message = "Hello! $name ($email) left the following message on your SEBA website: $comments";
		$headers = "From: $email";

		mail($to,$subject,$message,$headers);
		print("<script type= \"text/javascript\"> \n");
		print("alert(\"Mail sent successfully!\") \n");
		print("</script>");
	}
}

?>