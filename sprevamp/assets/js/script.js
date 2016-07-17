(function(){
    $(function(){
        $(".button-collapse").sideNav();
    });

    // home slider
    /*$(function(){
        function initSlider(){
            var h = $('.home-success .slider').find(".card").height();
            $('.home-success .slider').slider({
                interval: 300000,
                indicators: false,
                height: h
            });
        }
        initSlider();

        $(window).resize(function(){
            initSlider();
        })
    });*/

    $(function($) {
        $('.success-slider').unslider({
            arrows: {
                //  Unslider default behaviour
                prev: '<a class="unslider-arrow prev"><i class="material-icons">keyboard_arrow_left</i></a>',
                next: '<a class="unslider-arrow next"><i class="material-icons">keyboard_arrow_right</i></a>'
            },
            nav: false
        });

        $('.review-slider').unslider({
            arrows: {
                //  Unslider default behaviour
                prev: '<a class="unslider-arrow prev"><i class="material-icons">keyboard_arrow_left</i></a>',
                next: '<a class="unslider-arrow next"><i class="material-icons">keyboard_arrow_right</i></a>'
            },
            nav: false
        });
    });
}());