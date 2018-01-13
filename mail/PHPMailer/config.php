<?php

// Mail address config
$config['receiver'] = "to@yourdomain.com";
$config['sender'] = "form@yourdomain.com";
// Mail server
$config['Host'] = "";
$config['SMTPAuth'] = true;
$config['Username'] = "";
$config['Password'] = "";

// Optional
$config['receiverName'] = "Receiver";
$config['senderName'] = "Sender";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

//PHPMailer Object
$phpMailer = new PHPMailer;

$phpMailer->Host = $config['Host'];
$phpMailer->SMTPAuth = $config['SMTPAuth'];
$phpMailer->Username = $config['Username'];
$phpMailer->Password = $config['Password'];

$phpMailer->isSMTP();
$phpMailer->SMTPDebug = 2;

//From email address and name
$phpMailer->From = $config['sender'] ;
$phpMailer->FromName = $config['senderName'] ;

//To address and name
$phpMailer->addAddress($config['receiver'] , $config['receiverName']);

$phpMailer->isHTML(true);
$phpMailer->Subject = "Subject Text";
$phpMailer->Body = "<i>Mail body in HTML</i>";
$phpMailer->AltBody = "This is the plain text version of the email content";


function send($phpMailer)
{
    if (!$phpMailer->send()) {
        echo "Mailer Error: " . $phpMailer->ErrorInfo;
    } else {
        echo "Message has been sent successfully";
    }                 
}