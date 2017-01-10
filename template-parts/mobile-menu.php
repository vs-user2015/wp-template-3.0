<div id="mobile_navigation">
	<div id="close_mobile_menu">
		<img alt="close mobile menu" src="<?php echo get_template_directory_uri() ; ?>/images/close-mobile-form.png"><span>Close Menu</span>
	</div>
	<div id="slide_out_canvas">
		<div id="mobile_menu">
			<?php wp_nav_menu(array("theme_location" => "mobile-menu","menu_id" => "mobile_top_nav","container" => false)) ; ?>
		</div>
	</div>
</div>

