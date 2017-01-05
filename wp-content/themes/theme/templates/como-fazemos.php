<?php
/**
 * The main template file.
 *
 * Template Name: Como fazemos
 *
 */
get_header();
// Vars
?>

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

<main id="content" class="mod-page nossa-cultura" tabindex="-1" role="main">
	<?php if (get_the_content()):?>
	<article class="page-content">
		<div class="wrapper">
			<div class="underline"></div>
			<?php the_content(); ?>
		</div>
	</article>
	<?php endif; ?>
	<?php if(get_field('subsections')): ?>
		<?php while(has_sub_field('subsections')): ?>
		<section class="subsections" style="background-color: <?php the_sub_field('background-color'); ?>; background-image: url('<?php the_sub_field('background'); ?>');color: <?php the_sub_field('color'); ?>;">
		<div class="content">
			<?php the_sub_field('content'); ?>
		</div>
		</section>
		
<?php endwhile; ?>
<?php endif; ?>
</main><!-- #main -->
<?php endwhile; ?>
<?php
get_footer();
