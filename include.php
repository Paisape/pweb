<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE & ~E_DEPRECATED);

include "core/dbFunctions.php";
include_once "core/errors.php";
include_once 'core/PHPMailerAutoload.php';
include_once 'core/mail.php';

$o = new stdClass();
$o1 = new stdClass();
$o2 = new stdClass();
$o3 = new stdClass();
$o4 = new stdClass();
$o5 = new stdClass();
$o6 = new stdClass();
$o7 = new stdClass();
$o8 = new stdClass();
$o9 = new stdClass();
$o10 = new stdClass();


if (isset($_POST['updte'])) {
	$updte = $_POST['updte'];
} else {
	$updte = 0;
}

$fetchType = "array";

$redirect_session = 0;

$result['error'] = 1;
$result['error_msg'] = "Something went wrong. Please try again";
$charts = 0;
$tables = 0;
$ajax_logout = 0;
$kyc_id = 1;

if (isset($_GET['msgid'])) {
	$msg_id = $_GET['msgid'];
} else {
	$msg_id = 0;
}

?>
