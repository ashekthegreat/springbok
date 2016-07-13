(function ($) {
    $(function () {
        if ("\v" == "v") {
            $("html").addClass("oldie");
        } else {
            $("html").addClass("modern");
        }
    });


    $(function () {
        var $modalContainer =$(".advert-modal-container");
        function showModal(){
            $modalContainer.fadeIn("fast");
        }
        function closeModal(){
            $modalContainer.fadeOut("fast");
        }
        $(".create").click(function(){
            showModal();
        });
        $(".close, .backdrop").click(function(){
            closeModal();
        });
    });

}(jQuery));