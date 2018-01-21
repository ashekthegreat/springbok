var supportsTouch = (('ontouchstart' in window) || (navigator.msMaxTouchPoints > 0));
supportsTouch = true;
var target = window.location.hash,
    target = target.replace('#', '');

if (location.hash) {
    setTimeout(function () {

        window.scrollTo(0, 0);
    }, 1);
}

function parseQuery(str) {
    if (typeof str != "string" || str.length == 0) return {};
    if (str && str.indexOf("?") > -1) {
        str = str.split("?")[1];
    } else {
        return {}
    }
    //str = str || document.location.search;

    var s = str.split("&");
    var s_length = s.length;
    var bit, query = {}, first, second;
    for (var i = 0; i < s_length; i++) {
        bit = s[i].split("=");
        first = decodeURIComponent(bit[0]);
        if (first.length == 0) continue;
        second = decodeURIComponent(bit[1].replace(/\+/g, '%20'));
        if (typeof query[first] == "undefined") query[first] = second;
        else if (query[first] instanceof Array) query[first].push(second);
        else query[first] = [query[first], second];
    }
    return query;
}

(function () {
    $.fn.stickyTopBottom = function (options) {
        var $el, container_top, current_translate, element_top, last_viewport_top, viewport_height;
        if (options == null) {
            options = {};
        }
        options = $.extend({
            container: $('body'),
            top_offset: 0,
            bottom_offset: 0
        }, options);
        $el = $(this);
        container_top = options.container.offset().top;
        element_top = $el.offset().top;
        viewport_height = $(window).height();
        $(window).on('resize', function () {
            return viewport_height = $(window).height();
        });
        current_translate = 0;
        last_viewport_top = document.documentElement.scrollTop || document.body.scrollTop;
        return $(window).scroll(function (event) {
            var container_bottom, effective_viewport_bottom, effective_viewport_top, element_fits_in_viewport, element_height, is_scrolling_up, new_translation, viewport_bottom, viewport_top;
            viewport_top = document.documentElement.scrollTop || document.body.scrollTop;
            viewport_bottom = viewport_top + viewport_height;
            effective_viewport_top = viewport_top + options.top_offset;
            effective_viewport_bottom = viewport_bottom - options.bottom_offset;
            element_height = $el.height();
            is_scrolling_up = viewport_top < last_viewport_top;
            element_fits_in_viewport = element_height < viewport_height;
            new_translation = null;
            if (is_scrolling_up) {
                if (effective_viewport_top < container_top) {
                    new_translation = 0;
                } else if (effective_viewport_top < element_top + current_translate) {
                    new_translation = effective_viewport_top - element_top;
                }
            } else if (element_fits_in_viewport) {
                if (effective_viewport_top > element_top + current_translate) {
                    new_translation = effective_viewport_top - element_top;
                }
            } else {
                container_bottom = container_top + options.container.height();
                if (effective_viewport_bottom > container_bottom) {
                    new_translation = container_bottom - (element_top + element_height);
                } else if (effective_viewport_bottom > element_top + element_height + current_translate) {
                    new_translation = effective_viewport_bottom - (element_top + element_height);
                }
            }
            if (new_translation !== null) {
                current_translate = new_translation;
                $el.css('transform', "translate(0, " + current_translate + "px)");
            }
            return last_viewport_top = viewport_top;
        });
    };
}).call(this);

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

        $('.home-recent-sale img').load(function () {
            resizeMapText();
        });

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
        if ($(".lp3").length) {
            $('.testimonial-slider').unslider({
                arrows: false,
                nav: false,
                infinite: true,
                autoplay: true,
                delay: 2500
            });
            $('.sub-nav').pushpin({top: 64});
        }
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


    // book modal
    $(function () {
        var $modal = $("#property-book");
        $(".trigger-book-modal").click(function () {
            // change button text
            $modal.find(".cmd-submit").text($(this).text());
            // change source and property id
            if ($(this).closest(".properties-list").length) {			// MANISH
                // its listing page
                $modal.find('input[name="_page_url"]').val($(this).closest(".property-card").find(".property-title").attr("href"));
                $modal.find('input[name="_source"]').val($(this).closest(".property-card").find(".property-title").attr("href"));
                $modal.find('.book-title').text($(this).closest(".property-card").find(".property-address").text())
            } else {
                $modal.find('input[name="_source"]').val(window.location.href);
                $modal.find('input[name="_page_url"]').val(window.location.href);
            }
            // add property ID
            $modal.find('input[name="_prop_id"]').val($(this).data("prop"));


            $modal.openModal();
            return false;
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
            $adv.stickyTopBottom({
                container: $('.properties-list'),
                top_offset: 92 //$adv.offset().top,
            });
        }

        function buildPagination(total, itemsPerPage) {
            var $page = $("#page");
            $page.empty();
            var pageNeeded = Math.ceil(total / itemsPerPage);
            for (var i = 1; i <= pageNeeded; i++) {
                $page.append('<option value="' + i + '">' + i + '</option>');
            }
            var currentPage = $("#current-page").val();
            $page.val(currentPage).material_select();
            //$page.material_select();
            $(".total-page-count").text(pageNeeded.toLocaleString());
            $(".pagination-holder .prev").toggleClass("disabled", currentPage == 1);
            $(".pagination-holder .next").toggleClass("disabled", currentPage == pageNeeded);
        }

        function goToPage(direction) {
            var $page = $("#page");
            var targetPage = +($page.val()) + (+direction);
            var totalPageCount = $(".total-page-count").text();

            $(".pagination-holder .prev").toggleClass("disabled", targetPage == 1);
            $(".pagination-holder .next").toggleClass("disabled", targetPage == totalPageCount);

            if (targetPage >= 1 && targetPage <= totalPageCount) {
                $page.val(targetPage).material_select();
                $("#current-page").val(targetPage);
                changeHistory(false);
            }
        }

        function prepareSearchCriteria() {
            var searchCriteria = 'Properties For Sale';
            searchCriteria += $("#search").val() ? " in " + $("#search").val() : "";

            // price
            if ($("#field-dropdown-price-min").val() && $("#field-dropdown-price-max").val()) {
                searchCriteria += ", " + $("#field-dropdown-price-min option:selected").text() + " - " + $("#field-dropdown-price-max option:selected").text();
            } else if ($("#field-dropdown-price-min").val()) {
                searchCriteria += ", at least " + $("#field-dropdown-price-min option:selected").text();
            } else if ($("#field-dropdown-price-max").val()) {
                searchCriteria += ", up to " + $("#field-dropdown-price-max option:selected").text();
            }

            // bed
            if ($("#field-dropdown-bed-min").val() && $("#field-dropdown-bed-max").val()) {
                searchCriteria += ", " + $("#field-dropdown-bed-min").val() + " - " + $("#field-dropdown-bed-max option:selected").text();
            } else if ($("#field-dropdown-bed-min").val()) {
                searchCriteria += ", at least " + $("#field-dropdown-bed-min option:selected").text();
            } else if ($("#field-dropdown-bed-max").val()) {
                searchCriteria += ", up to " + $("#field-dropdown-bed-max option:selected").text();
            }

            // added
            if ($("#added-to-site").val()) {
                searchCriteria += ", sorted by " + $("#added-to-site option:selected").text();		//MANISH
            }

            $(".search-criteria").text(searchCriteria);
        }

        function changeHistory(isClearPagination, isReplaceState) {
            $(".search-alert").hide();
            if (isClearPagination) {
                $("#current-page").val(1);
                prepareSearchCriteria();
            }
            var data = $('.property-search-bar form').serializeArray();
            var targetQueryString = "?" + $.param(data);
            var searchKey = $("#search").val();
            var pageTitleLocation = (searchKey ? (searchKey[0].toUpperCase() + searchKey.substring(1)) : "The UK");
            pageTitleLocation = preloadedDocumentTitle ? preloadedDocumentTitle : pageTitleLocation;
            if (isReplaceState) {
                History.replaceState(null, "Find Properties For Sale In " + pageTitleLocation + " - Springbok Properties", targetQueryString);
            } else {
                History.pushState(null, "Find Properties For Sale In " + pageTitleLocation + " - Springbok Properties", targetQueryString);
            }
        }

        function resizeImage($imageContainer) {
            var im = $imageContainer.children('img');
            im.attr("style", "").removeClass('ww wh');
            //set size
            var th = $imageContainer.height(),//box height
                tw = $imageContainer.width(),//box width
                ih = im.height(),//inital image height
                iw = im.width();//initial image width
            if (ih > iw) {//if portrait
                im.addClass('ww').removeClass('wh');//set width 100%
            } else {//if landscape
                im.addClass('wh').removeClass('ww');//set height 100%
            }
            //set offset
            var nh = im.height(),//new image height
                nw = im.width(),//new image width
                hd = (nh - th) / 2,//half dif img/box height
                wd = (nw - tw) / 2;//half dif img/box width
            if (nh < nw) {//if portrait
                im.css({marginLeft: '-' + wd + 'px', marginTop: 0});//offset left
            } else {//if landscape
                im.css({marginTop: '-' + hd + 'px', marginLeft: 0});//offset top
            }
        }

        function resizeAllImage() {
            $(".card-image-container").each(function () {
                resizeImage($(this));
            })
        }

        function loadPropertyList(isForceBuildPagination) {
            prepareSearchCriteria();

            var data = $('.property-search-bar form').serializeArray();

            var $cards = $(".property-card");
            $cards.addClass("busy");
            $(window).scrollTop(0);

            $.post('json-properties.php', data, function (result) {
                $(".total").text(result.total.toLocaleString());
                $.each($cards, function (i, card) {
                    var $card = $(card);
                    if (i < result.items.length) {
                        var item = result.items[i];
                        $card.find(".corner").remove();

                        $card.find(".property-title").attr("href", item.url).html(item.title);
                        $card.find(".camera, .prop_img, .property-title").attr("href", item.url);
                        $card.find(".property-price").html(item.price);									// MANISH
                        $card.find(".property-address").html(item.address);
                        $card.find(".property-description").html(item.description);

                        $card.find(".property-image").attr("src", item.image_url);
                        $card.find(".property-image-count").html(item.image_count);
                        $card.find(".prop-book").attr('data-prop', item.id);	// Property ID			// MANISH
                        if (typeof item.special_tag == "string") {
                            $card.find(".card-image-container").append('<span class="corner ' + item.special_tag + '"></span>');
                        } else {
                            $.each(item.special_tag, function (i, tag) {
                                $card.find(".card-image-container").append('<span class="corner ' + tag + '"></span>');
                            })
                        }

                        $card.show().removeClass("busy");
                    } else {
                        $card.hide();
                    }
                });

                if ($("#current-page").val() == 1 || isForceBuildPagination) {
                    buildPagination(result.total, $("#limit").val());
                }
                if (result.special_message) {
                    // lets show the message and radius dropdown
                    $(".radius").show();
                    $(".special-message").empty().append(result.special_message).show();
                } else {
                    $(".special-message").empty().hide();
                }
            })
        }

        if ($propertySearch.length) {
            $(".navbar-fixed nav").css("position", "relative");

            $(window).resize(function () {
                pushpinPropertySearch();
                resizeAllImage();
            });

            $(".card-image-container img").load(function () {
                resizeImage($(this).closest(".card-image-container"));
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
                offset: true,
                dynamic: true,
                source: {
                    area: {
                        ajax: function (query) {
                            return {
                                type: "GET",
                                url: "json-locations.php",
                                data: {
                                    q: query
                                }
                            }
                        }
                    }
                },
                callback: {
                    onHideLayout: function (node, query) {
                        changeHistory(true);
                    },
                    onCancel: function (node, event) {
                        changeHistory(true);
                    }/*,
                     onSubmit: function (node, form, item, event) {
                     changeHistory(true);
                     event.preventDefault();
                     }*/
                }
            });

            $search.keydown(function (e) {
                $(".search-alert").show();
                if (e.which == 13) {
                    changeHistory(true);
                }
            });

            $(".do-search").click(function () {
                changeHistory(true);
            });
            $(".cancel-search").click(function () {
                populateFieldsWithStateData(History.getState().cleanUrl);
                changeHistory();
            });

            $(".property-search-extra").click(function (e) {
                e.stopPropagation();
            });
            $(window).click(function (e) {
                $(".property-search-bar .field.active").removeClass("active");
                $(".property-search-extra").slideUp("fast");
            });

            // toggle property search extra
            function showFilters($this) {
                $this.addClass("active");

                if ($this.hasClass("field-property-type")) {
                    $(".property-search-extra .filter").hide();
                    $(".property-search-extra .filter-property-type").show();
                } else if ($this.hasClass("field-filters")) {
                    $(".property-search-extra .filter").show();
                    if ($(".property-search-bar .field-price").is(":visible")) {
                        $(".property-search-extra .filter-price").hide();
                    }
                    if ($(".property-search-bar .field-beds").is(":visible")) {
                        $(".property-search-extra .filter-bed").hide();
                    }
                    if ($(".property-search-bar .field-property-type").is(":visible")) {
                        $(".property-search-extra .filter-property-type").hide();
                    }
                }

                $(".property-search-extra").slideDown("fast");
            }

            function closeFilters() {
                $(".property-search-bar .field.active").removeClass("active");
                $(".property-search-extra").slideUp("fast");
            }

            $(".field-property-type, .field-filters").click(function (e) {
                e.stopPropagation();
                var $this = $(this);

                if ($this.hasClass("active")) {
                    closeFilters();
                } else {
                    if ($(".property-search-bar .field.active").length) {
                        // some other filter is showing
                        $(".property-search-bar .field.active").removeClass("active");
                        $(".property-search-extra").slideUp("fast", function () {
                            showFilters($this);
                        });
                    } else {
                        showFilters($this);
                    }
                }

            });

            // radius dropdowns
            $("#radius").change(function () {
                changeHistory(true);
            });
            // price dropdowns
            $("#field-dropdown-price-min").change(function () {
                $("#filter-dropdown-price-min").val($(this).val()).material_select();
                changeHistory(true);
            });
            $("#field-dropdown-price-max").change(function () {
                $("#filter-dropdown-price-max").val($(this).val()).material_select();
                changeHistory(true);
            });
            $("#filter-dropdown-price-min").change(function () {
                $("#field-dropdown-price-min").val($(this).val()).material_select();
                changeHistory(true);
            });
            $("#filter-dropdown-price-max").change(function () {
                $("#field-dropdown-price-max").val($(this).val()).material_select();
                changeHistory(true);
            });

            // bed dropdown
            $("#field-dropdown-bed-min").change(function () {
                $("#filter-dropdown-bed-min").val($(this).val()).material_select();
                changeHistory(true);
            });
            $("#field-dropdown-bed-max").change(function () {
                $("#filter-dropdown-bed-max").val($(this).val()).material_select();
                changeHistory(true);
            });
            $("#filter-dropdown-bed-min").change(function () {
                $("#field-dropdown-bed-min").val($(this).val()).material_select();
                changeHistory(true);
            });
            $("#filter-dropdown-bed-max").change(function () {
                $("#field-dropdown-bed-max").val($(this).val()).material_select();
                changeHistory(true);
            });

            // property types
            $(".filter-property-type input").click(function () {
                var checked = $(".filter-property-type input:checked").length;
                $(".property-type-count").empty();
                if (checked) {
                    $(".property-type-count").append("(" + checked + ")");
                }
                changeHistory(true);
            });

            // added to site
            $("#added-to-site").change(function () {
                changeHistory(true);
            });

            // property-stc
            $("#property-stc").click(function () {
                changeHistory(true);
            });

            // done action
            $(".filter-action-done").click(function () {
                closeFilters();
            });

            // pagination change
            $("#page").change(function () {
                var targetPage = $("#page").val();
                $("#current-page").val(targetPage);
                $(".pagination-holder .prev").toggleClass("disabled", targetPage == 1);
                $(".pagination-holder .next").toggleClass("disabled", targetPage == +$(".total-page-count").text());
                changeHistory(false);
            });
            $(".pagination-holder .prev").click(function () {
                if (!$(this).hasClass("disabled")) {
                    goToPage(-1);
                }
            });

            $(".pagination-holder .next").click(function () {
                if (!$(this).hasClass("disabled")) {
                    goToPage(+1);
                }
            });

            var urlExcludeList = [
                "http://springbokproperties.co.uk/property-for-sale/",
                "http://springbokproperties.co.uk/properties-for-sale/",
                "http://springbokproperties.co.uk/property-list/",

                "http://staging.springbokproperties.co.uk/property-for-sale/",
                "http://staging.springbokproperties.co.uk/properties-for-sale/",
                "http://staging.springbokproperties.co.uk/property-list/",

                //"http://localhost/springbok/sprevamp/property-list.php",
                ".html",
                ".php",
                "/"
            ];
            var preloadedDocumentTitle = "";

            function capitalizeFirstLetter(string) {
                return string.charAt(0).toUpperCase() + string.slice(1);
            }

            function populateFieldsWithStateData(queryParam) {
                var initialData = parseQuery(queryParam);
                initialData['property-stc'] = initialData['limit'] ? initialData['property-stc'] : 1;

                initialData['current-page'] = initialData['current-page'] || 1;
                initialData['limit'] = initialData['limit'] || 10;

                // lets see if URL itself contains search text
                if (!document.location.search) {
                    var searchTextInUrl = queryParam.split("?")[0];
                    for (var i = 0; i < urlExcludeList.length; i++) {
                        searchTextInUrl = searchTextInUrl.replace(urlExcludeList[i], "");
                    }
                    if (searchTextInUrl && window.location.href.indexOf(searchTextInUrl) > 0) {
                        initialData['search'] = decodeURIComponent(searchTextInUrl);
                        preloadedDocumentTitle = initialData['search'];
                        document.title = "House For Sale In " + preloadedDocumentTitle + " - Properties For Sale " + preloadedDocumentTitle;
                        $('meta[name=description]').attr('content', 'Find houses for sale in ' + preloadedDocumentTitle + ' from Springbok Properties Nationwide. Search for houses, flats, bungalows from a wide range of properties for sale in ' + preloadedDocumentTitle);
                        $(".location-extra-message").show();
                        $(".location-extra-message").find(".search-location-special").html(preloadedDocumentTitle.charAt(0).toUpperCase() + preloadedDocumentTitle.slice(1));
                    }
                } else {
                    $(".location-extra-message").hide();
                }

                $search.val(initialData['search']);

                $(".alert-box").toggle(!!initialData['search']);

                $("#radius").val(initialData['radius']).material_select();

                $("#field-dropdown-price-min").val(initialData['filter-price-min']).material_select();
                $("#filter-dropdown-price-min").val(initialData['filter-price-min']).material_select();
                $("#field-dropdown-price-max").val(initialData['filter-price-max']).material_select();
                $("#filter-dropdown-price-max").val(initialData['filter-price-max']).material_select();

                $("#field-dropdown-bed-min").val(initialData['filter-bed-min']).material_select();
                $("#filter-dropdown-bed-min").val(initialData['filter-bed-min']).material_select();
                $("#field-dropdown-bed-max").val(initialData['filter-bed-max']).material_select();
                $("#filter-dropdown-bed-max").val(initialData['filter-bed-max']).material_select();

                $("#added-to-site").val(initialData['added-to-site']).material_select();

                $("#property-stc").prop('checked', !!(initialData['property-stc']));

                $(".filter-property-type input").each(function () {
                    if (typeof initialData['property-type'] == "string") {
                        $(this).prop('checked', !!(initialData['property-type'] == $(this).val()));
                    } else {
                        $(this).prop('checked', !!(initialData['property-type'] && initialData['property-type'].indexOf($(this).val()) > -1));
                    }
                });
                var checked = $(".filter-property-type input:checked").length;
                $(".property-type-count").empty();
                if (checked) {
                    $(".property-type-count").append("(" + checked + ")");
                }

                var targetPage = initialData['current-page'] || 1;
                $("#page").val(targetPage).material_select();
                $("#current-page").val(targetPage);
            }

            // Bind to StateChange Event
            History.Adapter.bind(window, 'statechange', function () { // Note: We are using statechange instead of popstate
                populateFieldsWithStateData(History.getState().cleanUrl);
                loadPropertyList();
            });

            // load initial data
            populateFieldsWithStateData(window.location.href);
            //changeHistory(true, false);

            loadPropertyList(true);
        }

    });

    $(function () {
        var $slider = $('#property-carousel');

        function resizeSlider() {
            var ratio = 2 / 3;
            var w = $slider.width();
            $slider.height(w * ratio);
            $slider.find("li").height(w * ratio);

            // resize nav images
            $(".unslider-nav li").height($(".unslider-nav li:first").width() * ratio);
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
                });
                setTimeout(function () {
                    resizeSlider();
                }, 100);

            };
            image.src = $slider.find("img:first").attr("src");

            $slider.on('unslider.ready', function () {
                $(".unslider-nav img").load(function () {
                    resizeSlider();
                });
            });

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
                    propertySlider.unslider('start');
                    $(this).text("Stop Slideshow");
                } else {
                    propertySlider.unslider('stop');
                    $(this).text("Start Slideshow");
                }
                isSlideshow = !isSlideshow;
            });


            // tabs select
            $("#mapid").click(function () {
                $('ul.tabs').tabs('select_tab', 'property-tab-map');
            });
        }
    });

    $(function () {
        if ($("#home-recent-sale").length) {
            // its home page. lets do some animation here
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
                    selector: '.home-how-it-works img',
                    offset: 250,
                    callback: function (el) {
                        Materialize.fadeInImage($(el));
                    }
                },
                {
                    selector: '.home-recent-sale img',
                    offset: 250,
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
        }
    })

}());