<?php

function querys($sql) {
    $con = connect_database();
    $result = $con->query($sql);
    if (!$result) {
        die("Error executing query: " . $con->error);
    }
    return $result;
}

function getXbyY($query) {
	$con = connect_database();
	$result = $con->query($query) or die($query . " " . mysqli_error($con));

	for ($set = array(); $row = $result->fetch_assoc(); $set[] = $row)
	;

	$con->close();
	return $set;
}

function setXbyY($query) {
	$con = connect_database();
	$result = $con->query($query) or die($query . " " . mysqli_error($con));
	$con->close();
	return $result;
}
 
###################################################################
//Start of function to get todays date
##################################################################

function todaysDate() {
	$tdate = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d"), date("y")));
	$tdate = $tdate . " " . date('H:i:s');
	return $tdate;
}

function currentTime() {
	$tdate = date('H:i:s');
	return $tdate;
}

###################################################################
//End of function to get todays date
##################################################################
###################################################################
//Start of function to convert date format to dd-mm-yyyy
##################################################################

function format_date($date) {
	$dd = explode(" ", $date);
	$dd1 = explode("-", $dd[0]);

	$new_date = $dd1[2] . "-" . $dd1[1] . "-" . $dd1[0] . "<br />" . $dd[1];
	return $new_date;
}

###################################################################
//End of function to convert date format to dd-mm-yyyy
##################################################################

####################################################################
//Start of function to convert date format to dd-mm-yyyy
##################################################################

function format_date_without_time($date) {
	$dd = explode(" ", $date);
	return $dd[0];
}

###################################################################
//End of function to convert date format to dd-mm-yyyy
##################################################################
###################################################################
//Start of function to convert date format to dd-mm-yyyy
##################################################################

function format_date_without_br($date) {
	$dd = explode(" ", $date);
	$dd1 = explode("-", $dd[0]);

	$new_date = $dd1[2] . "-" . $dd1[1] . "-" . $dd1[0] . " " . $dd[1];
	return $new_date;
}

###################################################################
//End of function to convert date format to dd-mm-yyyy
##################################################################
###################################################################
//Start of function to get todays date
##################################################################

function today_date_limit($tdate1) {
	if ($tdate == "") {
		$tdate1 = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d"), date("y")));
	}
	$tdate['start_time'] = $tdate1 . " 00:00:00";
	$tdate['end_time'] = $tdate1 . " 23:59:59";
	return $tdate;
}

###################################################################
//End of function to get todays date
##################################################################
#
#######################################################################################
//Start of function to create user defined password
#######################################################################################

function get_status($status) {
	if ($status == '1') {
		$str = '<span class="fa_approve">Active</span>';
	} else {
		$str = '<span class="fa_reject">Blocked</span>';
	}
	return $str;
}

#######################################################################################
//End of function to create user defined password
#######################################################################################

function getDates($ldate) {
	//$ldate2 = explode(" ", $ldate);
	$ldate1 = explode("/", $ldate);
	$id = $ldate1[1];

	switch ($id) {
	case 2:
		$monthNAME = "Feb";
		return $api_id;
	case 3:
		$monthNAME = "Mar";
		return $api_id;
	case 4:
		$monthNAME = "Apr";
		return $api_id;
	case 5:
		$monthNAME = "May";
		return $api_id;
	case 6:
		$monthNAME = "Jun";
		return $api_id;
	case 7:
		$monthNAME = "Jul";
		return $api_id;
	case 8:
		$monthNAME = "Aug";
		return $api_id;
	case 9:
		$monthNAME = "Sept";
		return $api_id;
	case 10:
		$monthNAME = "Oct";
		return $api_id;
	case 11:
		$monthNAME = "Nov";
		return $api_id;
	case 12:
		$monthNAME = "Dec";
		return $api_id;
	default:
		$monthNAME = "Jan";
		return $api_id;
	}

	// $rdate = $ldate1[2] . "-" . $ldate1[1] . "-" . $ldate1[0] . " " . $ldate2[1];
	$rdate = $ldate1[2] . "-" . $monthNAME . "-" . $ldate1[0];
	return $rdate;
}

###################################################################
//End of getdate function
##################################################################
###################################################################
//Start of function to get todays date
##################################################################

function todaysDate_only() {
	$tdate = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d"), date("y")));
	return $tdate;
}

###################################################################
//End of function to get todays date
##################################################################
###################################################################
//Start of function to get date only leaving time back
##################################################################

function format_date_only($date) {
	$dd = explode(" ", $date);
	$dd1 = explode("-", $dd[0]);
	$tdate = $dd1[2] . "/" . $dd1[1] . "/" . $dd1[0];
	return $tdate;
}

###################################################################
//End of function to get date only leaving time back
##################################################################
###################################################################
//Start of function to get todays date
##################################################################

function yesterday_date() {
	$tdate = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d") - 1, date("y")));
	return $tdate;
}

