/*global $, window*/

$(function () {
    
    'use strict';
    
    //defintions
    var header =  $('.header'),
        slider = $('.slider');

    // adjust header Height
    header.height($(window).height());

    //$('#slider-area .owl-item div').height($(window).height());
    
    $(window).on('resize', function () {
        header.height($(window).height());
        
        slider.each(function () {
            var height2 = ($(window).height() - $('.slider li').height()) / 2;
            $(this).css({
                paddingTop : height2 - 150
            });
        });
    });
    
    
   // trigger niceScroll
    $('html, body').niceScroll({
        cursorcolor : '#009FE3',
        cursorborder : '1px solid #009FE3',
        zindex : 50
    });
    


    // Scroll
    $(window).scroll(function () {
        if ($(window).scrollTop() >= ($('.service').offset().top - 300)) {
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


    $('#slider-area').owlCarousel({
        loop:true,
        nav:true,
        autoplay:true,
        autoHeight:true,
        items:1
    });
});
