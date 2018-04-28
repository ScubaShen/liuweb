;(function(){

    'use strict';

    var headcarousel = function() {

        $('#myCarousel').carousel({
            pause: true,
            interval: false
        });
    };

    var goToTop = function() {

        $('.js-gotop').on('click', function(event){

            event.preventDefault();  //阻止此次點擊，但依然執行以下函數，代表這函數能重複使用

            $('html, body').animate({
                scrollTop: $('html').offset().top
            }, 500, 'easeInOutExpo');

            return false;
        });

        $(window).scroll(function(){

            var $win = $(window);
            if ($win.scrollTop() > 200) {
                $('.js-gotop').parent().addClass('active');  //active是顯示出來的意思
            } else {
                $('.js-gotop').parent().removeClass('active');
            }

        });

    };

    var owlCarousel = function(){

        var owl = $('.owl-carousel-fullwidth');
        owl.owlCarousel({
            items: 5,
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            smartSpeed: 800,
            autoHeight: true,
            navText: [
                "<i class='ti-angle-left owl-direction'></i>",
                "<i class='ti-angle-right owl-direction'></i>"
            ]
        });

    };

    $(function(){
        headcarousel();
        goToTop();
        owlCarousel();
    });
}());
