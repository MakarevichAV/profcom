<?php
    if (!isset($main)) {
        $main = '';
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/style.css">
    <title><?=$title?></title>
</head>
<body>
    <div class="wrapper">
        <div class="head">
            <div class="logo">
                <div class="logo-pic margin-right15"></div>
                <div class="logo-text">
                    Профсоюз<br />ЦИАМ
                </div>
            </div>
            <div class="nav">
                <a href="/index.php" class="menu-item">Главная</a>
                <a href="<?=$main?>#politics" class="menu-item">Цели<br />и задачи</a>
                <a href="/pages/news.php" class="menu-item">Новости</a>
                <a href="<?=$main?>#contact" class="menu-item margin-bottom10">Контакты</a>
                <a href="/pages/appeal.php" class="menu-item">Обращение</a>
                <a href="<?=$main?>#join" class="menu-item">Вступить<br />в профсоюз</a>

            </div>
        </div>
        <p class="enter margin-top10">Войти</p>

        <!-- всплывающее окно входа в систему -->
        <div class="popup">
            
        </div>
        

    

