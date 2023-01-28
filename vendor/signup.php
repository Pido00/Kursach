<?php
session_start();
require 'config.php';
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordconfirm = $_POST['passwordconfirm'];
if ($password === $passwordconfirm){
    mysqli_query($connect, "INSERT INTO `WindowAcc` (`id`, `login`, `email`, `password`) VALUES (NULL, '$login', '$email', '$password')");
    $_SESSION['message'] = 'Аккаунт успешно создан';
    header('Location: ../login.php');
}else{
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../registr.php');
}
?>

