<?php
session_start();
require 'config.php';
$login = $_POST['login'];
$password = $_POST['password'];
$valid = mysqli_query($connect, "SELECT * FROM `WindowAcc` WHERE `login` = '$login' AND `password` = '$password'");
if (mysqli_num_rows($valid) > 0){
    $user = mysqli_fetch_assoc($valid);

    $_SESSION['user'] = [
        "login" => $user['login'],
        "full_name" => $user['full_name'],
        "email" => $user['email'],
        "password" => $user['password']
    ];
    header('Location: ../profile.php');

}else{

    $_SESSION['message'] = 'Неправильный логин или пароль';

}
?>