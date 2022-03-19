<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$mail = new PHPMailer(true);

try {

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'DESKTOP-J22OBA1';
    $mail->Port       = 25;

    $mail->setFrom("testaaa@gmail.com"); //sender
    $mail->addAddress('mccafe@safi.ma');     //receiver (ME)

    //Content
    $mail->isHTML(true);
    $mail->Subject = "New Message from Clients !";
    $mail->Body    = "From:a \nEmail: a \nMessage: a";
    $mail->AltBody = "sorry your mail provider doesn't support html";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
