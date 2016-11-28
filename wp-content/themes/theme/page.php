<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<figure class="mod-banner-page" style="background-image: url('<?php the_post_thumbnail_url('full') ?>');">
	<img class="sr-only" src="<?php the_post_thumbnail_url('full') ?>" alt="<?php the_title(); ?>">
	<figcaption class="banner-caption">
		<div class="underline"></div>
		<h1><?php the_title(); ?></h1>
	</figcaption>
	<div class="mouse"></div>
</figure>
</header>

<main id="content" class="mod-page" tabindex="-1" role="main">
	<?php if (get_the_content()):?>
	<article class="page-content">
		<div class="wrapper">
			<div class="underline"></div>
			<?php the_content(); ?>
		</div>
	</article>
	<?php endif; ?>
</main><!-- #main -->
<?php endwhile; ?>
<?php
get_footer();
