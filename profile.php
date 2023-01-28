<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="HeaderWrapper">
                <div class="Header">
                    <div class="LogoWrapper">
                        <a href="index.php"><img src="img/Logo.svg" alt="" class="Logo"></a>
                        <p>Ваш город: <a href="#" class="City">Москва</a></p>
                    </div>
                    <div class="AccWrapper"><a href="login.php"><img src="img/AccLogo.svg" alt="" class="AccLogo"></a></div>
                </div>
            </div>

            <div class="AccCard">
               <h2><?= $_SESSION['user']['login'] ?></h2>
               <h2><?= $_SESSION['user']['email'] ?></h2>
               <a href="vendor/logout.php">Выйти</a>
            </div>

    <div class="FooterWrapper">
                <div class="Footer">
                    <p class="Copy">Copyright 2022</p>
                    <a href="#" class="ImgA"><img src="img/VK.svg" alt="" class="FooterImg"></a>
                </div>
         </div>
    </body>
</html>