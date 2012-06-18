jQuery(document).ready(function()
{	
	
	
	// INITIALIZE DROPDOWN MENU
	jQuery('.dd-menu li:has(ul) > a').addClass('dd-submenu-title').append('<span class="dd-arrow"></span>');	
	jQuery('.dd-menu li').hover(function(){	
			// HOVER IN HANDLER
	
			jQuery('ul:first', this).css({visibility: "visible",display: "none"}).slideDown(250);									
			var path_set = jQuery(this).parents('.dd-menu li').find('a:first');
			jQuery(path_set).addClass('dd-path');						
			jQuery('.dd-menu li a.dd-path').not(path_set).removeClass('dd-path');
			
		},function(){			
			// HOVER OUT HANDLER
		
			jQuery('ul:first', this).css({visibility: "hidden"});			
	});
	jQuery('.dd-menu').hover(function() {
			// HOVER IN HANDLER
			
		}, function() {			
			// HOVER OUT HANDLER
		
			jQuery('a.dd-path', this).removeClass('dd-path');			
	});
	
	
		
	// REPLACE SUBMIT BUTTONS WITH SOMETHING EASIER TO STYLE:)
	jQuery('input[type=submit]').each(function() {		
	
		var val = jQuery(this).val();
		var a = jQuery('<a class="button dark"><span>' + val + '</span></a>');
		var input = jQuery(this);
		
		input.after(a);
		input.hide();
		
		a.click(function() {			
			input.trigger('click');
		});
	});
	
	jQuery('input[type=reset]').each(function() {		
	
		var val = jQuery(this).val();
		var a = jQuery('<a class="button red"><span>' + val + '</span></a>');
		var input = jQuery(this);
		
		input.after(a);
		input.hide();
		
		a.click(function() {			
			input.trigger('click');
		});
	});

	
	// INITIALIZE HOME SLIDER
	$("#big-slider").jCarouselLite({
		btnNext: "#next",
		btnPrev: "#prev",
		easing: "backin",
		visible: 1,
		vertical: true,
		auto: 4000,
		speed: 500
	});
	
	$("#small-slider").jCarouselLite({
		btnNext: "#next",
		btnPrev: "#prev",
		easing: "backin",
		visible: 1,
		auto: 4000,
		speed: 500
	});
	
	$("#menu-slider").jCarouselLite({
		btnNext: "#next-menu-slider",
		btnPrev: "#prev-menu-slider",
		visible: 4,
		auto: 0,
		speed: 500
	});
	
	
	// BOOK A TABLE DATE PICKER
	$(function() {
	$("#datepicker").datepicker({
		showOn: 'button',
		buttonImage: 'js/jquery-ui-1.8.2.datepicker/smoothness/images/calendar.gif',
		buttonImageOnly: true
	});
	
	});
	
	// BOOK A TABLE UNIFORM
	$(function(){
        $("select").uniform();
      });

	
	//fancy box
	$(function() {
		$("a.lightbox").fancybox({
			'titleShow'		: false,
			'transitionIn'	: 'elastic',
			'transitionOut'	: 'elastic'
		});	
	});
	   
});
