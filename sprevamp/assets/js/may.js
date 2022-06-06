/*
navbar-fix
 */

(function () {
    // subNav fix on scroll
    var $subNav = $('.navbar-fixed .sub-nav');

    function toggleSubNav() {
        var currentScrollPos = window.pageYOffset;

        // 20 is an arbitrary number here
        if (currentScrollPos > 20) {
            $subNav.slideUp('fast');
        } else {
            $subNav.slideDown('fast');
        }
    }

    window.onscroll = function () {
        if (window.innerWidth <= 600) {
            toggleSubNav();
        }
    }
    $(window).on('resize', function () {
        if (window.innerWidth <= 600) {
            toggleSubNav();
        } else {
            $subNav.show();
        }
    });
}());


/*
hero-1 slider
 */

(function () {
    var $banner = $('#hero-banner-1');
    var $form = $banner.find('form');
    if (!$banner.length) {
        return;
    }

    var monthSlider = document.getElementById('month-slider');
    var monthSliderField = document.getElementById('when_do_you_need_money_in_the_bank');

    //alert(monthSliderField.value)
    function filterPips(value, type) {
        return value % 1 ? 2 : 1;
    }

    function formatValueToText(value) {
        var text = value;
        if (value === 0) {
            text = 'Now';
        } else if (value === 0.5) {
            text = '2 Weeks';
        } else if (value === 1) {
            text += ' Month';
        } else if (value > 1) {
            text += ' Months';
        }
        return text + (value === 4 ? ' <br>or more' : '')
    }


    function formatTextToValue(text) {
        return (value.replace(' Months or more', '').replace(' Months', '').replace(' Month', ''));
    }


    noUiSlider.create(monthSlider, {
        connect: [true, false],
        range: {
            min: 0,
            max: 4
        },
        start: 1,
        step: 0.5,
        behaviour: 'snap',
        format: {
            to: function (value) {
                return parseFloat(value, 10);
            },
            from: function (value) {
                return parseFloat(value, 10);
            }
        },
        tooltips: {
            to: function (value) {
                // return value + (value === 1 ? ' month' : ' months');
                return formatValueToText(value);
            },
            from: function (value) {
                return formatTextToValue(value);
            }
        },
        pips: {
            mode: 'steps',
            values: 1,
            density: 12,
            filter: filterPips,
            format: {
                to: function (value) {
                    // return value + (value === 1 ? ' month' : ' months');
                    return formatValueToText(value);
                },
                from: function (value) {
                    return formatTextToValue(value);
                }
            }
        }
    });


    monthSlider.noUiSlider.on('update', function (values, handle) {
        /*if(values[handle]<1)
        {
            monthSliderField.value = 1082;
        }else if(values[handle]>=1 && values[handle]<2){
            monthSliderField.value = 1083;
        }else if(values[handle]>=2 && values[handle]<3){
            monthSliderField.value = 1084;
        }else if(values[handle]>=3 && values[handle]<4){
            monthSliderField.value = 1085;
        }else {
            monthSliderField.value = 1086;
        }*/

        if (values[handle] != '') {
            switch (values[handle]) {
                case 0.5:
                    monthSliderField.value = 1088;
                    break;
                case 1:
                    monthSliderField.value = 1077;
                    break;
                case 1.5:
                    monthSliderField.value = 1087;
                    break;
                case 2:
                    monthSliderField.value = 1078;
                    break;
                case 2.5:
                    monthSliderField.value = 1089;
                    break;
                case 3:
                    monthSliderField.value = 1079;
                    break;
                case 3.5:
                    monthSliderField.value = 1090;
                    break;
                case 4:
                    monthSliderField.value = 1080;
                    break;
                //case '4+':   monthSliderField.value = 1081; 	break;
            }
        }
    });


    // main slider

    var $heroSlider = $banner.find('.hero-slider');
    var $prev = $banner.find('.prev');
    var $button = $banner.find('.offer-button');
    $heroSlider.unslider({
        arrows: false,
        keys: false,
        nav: false,
        infinite: false,
        autoplay: false,
        speed: 300
    });

    $prev.click(function () {
        if ($heroSlider.data('unslider').current > 0) {
            $heroSlider.data('unslider').prev();
            afterSlide($heroSlider.data('unslider').current + 1, $heroSlider.data('unslider').total);
        }
    });


    //---GENERATE RAND NUMBER

    var timeStampInMs = window.performance && window.performance.now && window.performance.timing && window.performance.timing.navigationStart ? window.performance.now() + window.performance.timing.navigationStart : Date.now();

    $('#randnum').val(timeStampInMs, Date.now())


    $button.click(function () {

        // get the form data

        //console.log($form.serializeArray());


        //PUSH FORM DATA TO DB

        $.ajax({

            url: "/includes/caseHelper.php",

            method: "POST",

            data: $form.serializeArray(),

            success: function (data) {

                //console.log(data);

            },

            complete: function () {

                //alert('Completed')

            }

        });


        var current = $heroSlider.data('unslider').current;

        //console.log(formData);

        if (current == 0 || current == 1)	//LIVE IN PROPERTY

        {


        } else if (current === 2) {

            var regPostcode = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;

            if (!(regPostcode.test($form.find('#postcode').val())) || $form.find('#postcode').val() == '') {

                $form.find('#postcode').closest('.prop-postcode').addClass('input-error');

                return false;

            } else {

                $form.find('#postcode').closest('.prop-postcode').removeClass('input-error');

            }

        } else if (current === 3) {

            var regEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if (!(regEmail.test($form.find('#email').val()))) {

                $form.find('#email').closest('.unslider-active').addClass('input-error');

                return false;

            } else {

                $form.find('#email').closest('.unslider-active').removeClass('input-error');

            }

        } else if (current === 4) { // phone number

            var regPhone = /^((\+44\s?|0?)7([345789]\d{2}|624)\s?\d{3}\s?\d{3})$/;

            if ($form.find('#phone').val() == '') {	//!(regPhone.test($form.find('#phone').val())) ||

                $form.find('#phone').closest('.unslider-active').addClass('input-error');

                return false;

            } else {

                $form.find('#phone').closest('.unslider-active').removeClass('input-error');

            }

        } else if (current === 5) { // name

            if ($form.find('#name').val() == '') {

                $form.find('#name').closest('.unslider-active').addClass('input-error');

                return false;

            } else {

                $form.find('#name').closest('.unslider-active').removeClass('input-error');
                $form.submit();
                $button.attr('disabled', 'disabled');
                $button.closest('.other-steps').text('Submitting...');
            }

        }


        if ($heroSlider.data('unslider').current < $heroSlider.data('unslider').total - 1) {

            $heroSlider.data('unslider').next();

            afterSlide($heroSlider.data('unslider').current + 1, $heroSlider.data('unslider').total);

        }

    });

    var counter = 0;

    $banner.find('.custom-radio').click(function () {

        $(this).parent().find('.custom-radio').removeClass('checked');

        $(this).addClass('checked');

        $('#do_you_live_in_the_property').val($('input[name="living"]:checked').val())		// MANISH CUSTOM

        counter++;

        if (counter % 2 === 0) {

            $heroSlider.data('unslider').next();

            afterSlide($heroSlider.data('unslider').current + 1, $heroSlider.data('unslider').total);

        }

    })


    $banner.find('.progress .progress-bar').css('width', '0%');

    $banner.find('.progress .progress-text').text('Progress 0%');


    function afterSlide(current, total) {

        if (current === 1) {

            // first slide

            $banner.find('.hero-progress').slideUp('fast');

            $banner.find('.hero-slider-prev').slideUp('fast');

            $banner.find('.offer-button .first-step').show();

            $banner.find('.offer-button .other-steps').hide();

        } else {

            // other slides

            $banner.find('.hero-progress').slideDown('fast');

            $banner.find('.hero-slider-prev').slideDown('fast');

            $banner.find('.offer-button .first-step').hide();

            $banner.find('.offer-button .other-steps').show();

        }


        $banner.find('.progress .progress-bar').css('width', (current - 1) * 100 / total + '%');

        $banner.find('.progress .progress-text').text('Progress ' + Math.round((current - 1) * 100 / total) + '%');


        if (current === total) {

            setTimeout(function () {

                $banner.find('.offer-button').attr('type', 'submit');

            }, 300)

        } else {

            $banner.find('.offer-button').attr('type', 'button');

        }


        if (history.pushState) {

            var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?question_page=' + current;

            window.history.pushState({path: newurl}, '', newurl);

        }

    }


    window.onpopstate = function (e) {

        var match,

            pl = /\+/g,  // Regex for replacing addition symbol with a space

            search = /([^&=]+)=?([^&]*)/g,

            decode = function (s) {

                return decodeURIComponent(s.replace(pl, " "));

            },

            query = window.location.search.substring(1);


        var urlParams = {};

        while (match = search.exec(query)) {

            urlParams[decode(match[1])] = decode(match[2]);

        }

        if (urlParams['question_page']) {

            var toIndex = +urlParams['question_page'] - 1;

            var current = $heroSlider.data('unslider').current;

            if (toIndex < current) {

                for (var i = 0; i < current - toIndex; i++) {

                    $heroSlider.data('unslider').prev();

                }

            } else if (toIndex > current) {

                for (var i = 0; i < toIndex - current; i++) {

                    $heroSlider.data('unslider').next();

                }

            }

            afterSlide($heroSlider.data('unslider').current + 1, $heroSlider.data('unslider').total);

        }

    }

}());


