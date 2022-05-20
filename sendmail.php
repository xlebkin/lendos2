<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.mail.ru';
    $mail->SMTPAuth = true;
    $mail->Username = 'xleb.xleb00@mail.ru';
    $mail->Password = 'dA2P1NroOi&s';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->CharSet = 'UTF-8';
    //Отправитель
    $mail->setFrom('xleb.xleb00@mail.ru');
    // Получатели
    $mail->addAddress('welipiy248@dufeed.com');

    //Контент сообщения
    $mail->isHTML(true);
    $mail->Subject = 'Мое первое сообщение далеко';
    $mail->Body    = 'Мое сообщение о новых';
    $mail->AltBody = 'Новое сообщение через mailer';
    $mail->send();
echo 'Сообщение успешно отправлено';
    } catch (Exception $e) {
        echo 'При отправке сообщения произошла следующая ошибка : ', $mail->ErrorInfo;
}
?>

