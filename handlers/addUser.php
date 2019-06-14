<?php
    // Подключение коннекта с базой данных и функции для вывода массиввов
    include($_SERVER['DOCUMENT_ROOT'].'/php/connect.php');

    // Подключение title 
    $title = 'Обращение';

    $message = ''; // сюда будет записываться сообщение для пользователя
    // Проверка на пустоту массива $_POST
    if (!empty($_POST)) {

        // Проверяем на заполнение всех инпутов через цикл
        $resultEmpty = true;
        foreach ( $_POST as $ind => $val ) {
            // в каждой иттерации проверяем на пустоту элемент массива
            if ( empty($_POST[$ind]) ) {
                $resultEmpty = false;
                break;
            }

        }

        if ($resultEmpty == true) {   // если все инпуты заполнены (не пусты)

            // Данные из массива $_POST
            $fio = $_POST['fio'];
            $tel = $_POST['tel'];
            $email = $_POST['email'];

            $message = "
                <div class='content'>
                <h2 class='margin-top50 margin-bottom10'>Здравствуйте</h2>
                <p class='content-text margin-bottom20 align-center bold'>$fio</p>
                <p class='content-text margin-bottom20'>Благодарим Вас за заявку. Мы свяжемся с вами по телефону <span class='bold'>$tel</span> или по электронной почте <span class='bold'>$email</span></p>
                </div>
            ";
            // d($_POST);

        } else {
            $message = "
                <div class='content'>
                <h2 class='margin-top50 margin-bottom10'>!Вернитесь и заполните все поля формы!</h2>
                </div>
            ";
        }

    } else {
        $message = "
            <div class='content'>
            <h2 class='margin-top50 margin-bottom10'>!Вернитесь и заполните все поля формы!</h2>
            </div>
        ";
    }



    include($_SERVER['DOCUMENT_ROOT'].'/modules/head.php');
    include($_SERVER['DOCUMENT_ROOT'].'/modules/menu.php');

?>
    <!-- Вставляем сообщение для пользователя -->
    <?=$message?>
<?php
    include($_SERVER['DOCUMENT_ROOT'].'/modules/footer.php');
?>  