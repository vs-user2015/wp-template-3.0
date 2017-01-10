/* Open and close contact mobile form */
(function($){
	/* 
	 * Open the mobile contact form.
	 */ 
	 
	// Create a variable to select the #mobile_contact_form
	var mobile_contact_form$ = $("#mobile_contact_form");
	
	var body$ = $("body");
	
	$(document).ready(function(){
		// Click on the #pop_up_menu 
		$("#pop_up_menu").on("click",function(event){
			// Keep the <a> tag from doing it's default action of going to
			// it's destination.  It just needs to be clicked.
			event.preventDefault();
			
			// The #mobile_contact_form is initially display none and z-index of 0.
			// It's property of display should be block and z-Index(zIndex) 
			// should now be at the top most level.
			mobile_contact_form$.css( { zIndex: 99 ,display: "block" } );
			
			// Keep body of layout from scrolling
			body$.css( { overflow : "hidden" } );
			
			// The opacity will transition from 0 (transparent) to 1 (opaque).
			mobile_contact_form$.animate( { 
					opacity : 1 
				} ,300,function(){
				// Animation complete
			}); 
		});
	});
	
	/* 
	 * Close the mobile contact form.
	 */ 
	$(document).ready(function(){
		// Click on the #close_contact_form 
		$("#close_contact_form").on("click",function(){
			
			// Change the opacity back to 0 and then change 
			// to zIndex to 0 and display back to none to 
			// complete the animate function out.
			mobile_contact_form$.animate({
				opacity: 0
			},300,function(){
				mobile_contact_form$.css( { zIndex: 0 ,display: "none" } );
			});
			
			// Keep body of layout from scrolling
			body$.css( { overflow : "scroll" } );
		});
	});
})(jQuery);