<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
<figure class="mod-banner-page mod-banner-page-post" style="background-image: url('<?php the_post_thumbnail_url('full') ?>');">
	<img class="sr-only" src="<?php the_post_thumbnail_url('full') ?>" alt="<?php the_title(); ?>">
	<figcaption class="banner-caption">
		<div class="underline"></div>
		<h1><?php the_title(); ?></h1>
	</figcaption>
	<div class="mouse"></div>
</figure>
</header>

<main id="post-content" class="mod-post" role="main">
<div class="wrapper">
	<div class="post-main">
	<?php
		// Start the Loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile;
	?>
	</div><!-- .post-main -->
	<?php get_sidebar(); ?>
</div>
</main><!-- #main -->

<?php get_footer(); ?>
