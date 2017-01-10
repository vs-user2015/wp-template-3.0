/* Add functionality to the site here */
(function($){
	$(document).ready(function(){
		/* Mobile Navigation */
		var clicked = false;
		var open_menu$ = $("#open_menu img");
		var mobile_navigation$ = $("#mobile_navigation");
		var mobile_menu$ = $("#mobile_menu");
		var close_mobile_menu$ = $("#close_mobile_menu");
		// Slide in the mobile menu
		open_menu$.on("click",function(){
			if(!clicked){
					mobile_navigation$.animate({
						left : 0
					},300,function(){
						clicked = true
					});
			}
		});
		
		// Slide out the mobile menu
		close_mobile_menu$.on("click",function(){
			mobile_submenu_list$.slideUp("fast");
			mobile_navigation$.animate({
				left : 100 + "%"
			},300,function(){
				// Function complete
			});
			clicked = false;
		});
	
	
		/* sub navigation */
		var mobile_submenu$ = $(".mobile-submenu");
		var mobile_submenu_list$ = $("#mobile_top_nav .sub-menu");
		mobile_submenu_list$.hide();
		mobile_submenu$.on("click",function(){
			if($(this).next().is(":hidden")){
				mobile_submenu_list$.slideUp();
				$(this).next().slideDown();
			}else{
				$(this).next().slideUp();
			}
		});
	});
})(jQuery);