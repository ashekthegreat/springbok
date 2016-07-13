;
(function ($) {
    $.fn.extend({
        limit: function (limit, element) {
            if (!$(this).length) {
                return;
            }
            var interval, f;
            var self = $(this);

            function substring() {
                var val = $(self).val();
                var length = val.length;
                if (length > limit) {
                    $(self).val($(self).val().substring(0, limit));
                }
                if (typeof element != 'undefined') {
                    if ($(element).html() != limit - length) {
                        $(element).html((limit - length <= 0) ? '0' : limit - length);
                    }
                }
            }

            $(this).focus(function () {
                interval = window.setInterval(substring, 100);
            });

            $(this).blur(function () {
                clearInterval(interval);
                substring();
            });

            /*substringFunction = "function substring(){ var val = $(self).val();var length = val.length;if(length > limit){$(self).val($(self).val().substring(0,limit));}";
             if (typeof element != 'undefined')
             substringFunction += "if($(element).html() != limit-length){$(element).html((limit-length<=0)?'0':limit-length);}"

             substringFunction += "}";

             eval(substringFunction);*/

            substring();
        }
    });
    /*
     * Auto-growing textareas; technique ripped from Facebook
     */
    $.fn.autogrow = function (options) {
        this.filter('textarea').each(function () {
            var $this = $(this),
                minHeight = $this.height(),
                lineHeight = $this.css('lineHeight');

            var shadow = $('<div></div>').css({
                position: 'absolute',
                top: -10000,
                left: -10000,
                width: $(this).width(),
                fontSize: $this.css('fontSize'),
                fontFamily: $this.css('fontFamily'),
                lineHeight: $this.css('lineHeight'),
                resize: 'none'
            }).appendTo(document.body);

            var update = function () {
                var val = this.value.replace(/</g, '&lt;')
                    .replace(/>/g, '&gt;')
                    .replace(/&/g, '&amp;')
                    .replace(/\n/g, '<br/>');

                shadow.html(val);
                $(this).css('height', Math.max(shadow.height() + 20, minHeight));
            }

            $(this).change(update).keyup(update).keydown(update);

            update.apply(this);
        });

        return this;
    }
})(jQuery);

