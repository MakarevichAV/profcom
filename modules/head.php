<?php
    include($_SERVER['DOCUMENT_ROOT'].'/php/connect.php');
    include($_SERVER['DOCUMENT_ROOT'].'/php/functions.php');

    if (!isset($main)) {
        $main = '';
    }

    // Вход в аккаунт, проверка логина и пароля, открытие сессии
    if ( !empty($_POST) ) {

        if ( isset($_POST['login']) && isset($_POST['password']) ) {

            $login = $_POST['login'];
            $password = md5(md5($_POST['password']));

            $login = 'admin';
            $password = 'admin';

            $qr = "SELECT * FROM `registered` WHERE `login` = '$login' AND `password` = '$password'";
            $result = mysqli_query($connect, $qr);
            $row = mysqli_fetch_assoc($result);

            // d($result);

            if ( mysqli_num_rows($result) == 1 ) {
                
                session_start();

                $_SESSION = [
                    'user' => $row
                ];

                $txtForUser = $_SESSION['user']['login'];

                // d($_SESSION);

                if ( $txtForUser == 'admin' ) {
                    $access = "
                        <div class='access'>
                            <a class='admin-nav' href='/admin/applications.php'>Заявки</a>
                            <a class='admin-nav' href='/admin/news.php'>Новости</a>
                            <a class='admin-nav' href='/admin/appeal.php'>Обращения</a>
                        </div>
                    ";
                }

            }

        } else {
            $error = 'Не правильный логин или пароль';    
        }

    } else {
        $error = 'Что-то пошло не так. Попробуйте еще раз.';
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

    <?php
        if ( isset($access) ) {
            echo $access;
        }
    ?>

    <div class="wrapper">
        <div class="head">
            <p class="text-for-user">
                <?php
                    if ( isset($txtForUser) ) {
                        echo $txtForUser;
                    }
                ?>
            </p>
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
                <form class="form-enter" method="post">
                    <p class="enter-text margin-bottom20">Войти могут только зарегистрированные члены профсоюза!</p>
                    <a href="<?=$main?>#join" class="join inline-block margin-bottom20">Вступить в профсоюз</a>
                    <input class="enter-input margin-bottom10" type="text" name="login" placeholder="Логин">
                    <input class="enter-input margin-bottom10" type="password" name="password" placeholder="Пароль">
                    <input class="enter-input margin-bottom10 submit" type="submit" value="Войти">
                </form>
            </div>
        </div>
        

    

