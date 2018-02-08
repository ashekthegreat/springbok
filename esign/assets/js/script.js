(function () {

    $(function () {

        var canvas = document.getElementById("signature-canvas");
        var ctx = canvas.getContext("2d");


        function draw(){
            var txt = $("#name").val();

            canvas.width = canvas.width;

            // draw the base line
            ctx.strokeStyle = "#ddd";
            ctx.moveTo(10, 80);
            ctx.lineTo(canvas.width -10, 80);
            ctx.stroke();

            if(txt){
                // find the proper font size
                var fontSize;
                for(fontSize = 60; fontSize>=20; fontSize-=5){
                    ctx.font = fontSize + "px Gochi Hand";
                    if(canvas.width - ctx.measureText(txt).width > 20){
                        break;
                    }
                }
                //ctx.fillText("width:" + ctx.measureText(txt).width, 10, 30);
                var startX = (canvas.width - ctx.measureText(txt).width) / 2;
                var startY = 85;
                ctx.textBaseline="bottom";
                ctx.fillText(txt, startX, startY);

                // extract image
                $("#signature").val(canvas.toDataURL());
            }
        }

        $("#name").keyup(function(){
            draw();
        });

        $(window).resize(function(){
            $("#signature-canvas").attr("width", $(".signature-canvas-wrapper").width());
            draw();

        });

        draw();

    });

}());