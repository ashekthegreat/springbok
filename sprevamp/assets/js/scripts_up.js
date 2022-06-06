var supportsTouch = (('ontouchstart' in window) || (navigator.msMaxTouchPoints > 0));

supportsTouch = !0;

var target = window.location.hash,

    target = target.replace('#', '');

if (location.hash) {

    setTimeout(function() {

        window.scrollTo(0, 0)

    }, 1)

}



function parseQuery(str) {

    if (typeof str != "string" || str.length == 0) return {};

    if (str && str.indexOf("?") > -1) {

        str = str.split("?")[1]

    } else {

        return {}

    }

    var s = str.split("&");

    var s_length = s.length;

    var bit, query = {},

        first, second;

    for (var i = 0; i < s_length; i++) {

        bit = s[i].split("=");

        first = decodeURIComponent(bit[0]);

        if (first.length == 0) continue;

        second = decodeURIComponent(bit[1].replace(/\+/g, '%20'));

        if (typeof query[first] == "undefined") query[first] = second;

        else if (query[first] instanceof Array) query[first].push(second);

        else query[first] = [query[first], second]

    }

    return query

}


(function(){
    function scrollTo(id) {
        var h = ($('.navbar-fixed').height())*(-1);
        var el = document.getElementById(id);
        // el.scrollIntoView({block: 'start', behavior: 'smooth', inline: 'center'});

        // Experimental implementation
        var pos = el.style.position;
        var top = el.style.top;
        el.style.position = 'relative';
        el.style.top = h+'px'; //'-100px';
        el.scrollIntoView({behavior: 'smooth', block: 'start', inline: 'center'});
        el.style.top = top;
        el.style.position = pos;
    }


    $( document ).ready(function() {
        //FOR HOME PAGE SECTION LINKING
        var urlData = parseQuery(window.location.href);
        if(urlData['section'])
        {
            setTimeout(function(){
                scrollTo(urlData['section']);
            },1000);
        }
    });

}());


(function() {

    $.fn.stickyTopBottom = function(options) {

        var $el, container_top, current_translate, element_top, last_viewport_top, viewport_height;

        if (options == null) {

            options = {}

        }

        options = $.extend({

            container: $('body'),

            top_offset: 0,

            bottom_offset: 0

        }, options);

        $el = $(this);

        container_top = options.container.offset().top;

        element_top = $el.offset().top;

        viewport_height = $(window).height();

        $(window).on('resize', function() {

            return viewport_height = $(window).height()

        });

        current_translate = 0;

        last_viewport_top = document.documentElement.scrollTop || document.body.scrollTop;

        return $(window).scroll(function(event) {

            var container_bottom, effective_viewport_bottom, effective_viewport_top, element_fits_in_viewport, element_height, is_scrolling_up, new_translation, viewport_bottom, viewport_top;

            viewport_top = document.documentElement.scrollTop || document.body.scrollTop;

            viewport_bottom = viewport_top + viewport_height;

            effective_viewport_top = viewport_top + options.top_offset;

            effective_viewport_bottom = viewport_bottom - options.bottom_offset;

            element_height = $el.height();

            is_scrolling_up = viewport_top < last_viewport_top;

            element_fits_in_viewport = element_height < viewport_height;

            new_translation = null;

            if (is_scrolling_up) {

                if (effective_viewport_top < container_top) {

                    new_translation = 0

                } else if (effective_viewport_top < element_top + current_translate) {

                    new_translation = effective_viewport_top - element_top

                }

            } else if (element_fits_in_viewport) {

                if (effective_viewport_top > element_top + current_translate) {

                    new_translation = effective_viewport_top - element_top

                }

            } else {

                container_bottom = container_top + options.container.height();

                if (effective_viewport_bottom > container_bottom) {

                    new_translation = container_bottom - (element_top + element_height)

                } else if (effective_viewport_bottom > element_top + element_height + current_translate) {

                    new_translation = effective_viewport_bottom - (element_top + element_height)

                }

            }

            if (new_translation !== null) {

                current_translate = new_translation;

                $el.css('transform', "translate(0, " + current_translate + "px)")

            }

            return last_viewport_top = viewport_top

        })

    }

}).call(this);



//--- NEW OFFER ESTIMATOR WF CHANGE FOR DYNAMIC POSTCODE

