<?php 
include "include.php";

$is_ajax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') || isset($_POST['is_ajax']);

function is_gibberish_text($text) {
	$text = strtolower(trim($text));
	if (empty($text)) return true;

	// 1. Check for single character repetition: "aaaaaa", "zzzzzz"
	if (preg_match('/(.)\1{3,}/i', $text)) return true;

	// 2. Check for 2 to 3-char repeating patterns: "hdhdhdd", "ababab", "gfsgssgg"
	if (preg_match('/(.{2,3})\1{2,}/i', $text)) return true;

	// 3. Check for common keyboard mash sequences
	$keyboard_patterns = [
		'asdf', 'sdfg', 'dfgh', 'fghj', 'ghjk', 'hjkl',
		'qwert', 'werty', 'ertyu', 'rtyui', 'tyuio', 'yuiop',
		'zxcv', 'xcvb', 'cvbn', 'vbnm',
		'fsdf', 'dssf', 'gfsg', 'hdhd', 'dggf', 'fdgd', 'hddd'
	];
	foreach ($keyboard_patterns as $pat) {
		if (strpos($text, $pat) !== false) return true;
	}

	// 4. Vowel ratio check for words >= 4 chars (e.g. 'fsdfdssf', 'hdhdhdd', 'dggfdgdgg', 'gfsgssgg')
	$words = preg_split('/\s+/', $text);
	foreach ($words as $w) {
		$clean_w = preg_replace('/[^a-z]/i', '', $w);
		if (strlen($clean_w) >= 4) {
			preg_match_all('/[aeiouy]/i', $clean_w, $vowels);
			if (count($vowels[0]) == 0) {
				return true; // Zero vowels in a 4+ letter word = gibberish
			}
		}
	}

	return false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['updte']) && $_POST['updte'] == 1) {
	// Honeypot check for spam bots
	if (!empty($_POST['fax'])) {
		if ($is_ajax) {
			header('Content-Type: application/json');
			echo json_encode(['status' => 'success', 'message' => 'Thank you for reaching out! We will connect with you shortly.']);
			exit;
		}
		header("Location: /contact?submitted=success");
		exit;
	}

	$name         = trim($_POST['name'] ?? '');
	$raw_phone    = $_POST['Phone'] ?? '';
	$email        = trim($_POST['email'] ?? '');
	$subject      = trim($_POST['subject'] ?? '');
	$message_body = trim($_POST['message'] ?? '');
	$page         = $_POST['page'] ?? 'contact';

	// 1. Strict 10-digit mobile number validation (numbers only, starts with 6-9)
	$clean_phone = preg_replace('/\D/', '', $raw_phone);
	if (!preg_match('/^[6-9]\d{9}$/', $clean_phone)) {
		$error_msg = "Please enter a valid 10-digit mobile number starting with 6, 7, 8, or 9.";
		if ($is_ajax) {
			header('Content-Type: application/json');
			echo json_encode(['status' => 'error', 'message' => $error_msg]);
			exit;
		}
		header("Location: /contact?error=" . urlencode($error_msg));
		exit;
	}
	$Phone = $clean_phone;

	// 2. Strict Anti-Gibberish & Input Length Validation
	if (strlen($name) < 3 || is_gibberish_text($name)) {
		$error_msg = "Please enter a valid Full Name.";
		if ($is_ajax) {
			header('Content-Type: application/json');
			echo json_encode(['status' => 'error', 'message' => $error_msg]);
			exit;
		}
		header("Location: /contact?error=" . urlencode($error_msg));
		exit;
	}

	if (strlen($subject) < 2 || is_gibberish_text($subject)) {
		$error_msg = "Please enter a valid Company name.";
		if ($is_ajax) {
			header('Content-Type: application/json');
			echo json_encode(['status' => 'error', 'message' => $error_msg]);
			exit;
		}
		header("Location: /contact?error=" . urlencode($error_msg));
		exit;
	}

	if (strlen($message_body) < 10 || is_gibberish_text($message_body)) {
		$error_msg = "Please enter a detailed and meaningful message (at least 10 characters).";
		if ($is_ajax) {
			header('Content-Type: application/json');
			echo json_encode(['status' => 'error', 'message' => $error_msg]);
			exit;
		}
		header("Location: /contact?error=" . urlencode($error_msg));
		exit;
	}

	// Capture Telemetry Data
	$user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
	$client_ip = '';
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$client_ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$client_ip = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
	} else {
		$client_ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
	}
	
	$screen_res = $_POST['screen_resolution'] ?? 'Unknown';
	$timezone   = $_POST['timezone'] ?? 'Unknown';
	$language   = $_POST['language'] ?? 'Unknown';

	// GeoLocation Detection for Telemetry
	$location = 'Unknown';
	$cf_city    = $_SERVER['HTTP_CF_IPCITY'] ?? '';
	$cf_region  = $_SERVER['HTTP_CF_IPREGION'] ?? '';
	$cf_country = $_SERVER['HTTP_CF_IPCOUNTRY'] ?? '';

	if (!empty($cf_city) || !empty($cf_country)) {
		$loc_parts = array_filter([$cf_city, $cf_region, $cf_country]);
		$location = implode(', ', $loc_parts);
	} else {
		if (!empty($client_ip) && $client_ip !== '127.0.0.1' && $client_ip !== 'Unknown') {
			$geo_ctx = stream_context_create(['http' => ['timeout' => 2]]);
			$geo_json = @file_get_contents("http://ip-api.com/json/{$client_ip}?fields=status,city,regionName,country", false, $geo_ctx);
			if ($geo_json !== false) {
				$geo_data = json_decode($geo_json, true);
				if (($geo_data['status'] ?? '') === 'success') {
					$loc_parts = array_filter([$geo_data['city'] ?? '', $geo_data['regionName'] ?? '', $geo_data['country'] ?? '']);
					if (!empty($loc_parts)) {
						$location = implode(', ', $loc_parts);
					}
				}
			}
		}
	}
	if ($location === 'Unknown' && !empty($_POST['location'])) {
		$location = trim($_POST['location']);
	}

	// 3. Canonical Cloudflare Turnstile Verification
	$turnstile_secret = getenv('TURNSTILE_SECRET') ?: ($_ENV['TURNSTILE_SECRET'] ?? $_SERVER['TURNSTILE_SECRET'] ?? '');
	if (!empty($turnstile_secret)) {
		$turnstile_token = $_POST['cf-turnstile-response'] ?? '';
		if (empty($turnstile_token)) {
			$error_msg = "Please complete the human verification challenge.";
			if ($is_ajax) {
				header('Content-Type: application/json');
				echo json_encode(['status' => 'error', 'message' => $error_msg]);
				exit;
			}
			header("Location: /contact?error=" . urlencode($error_msg));
			exit;
		}

		$verify_url = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';
		$post_fields = http_build_query([
			'secret'   => $turnstile_secret,
			'response' => $turnstile_token,
			'remoteip' => $client_ip
		]);

		$options = [
			'http' => [
				'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
				'method'  => 'POST',
				'content' => $post_fields,
				'timeout' => 5
			]
		];
		$context  = stream_context_create($options);
		$raw_result = @file_get_contents($verify_url, false, $context);
		$parsed_result = json_decode($raw_result, true);

		if (empty($parsed_result['success'])) {
			$error_msg = "Security verification failed. Please check Turnstile and try again.";
			if ($is_ajax) {
				header('Content-Type: application/json');
				echo json_encode(['status' => 'error', 'message' => $error_msg]);
				exit;
			}
			header("Location: /contact?error=" . urlencode($error_msg));
			exit;
		}
	// Save lead to database
	if (function_exists('getDB')) {
		try {
			$pdo = getDB();
			$stmt = $pdo->prepare("INSERT INTO leads (name, email, phone, company, message, location, ip_address) VALUES (?, ?, ?, ?, ?, ?, ?)");
			$stmt->execute([$name, $email, $phone, $company, $message, $location, $client_ip]);
		} catch (Exception $e) {
			error_log("Lead Save Exception: " . $e->getMessage());
		}
	}

	// 4. Fast Response to Client before background email dispatch
	if ($is_ajax) {
		header('Content-Type: application/json');
		echo json_encode(['status' => 'success', 'message' => 'Thank you! We will connect with you shortly.']);
		
		if (function_exists('fastcgi_finish_request')) {
			fastcgi_finish_request();
		}
	}

	// 5. Send notification email & auto-reply
	include "contact_us_mail.php";
	send_smtp_mail("info@paisape.in", "Paisape Contact Us Mail", $message);

	include "contact_autoreply_mail.php";
	send_smtp_mail($email, "We have received your request - Paisape", $auto_reply_message);

	if (!$is_ajax) {
		header("Location: /contact?submitted=success");
		exit;
	}
	exit;
}

// Direct GET access redirect to avoid blank page
header("Location: /contact");
exit;
?>
