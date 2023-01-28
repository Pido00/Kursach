<?php
session_start();
if(!isset($_SESSION['user'])){
    echo "<script>self.location='login.php';</script>";
} else {
    header('Location: profile.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!-- Хедер -->
        <div class="HeaderWrapper">
            <div class="Header">
                <div class="LogoWrapper">
                    <a href="index.php"><img src="img/Logo.svg" alt="" class="Logo"></a>
                    <p>Ваш город: <a href="#" class="City">Москва</a></p>
                </div>
                <div class="AccWrapper"><a href="login.php"><img src="img/AccLogo.svg" alt="" class="AccLogo"></a></div>
            </div>

        </div>
        <div class="LoginWrapper">
            <form action="/vendor/signin.php" method="post" class="LoginForm">
                <input type="text" placeholder="login" name="login" class="LoginInput">
                <input type="password" placeholder="password" name="password" class="LoginInput">
                <button class="LoginBtn">Войти</button>
                <a href="registr.php" class="LoginA">Регистрация</a>
                <?php
                if ($_SESSION['message'] ?? false){
                    echo '<p>'.$_SESSION['message'].'</p>';
                }
                unset($_SESSION['message']);
                ?>
            </form>
        </div>
         <div class="FooterWrapper">
                <div class="Footer">
                    <p class="Copy">Copyright 2022</p>
                    <a href="#" class="ImgA"><img src="img/VK.svg" alt="" class="FooterImg"></a>
                </div>
         </div>
    </body>
</html>
