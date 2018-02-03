var _body = "",
	_html = "",
	_htmlBody = "",
	_window = "",
	postCodeArray = "";


jQuery(document).ready(function($) {


	_body = jQuery('body');
	_html = jQuery('html');
	_htmlBody = jQuery('html, body');
	_window = jQuery(window);					
						
	postcodeAutocomplete();
	initcustomSelectBox();
	
	_window.on('load',function() {
		
		_html.addClass('window-loaded');
		
		//for show step 1 on initial page load
		jQuery('.sp-tabs a[href="#step-1"]').tab('show');
																			 		
    });	
	
	
	//for handle postcode submit and show loading screen
	jQuery('.postcode-form').on('submit',function(){
		
		
		//selected value
		console.log(jQuery('.postcode-autocomplete').val());
		
		//show step loading ( working in background )
		jQuery('.sp-tabs a[href="#working-in-bg"]').tab('show');
		
		//prevent page reload
		return false;
	});
	
	//for address form submit and show loading screen
	jQuery('.address-form').on('submit',function(){
		
		//close modal first
		jQuery('#address-modal').modal('hide');
						
		//show step loading ( working in background )
		jQuery('.sp-tabs a[href="#working-in-bg"]').tab('show');
		
		//for prevent page reload
		return false;
	});
	
	
	//for start loading animation one by one
	jQuery('.sp-tabs a[href="#working-in-bg"]').on('shown.bs.tab', function () {
		
		setTimeout(function(){
			
			jQuery('.loading-text.loading-one').fadeOut(100,function(){				
				jQuery('.loading-text.loading-two').fadeIn(100);
				
				setTimeout(function(){
					
					jQuery('.loading-text.loading-two').fadeOut(100,function(){
						jQuery('.loading-text.loading-three').fadeIn(100);
						setTimeout(function(){
							
							//go to step 2 
							jQuery('.sp-tabs a[href="#step-2"]').tab('show');
							
						},1000);
					});
					
				},1000);
			});	
			
		},1000);		
	});
	
	
	//for open get_valuation form modal in step 2
	jQuery('.sp-tabs a[href="#step-2"]').on('shown.bs.tab', function () {
		jQuery('#step2-modal').modal('show');
	});
	
	
	//for handle slides carousel inside modal in step 2
	jQuery('#step2-modal').on('show.bs.modal',function(){
		jQuery('.slide-carousel-wrapper').appendTo('#step2-modal .slides-container');
	});
	jQuery('#step2-modal').on('hide.bs.modal',function(){
		jQuery('.slide-carousel-wrapper').appendTo('.layout .slides-container'); 
	});
	
	
	//for go to additional step 1 on valution form submit
	jQuery('.valuation-form').on('submit',function(){
		
		//close modal first
		jQuery('#step2-modal').modal('hide');
				
		//then go to additional step 1
		jQuery('.sp-tabs a[href="#additional-step-1"]').tab('show');
		
		//for prevent page reload
		return false;
	});
		
	
	
	//for handle counter plus/minus
	jQuery('.counter-minus').on('click',function(){
		var ele = jQuery(this),
			eValue =  parseInt(ele.parent().children('.number-field').val()),
			counter = ele.parent().children('.number-field');			
		
		if(eValue > 0){
			counter.val(eValue-1);
		}else{
			counter.val(0);
		}
	});	
	jQuery('.counter-plus').on('click',function(){
		var ele = jQuery(this),
			eValue =  parseInt(ele.parent().children('.number-field').val()),
			counter = ele.parent().children('.number-field');
		
		if(isNaN(eValue)){
			counter.val(0);
		}else{
			counter.val(eValue+1);
		}					
	});
	
	//for submit form on addtional info step 1 and go to addtional info step 2
	jQuery('.property-info-form').on('submit',function(){
		
		jQuery('.sp-tabs a[href="#additional-step-2"]').tab('show');
		return false;
		
	});
	
	//for submit form on addtional info step 2 and go to last step 3
	jQuery('.property-type-form').on('submit',function(){
		
		jQuery('.sp-tabs a[href="#step-3"]').tab('show');
		return false;
		
	});
		
	
	//for hide slides carousel on step 3 (last step)
	jQuery('.sp-tabs a[href="#step-3"]').on('show.bs.tab', function () {
		_htmlBody.stop(true,true).animate({scrollTop:0},0);
		jQuery('.slides-container').addClass('hide');
	});
	
	//for start animation on step shown with 500ms delay
	jQuery('.sp-tabs a[href="#step-1"]').on('shown.bs.tab', function () {
		setTimeout(function(){
			jQuery('.tab-step-1').addClass('start-animation');
			jQuery('.layout .slides-container').addClass('start-animation');
		},500);
	});
	
	jQuery('.sp-tabs a[href="#step-2"]').on('shown.bs.tab', function () {
		setTimeout(function(){
			jQuery('.tab-step-2').addClass('start-animation');			
		},500);
	});		
	
	jQuery('.sp-tabs a[href="#step-3"]').on('shown.bs.tab', function () {
		setTimeout(function(){
			jQuery('.tab-step-3').addClass('start-animation');
		},500);
	});
	
	
	
});


