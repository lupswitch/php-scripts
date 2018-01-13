<?php

// Mail address config
$config['receiver'] = "to@yourdomain.com";
$config['sender'] = "from@yourdomain.com";

// Optional
$config['receiverName'] = "Receiver";
$config['senderName'] = "Sender";

function send($phpMailer)
{
    global $config;
    
    //From email address and name
    $phpMailer->From = $config['sender'] ;
    $phpMailer->FromName = $config['senderName'] ;

    //To address and name
    $phpMailer->addAddress($config['receiver'] , $config['receiverName']);

    $phpMailer->isHTML(true);
    $phpMailer->Subject = "Subject Text";
    $phpMailer->Body = "<i>Mail body in HTML</i>";
    $phpMailer->AltBody = "This is the plain text version of the email content";

    if (!$phpMailer->send()) {
        echo "Mailer Error: " . $phpMailer->ErrorInfo;
    } else {
        echo "Message has been sent successfully";
    }                 
}