/* SOLD HOUSE PRICES - CAPTURE POSTCODE*/

(function () {

    var qs = window.location.href.split('?')[0];//document.location.href.match(/[^\/]+$/)[0];

    var qsFile = qs.split('/').pop();	//console.log(qsFile)

    if (qsFile == 'sold-house-prices' || qsFile == 'how-much-is-my-house-worth-tool') {

        var urlParams = new URLSearchParams(window.location.search);

        if (urlParams.get('postcode') != '') {

            $('#postcode').val(urlParams.get('postcode'));

        }

    }

}());


/*

Services

 */

(function () {

    function adjustLine(from, to, line, connectType) {

        var fT = from.offsetTop + from.offsetHeight / 2 + 2;

        var tT = to.offsetTop + to.offsetHeight / 2 + 2;


        if (connectType === 'edge') {

            var fL = from.offsetLeft + from.offsetWidth + 20;

            var tL = to.offsetLeft - 20;

        } else {

            var fL = from.offsetLeft + from.offsetWidth / 2;

            var tL = to.offsetLeft + to.offsetWidth / 2;

        }


        var CA = Math.abs(tT - fT);

        var CO = Math.abs(tL - fL);

        var H = Math.sqrt(CA * CA + CO * CO);

        var ANG = 180 / Math.PI * Math.acos(CA / H);


        if (tT > fT) {

            var top = (tT - fT) / 2 + fT;

        } else {

            var top = (fT - tT) / 2 + tT;

        }

        if (tL > fL) {

            var left = (tL - fL) / 2 + fL;

        } else {

            var left = (fL - tL) / 2 + tL;

        }


        if ((fT < tT && fL < tL) || (tT < fT && tL < fL) || (fT > tT && fL > tL) || (tT > fT && tL > fL)) {

            ANG *= -1;

        }

        top -= H / 2;


        line.style["-webkit-transform"] = 'rotate(' + ANG + 'deg)';

        line.style["-moz-transform"] = 'rotate(' + ANG + 'deg)';

        line.style["-ms-transform"] = 'rotate(' + ANG + 'deg)';

        line.style["-o-transform"] = 'rotate(' + ANG + 'deg)';

        line.style["-transform"] = 'rotate(' + ANG + 'deg)';

        line.style.top = top + 'px';

        line.style.left = left + 'px';

        line.style.height = H + 'px';

    }


    $(function () {

        if ($('.section-services-steps').length) {

            var $parent = $('.section-services-steps');

            var $node1 = $parent.find('.buy-step-1 .step-title');

            var $node2 = $parent.find('.buy-step-2 .step-title');

            var $node3 = $parent.find('.buy-step-3 .step-title');

            var $line1 = $parent.find('#line1');

            var $line2 = $parent.find('#line2');


            function drawLines() {

                adjustLine($node1.get(0), $node2.get(0), $line1.get(0), 'edge');

                adjustLine($node2.get(0), $node3.get(0), $line2.get(0), 'edge');

            }


            setTimeout(function () {

                drawLines();

            }, 500)


            $(window).on('resize', function () {

                drawLines();

            });

        }

    })

    $(function () {

        if ($('.section-services-steps-auction').length) {

            var $parent = $('.section-services-steps-auction');

            var $node1 = $parent.find('.buy-step-1 .step-number');

            var $node2 = $parent.find('.buy-step-2 .step-number');

            var $node3 = $parent.find('.buy-step-3 .step-number');

            var $line1 = $parent.find('#line1');

            var $line2 = $parent.find('#line2');


            function drawLines() {

                adjustLine($node1.get(0), $node2.get(0), $line1.get(0), 'center');

                adjustLine($node2.get(0), $node3.get(0), $line2.get(0), 'center');

            }


            setTimeout(function () {

                drawLines();

            }, 500)


            $(window).on('resize', function () {

                drawLines();

            });

        }

    })


    $(function () {

        var $section = $('.services-jumbo');

        if ($section.length) {

            var $speech = $section.find('.main-speech');

            var $bg = $section.find('.main-speech-bg');


            function reShapeBg() {

                var left = $(window).innerWidth() - $bg.width();

                $bg.css({

                    left: left + 'px'

                })

                $bg.height($speech.outerHeight());

            }


            reShapeBg();

            setTimeout(function () {

                reShapeBg();

            }, 300)

            $(window).on('resize', function () {

                reShapeBg();

            });

        }

    })

}());


