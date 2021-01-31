jQuery(function ($) {
    'use strict';
    (function () {
        $('.product-slider').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            navText: ["", ""],
            responsive: {0: {items: 1, nav: false}, 480: {items: 2, nav: false}, 768: {items: 3}}
        });
        $('.latest-news').owlCarousel({
            loop: false,
            margin: 20,
            nav: true,
            lazyLoad: true,
            dots: false,
            navText: ["", ""],
            responsive: {0: {items: 1, nav: false}, 600: {items: 3, nav: false}, 1000: {items: 3}}
        });
        $('.client-testimonial').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: false,
            navText: ["", ""],
            responsive: {0: {items: 1, nav: false}, 600: {items: 1, nav: false}, 1000: {items: 1}}
        });
        // $('.contact-locations').owlCarousel({
        //     loop: false,
        //     margin: 0,
        //     nav: true,
        //     dots: false,
        //     autoplay:true,
        //     autoplayTimeout:5000,
        //     autoplayHoverPause:true,
        //     navText: ["", ""],
        //     responsive: {0: {items: 1, nav: false}, 600: {items: 1, nav: false}, 1000: {items: 1}}
        // });
        $('.logo-slider').owlCarousel({
            loop: false,
            lazyLoad: true,
            margin: 0,
            nav: true,
            dots: false,
            navText: ["", ""],
            responsive: {0: {items: 3}, 600: {items: 5}, 768: {items: 6}, 1000: {items: 7}}
        });
    }());
    (function () {
        $.scrollUp({
            scrollText: '',
            topDistance: '300',
            animation: 'fade',
            animationInSpeed: 200,
            animationOutSpeed: 200,
        });
    }());
    (function () {
        var timer;
        $('li.dropdown').on('mouseenter', function (event) {
            event.stopImmediatePropagation();
            event.stopPropagation();
            $(this).removeClass('open menu-animating').addClass('menu-animating');
            var that = this;
            if (timer) {
                clearTimeout(timer);
                timer = null;
            }
            timer = setTimeout(function () {
                $(that).removeClass('menu-animating');
                $(that).addClass('open');
            }, 300);
        });
        $('li.dropdown').on('mouseleave', function (event) {
            var that = this;
            $(this).removeClass('open menu-animating').addClass('menu-animating');
            if (timer) {
                clearTimeout(timer);
                timer = null;
            }
            timer = setTimeout(function () {
                $(that).removeClass('menu-animating');
                $(that).removeClass('open');
            }, 300);
        });
    }());
    (function () {
        $('.equal-column').matchHeight();
    }());
    $('.lazy').lazy();
});