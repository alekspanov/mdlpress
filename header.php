<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mdlpress
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site mdl-layout mdl-js-layout">

	<header id="masthead" class="site-header mdl-layout__header " role="banner">
		<div class="mdl-layout__header-row">

			<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title mdl-layout-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title mdl-layout-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif; ?>
			</div><!-- .site-branding -->
			<div class="mdl-layout-spacer"></div>

		<!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'mdlpress' ); ?></button>-->
	    <?php
		$args = array(
	        'theme_location' => 'primary',
	        'container'       => 'nav',
	        'items_wrap' => '%3$s',
	        'container_class' => 'mdl-navigation mdl-layout--large-screen-only',
			'walker' => new MDLWP_Nav_Walker()
		);
		if (has_nav_menu('primary')) {
		       wp_nav_menu($args);
		   }
		   ; ?>
		</div><!-- mdl-layout__header-row-->
	</header>
	
	
	<div class="mdl-layout__drawer">
	  <span class="mdl-layout-title"><?php bloginfo( 'name' ); ?></span>
	  <?php
			$args = array(
		        'theme_location' => 'drawer',
		        'container'       => 'nav',
		        'items_wrap' => '%3$s',
		        'container_class' => 'mdl-navigation',
				'walker' => new MDLWP_Nav_Walker()
			);
			if (has_nav_menu('drawer')) {
			       wp_nav_menu($args);
			    }
		?>
	</div>
		

	<main  class="mdl-layout__content">
		<div id="content" class="site-content">
































