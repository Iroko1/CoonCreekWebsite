<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require '/home/dh_k6mr2q/PHPMailer/src/Exception.php';
// require '/home/dh_k6mr2q/PHPMailer/src/PHPMailer.php';
// require '/home/dh_k6mr2q/PHPMailer/src/SMTP.php';
require 'C:\xampp\htdocs\PHPMailer\src\Exception.php';
require 'C:\xampp\htdocs\PHPMailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\PHPMailer\src\SMTP.php';

define('MAILHOST', 'smtp.gmail.com');
define('USERNAME', 'totokori1@gmail.com');
define('PASSWORD', 'yfrqtkpsvfmzpasn');
define('SEND_FROM', 'totokori1@gmail.com');
define('SEND_FROM_NAME', 'Matt');
define('REPLY_TO', 'totokori1@gmail.com');
define('REPLY_TO_NAME', 'Matt');


function sendMail($email, $subject, $message) {
    $mail = new PHPMailer(true);


    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = MAILHOST;
    $mail->Username = USERNAME;
    $mail->Password = PASSWORD;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom(SEND_FROM, SEND_FROM_NAME);
    $mail->addAddress($email);
    $mail->addReplyTo(REPLY_TO, REPLY_TO_NAME);

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AltBody = strip_tags($message);

    if (!$mail->send()) {
        return false;
    } else {
        return true;
    }

}
