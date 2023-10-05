<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "rbru-metrika@yandex.ru";
    $subject = "Новое сообщение с всплывающей формы";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Сообщение успешно отправлено!";
    } else {
        echo "Произошла ошибка при отправке сообщения.";
    }
}
?>