<?php
require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

if(empty($login) || empty($pass)) 
{
    echo "Некоторые из полей не заполнены!";
} else {
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()) {
            echo "Добро пожаловать! " . $row['login'];
        }
    } else {
    echo "Такой пользователь не найден.";
    }
}