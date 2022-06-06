/*
home video
 */
(function () {
    var videoIds = [
        "5S30dvaw5Ak",
        "28WOLDVhxos",
        "jNTzYWeHRwg",
        "feRWHpr6q2Q",
        "cXscoTDjIdA",
        "GZn-M4QpOeY",
        "RwB8ElpJHVI",
        "W232T4xD2Fk",
        "90xfVB5z_Dw",
        "nwj3emulzIk",
        "jjqdEPHtbcs",
        "-Tv9Izvris0",
        "5ed3wfFdkKw",
        "F0WdUkXvBiQ",
        "0Irq3ggPT4Y",
        "ZTh3cXTzo8M",
        "Xx2S0rLeBqk",
        "Ag5sJFE6vQM",
        "B8iI-PnmrPU",
        "9mzmXW5t4ao",
        "PPJv9AY77KU",
        "iY38J2sNq-U",
        "EfgAXRE6Ybk",
        "BYKz90GY5EM",
        "AL18YfGfBQ8",
        "YWNDPWvJRbk",
        "qL9FBWA1JII",
        "v5hEB9aukEs"
    ];

    function attachVideoModalToElement($element) {
        var $modal = $("#modal-video");
        $element.click(function () {
            var id = $(this).data("id");

            $modal.find(".modal-content").empty().append('<div class="video-container"><iframe class="responsive-img" width="560" height="315" src="https://www.youtube.com/embed/' + id + '?showinfo=0&rel=0&autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>');
            $modal.openModal({
                complete: function () {
                    $modal.find(".modal-content").empty();
                }
            });
        });
    }

    function attachVideoModalToParent($parent, selector) {
        var $modal = $("#modal-video");
        $parent.on('click', selector, function () {
            var id = $(this).data("id");

            $modal.find(".modal-content").empty().append('<div class="video-container"><iframe class="responsive-img" width="560" height="315" src="https://www.youtube.com/embed/' + id + '?showinfo=0&rel=0&autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>');
            $modal.openModal({
                complete: function () {
                    $modal.find(".modal-content").empty();
                }
            });
        })
    }

    function createSlider(parentClass, containerClass, cardsClass, cardUlClass, preferredItemWidth) {
        var $parent = $('.' + parentClass);
        var $container = $parent.find('.' + containerClass);
        var $cards = $container.find('.' + cardsClass);

        function createSliderStructure() {
            if ($cards.length === 1) {
                return;
            }
            var isAlreadyImplemented = !!$container.closest('.unslider').length;
            var availableWidth = $container.width() - (isAlreadyImplemented ? 0 : 100);
            var itemCountPerSlide = Math.floor(availableWidth / preferredItemWidth) || 1;

            if (isAlreadyImplemented) {
                var $newContainer = $('<div class="' + containerClass + '">').insertAfter($container.closest('.unslider'))
                $container.closest('.unslider').remove();
                $container = $newContainer;
            } else {
                $container.empty();
            }

            var $ul = $('<ul/>').appendTo($container);
            var $li;
            var $liul;
            for (var i = 0; i < $cards.length; i++) {
                if (i % itemCountPerSlide === 0) {
                    $li = $('<li/>').appendTo($ul);
                    $liul = $('<ul class="' + cardUlClass + '"/>').appendTo($li);
                }
                $liul.append($cards[i]);
            }
            $container.unslider({
                arrows: {
                    //  Unslider default behaviour
                    prev: '<a class="unslider-arrow prev"><i class="sprite sprite-left-arrow-round"></i></a>',
                    next: '<a class="unslider-arrow next"><i class="sprite sprite-right-arrow-round"></i></a>'
                },
                nav: false,
                infinite: true
            });
        }

        createSliderStructure();
        $(window).on('resize', function () {
            createSliderStructure();
        });
    }

    $(function () {
        attachVideoModalToElement($(".youtube-video"));
    });

    $(function () {
        var $parent = $('.review-page-video');
        attachVideoModalToParent($parent, '.card');

        $parent.find('.small-videos').empty();
        for (var i = 0; i < videoIds.length; i++) {
            $parent.find('.small-videos').append('<li class="card" data-id="' + videoIds[i] + '">\n' +
                '                            <div class="card-image">\n' +
                '                                <img class="responsive-img" src="http://img.youtube.com/vi/' + videoIds[i] + '/default.jpg" width="120" height="90" alt="" loading="lazy">\n' +
                '                                <div class="play-button"><i class="social social-youtube-play-small"></i></div>\n' +
                '                            </div>\n' +
                '                        </li>');
        }
    });

    $(function () {

        var $parent = $('.home-seller-reviews');
        attachVideoModalToParent($parent, '.card');
        $parent.find('.small-videos').empty();
        for (var i = 0; i < videoIds.length; i++) {
            $parent.find('.small-videos').append('<li class="card" data-id="' + videoIds[i] + '">\n' +
                '                            <div class="card-image">\n' +
                '                                <img class="responsive-img" src="http://img.youtube.com/vi/' + videoIds[i] + '/default.jpg" width="120" height="90" alt="" loading="lazy">\n' +
                '                                <div class="play-button"><i class="social social-youtube-play-small"></i></div>\n' +
                '                            </div>\n' +
                '                        </li>');
        }

        createSlider('home-seller-reviews', 'video-reviews', 'card', 'small-videos', 210);
    });

    $(function () {
        createSlider('home-seller-reviews', 'trust-pilot-reviews', 'review', 'ul-review', 320);
    });

    $(function () {
        createSlider('home-latest-guides', 'video-reviews', 'card', 'small-videos', 320);
    });
}());

