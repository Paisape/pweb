<?php 
include "include.php";

if($_POST['updte'] == 1){
	// Honeypot check for spam bots
	if(!empty($_POST['fax'])) {
		// Silent reject: pretend it succeeded to trick the bot
		header("location:/contact");
		exit;
	}

	$name    = $_POST['name'];
	$Phone   = $_POST['Phone'];
	$email   = $_POST['email'];
	$subject = $_POST['subject'];
	$message_body = $_POST['message'];

	$page = $_POST['page'];

	// Capture Telemetry Data
	$user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : 'Unknown';
	$client_ip = '';
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$client_ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$client_ip = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
	} else {
		$client_ip = $_SERVER['REMOTE_ADDR'];
	}
	
	$screen_res = isset($_POST['screen_resolution']) ? $_POST['screen_resolution'] : 'Unknown';
	$timezone   = isset($_POST['timezone']) ? $_POST['timezone'] : 'Unknown';
	$language   = isset($_POST['language']) ? $_POST['language'] : 'Unknown';

	// 1. Send notification to the internal team
	include "contact_us_mail.php";
	send_smtp_mail("info@paisape.in", "Paisape Contact Us Mail", $message);

	// 2. Send auto-reply to the user
	include "contact_autoreply_mail.php";
	send_smtp_mail($email, "We have received your request - Paisape", $auto_reply_message);

	header("location:/contact");
}
?>
