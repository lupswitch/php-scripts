<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";
require_once "config.php";

//PHPMailer Object
$mail = new PHPMailer;

$mail->IsSMTP();
$mail->SMTPDebug = 2;

/**
 * Mail server connection
 */
$mail->Host = "";
// SMTP 25 without secure connection
$mail->Port = 25;
$mail->SMTPSecure = false;
$mail->SMTPAutoTLS = false;
// Auth
$mail->SMTPAuth = true;
$mail->Username = "";
$mail->Password = "";

return send($mail);
