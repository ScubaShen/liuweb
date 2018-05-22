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

    var contentWayPoint = function() {
        var i = 0;

        // $('.gtco-section').waypoint( function( direction ) {


        $('.animate-box').waypoint( function( direction ) {

            if( direction === 'down' && !$(this.element).hasClass('animated-fast') ) {  //上下滾動

                i++;

                $(this.element).addClass('item-animate');
                setTimeout(function(){

                    $('body .animate-box.item-animate').each(function(k){
                        var el = $(this);
                        setTimeout( function () {
                            var effect = el.data('animate-effect');
                            if ( effect === 'fadeIn') {
                                el.addClass('fadeIn animated-fast');
                            } else if ( effect === 'fadeInLeft') {
                                el.addClass('fadeInLeft animated-fast');
                            } else if ( effect === 'fadeInRight') {
                                el.addClass('fadeInRight animated-fast');
                            } else {
                                el.addClass('fadeInUp animated-fast');
                            }

                            el.removeClass('item-animate');
                        },  k * 200, 'easeInOutExpo' );
                    });

                }, 100);

            }

        } , { offset: '85%' } );
        // }, { offset: '90%'} );
    };

    var owlCarousel = function(){

        var owl = $('.owl-carousel-carousel');
        owl.owlCarousel({
            items: 5,
            loop: true,
            margin: 0,
            nav: true,
            dots: false,
            smartSpeed: 800,
            autoHeight: false,
            navText: [
                "<i class='ti-angle-left owl-direction'></i>",
                "<i class='ti-angle-right owl-direction'></i>"
            ],
            responsive:{
                0:{
                    items:1,
                    dots: true,
                    nav: false
                },
                600:{
                    items:2
                },
                820:{
                    items:3
                },
                1080:{
                    items:4
                },
                1680:{
                    items:5
                }
            }
        });
    };

    var sidebarEffect = function(){

        $('.sidebar-fold').on('click', function(){

            if($(this).hasClass('topbar-sidebar-fold')){

                $(this).removeClass('topbar-sidebar-fold').addClass('topbar-sidebar-unfold');
                $(this).children().removeClass('ti-split-v-alt').addClass('ti-split-h');
                $('.panel-right').css('left','50px');
                $('#liu-sidebar').css('width','50px');
            }
            else if($(this).hasClass('topbar-sidebar-unfold')){

                $(this).removeClass('topbar-sidebar-unfold').addClass('topbar-sidebar-fold');
                $(this).children().removeClass('ti-split-h').addClass('ti-split-v-alt');
                $('.panel-right').css('left','180px');
                $('#liu-sidebar').css('width','180px');
            }
        });

        $('.product-navbar-collapse-inner').on('click', function(){

            if($(this).hasClass('inner-sidebar-fold')){

                $(this).removeClass('inner-sidebar-fold').addClass('inner-sidebar-unfold').css({'transform':'rotate(180deg)','left':'0'});
                $('.product-navbar-collapse-bg').removeClass('product-navbar-collapse-bg-left').addClass('product-navbar-collapse-bg-right');
                $('#liu-inner-sidebar').css('width', '0');
                $('.inner-right').css('left', '0');
            }
            else if($(this).hasClass('inner-sidebar-unfold')){

                $(this).removeClass('inner-sidebar-unfold').addClass('inner-sidebar-fold').css({'transform':'rotate(0deg)','left':'160px'});
                $('.product-navbar-collapse-bg').removeClass('product-navbar-collapse-bg-right').addClass('product-navbar-collapse-bg-left');
                $('#liu-inner-sidebar').css('width', '180px');
                $('.inner-right').css('left', '180px');
            }
        });

        $('.nav-title').on('click', function(){
            if($(this).hasClass('text-fold')) {

                $(this).removeClass('text-fold').addClass('text-unfold');
            }
            else if($(this).hasClass('text-unfold')) {

                $(this).removeClass('text-unfold').addClass('text-fold');
            }
        })
    };

    //var playPauseVedio = function () {
    //
    //    $('.liu-video-button').on('click', function(){
    //        var video=$('#liu-video-main')[0];
    //        video.paused && video.play()||video.pause();
    //
    //    });
    //
    //};

    $(function(){
        headcarousel();
        goToTop();
        contentWayPoint();
        owlCarousel();
        //playPauseVedio();
        sidebarEffect();
    });
}());
