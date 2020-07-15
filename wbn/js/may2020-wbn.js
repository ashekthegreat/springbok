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
