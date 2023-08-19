<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    
    $chat_id = "798768713"; // Замените на ваш chat_id
    $bot_token = "6589231306:AAENatTz3oLLRpMQIBCT-4SMZ-4MYYaqHpg"; // Замените на ваш токен

    $message = "Имя: $name\nТелефон: $phone";

    $url = "https://api.telegram.org/bot$bot_token/sendMessage";
    $params = [
        'chat_id' => $chat_id,
        'text' => $message
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    if ($response) {
        echo "Спасибо за отправку!";
    } else {
        echo "Произошла ошибка при отправке.";
    }
}
?>
