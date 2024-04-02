<?php
if (str_replace('\\', '/', __FILE__) === str_replace('\\', '/', $_SERVER['SCRIPT_FILENAME'])) {
    die('Access denied');
}
use PHPMailer\PHPMailer\PHPMailer;

try {
    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';


    $mail = new PHPMailer(true);


    $mail->isSMTP();
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'gymworld135@gmail.com';
    $mail->Password = 'iqot leko kcqf rnby';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;


    $mail->setFrom("noreply@gmail.com", "gymworld");
    $mail->addAddress($emailToSend, $name);


    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->AltBody = $mail->Body = $message;

    $mail->send();


} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}