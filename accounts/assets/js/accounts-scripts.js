/**
 * Created by ashek.elahi on 1/22/2018.
 */
(function () {
    $(function () {
        $(".menu-button").sideNav({
            menuWidth: 260,
            edge: 'left',
            closeOnClick: false
        });
        $(".dropdown-main-nav").dropdown({
            hover: true,
            constrain_width: false,
            belowOrigin: true
        });
    });

    $(function(){
        if($(".properties-list").length){
            var $section = $(".properties-list");

            function resizeImage($imageContainer) {
                var im = $imageContainer.children('img');
                im.attr("style", "").removeClass('ww wh');
                //set size
                var th = $imageContainer.height(),//box height
                    tw = $imageContainer.width(),//box width
                    ih = im.height(),//inital image height
                    iw = im.width();//initial image width
                if (ih > iw) {//if portrait
                    im.addClass('ww').removeClass('wh');//set width 100%
                } else {//if landscape
                    im.addClass('wh').removeClass('ww');//set height 100%
                }
                //set offset
                var nh = im.height(),//new image height
                    nw = im.width(),//new image width
                    hd = (nh - th) / 2,//half dif img/box height
                    wd = (nw - tw) / 2;//half dif img/box width
                if (nh < nw) {//if portrait
                    im.css({marginLeft: '-' + wd + 'px', marginTop: 0});//offset left
                } else {//if landscape
                    im.css({marginTop: '-' + hd + 'px', marginLeft: 0});//offset top
                }
            }

            function resizeAllImage() {
                $(".card-image-container").each(function () {
                    resizeImage($(this));
                })
            }
            resizeAllImage();

            $(window).resize(function () {
                resizeAllImage();
            });
        }
    });

    $(function(){
        if($(".section-book-viewing").length){
            var $section = $(".section-book-viewing");
            var $dateBoxes = $section.find(".date-boxes");
            var weekDays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

            // populate date blocks
            function populateDateBlocks(firstDate) {
                var today = new Date();
                $dateBoxes.empty();
                var weekDay, day, slots;
                for(var i=0; i<5; i++){
                    if(today.getDate() == firstDate.getDate() && today.getMonth() == firstDate.getMonth() && today.getYear() == firstDate.getYear()){
                        weekDay = "Today";
                    } else{
                        weekDay = weekDays[firstDate.getDay()];
                    }
                    $dateBoxes.append('<div class="card-date"><div class="week-day">'+ weekDay +'</div><div class="day">' + firstDate.getDate() + '</div><div class="slots">20 slots left</div></div>');

                    firstDate.setDate(firstDate.getDate() + 1)
                }
            }
            $section.data("firstDate", new Date());
            populateDateBlocks($section.data("firstDate"));
            $section.on("click", ".card-date", function(){
                $section.find(".card-date").removeClass("selected");
                $(this).addClass("selected");
            });
        }
    });

    $(function(){
        if($(".section-book-valuation").length){
            var $section = $(".section-book-valuation");

            var $dateBoxes = $section.find(".date-boxes");
            var weekDays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

            // populate date blocks
            function populateDateBlocks(firstDate) {
                var today = new Date();
                $dateBoxes.empty();
                var weekDay, day, slots;
                for(var i=0; i<5; i++){
                    if(today.getDate() == firstDate.getDate() && today.getMonth() == firstDate.getMonth() && today.getYear() == firstDate.getYear()){
                        weekDay = "Today";
                    } else{
                        weekDay = weekDays[firstDate.getDay()];
                    }
                    $dateBoxes.append('<div class="card-date"><div class="week-day">'+ weekDay +'</div><div class="day">' + firstDate.getDate() + '</div><div class="slots">20 slots left</div></div>');

                    firstDate.setDate(firstDate.getDate() + 1)
                }
            }
            $section.data("firstDate", new Date());
            populateDateBlocks($section.data("firstDate"));
            $section.on("click", ".card-date", function(){
                $section.find(".card-date").removeClass("selected");
                $(this).addClass("selected");
                $section.find(".time-slot").removeClass("selected");
            });

            // action time slot
            $section.on("click", ".time-slot", function(){
                $(this).toggleClass("selected");
            });
        }
    });

    $(function(){
        if($(".section-signin").length){
            var $section = $(".section-signin");

            /*$('.modal').modal();*/
        }
    });

    $(function(){
        if($(".section-diary").length){
            var $section = $(".section-diary");

            /*
            Example: http://zabuto.com/dev/calendar/examples/index.html
            */
            $("#my-calendar").zabuto_calendar({
                cell_border: true,
                today: true,
                weekstartson: 0,
                action: function () {
                    var date = $(this).data("date");
                    var $childDiv = $(this).find(".day");
                    var $modal = $('#diary-modal')
                    var message = "";
                    if($childDiv.length){
                        // update the header
                        $modal.find("h4").empty().html(date);

                        // hide all message blocks
                        $modal.find(".message").hide();

                        if($childDiv.hasClass("key-available")){
                            // you are available
                            $modal.find(".message-available").show();
                        } else if($childDiv.hasClass("key-arranged")){
                            // viewing arranged
                            $modal.find(".message-arranged").show();
                        } else if($childDiv.hasClass("key-appointment")){
                            // appointment arranged
                            $modal.find(".message-appointment").show();
                        } else {
                            // slot empty
                            $modal.find(".message-no-set").show();
                        }

                        $('#diary-modal').openModal();
                    }
                },
                nav_icon: {
                    prev: '<i class="material-icons">chevron_left</i>',
                    next: '<i class="material-icons">chevron_right</i>'
                },
                data: [{
                    "date": "2018-02-20",
                    "badge": false,
                    "title": "Example for 2018-01-20",
                    "body": "<p class=\"lead\">Information for this date<\/p><p>You can add <strong>html<\/strong> in this block<\/p>",
                    "footer": "Extra information",
                    "classname": "key-available"
                }, {
                    "date": "2018-02-13",
                    "badge": false,
                    "title": "Example for 2018-01-13",
                    "body": "<p class=\"lead\">Information for this date<\/p><p>You can add <strong>html<\/strong> in this block<\/p>",
                    "footer": "Extra information",
                    "classname": "key-arranged"
                }, {
                    "date": "2018-02-17",
                    "badge": false,
                    "title": "Example for 2018-01-17",
                    "body": "<p class=\"lead\">Information for this date<\/p><p>You can add <strong>html<\/strong> in this block<\/p>",
                    "footer": "Extra information",
                    "classname": "key-available"
                }, {
                    "date": "2018-02-16",
                    "badge": false,
                    "title": "Example for 2018-01-16",
                    "body": "<p class=\"lead\">Information for this date<\/p><p>You can add <strong>html<\/strong> in this block<\/p>",
                    "footer": "Extra information",
                    "classname": "key-available"
                }, {
                    "date": "2018-02-27",
                    "badge": false,
                    "title": "Example for 2018-01-31",
                    "body": "<p class=\"lead\">Information for this date<\/p><p>You can add <strong>html<\/strong> in this block<\/p>",
                    "footer": "Extra information",
                    "classname": "key-appointment"
                }, {
                    "date": "2018-02-28",
                    "badge": false,
                    "title": "Example for 2018-01-28",
                    "body": "<p class=\"lead\">Information for this date<\/p><p>You can add <strong>html<\/strong> in this block<\/p>",
                    "footer": "Extra information",
                    "classname": "key-available"
                }, {
                    "date": "2018-02-02",
                    "badge": false,
                    "title": "Example for 2018-01-02",
                    "body": "<p class=\"lead\">Information for this date<\/p><p>You can add <strong>html<\/strong> in this block<\/p>",
                    "footer": "Extra information",
                    "classname": "key-arranged"
                }]
            });
        }
    });

    $(function(){
        if($(".section-availability").length){
            var $section = $(".section-availability");

            /*$('#timerSlot_0').pickadate({
                format: 'yyyy-mm-dd',
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15, // Creates a dropdown of 15 years to control year,
                today: 'Today',
                clear: 'Clear',
                close: 'Ok',
                closeOnSelect: true // Close upon selecting a date,
            });*/
        }
    });

    $(function(){
        if($(".section-qualification").length){
            var $section = $(".section-qualification");

            $section.find("#qualification-step-1").click(function(){
                $(this).closest(".form-step").addClass("hide").next(".form-step").removeClass("hide");
                return false;
            });
            $section.find("#qualification-step-2").click(function(){
                $(this).closest(".form-step").addClass("hide").next(".form-step").removeClass("hide");
                return false;
            })
        }
    });

    $(function(){
        if($(".section-view-thanks").length){
            var $section = $(".section-view-thanks");

            var h = $section.find(".form-step-content:first").height();
            $section.find(".form-step-content").css("min-height", h + "px");
            $section.find("#thanks-step-1, #thanks-step-2, #thanks-step-3").click(function(){
                $(this).closest(".form-step").addClass("hide").next(".form-step").removeClass("hide");
                return false;
            });
        }
    });

    $(function(){
        if($(".section-instruct").length){
            var $section = $(".section-instruct");

            //-- SELECTABLE - DESELECTABLE OPTION ON INSTRUCT PAGE
            $('.selectable').click(function(){
                if($(this).data('opted'))
                {
                    $(this).html('INCLUDE');
                    $(this).data('opted',false);
                    $(this).removeClass('insOpted');
                }else{
                    $(this).html('<i class="material-icons right">check_circle</i>INCLUDED');
                    $(this).data('opted',true);
                    $(this).addClass('insOpted');
                }
            });

            //--VALIDATE INSTRUCT PAGE
            $('#insForm').submit(function(){
                if($('input#accept').is(':checked')==false)
                {
                    Materialize.toast("Please agree to our terms & conditions before instructing. Thanks", 3000, "red");
                    return !1
                }else{
                    var optedServs = '';
                    $('.insOpted').each(function(){
                        optedServs+=((optedServs=='')?$(this).data('servopted'):(','+$(this).data('servopted')));
                    })
                    //alert(optedServs);
                    $('#optedServsBox').val(optedServs);
                }
            })
        }
    });

}());