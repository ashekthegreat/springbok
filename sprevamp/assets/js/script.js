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
        if (!$("#home-estimator").length) {
            $('a[href^="#home-"]').each(function () {
                $(this).attr("href", "index.php" + $(this).attr("href"));
            });
        }
    });
    $(window).load(function () {
        if (target) {
            $('a[href^="#' + target + '"]').click();
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

        // for LP3 page
        $('.testimonial-slider').unslider({
            arrows: false,
            nav: false,
            infinite: true,
            autoplay: true,
            delay: 2500
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
        var $search = $('#search');

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

        function buildPagination(total, itemsPerPage){
            $("#page").empty();
            var pageNeeded = Math.ceil( total/itemsPerPage);
            for(var i=1; i<=pageNeeded; i++){
                $("#page").append('<option value="'+ i +'">'+ i +'</option>');
            }
            $("#page").material_select();
            $(".total-page-count").text(pageNeeded.toLocaleString());
        }

        function loadPropertyList(isClearPagination){
            if(isClearPagination){
                $("#current-page").val(1);
            }
            var data = $('.property-search-bar form').serializeArray();
            //data.push({name: 'page', value: 1});
            //data.push({name: 'limit', value: 10});

            var searchCriteria = 'Properties For Sale in ';
            searchCriteria += $("#search").val()?$("#search").val():"all area";
            searchCriteria += " with a price range of " + $(".field-price .value").text();

            $(".search-criteria").text(searchCriteria);

            var $cards = $(".property-card");
            $cards.addClass("busy");
            $.post('json-properties.php', data, function(result){
                $(".total").text(result.total.toLocaleString());
                $.each($cards, function(i, card){
                    var $card = $(card);
                    if(i < result.items.length){
                        var item = result.items[i];
                        $card.find(".property-title").attr("href",item.url).html(item.title);
                        $card.find(".property-price").html("Offers in excess of <strong>&pound;"+ (+(item.price)).toLocaleString() +"</strong>");
                        $card.find(".property-address").html(item.address);
                        $card.find(".property-description").html(item.description);

                        $card.find(".property-image").attr("src", item.image_url);
                        $card.find(".property-image-count").html(item.image_count);
                        $card.show().removeClass("busy");
                    } else{
                        $card.hide();
                    }
                });
                if(isClearPagination){
                    buildPagination(result.total, $("#limit").val());
                }
            })
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

            $(".property-card .card-content p").dotdotdot({
                //	configuration goes here
            });

            $search.typeahead({
                minLength: 1,
                maxItem: 10,
                order: "asc",
                source: {
                    area: {
                        ajax: {
                            url: "json-locations.php"
                        }
                    }
                },
                callback: {
                    onHideLayout: function (node, query) {
                        loadPropertyList(true);
                    },
                    onCancel: function (node, event) {
                        loadPropertyList(true);
                    }
                }
            });

            $(".property-search-extra").click(function(e){
                e.stopPropagation();
            });
            $(window).click(function(e){
                $(".property-search-bar .field.active").removeClass("active");
                $(".property-search-extra").slideUp("fast");
            });
            // toggle property search extra
            function showFilters($this){
                $this.addClass("active");

                if($this.hasClass("field-price")){
                    $(".property-search-extra .filter").hide();
                    $(".property-search-extra .filter-price").show();
                } else if($this.hasClass("field-beds")){
                    $(".property-search-extra .filter").hide();
                    $(".property-search-extra .filter-bed").show();
                } else if($this.hasClass("field-property-type")){
                    $(".property-search-extra .filter").hide();
                    $(".property-search-extra .filter-property-type").show();
                } else if($this.hasClass("field-filters")){
                    $(".property-search-extra .filter").show();
                    if($(".property-search-bar .field-price").is(":visible")){
                        $(".property-search-extra .filter-price").hide();
                    }
                    if($(".property-search-bar .field-beds").is(":visible")){
                        $(".property-search-extra .filter-bed").hide();
                    }
                    if($(".property-search-bar .field-property-type").is(":visible")){
                        $(".property-search-extra .filter-property-type").hide();
                    }
                }

                $(".property-search-extra").slideDown("fast");
            }
            function closeFilters(){
                $(".property-search-bar .field.active").removeClass("active");
                $(".property-search-extra").slideUp("fast");
            }
            $(".property-search-bar .field").not(".field-search").click(function(e){
                e.stopPropagation();
                var $this = $(this);

                if($this.hasClass("active")){
                    closeFilters();
                } else{
                    if($(".property-search-bar .field.active").length){
                        // some other filter is showing
                        $(".property-search-bar .field.active").removeClass("active");
                        $(".property-search-extra").slideUp("fast", function(){
                            showFilters($this);
                        });
                    } else{
                        showFilters($this);
                    }
                }

            });
            // price slider
            var priceSlider = $(".price-slider").get(0);
            noUiSlider.create(priceSlider, {
                start: [50000, 3000000],
                connect: true,
                range: {
                    'min': [ 50000, 10000 ],
                    '62%': [ 300000, 25000 ],
                    '78%': [ 500000, 50000 ],
                    '86%': [ 700000, 100000 ],
                    '92%': [ 1000000, 500000 ],
                    'max': [ 3000000 ]
                },
                format: wNumb({
                    decimals: 0
                })
            });
            priceSlider.noUiSlider.on('update', function( values, handle ) {
                $("#filter-price-min").val(values[0]);
                $("#filter-price-max").val(values[1]);
                var text = "&pound;" + (+values[0]).toLocaleString();
                if(values[0] != values[1]){
                    text += " to " + "&pound;" + (+values[1]).toLocaleString();
                }
                $(priceSlider).closest(".filter").find(".filter-value").empty().append(text);
                $(".field-price .value").empty().append(text);
            });
            priceSlider.noUiSlider.on('change', function(){
                loadPropertyList(true);
            });

            // bed slider
            var bedSlider = $(".bed-slider").get(0);
            noUiSlider.create(bedSlider, {
                start: [1, 6],
                connect: true,
                step: 1,
                range: {
                    'min': 1,
                    'max': 6
                },
                format: wNumb({
                    decimals: 0
                })
            });
            bedSlider.noUiSlider.on('update', function( values, handle ) {
                $("#filter-bed-min").val(values[0]);
                $("#filter-bed-max").val(values[1]);
                var text = values[0] + (values[0]==1?" bed":" beds");
                if(values[0] != values[1]){
                    text += " to " + values[1] + (values[1]==1?" bed":" beds");
                }
                $(bedSlider).closest(".filter").find(".filter-value").empty().append(text);
                $(".field-beds .value").empty().append(text);
            });
            bedSlider.noUiSlider.on('change', function(){
                loadPropertyList(true);
            });


            // property types
            $(".filter-property-type input").click(function(){
                var checked = $(".filter-property-type input:checked").length;
                if(checked){
                    $(".property-type-count").empty().append("(" + checked + ")");
                } else{
                    $(".property-type-count").empty();
                }
                loadPropertyList(true);
            });

            // added to site
            $("#added-to-site").change(function(){
                loadPropertyList(true);
            });

            // property-stc
            $("#property-stc").click(function(){
                loadPropertyList(true);
            });

            // done action
            $(".filter-action-done").click(function(){
                closeFilters();
            });

            // pagination change
            $("#page").change(function(){
                $("#current-page").val($("#page").val());
                loadPropertyList(false);
            });

            // load initial data
            loadPropertyList(true);
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

    $(function () {
        if ($("#home-recent-sale").length) {
            // its home page. lets do some animation here
            var windowHeight = $(window).height();
            function p2h(percentage){
                return (windowHeight * percentage) / 100;
            }

            var options = [
                {
                    selector: '.home-fast .card-panel',
                    offset: p2h(10),
                    callback: function (el) {
                        $(el).addClass('z-depth-2').removeClass("z-depth-0");
                    }
                },
                {
                    selector: '.home-why',
                    offset: p2h(50),
                    callback: function (el) {
                        Materialize.fadeInImage($(el).find(".point"));
                    }
                },
                {
                    selector: '.home-estimator',
                    offset: p2h(80),
                    callback: function (el) {
                        Materialize.fadeInImage($(el).find(".sprite-9000"));
                    }
                }
            ];

            Materialize.scrollFire(options);
        }
    })

}());