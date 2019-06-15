<?php
    // Подключение к базе данных
    $connect = mysqli_connect('localhost', 'root', '', 'profcom');
    mysqli_set_charset($connect, "utf8");


    // Функция для вывода массивов
    function d($arr) {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }
?>