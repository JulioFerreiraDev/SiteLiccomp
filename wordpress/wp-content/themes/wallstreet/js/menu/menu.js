jQuery(document).ready(function() {
	   jQuery('.nav li.dropdown').hover(function() {
		   jQuery(this).addClass('open');
	   }, function() {
		   jQuery(this).removeClass('open');
	   }); 
	   
	});
	
/* ---------------------------------------------- /*
         * Scroll top
/* ---------------------------------------------- */


jQuery(document).ready(function($) {
	
/*-- Page Scroll To Top Section ---------------*/
	jQuery(document).ready(function () {
	
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 100) {
				jQuery('.page_scrollup').fadeIn();
			} else {
				jQuery('.page_scrollup').fadeOut();
			}
		});
	
		jQuery('.page_scrollup').click(function () {
			jQuery("html, body").animate({
				scrollTop: 0
			}, 600);
			return false;
		});
	
	});	

		
});