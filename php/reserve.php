<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $clientname=$get['clientname'];
    $clientemail=$get['clientnemail'];
    $clientdate=$get['clientdate'];
    $clienttime=$get['clienttime'];
    $clientnpersons=$get['clientnperson'];
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.freesmtpservers.com';                     //Set the SMTP server to send through                                   //Enable SMTP authentication
    $mail->Port       = 25;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->setFrom(strval($clientemail), 'khona'); //sender
    $mail->addAddress('mccafe@cafe.com');     //receiver (ME)

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Reservation';
    $bodyhtml =sprintf('<h1> %s </h1><h2> %s </h2><h3> %s </h3><h3> %s </h3><h3> %s </h3>',strval($clientname) 
    ,strval($clientemail),strval($clientemail),strval($clientdate),strval($clienttime),strval($clientnpersons));
    $mail->Body    = $bodyhtml;
    $mail->AltBody = 'sorry yout mail service doesn\'t support html';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}