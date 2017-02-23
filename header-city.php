<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="cache-control" content="max-age=0">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT">
	<meta http-equiv="pragma" content="no-cache">
	<meta name="robots" content="index, follow">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo home_url() ; ?>/favicon.png?v=1" type="image/x-icon" />
	
	<!-- Icons for iphone,ipad & android -->
	<link href="<?php echo home_url() ; ?>/images/apple-touch-icon.png" rel="apple-touch-icon" />
	<link href="<?php echo home_url() ; ?>/images/apple-touch-icon-76.png" rel="apple-touch-icon" sizes="76x76" />
	<link href="<?php echo home_url() ; ?>/images/apple-touch-icon-120.png" rel="apple-touch-icon" sizes="120x120" />
	<link href="<?php echo home_url() ; ?>/images/apple-touch-icon-152.png" rel="apple-touch-icon" sizes="152x152" />
	<link href="<?php echo home_url() ; ?>/images/apple-touch-icon-180.png" rel="apple-touch-icon" sizes="180x180" />
	<link href="<?php echo home_url() ; ?>/images/icon-hires.png" rel="icon" sizes="192x192" />
	<link href="<?php echo home_url() ; ?>/images/icon-normal.png" rel="icon" sizes="128x128" />
	
	<title>WP Template 3.0 <?php wp_title( "|", true); ?></title>
	
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- MOBILE MENU -->
	<?php get_template_part("template-parts/mobile-menu"); ?>
	
	<!-- MOBILE FORM -->
	<div id="mobile_contact_form">
		<div id="close_contact_form">
			<img alt="close" title="close" src="<?php echo get_template_directory_uri() ; ?>/images/close-mobile-form.png"><span>Close</span>
		</div>
		<!-- CONTACT FORM -->
		<?php get_template_part("template-parts/form-contact") ; ?>
	</div> 
	
	<!-- DESKTOP LAYOUT -->
	<div id="main_wrapper">
		<?php 
			/* The top header */
			get_template_part("template-parts/top-header");
		
			/* City page background */
			get_template_part("template-parts/city-page-banner");
		?>
		
		<!-- CONTACT FORM -->
		<?php get_template_part("template-parts/form-contact") ; ?>
		