(function($) {
    $.fn.countdown = function(options, callback) {

      //custom 'this' selector
      var thisEl = $(this);

      //array of custom settings
      var settings = { 
        'date': null,
        'format': null
      };

      //append the settings array to options
      if(options) {
        $.extend(settings, options);
      }

      //main countdown function
      var countdown_proc = function () {

        var eventDate = Date.parse(settings['date']) / 1000;
        var currentDate = Math.floor($.now() / 1000);

        if(eventDate <= currentDate) {
          callback.call(this);
          clearInterval(interval);
        };

        var seconds = eventDate - currentDate;

        var days = Math.floor(seconds / (60 * 60 * 24)); //calculate the number of days
        seconds -= days * 60 * 60 * 24; //update the seconds variable with no. of days removed

        var hours = Math.floor(seconds / (60 * 60));
        seconds -= hours * 60 * 60; //update the seconds variable with no. of hours removed

        var minutes = Math.floor(seconds / 60);
        seconds -= minutes * 60; //update the seconds variable with no. of minutes removed

        //conditional Ss
        if (days == 1) { thisEl.find(".timeRefDays").text("Day"); } else { thisEl.find(".timeRefDays").text("Days"); }
        if (hours == 1) { thisEl.find(".timeRefHours").text("Hour"); } else { thisEl.find(".timeRefHours").text("Hours"); }
        if (minutes == 1) { thisEl.find(".timeRefMinutes").text("Minute"); } else { thisEl.find(".timeRefMinutes").text("Minutes"); }
        if (seconds == 1) { thisEl.find(".timeRefSeconds").text("Second"); } else { thisEl.find(".timeRefSeconds").text("Seconds"); }

        //logic for the two_digits ON setting
        if(settings['format'] == "on") {
          days = (String(days).length >= 2) ? days : "0" + days;
          hours = (String(hours).length >= 2) ? hours : "0" + hours;
          minutes = (String(minutes).length >= 2) ? minutes : "0" + minutes;
          seconds = (String(seconds).length >= 2) ? seconds : "0" + seconds;
        }

        //update the countdown's html values.
        if(!isNaN(eventDate)) {
          thisEl.find(".days").text(days);
          thisEl.find(".hours").text(hours);
          thisEl.find(".minutes").text(minutes);
          thisEl.find(".seconds").text(seconds);
        } else { 
          alert("Invalid date. Here's an example: 12 Tuesday 2012 17:30:00");
          clearInterval(interval); 
        }
      }

      //run the function
      countdown_proc();

      //loop the function
      interval = setInterval(countdown_proc, 1000);

    }
	
	
	$( ".postcode" ).on('keyup blur',function(){
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
                $('.postcode').val(postCode);
            }else {
                /*Materialize.toast("Invalid postcode, please correct", 3000, "red");
                $('#postcode').val("").focus();
                return !1*/
				//alert('I');
				//console.log(postCode+": Invalid");
            };
        });

	//---VALIDATION FOR DD - WANT TO SELL
    $('.wbn-form').submit(function(){
        var $frm = $(this);
        var regPhone = /^[0-9 \-\+]+$/;
        var regEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var regPostcode = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;
        var $address = $frm.find('#address');
        var $name = $frm.find('#name');
        var $phone = $frm.find('#phone');
        var $postCode = $frm.find('#postcode');
        var $email = $frm.find('#email');
        /*if (!$address.val()) {
            alert("Address cannot be left blank.");
            $address.val("").focus();
            return !1
        } else*/ if ($postCode.val()=='') {
            alert("Please provide valid postcode with space in between");
            $postCode.focus();
            return !1
        } else if (!$name.val()) {
            alert("Name cannot be left blank.");
            $name.val("").focus();
            return !1
        } else if (!$phone.val()) { // || !(regPhone.test($phone.val()))
            alert("Please enter a valid phone number.");
            $phone.val("").focus();
            return !1
        } else if ($email.length && !(regEmail.test($email.val()))) {
             alert("Please provide valid email address");
            $email.focus();
            return !1
        }  else {
            //$(".elementor-button").hide();
            document.getElementById("myNav").style.width = "100%";
			$("#submit").attr("disabled", true);
            $("#submit").attr("value", "Submitting, please do not refresh.."); 
            /*$(".page-template .elementor-button span > span.elementor-button-text").html("Submitting, please do not refresh.."); 
            
			$(".page-template #innerpageuni").css("display", "block !important;");
			$("#innerpageuni").css("display", "block !important;");
			$(".page-template #innerpageuni").show();
			$(".page-template #innerpageuni").attr("disabled", true);
			$(".page-template #innerpageuni").attr("value", "Submitting, please do not refresh.."); 
			$(".page-template #innerpageuni span > span.elementor-button-text").html("Submitting, please do not refresh.."); 
			$("#myNav").css("width","100%");
			
			return !0; */           
			
        }
        
    });
	/*
	$(".wbn-form").submit(function(){
			document.getElementById("myNav").style.width = "100%";
	});*/
	
	
	var urlParams = new URLSearchParams(window.location.search);
	if(urlParams.get("landingpage") == "bing"){ 
		$("#_source").val("Webuynow Affiliate - Bing Paid");
		
	}
	if(urlParams.get("landingpage") == "gremar"){ 
		$("#_source").val("Webuynow Affiliate - Remarketing");
		
	}
	if(urlParams.get("searchterm") == "fbre"){
		$("#_source").val("Webuynow - Facebook Retargetting");
	}else if(urlParams.get("searchterm") != ""){
		$("#searchterm").val(urlParams.get("searchterm"));
	}
	
	if(urlParams.get("source") == "zoopla"){
		$("#_source").val("Webuynow - Display Zoopla");
	}else if(urlParams.get("source") == "discovery"){
		$("#_source").val("Google Discovery Ads");
	}else {            
		var source = urlParams.get("source") || '';
		source = source.toLowerCase().replace(/\b[a-z]/g, function(letter) {
			return letter.toUpperCase();
		});
		$("#_source").val("Webuynow Affiliate - Auto Book "+source);
	}
	
}) (jQuery);


//Call countdown plugin
$(".countdown").countdown({
  date: "27 july 2020", // add the countdown's end date (i.e. 3 november 2012 12:00:00)
  format: "on" // on (03:07:52) | off (3:7:52) - two_digits set to ON maintains layout consistency
},

function() {

  // the code here will run when the countdown ends
  //alert("done!")

});
