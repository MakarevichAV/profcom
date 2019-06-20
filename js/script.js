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


// Валидация форм отправки заявки о вступлении в профком и формы обращения
$('.form').submit( function () {
    
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
        $('.form').submit();
    }

    return false;

} );

// Валидация формы входа в аккаунт
$('.form-enter').submit( function () {
    
    let login = $('[name="login"]'),
        password = $('[name="password"]');

    if (    login.val() == '' || 
            password.val() ==  '' 
        ) {
                checkForEmpty(login);
                checkForEmpty(password);
    } else {
        $('.form-enter').submit();
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
// при клике на "Войти" открытие всплывающего окна popup
let enter = $('.enter');
let popup = $('.popup');

enter.click( function () {

    popup.addClass('flex');

} );

// закрытие popup при нажатии на крестик или на "Вступить в профсоюз" или на Esc
let cross = $('.cross');
let join = $('.join');

cross.click( function () {

    popup.removeClass('flex');

} );

join.click( function () {

    popup.removeClass('flex');

} );


            // Действия со стрелкой вверх "в начало страницы" 
// Появление стрелки вверх при пролистывании
let arrow = $('.arrow-up');

$(window).scroll( function () {

    if ( window.scrollY > 200 ) {
        arrow.addClass('block');
    } else {
        arrow.removeClass('block');
    }

} );

// Клик по стрелке и переход в начало страницы
arrow.click( function () {

    let target = $(this).attr('href');

    if ( target != undefined && target != '' ) {
        $('html').animate( {
            scrollTop: $(target).offset().top
        }, 400 );
    }
    return false;

} );


            // Открытие и закрытие меню в мобильной верстке

let clickExit = $('.cross-menu, .menu-item');
let menuButton = $('.menu-button, .line');
// let crossMenu = $('.cross-menu');
// let menuItem = $('.menu-item');
let nav = $('.nav');

menuButton.click( function () {
    // let nav = $('.nav');
    nav.addClass('right-0');
} );

clickExit.click( function () {
    nav.removeClass('right-0');
} );

$(document).click( function (e) {
    if ( !nav.is(e.target) && !menuButton.is(e.target) ) {
        nav.removeClass('right-0');
    }
} );


            // AJAX  // *
let exit = document.querySelector('.exit');

exit.addEventListener( 'click', function () {

    let xhr = new XMLHttpRequest;
    xhr.open( 'GET', `/handlers/head.php?exit=true` );
    xhr.send();
    xhr.addEventListener( 'load', function () {
        let data = JSON.parse(xhr.responseText);
        console.dir(data);
    } );

} );

