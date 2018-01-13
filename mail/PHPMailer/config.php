<?php

// Mail address config
$receiver = "to@yourdomain.com";
$sender = "from@yourdomain.com";

// Optional
$receiverName = "Receiver";
$senderName = "Sender";

function send($phpMailer)
{
    //From email address and name
    $mail->From = $sender;
    $mail->FromName = $senderName;

    //To address and name
    $mail->addAddress($receiver, $receiverName);

    $mail->isHTML(true);
    $mail->Subject = "Subject Text";
    $mail->Body = "<i>Mail body in HTML</i>";
    $mail->AltBody = "This is the plain text version of the email content";

    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message has been sent successfully";
    }                 
}