<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    if (isset($_POST['clientname']))
        $name = $_POST['clientname'];

    if (isset($_POST['clientnemail']))
        $email = $_POST['clientnemail'];

    if (isset($_POST['clientdate']))
        $date = $_POST['clientdate'];

    if (isset($_POST['clienttime']))
        $time = $_POST['clienttime'];

    if (isset($_POST['clientnperson']))
        $persons = $_POST['clientnperson'];

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();                                            //Send using SMTP 
    $mail->Host       = 'DESKTOP-J22OBA1';
    $mail->Port       = 25;                                    
    $mail->setFrom(strval($email), $name); // sender
    $mail->addAddress('mccafe@safi.ma');     //receiver (ME)

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Reservation !';
    $htmlbody = "<h2>From: $name</h2> <br> <h2>Email: $email </h2> <br> <h2>Reservation Date: $date </h2> <br> <h2>Reservation time: $time </h2> <br> <h2> Number of Persons: $persons</h2>";
    $mail->Body    = $htmlbody;
    $mail->AltBody = "sorry your mail provider doesn't support html";

    $mail->send();
    echo 'Message has been sent';
    header('Location: ../index.html');

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
