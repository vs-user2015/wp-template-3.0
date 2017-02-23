(function($){
	$(document).ready(function(){
		/* Call the stickyForm() function 
		 * every time window is scrolled.
		 */
		$(window).scroll(function(){
			stickyContactForm();
		});
		
		var header$ = $('#header');
		var headerY = header$.outerHeight(true);
		
		var formContainer$ = $('.form-container');
		
		var slider$;
		var scrollY;
		
		if($('#slider_area').length){
			slider$ = $('#slider_area');
		}else if($('#slider_area_interior').length){
			slider$ = $('#slider_area_interior');
		}
		
		var sliderY = slider$.outerHeight(true);
		
		function stickyContactForm(){
			scrollY = $(window).scrollTop();
			if(scrollY >= (sliderY - headerY)){
				formContainer$.css({
					position: 'fixed',
					top: headerY + 'px'
				});
			}else{
				formContainer$.css({
					position: 'relative',
					top: 0
				})
			}
		}
	});
})(jQuery);