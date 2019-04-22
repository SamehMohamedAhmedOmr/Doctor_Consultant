/*global $, window*/

$(function () {
    
    'use strict';
    
    
   // trigger niceScroll
    $('html, body').niceScroll({
        cursorcolor : '#009FE3',
        cursorborder : '1px solid #009FE3',
        zindex : 50
    });


    // Scroll
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 150) {
            $('.fixedScroll i').fadeIn();
        } else {
            $('.fixedScroll i').fadeOut();
        }
    });
    
    $('.fixedScroll i').on('click', function () {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
    });

});

