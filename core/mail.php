<?php
function send_smtp_mail($email_to, $email_subject, $email_message) { 
    require_once 'PHPMailerAutoload.php'; 
    @include_once __DIR__ . '/../config.php'; 
    @include_once __DIR__ . '/db.php';

    $db_settings = [];
    if (function_exists('getDB')) {
        try {
            $pdo = getDB();
            $db_settings = $pdo->query("SELECT setting_key, setting_value FROM settings WHERE setting_key LIKE 'smtp_%' OR setting_key LIKE 'contact_%'")->fetchAll(PDO::FETCH_KEY_PAIR);
        } catch (Exception $e) {}
    }

    $smtp_host = getenv('SMTP_HOST') ?: ($db_settings['smtp_host'] ?? 'smtp.resend.com');
    $smtp_user = getenv('RESEND_USER') ?: (getenv('SMTP_USER') ?: ($db_settings['smtp_user'] ?? 'resend'));
    $smtp_pass = getenv('RESEND_API_KEY') ?: (getenv('SMTP_PASS') ?: ($db_settings['smtp_pass'] ?? ''));
    $smtp_port = getenv('SMTP_PORT') ?: ($db_settings['smtp_port'] ?? 587);
    $smtp_from = getenv('SMTP_FROM') ?: ($db_settings['smtp_from'] ?? 'paispe@mail.paisape.in');
    $smtp_from_name = getenv('SMTP_FROM_NAME') ?: ($db_settings['smtp_from_name'] ?? 'Paisape Support');

    $mail = new PHPMailer; 
    $mail->isSMTP(); 
    $mail->Host = $smtp_host; 
    $mail->SMTPAuth = true; 
    $mail->Username = $smtp_user; 
    $mail->Password = $smtp_pass; 
    $mail->SMTPSecure = 'tls'; 
    $mail->Port = intval($smtp_port); 
    $mail->Timeout = 5;
    $mail->setFrom($smtp_from, $smtp_from_name); 
    $mail->addAddress($email_to); 
    $mail->addReplyTo($db_settings['contact_email'] ?? 'hello@paisape.in', $smtp_from_name); 
    $mail->isHTML(true); 
    $mail->Subject = $email_subject; 
    $mail->Body = $email_message; 
    return $mail->send(); 
}
?>
