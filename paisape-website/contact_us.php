<?php 
include "include.php";

if($_POST['updte'] == 1){
	$name    = $_POST['name'];
	$Phone   = $_POST['Phone'];
	$email   = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$page = $_POST['page'];

	include "contact_us_mail.php";
	sendgooglemail($email_from, "info@paisape.in", "Paisape Contact Us Mail", $message);

	header("location:index.html");
}
?>