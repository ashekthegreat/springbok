/*
property range slider
 */
(function () {
    $(function () {
        var $section = $('.section-step-property');
        if (!$section.length) {
            return;
        }

        function formatValueToText(value) {
            // return '£' + value;
            return '£' + parseInt(value, 10).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        function formatTextToValue(text) {
            return Number(value.replace('£', '').replace(',', ''));
        }

        $section.find('.range-slider[data-min]').each(function(){
            var rangeElement = $(this).get(0);
            var rangeField = $(this).closest('.form-field').find('input:first').get(0);
            var min = +$(this).data('min');
            var max = +$(this).data('max');
            var start = rangeField.value;

            noUiSlider.create(rangeElement, {
                start: start,
                connect: false,
                range: {
                    'min': min,
                    'max': max
                },
                step: 1,
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
                        return formatValueToText(value);
                    },
                    from: function (value) {
                        return formatTextToValue(value);
                    }
                },
            });

            rangeElement.noUiSlider.on('update', function (values, handle) {
                rangeField.value = values[handle];
            });
        })
    });
}());


/*
month range slider
 */
(function () {
    $(function () {
        var $section = $('.section-step-property');
        if (!$section.length) {
            return;
        }

        var monthSlider = document.getElementById('month-slider');
        var monthSliderField = document.getElementById('month');

        if(!monthSlider || !monthSliderField){
            return;
        }

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
            connect: false,
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
    });
}());


/*
Step-1 OTP
 */
(function () {
    $(function () {
        var $section = $('.section-step-otp');
        if (!$section.length) {
            return;
        }

        $section.find('#send-otp').click(function(){
            // TODO: add actual OTP sending logic
            $section.find('.otp-collector').slideDown('slow', function (){
                $section.find('.otp-collector input').focus();
            });
        })
    });
}());


/*
Step-3 Property condition
 */
(function () {
    $(function () {
        var $section = $('.section-step-property');
        if (!$section.length) {
            return;
        }

        $section.find('#property_condition_yes').closest('label').click(function(){
            $section.find('.property-mortgage').slideUp('fast');
        });
        $section.find('#property_condition_no').closest('label').click(function(){
            $section.find('.property-mortgage').slideDown('fast');
        });
    });
}());


/*
Step-5 video reviews
 */
(function () {
    $(function () {
        var $modal = $("#modal-video");
        $(".section-step-thank .youtube-video").click(function () {
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
