<?php

require_once "config.php";

/**
 * Mail server connection by TLS
 */
$phpMailer->Port = 25;
$phpMailer->SMTPSecure = false;
$phpMailer->SMTPAutoTLS = false;

return send($phpMailer);