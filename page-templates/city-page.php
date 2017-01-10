<?php
/**
 * Template Name: City Page
 */

get_header("city"); ?> 
<div id="mobile-list-icon" class="mobile-only">
	<?php get_template_part("template-parts/mobile-call-to-action") ; ?>
</div>
<div id="interior_page_area">
	<div class="container">
		<div id="copy">
			<?php if(have_posts()) : while(have_posts()) : the_post() ;?>
			<?php the_content() ; ?>
			<?php endwhile;endif; ?>
		</div>
		<?php get_sidebar() ; ?>
	</div>
</div>
<?php get_footer(); ?>
