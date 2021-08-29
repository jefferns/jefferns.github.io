<?php

require_once('files/PHPMailer/PHPMailerAutoload.php')

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'jeffernswebsite@gmail.com';
$mail->Password = 'iKBr5D7-Ykf!zJ.'
$mail->SetFrom('no-reply@jefferns.github.io');
$mail->Subject = 'Hello world';
$mail->Body = 'Test';
$mail->AddAddress('jefferns@mail.uc.edu');

$mail->Send();
?>