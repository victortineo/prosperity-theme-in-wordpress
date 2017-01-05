<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<?php 
$args = array(
	'post_type' => 'slider',
	'order'		=> 'ASC'
);
$the_query = new WP_Query( $args );
if($the_query->have_posts()):
?>
<div id="slider-site" class="owl-carousel">
	<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
	<div class="item" style="background-image: url('<?php the_post_thumbnail_url('full') ?>');">
		<div class="wrapper">
			<div class="caption">
				<div class="header">
					<div class="underline"></div>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
				<div class="footer">
					<a href="#" class="button-1">SAIBA MAIS eu aqui</a>
					<div class="controls">
						<a href="#" class="button prev"><</a>
						<a href="#" class="button next">></a>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
</div>
<?php endif; ?>

</header>

<main id="content" tabindex="-1" role="main">
p
</main><!-- #content -->

<?php
get_footer();