/*
exit intent
 */
(function () {
    $(function () {
        // var exitModalId = 'modal-exit-1-feb2022';
        // var exitModalId = 'modal-exit-2-feb2022';
        var exitModalId = ['modal-exit-1-feb2022', 'modal-exit-2-feb2022'][Math.floor(Math.random() * 2)];


        var $modal = $('#' + exitModalId);
        var $closeButton = $('#' + exitModalId + '-close');
        var $form = $modal.find('form');

        function prepareSlider() {
            var $exitSlider = $modal.find('.exit-slider');
            var $button = $modal.find('.footer-button');
            $exitSlider.unslider({
                arrows: false,
                keys: false,
                nav: false,
                infinite: false,
                autoplay: false,
                speed: 300
            });

            $button.click(function () {
                // get the form data
                var current = $exitSlider.data('unslider').current;

                if (current === 0) {
                    if (!$form.find('#phone').val()) {	//!(regPhone.test($form.find('#phone').val())) ||
                        $form.find('#phone').closest('.unslider-active').addClass('input-error');
                        return false;
                    } else {
                        $form.find('#phone').closest('.unslider-active').removeClass('input-error');
                    }

                    var regEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    if (!(regEmail.test($form.find('#email').val()))) {
                        $form.find('#email').closest('.unslider-active').addClass('input-error');
                        return false;
                    } else {
                        $form.find('#email').closest('.unslider-active').removeClass('input-error');
                    }
                } else if (current === 1) {
                    var regPostcode = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;

                    if (!(regPostcode.test($form.find('#postcode').val())) || $form.find('#postcode').val() == '') {
                        $form.find('#postcode').closest('.prop-postcode').addClass('input-error');
                        return false;
                    } else {
                        $form.find('#postcode').closest('.prop-postcode').removeClass('input-error');
                    }
                } else if (current === 2) { // name
                    if (!$form.find('#name').val()) {
                        $form.find('#name').closest('.unslider-active').addClass('input-error');
                        return false;
                    } else {
                        $form.find('#name').closest('.unslider-active').removeClass('input-error');
                        $form.submit();
                        $button.attr('disabled', 'disabled');
                        $button.closest('.other-steps').text('Submitting...');
                    }
                }

                if ($exitSlider.data('unslider').current < $exitSlider.data('unslider').total - 1) {
                    $exitSlider.data('unslider').next();
                    afterSlide($exitSlider.data('unslider').current + 1, $exitSlider.data('unslider').total);
                }
            });
        }

        function afterSlide(current, total) {
            if (current === 1) {
                // first slide
                $modal.find('.exit-progress').slideUp('fast');
                $modal.find('.first-step').show();
                $modal.find('.other-steps').hide();
            } else {
                // other slides
                $modal.find('.exit-progress').slideDown('fast');
                $modal.find('.first-step').hide();
                $modal.find('.other-steps').show();
                $modal.find('.lock-message').show();
                $modal.find('.exit-slider li').height(240);
                $modal.width(660);
            }

            $modal.find('.progress .progress-bar').css('width', (current - 1) * 100 / total + '%');
            $modal.find('.progress .progress-text').text('Progress ' + Math.round((current - 1) * 100 / total) + '%');

            if (current === total) {
                setTimeout(function () {
                    $modal.find('.footer-button').attr('type', 'submit');
                }, 300)
            } else {
                $modal.find('.footer-button').attr('type', 'button');
            }
        }

        prepareSlider();
        afterSlide(1, 4);

        function showExitPopup() {
            $modal.openModal({
                starting_top: '4%',
                ending_top: '4%',
                dismissible: false,
                in_duration: 200,
                ready: function () {
                    $closeButton.show();
                },
                complete: function () {
                }
            });
        }

        $closeButton.click(function () {
            $modal.closeModal();
            $closeButton.hide();
        })

        setTimeout(() => {
            if (!window.sessionStorage.getItem('isIntentPopUpShown')) {
                $(document).on("mouseout", evt => {
                    if ((evt.toElement === null || evt.toElement === undefined) && evt.relatedTarget === null && evt.offsetY <= 0) {
                        window.sessionStorage.setItem('isIntentPopUpShown', 'true');
                        $(evt.currentTarget).off("mouseout");
                        // An intent to exit has happened
                        showExitPopup();
                    }
                });
            }
            // showExitPopup();
        }, 0);
    });
}());

