			<footer id="footer">
				<nav id="footer_navigation">
					<div class="container">
						<div id="bottom_navigation">
							<div class="bottom_menu_selection">
								<p class="bottom-title">NAVIGATE</p>
								<?php wp_nav_menu(array("theme_location" => "footer-branding-menu","menu_class" => "footer-menu","container" => false)) ; ?>
							</div>
							<div class="bottom_menu_selection">
								<p class="bottom-title">OUR SERVICES</p>
								<?php wp_nav_menu(array("theme_location" => "footer-service1-menu","menu_class" => "footer-menu","container" => false)) ; ?>
							</div>
							<div id="bottom_contact" class="bottom_menu_selection">
								<p class="bottom-title">CONTACT</p>
								<div id="footer_address">
									<p>Ontime Home Services</p>
									<p>43397 Business Park Dr. D5</p>
									<p>Temecula, CA 92590</p>
									<p>(951) 331-3838</p>
								</div>
								<div id="credentials">
									<p class="licenses">License #955722</p>
								</div>
							</div>
							<div id="sml" class="bottom_menu_selection">
								<p class="bottom-title">CONNECT</p>
								<div id="social_media_links">
									<a href="" target="_blank"><img alt="twitter" title="twitter" src="<?php echo get_template_directory_uri() ; ?>/images/twitter.png"></a>
									<a href="" target="_blank"><img alt="facebook" title="facebook" src="<?php echo get_template_directory_uri() ; ?>/images/fb.png"></a>
									<a href="" target="_blank"><img alt="gplus" title="gplus" src="<?php echo get_template_directory_uri() ; ?>/images/gplus.png"></a>
								</div>
							</div>
						</div>
					</div>
				</nav>
				<div id="badges_area">
					<div class="container">
						<div id="affiliates_flex">
							<div><img alt="excellent electrician" title="excellent electrician" src="<?php echo get_template_directory_uri() ; ?>/images/excellent_electrician.png"></div>						
							<div><img alt="safety" title="safety" src="<?php echo get_template_directory_uri() ; ?>/images/safety.png"></div>
							<div><img alt="angies list" title="angies list" src="<?php echo get_template_directory_uri() ; ?>/images/angies_list.png"></div>
							<div><img alt="hero" title="hero" src="<?php echo get_template_directory_uri() ; ?>/images/hero.png"></div>						
							<div><img alt="bbb" title="bbb" src="<?php echo get_template_directory_uri() ; ?>/images/bbb.png"></div>						
							<div><img alt="super service award" title="super service award" src="<?php echo get_template_directory_uri() ; ?>/images/super_service_award.png"></div>				
						</div>
						<p id="copyrights">&copy; <?php echo date("Y") ; ?> All Rights Reserved. Ontime Home Services. Marketing for home services by Vitalstorm.</div>
					</div>
				</div>
			</footer>
		</div>

	<?php wp_footer(); ?>
	</body>
</html>