$(function() {

    $("#search").click(function(){
        var postal=$("#postcode").val();
        $('#loader').show();
        $.ajax({
            url:"/includes/caseHelper.php",
            method:"GET",
            data:{type:'fetchRealAddress',postcode:postal},
            success:function(data){
                console.log(data);
                if(data){
                    var opts=$.parseJSON(data);
                    $.each(opts,function(i,d){
                        $('#address').append('<option value="'+d+'">'+d+'</option>');
                        $('.dropdown-content').append('<li class=""><span>'+d+'</span></li>');
                    });
                }
            },
            complete:function(){
                $('#loader').hide();
            }
        });
    });

    $( "#addressListX" ).on('keyup blur',function(){

        var toCheck = $(this).val();



        // Permitted letters depend upon their position in the postcode.

        var alpha1 = "[abcdefghijklmnoprstuwyz]";                       // Character 1

        var alpha2 = "[abcdefghklmnopqrstuvwxy]";                       // Character 2

        var alpha3 = "[abcdefghjkpmnrstuvwxy]";                         // Character 3

        var alpha4 = "[abehmnprvwxy]";                                  // Character 4

        var alpha5 = "[abdefghjlnpqrstuwxyz]";                          // Character 5

        var BFPOa5 = "[abdefghjlnpqrst]";                               // BFPO alpha5

        var BFPOa6 = "[abdefghjlnpqrstuwzyz]";                          // BFPO alpha6



        // Array holds the regular expressions for the valid postcodes

        var pcexp = new Array ();



        // BFPO postcodes

        pcexp.push (new RegExp ("^(bf1)(\\s*)([0-6]{1}" + BFPOa5 + "{1}" + BFPOa6 + "{1})$","i"));



        // Expression for postcodes: AN NAA, ANN NAA, AAN NAA, and AANN NAA

        pcexp.push (new RegExp ("^(" + alpha1 + "{1}" + alpha2 + "?[0-9]{1,2})(\\s*)([0-9]{1}" + alpha5 + "{2})$","i"));



        // Expression for postcodes: ANA NAA

        pcexp.push (new RegExp ("^(" + alpha1 + "{1}[0-9]{1}" + alpha3 + "{1})(\\s*)([0-9]{1}" + alpha5 + "{2})$","i"));



        // Expression for postcodes: AANA  NAA

        pcexp.push (new RegExp ("^(" + alpha1 + "{1}" + alpha2 + "{1}" + "?[0-9]{1}" + alpha4 +"{1})(\\s*)([0-9]{1}" + alpha5 + "{2})$","i"));



        // Exception for the special postcode GIR 0AA

        pcexp.push (/^(GIR)(\s*)(0AA)$/i);



        // Standard BFPO numbers

        pcexp.push (/^(bfpo)(\s*)([0-9]{1,4})$/i);



        // c/o BFPO numbers

        pcexp.push (/^(bfpo)(\s*)(c\/o\s*[0-9]{1,3})$/i);



        // Overseas Territories

        pcexp.push (/^([A-Z]{4})(\s*)(1ZZ)$/i);



        // Anguilla

        pcexp.push (/^(ai-2640)$/i);



        // Load up the string to check

        var postCode = toCheck;



        // Assume we're not going to find a valid postcode

        var valid = false;



        // Check the string against the types of post codes

        for ( var i=0; i<pcexp.length; i++)

        {

            if (pcexp[i].test(postCode))

            {



                // The post code is valid - split the post code into component parts

                pcexp[i].exec(postCode);



                // Copy it back into the original string, converting it to uppercase and inserting a space

                // between the inward and outward codes

                postCode = RegExp.$1.toUpperCase() + " " + RegExp.$3.toUpperCase();



                // If it is a BFPO c/o type postcode, tidy up the "c/o" part

                postCode = postCode.replace (/C\/O\s*/,"c/o ");



                // If it is the Anguilla overseas territory postcode, we need to treat it specially

                if (toCheck.toUpperCase() == 'AI-2640') {postCode = 'AI-2640'};



                // Load new postcode back into the form element

                valid = true;



                // Remember that we have found that the code is valid and break from loop

                break;

            }

        }



        if (valid) {

            $('#postcodeM').val(postCode);

            $(this).val(postCode).typeahead({

                input:postCode,

                minLength: 5,

                maxItem: 0,

                order: "asc",

                offset: false,

                dynamic: false,

                generateOnLoad:true,

                compression: true,

                searchOnFocus:true,

                source: {

                    area: {

                        ajax: function (query) {

                            return {

                                type: "GET",

                                url: SITE_PATH+"includes/caseHelper.php",								// MANISH

                                data: {

                                    postcode: postCode,

                                    type:'fetchRealAddress'

                                }

                            }

                        }

                    }

                },

                callback: {

                    //alert('aa')

                }

            });

        }else {

            /*Materialize.toast("Invalid postcode, please correct", 3000, "red");

            $('#postcode').val("").focus();

            return !1*/

        };

    });

    $( "#addressListX_f2" ).on('keyup blur',function(){

        var toCheck = $(this).val();
        console.log(toCheck);


        // Permitted letters depend upon their position in the postcode.

        var alpha1 = "[abcdefghijklmnoprstuwyz]";                       // Character 1

        var alpha2 = "[abcdefghklmnopqrstuvwxy]";                       // Character 2

        var alpha3 = "[abcdefghjkpmnrstuvwxy]";                         // Character 3

        var alpha4 = "[abehmnprvwxy]";                                  // Character 4

        var alpha5 = "[abdefghjlnpqrstuwxyz]";                          // Character 5

        var BFPOa5 = "[abdefghjlnpqrst]";                               // BFPO alpha5

        var BFPOa6 = "[abdefghjlnpqrstuwzyz]";                          // BFPO alpha6



        // Array holds the regular expressions for the valid postcodes

        var pcexp = new Array ();



        // BFPO postcodes

        pcexp.push (new RegExp ("^(bf1)(\\s*)([0-6]{1}" + BFPOa5 + "{1}" + BFPOa6 + "{1})$","i"));



        // Expression for postcodes: AN NAA, ANN NAA, AAN NAA, and AANN NAA

        pcexp.push (new RegExp ("^(" + alpha1 + "{1}" + alpha2 + "?[0-9]{1,2})(\\s*)([0-9]{1}" + alpha5 + "{2})$","i"));



        // Expression for postcodes: ANA NAA

        pcexp.push (new RegExp ("^(" + alpha1 + "{1}[0-9]{1}" + alpha3 + "{1})(\\s*)([0-9]{1}" + alpha5 + "{2})$","i"));



        // Expression for postcodes: AANA  NAA

        pcexp.push (new RegExp ("^(" + alpha1 + "{1}" + alpha2 + "{1}" + "?[0-9]{1}" + alpha4 +"{1})(\\s*)([0-9]{1}" + alpha5 + "{2})$","i"));



        // Exception for the special postcode GIR 0AA

        pcexp.push (/^(GIR)(\s*)(0AA)$/i);



        // Standard BFPO numbers

        pcexp.push (/^(bfpo)(\s*)([0-9]{1,4})$/i);



        // c/o BFPO numbers

        pcexp.push (/^(bfpo)(\s*)(c\/o\s*[0-9]{1,3})$/i);



        // Overseas Territories

        pcexp.push (/^([A-Z]{4})(\s*)(1ZZ)$/i);



        // Anguilla

        pcexp.push (/^(ai-2640)$/i);



        // Load up the string to check

        var postCode = toCheck;



        // Assume we're not going to find a valid postcode

        var valid = false;



        // Check the string against the types of post codes

        for ( var i=0; i<pcexp.length; i++)

        {

            if (pcexp[i].test(postCode))

            {



                // The post code is valid - split the post code into component parts

                pcexp[i].exec(postCode);



                // Copy it back into the original string, converting it to uppercase and inserting a space

                // between the inward and outward codes

                postCode = RegExp.$1.toUpperCase() + " " + RegExp.$3.toUpperCase();



                // If it is a BFPO c/o type postcode, tidy up the "c/o" part

                postCode = postCode.replace (/C\/O\s*/,"c/o ");



                // If it is the Anguilla overseas territory postcode, we need to treat it specially

                if (toCheck.toUpperCase() == 'AI-2640') {postCode = 'AI-2640'};



                // Load new postcode back into the form element

                valid = true;



                // Remember that we have found that the code is valid and break from loop

                break;

            }

        }

        console.log(valid);

        if (valid) {

            $('#postcodeM_f2').val(postCode);

            $(this).val(postCode).typeahead({

                input:postCode,

                minLength: 5,

                maxItem: 0,

                order: "asc",

                offset: false,

                dynamic: false,

                generateOnLoad:true,

                compression: true,

                searchOnFocus:true,

                source: {

                    area: {

                        ajax: function (query) {

                            return {

                                type: "GET",

                                url: SITE_PATH+"includes/caseHelper.php",                               // MANISH

                                data: {

                                    postcode: postCode,

                                    type:'fetchRealAddress'

                                }

                            }

                        }

                    }

                },

                callback: {

                    //alert('aa')

                }

            });

        }else {

            /*Materialize.toast("Invalid postcode, please correct", 3000, "red");

            $('#postcode_f2').val("").focus();

            return !1*/

        };

    });

    $( ".addressList" ).on('keyup blur',function(){

        var toCheck = $(this).val();



        // Permitted letters depend upon their position in the postcode.

        var alpha1 = "[abcdefghijklmnoprstuwyz]";                       // Character 1

        var alpha2 = "[abcdefghklmnopqrstuvwxy]";                       // Character 2

        var alpha3 = "[abcdefghjkpmnrstuvwxy]";                         // Character 3

        var alpha4 = "[abehmnprvwxy]";                                  // Character 4

        var alpha5 = "[abdefghjlnpqrstuwxyz]";                          // Character 5

        var BFPOa5 = "[abdefghjlnpqrst]";                               // BFPO alpha5

        var BFPOa6 = "[abdefghjlnpqrstuwzyz]";                          // BFPO alpha6



        // Array holds the regular expressions for the valid postcodes

        var pcexp = new Array ();



        // BFPO postcodes

        pcexp.push (new RegExp ("^(bf1)(\\s*)([0-6]{1}" + BFPOa5 + "{1}" + BFPOa6 + "{1})$","i"));



        // Expression for postcodes: AN NAA, ANN NAA, AAN NAA, and AANN NAA

        pcexp.push (new RegExp ("^(" + alpha1 + "{1}" + alpha2 + "?[0-9]{1,2})(\\s*)([0-9]{1}" + alpha5 + "{2})$","i"));



        // Expression for postcodes: ANA NAA

        pcexp.push (new RegExp ("^(" + alpha1 + "{1}[0-9]{1}" + alpha3 + "{1})(\\s*)([0-9]{1}" + alpha5 + "{2})$","i"));



        // Expression for postcodes: AANA  NAA

        pcexp.push (new RegExp ("^(" + alpha1 + "{1}" + alpha2 + "{1}" + "?[0-9]{1}" + alpha4 +"{1})(\\s*)([0-9]{1}" + alpha5 + "{2})$","i"));



        // Exception for the special postcode GIR 0AA

        pcexp.push (/^(GIR)(\s*)(0AA)$/i);



        // Standard BFPO numbers

        pcexp.push (/^(bfpo)(\s*)([0-9]{1,4})$/i);



        // c/o BFPO numbers

        pcexp.push (/^(bfpo)(\s*)(c\/o\s*[0-9]{1,3})$/i);



        // Overseas Territories

        pcexp.push (/^([A-Z]{4})(\s*)(1ZZ)$/i);



        // Anguilla

        pcexp.push (/^(ai-2640)$/i);



        // Load up the string to check

        var postCode = toCheck;



        // Assume we're not going to find a valid postcode

        var valid = false;



        // Check the string against the types of post codes

        for ( var i=0; i<pcexp.length; i++)

        {

            if (pcexp[i].test(postCode))

            {



                // The post code is valid - split the post code into component parts

                pcexp[i].exec(postCode);



                // Copy it back into the original string, converting it to uppercase and inserting a space

                // between the inward and outward codes

                postCode = RegExp.$1.toUpperCase() + " " + RegExp.$3.toUpperCase();



                // If it is a BFPO c/o type postcode, tidy up the "c/o" part

                postCode = postCode.replace (/C\/O\s*/,"c/o ");



                // If it is the Anguilla overseas territory postcode, we need to treat it specially

                if (toCheck.toUpperCase() == 'AI-2640') {postCode = 'AI-2640'};



                // Load new postcode back into the form element

                valid = true;



                // Remember that we have found that the code is valid and break from loop

                break;

            }

        }



        if (valid) {

            $('.postcodeM').val(postCode);

            $(this).val(postCode).typeahead({

                input:postCode,

                minLength: 5,

                maxItem: 0,

                order: "asc",

                offset: false,

                dynamic: false,

                generateOnLoad:true,

                compression: true,

                searchOnFocus:true,

                source: {

                    area: {

                        ajax: function (query) {

                            return {

                                type: "GET",

                                url: SITE_PATH+"includes/caseHelper.php",                               // MANISH

                                data: {

                                    postcode: postCode,

                                    type:'fetchRealAddress'

                                }

                            }

                        }

                    }

                },

                callback: {

                    //alert('aa')

                }

            });

        }else {

            /*Materialize.toast("Invalid postcode, please correct", 3000, "red");

            $('#postcode').val("").focus();

            return !1*/

        };

    });



    //---VALIDATION FOR DD - WANT TO SELL

    $('.WF_OFFER_EST').submit(function(){

        var $frm = $(this);

        var regPhone = /^[0-9 \-\+]+$/;

        var regEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        var regPostcode = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;

        var $name = $frm.find('#name');

        var $phone = $frm.find('#phone');

        var $postCode = $frm.find('#addressListX');

        var $email = $frm.find('#email');

        if (!$name.val()) {

            Materialize.toast("Name cannot be left blank.", 3000, "red");

            $name.val("").focus();

            return !1

        } else if ($phone && (!$phone.val() || !(regPhone.test($phone.val())))) {

            Materialize.toast("Please provide your valid contact number.", 3000, "red");

            $phone.val("").focus();

            return !1

        } else if ($email.length && !(regEmail.test($email.val()))) {

            Materialize.toast("Please provide valid email address", 3000, "red");

            $email.focus();

            return !1

        } else if ($postCode.val()=='') {

            Materialize.toast("Please provide valid postcode with space in between", 3000, "red");

            $postCode.focus();

            return !1

        } else if($('#homeLookingToSell').val()==''){

            Materialize.toast("Please let us know if you're looking to sell a property?", 3000, "red");

            return !1

        } else if(($('#homeLookingToSell').val()=='670' || $('#homeLookingToSell').val()=='671') && $('#homeQuickToSell').val()==''){

            Materialize.toast("Please let us know how quickly you want to sell?", 3000, "red");

            return !1

        } else {
            $frm.find('button[type=submit]').attr('disabled','disabled');
            $frm.find('button[type=submit]').text('Submitting Info...');
            return !0;

        }



    })



    $('#homeLookingToSell').change(function(){

        if($('#homeLookingToSell').val()=='670' || $('#homeLookingToSell').val()=='671')

        {

            $('#homeQuickToSell').removeClass('hide');

        }else{

            $('#homeQuickToSell').addClass('hide');

        }

    })

});















