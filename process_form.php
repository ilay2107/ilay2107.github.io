<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];

    // Отправка письма на почту
    $to = "rogovtsevilia@gmail.com"; // Замените на ваш адрес электронной почты
    $subject = "Новое сообщение с формы";
    $message = "Имя: $name\nТелефон: $phone";
    $headers = "From: webmaster@example.com";

    mail($to, $subject, $message, $headers, $to);
}
?>
