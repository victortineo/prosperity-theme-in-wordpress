<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
<figure class="mod-banner-page mod-banner-page-post" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/trabalhe-conosco.jpg' ?>');">
	<img class="sr-only" src="<?php echo get_template_directory_uri() . '/assets/images/trabalhe-conosco.jpg' ?>" alt="Resultados">
	<figcaption class="banner-caption">
		<div class="underline"></div>
		<h1><?php printf( __( 'Search Results for: %s', 'odin' ), get_search_query() ); ?></h1>
	</figcaption>
	<div class="mouse"></div>
</figure>	
</header>

<main id="content" class="mod-blog blog" tabindex="-1" role="main">
<div class="wrapper posts-wrapper">
<?php if ( have_posts() ): ?>
<section class="posts">
<?php while ( have_posts() ) : the_post(); ?>
	
	<article class="posts-preview">
		<a href="<?php the_permalink(); ?>">
		<figure class="posts-preview-thumbnail" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');">
			<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" class="sr-only">
		</figure>
		<div class="posts-preview-content">
			<h1><?php the_title(); ?></h1>
			<?php the_excerpt(); ?>
		</div>
		</a>
		<div class="posts-preview-infos">
			<?php $comments = '<!--:en-->comments<!--:--><!--:pb-->comentários<!--:-->'; ?>
			<?php $share = '<!--:en-->share:<!--:--><!--:pb-->compartilhe:<!--:-->'; ?>
			<p class="posts-preview-infos-time"><?php the_time('F j, Y'); ?> - <?php comments_number( '0 ', '1 ', '% ' ); ?><?php _e(do_shortcode($comments)); ?></p>
			<p class="posts-preview-infos-text"><?php _e(do_shortcode($share)); ?></p>
			<?php 
				$share = '[ssba url='. get_permalink() . ' title="Share"]';
				echo do_shortcode($share);
			?>
		</div>
	</article>
<?php endwhile; wp_reset_query(); echo odin_pagination( 2, 1, false, $inner_query ); ?>
</section>
<?php else: ?>
<section class="posts">
	<header class="page-header">
		<h2>Pesquisa sem resultados.</h2>
	</header>
</section>
<?php endif; ?>
<?php get_sidebar(); ?>
</div><!-- .wrapper -->
</main><!-- #main -->


<?php
get_footer(); ?>
