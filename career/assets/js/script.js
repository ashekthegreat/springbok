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

$(function(){
    if($(".people-box .people-story").length){
        /*$(".people-box .people-story").each(function(){
            var $story = $(this);
            $story.data("story", $(this).html());
            $story.find("p").each(function(){
                $story.append(" " + $(this).html());
                $(this).remove();
            });
            $story.find(".people-more").appendTo($story);
        });*/

        $(".people-box .people-story").dotdotdot({
            after: "a.people-more",
            watch: "window"
        });

        /*$(".people-boxes").on("click", ".people-more", function(){
            if($("#story-modal").length){
                var $people = $(this).closest(".people-box").clone();
                $people.find(".people-story").html($(this).closest(".people-story").data("story"));
                $people.find(".people-story .people-more").remove();
                $("#story-modal").find(".story-content").html($people.html());
                $("#story-modal").modal();
            }
            return false;
        });*/
    }
});