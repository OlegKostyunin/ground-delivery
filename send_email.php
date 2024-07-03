<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST['username']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    // Укажите ваш адрес электронной почты, куда будут приходить сообщения
    $to = "olegmay2005@gmail.com";
    $subject = "Новая заявка от $username";
    $body = "Имя: $username\nТелефон: $phone\nEmail: $email\n\nСообщение:\n$message";

    // Заголовки
    $headers = "olegmay2005@gmail.com";

    // Отправка электронной почты
    if (mail($to, $subject, $body, $headers)) {
        http_response_code(200);
        echo "Сообщение отправлено успешно!";
    } else {
        http_response_code(500);
        echo "Ошибка отправки сообщения!";
    }
} else {
    http_response_code(403);
    echo "Доступ запрещен!";
}
?>