(function ($) {
    $(function () {
        if ("\v" == "v") {
            $("html").addClass("oldie");
        } else {
            $("html").addClass("modern");
        }
    });


    $(function () {
        $(".properties").fitText(.35);
    });

}(jQuery));