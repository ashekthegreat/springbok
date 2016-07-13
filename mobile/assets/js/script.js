$(function () {
    var scrollBarWidth = 0;
    var $a = $("<div>&nbsp;</div>");
    $("body").append($a);
    var first = $a.width();
    $("body").css("overflow-y", "hidden");
    var second = $(window).width();
    $("body").css("overflow-y", "");
    $a.remove();
    scrollBarWidth = second - first;


    try {
        $("<style>")
            .prop("type", "text/css")
            .html('body.modal-open, .modal-open .navbar-fixed-top, .modal-open .navbar-fixed-bottom { margin-right: ' + scrollBarWidth + 'px; } .modal-open .box.hero .box-inner { right: ' + scrollBarWidth + 'px; } .modal-open .block-wrapper-inner { right: ' + scrollBarWidth + 'px; }')
            .appendTo("head");
    }
    catch (err) {
        //
    }

});
