(function () {

    $(function () {
        function resizeText(){
            var $txt = $(".signature-write");

            var $div = $("<div/>").appendTo($("body"));
            $div.css({
                "font-size": $txt.css("font-size"),
                "font-family": $txt.css("font-family"),
                "height": $txt.height() + "px",
                "white-space": "nowrap",
                "display": "inline-block"
            });
            $div.text($txt.val());

            var fontSize;
            var txtWidth = $txt.width();

            for (fontSize = 60; fontSize >= 20; fontSize -= 5) {
                $div.css("font-size", fontSize + "px");
                if ($div.width() < txtWidth - 20) {
                    break;
                }
            }
            $txt.css("font-size", fontSize + "px");
            $div.remove();

        }
        $(".signature-write").keyup(function () {
            console.log("keyup");
            resizeText();
        });

        $(window).resize(function () {
            resizeText();
        });


        // Initiate tabs
        $('.tabs .tab-link').click(function () {
            var tab_id = $(this).attr('data-tab');

            $('.tabs .tab-link').removeClass('current');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("#" + tab_id).addClass('current');

            if(tab_id == "tab-2"){
                var signatureOptions = {
                    background: '#ffffe9',
                    guideline: true,
                    guidelineOffset: 30,
                    syncField: '#signature',
                    syncFormat: 'PNG'
                };
                var $signatureElement = $("#signature-canvas");

                $signatureElement.signature(signatureOptions);

                $(window).resize(function(){
                    var data = $signatureElement.signature('toJSON');
                    var isEmpty = $signatureElement.signature('isEmpty');

                    $signatureElement.signature('destroy');
                    $signatureElement.signature(signatureOptions);
                    if(!isEmpty){
                        $signatureElement.signature('draw', data);
                    }
                });

                $("#clear-canvas").click(function(){
                    $signatureElement.signature('clear');
                    $("#signature").val("");
                })
            } else if(tab_id == "tab-1"){
                resizeText();
            }
        });

        return;
        var canvas = document.getElementById("signature-canvas");
        var ctx = canvas.getContext("2d");


        function draw() {
            var txt = $(".signature-write").val();

            canvas.width = canvas.width;

            // draw the base line
            ctx.strokeStyle = "#ddd";
            ctx.moveTo(10, 80);
            ctx.lineTo(canvas.width - 10, 80);
            ctx.stroke();

            if (txt) {
                // find the proper font size
                var fontSize;
                for (fontSize = 60; fontSize >= 20; fontSize -= 5) {
                    ctx.font = fontSize + "px Gochi Hand";
                    if (canvas.width - ctx.measureText(txt).width > 20) {
                        break;
                    }
                }
                //ctx.fillText("width:" + ctx.measureText(txt).width, 10, 30);
                var startX = (canvas.width - ctx.measureText(txt).width) / 2;
                var startY = 85;
                ctx.textBaseline = "bottom";
                ctx.fillText(txt, startX, startY);

                // extract image
                $("#signature").val(canvas.toDataURL());
            }
        }



        $(window).resize(function () {
            $("#signature-canvas").attr("width", $(".signature-canvas-wrapper").width());
            draw();

        });

        draw();

    });

    $(function () {
        // Get the modal
        var modal = $('#myModal');

        // Get the button that opens the modal
        var btn = $("#myBtn");

        // When the user clicks on the button, open the modal
        btn.click(function () {
            modal.show();
        });

        // When the user clicks on <span> (x), close the modal
        modal.find(".close").click(function () {
            modal.hide();
        });
        modal.find(".modal-dismiss").click(function () {
            modal.hide();
        });

        modal.find(".modal-done").click(function () {
            var tabId = $(this).closest(".tab-content").attr("id");
            if(tabId=="tab-1"){
                // produce signature from the input

            } else if(tabId=="tab-2"){

            } else if(tabId=="tab-3"){

            }
            modal.hide();

        });

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            console.log($(event.target));
            if ($(event.target).attr("id") == "myModal") {
                modal.hide();
            }
        }
    });

    $(function () {




    })

}());