/*
Go to top
 */
(function () {
    $(function () {
        var $goToTop = $('.go-to-top');
        var $window = $(window);
        var windowHeight = $window.height();
        var windowWidth = $window.width();

        function checkGoToVisibility() {
            if ($window.scrollTop() > windowHeight / 2 && windowWidth < 993) {
                $goToTop.show();
            } else {
                $goToTop.hide();
            }
        }

        checkGoToVisibility();

        $window.scroll(function () {
            checkGoToVisibility();
        })

        $goToTop.click(function () {
            $("html, body").animate({scrollTop: 0}, "slow");
        })
    });
}());

/*
scam postcode
 */
(function () {
    function checkPostcodeValid(id) {
        var toCheck = $("#" + id).val();
        // Permitted letters depend upon their position in the postcode.
        var alpha1 = "[abcdefghijklmnoprstuwyz]";                       // Character 1
        var alpha2 = "[abcdefghklmnopqrstuvwxy]";                       // Character 2
        var alpha3 = "[abcdefghjkpmnrstuvwxy]";                         // Character 3
        var alpha4 = "[abehmnprvwxy]";                                  // Character 4
        var alpha5 = "[abdefghjlnpqrstuwxyz]";                          // Character 5
        var BFPOa5 = "[abdefghjlnpqrst]";                               // BFPO alpha5
        var BFPOa6 = "[abdefghjlnpqrstuwzyz]";                          // BFPO alpha6
        // Array holds the regular expressions for the valid postcodes
        var pcexp = new Array();
        // BFPO postcodes
        pcexp.push(new RegExp("^(bf1)(\\s*)([0-6]{1}" + BFPOa5 + "{1}" + BFPOa6 + "{1})$", "i"));
        // Expression for postcodes: AN NAA, ANN NAA, AAN NAA, and AANN NAA
        pcexp.push(new RegExp("^(" + alpha1 + "{1}" + alpha2 + "?[0-9]{1,2})(\\s*)([0-9]{1}" + alpha5 + "{2})$", "i"));
        // Expression for postcodes: ANA NAA
        pcexp.push(new RegExp("^(" + alpha1 + "{1}[0-9]{1}" + alpha3 + "{1})(\\s*)([0-9]{1}" + alpha5 + "{2})$", "i"));
        // Expression for postcodes: AANA  NAA
        pcexp.push(new RegExp("^(" + alpha1 + "{1}" + alpha2 + "{1}" + "?[0-9]{1}" + alpha4 + "{1})(\\s*)([0-9]{1}" + alpha5 + "{2})$", "i"));
        // Exception for the special postcode GIR 0AA
        pcexp.push(/^(GIR)(\s*)(0AA)$/i);
        // Standard BFPO numbers
        pcexp.push(/^(bfpo)(\s*)([0-9]{1,4})$/i);
        // c/o BFPO numbers
        pcexp.push(/^(bfpo)(\s*)(c\/o\s*[0-9]{1,3})$/i);
        // Overseas Territories
        pcexp.push(/^([A-Z]{4})(\s*)(1ZZ)$/i);
        // Anguilla
        pcexp.push(/^(ai-2640)$/i);
        // Load up the string to check
        var postCode = toCheck;
        // Assume we're not going to find a valid postcode
        var valid = false;
        // Check the string against the types of post codes
        for (var i = 0; i < pcexp.length; i++) {
            if (pcexp[i].test(postCode)) {
                // The post code is valid - split the post code into component parts
                pcexp[i].exec(postCode);
                // Copy it back into the original string, converting it to uppercase and inserting a space
                // between the inward and outward codes
                postCode = RegExp.$1.toUpperCase() + " " + RegExp.$3.toUpperCase();
                // If it is a BFPO c/o type postcode, tidy up the "c/o" part
                postCode = postCode.replace(/C\/O\s*/, "c/o ");
                // If it is the Anguilla overseas territory postcode, we need to treat it specially
                if (toCheck.toUpperCase() === 'AI-2640') {
                    postCode = 'AI-2640'
                }
                // Load new postcode back into the form element
                valid = true;
                // Remember that we have found that the code is valid and break from loop
                break;
            }
        }
        if (valid) {
            $("#" + id).val(postCode);
        }
        return !!valid;
    }

    function applyAddressTypeahead(id) {
        var $el = $("#" + id);
        $el.typeahead({
            minLength: 5,
            maxItem: 0,
            order: "asc",
            offset: false,
            dynamic: true,
            delay: 400,
            generateOnLoad: false,
            compression: true,
            searchOnFocus: true,
            source: {
                area: {
                    ajax: function (query) {
                        return {
                            type: "GET",
                            url: SITE_PATH + "includes/caseHelper.php",                               // MANISH
                            data: {
                                postcode: $el.val(),
                                type: 'fetchRealAddress'
                            }
                        }
                    }
                }
            },
            callback: {
                onSearch: function (node, query) {
                    var isValid = checkPostcodeValid(id);
                    if (isValid && !$el.closest('.typeahead__container').hasClass('result')) {
                        $el.trigger('input.typeahead');
                    }
                }
            }
        });
    }

    $(function () {
        applyAddressTypeahead('address_typeahead_1');
        applyAddressTypeahead('address_typeahead_2');
        applyAddressTypeahead('address_typeahead_3');
        applyAddressTypeahead('address_typeahead_4');
        applyAddressTypeahead('address_typeahead_5');
        applyAddressTypeahead('address_typeahead_6');
        applyAddressTypeahead('address_typeahead_7');
    });
}());
$(function () {
    $(".postcode").on("keyup blur", function () {
        var e = $(this).val(),
            t = "[abcdefghijklmnoprstuwyz]",
            a = "[abcdefghklmnopqrstuvwxy]",
            r = "[abdefghjlnpqrstuwxyz]",
            s = new Array;
        s.push(new RegExp("^(bf1)(\\s*)([0-6]{1}[abdefghjlnpqrst]{1}[abdefghjlnpqrstuwzyz]{1})$", "i")), s.push(new RegExp("^(" + t + "{1}" + a + "?[0-9]{1,2})(\\s*)([0-9]{1}" + r + "{2})$", "i")), s.push(new RegExp("^(" + t + "{1}[0-9]{1}[abcdefghjkpmnrstuvwxy]{1})(\\s*)([0-9]{1}" + r + "{2})$", "i")), s.push(new RegExp("^(" + t + "{1}" + a + "{1}?[0-9]{1}[abehmnprvwxy]{1})(\\s*)([0-9]{1}" + r + "{2})$", "i")), s.push(/^(GIR)(\s*)(0AA)$/i), s.push(/^(bfpo)(\s*)([0-9]{1,4})$/i), s.push(/^(bfpo)(\s*)(c\/o\s*[0-9]{1,3})$/i), s.push(/^([A-Z]{4})(\s*)(1ZZ)$/i), s.push(/^(ai-2640)$/i);
        for (var o = e, i = !1, n = 0; n < s.length; n++)
            if (s[n].test(o)) {
                s[n].exec(o), o = (o = RegExp.$1.toUpperCase() + " " + RegExp.$3.toUpperCase()).replace(/C\/O\s*/, "c/o "), "AI-2640" == e.toUpperCase() && (o = "AI-2640"), i = !0;
                break
            }
        i && $(this).val(o)
    });
});