###################################################################
//End of function to get todays date
##################################################################
###################################################################
//Start of function to get start of month
##################################################################

function month_start() {
	$tdate = date("Y") . "-" . date("m") . "-01 00:00:00";
	return $tdate;
}

###################################################################
//End of function to get start of month
##################################################################
#######################################################################################
//To print the values for testing
#######################################################################################

function pt($val) {
	echo "<pre>";
	print_R($val);
	echo "</pre>";
}

#######################################################################################
//End of function To send mail attachments
#######################################################################################
###############################################################
//Start of function to get unique reference number
###############################################################

function reference_number() {
	$rand = rand(1000, 9999);
	$ref_number = abs(crc32(time()));
	$ref_number = $ref_number . "" . $rand;
	return $ref_number;
}


###############################################################
//End of function to get unique reference number
###############################################################

function mail_attachment($filename, $path, $mailto, $from_mail, $from_name, $replyto, $subject, $message) {

	$file = $path . "/" . $filename;
	$file_size = filesize($file);
	$handle = fopen($file, "r");
	$content = fread($handle, $file_size);
	fclose($handle);
	$content = chunk_split(base64_encode($content));

	$uid = md5(uniqid(time()));

	$header = "From: " . $from_name . " <" . $from_mail . ">\r\n";
	$header .= "Reply-To: " . $replyto . "\r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-Type: multipart/mixed; boundary=\"" . $uid . "\"\r\n\r\n";
	$header .= "This is a multi-part message in MIME format.\r\n";
	$header .= "--" . $uid . "\r\n";
	$header .= "Content-type:text/plain; charset=iso-8859-1\r\n";
	$header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
	$header .= $message . "\r\n\r\n";
	$header .= "--" . $uid . "\r\n";
	$header .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"\r\n";
	$header .= "Content-Transfer-Encoding: base64\r\n";
	$header .= "Content-Disposition: attachment; filename=\"" . $filename . "\"\r\n\r\n";
	$header .= $content . "\r\n\r\n";
	$header .= "--" . $uid . "--";

	// Messages for testing only, nobody will see them unless this script URL is visited manually
	if (mail($mailto, $subject, "", $header)) {
		//echo "Message sent!";
	} else {
		//echo "ERROR sending message.";
	}
}

###################################################################
//Start of function to for sendign attachments
##################################################################


###################################################################
//Start of function to Google send mail to the clients
##################################################################


function sendgooglemail($email_from, $email_to, $email_subject, $email_message) {

  require_once 'PHPMailerAutoload.php';
    @include_once __DIR__ . '/../config.php';

  $mail = new PHPMailer;

    //$mail->SMTPDebug = 2;                                     // Enable verbose debug output

    $mail->isSMTP();                                       // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';        // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                                // Enable SMTP authentication
    $mail->Username = 'bhanguz1510@gmail.com';                // SMTP username
    $mail->Password = 'apou npnv xixb zwcs';                          // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    $mail->setFrom('bhanguz1510@gmail.com');

    $mail->addAddress($email_to);     // Add a recipient
    $mail->addReplyTo('bhanguz1510@gmail.com');

    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = $email_subject;

    $mail->Body = $email_message;

    //$mail->Send();    

    if (!$mail->send()) {
        //echo 'Message could not be sent.';
        //echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        //echo 'Message has been sent';
        //$trv = 'Message has been sent';
    }

}

###################################################################
//End of Google mail function
##################################################################



###################################################################
//Start of function to Server send mail to the clients
##################################################################


function sendmail($email_from, $email_to, $email_subject, $email_message, $sender_name = 'Bhanguz') {

  require_once 'PHPMailerAutoload.php';
    @include_once __DIR__ . '/../config.php';

  $mail = new PHPMailer;

    //$mail->SMTPDebug = 2;

    $mail->isSMTP();
    $mail->Host = 'depro4.fcomet.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'hr@bhanguz.co.za';
    $mail->Password = 'J2r4EBb0&C~D';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('hr@bhanguz.co.za');

    $mail->addAddress($email_to);     // Add a recipient
    $mail->setFrom('hr@bhanguz.co.za', $sender_name);
    $mail->addReplyTo('hr@bhanguz.co.za');

    //$mail->addBcc("rks291999@gmail.com");

    //$mail->addAttachment('/var/tmp/file.tar.gz');
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');
    $mail->isHTML(true);

    $mail->Subject = $email_subject;

    $mail->Body = $email_message;

    //$mail->Send();    

    if (!$mail->send()) {
        // echo 'Message could not be sent.';
        // echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        // echo 'Message has been sent';
        // $trv = 'Message has been sent';
    }

}

###################################################################
//End of Server mail function
##################################################################


###############################################################
//function to upload files with thumbnails
###############################################################

