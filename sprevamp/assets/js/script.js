var supportsTouch = (('ontouchstart' in window) || (navigator.msMaxTouchPoints > 0));

var target = window.location.hash,
    target = target.replace('#', '');

if (location.hash) {
    setTimeout(function() {

        window.scrollTo(0, 0);
    }, 1);
}

(function () {
    $(function () {
        /*
         $("body").click(function(){
         supportsTouch = !supportsTouch;
         prepareClickToCallButtons();
         });
         */
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
        $('.modal-trigger').leanModal();
        $('.modal-trigger').click(function (e) {
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
        if(!$("#home-estimator").length){
            $('a[href^="#home-"]').each(function () {
                $(this).attr("href", "index.php"+$(this).attr("href"));
            });
        }
    });
    $(window).load(function() {
        if (target) {
            $('a[href^="#'+ target +'"]').click();
        }
    });

    // map section
    $(function () {
        // home page > recent sales
        function resizeMapText() {
            var h = $('.home-recent-sale img').height();
            if (h) {
                $('.home-recent-sale .valign-wrapper').height(h);
            } else {
                $('.home-recent-sale .valign-wrapper').css("height", "auto");
            }
        }

        resizeMapText();

        // recent-sales > banner
        function resizeSalesBannerHeight() {
            var h = $('.sales-banner form').height();
            if (h && $(window).width() > 600) {
                $('.sales-banner .valign-wrapper').height(h);
            } else {
                $('.sales-banner .valign-wrapper').css("height", "auto");
            }
        }

        resizeSalesBannerHeight();

        $(window).resize(function () {
            resizeMapText();
            resizeSalesBannerHeight();
        })
    });

    $(function ($) {
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

    $(function () {
        var $modal = $("#modal-video");
        $(".home-video .card, .big-play .play, .reviews-video .card").click(function () {
            var id = $(this).data("id");

            $modal.find(".modal-content").empty().append('<div class="video-container"><iframe class="responsive-img" width="560" height="315" src="https://www.youtube.com/embed/' + id + '?showinfo=0&rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe></div>')
            $modal.openModal({
                complete: function () {
                    $modal.find(".modal-content").empty();
                }
            });
        });
    });

    /* property-list */
    $(function () {
        var $propertySearch = $(".properties-search");
        var $searchBar = $propertySearch.find(".property-search-bar");
        var $adv = $('.property-list-adv');

        function pushpinPropertySearch() {
            $propertySearch.height($searchBar.height());
            if ($(window).width() > 600) {
                if (!$searchBar.data('pushpin-id')) {
                    $searchBar.pushpin({
                        top: $propertySearch.offset().top
                    });
                }
            } else {
                $searchBar.pushpin('remove');
            }
        }

        function pushpinAdvertisements() {
            if ($(window).width() > 1200) {
                var topOffset = ($adv.length ? $adv.offset().top : 0) - ($searchBar.length ? $searchBar.height() : 0) - 40;
                var height = $adv.length ? $adv.height() : 0;
                var footerOffset = $('body > footer').first().length ? $('body > footer').first().offset().top : 0;
                var bottomOffset = footerOffset - height - ($searchBar.length ? $searchBar.height() : 0) - 95 - 110;
                $adv.css({"width": $adv.width() + "px"});

                if (!$adv.data('pushpin-id')) {
                    $adv.pushpin({
                        top: topOffset,
                        bottom: bottomOffset
                    });
                }
            } else {
                $adv.css({"width": ""});
                $adv.pushpin('remove');
            }
        }

        if ($propertySearch.length) {
            $(".navbar-fixed nav").css("position", "relative");

            $(window).resize(function () {
                pushpinPropertySearch();
                pushpinAdvertisements();
            });

            // Floating-Fixed adv
            setTimeout(function () {
                pushpinPropertySearch();
                pushpinAdvertisements();
            }, 100);
        }

    });

    $(function () {
        var $slider = $('#property-carousel');

        function resizeSlider() {
            var ratio = 2 / 3;
            var w = $slider.width();
            $slider.height(w * ratio);
        }

        if ($slider.length) {
            resizeSlider();
            $(window).on("resize", function () {
                resizeSlider();
            });


            var image = new Image();
            image.onload = function () {
                $("img[xsrc]").each(function () {
                    $(this).attr("src", $(this).attr("xsrc"));
                    $(this).removeAttr("xsrc");
                })
            };
            image.src = $slider.find("img:first").attr("src");

            /*$(window).on("resize.carousel", function(){
             resizeCarouselItems();
             })*/

            var propertySlider = $slider.unslider({
                arrows: {
                    //  Unslider default behaviour
                    prev: '<a class="unslider-arrow prev"><i class="sprite sprite-arrow-left-rounded"></i></a>',
                    next: '<a class="unslider-arrow next"><i class="sprite sprite-arrow-right-rounded"></i></a>'
                },
                nav: function (index, label) {

                    return $(this).find("img").get(0).outerHTML;
                },
                autoplay: true,
                infinite: true
            });
            setTimeout(function () {
                propertySlider.unslider('stop');
                $(".unslider-arrow").css("bottom", ($(".unslider-nav").height() - 20) + "px");
            }, 1000);

            propertySlider.on('unslider.change', function () {
                if (!isSlideshow) {
                    propertySlider.unslider('stop');
                }
            });

            var isSlideshow = false;
            $(".slideshow-control").click(function () {
                if (!isSlideshow) {
                    /*propertySlider.data('unslider').init({
                     autoplay: true
                     });*/
                    propertySlider.unslider('start');
                    $(this).text("Stop Slideshow");
                } else {
                    /*propertySlider.data('unslider').init({
                     autoplay: false
                     });*/
                    propertySlider.unslider('stop');
                    $(this).text("Start Slideshow");
                }
                isSlideshow = !isSlideshow;
            });


            // tabs select
            $("#mapid").click(function () {
                $('ul.tabs').tabs('select_tab', 'property-tab-map');
            })
        }
    });

}());