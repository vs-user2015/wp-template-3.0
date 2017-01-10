<header id="header">
	<div id="header_flex" class="container">
		<div id="main_logo"><a href="<?php echo home_url() ; ?>"><img alt="main logo" src="<?php echo get_template_directory_uri() ; ?>/images/main_logo.png" title="main logo"></a></div>
		<div id="contact_info">
			<div id="call_us">
				<span>CAll</span> 123-456-7890
			</div>
			<nav id="top_navigation">
			<?php wp_nav_menu(array("theme_location" => "primary-menu","menu_id" => "primary_menu","container" => false)) ; ?>
			</nav>
		</div>
		<div class="mobile-only">
			<div id="open_menu">
				<img alt="open menu" title="open menu" src="<?php echo get_template_directory_uri() ; ?>/images/open-menu.png">
			</div>
		</div>
	</div>
</header>
<div id="dropdown_contact_button">
	<div class="container">drop down email</div>
</div>