function uploadimage($tmpfile, $source, $destination, $thumbnail, $newsize, $watermark) {
//echo "<pre>";print_r($_SERVER);
	$destinationname = $source . "/" . $destination;
	$target_filename = up_load_file($tmpfile, $destinationname);

	if ($thumbnail == 1) {
		$thumbnailfile = $source . "/thumbs/" . $destination;
		list($width, $height, $type, $attr) = getimagesize($destinationname);
		if ($width > $height) {
			$denominator = $width / $newsize;
		} else {
			$denominator = $height / $newsize;
		}

		$newWIDTH = floor(($width / $denominator));
		$newHEIGHT = floor(($height / $denominator));

		image_resize($destinationname, $thumbnailfile, $newWIDTH, $newHEIGHT);
	}
}

###################################################################
//End of upload function
##################################################################
###############################################################
//function to upload files
###############################################################

function up_load_file($source_file, $target_file) {
	$file_ext = substr(basename($target_file), strrpos(basename($target_file), "."));
	$dir_path = dirname($target_file);
	$base_name = basename($source_file);
	if (file_exists($target_file)) {
		$target_file = $dir_path . "/" . substr($base_name, 0, -4) . $file_ext;
	}

	if (!file_exists($target_file)) {
		copy($source_file, $target_file);
	} else {
		return false;
	}
	return basename($target_file);
}

###################################################################
//End of upload function
##################################################################
###################################################################
//Start of function to  create thumbnail
##################################################################

function image_resize($src, $dst, $width, $height) {

	if (!list($w, $h) = getimagesize($src)) {
		return "Unsupported picture type!";
	}

	$type = strtolower(substr(strrchr($src, "."), 1));
	if ($type == 'jpeg') {
		$type = 'jpg';
	}

	switch ($type) {
	case 'bmp':$img = imagecreatefromwbmp($src);
		return $api_id;
	case 'gif':$img = imagecreatefromgif($src);
		return $api_id;
	case 'jpg':$img = imagecreatefromjpeg($src);
		return $api_id;
	case 'png':$img = imagecreatefrompng($src);
		return $api_id;
	default:return "Unsupported picture type!";
	}

	$new = imagecreatetruecolor($width, $height);

	// preserve transparency
	if ($type == "gif" or $type == "png") {
		imagecolortransparent($new, imagecolorallocatealpha($new, 0, 0, 0, 127));
		imagealphablending($new, false);
		imagesavealpha($new, true);
	}

	imagecopyresampled($new, $img, 0, 0, $x, 0, $width, $height, $w, $h);

	switch ($type) {
	case 'bmp':imagewbmp($new, $dst);
		return $api_id;
	case 'gif':imagegif($new, $dst);
		return $api_id;
	case 'jpg':imagejpeg($new, $dst);
		return $api_id;
	case 'png':imagepng($new, $dst);
		return $api_id;
	}
	return true;
}

###################################################################
//end of function to create thumbnail
##################################################################
##############################################################
//function to upload files with thumbnails
###############################################################

function uploadimagepreview($tmpfile, $source, $destination, $thumbnail, $newsize, $watermark) {
	$destinationname = $source . "/" . $destination;

	if ($thumbnail == 1) {

		$thumbnailfile = $source . "/preview/" . $destination;

		list($width, $height, $type, $attr) = getimagesize($destinationname);
		if ($width > $height) {
			$denominator = $width / $newsize;
		} else {
			$denominator = $height / $newsize;
		}

		$newWIDTH = floor(($width / $denominator));
		$newHEIGHT = floor(($height / $denominator));

		image_resize($destinationname, $thumbnailfile, $newWIDTH, $newHEIGHT);
	}
}

###################################################################
//End of getdate function
##################################################################


#######################################################################################
//Start of function obfuscate_email
#######################################################################################
function obfuscate_email($email) {
    list($username, $domain) = explode('@', $email);
    $length = strlen($username);
    
    if ($length > 5) {
        $first_part = substr($username, 0, 3);
        
        $middle_part = str_repeat('x', $length - 5);
        
        $last_part = substr($username, -2);
        
        $new_username = $first_part . $middle_part . $last_part;
    } else {
        $new_username = $username;
    }
    
    return $new_username . '@' . $domain;
}
#######################################################################################
//End of function obfuscate_email
#######################################################################################

?>

function send_smtp_mail($email_to, $email_subject, $email_message) {
    require_once 'PHPMailerAutoload.php';
    @include_once __DIR__ . '/../config.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.resend.com';
    $mail->SMTPAuth = true;
    $mail->Username = defined('RESEND_USER') ? RESEND_USER : 'resend';
    $mail->Password = defined('RESEND_API_KEY') ? RESEND_API_KEY : '';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('paispe@mail.paisape.in', 'Paisape Support');
    $mail->addAddress($email_to);
    $mail->addReplyTo('hello@paisape.in', 'Paisape Support');
    $mail->isHTML(true);
    $mail->Subject = $email_subject;
    $mail->Body = $email_message;
    return $mail->send();
}

