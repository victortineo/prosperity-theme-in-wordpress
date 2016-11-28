<?php
/**
 * The main template file.
 *
 * Template Name: Blog
 *
 */
get_header();
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

<main id="content" class="mod-blog blog" tabindex="-1" role="main">
	<?php if (get_the_content()):?>
	<article class="page-content">
		<div class="wrapper">
			<?php the_content(); ?>
		</div>
	</article>
	<?php endif; ?>

<div class="wrapper posts-wrapper">
<?php 
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 6,
	'paged' => $paged
);
$inner_query = new WP_Query( $args );
if ($inner_query->have_posts()):
?>
<section class="posts">
<?php while ($inner_query->have_posts()): $inner_query->the_post(); ?>
	
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
<?php endif; ?>
<?php get_sidebar(); ?>
</div><!-- .wrapper -->

</main><!-- #main -->
<?php endwhile; ?>
<?php
get_footer();
