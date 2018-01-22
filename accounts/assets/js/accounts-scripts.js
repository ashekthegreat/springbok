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
    })

}());