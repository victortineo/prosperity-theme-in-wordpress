<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="header" role="banner">

	<div class="mod-postit-header">
		<?php $odin_general_opts = get_option( 'odin_general' ); ?>
		<div class="wrapper">
			<div class="content hidden-desktop">
				<i class="icon-trabalhe-conosco" aria-hidden="true"></i> <a href="#">Trabalhe conosco</a>
			</div>
			<div class="content hidden-tablet">
				<i class="icon-open-envelope" aria-hidden="true"></i> <a href="mailto:<?php the_field('e-mail', 'option'); ?>"><?php the_field('e-mail', 'option'); ?></a>
			</div>
			<div class="content hidden-mobile">
				<i class="icon-phone" aria-hidden="true"></i> <a href="tel:<?php echo $odin_general_opts['telefone1']; ?>"><?php echo $odin_general_opts['telefone1']; ?></a> | <a href="tel:<?php echo $odin_general_opts['telefone2']; ?>"><?php echo $odin_general_opts['telefone2']; ?></a>
			</div>
			<?php if(get_field('redes', 'option')): ?>
			<div class="content redes-sociais">
				<?php while(has_sub_field('redes', 'option')): ?>
					<a href="<?php the_sub_field('url'); ?>" title="<?php the_sub_field('nome'); ?>" target="_blank"><?php the_sub_field('icone'); ?></a>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
			<div class="content translate">
				<?php echo qtranxf_generateLanguageSelectCode('image'); ?>
			</div>
		</div>
	</div>
	
	<div class="menu-site">
		<div class="wrapper">
		<figure class="branding">
			<img src="<?php the_field('logo', 'option') ?>" alt="">
		</figure>
		<nav class="menu" role="navigation">
			<div class="menu-collapse">
				<button class="hamburger hamburger--elastic" type="button">
				  <span class="hamburger-box">
				    <span class="hamburger-inner"></span>
				  </span>
				</button>
			</div>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main-menu',
						'depth'          => 2,
						'container'      => false,
						'menu_class'     => 'menu-list',
						'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
						'walker'         => new Odin_Bootstrap_Nav_Walker()
					)
				);
			?>
			
		</nav><!-- .menu-collapse -->
		</div><!-- .wrapper -->
	</div><!-- .menu-site -->

<aside id="search" class="mod-search">
<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
<img src="<?php the_field('logo', 'option') ?>" alt="">
	<label for="menu-search" class="sr-only">
		<?php _e( 'Search:', 'odin' ); ?>
	</label>
	<div class="form-group">
		<input type="search" placeholder="Pesquise em nosso site" value="<?php echo get_search_query(); ?>" class="form-control" name="s" id="menu-search" />
	</div>
	<button id="submit-search" type="submit" class="submit"><?php _e( 'Search', 'odin' ); ?></button>
</form>
<a href="#" id="search-toggle" class="toggle">X</a>
</aside>

</div><!-- #main-navigation-->

