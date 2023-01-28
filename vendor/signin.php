<?php
session_start();
require 'config.php';
$login = $_POST['login'];
$password = $_POST['password'];
$valid = mysqli_query($connect, "SELECT * FROM `WindowAcc` WHERE `login` = '$login' AND `passsword` = '$password'");
if (mysqli_num_rows($valid) > 0){
    
}else{
    $_SESSION['message'] = 'Неправильный логин или пароль';
    header('Location: ../login.php');
}
?>