var supportsTouch = (('ontouchstart' in window) || (navigator.msMaxTouchPoints > 0));
supportsTouch = true;
var target = window.location.hash,
    target = target.replace('#', '');

if (location.hash) {
    setTimeout(function () {

        window.scrollTo(0, 0);
    }, 1);
}


(function () {
    $(function () {

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

        // select items
        $('select').material_select();

        // modal
        var $modalTrigger = $('.modal-trigger');
        $modalTrigger.leanModal();
        $modalTrigger.click(function (e) {
            e.preventDefault();
        });

        // click to call
        function prepareClickToCallButtons() {
            if (supportsTouch) {
                $(".click-to-call").each(function () {
                    var $a = $('<a></a>');
                    var text = $(this).text();
                    var tel = text.replace(/\s/g, '');
                    $a.attr("href", "tel:" + tel).text(text);
                    $(this).empty().append($a);
                })
            }
        }

        prepareClickToCallButtons();

        // scrollspy for homepage
        $('.scrollspy').scrollSpy({scrollOffset: 112});
        if (!$("#home-estimator").length) {
            $('a[href^="#home-"]').each(function () {
                $(this).attr("href", "index.php" + $(this).attr("href"));
            });
        }
    });
    $(window).load(function () {
        if (target) {
            $('a[href$="#' + target + '"]').click();
        }
    });


    $(function ($) {
        $('.image-slider').unslider({
            arrows: {
                //  Unslider default behaviour
                prev: '<a class="unslider-arrow prev"><i class="sprite sprite-icon-arrow-left"></i></a>',
                next: '<a class="unslider-arrow next"><i class="sprite sprite-icon-arrow-right"></i></a>'
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

    $(function () {
        var $modal = $("#modal-video");
        $(".home-video .card, .big-play .play, .reviews-video .card").click(function () {
            var id = $(this).data("id");

            $modal.find(".modal-content").empty().append('<div class="video-container"><iframe class="responsive-img" width="560" height="315" src="https://www.youtube.com/embed/' + id + '?showinfo=0&rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe></div>');
            $modal.openModal({
                complete: function () {
                    $modal.find(".modal-content").empty();
                }
            });
        });
    });

    // login modal
    $(function () {
        var $modal = $("#login-modal");
        $(".not-logged-in").click(function () {
            var active = "signin";
            if ($(this).hasClass("go-register")) {
                active = "register";
            }
            var loginAction = $(this).data('action');						// MANISH

            $modal.openModal({
                ready: function () {
                    $modal.find('.loginAction').val(loginAction);			// MANISH
                    $modal.find('ul.tabs').tabs('select_tab', active);
                }
            });
            return false;
        });
    });


    $(function () {
        // lets do some animation
        var windowHeight = $(window).height();

        function p2h(percentage) {
            return (windowHeight * percentage) / 100;
        }

        Materialize.showStaggeredList($(".home-banner ul"));
        var options = [
            {
                selector: '.home-fast .card-panel',
                offset: p2h(10),
                callback: function (el) {
                    $(el).addClass('z-depth-2').removeClass("z-depth-0");
                }
            },
            {
                selector: '.home-why ul.row',
                offset: 180,
                callback: function (el) {
                    Materialize.showStaggeredList($(el));
                }
            },
            {
                selector: '.home-why ul.row + ul.row',
                offset: 180,
                callback: function (el) {
                    Materialize.showStaggeredList($(el));
                }
            },
            {
                selector: '.home-why ul.row + ul.row + ul.row',
                offset: 180,
                callback: function (el) {
                    Materialize.showStaggeredList($(el));
                }
            },
            {
                selector: '.home-estimator .sprite-9000',
                offset: 150,
                callback: function (el) {
                    Materialize.fadeInImage($(el));
                }
            },
            {
                selector: '.small-videos',
                offset: 100,
                callback: function (el) {
                    Materialize.showStaggeredList($(el));
                }
            }
        ];

        Materialize.scrollFire(options);
    })

}());