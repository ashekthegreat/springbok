(function(){
    $(function(){
        $(".button-collapse").sideNav();
    });

    // map section
    $(function(){
        function resizeMapText(){
            var h = $('.home-recent-sale img').height();
            if(h){
                $('.home-recent-sale .valign-wrapper').height(h);
            } else{
                $('.home-recent-sale .valign-wrapper').css("height", "auto");
            }
        }
        resizeMapText();

        $(window).resize(function(){
            resizeMapText();
        })
    });

    $(function($) {
        $('.success-slider').unslider({
            arrows: {
                //  Unslider default behaviour
                prev: '<a class="unslider-arrow prev"><i class="sprite sprite-arrow-left"></i></a>',
                next: '<a class="unslider-arrow next"><i class="sprite sprite-arrow-right"></i></a>'
            },
            nav: false,
            infinite: true
        });

        $('.review-slider').unslider({
            arrows: {
                //  Unslider default behaviour
                prev: '<a class="unslider-arrow prev"><i class="sprite sprite-left-arrow-round"></i></a>',
                next: '<a class="unslider-arrow next"><i class="sprite sprite-right-arrow-round"></i></a>'
            },
            nav: false,
            infinite: true
        });
    });
}());