<?php
function send_smtp_mail($email_to, $email_subject, $email_message) { 
    require_once 'PHPMailerAutoload.php'; 
    @include_once __DIR__ . '/../config.php'; 
    $mail = new PHPMailer; 
    $mail->isSMTP(); 
    $mail->Host = 'smtp.resend.com'; 
    $mail->SMTPAuth = true; 
    $mail->Username = getenv('RESEND_USER') ?: (defined('RESEND_USER') ? RESEND_USER : 'resend'); 
    $mail->Password = getenv('RESEND_API_KEY') ?: (defined('RESEND_API_KEY') ? RESEND_API_KEY : ''); 
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
?>
