/* Home page carousel */
(function($){
	$(document).ready(function(){
		var w,mHeight,tests = $("#carousel");
		w = tests.outerWidth();
		/* mHeight = 0; */
		tests.find(".carousel-wrapper").each(function(index){
			$("#banner_indicators").find(".indicator:eq(0)").addClass("active"); // Make the first pager active initially
			if(index == 0){
				$(this).addClass("active"); // Make the first slide active initially
			}
			
			if($(this).height() > mHeight){ // Just finding the max hieght of the slides
				mHeight = $(this).height();
			} 
			
			var l = index * w; // Find the left position of each slide
			$(this).css("left",l);
			 /* tests.find(".carousel-container").height(mHeight);// Make the height of the slider equal to max height of the slides */
		});
		
		$(".indicator").on("click",function(e){ // Clicking action for pagination
			e.preventDefault();
			next = $(this).index(".indicator");
			clearInterval(t_int);// Clicking stops the autoplay
			moveIt(next);
		});
		
		function moveIt(next){ // The main sliding function
			var c = parseInt($(".carousel-wrapper.active").removeClass("active").css("left")); // Current position
			var n = parseInt($(".carousel-wrapper").eq(next).addClass("active").css("left")); // New Position
			$(".carousel-wrapper").each(function(){ // shift each slide
				if(n > c){
					$(this).animate({"left" : "-=" + (n - c) + "px"});
				}else{
					$(this).animate({"left" : "+=" + Math.abs(n - c) + "px"});
				}
			});
			$(".indicator.active").removeClass("active");
			$("#banner_indicators").find(".indicator").eq(next).addClass("active");
		}
		
		var t_int = setInterval(function(){ // For autoplay
			var i = $(".carousel-wrapper.active").index(".carousel-wrapper");
			if(i == $(".carousel-wrapper").length - 1){
				next = 0;
			}else{
				next = i + 1;  
			}
			
			moveIt(next); 
		},100000);
	});
})(jQuery);