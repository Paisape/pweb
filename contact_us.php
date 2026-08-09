<?php 
include "include.php";

$is_ajax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') || isset($_POST['is_ajax']);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['updte']) && $_POST['updte'] == 1) {
	// Honeypot check for spam bots
	if (!empty($_POST['fax'])) {
		// Silent reject for bots
		if ($is_ajax) {
			header('Content-Type: application/json');
			echo json_encode(['status' => 'success', 'message' => 'Thank you for reaching out! We will connect with you shortly.']);
			exit;
		}
		header("Location: /contact?submitted=success");
		exit;
	}

	$name    = trim($_POST['name'] ?? '');
	$raw_phone = $_POST['Phone'] ?? '';
	$email   = trim($_POST['email'] ?? '');
	$subject = trim($_POST['subject'] ?? '');
	$message_body = trim($_POST['message'] ?? '');
	$page    = $_POST['page'] ?? 'contact';

	// Strict 10-digit mobile number validation (numbers only, starts with 6-9)
	$clean_phone = preg_replace('/\D/', '', $raw_phone);
	if (!preg_match('/^[6-9]\d{9}$/', $clean_phone)) {
		$error_msg = "Please enter a valid 10-digit mobile number.";
		if ($is_ajax) {
			header('Content-Type: application/json');
			echo json_encode(['status' => 'error', 'message' => $error_msg]);
			exit;
		}
		header("Location: /contact?error=" . urlencode($error_msg));
		exit;
	}
	$Phone = $clean_phone;

	// Capture Telemetry Data
	$user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : 'Unknown';
	$client_ip = '';
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$client_ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$client_ip = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
	} else {
		$client_ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
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

	if ($is_ajax) {
		header('Content-Type: application/json');
		echo json_encode(['status' => 'success', 'message' => 'Thank you! We will connect with you shortly.']);
		exit;
	} else {
		header("Location: /contact?submitted=success");
		exit;
	}
}

// Direct GET access redirect to avoid blank page
header("Location: /contact");
exit;
?>
