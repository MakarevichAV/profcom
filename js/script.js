            // Плавный скрол при клике по пунктам меню 

$('.menu-item').click( function () {

    let target = $(this).attr('href');

    if ( target != undefined && target != '' ) {
        $('html').animate( {
            scrollTop: $(target).offset().top
        }, 400 );
    }
    return false;

} );



            // Проверка форм на заполнение

// Функция для проверки пустоты инпута
function checkForEmpty(inp, text) {
    if ( inp.val() == '' ) {
        inp.css({
            'border-color' : 'red'
        });
        let err = document.createElement('p');
        err.className = "error";

        if (text == undefined) {
            err.innerText = 'Заполните поле';
        } else {
            err.innerText = text;
        }

        if ( !inp.prev().is('.error') ) {
            inp.before(err);
        }
    } else {
        inp.removeAttr('style');
        if ( inp.prev().is('.error') ) {
            inp.prev().remove();
        }
    }
};



$('form').submit( function () {
    
    let fio = $('[name="fio"]'),
        position = $('[name="position"]'),
        unit = $('[name="unit"]'),
        tel = $('[name="tel"]'),
        email = $('[name="email"]');
    
    let textArea = $('[name="appeal"]');
    
    if (    fio.val() == '' || 
            position.val() ==  '' || 
            unit.val() == '' || 
            tel.val() == '' || 
            email.val() == '' || 
            textArea.val() == ''
        ) {
                checkForEmpty(fio);
                checkForEmpty(position);
                checkForEmpty(unit);
                checkForEmpty(tel);
                checkForEmpty(email);
                checkForEmpty(textArea, 'Напишите хотя бы в двух словах');
    } else {
        $('form').submit();
    }

    return false;

} );

        // Проверка на нажатие клавиш внутри полей формы
$('input').keyup( function () {

    // let inputValue = $(this).val();
    checkForEmpty( $(this ) );

} );

$('textarea').keyup( function () {

    // let inputValue = $(this).val();
    checkForEmpty( $(this ), 'Напишите хотя бы в двух словах' );

} );



            // Всплывающее окно входа 
// при клике на "Войти"

let enter = $('.enter');

enter.click( function () {
    
} );
