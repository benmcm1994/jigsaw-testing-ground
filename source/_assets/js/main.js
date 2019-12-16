require('bootstrap');
window.$ = window.jQuery = require('jquery');
window.Popper = require('popper.js').default;

$(document).ready(function () {

    function toggleOffcanvas(){
        $('.header__bottombar-navbar-collapse').toggleClass('header__bottombar-navbar-collapse_open')

        setTimeout(function(){
            $('.header__topbar-navbar-toggle__menu').toggle();
            $('.header__topbar-navbar-toggle__exit').toggle();
        }, 300);

        $('body').toggleClass('noScroll');

    }

    $('.header__bottombar-navbar-collapse-bar__exit').on('click', function(){
        toggleOffcanvas();
    })

    $('[data-toggle="offcanvas"]').on('click', function () {
        toggleOffcanvas();
    })

});

