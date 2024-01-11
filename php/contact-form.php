<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// put your email address here
	$youremail = 'hello@mesares.com';  

	// prepare message 
	$body = "Nova mensagem via site Mesares.com :
	
	Name:  $_POST[name]
	Email:  $_POST[email]
	Phone:  $_POST[phone]
	Restaurante:  $_POST[restaurante]";

	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	mail($youremail, 'Mensagem via site', $body, $headers );

} ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Thanks!</title>
</head>
<body>
<p> Thank you! We will get back to you soon.</p>
</body>
</html>