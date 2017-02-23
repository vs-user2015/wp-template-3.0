<div id="sidebar">
	<div id="subscription_form">
		<img alt="piggy bank" title="piggy bank" src="<?php echo get_template_directory_uri() ; ?>/images/piggy-bank.png">
		<p class="title">Sign up and save!</p>
		<p class="sub-title">Great offers and helpful tips straight to your inbox.</p>
		<!-- NEWSLETTER FORM -->
		<?php get_template_part("template-parts/form-newsletter") ; ?> 
	</div>
	<div id="ontime_protection_plan">
		<img alt="ontime-protection-plan" title="ontime-protection-plan" src="<?php echo get_template_directory_uri() ; ?>/images/ontime-protection-plan.png">
		<p class="title">On Time Protection Plan</p>
		<p class="sub-title">Get the VIP treatment you deserve with our exclusive maintenance plan.</p>
		<a href="">LEARN MORE</a>
	</div>
	<div id="our_achievements">
		<p class="title">Our Achievements</p>
		<img alt="" title="" src="<?php echo get_template_directory_uri() ; ?>/images/placeholder-safety.png">
	</div>
<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
</div>
