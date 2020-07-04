<?php
$to         = 'kawagringo2@gmail.com';
$firstName  = $_POST['First name'];
$lastName   = $_POST['Last name'];
$email      = $_POST['Email'];
$mobile     = $_POST['Mobile'];
$message    = $_POST['Message']
$subject    = 'Message from Gardening Website - from: ' . $firstName ' (' .$email . ')';
$headers    = 'From: ' . $firstName ' (' .$email . ')';
$headers    = "Content.Type: text/html; charset=utf-8\r\n";

mail($to, $subject, $message, $headers);

?>