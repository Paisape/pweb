<?php 
include "include.php";

if($_POST['updte'] == 1){
	$name    = $_POST['name'];
	$Phone   = $_POST['Phone'];
	$email   = $_POST['email'];
	$subject = $_POST['subject'];
	$message_body = $_POST['message'];

	$page = $_POST['page'];

	// 1. Send notification to the internal team
	include "contact_us_mail.php";
	send_smtp_mail("info@paisape.in", "Paisape Contact Us Mail", $message);

	// 2. Send auto-reply to the user
	include "contact_autoreply_mail.php";
	send_smtp_mail($email, "We have received your request - Paisape", $auto_reply_message);

	header("location:contact.html");
}
?>