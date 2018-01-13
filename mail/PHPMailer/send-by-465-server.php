<?php

require_once "config.php";

/**
 * Mail server connection by SSL
 */
$phpMailer->Port = 465;
$phpMailer->SMTPSecure = "ssl";
// $phpMailer->SMTPAutoTLS = false;
// Options for SSL
$phpMailer->SMTPOptions = [
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true,
        ]
    ]; 

return send($phpMailer);
