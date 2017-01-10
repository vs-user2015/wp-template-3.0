<?php get_header(); ?>
<div id="mobile-list-icon" class="mobile-only">
	<?php get_template_part("template-parts/mobile-call-to-action") ; ?>
</div>
<div id="blog_list_area">
	<div class="container">
		<div id="copy">
			<div id="blog_indexes">
				<?php if(have_posts()) : while(have_posts()) : the_post() ;?>
				<div class="blog-index">
					<div class="blog_pic">
						<?php 
							if(has_post_thumbnail()){
								echo get_the_post_thumbnail();
							}else{
						?>
						<img alt="" title="" src="<?php echo get_template_directory_uri() ; ?>
						/images/default-image.jpg">
						<?php } ?>
						<div class="blog-title-date">
							<p class="blog-title"><?php the_title() ; ?></p> 
							<p class="blog-date"><?php echo get_the_date() ; ?></p>
						</div>
					</div>
					<div class="blog-details">
						<p class="blog-excerpt"><?php echo get_the_excerpt() ; ?></p>
					</div>
				</div>
				<?php endwhile;endif; ?>
			</div>
			<div id="blog_pagination">
			<?php echo get_the_posts_pagination(array("screen_reader_text" => "Pages")) ; ?>
			</div>
		</div>
		<?php get_sidebar() ; ?>
	</div>
</div>
<?php get_footer(); ?>
