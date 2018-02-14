(function () {

    $(function () {
        var $txt = $(".signature-write");
        var $signatureElement = $("#signature-canvas");
        var $uploadCanvas = $("#upload-canvas");
        var activeTabId = "tab-1";
        var signatureOptions = {
            background: '#ffffe9',
            guideline: false,
            guidelineOffset: 30,
            syncFormat: 'PNG',
            thickness: 3
        };
        var modal = $('#myModal');
        // Get the button that opens the modal
        var btn = $(".create-command");

        function resizeText() {
            $txt.height(($txt.width() * 0.25) + 2);
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

        function resizeDrawCanvas() {
            var data = $signatureElement.signature('toJSON');
            var isEmpty = $signatureElement.signature('isEmpty');

            $signatureElement.signature('destroy');
            $signatureElement.height($signatureElement.width() * 0.25);
            $signatureElement.signature(signatureOptions);
            if (!isEmpty) {
                $signatureElement.signature('draw', data);
            }
        }

        function resizeUploadCanvas() {
            return;
            //$("#upload-canvas")
            var canvas = document.getElementById("upload-canvas");
            var ctx = canvas.getContext("2d");

            var img = new Image;
            img.onload = function () {
                canvas.width = canvas.width;
                $(canvas).attr("width", $(canvas).parent().width());
                canvas.width = canvas.width;
                ctx.drawImage(img, 0, 0);
            };
            img.src = canvas.toDataURL();
        }

        $txt.keyup(function () {
            resizeText();
        });

        // initiate upload canvas
        var canvas = document.getElementById('upload-canvas');
        var ctx = canvas.getContext('2d');
        $('#signature-file').change(function (e) {
            if (!e.target.files.length) {
                return;
            }

            var reader = new FileReader();
            reader.onload = function (event) {
                var img = new Image();
                img.onload = function () {
                    canvas.width = canvas.width;

                    var imageRatio = img.height / img.width;
                    var targetRatio = 1;
                    if (imageRatio > 0.25) {
                        // image is taller. fix height
                        targetRatio = canvas.height / img.height;
                        ctx.drawImage(img, canvas.width / 2 - img.width * targetRatio / 2, 0, img.width * targetRatio, img.height * targetRatio);
                    } else {
                        targetRatio = canvas.width / img.width;
                        ctx.drawImage(img, 0, (canvas.height - img.height * targetRatio) / 2, img.width * targetRatio, img.height * targetRatio);
                    }
                    //var ratio = canvas.width / img.width;
                    //ctx.drawImage(img,0,0, 360, img.height * ratio);
                    //ctx.drawImage(img, canvas.width / 2 - img.width / 2, canvas.height / 2 - img.height / 2);
                };
                img.src = event.target.result;
            };
            console.log(e.target.files);
            reader.readAsDataURL(e.target.files[e.target.files.length - 1]);
            $(".upload-btn-wrapper").hide();
            $("#clear-upload-canvas").show();
            $(this).val("");
        });

        // initiate signature canvas
        $signatureElement.signature(signatureOptions);

        $("#clear-canvas").click(function () {
            $signatureElement.signature('clear');
            $("#signature").val("");
        });

        $(window).resize(function () {
            if (activeTabId == "tab-1") {
                resizeText();
            } else if (activeTabId == "tab-2") {
                resizeDrawCanvas();
            } else if (activeTabId == "tab-3") {
                resizeUploadCanvas();
            }
        });

        function tabSwitched(tabId) {
            activeTabId = tabId;

            if (tabId == "tab-1") {
                resizeText();
                $txt.focus();
                $txt[0].setSelectionRange($txt.val().length, $txt.val().length);
            } else if (tabId == "tab-2") {
                resizeDrawCanvas();
            } else if (tabId == "tab-3") {
                resizeUploadCanvas();
            }
        }


        // Initiate tabs
        $('.tabs .tab-link').click(function () {
            var tabId = $(this).attr('data-tab');

            $('.tabs .tab-link').removeClass('current');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("#" + tabId).addClass('current');

            tabSwitched(tabId);
        });

        $("#clear-upload-canvas").click(function () {
            var canvas = document.getElementById('upload-canvas');
            canvas.width = canvas.width;

            $("#clear-upload-canvas").hide();
            $(".upload-btn-wrapper").show();
        });


        // When the user clicks on the button, open the modal
        btn.click(function () {
            modal.show();
            tabSwitched(activeTabId);
        });

        $("#edit-signature").click(function () {
            modal.show();
            tabSwitched(activeTabId);
        });
        $("#clear-signature").click(function () {
            var canvas = $("#signature-preview").get(0);
            canvas.width = canvas.width;
            $("#signature").val("");
            btn.show();
            $("#edit-signature").hide();
            $("#clear-signature").hide();
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
            if (tabId == "tab-1") {
                // produce signature from the input
                createPreviewFromInput();
            } else if (tabId == "tab-2") {
                createPreviewFromDraw($signatureElement.signature('toDataURL'), $(this).closest(".tab-content").find(".signature-name").val());
            } else if (tabId == "tab-3") {
                createPreviewFromDraw($("#upload-canvas").get(0).toDataURL(), $(this).closest(".tab-content").find(".signature-name").val());
            }

            $(".create-command").hide();
            $("#edit-signature").show();
            $("#clear-signature").show();
            modal.hide();

        });

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if ($(event.target).attr("id") == "myModal") {
                modal.hide();
            }
        };

        function getDate() {
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; //January is 0!

            var yyyy = today.getFullYear();
            if (dd < 10) {
                dd = '0' + dd;
            }
            if (mm < 10) {
                mm = '0' + mm;
            }
            return dd + '/' + mm + '/' + yyyy;
        }

        function createPreviewFromInput() {
            var canvas = document.getElementById("signature-preview");
            var ctx = canvas.getContext("2d");
            var txt = $(".signature-write").val();
            var lineY = 110;

            canvas.width = canvas.width;

            // draw the base line
            ctx.strokeStyle = "#ddd";
            ctx.moveTo(10, lineY);
            ctx.lineTo(canvas.width - 10, lineY);
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
                var startX = (canvas.width - ctx.measureText(txt).width) / 2;
                var startY = lineY - 5;
                ctx.textBaseline = "bottom";
                ctx.fillText(txt, startX, startY);

                ctx.font = "14px sans-serif";
                ctx.textBaseline = "bottom";
                ctx.fillText(txt, 10, lineY + 20);
                var date = getDate();
                ctx.fillText(date, (canvas.width - ctx.measureText(date).width - 10), lineY + 20);
                // extract image
                $("#signature").val(canvas.toDataURL());
            }
        }

        function createPreviewFromDraw(data, name) {
            var canvas = document.getElementById("signature-preview");
            var ctx = canvas.getContext("2d");
            var lineY = 110;

            canvas.width = canvas.width;
            var img = new Image;
            img.onload = function () {
                console.log(img.width);
                // draw the base line
                ctx.strokeStyle = "#ddd";
                ctx.moveTo(10, lineY);
                ctx.lineTo(canvas.width - 10, lineY);
                ctx.stroke();

                // draw image
                var ratio = (canvas.width - 30) / img.width;
                img.width = 460;
                ctx.drawImage(img, 0, 0, 450, img.height * ratio);

                // write name and date
                ctx.textBaseline = "bottom";
                ctx.font = "14px sans-serif";
                ctx.textBaseline = "bottom";
                ctx.fillText(name, 10, lineY + 20);
                var date = getDate();
                ctx.fillText(date, (canvas.width - ctx.measureText(date).width - 10), lineY + 20);
                // extract image
                $("#signature").val(canvas.toDataURL());
            };
            img.src = data;

        }

    });

}());