function postcodeAutocomplete(){// for initialize postcodes autocomplete
	postCodeArray = [
	"M12 6JH, 3rd Floor, Flight Advice Claims, 4, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, A G S Contracting Ltd, 2, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, A W H Legal, 5, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Accountancy Vision, Arrow Finance Ltd, 2, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Acumension Ltd, 1, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Arrow Finance Ltd, 2, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Block D, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Claims Handling UK, 1, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Connected Claims Limited, Debt Connect UK Ltd, 2, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Connected Claims Ltd, 2, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, D S T Output UK, 1, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Debt Compare, 4, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Debt Connect UK Ltd, 2, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Debt Scheme Direct Ltd, 2, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, East Manchester Housing Market Renewal, 1, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Emerald Ltd, 1, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Enclothe Ltd, 2, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Enterprise Care Group, 1, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, F Squared Ltd, 3, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Farley Dwek LLP, Farley Dwek Solicitors Ltd, 1, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Farley Dwek Solicitors Ltd, 1, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Fine Green Associates, 3, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, First Choice Accountants Ltd, 2, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Flight Advice Claims, 4, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Fulcrum Media Ltd, 1, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, G T M Europe Ltd, 2, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Get Clicked on, 2, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Governor Support Services, 1, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Grey Box Ltd, 1, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Grf, The Apprentice \u0026 Training Partnership, 5, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Hamilton Reece Ltd, 1, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Harmonic Medical Sonography, 1, Universal House, Devonshire Street North, Manchester",
	"M12 6JH, Hyper Trading UK Ltd, 2, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, I Ads Ltd, 1, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Input Media North Ltd, 1, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Jade 2003 Ltd, 1, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Joint Visa Application Centre, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, K X 3 Ltd, 4, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, N B R Claim, 1, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, New Star Co, 4, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Northern Way Properties Ltd, 1, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Scorp Ltd, 2, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, Sleepwell Textile Ltd, 2, Universal Square, Devonshire Street North, Manchester",
	"M12 6JH, T P C Solicitors, 4, Universal Square, Devonshire Street North, Manchester"
	];
	
	if(jQuery(".postcode-autocomplete").length){
		jQuery(".postcode-autocomplete").autocomplete({
			source: postCodeArray,
			appendTo: ".autocomplete-holder",
			select: function (event, ui) {								
				console.log(ui.item.value);	//selected value							
			}
		});
	}
	
}


function initcustomSelectBox(){//for custom selectbox

	var selectBox = jQuery('select.custom-select-box').not('.hasCustomSelect');
	
	if(selectBox.length && jQuery().customSelect){	
		
		selectBox.each(function() {
            var ele = jQuery(this);
			ele.customSelect();
			ele.parent().find('span.customSelect').append('<i></i>');
        });
		
		selectBox.on('change customChange', function(){
			var ele = jQuery(this);
			if(ele.val()){
				ele.next('.customSelect:first').removeClass('placeholder');
			}else{
				ele.next('.customSelect:first').addClass('placeholder');
			}
		}).trigger('customChange');						
		           		
	}
	
}
