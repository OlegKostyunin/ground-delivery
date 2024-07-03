<?php
require_once('db.php');
$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];
$email = $_POST['email'];


if(empty($login) || empty($pass) || empty($email)){
    echo "Некоторые поля не заполнены!";
} else  
{
    if($pass != $repeatpass){
        echo "Пароли не совпадают!";
    }else{
        $sql = "INSERT INTO `users` (login,pass,email) VALUES ('$login','$pass','$email')";
    if($conn -> query($sql) === TRUE){
        echo "Пользователь успешно зарегистрован! ";
    }
    else {
    echo "Ошибка регистрации: " . $conn->error;
    }
}
}
?>