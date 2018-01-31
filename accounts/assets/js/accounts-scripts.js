/**
 * Created by ashek.elahi on 1/22/2018.
 */
(function () {

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

            $section.on("click", ".calendar-table td", function () {
                if(!$(this).hasClass("disabled")){
                    $(this).toggleClass("selected");
                }
            })
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
                    console.log($(this).data("date"));
                    console.log($(this).data("hasEvent"));
                    console.log($(this).data());
                },
                nav_icon: {
                    prev: '<i class="material-icons">chevron_left</i>',
                    next: '<i class="material-icons">chevron_right</i>'
                },
                data: [{
                    "date": "2018-01-20",
                    "badge": false,
                    "title": "Example for 2018-01-20",
                    "body": "<p class=\"lead\">Information for this date<\/p><p>You can add <strong>html<\/strong> in this block<\/p>",
                    "footer": "Extra information",
                    "classname": "key-available"
                }, {
                    "date": "2018-01-13",
                    "badge": false,
                    "title": "Example for 2018-01-13",
                    "body": "<p class=\"lead\">Information for this date<\/p><p>You can add <strong>html<\/strong> in this block<\/p>",
                    "footer": "Extra information",
                    "classname": "key-arranged"
                }, {
                    "date": "2018-01-17",
                    "badge": false,
                    "title": "Example for 2018-01-17",
                    "body": "<p class=\"lead\">Information for this date<\/p><p>You can add <strong>html<\/strong> in this block<\/p>",
                    "footer": "Extra information",
                    "classname": "key-available"
                }, {
                    "date": "2018-01-16",
                    "badge": false,
                    "title": "Example for 2018-01-16",
                    "body": "<p class=\"lead\">Information for this date<\/p><p>You can add <strong>html<\/strong> in this block<\/p>",
                    "footer": "Extra information",
                    "classname": "key-available"
                }, {
                    "date": "2018-01-31",
                    "badge": false,
                    "title": "Example for 2018-01-31",
                    "body": "<p class=\"lead\">Information for this date<\/p><p>You can add <strong>html<\/strong> in this block<\/p>",
                    "footer": "Extra information",
                    "classname": "key-appointment"
                }, {
                    "date": "2018-01-28",
                    "badge": false,
                    "title": "Example for 2018-01-28",
                    "body": "<p class=\"lead\">Information for this date<\/p><p>You can add <strong>html<\/strong> in this block<\/p>",
                    "footer": "Extra information",
                    "classname": "key-available"
                }, {
                    "date": "2018-01-02",
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