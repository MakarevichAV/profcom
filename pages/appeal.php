<?php
    // Подключение title 
    $title = 'Обращение';
    $main = '/index.php/';

    include($_SERVER['DOCUMENT_ROOT'].'/modules/head.php');
    include($_SERVER['DOCUMENT_ROOT'].'/modules/menu.php');
?>

<div class="content">
    <h2 class="margin-bottom50 margin-top50">Обращение в профсоюз</h2>
    <div class="content-text margin-bottom20">
        <p class="bold margin-bottom20">Уважаемые члены профсоюза!</p>
        <p class="margin-bottom20"> 
            Вы можете отправить нам жалобу в случае несправедливого отношения к Вам со стороны руководства. Или, может быть, Вас заставляют выполнять работу не вашей квалификации.
            Или вы просто хотите написать обращение с пожеланиями или предложениями. 
        </p>
        <p class="margin-bottom20">
            Пишите нам по интересующим и волнующим Вас вопросам.
        </p>
    </div>
    
    <div class="content-text margin-bottom20">
        <form class="appeal-form" action="/handlers/addAppeal.php" method="post">
            <input class="user-input margin-bottom10" type="text" name="fio" placeholder="ФИО">
            <input class="user-input margin-bottom10" type="text" name="tel" placeholder="Телефон без пробелов с 8">
            <input class="user-input margin-bottom10" type="text" name="email" placeholder="e-mail">
            <textarea class="appeal margin-bottom10" name="appeal" rows="8"></textarea>
            <input class="user-input margin-bottom10 submit" type="submit" value="Отправить сообщение">
        </form>
    </div>
</div>

<?php
    include($_SERVER['DOCUMENT_ROOT'].'/modules/footer.php');
?> 