/*

investment video reviews

 */

(function () {

    $(function () {

        var $modal = $("#modal-video");

        $(".section-investment-reviews .investment-videos").click(function () {

            var id = $(this).data("id");


            $modal.find(".modal-content").empty().append('<div class="video-container"><iframe class="responsive-img" width="560" height="315" src="https://www.youtube.com/embed/' + id + '?showinfo=0&rel=0&autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>');

            $modal.openModal({

                complete: function () {

                    $modal.find(".modal-content").empty();

                }

            });

        });

    });

}());


/*

exit intent

 */

(function () {
    $(function () {
        if ($('.buyer-page').length) {
            $('.hide-on-buyer-page').css('display', 'none !important').removeClass('fixed-free-val');
            return;
        }

        var $modal = $("#modal-exit");
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
                //console.log($form.serializeArray());
                var current = $exitSlider.data('unslider').current;
                //console.log($button)
                if (($form.find('#phone').val() != '' && $(this).val() == 'no') || $(this).val() == 'yes') {
                    if (current == 0)	//LIVE IN PROPERTY
                    {
                        if ($form.find('#phone').val() == '') {	//!(regPhone.test($form.find('#phone').val())) ||
                            $form.find('#phone').closest('.unslider-active').addClass('input-error');
                            return false;
                        } else {
                            $form.find('#phone').closest('.unslider-active').removeClass('input-error');
                        }

                    } else if (current === 1) {
                        var regPostcode = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;

                        if (!(regPostcode.test($form.find('#postcode').val())) || $form.find('#postcode').val() == '') {
                            $form.find('#postcode').closest('.prop-postcode').addClass('input-error');
                            return false;
                        } else {
                            $form.find('#postcode').closest('.prop-postcode').removeClass('input-error');
                        }
                    } else if (current === 2) {
                        var regEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                        if (!(regEmail.test($form.find('#email').val()))) {
                            $form.find('#email').closest('.unslider-active').addClass('input-error');
                            return false;
                        } else {
                            $form.find('#email').closest('.unslider-active').removeClass('input-error');
                        }
                    } else if (current === 3) { // name
                        if ($form.find('#name').val() == '') {
                            $form.find('#name').closest('.unslider-active').addClass('input-error');
                            return false;
                        } else {
                            $form.find('#name').closest('.unslider-active').removeClass('input-error');
                            $form.submit();
                            $button.attr('disabled', 'disabled');
                            $button.closest('.other-steps').text('Submitting...');
                        }
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
                $modal.find('.footer-button-yes .first-step').show();
                $modal.find('.footer-button-yes .other-steps').hide();
            } else {
                // other slides
                $modal.find('.exit-progress').slideDown('fast');
                $modal.find('.footer-button-yes .first-step').hide();
                $modal.find('.footer-button-yes .other-steps').show();
                $modal.find('.footer-button-yes').css('padding-right', 0);
                $modal.find('.footer-button-no').hide();
                $modal.find('.lock-message').show();
                $modal.find('.exit-slider li').height(240);
                $modal.width(660);
            }

            $modal.find('.progress .progress-bar').css('width', (current - 1) * 100 / total + '%');
            $modal.find('.progress .progress-text').text('Progress ' + Math.round((current - 1) * 100 / total) + '%');

            if (current === total) {
                setTimeout(function () {
                    $modal.find('.footer-button-yes .footer-button').attr('type', 'submit');
                }, 300)
            } else {
                $modal.find('.footer-button-yes .footer-button').attr('type', 'button');
            }
        }

        function showExitPopup() {
            $modal.openModal({
                starting_top: '4%',
                ending_top: '4%',
                dismissible: false,
                in_duration: 200,
                ready: function () {
                    $modal.find('.chat-phone-yes').fadeIn({easing: 'swing'});
                    $('#exit-modal-close').show();
                },
                complete: function () {
                    // $modal.find(".modal-content").empty();
                }
            });
        }

        prepareSlider();

        $modal.find('.footer-button-no').click(function () {
            if ($modal.find('#phone').val() == '') {
                $modal.closeModal();
                $('#exit-modal-close').hide();
                window.location.href = 'free-guide';
            }
        });


        $('#exit-modal-close').click(function () {
            $modal.closeModal();
            $('#exit-modal-close').hide();
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
        }, 0);

        //-- FOR  HOME PAGE ENTER DETAILS
        $('#send-to-top').on('click', function () {
            $('.top-form').focus();
        });

        $('#send-to-slider').on('click', function () {
            $('.chat-form').focus();
        });

        $('.goto-top-form').on('click', function () {
            $('.top-form').focus();
        });
    });
}());


