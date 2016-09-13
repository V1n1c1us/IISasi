<?php

	$name = @trim(stripslashes($_POST['name'])); 
	$email = @trim(stripslashes($_POST['email']));
	$subject = @trim(stripslashes($_POST['subject']));
	$website = @trim(stripslashes($_POST['website']));
	$message = @trim(stripslashes($_POST['message'])); 

	$email_from = $email;
	$email_to = 'v.f.diehl@gmail.com';//replace with your email

	$body = 'Nome: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Mensagem: ' . $message;

	$success = @mail($email_to, $body, 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Mensagem: ' . $message);
	
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<script>alert("Obrigado! Em Breve Entraremos em Contato.");</script>
	<meta HTTP-EQUIV="REFRESH" content="0; url=../index.html"> 
</head>