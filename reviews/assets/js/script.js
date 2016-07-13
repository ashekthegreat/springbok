$(function () {
    if ($(".content-reviews").length) {

        $(".star").each(function () {
            var path = 'assets/images/raty';
            var starName = 'star-on.png';
            var score = $(this).attr('data-score') || 0;
            if (score < 5) {
                starName = 'star-on-yellow.png';
            }

            $(this).raty({
                path: path,
                readOnly: true,
                score: score,
                starOn: starName
            });
        });

        function resizeReviewItems() {
            $(".review-item").css("height", "auto");
            var maxHeight = 0;
            $(".review-item").each(function () {
                if ($(this).height() > maxHeight) {
                    maxHeight = $(this).height();
                }
            });
            $(".review-item").height(maxHeight);
        }

        resizeReviewItems();

        $(window).resize(function () {
            resizeReviewItems();
        })
    }
});

$(function () {
    if ($(".review-form").length) {
        var path = 'assets/images/raty';
        var lastScore = 0;
        $('.score').raty({
            path: path,
            mouseover: function (score, evt) {
                if (score != lastScore) {
                    if (score == 5) {
                        $('.score').raty('set', {starOn: 'star-on.png'});
                    } else if (score == 1) {
                        $('.score').raty('set', {starOn: 'star-on-red.png'});
                    } else {
                        $('.score').raty('set', {starOn: 'star-on-yellow.png'});
                    }
                    lastScore = score;
                }
            }
        });

        function resizeReviewForm() {
            var minHeight = $(window).outerHeight(true) - $("header").outerHeight(true) - $("footer").outerHeight(true) -3;
            $(".review-form").css("min-height", minHeight + "px");
        }

        resizeReviewForm();

        $(window).resize(function () {
            resizeReviewForm();
        })
    }
});