/*

Free guide modal

 */

(function () {

    $(function () {


        if (!$('.section-free-guide').length) {

            return;

        }


        var $modal = $("#modal-free-offer");

        var $form = $modal.find('form');


        function prepareSlider() {

            var $freeGuideSlider = $modal.find('.free-offer-slider');

            var $button = $modal.find('.footer-button');

            $freeGuideSlider.unslider({

                arrows: false,

                keys: false,

                nav: false,
                infinite: false,

                autoplay: false,

                speed: 300

            });


            $button.click(function () {

                // get the form data

                var formData = $form.serializeArray();

                var current = $freeGuideSlider.data('unslider').current;

                //console.log(formData);

                if (current === 0) { // phone number

                    if (!formData[current].value) {

                        $form.find('#phone').closest('.form-item').addClass('input-error');

                        return false;

                    } else {

                        $form.find('#phone').closest('.form-item').removeClass('input-error');

                    }

                } else if (current === 1) {

                    var regPostcode = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;

                    if (!(regPostcode.test($form.find('#postcode').val())) || $form.find('#postcode').val() == '') {

                        $form.find('#postcode').closest('.form-item').addClass('input-error');

                        return false;

                    } else {

                        $form.find('#postcode').closest('.form-item').removeClass('input-error');

                    }

                } else if (current === 2) { // name

                    if ($form.find('#name').val() == '') {

                        $form.find('#name').closest('.form-item').addClass('input-error');

                        return false;

                    } else {

                        $form.find('#name').closest('.form-item').removeClass('input-error');

                    }

                }


                if ($freeGuideSlider.data('unslider').current < $freeGuideSlider.data('unslider').total - 1) {

                    $freeGuideSlider.data('unslider').next();

                    afterSlide($freeGuideSlider.data('unslider').current + 1, $freeGuideSlider.data('unslider').total);

                }

            });

        }


        function afterSlide(current, total) {

            if (current === 1) {

                // first slide

                $modal.find('.free-offer-progress').slideUp('fast');

                $modal.find('.footer-button-yes .first-step').show();

                $modal.find('.footer-button-yes .other-steps').hide();

            } else {

                // other slides

                $modal.find('.free-offer-progress').slideDown('fast');
                $modal.find('.footer-button-yes .first-step').hide();

                $modal.find('.footer-button-yes .other-steps').show();

                $modal.find('.footer-button-yes').css('padding-right', 0);

                $modal.find('.lock-message').show();

                //$modal.find('.free-offer-slider li').height(300);

                $modal.width(660);

            }


            $modal.find('.progress .progress-bar').css('width', (current - 1) * 100 / total + '%');

            $modal.find('.progress .progress-text').text('Progress ' + Math.round((current - 1) * 100 / total) + '%');


            if (current === total) {

                setTimeout(function () {

                    $modal.find('.footer-button-yes .footer-button').attr('type', 'submit');

                }, 300)

            } else {

                $modal.find('.footer-button-yes .footer-button').attr('type', 'button');

            }

        }


        function showFreeOfferPopup(guideEmail) {
            $modal.openModal({
                starting_top: '4%',
                ending_top: '4%',
                dismissible: false,
                in_duration: 200,
                ready: function () {
                    $('#free-offer-modal-close').show();
                    $modal.width(660);
                    $modal.find('.free-offer-slider').height(360);
                    $modal.find('#free-guide-email').val(guideEmail)
                },
                complete: function () {

                    // $modal.find(".modal-content").empty();


                }

            });


        }


        prepareSlider();


        $('#free-offer-modal-close').click(function () {

            $modal.closeModal();

            $('#free-offer-modal-close').hide();

        })


        $('.section-free-guide #show-free-offer-modal').click(function () {

            var regEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if ($('#email-free-guide').val() == '' || !(regEmail.test($('#email-free-guide').val()))) {

                $('.section-free-guide #show-free-offer-modal').closest('.form-item').addClass('input-error');
                return false;
            } else {
                $('.section-free-guide #show-free-offer-modal').closest('.form-item').removeClass('input-error');
                showFreeOfferPopup($('#email-free-guide').val());
            }
        })
    });
}());
