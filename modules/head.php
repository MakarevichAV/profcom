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
        

    

