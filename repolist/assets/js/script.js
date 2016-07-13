var supportsTouch = (('ontouchstart' in window) || (navigator.msMaxTouchPoints > 0));
(function ($) {
    $(function () {
        if ("\v" == "v") {
            $('input, textarea').placeholder();
        } else {
            $("html").addClass("modern");
        }
    });

    $(function () {
        // resize section height
        function resizeMainSection() {
            $(".main-section").css("min-height", ($(window).height() - $(".main-header").height()) + "px");
        }

        resizeMainSection();
        $(window).resize(function () {
            resizeMainSection();
        });
    });

    $(function () {
        var $tabContent = $(".property-details .tab-content");
        var minHeight = $tabContent.height();
        $tabContent.css("min-height", minHeight + "px");

        $('.property-details a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            var $target = $($(e.target).attr("href"));
            var targetHeight = $target.outerHeight(true);
            if (targetHeight > minHeight) {
                minHeight = targetHeight;
                $tabContent.css("min-height", minHeight + "px");
            }
            //e.target // newly activated tab
            //e.relatedTarget // previous active tab
        })
    });

    $(function(){
        $(".map").each(function(){
            var url = "https://maps.googleapis.com/maps/api/staticmap?zoom=13&maptype=roadmap";
            var address = $(this).data("address");
            var apiKey = "AIzaSyBoidb_b8Az_9rmoxfdeOmEW1KvhJ-_Ct0"

            url += "&key=" + apiKey;
            url += "&markers=color:blue%7C" + address;
            url += "&size=" + $(this).parent().width() + "x" + $(this).parent().width();
            $(this).attr("src", url);
        })
    })

}(jQuery));