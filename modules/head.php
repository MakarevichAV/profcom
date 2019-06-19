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
<body id="top">
    <div class="wrapper">
        <div class="head">
            <div class="logo">
                <div class="logo-pic margin-right15"></div>
                <div class="logo-text">
                    Профсоюз<br />ЦИАМ
                </div>
            </div>
            <div class="nav">
                <div class="cross-menu"></div>
                <a href="/index.php" class="menu-item margin-bottom-mob15">Главная</a>
                <a href="<?=$main?>#politics" class="menu-item margin-bottom-mob15">Цели<br />и задачи</a>
                <a href="/pages/news.php" class="menu-item margin-bottom-mob15">Новости</a>
                <a href="<?=$main?>#contact" class="menu-item margin-bottom-mob15">Контакты</a>
                <a href="/pages/appeal.php" class="menu-item margin-bottom-mob15">Обращение</a>
                <a href="<?=$main?>#join" class="menu-item">Вступить<br />в профсоюз</a>
            </div>
            <div class="menu-button">
                <div class="line line1"></div>
                <div class="line line2"></div>
                <div class="line line3"></div>
            </div>
        </div>
        <p class="enter margin-top10">Войти</p>

        <!-- всплывающее окно входа в систему -->
        <div class="popup">
            <div class="window-popup">
                <div class="cross"></div>
                <form action="enter.php">
                    <p class="enter-text margin-bottom20">Войти могут только зарегистрированные члены профсоюза!</p>
                    <a href="<?=$main?>#join" class="join inline-block margin-bottom20">Вступить в профсоюз</a>
                    <input class="enter-input margin-bottom10" type="text" name="login" placeholder="Логин">
                    <input class="enter-input margin-bottom10" type="password" name="password" placeholder="Пароль">
                    <input class="enter-input margin-bottom10 submit" type="submit" value="Войти">
                </form>
            </div>
        </div>
        

    