var supportsTouch = (('ontouchstart' in window) || (navigator.msMaxTouchPoints > 0));
(function ($) {
    $(function () {
        if ("\v" == "v") {
            $('input, textarea').placeholder();
        } else {
            $("html").addClass("modern");
        }

        // floating PPC
        if (supportsTouch) {
            $("html").addClass("touch").removeClass("no-touch");
            $(".floating-call").fadeIn("fast");
        } else {
            $("html").removeClass("touch").addClass("no-touch");
            $(".sprite-floating-ppc").fadeIn("fast");
        }

        // select proper menu as active
        function getFileName(url) {
            //this gets the full url
            var url = url || document.location.href;
            //this removes the anchor at the end, if there is one
            url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));
            //this removes the query after the file name, if there is one
            url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));
            //this removes everything before the last slash in the path
            url = url.substring(url.lastIndexOf("/") + 1, url.length);
            //return
            return url;
        }

        var $breadcrumb = $('<div class="site-breadcrumb"></div>');
        $breadcrumb.append('Home').append('&nbsp; &gt; &nbsp;');
        var endPageTitle = "";
        if ($("h1").length) {
            endPageTitle = $("h1").text();
        } else {
            endPageTitle = document.title;
        }

        function findActiveMenu() {
            var filename = getFileName();
            //filename = filename.replace("#", "");
            $("#site-navigation .active").removeClass("active");
            var isFound = false;
            $(".sub-nav").empty();
            $("#site-navigation a").each(function () {
                if (getFileName($(this).attr("href")) == filename) {
                    $(this).closest(".nav > li").addClass("active");
                    isFound = true;

                    // populate subnav
                    if ($(this).closest(".dropdown-menu").length) {
                        $(".sub-nav").append($(this).closest(".dropdown-menu").clone().removeAttr("class"));
                    }

                    // populate breadcrumb
                    endPageTitle = $(this).text();
                    if ($(this).closest(".dropdown-menu").length) {
                        $breadcrumb.append($(this).closest(".dropdown-menu").siblings("a").text()).append('&nbsp; &gt; &nbsp;');
                    }
                }
            });

            // special consideration for property details
            if (filename == "property-details.php") {
                $breadcrumb.append("Buy").append("&nbsp; &gt; &nbsp;")
            }
            $breadcrumb.append(endPageTitle);
            if ($(".section-container").length) {
                if (filename != "index.php") {
                    $(".section-container").prepend($breadcrumb);
                }
            }
        }

        findActiveMenu();

        /*$("#site-navigation .dropdown-toggle").click(function () {
            window.location.href = $(this).attr("href");
        });*/

        if(!supportsTouch){
            $(".call-banner a").click(function(){
                return false;
            });
        }

        if ($(".properties").length) {
            $("body").on("mouseover", ".property-image-extra img", function () {
                var $img = $(this).closest(".property-image").find(".property-image-holder img");
                if (!$img.data("original-src")) {
                    $img.data("original-src", $img.attr("src"));
                }
                $img.attr("src", $(this).attr("src"));
            });
            $("body").on("mouseout", ".property-image-extra img", function () {
                var $img = $(this).closest(".property-image").find(".property-image-holder img");
                if ($img.data("original-src")) {
                    $img.attr("src", $img.data("original-src"));
                }
            });
        }

        $("#mapid").click(function () {
            $('#property-tab-link-map').tab('show');
            return false;
        });

        if ($(".page-items").length) {
            $('.page-items').scrollbar();
            $('.page-items').scrollLeft($(".page-item.active").position().left);
        }

        function resizeCarouselItems(){
            var w =$("#property-carousel .carousel-inner").width();
            if(w<=553){
                var targetHeight = w * 0.75;
                $("#property-carousel .carousel-inner > .item").css({
                    "padding-top": 0,
                    "height": targetHeight + "px",
                    "line-height": targetHeight + "px"
                })
            } else{
                $("#property-carousel .carousel-inner > .item").css({
                    "padding-top": "",
                    "height": "",
                    "line-height": ""
                })
            }
        }

        if ($("#property-carousel").length) {
            var image = new Image();
            image.onload = function () {
                $("#property-carousel .busy-indicator").remove();
                $("img[xsrc]").each(function () {
                    $(this).attr("src", $(this).attr("xsrc"));
                    $(this).removeAttr("xsrc");
                })
            };
            image.src = $("#property-carousel .item.active img").attr("src");

            resizeCarouselItems();
            $(window).on("resize.carousel", function(){
                resizeCarouselItems();
            })
        }

        // carousel indicators
        if ($(".indicator-block").length) {
            var $indicatorBlock = $(".indicator-block");
            var $carouselIndicators = $indicatorBlock.find(".carousel-indicators");
            var $indicatorLeft = $indicatorBlock.find(".indicator-left");
            var $indicatorRight = $indicatorBlock.find(".indicator-right");
            var carouselWidth = $indicatorBlock.width();
            var itemLefts = [];
            var itemWidths = [];
            var scrolled = 0;
            var totalWidth = 0;

            function reCheckIndicators() {
                carouselWidth = $indicatorBlock.width();
                scrolled = $carouselIndicators.scrollLeft();
                $carouselIndicators.find("li").each(function (i) {
                    itemLefts[i] = Math.abs($(this).position().left + scrolled);
                    itemWidths[i] = $(this).width();
                    totalWidth = itemLefts[i] + itemWidths[i];
                });
                if (scrolled < 10) {
                    $indicatorLeft.hide();
                } else {
                    $indicatorLeft.show();
                }
                if (scrolled + carouselWidth >= totalWidth) {
                    $indicatorRight.hide();
                } else {
                    $indicatorRight.show();
                }
            }

            function initIndicators() {
                $carouselIndicators.scrollLeft(0);
                carouselWidth = $indicatorBlock.width();
                scrolled = $carouselIndicators.scrollLeft();
                $carouselIndicators.find("li").each(function (i) {
                    itemLefts[i] = $(this).position().left;
                    itemWidths[i] = $(this).width();
                    totalWidth = itemLefts[i] + itemWidths[i];
                });
                reCheckIndicators();
            }

            $indicatorLeft.click(function () {
                var targetPos = scrolled - carouselWidth;
                var targetI = 0;
                for (var i = itemLefts.length - 1; i >= 0; i--) {
                    if (itemLefts[i] > targetPos) {
                        targetI = i;
                    }
                }
                $carouselIndicators.animate({scrollLeft: itemLefts[targetI] + "px"}, 400, function () {
                    scrolled = itemLefts[targetI];
                    reCheckIndicators();
                });
            });
            $indicatorRight.click(function () {
                var targetPos = scrolled + carouselWidth;
                var targetI = 0;
                for (var i = 0; i < itemLefts.length; i++) {
                    if (itemLefts[i] < targetPos) {
                        targetI = i;
                    }
                }
                $carouselIndicators.animate({scrollLeft: itemLefts[targetI] + "px"}, 400, function () {
                    scrolled = itemLefts[targetI];
                    reCheckIndicators();
                });
            });
            initIndicators();
        }

        if ($(".carousel-slideshow").length) {
            $(".carousel-slideshow").click(function () {
                if ($(this).find("span + span").text() == "Start Slideshow") {
                    $("#property-carousel").carousel("cycle");
                    $(this).find("span + span").text("Stop Slideshow")
                } else {
                    $("#property-carousel").carousel("pause");
                    $(this).find("span + span").text("Start Slideshow")
                }
                return false;
            });
        }
    });

    $(function () {
        /* form validation */
        function isPostcode(s) {
            var regex = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;
            return regex.test(s);//excluding QVX | | | CIKMV
        }

        function validateForm($frm) {
            var regPhone = /^[0-9 \-\+]+$/;
            var regEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var regPostcode = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;

            var $name = $frm.find('#First_Name2');
            var $phone = $frm.find('#Phone_No2');
            var $postCode = $frm.find('#postcode2');
            var $email = $frm.find('#Email_crm2');

            if (!$name.val()) {
                alert('Please enter your name.');
                $name.val("").focus();
                return false;
            }
            else if (!$phone.val() || !(regPhone.test($phone.val()))) {
                alert('Please provide your valid contact number.');
                $phone.val("").focus();
                return false;
            }
            else if ($postCode.length && !($postCode.val() && isPostcode($postCode.val()))) {
                alert('Please provide valid UK postcode with a space between the two parts. e.g. AB1 1BA; S60 4DT; WA16 7HN');
                $postCode.val().focus();
                return false;
            }
            else {
                return true
            }
        }

        $(".web_form2").submit(function () {
            return validateForm($(this));
        });

    });

    /*$(function () {
     return;
     */
    /* property details */
    /*

     function saveProperty(id) {
     $.post('save_property.php', {id: id},
     function (data) {
     $("#save_id").html(data);
     });
     }

     function addNotes(id) {
     var notes = $("#myTextarea").val();
     var eleman = document.getElementById(id);
     $.post('add_notes.php', {id: id, notes: notes, action: 'add'},
     function (data) {
     eleman.setAttribute("disabled", false);
     var str = '<a href="javascript:void(0);" onclick="enable(' + id + ',' + data + ')" >Edit</a>';
     str += '<span style="padding-left:10px;"><a href="javascript:void(0);" onclick="deleteNote(\'' + id + '\', ' + note_id + ')">Remove</a></span>';
     $("#editId").html(str);
     });
     }

     function updateNotes(id, note_id) {
     var notes = $("#myTextarea").val();
     var eleman = document.getElementById(id);
     $.post('add_notes.php', {id: note_id, notes: notes, action: 'update'},
     function (data) {
     eleman.setAttribute("disabled", false);
     var str = '<a href="javascript:void(0);" onclick="enable(' + id + ')" >Edit</a>';
     //str+= '<span style="padding-left:10px;"><a href="javascript:void(0);" onclick="deleteNote(\''+id+'\', '+note_id+')">Remove</a></span>';
     $("#editId").html(str);
     });
     }

     function enable(id, note_id) {
     var eleman = document.getElementById(id);
     eleman.removeAttribute("disabled")
     var str = '<a href="javascript:void(0);" onclick="updateNotes(\'' + id + '\', ' + note_id + ')" id="editId">Save</a>';
     $("#editId").html(str);
     }

     function deleteNote(id, note_id) {
     $.post('add_notes.php', {id: note_id, action: 'delete'},
     function (data) {
     var str = '<textarea cols="20" rows="4" name="myTextarea" id="myTextarea" style="width: 246px; height: 30px; line-height:1" ></textarea>';
     str += '<a href="javascript:void(0);" onclick="addNotes(' + data + ')">Save</a>';
     $("#slidDiv").html(str);
     });
     }

     $("#login_id").fancybox({
     'width': '40%',
     'height': '90%',
     'autoScale': false,
     'transitionIn': 'none',
     'transitionOut': 'none',
     'type': 'iframe',
     'onClosed': function () {
     var str = window.location.href;
     var url = str.split("=");
     var id = url[1];
     $.post('save_property.php', {id: id},
     function (data) {
     parent.location.reload(true);
     });

     }

     });
     $("#sign_in").fancybox({
     'width': '40%',
     'height': '90%',
     'autoScale': false,
     'transitionIn': 'none',
     'transitionOut': 'none',
     'type': 'iframe',
     'onClosed': function () {
     parent.location.reload(true);
     }

     });
     });*/

    $(function () {
        if ($('#myTextarea')) {
            $('#myTextarea').limit('500', '#charsLeft');
            $('#myTextarea').autogrow();
        }

        $('#request-detail-modal').on('show.bs.modal', function (event) {
            var $button = $(event.relatedTarget);
            var $modal = $(this);
            var $form = $modal.find("form");
            var $thankYou = $modal.find(".thank-you-block");
            var $modalFooter = $modal.find(".modal-footer");

            $form.show();
            $thankYou.hide();
            $modalFooter.hide();

            $form.get(0).reset();
            $modal.find('.form-group-address').hide();
            $modal.find('.form-group-postcode').hide();

            $modal.find("#rq-buyingStatus").off("change").on("change", function () {
                if ($(this).val() == 317 || $(this).val() == 318) {
                    $modal.find('.form-group-address').show();
                    $modal.find('.form-group-postcode').show();
                } else {
                    $modal.find('.form-group-address').hide();
                    $modal.find('.form-group-postcode').hide();
                }
            });

            $form.validate({
                rules: {
                    "rq-name": {
                        required: true
                    },
                    "rq-email": {
                        email: true,
                        required: true
                    },
                    "rq-phone": {
                        number: true,
                        required: true
                    }
                },
                highlight: function (element) {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-error');
                },
                errorElement: 'span',
                errorClass: 'help-block',
                errorPlacement: function (error, element) {
                    if (element.parent('.input-group').length) {
                        error.insertAfter(element.parent());
                    } else {
                        error.insertAfter(element);
                    }
                }
            });
            $form.off("submit.custom").on("submit.custom", function (event) {
                function isPostcode(s) {
                    var regex = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;
                    return regex.test(s);
                }

                if ($modal.find("#rq-buyingStatus").val() == 317 || $modal.find("#rq-buyingStatus").val() == 318) {
                    if ($modal.find('#rq-address').val() == '') {
                        alert('Please provide address information for vendor property');
                        $modal.find('#rq-address').focus();
                        return false;
                    }
                    else if ($modal.find('#rq-postcode').val() == '') {
                        alert('Please provide valid postcode information for vendor property');
                        $modal.find('#rq-postcode').focus();
                        return false;
                    }
                    else if ($modal.find('#rq-postcode').val() == '' || !isPostcode($modal.find('#rq-postcode').val())) {
                        alert('Please provide valid UK postcode with a space between the two parts. e.g. AB1 1BA; S60 4DT; WA16 7HN');
                        $modal.find('#rq-postcode').val().focus();
                        return false;
                    }
                    else {
                        return true;
                    }
                }
            });
        });

        if ($('.print-property').length) {
            $('.print-property').popupWindow({
                height: 500,
                width: 800,
                top: 50,
                left: 50,
                resizable: 1,
                scrollbars: 1
            });
        }

        $('#login-modal').on('hidden.bs.modal', function (e) {
            window.location.reload(true);
        });
        $('#login-modal').on('show.bs.modal', function (e) {
            var $modal = $(e.currentTarget);
            // clear all active classes
            $modal.find(".nav-tabs > li").removeClass("active");
            $modal.find(".tab-pane").removeClass("active");

            if($modal.data("active")){
                if($modal.data("active") == "register"){
                    $modal.find(".nav-tabs > li:nth-child(1)").addClass("active");
                    $modal.find(".tab-pane:nth-child(1)").addClass("active");
                } else{
                    $modal.find(".nav-tabs > li:nth-child(2)").addClass("active");
                    $modal.find(".tab-pane:nth-child(2)").addClass("active");
                }
            }
            console.log($(e.currentTarget).data("test"));
        });
        $(".save-property").click(function () {
            if ($(this).hasClass("not-logged-in")) {
                $('#login-modal').modal({
                    backdrop: "static",
                    keyboard: false
                });
            } else {

            }
            return false;
        });

        $(".buy-now").click(function () {
            var active = "signin";
            if($(this).hasClass("go-register")){
                active = "register";
            }
            if ($(this).hasClass("not-logged-in")) {
                $('#login-modal').data("active", active).modal({
                    backdrop: "static",
                    keyboard: false
                });
            } else {

            }
            return false;
        });

        $(".add-notes").click(function () {
            if ($(this).hasClass("not-logged-in")) {
                $('#login-modal').modal({
                    backdrop: "static",
                    keyboard: false
                });
            } else {
                $(".add-note-editor").slideDown();
            }
            return false;
        });

        function addNotes(id) {
            var notes = $("#myTextarea").val();
            var eleman = document.getElementById(id);
            $.post('add_notes.php', {id: id, notes: notes, action: 'add'},
                function (data) {
                    eleman.setAttribute("disabled", false);
                    var str = '<a href="javascript:void(0);" onclick="enable(' + id + ',' + data + ')" >Edit</a>';
                    str += '<span style="padding-left:10px;"><a href="javascript:void(0);" onclick="deleteNote(\'' + id + '\', ' + note_id + ')">Remove</a></span>';
                    $("#editId").html(str);
                });
        }

        $(".btn-save-note").click(function () {
            // save it
            addNotes(12345);
            $(this).closest(".add-note-editor").slideUp();
        });

        $(".btn-cancel-note").click(function () {
            $('#myTextarea').val("");
            $(this).closest(".add-note-editor").slideUp();
        });
    });
    $(function () {
        // fee boxes
        function resizeFeeBoxes() {
            var maxHeight = 0;
            var $items = $(".fee-box-content");
            $items.css("height", "auto");
            if($(window).width() >= 500){
                $items.each(function () {
                    if ($(this).height() > maxHeight) {
                        maxHeight = $(this).height();
                    }
                });
                $items.height(maxHeight);
            }
        }
        if($(".fee-box").length){
            resizeFeeBoxes();
            $(window).resize(function () {
                resizeFeeBoxes();
            });
        }
    });

    /* Start Video load */

    // Read a page's GET URL variables and return them as an associative array.
    function getUrlVars() {
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for(var i = 0; i < hashes.length; i++)
        {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    }
    if(!String.linkify) {
        String.prototype.linkify = function() {
            // http://, https://, ftp://
            var urlPattern = /\b(?:https?|ftp):\/\/[a-z0-9-+&@#\/%?=~_|!:,.;]*[a-z0-9-+&@#\/%=~_|]/gim;
            // www. sans http:// or https://
            var pseudoUrlPattern = /(^|[^\/])(www\.[\S]+(\b|$))/gim;
            // Email addresses
            var emailAddressPattern = /[\w.]+@[a-zA-Z_-]+?(?:\.[a-zA-Z]{2,6})+/gim;

            return this
                .replace(urlPattern, '<a href="$&">$&</a>')
                .replace(pseudoUrlPattern, '$1<a href="http://$2">$2</a>')
                .replace(emailAddressPattern, '<a href="mailto:$&">$&</a>');
        };
    }

    var scriptEl = document.createElement('script');
    var apiKey = 'AIzaSyBoidb_b8Az_9rmoxfdeOmEW1KvhJ-_Ct0'; // Change this key

    if($(".video-details").length){
        // this is the video details page
        var id = getUrlVars()["id"];
        scriptEl.src = 'https://www.googleapis.com/youtube/v3/videos?part=snippet,contentDetails&id='+ id +'&key='+ apiKey +'&callback=videoLoaded';
        document.head.appendChild(scriptEl);
        $(".video-details").find("iframe").attr("src", 'https://www.youtube.com/embed/' + id + '?showinfo=0&rel=0')
    }
    videoLoaded = function(data){
        console.log(data);
        var $video = $(".video-details");
        $video.find("h1").empty().append(data.items[0].snippet.title);
        $video.find("h3").empty().append("Duration: " + data.items[0].contentDetails.duration.replace("PT", "").replace("M", ":").replace("S", ""));
        $video.find("p").empty().append(data.items[0].snippet.description.replace(/\n/g, "<br />").linkify());
    };
    /* END video load */
}(jQuery));

