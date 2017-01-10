(function($){
	$(document).ready(function(){
		var email_dropdown$ = $('#dropdown_contact_button');
		var form_area$ = $('#form_area');
		var sliderArea$ = form_area$.prev();
		var totalHeight = sliderArea$.outerHeight(true);
		var formArea = form_area$.offset();
		
		$(window).scroll(function(){
			dropdownContactForm();
		});
		
		email_dropdown$.click(function(){
			$('html,body').animate({
				scrollTop : form_area$.offset().top - 140 + 'px' 
			});
		});
		
		function dropdownContactForm(){
			var scrollBar = $(window).scrollTop();
			if(scrollBar > totalHeight){
				email_dropdown$.css({
					top : 175 + 'px'
				});
			}else{
				email_dropdown$.css({
					top : 35 + 'px'
				});
			}
		}
		
	});
})(jQuery);