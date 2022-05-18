<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once '/PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->isHTML(true);

$mail->setFrom('xleb2342@gmail.com', 'user');    // от кого
$mail->addAddress('adfkjgfhdsjfhfsvjlkd@gmail.com');   // кому
 

$title = "da";
$body = "";

if(trim(!empty($_POST['first_name']))){
    $body.='<b>Имя:</b> '.$_POST[first_name].'<br>';
}
if(trim(!empty($_POST['last_name']))){
    $body.='<b>Фамилия:</b> '.$_POST[last_name].'<br>';
}
if(trim(!empty($_POST['email']))){
    $body.='<b>Почта:</b> '.$_POST[email].'<br>';
}
if(trim(!empty($_POST['tel']))){
    $body.='<b>Номер:</b> '.$_POST[tel].'<br><br>';
}
if(trim(!empty($_POST['text']))){
    $body.='<b>Сообщение:</b><br><br> '.$_POST[text];
}

$mail->Body = $body;

// Отправляем
$mail->send();
    echo 'Message has been sent';

?>