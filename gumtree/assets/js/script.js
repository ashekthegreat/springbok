(function ($) {
    var supportsTouch = (('ontouchstart' in window) || (navigator.msMaxTouchPoints > 0));

    $(function () {
        if ("\v" == "v") {
            $("html").addClass("oldie");
        } else {
            $("html").addClass("modern");
        }
    });

    $(function () {
        function resizeFeeBoxes() {
            var maxHeight = 0;
            var $items = $(".fee-box-content");
            $items.css("height", "auto");
            if($(window).width() >= 500){
                $items.each(function () {
                    if ($(this).height() > maxHeight) {
                        maxHeight = $(this).height();
                    }
                });
                $items.height(maxHeight);
            }
        }

        resizeFeeBoxes();
        $(window).resize(function () {
            resizeFeeBoxes();
        });

        if(supportsTouch){
            // replace phone numbers to a clickable link
            $(".phone").each(function(){
                var text = $.trim($(this).text());
                var re = new RegExp(" ", 'g');
                var phone = text.replace(re, "");
                $(this).empty().append('<a href="tel:' + phone + '">'+ text +'</a>')
            })
        }
        $('img').css("height", "auto");
    });

    // modal feature
    $(function () {
        var $modalContainer =$(".advert-modal-container");
        function showModal(){
            $modalContainer.fadeIn("fast");
        }
        function closeModal(){
            $modalContainer.fadeOut("fast");
        }
        $(".buy-now").click(function(){
            showModal();
        });
        $(".close, .backdrop").click(function(){
            closeModal();
        });
    });

}(jQuery));