(function() {

    $(function() {

        $(".menu-button").sideNav({

            menuWidth: 240,

            edge: 'right',

            closeOnClick: !1

        });

        $(".dropdown-main-nav").dropdown({

            hover: !0,

            constrain_width: !1,

            belowOrigin: !0

        });

        $('select').material_select();

        var $modalTrigger = $('.modal-trigger');

        $modalTrigger.leanModal();

        $modalTrigger.click(function(e) {

            e.preventDefault()

        });



        function prepareClickToCallButtons() {

            if (supportsTouch) {

                $(".click-to-call").each(function() {

                    var $a = $('<a></a>');

                    var text = $(this).text();

                    var tel = text.replace(/\s/g, '');

                    $a.attr("href", "tel:" + tel).text(text);

                    $(this).empty().append($a)

                })

            }

        }

        prepareClickToCallButtons();

        $('.scrollspy').scrollSpy({

            scrollOffset: 112

        });

        if (!$("#home-estimator").length) {
            //$('a[href^="#homemenu-"]').each(function() {
            /*$('.homemenu').each(function() {

                $(this).attr("href", "https://springbokproperties.co.uk/index.php?section=" + $(this).attr("href"));

            })*/

        }/*
        else {
            $('a[href^="#homemenu-"]').each(function() {
                var str = $(this).attr("href");
                var res = str.replace("homemenu-", "");
                $(this).attr("href", res);
            });
        }*/

    });

    $(window).load(function() {

        if (target) {

            $('a[href$="#' + target + '"]').click()

        }

    });

    $(function() {

        function resizeMapText() {

            var h = $('.home-recent-sale img').height();

            if (h) {

                $('.home-recent-sale .valign-wrapper').height(h)

            } else {

                $('.home-recent-sale .valign-wrapper').css("height", "auto")

            }

        }

        resizeMapText();

        $('.home-recent-sale img').load(function() {

            resizeMapText()

        });



        function resizeSalesBannerHeight() {

            var h = $('.sales-banner form').height();

            if (h && $(window).width() > 600) {

                $('.sales-banner .valign-wrapper').height(h)

            } else {

                $('.sales-banner .valign-wrapper').css("height", "auto")

            }

        }

        resizeSalesBannerHeight();

        $(window).resize(function() {

            resizeMapText();

            resizeSalesBannerHeight()

        })

    });

    $(function($) {

        $('.success-slider').unslider({

            arrows: {

                prev: '<a class="unslider-arrow prev"><i class="sprite sprite-arrow-left"></i></a>',

                next: '<a class="unslider-arrow next"><i class="sprite sprite-arrow-right"></i></a>'

            },

            nav: !1,

            infinite: !0

        });

        $('.review-slider').unslider({

            arrows: {

                prev: '<a class="unslider-arrow prev"><i class="sprite sprite-left-arrow-round"></i></a>',

                next: '<a class="unslider-arrow next"><i class="sprite sprite-right-arrow-round"></i></a>'

            },

            nav: !1,

            infinite: !0

        });

        if ($(".lp3").length) {

            $('.testimonial-slider').unslider({

                arrows: !1,

                nav: !1,

                infinite: !0,

                autoplay: !0,

                delay: 2500

            });

            $('.sub-nav').pushpin({

                top: 64

            })

        }

    });

    $(function() {

        var $modal = $("#modal-video");

        $(".home-video .card, .big-play .play, .reviews-video .card").click(function() {

            var id = $(this).data("id");

            $modal.find(".modal-content").empty().append('<div class="video-container"><iframe class="responsive-img" width="560" height="315" src="https://www.youtube.com/embed/' + id + '?showinfo=0&rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe></div>');

            $modal.openModal({

                complete: function() {

                    $modal.find(".modal-content").empty()

                }

            })

        })

    });

    $(function() {

        var $modal = $("#login-modal");

        $(".not-logged-in").click(function() {

            var active = "signin";

            if ($(this).hasClass("go-register")) {

                active = "register"

            }

            var loginAction = $(this).data('action');

            $modal.openModal({

                ready: function() {

                    $modal.find('.loginAction').val(loginAction);

                    $modal.find('ul.tabs').tabs('select_tab', active)

                }

            });

            return !1

        })

    });

    $(function() {

        var $modal = $("#property-book");

        $(".trigger-book-modal").click(function() {

            $modal.find(".cmd-submit").text($(this).text());

            if ($(this).closest(".properties-list").length) {

                $modal.find('input[name="_page_url"]').val($(this).closest(".property-card").find(".property-title").attr("href"));

                $modal.find('input[name="_source"]').val($(this).closest(".property-card").find(".property-title").attr("href"));

                $modal.find('.book-title').text($(this).closest(".property-card").find(".property-address").text())

            } else {

                $modal.find('input[name="_source"]').val(window.location.href);

                $modal.find('input[name="_page_url"]').val(window.location.href)

            }

            $modal.find('input[name="_prop_id"]').val($(this).data("prop"));

            $modal.find('input[name="_vendorEmail"]').val($(this).data("email"));

            $modal.openModal();

            return !1

        })

    });

    $(function() {

        var $propertySearch = $(".properties-search");

        var $searchBar = $propertySearch.find(".property-search-bar");

        var $adv = $('.property-list-adv');

        var $search = $('#search');



        function pushpinPropertySearch() {

            $propertySearch.height($searchBar.height());

            if ($(window).width() > 600) {

                if (!$searchBar.data('pushpin-id')) {

                    $searchBar.pushpin({

                        top: $propertySearch.offset().top

                    })

                }

            } else {

                $searchBar.pushpin('remove')

            }

        }



        function pushpinAdvertisements() {

            $adv.stickyTopBottom({

                container: $('.properties-list'),

                top_offset: 92

            })

        }



        function buildPagination(total, itemsPerPage) {

            var $page = $("#page");

            $page.empty();

            var pageNeeded = Math.ceil(total / itemsPerPage);

            for (var i = 1; i <= pageNeeded; i++) {

                $page.append('<option value="' + i + '">' + i + '</option>')

            }

            var currentPage = $("#current-page").val();

            $page.val(currentPage).material_select();

            $(".total-page-count").text(pageNeeded.toLocaleString());

            $(".pagination-holder .prev").toggleClass("disabled", currentPage == 1);

            $(".pagination-holder .next").toggleClass("disabled", currentPage == pageNeeded)

        }



        function goToPage(direction) {

            var $page = $("#page");

            var targetPage = +($page.val()) + (+direction);

            var totalPageCount = $(".total-page-count").text();

            $(".pagination-holder .prev").toggleClass("disabled", targetPage == 1);

            $(".pagination-holder .next").toggleClass("disabled", targetPage == totalPageCount);

            if (targetPage >= 1 && targetPage <= totalPageCount) {

                $page.val(targetPage).material_select();

                $("#current-page").val(targetPage);

                changeHistory(!1)

            }

        }



        function prepareSearchCriteria() {

            var searchCriteria = 'Search Properties For Sale';

            searchCriteria += $("#search").val() ? " in " + $("#search").val() : "";

            if ($("#field-dropdown-price-min").val() && $("#field-dropdown-price-max").val()) {

                searchCriteria += ", " + $("#field-dropdown-price-min option:selected").text() + " - " + $("#field-dropdown-price-max option:selected").text()

            } else if ($("#field-dropdown-price-min").val()) {

                searchCriteria += ", at least " + $("#field-dropdown-price-min option:selected").text()

            } else if ($("#field-dropdown-price-max").val()) {

                searchCriteria += ", up to " + $("#field-dropdown-price-max option:selected").text()

            }

            if ($("#field-dropdown-bed-min").val() && $("#field-dropdown-bed-max").val()) {

                searchCriteria += ", " + $("#field-dropdown-bed-min").val() + " - " + $("#field-dropdown-bed-max option:selected").text()

            } else if ($("#field-dropdown-bed-min").val()) {

                searchCriteria += ", at least " + $("#field-dropdown-bed-min option:selected").text()

            } else if ($("#field-dropdown-bed-max").val()) {

                searchCriteria += ", up to " + $("#field-dropdown-bed-max option:selected").text()

            }

            if ($("#added-to-site").val()) {

                searchCriteria += ", sorted by " + $("#added-to-site option:selected").text()

            }

            $(".search-criteria").text(searchCriteria)

        }



        function changeHistory(isClearPagination, isReplaceState) {

            $(".search-alert").hide();

            if (isClearPagination) {

                $("#current-page").val(1);

                prepareSearchCriteria()

            }

            var data = $('.property-search-bar form').serializeArray();

            var targetQueryString = "?" + $.param(data);

            var searchKey = $("#search").val();

            var pageTitleLocation = (searchKey ? (searchKey[0].toUpperCase() + searchKey.substring(1)) : "The UK");

            pageTitleLocation = preloadedDocumentTitle ? preloadedDocumentTitle : pageTitleLocation;

            if (isReplaceState) {

                History.replaceState(null, "Find Properties For Sale In " + pageTitleLocation + " - Springbok Properties", targetQueryString)

            } else {

                History.pushState(null, "Find Properties For Sale In " + pageTitleLocation + " - Springbok Properties", targetQueryString)

            }

        }



        function resizeImage($imageContainer) {

            var im = $imageContainer.children('img');

            im.attr("style", "").removeClass('ww wh');

            var th = $imageContainer.height(),

                tw = $imageContainer.width(),

                ih = im.height(),

                iw = im.width();

            if (ih > iw) {

                im.addClass('ww').removeClass('wh')

            } else {

                im.addClass('wh').removeClass('ww')

            }

            var nh = im.height(),

                nw = im.width(),

                hd = (nh - th) / 2,

                wd = (nw - tw) / 2;

            if (nh < nw) {

                im.css({

                    marginLeft: '-' + wd + 'px',

                    marginTop: 0

                })

            } else {

                im.css({

                    marginTop: '-' + hd + 'px',

                    marginLeft: 0

                })

            }

        }



        function resizeAllImage() {

            $(".card-image-container").each(function() {

                resizeImage($(this))

            })

        }



        function loadPropertyList(isForceBuildPagination) {

            prepareSearchCriteria();

            var data = $('.property-search-bar form').serializeArray();

            var $cards = $(".property-card");

            $cards.addClass("busy");

            $(window).scrollTop(0);

            $.post(SITE_PATH + 'includes/json-properties.php', data, function(result) {

                $(".total").text(result.total.toLocaleString());

                $.each($cards, function(i, card) {

                    var $card = $(card);

                    if (i < result.items.length) {

                        var item = result.items[i];

                        $card.find(".corner").remove();

                        $card.find(".property-title").attr("href", item.url).html(item.title);

                        $card.find(".camera, .prop_img, .property-title").attr("href", item.url);

                        $card.find(".property-price").html(item.price);

                        $card.find(".property-address").html(item.address);

                        $card.find(".property-description").html(item.description);

                        $card.find(".property-image").attr("src", item.image_url);

                        $card.find(".property-image-count").html(item.image_count);

                        $card.find(".prop-book").attr('data-prop', item.id);

                        $card.find(".prop-book").attr('data-email', item.venEmail);

                        if (typeof item.special_tag == "string") {

                            $card.find(".card-image-container").append('<span class="corner ' + item.special_tag + '"></span>')

                        } else {

                            $.each(item.special_tag, function(i, tag) {

                                $card.find(".card-image-container").append('<span class="corner ' + tag + '"></span>')

                            })

                        }

                        $card.show().removeClass("busy")

                    } else {

                        $card.hide()

                    }

                });

                if ($("#current-page").val() == 1 || isForceBuildPagination) {

                    buildPagination(result.total, $("#limit").val())

                }

                if (result.special_message) {

                    $(".radius").show();

                    $(".special-message").empty().append(result.special_message).show()

                } else {

                    $(".special-message").empty().hide()

                }

            })

        }

        if ($propertySearch.length) {

            $(".navbar-fixed nav").css("position", "relative");

            $(window).resize(function() {

                pushpinPropertySearch();

                resizeAllImage()

            });

            $(".card-image-container img").load(function() {

                resizeImage($(this).closest(".card-image-container"))

            });

            setTimeout(function() {

                pushpinPropertySearch();

                pushpinAdvertisements()

            }, 100);

            $(".property-card .card-content p").dotdotdot({});

            $search.typeahead({

                minLength: 1,

                maxItem: 10,

                order: "asc",

                offset: !0,

                dynamic: !0,

                source: {

                    area: {

                        ajax: function(query) {

                            return {

                                type: "GET",

                                url: SITE_PATH + "includes/json-location.php",

                                data: {

                                    q: query

                                }

                            }

                        }

                    }

                },

                callback: {

                    onHideLayout: function(node, query) {

                        changeHistory(!0)

                    },

                    onCancel: function(node, event) {

                        changeHistory(!0)

                    }

                }

            });

            $search.keydown(function(e) {

                $(".search-alert").show();

                if (e.which == 13) {

                    changeHistory(!0)

                }

            });

            $(".do-search").click(function() {

                changeHistory(!0)

            });

            $(".cancel-search").click(function() {

                populateFieldsWithStateData(History.getState().cleanUrl);

                changeHistory()

            });

            $(".property-search-extra").click(function(e) {

                e.stopPropagation()

            });

            $(window).click(function(e) {

                $(".property-search-bar .field.active").removeClass("active");

                $(".property-search-extra").slideUp("fast")

            });



            function showFilters($this) {

                $this.addClass("active");

                if ($this.hasClass("field-property-type")) {

                    $(".property-search-extra .filter").hide();

                    $(".property-search-extra .filter-property-type").show()

                } else if ($this.hasClass("field-filters")) {

                    $(".property-search-extra .filter").show();

                    if ($(".property-search-bar .field-price").is(":visible")) {

                        $(".property-search-extra .filter-price").hide()

                    }

                    if ($(".property-search-bar .field-beds").is(":visible")) {

                        $(".property-search-extra .filter-bed").hide()

                    }

                    if ($(".property-search-bar .field-property-type").is(":visible")) {

                        $(".property-search-extra .filter-property-type").hide()

                    }

                }

                $(".property-search-extra").slideDown("fast")

            }



            function closeFilters() {

                $(".property-search-bar .field.active").removeClass("active");

                $(".property-search-extra").slideUp("fast")

            }

            $(".field-property-type, .field-filters").click(function(e) {

                e.stopPropagation();

                var $this = $(this);

                if ($this.hasClass("active")) {

                    closeFilters()

                } else {

                    if ($(".property-search-bar .field.active").length) {

                        $(".property-search-bar .field.active").removeClass("active");

                        $(".property-search-extra").slideUp("fast", function() {

                            showFilters($this)

                        })

                    } else {

                        showFilters($this)

                    }

                }

            });

            $("#radius").change(function() {

                changeHistory(!0)

            });

            $("#field-dropdown-price-min").change(function() {

                $("#filter-dropdown-price-min").val($(this).val()).material_select();

                changeHistory(!0)

            });

            $("#field-dropdown-price-max").change(function() {

                $("#filter-dropdown-price-max").val($(this).val()).material_select();

                changeHistory(!0)

            });

            $("#filter-dropdown-price-min").change(function() {

                $("#field-dropdown-price-min").val($(this).val()).material_select();

                changeHistory(!0)

            });

            $("#filter-dropdown-price-max").change(function() {

                $("#field-dropdown-price-max").val($(this).val()).material_select();

                changeHistory(!0)

            });

            $("#field-dropdown-bed-min").change(function() {

                $("#filter-dropdown-bed-min").val($(this).val()).material_select();

                changeHistory(!0)

            });

            $("#field-dropdown-bed-max").change(function() {

                $("#filter-dropdown-bed-max").val($(this).val()).material_select();

                changeHistory(!0)

            });

            $("#filter-dropdown-bed-min").change(function() {

                $("#field-dropdown-bed-min").val($(this).val()).material_select();

                changeHistory(!0)

            });

            $("#filter-dropdown-bed-max").change(function() {

                $("#field-dropdown-bed-max").val($(this).val()).material_select();

                changeHistory(!0)

            });

            $(".filter-property-type input").click(function() {

                var checked = $(".filter-property-type input:checked").length;

                $(".property-type-count").empty();

                if (checked) {

                    $(".property-type-count").append("(" + checked + ")")

                }

                changeHistory(!0)

            });

            $("#added-to-site").change(function() {

                changeHistory(!0)

            });

            $("#property-stc").click(function() {

                changeHistory(!0)

            });

            $(".filter-action-done").click(function() {

                closeFilters()

            });

            $("#page").change(function() {

                var targetPage = $("#page").val();

                $("#current-page").val(targetPage);

                $(".pagination-holder .prev").toggleClass("disabled", targetPage == 1);

                $(".pagination-holder .next").toggleClass("disabled", targetPage == +$(".total-page-count").text());

                changeHistory(!1)

            });

            $(".pagination-holder .prev").click(function() {

                if (!$(this).hasClass("disabled")) {

                    goToPage(-1)

                }

            });

            $(".pagination-holder .next").click(function() {

                if (!$(this).hasClass("disabled")) {

                    goToPage(+1)

                }

            });

            var urlExcludeList = ["https://springbokproperties.co.uk/property-for-sale/", "https://springbokproperties.co.uk/properties-for-sale/", "https://springbokproperties.co.uk/property-list/", "https://www.springbokproperties.co.uk/property-for-sale/", "https://www.springbokproperties.co.uk/properties-for-sale/", "https://www.springbokproperties.co.uk/property-list/", ".html", ".php", "/"];

            var preloadedDocumentTitle = "";



            function capitalizeFirstLetter(string) {

                return string.charAt(0).toUpperCase() + string.slice(1)

            }



            function populateFieldsWithStateData(queryParam) {

                var initialData = parseQuery(queryParam);

                initialData['property-stc'] = initialData.limit ? initialData['property-stc'] : 1;

                initialData['current-page'] = initialData['current-page'] || 1;

                initialData.limit = initialData.limit || 10;

                if (!document.location.search) {

                    var searchTextInUrl = queryParam.split("?")[0];

                    for (var i = 0; i < urlExcludeList.length; i++) {

                        searchTextInUrl = searchTextInUrl.replace(urlExcludeList[i], "")

                    }

                    if (searchTextInUrl && window.location.href.indexOf(searchTextInUrl) > 0 && isNaN(queryParam.split("under-")[1]) && isNaN(queryParam.split("over-")[1])) {

                        initialData.search = decodeURIComponent(searchTextInUrl);

                        preloadedDocumentTitle = initialData.search;

                        document.title = "House For Sale In " + preloadedDocumentTitle + " - Properties For Sale in " + preloadedDocumentTitle;

                        $('meta[name=description]').attr('content', 'Find houses for sale in ' + preloadedDocumentTitle + ' from Springbok Properties Nationwide. Search for houses, flats, bungalows from a wide range of properties for sale in ' + preloadedDocumentTitle);

                        $(".location-extra-message").show();

                        $(".location-extra-message").find(".search-location-special").html(preloadedDocumentTitle.charAt(0).toUpperCase() + preloadedDocumentTitle.slice(1))

                    }

                    var searchTextInUrl = queryParam.split("under-")[1];

                    if (searchTextInUrl && window.location.href.indexOf(searchTextInUrl) > 0 && searchTextInUrl > 0) {

                        initialData['filter-price-max'] = decodeURIComponent(searchTextInUrl);

                        preloadedDocumentTitle = initialData['filter-price-max'];

                        document.title = "Houses For Sale Under " + searchTextInUrl + " - Properties For Sale Under " + searchTextInUrl.substring(0, 2) + "K"

                    }

                    var searchTextInUrl = queryParam.split("over-")[1];

                    if (searchTextInUrl && window.location.href.indexOf(searchTextInUrl) > 0 && searchTextInUrl > 0) {

                        initialData['filter-price-min'] = decodeURIComponent(searchTextInUrl);

                        preloadedDocumentTitle = initialData['filter-price-min'];

                        document.title = "Luxury Homes For Sale Over " + searchTextInUrl + " - Properties For Sale Over " + searchTextInUrl.substring(0, 3) + "K"

                    }

                } else {

                    $(".location-extra-message").hide()

                }

                $search.val(initialData.search);

                $(".alert-box").toggle(!!initialData.search);

                $("#radius").val(initialData.radius).material_select();

                $("#field-dropdown-price-min").val(initialData['filter-price-min']).material_select();

                $("#filter-dropdown-price-min").val(initialData['filter-price-min']).material_select();

                $("#field-dropdown-price-max").val(initialData['filter-price-max']).material_select();

                $("#filter-dropdown-price-max").val(initialData['filter-price-max']).material_select();

                $("#field-dropdown-bed-min").val(initialData['filter-bed-min']).material_select();

                $("#filter-dropdown-bed-min").val(initialData['filter-bed-min']).material_select();

                $("#field-dropdown-bed-max").val(initialData['filter-bed-max']).material_select();

                $("#filter-dropdown-bed-max").val(initialData['filter-bed-max']).material_select();

                $("#added-to-site").val(initialData['added-to-site']).material_select();

                $("#property-stc").prop('checked', !!(initialData['property-stc']));

                $(".filter-property-type input").each(function() {

                    if (typeof initialData['property-type'] == "string") {

                        $(this).prop('checked', !!(initialData['property-type'] == $(this).val()))

                    } else {

                        $(this).prop('checked', !!(initialData['property-type'] && initialData['property-type'].indexOf($(this).val()) > -1))

                    }

                });

                var checked = $(".filter-property-type input:checked").length;

                $(".property-type-count").empty();

                if (checked) {

                    $(".property-type-count").append("(" + checked + ")")

                }

                var targetPage = initialData['current-page'] || 1;

                $("#page").val(targetPage).material_select();

                $("#current-page").val(targetPage)

            }

            History.Adapter.bind(window, 'statechange', function() {

                populateFieldsWithStateData(History.getState().cleanUrl);

                loadPropertyList()

            });

            populateFieldsWithStateData(window.location.href);

            loadPropertyList(!0)

        }

    });

    $(function() {

        var $slider = $('#property-carousel');



        function resizeSlider() {

            var ratio = 2 / 3;

            var w = $slider.width();

            $slider.height(w * ratio);

            $slider.find("li").height(w * ratio);

            $(".unslider-nav li").height($(".unslider-nav li:first").width() * ratio)

        }

        if ($slider.length) {

            resizeSlider();

            $(window).on("resize", function() {

                resizeSlider()

            });

            var image = new Image();

            image.onload = function() {

                $("img[xsrc]").each(function() {

                    $(this).attr("src", $(this).attr("xsrc"));

                    $(this).removeAttr("xsrc")

                });

                setTimeout(function() {

                    resizeSlider()

                }, 100)

            };

            image.src = $slider.find("img:first").attr("src");

            $slider.on('unslider.ready', function() {

                $(".unslider-nav img").load(function() {

                    resizeSlider()

                })

            });

            var propertySlider = $slider.unslider({

                arrows: {

                    prev: '<a class="unslider-arrow prev"><i class="sprite sprite-arrow-left-rounded"></i></a>',

                    next: '<a class="unslider-arrow next"><i class="sprite sprite-arrow-right-rounded"></i></a>'

                },

                nav: function(index, label) {

                    return $(this).find("img").get(0).outerHTML

                },

                autoplay: !0,

                infinite: !0

            });

            setTimeout(function() {

                propertySlider.unslider('stop');

                $(".unslider-arrow").css("bottom", ($(".unslider-nav").height() - 20) + "px")

            }, 1000);

            propertySlider.on('unslider.change', function() {

                if (!isSlideshow) {

                    propertySlider.unslider('stop')

                }

            });

            var isSlideshow = !1;

            $(".slideshow-control").click(function() {

                if (!isSlideshow) {

                    propertySlider.unslider('start');

                    $(this).text("Stop Slideshow")

                } else {

                    propertySlider.unslider('stop');

                    $(this).text("Start Slideshow")

                }

                isSlideshow = !isSlideshow

            });

            $("#mapid").click(function() {

                $('ul.tabs').tabs('select_tab', 'property-tab-map')

            })

        }

    });

    $(function() {

        if ($("#home-recent-sale").length) {

            var windowHeight = $(window).height();



            function p2h(percentage) {

                return (windowHeight * percentage) / 100

            }

            Materialize.showStaggeredList($(".home-banner ul"));

            var options = [{

                selector: '.home-fast .card-panel',

                offset: p2h(10),

                callback: function(el) {

                    $(el).addClass('z-depth-2').removeClass("z-depth-0")

                }

            }, {

                selector: '.home-why ul.row',

                offset: 180,

                callback: function(el) {

                    Materialize.showStaggeredList($(el))

                }

            }, {

                selector: '.home-why ul.row + ul.row',

                offset: 180,

                callback: function(el) {

                    Materialize.showStaggeredList($(el))

                }

            }, {

                selector: '.home-why ul.row + ul.row + ul.row',

                offset: 180,

                callback: function(el) {

                    Materialize.showStaggeredList($(el))

                }

            }, {

                selector: '.home-estimator .sprite-9000',

                offset: 150,

                callback: function(el) {

                    Materialize.fadeInImage($(el))

                }

            }, {

                selector: '.home-how-it-works img',

                offset: 250,

                callback: function(el) {

                    Materialize.fadeInImage($(el))

                }

            }, {

                selector: '.home-recent-sale img',

                offset: 250,

                callback: function(el) {

                    Materialize.fadeInImage($(el))

                }

            }, {

                selector: '.small-videos',

                offset: 100,

                callback: function(el) {

                    Materialize.showStaggeredList($(el))

                }

            }];

            Materialize.scrollFire(options)

        }

    })

    $(function() {

        $(".save-property").click(function() {

            if (!$(this).hasClass("not-logged-in")) {

                var arrData = [];

                arrData.type = 'save_prop';

                arrData.propId = $(this).data('prop');

                var strData = $.extend({}, arrData);

                $.post(SITE_PATH + 'includes/caseHelper.php', strData, function(result) {

                    if (result == 'success') {

                        Materialize.toast("Property Saved Successfully", 3000, "green")

                    } else {

                        Materialize.toast("Already Saved.", 3000, "red")

                    }

                })

            }

        });

        $(".add-notes").click(function() {

            if (!$(this).hasClass("not-logged-in")) {

                $('.add-note-editor').show()

            }

        });

        $(".btn-cancel-note").click(function() {

            $('.add-note-editor').hide()

        });

        $(".btn-save-note").click(function() {

            var notes = $('#myTextarea').val();

            if (notes != '') {

                var arrData = [];

                arrData.type = 'saveNotes';

                arrData.id = $(this).data('prop');

                arrData.notes = $('#myTextarea').val();

                var strData = $.extend({}, arrData);

                $.post(SITE_PATH + 'includes/caseHelper.php', strData, function(result) {

                    if (result == 'Notes Updated' || result == 'Notes Added') {

                        Materialize.toast("Note added Successfully", 3000, "green");

                        location.reload()

                    } else {

                        Materialize.toast("Failed to save.", 3000, "red")

                    }

                })

            } else {

                Materialize.toast("Blank note not allowed.", 3000, "red")

            }

        });

        /*$('#rq-buyingStatus').change(function() {

            if ($(this).val() == '317' || $(this).val() == '318') {

                $('.form-group-postcode').show()

            } else {

                $('.form-group-postcode').hide()

            }

        });

        $('.form-request-details').submit(function() {

            if ($('#rq-name').val().trim() == '' || $('#rq-phone').val() == '') {

                Materialize.toast("Name & Phone are mandatory fields and cannot be left blank.", 3000, "red");

                return !1

            } else if ($('#rq-buyingStatus').val() == '0') {

                Materialize.toast("Please select property to sell.", 3000, "red");

                $('#rq-buyingStatus').focus();

                return !1

            } else if (($('#rq-buyingStatus').val() == '317' || $('#rq-buyingStatus').val() == '318') && $('#rq-postcode').val() == '') {

                Materialize.toast("Please provide postcode for property in sale.", 3000, "red");

                $('#rq-postcode').focus();

                return !1

            } else {

                return !0

            }

        });*/



        $('.form-request-details').submit(function() {

            if ($('#rq-name').val().trim() == '' || $('#rq-phone').val() == '') {

                Materialize.toast("Name & Phone are mandatory fields and cannot be left blank.", 3000, "red");

                return !1

            } else if ($('#rq-buyingStatus').val() == '0') {

                Materialize.toast("Please select property to sell.", 3000, "red");

                $('#rq-buyingStatus').focus();

                return !1

            } else if ($('#rq-postcode').val() == '') {

                Materialize.toast("Please provide your property postcode.", 3000, "red");

                $('#rq-postcode').focus();

                return !1

            } else if ($('#rq-address').val() == '') {

                Materialize.toast("Please select your address.", 3000, "red");

                $('#rq-address').focus();

                return !1

            } else {

                return !0

            }

        });



        $('#rq-postcode').blur(function(){

            var toCheck = $(this).val();



            // Permitted letters depend upon their position in the postcode.

            var alpha1 = "[abcdefghijklmnoprstuwyz]";                       // Character 1

            var alpha2 = "[abcdefghklmnopqrstuvwxy]";                       // Character 2

            var alpha3 = "[abcdefghjkpmnrstuvwxy]";                         // Character 3

            var alpha4 = "[abehmnprvwxy]";                                  // Character 4

            var alpha5 = "[abdefghjlnpqrstuwxyz]";                          // Character 5

            var BFPOa5 = "[abdefghjlnpqrst]";                               // BFPO alpha5

            var BFPOa6 = "[abdefghjlnpqrstuwzyz]";                          // BFPO alpha6



            // Array holds the regular expressions for the valid postcodes

            var pcexp = new Array ();



            // BFPO postcodes

            pcexp.push (new RegExp ("^(bf1)(\\s*)([0-6]{1}" + BFPOa5 + "{1}" + BFPOa6 + "{1})$","i"));



            // Expression for postcodes: AN NAA, ANN NAA, AAN NAA, and AANN NAA

            pcexp.push (new RegExp ("^(" + alpha1 + "{1}" + alpha2 + "?[0-9]{1,2})(\\s*)([0-9]{1}" + alpha5 + "{2})$","i"));



            // Expression for postcodes: ANA NAA

            pcexp.push (new RegExp ("^(" + alpha1 + "{1}[0-9]{1}" + alpha3 + "{1})(\\s*)([0-9]{1}" + alpha5 + "{2})$","i"));



            // Expression for postcodes: AANA  NAA

            pcexp.push (new RegExp ("^(" + alpha1 + "{1}" + alpha2 + "{1}" + "?[0-9]{1}" + alpha4 +"{1})(\\s*)([0-9]{1}" + alpha5 + "{2})$","i"));



            // Exception for the special postcode GIR 0AA

            pcexp.push (/^(GIR)(\s*)(0AA)$/i);



            // Standard BFPO numbers

            pcexp.push (/^(bfpo)(\s*)([0-9]{1,4})$/i);



            // c/o BFPO numbers

            pcexp.push (/^(bfpo)(\s*)(c\/o\s*[0-9]{1,3})$/i);



            // Overseas Territories

            pcexp.push (/^([A-Z]{4})(\s*)(1ZZ)$/i);



            // Anguilla

            pcexp.push (/^(ai-2640)$/i);



            // Load up the string to check

            var postCode = toCheck;



            // Assume we're not going to find a valid postcode

            var valid = false;



            // Check the string against the types of post codes

            for ( var i=0; i<pcexp.length; i++)

            {

                if (pcexp[i].test(postCode))

                {



                    // The post code is valid - split the post code into component parts

                    pcexp[i].exec(postCode);



                    // Copy it back into the original string, converting it to uppercase and inserting a space

                    // between the inward and outward codes

                    postCode = RegExp.$1.toUpperCase() + " " + RegExp.$3.toUpperCase();



                    // If it is a BFPO c/o type postcode, tidy up the "c/o" part

                    postCode = postCode.replace (/C\/O\s*/,"c/o ");



                    // If it is the Anguilla overseas territory postcode, we need to treat it specially

                    if (toCheck.toUpperCase() == 'AI-2640') {postCode = 'AI-2640'};



                    // Load new postcode back into the form element

                    valid = true;



                    // Remember that we have found that the code is valid and break from loop

                    break;

                }

            }



            // Return with either the reformatted valid postcode or the original invalid postcode

            if (valid) {

                $(this).val(postCode);

                var urlp = SITE_PATH + '/includes/caseHelper.php';

                jQuery.post(urlp, {

                    type: 'fetchAddress',

                    postcode: postCode

                }, function (data) {

                    $('#rq-address').empty().append('<option value="">-SELECT-</option>');

                    var obj = $.parseJSON(data);

                    $.each(obj,function(key, value)

                    {

                        $('#rq-address').append('<option value="' + value.line_1 +' '+value.line_2 +' '+value.county+ '">' + value.line_1 +', '+value.line_2 +', '+value.county+ '</option>');

                    });

                    $('#rq-address').material_select();

                });

            }else {

                Materialize.toast("Invalid postcode, please correct", 3000, "red");

                $('#rq-postcode').val("").focus();

                $('#rq-address').val("");	$('#rq-address').material_select();

                return !1

            };

        });



        $('.alert-box-link').click(function() {

            if ($(this).hasClass("not-logged-in")) {} else {

                var saveSearchLink = SITE_PATH + 'save_search.php' + document.location.search;

                window.location.assign(saveSearchLink)

            }

        })



        $( "input[name='postcode']" ).not('.address_typeahead').on('keyup blur',function(){

            var toCheck = $(this).val();



            // Permitted letters depend upon their position in the postcode.

            var alpha1 = "[abcdefghijklmnoprstuwyz]";                       // Character 1

            var alpha2 = "[abcdefghklmnopqrstuvwxy]";                       // Character 2

            var alpha3 = "[abcdefghjkpmnrstuvwxy]";                         // Character 3

            var alpha4 = "[abehmnprvwxy]";                                  // Character 4

            var alpha5 = "[abdefghjlnpqrstuwxyz]";                          // Character 5

            var BFPOa5 = "[abdefghjlnpqrst]";                               // BFPO alpha5

            var BFPOa6 = "[abdefghjlnpqrstuwzyz]";                          // BFPO alpha6



            // Array holds the regular expressions for the valid postcodes

            var pcexp = new Array ();



            // BFPO postcodes

            pcexp.push (new RegExp ("^(bf1)(\\s*)([0-6]{1}" + BFPOa5 + "{1}" + BFPOa6 + "{1})$","i"));



            // Expression for postcodes: AN NAA, ANN NAA, AAN NAA, and AANN NAA

            pcexp.push (new RegExp ("^(" + alpha1 + "{1}" + alpha2 + "?[0-9]{1,2})(\\s*)([0-9]{1}" + alpha5 + "{2})$","i"));



            // Expression for postcodes: ANA NAA

            pcexp.push (new RegExp ("^(" + alpha1 + "{1}[0-9]{1}" + alpha3 + "{1})(\\s*)([0-9]{1}" + alpha5 + "{2})$","i"));



            // Expression for postcodes: AANA  NAA

            pcexp.push (new RegExp ("^(" + alpha1 + "{1}" + alpha2 + "{1}" + "?[0-9]{1}" + alpha4 +"{1})(\\s*)([0-9]{1}" + alpha5 + "{2})$","i"));



            // Exception for the special postcode GIR 0AA

            pcexp.push (/^(GIR)(\s*)(0AA)$/i);



            // Standard BFPO numbers

            pcexp.push (/^(bfpo)(\s*)([0-9]{1,4})$/i);



            // c/o BFPO numbers

            pcexp.push (/^(bfpo)(\s*)(c\/o\s*[0-9]{1,3})$/i);



            // Overseas Territories

            pcexp.push (/^([A-Z]{4})(\s*)(1ZZ)$/i);



            // Anguilla

            pcexp.push (/^(ai-2640)$/i);



            // Load up the string to check

            var postCode = toCheck;



            // Assume we're not going to find a valid postcode

            var valid = false;



            // Check the string against the types of post codes

            for ( var i=0; i<pcexp.length; i++)

            {

                if (pcexp[i].test(postCode))

                {



                    // The post code is valid - split the post code into component parts

                    pcexp[i].exec(postCode);



                    // Copy it back into the original string, converting it to uppercase and inserting a space

                    // between the inward and outward codes

                    postCode = RegExp.$1.toUpperCase() + " " + RegExp.$3.toUpperCase();



                    // If it is a BFPO c/o type postcode, tidy up the "c/o" part

                    postCode = postCode.replace (/C\/O\s*/,"c/o ");



                    // If it is the Anguilla overseas territory postcode, we need to treat it specially

                    if (toCheck.toUpperCase() == 'AI-2640') {postCode = 'AI-2640'};



                    // Load new postcode back into the form element

                    valid = true;



                    // Remember that we have found that the code is valid and break from loop

                    break;

                }

            }



            if (valid) {

                $(this).val(postCode);

            }else {

                /*Materialize.toast("Invalid postcode, please correct", 3000, "red");

                $('#postcode').val("").focus();

                return !1*/

            };

        });



        function isPostcode(s) {

            var regex = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;

            return regex.test(s)

        }



        function isEmail(s) {

            var regexE = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            return regexE.test(s)

        }



        function validateForm($frm) {

            var regPhone = /^[0-9 \-\+]+$/;

            var regEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            var regPostcode = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;

            var $name = $frm.find('#name');

            var $phone = $frm.find('#phone');

            var $postCode = $frm.find('#postcode');

            var $email = $frm.find('#email');

            if (!$name.val()) {

                Materialize.toast("Names cannot be left blank.", 3000, "red");
                $name.val("").focus();

                return !1

            } else if ($phone && (!$phone.val() || !(regPhone.test($phone.val())))) {

                Materialize.toast("Please provide your valid contact number.", 3000, "red");

                $phone.val("").focus();

                return !1

            } else if ($postCode.length && !($postCode.val())) {

                Materialize.toast("Please provide valid UK postcode with a space between the two parts. e.g. AB1 1BA; S60 4DT; WA16 7HN", 3000, "red");

                $postCode.focus();

                return !1

            } else {

                $frm.find('button[type=submit]').attr('disabled','disabled');
                $frm.find('button[type=submit]').text('Submitting...');
                return !0;

            }
        }

        function validateForm_F2($frm) {

            var regPostcode = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;

            var $postCode = $frm.find('#postcodeM_f2');

            if ($postCode.length && !($postCode.val())) {

                Materialize.toast("Please provide valid UK postcode with a space between the two parts. e.g. AB1 1BA; S60 4DT; WA16 7HN", 3000, "red");

                $postCode.focus();

                return !1

            } else {

                $frm.find('button[type=submit]').attr('disabled','disabled');
                $frm.find('button[type=submit]').text('Submitting Info...');
                return !0;

            }
        }

        function validateFormf1($frm) {

            var regPhone = /^[0-9 \-\+]+$/;

            var regEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            var regPostcode = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;

            var $name = $frm.find('#name_f2');

            var $phone = $frm.find('#phone_f2');

            var $postCode = $frm.find('#postcode_f2');

            var $email = $frm.find('#email_f2');

            if (!$name.val()) {

                Materialize.toast("Names cannot be left blank.", 3000, "red");
                $name.val("").focus();

                return !1

            } else if ($phone && (!$phone.val() || !(regPhone.test($phone.val())))) {

                Materialize.toast("Please provide your valid contact number.", 3000, "red");

                $phone.val("").focus();

                return !1

            } else if ($postCode.length && !($postCode.val())) {

                Materialize.toast("Please provide valid UK postcode with a space between the two parts. e.g. AB1 1BA; S60 4DT; WA16 7HN", 3000, "red");

                $postCode.focus();

                return !1

            } else {

                $frm.find('button[type=submit]').attr('disabled','disabled');
                $frm.find('button[type=submit]').text('Submitting...');
                return !0;

            }
        }

        function validateForm2($frm) {

            var regPhone = /^[0-9 \-\+]+$/;

            var regEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            var regPostcode = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;

            var $name = $frm.find('#name');

            var $phone = $frm.find('#phone');

            var $postCode = $frm.find('#postcode');

            var $email = $frm.find('#email');

            if (!$email.val() || !(regEmail.test($email.val()))) {

                Materialize.toast("Please provide a valid email address.", 3000, "red");

                $email.val("").focus();

                return !1

            } else if ($phone && (!$phone.val() || !(regPhone.test($phone.val())))) {

                Materialize.toast("Please provide your valid contact number.", 3000, "red");

                $phone.val("").focus();

                return !1

            } else if ($postCode.length && !($postCode.val())) {

                Materialize.toast("Please provide valid UK postcode with a space between the two parts. e.g. AB1 1BA; S60 4DT; WA16 7HN", 3000, "red");

                $postCode.focus();

                return !1

            } else {

                return !0

            }

        }



        function validateForm3($frm) {

            var regPhone = /^[0-9 \-\+]+$/;

            var regEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            var regPostcode = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;

            var $name = $frm.find('#name');

            var $phone = $frm.find('#phone');

            var $postCode = $frm.find('#postcode');

            var $email = $frm.find('#email');

            if (!$name.val()) {

                Materialize.toast("Name cannot be left blank.", 3000, "red");

                $name.val("").focus();

                return !1

            } else if ($phone && (!$phone.val() || !(regPhone.test($phone.val())))) {

                Materialize.toast("Please provide your valid contact number.", 3000, "red");

                $phone.val("").focus();

                return !1

            } else if (!$email.val() || !(regEmail.test($email.val()))) {

                Materialize.toast("Please provide a valid email address.", 3000, "red");

                $email.val("").focus();

                return !1

            }else if ($postCode.val()=='') {

                Materialize.toast("Postcode cannot be left blank.", 3000, "red");

                $postCode.val("").focus();

                return !1

            } else {

                return !0

            }

        }



        function validateStep2($frm)

        {

            if(validateForm3($frm))

            {

                /*if($frm.find('#h_no').val()=='')

                {

                    Materialize.toast("House number / name cannot be left blank Please add.", 3000, "red");

                    $frm.find('#h_no').focus();

                    return !1

                }else */

                if($frm.find('#address option:selected').val()==''){

                    Materialize.toast("Property address is crucial for valuation. Please provide", 3000, "red");

                    $frm.find('#address').focus();

                    return !1

                }else if($frm.find('#property_type option:selected').val()==''){

                    Materialize.toast("Property type is necessary to accurately value your property.", 3000, "red");

                    $frm.find('#property_type').focus();

                    return !1

                }else if($frm.find('#no_of_bedsbathsreceptions').val()==''){

                    Materialize.toast("Number of bed / bath & receptions are needed to evaluate your property correctly.", 3000, "red");

                    $frm.find('#no_of_bedsbathsreceptions').focus();

                    return !1

                }else{

                    return true;

                }

            }else{

                return false;

            }

        }



        function validateValidForm($frm) {

            var regPhone = /^[\d]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

            var regEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            var regPostcode = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;

            var $phone = $frm.find('#phone');

            var $postCode = $frm.find('#postcode');

            var $email = $frm.find('#email');

            if ($phone && (!$phone.val() || !(regPhone.test($phone.val())))) {

                Materialize.toast("Please check your phone number.", 3000, "red");

                $phone.focus();

                $phone.removeClass('fieldSuccess');

                $phone.addClass('fieldError');

                return !1

            } else if (!$email.val() || !(regEmail.test($email.val()))) {

                Materialize.toast("Please provide a valid email address.", 3000, "red");

                $email.focus();

                $email.removeClass('fieldSuccess');

                $email.addClass('fieldError');

                $phone.addClass('fieldSuccess');

                return !1

            } else if ($postCode.val() && !isPostcode($postCode.val())) {

                Materialize.toast("Please provide valid UK postcodes with a space between the two parts. e.g. AB1 1BA; S60 4DT; WA16 7HN", 3000, "red");

                $postCode.focus();

                $postCode.removeClass('fieldSuccess');

                $postCode.addClass('fieldError');

                $email.addClass('fieldSuccess');

                $phone.addClass('fieldSuccess');

                return !1

            } else {

                $postCode.removeClass('fieldError');

                $phone.removeClass('fieldError');

                $email.removeClass('fieldError');

                $postCode.addClass('fieldSuccess');

                $phone.addClass('fieldSuccess');

                $email.addClass('fieldSuccess');

                return !0

            }

        }



        function validateFormRefer($frm) {

            var regPhone = /^[0-9 \-\+]+$/;

            var regEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            var regPostcode = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;

            var $name = $frm.find('#name');

            var $phone = $frm.find('#phone');

            var $postCode = $frm.find('#postcode');

            var $email = $frm.find('#email');

            var $name_f = $frm.find('#friend_referrer_name');

            var $phone_f = $frm.find('#friend_referrer_phone');

            var $postCode_f = $frm.find('#friend_referrer_postcode');

            var $email_f = $frm.find('#friend_referrer_email');

            if (!$name.val() || !$name_f.val()) {

                Materialize.toast("Both names are required & cannot be left blank.", 3000, "red");

                $name.val("").focus();

                return !1

            } else if ($phone && (!$phone.val() || !(regPhone.test($phone.val()))) && (!$phone_f.val() || !(regPhone.test($phone_f.val())))) {

                Materialize.toast("Please provide yours & friend's valid contact numbers.", 3000, "red");

                $phone.val("").focus();

                return !1

            } else if ($postCode.length && !($postCode.val() && isPostcode($postCode.val())) && !($postCode_f.val() && isPostcode($postCode_f.val()))) {

                Materialize.toast("Please provide valid UK postcodes (friends too) with a space between the two parts. e.g. AB1 1BA; S60 4DT; WA16 7HN", 3000, "red");

                $postCode.focus();

                return !1

            } else if (!($email.val() && isEmail($email.val()))) {

                Materialize.toast("Please provide your valid email address.", 3000, "red");

                $email.focus();

                return !1

            } else {

                return !0

            }

        }



        function frmSoldPrices($frm) {

            var regPhone = /^[0-9 \-\+]+$/;

            var regEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            var $postCode = $frm.find('#postcode');

            var $email = $frm.find('#email');

            var $phone = $frm.find('#phone');

            if ($postCode.length && !($postCode.val())) {

                Materialize.toast("Please provide valid UK postcode with a space between the two parts. e.g. AB1 1BA; S60 4DT; WA16 7HN", 3000, "red");

                $postCode.focus();

                return !1

            } else if ($phone.val() != '') {

                if (!(regPhone.test($phone.val()))) {

                    Materialize.toast("Please provide your valid contact number. You can skip this field too.", 3000, "red");

                    $phone.val("").focus();

                    return !1

                }

            } else if ($email.val() != '') {

                if (!(regEmail.test($email.val()))) {

                    Materialize.toast("Please provide a valid email address. You can skip this field too.", 3000, "red");

                    $email.val("").focus();

                    return !1

                }

            } else {

                return !0

            }

        }

        $(".wf_1").submit(function() {

            return validateForm($(this))

        });

        $(".wf_f1").submit(function() {

            return validateFormf1($(this))

        });

        $(".wf_f2").submit(function() {

            return validateForm_F2($(this))

        });

        $(".wf_2").submit(function() {

            return validateForm2($(this))

        });

        $(".wf_3").submit(function() {

            return validateForm3($(this))

        });

        $(".wf_4").submit(function() {

            return frmSoldPrices($(this))

        });

        $(".wf_5").submit(function() {

            return validateForm($(this))

        });

        $(".wf_refer").submit(function() {

            return validateFormRefer($(this))

        });

        $(".wf_valid").submit(function() {

            return validateValidForm($(this))

        });



        $(".WF_STEP2").submit(function() {	// FOR STEP 2 WF

            return validateStep2($(this))

        });



        //--DOWNLOAD PDF VALUATION REPORT

        $('.dn').click(function(){

            var tk = $(this).data('tk');

            var tr = $(this).data('tr');

            var ur = 'https://www.hometrack.com/api/reporting/PropertyValuation/'+tk+'/'+tr;

            window.open(ur, '_blank');

        })



        $("#removeProp").click(function() {

            if (!isCheckedById("selectorChk")) {

                Materialize.toast("Please select properties you would like to remove or send to a friend", 3000, "red");

                return !1

            } else {

                var answer = confirm("Are You Want to delete this property!");

                if (answer) {

                    var val = [];

                    $(':checkbox:checked').each(function(i) {

                        val[i] = $(this).val()

                    });

                    $("#loader").show();

                    $.post('includes/caseHelper.php', {

                        id: val,

                        type: 'delete'

                    }, function(data) {

                        $("#loader").hide();

                        window.location.reload()

                    })

                }

            }

        });

        $("#sendToFriend").click(function() {

            if (!isCheckedById("selectorChk")) {

                Materialize.toast("Please select properties you would like to remove OR send to a friend", 3000, "red");

                return !1

            } else {

                var val = [];

                $(':checkbox:checked').each(function(i) {

                    val[i] = $(this).val()

                });

                window.location = "https://springbokproperties.co.uk/sendToFriend.php?propertyId=" + escape(val)

            }

        });



        //---FOR STEP 2 WF

        $('#no_of_bedsbathsreceptions').bind('keyup','keydown', function(event) {

            var inputLength = event.target.value.length;

            if(inputLength === 1 || inputLength === 3){

                var thisVal = event.target.value;

                thisVal += '/';

                $(event.target).val(thisVal);

            }

        });



        function isCheckedById(id) {

            var checked = $("." + id + ":checked").length;

            if (checked == 0) {

                return !1

            } else {

                return !0

            }

        }

    })

}());

