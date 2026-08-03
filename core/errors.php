<?php

if (isset($_GET['msgid'])) {
	$msgID = $_GET['msgid'];
}

function getERRORS($msgID) {

	if ($msgID > 0) {
		switch ($msgID) {
		case 0:
			$msg = "Your message not sent";
			break;
		case 1:
			$msg = "Your message has been sent. Thank you!";
			break;

		default:
			$msg = "Something went wrong. Please try again";
			break;
		}
	}

	if ($msgID > 0) {
		//return "<div class='alert alert-danger'>" . $msg . "</div>";
		return $msg;
	}
}

?>