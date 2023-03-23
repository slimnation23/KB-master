<?php
   $email = $_POST['email'];

    $subject = "=?utf-8?B?".base64_encode("Сообщения с сайта").'?=';
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

   $success = mail('slimnation2@gmail.com', $subject, $message, $headers);
   echo $success;
?>
