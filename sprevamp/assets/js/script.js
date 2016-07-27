(function(){
    $(function(){
        $(".menu-button").sideNav({
            menuWidth: 240,
            edge: 'right',
            closeOnClick: false
        });
        $(".dropdown-main-nav").dropdown({
            hover: true,
            constrain_width: false,
            belowOrigin: true
        });
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

    $(function(){
        var $modal = $("#modal-video");
        $(".home-video .card, .big-play .play, .reviews-video .card").click(function(){
            var id = $(this).data("id");

            $modal.find(".modal-content").empty().append('<div class="video-container"><iframe class="responsive-img" width="560" height="315" src="https://www.youtube.com/embed/' + id +'?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe></div>')
            $modal.openModal({
                complete: function() {
                    $modal.find(".modal-content").empty();
                    console.log("closed")
                }
            });
        });
        /*$modal.leanModal({
            complete: function() {
                $modal.find(".modal-content").empty();
                console.log("closed")
            }
        });*/
    })
}());