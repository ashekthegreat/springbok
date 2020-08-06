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
        } else{
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
    var monthSliderField = document.getElementById('month');

    function filterPips(value, type) {
        return value % 1 ? 2 : 1;
    }

    function formatValueToText(value) {
        var text = value;
        if (value === 1) {
            text += ' Month';
        } else if (value > 1) {
            text += ' Months';
        }
        return text + (value === 4 ? ' <br>or more' : '')
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
        start: 3,
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

    monthSlider.noUiSlider.on('update', function (values, handle) {
        monthSliderField.value = values[handle];
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

    $button.click(function () {
        // get the form data
        console.log($form.serializeArray());

        if ($heroSlider.data('unslider').current < $heroSlider.data('unslider').total - 1) {
            $heroSlider.data('unslider').next();
            afterSlide($heroSlider.data('unslider').current + 1, $heroSlider.data('unslider').total);
        }
    });
    var counter = 0;
    $banner.find('.custom-radio').click(function () {
        $(this).parent().find('.custom-radio').removeClass('checked');
        $(this).addClass('checked');
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
                console.log($form.serializeArray());

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
            $modal.closeModal();
            $('#exit-modal-close').hide();
            window.location.href = 'free-guide.php';
        });

        $('#exit-modal-close').click(function () {
            $modal.closeModal();
            $('#exit-modal-close').hide();
        })

        setTimeout(() => {
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

        }, 0);
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
                console.log(formData);
                if (current === 0) { // phone number
                    if (!formData[current].value) {
                        $form.find('#phone').closest('.form-item').addClass('input-error');
                        return false;
                    } else {
                        $form.find('#phone').closest('.form-item').removeClass('input-error');
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
                // $modal.find('.free-offer-slider li').height(300);
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

        function showFreeOfferPopup() {
            $modal.openModal({
                starting_top: '4%',
                ending_top: '4%',
                dismissible: false,
                in_duration: 200,
                ready: function () {
                    $('#free-offer-modal-close').show();
                    $modal.width(660);
                    $modal.find('.free-offer-slider').height(360);
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
