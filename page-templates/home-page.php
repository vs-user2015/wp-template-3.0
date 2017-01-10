<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>
<div id="services_area">
	<div class="container">
		<div id="service_body">
			<div id="cooling_services" class="service-item"><a href="#"><img alt="cooling services" src="<?php echo get_template_directory_uri() ; ?>/images/cooling_service.png" title="cooling services"></a></div>
			<div id="heating_services" class="service-item"><a href="#"><img alt="heating services" src="<?php echo get_template_directory_uri() ; ?>/images/heating_service.png" title="heating services"></a></div>
			<div id="thermostats_services" class="service-item"><a href="#"><img alt="thermostats services" src="<?php echo get_template_directory_uri() ; ?>/images/thermostat_service.png" title="thermostats services"></a></div>
			<div id="solar_services" class="service-item"><a href="#"><img alt="solar services" src="<?php echo get_template_directory_uri() ; ?>/images/solar_service.png" title="solar services"></a></div>
		</div>
		<p id="service_title">Home Comfort</p>
		<p id="service_text">Specializing in residential heating and air conditioning installation, we’re committed to keeping our customers comfortable.</p>
		<a href="#" id="services_link">SERVICES</a>
	</div>
</div>
<div id="mobile-list-icon" class="mobile-only">
	<div class="container">
		<div id="large_link">
			<div class="mobile-link"><a href="" target="_blank"><img alt="mobile cooling" src="<?php echo get_template_directory_uri() ; ?>/images/mobile-cooling.png"><span>Cooling</span></a></div>
			<div class="mobile-link"><a href="" target="_blank"><img alt="mobile cooling" src="<?php echo get_template_directory_uri() ; ?>/images/mobile-heating.png"><span>Heating</span></a></div>
			<div class="mobile-link"><a href="" target="_blank"><img alt="mobile cooling" src="<?php echo get_template_directory_uri() ; ?>/images/mobile-thermostats.png"><span>Thermostats</span></a></div>
			<div class="mobile-link"><a href="" target="_blank"><img alt="mobile cooling" src="<?php echo get_template_directory_uri() ; ?>/images/mobile-solar.png"><span>Solar</span></a></div>
		</div>
	</div>
	<p class="desktop-only">Sign up to receive even more great offers!</p>
	<!-- NEWSLETTER FORM -->
	<?php get_template_part("template-parts/mobile-call-to-action") ; ?>
</div>
<div id="offers_area">
	<div class="container">
		<div id="specials">
			<div id="form_subscription_wrapper">
				<img alt="coupon" id="coupon" src="<?php echo get_template_directory_uri() ; ?>/images/coupon.png" title="coupon">
				<p>Sign up to receive even more great offers!</p>
				<?php get_template_part("template-parts/form-newsletter") ; ?>
			</div>
		</div>
		<div id="service_24_7">
			<p class="title">24/7 SERVICE</p>
			<p class="text">Whether it’s 3pm or 3am, our live call center is ready to dispatch a clean  and professional technician at your convenience.</p>
			<a href="#" id="learn_more">LEARN MORE</a>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div id="about_us_area">
	<div class="container">     
		<div id="about_us_text">
			<p class="title">ABOUT US</p>
			<p class="text">On Time Home Services Heating and Air Conditioning is a company built by customer loyalty.  In return, we are 100% committed to the needs of our great customers in Temecula and the surrounding areas.</p>

			<p class="text">Every home offers a different project and requires different solutions. On Time technicians are innovative problem-solvers with a vast knowledge of most all HVAC styles and brands. On Time’s licensed and trained professionals can offer different solutions for every budget and need.</p>
		</div>
		<div id="regional_map">
			<div id="service_area">
				<p class="title">HAPPILY SERVING</p>
				<div id="location_list">
					<ul>
						<li><a href="<?php echo home_url() ; ?>/hemet/"><img alt="location pin" title="location pin" src="<?php echo get_template_directory_uri() ; ?>/images/location_pin.png"><span>Hemet</span></a></li>
						<li><img alt="location pin" title="location pin" src="<?php echo get_template_directory_uri() ; ?>/images/location_pin.png"><span>Irvine</span></li>
						<li><img alt="location pin" title="location pin" src="<?php echo get_template_directory_uri() ; ?>/images/location_pin.png"><span>Laguna Beach</span></li>
						<li><img alt="location pin" title="location pin" src="<?php echo get_template_directory_uri() ; ?>/images/location_pin.png"><span>Lake Elsinore</span></li>
						<li><img alt="location pin" title="location pin" src="<?php echo get_template_directory_uri() ; ?>/images/location_pin.png"><span>Menifee</span></li>
					</ul>
					<ul>
						<li><img alt="location pin" title="location pin" src="<?php echo get_template_directory_uri() ; ?>/images/location_pin.png"><span>Murrieta</span></li>
						<li><img alt="location pin" title="location pin" src="<?php echo get_template_directory_uri() ; ?>/images/location_pin.png"><span>Newport Coast</span></li>
						<li><img alt="location pin" title="location pin" src="<?php echo get_template_directory_uri() ; ?>/images/location_pin.png"><span>Newport Beach</span></li>
						<li><img alt="location pin" title="location pin" src="<?php echo get_template_directory_uri() ; ?>/images/location_pin.png"><span>Temecula</span></li>
						<li><img alt="location pin" title="location pin" src="<?php echo get_template_directory_uri() ; ?>/images/location_pin.png"><span>Winchester</span></li>
					</ul>
				</div>
			</div>
			<div id="state_image">
				<div id="state_image_box">
					<img alt="california" title="california" src="<?php echo get_template_directory_uri() ; ?>/images/california_state.png">
				</div>
			</div>
		</div>
	</div>
</div>
<div id="testimonials_area">
	<div class="container">
		<p id="review_title">We're really good, ask out customers!</p>
		<div id="reviews_box">
			<div class="review">
				<img alt="review stars" id="review_stars" title="review stars" src="<?php echo get_template_directory_uri() ; ?>/images/review_stars.png">
				<p class="quotes">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam varius elementum metus. In accumsan orci a tristique auctor. Duis eget maximus erat.</p>
				<p class="reviewer">-John Smith</p>
			</div>
			<div class="review">
				<img alt="review stars" id="review_stars" title="review stars" src="<?php echo get_template_directory_uri() ; ?>/images/review_stars.png">
				<p class="quotes">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam varius elementum metus. In accumsan orci a tristique auctor. Duis eget maximus erat.</p>
				<p class="reviewer">-John Smith</p>
			</div>
			<div class="review">
				<img alt="review stars" id="review_stars" title="review stars" src="<?php echo get_template_directory_uri() ; ?>/images/review_stars.png">
				<p class="quotes">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam varius elementum metus. In accumsan orci a tristique auctor. Duis eget maximus erat.</p>
				<p class="reviewer">-John Smith</p>
			</div>
		</div>
	</div>
</div>
<?php get_footer();
