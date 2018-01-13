<?php

// Receiver
$receiver = "myintaer@gmail.com";

// The message
$msg = "First line of text第一行\nSecond line of text第二行";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
echo mail($receiver, "My subject", $msg);
