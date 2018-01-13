<?php

require_once "config.php";

/**
 * Mail server connection by TLS
 */
$phpMailer->Port = 587;
// $mail->SMTPSecure = "tls";
$phpMailer->SMTPAutoTLS = true;
// Options for TLS
$phpMailer->SMTPOptions = [
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true,
        ]
    ]; 

return send($phpMailer);
