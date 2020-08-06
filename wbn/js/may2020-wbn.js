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
    var monthSliderField = document.getElementById('what_sort_of_time_frames_are_you_looking_to_work_towards');

    function filterPips(value, type) {
        return value % 1 ? 2 : 1;
    }

    function formatValueToText(value) {
        var text = value;
        if (value === 0) {
            text = 'Now';
        }else if (value === 0.5) {
            text = '2 Weeks';
        }else if (value === 1) {
            text += ' Month';
        } else if (value > 1) {
            text += ' Months';
        }
        return text + (value === 4 ? '+' : '')
    }

    function formatTextToValue(text) {
        return Number(value.replace(' Months or more', '').replace(' Months', '').replace(' Month', ''));
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
                return parseInt(value, 10);
            },
            from: function (value) {
                return parseInt(value, 10);
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

    monthSlider.noUiSlider.on('update', function (values, handle) {console.log(values[handle])
        if(values[handle]<1)
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
            success: function(data) {
                //console.log(data);
            },
            complete: function(){
                //alert('Completed')
            }
        });


        var current = $heroSlider.data('unslider').current;
        //console.log(formData);
        if(current == 1)	//LIVE IN PROPERTY
        {

        }else if( current === 2){
            var regPostcode = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;
            if(!(regPostcode.test($form.find('#postcode').val())) || $form.find('#postcode').val()==''){
                $form.find('#postcode').closest('.prop-postcode').addClass('input-error');
                return false;
            } else{
                $form.find('#postcode').closest('.prop-postcode').removeClass('input-error');
            }
        }else if( current === 3){
            var regEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if(!(regEmail.test($form.find('#email').val()))){
                $form.find('#email').closest('.unslider-active').addClass('input-error');
                return false;
            } else{
                $form.find('#email').closest('.unslider-active').removeClass('input-error');
            }
        }else if( current === 4){ // phone number
            var regPhone = /^((\+44\s?|0?)7([345789]\d{2}|624)\s?\d{3}\s?\d{3})$/;
            if($form.find('#phone').val()==''){	//!(regPhone.test($form.find('#phone').val())) ||
                $form.find('#phone').closest('.unslider-active').addClass('input-error');
                return false;
            } else{
                $form.find('#phone').closest('.unslider-active').removeClass('input-error');
            }
        }else if( current === 5){ // name
            if($form.find('#name').val()==''){
                $form.find('#name').closest('.unslider-active').addClass('input-error');
                return false;
            } else{
                $form.find('#name').closest('.unslider-active').removeClass('input-error');
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


/*
exit intent
 */
(function ($) {
    $(function () {
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
                $modal.find('.modal-dialog').width(660);
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
            if ($modal.data('bs.modal')) {
                $modal.modal('show');
                return;
            }
            $modal.on('shown.bs.modal', function (e) {
                $modal.find('.chat-phone-yes').fadeIn({easing: 'swing'});
                $('#exit-modal-close').show();
                if (!$modal.find('.unslider').length) {
                    prepareSlider();
                }
            });
            $modal.modal({
                backdrop: 'static',
                keyboard: false,
                focus: false,
                show: true
            });
        }


        $modal.find('.footer-button-no').click(function () {
            if ($modal.find('#phone').val() == '') {
                $modal.modal('hide');
                $('#exit-modal-close').hide();
                window.location.href = 'free-guide.php';
            }
        });

        $('#exit-modal-close').click(function () {
            $modal.modal('hide');
            $('#exit-modal-close').hide();
        })

        setTimeout(() => {
            if ($('.section-free-guide').length) {
                return;
            }
            /*if (!window.sessionStorage.getItem('isIntentPopUpShown')) {
                $(document).on("mouseout", evt => {
                    if ((evt.toElement === null || evt.toElement === undefined) && evt.relatedTarget === null && evt.offsetY <= 0) {
                        window.sessionStorage.setItem('isIntentPopUpShown', 'true');
                        $(evt.currentTarget).off("mouseout");
                        // An intent to exit has happened
                        showExitPopup();
                    }
                });
            }*/
            if (!window.sessionStorage.getItem('isIntentPopUpShown')) {
                $(document).on("mouseout", function (e) {
                    // If this is an autocomplete element.
                    if (e.target.tagName.toLowerCase() === "input") {
                        return;
                    }

                    // If the current mouse Y position is not within 50px of the top
                    // edge of the viewport, return.
                    if (e.clientY > 5) {
                        return;
                    }

                    // Reliable, works on mouse exiting window and
                    // user switching active program
                    var from = e.relatedTarget || e.toElement;
                    if (!from) {
                        window.sessionStorage.setItem('isIntentPopUpShown', 'true');
                        $(e.currentTarget).off("mouseout");
                        // An intent to exit has happened
                        showExitPopup();
                    }
                });
            }

        }, 2000);
    });

}(jQuery));


/*
Free guide modal
 */
(function ($) {
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
                console.log(formData);
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
                $modal.find('.modal-dialog').width(660);
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
            if ($modal.data('bs.modal')) {
                $modal.modal('show');
                return;
            }
            $modal.on('shown.bs.modal', function (e) {
                $('#free-offer-modal-close').show();
                $modal.find('.modal-dialog').width(660);
                $modal.find('.free-offer-slider').height(360);
                $modal.find('#free-guide-email').val(guideEmail)
                if (!$modal.find('.unslider').length) {
                    prepareSlider();
                }
            });
            $modal.modal({
                backdrop: 'static',
                keyboard: false,
                focus: false,
                show: true
            });
        }

        $('#free-offer-modal-close').click(function () {
            $modal.modal('hide');
            $('#free-offer-modal-close').hide();
        })
        $('.toast').toast({
            delay: 3000
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
        });
    });
}(jQuery));
