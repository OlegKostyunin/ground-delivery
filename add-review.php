<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $text = htmlspecialchars($_POST['text']);
    $newReview = [
        'name' => $name,
        'text' => $text
    ];
    $file = 'reviews.json';
    $current_data = file_get_contents($file);
    $array_data = json_decode($current_data, true);
    if ($array_data === null) {
        $array_data = ['reviews' => []];
    }
    $array_data['reviews'][] = $newReview;
    $json_data = json_encode($array_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    if(file_put_contents($file, $json_data)) {
        echo "Отзыв успешно добавлен!";
    } else {
        echo "Ошибка при добавлении отзыва.";
    }
}
?>