$(function() {

    $('#regform').submit(function() {

        var regEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        var $email = $('#email');

        var $pass = $('#password');

        var $cpass = $('#confpassword');

        if ($('#title').val() == '' || $('#firstname').val == '') {

            Materialize.toast("Title & first name cannot be left blank", 3000, "red");

            $('#title').focus();

            return !1

        } else if ($email.val() == '' || !(regEmail.test($email.val()))) {

            Materialize.toast("Please provide your valid email address.", 3000, "red");

            $email.focus();

            return !1

        } else if (($pass.val() == '' || $cpass.val() == '') || ($pass.val() != $cpass.val())) {

            Materialize.toast("Passwords provided do not match. Please correct ", 3000, "red");

            $pass.val('').focus();

            $cpass.val('');

            return !1

        } else {

            return !0

        }

    })



    var $modal = $("#modal-video");

    $(".play-button").click(function() {

        var id = $(this).data("id");

        $modal.find(".modal-content").empty().append('<div class="video-container"><iframe class="responsive-img" width="560" height="315" src="https://www.youtube.com/embed/' + id + '?showinfo=0&rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe></div>');

        $modal.openModal({

            complete: function() {

                $modal.find(".modal-content").empty()

            }

        });

    });





    $('.WF_FREE_CASH_OFFER').submit(function(){

        var $frm = $(this);

        var regPhone = /^[0-9 \-\+]+$/;

        var regEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        var regPostcode = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;

        var $name = $frm.find('#name');

        var $phone = $frm.find('#phone');

        var $postCode = $frm.find('#postcode');

        var $email = $frm.find('#email');

        var $address = $frm.find('#address');



        if ($postCode.val()=='') {

            Materialize.toast("Please provide valid postcode with space in between", 3000, "red");

            $postCode.focus();

            return !1;

        }

        else if (!$address.val()) {

            Materialize.toast("Address cannot be left blank.", 3000, "red");

            $address.val("").focus();

            return !1

        }

        else if (!$name.val()) {

            Materialize.toast("Name cannot be left blank.", 3000, "red");

            $name.val("").focus();

            return !1

        }else if ($email.length && !(regEmail.test($email.val()))) {

            Materialize.toast("Please provide valid email address", 3000, "red");

            $email.focus();

            return !1

        } else if ($phone && (!$phone.val() || !(regPhone.test($phone.val())))) {

            Materialize.toast("Please provide your valid contact number.", 3000, "red");

            $phone.val("").focus();

            return !1

        } else {

            return !0;

        }



    });



    $('.WF_CASH_FORM').submit(function(){

        var $frm = $(this);

        var regPostcode = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;

        var $postCode = $frm.find('#addressListX');

        var length =  $("#addressListX").val().length;

        if ($postCode.val()=='') {

            Materialize.toast("Please provide valid postcode with space in between", 3000, "red");

            $postCode.focus();

            return !1;

        } else if (length<'10') {

            Materialize.toast("Please locate your address to proceed or manually enter address. Thanks", 3000, "red");

            $postCode.focus();

            return !1;

        } else {

            return !0;

        }

    });



    $('.WF_CASH_FORM2').submit(function(){

        var $frm = $(this);

        var regPostcode = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;

        var $postCode = $frm.find('#addressList2');

        var length =  $("#addressList2").val().length;

        if ($postCode.val()=='') {

            Materialize.toast("Please provide valid postcode with space in between", 3000, "red");

            $postCode.focus();

            return !1;

        } else if (length<'10') {

            Materialize.toast("Please locate your address to proceed or manually enter address. Thanks", 3000, "red");

            $postCode.focus();

            return !1;

        } else {

            return !0;

        }

    });



    $('.WF_CASH_FORM3').submit(function(){

        var $frm = $(this);

        var regPostcode = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;

        var $postCode = $frm.find('#addressList3');

        var length =  $("#addressList3").val().length;

        if ($postCode.val()=='') {

            Materialize.toast("Please provide valid postcode with space in between", 3000, "red");

            $postCode.focus();

            return !1;

        } else if (length<'10') {

            Materialize.toast("Please locate your address to proceed or manually enter address. Thanks", 3000, "red");

            $postCode.focus();

            return !1;

        } else {

            return !0;

        }

    });

    $('.WF_CASH_FORM4').submit(function(){

        var $frm = $(this);

        var regPostcode = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;

        var $postCode = $frm.find('#addressList4');

        var length =  $("#addressList4").val().length;

        if ($postCode.val()=='') {

            Materialize.toast("Please provide valid postcode with space in between", 3000, "red");

            $postCode.focus();

            return !1;

        } else if (length<'10') {

            Materialize.toast("Please locate your address to proceed or manually enter address. Thanks", 3000, "red");

            $postCode.focus();

            return !1;

        } else {

            return !0;

        }

    });





    $("#search").click(function(){

        var postal = $("#postcode").val();

        // alert(postal);

        $('#loader').show();

        $.ajax({

            url: "/includes/caseHelper.php",

            method: "GET",

            data: {

                type: 'fetchRealAddress',

                postcode: postal

            },

            success: function(data) {

                console.log(data);

                if (data) {

                    var opts = $.parseJSON(data);

                    // Use jQuery's each to iterate over the opts value

                    $.each(opts, function(i, d) {

                        // You will need to alter the below to get the right values from your json object.  Guessing that d.id / d.modelName are columns in your carModels data

                        $('#address').append('<option value="' + d + '">' + d + '</option>');

                    });

                    //response(result);

                }

            },

            complete: function(){

                $('#loader').hide();

            }

        });



    });





    $('.counter').countUp();



    $(document).ready(function(){

        $("#rowone").click(function(){

            $("p.rowone").slideToggle();

            $("#rowone").toggleClass("active");

        });

    });



    $(document).ready(function(){

        $("#mobileone").click(function(){

            $("p.mobileone").slideToggle();

            $("#mobileone").toggleClass("active");

        });

    });



    $(document).ready(function(){

        $("#mobiletwo").click(function(){

            $("p.mobiletwo").slideToggle();

            $("#mobiletwo").toggleClass("active");

        });

    });



    $(document).ready(function(){

        $("#mobilethree").click(function(){

            $("p.mobilethree").slideToggle();

            $("#mobilethree").toggleClass("active");

        });

    });



    $(document).ready(function(){

        $("#mobilefour").click(function(){

            $("p.mobilefour").slideToggle();

            $("#mobilefour").toggleClass("active");

        });

    });



    $(document).ready(function(){

        $("#mobilefive").click(function(){

            $("p.mobilefive").slideToggle();

            $("#mobilefive").toggleClass("active");

        });

    });



    $(document).ready(function(){

        $("#mobilesix").click(function(){

            $("p.mobilesix").slideToggle();

            $("#mobilesix").toggleClass("active");

        });

    });



    $(document).ready(function(){

        $("#mobileseven").click(function(){

            $("p.mobileseven").slideToggle();

            $("#mobileseven").toggleClass("active");

        });

    });



    $(document).ready(function(){

        $("#mobileeight").click(function(){

            $("p.mobileeight").slideToggle();

            $("#mobileeight").toggleClass("active");

        });

    });



    $(document).ready(function(){

        $("#mobilenine").click(function(){

            $("p.mobilenine").slideToggle();

            $("#mobilenine").toggleClass("active");

        });

    });



    $(document).ready(function(){

        $("#mobileten").click(function(){

            $("p.mobileten").slideToggle();

            $("#mobileten").toggleClass("active");

        });

    });







    $(document).ready(function(){

        $("#rowtwo").click(function(){

            $("p.rowtwo").slideToggle();

            $("#rowtwo").toggleClass("active");

        });

    });



    $(document).ready(function(){

        $("#rowthree").click(function(){

            $("p.rowthree").slideToggle();

            $("#rowthree").toggleClass("active");

        });

    });



    $(document).ready(function(){

        $("#rowfour").click(function(){

            $("p.rowfour").slideToggle();

            $("#rowfour").toggleClass("active");

        });

    });



    $(document).ready(function(){

        $('ul.tabsbottom').tabs({

            swipeable : true,

            responsiveThreshold : 640

        });

    });



});
