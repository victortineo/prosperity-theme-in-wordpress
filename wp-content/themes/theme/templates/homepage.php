<?php
/**
 * The main template file.
 *
 * Template Name: Homepage
 *
 */

get_header(); ?>

<?php 
$args = array(
	'post_type' => 'slider',
	'order'		=> 'ASC'
);
$the_query = new WP_Query( $args );
if($the_query->have_posts()):
$slider='';
?>
<div id="slider-site" class="owl-carousel">
	<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
	<div class="item" style="background-image: url('<?php the_post_thumbnail_url('full') ?>');">
		<div class="wrapper">
			<div class="caption">
				<div class="header">
					<div class="underline"></div>
					<h1><?php the_title(); ?> <i class="icon-prosperity-logo"></i></h1>
					<?php the_content(); ?>
				</div>
				<div class="item-footer">
					<a href="#" class="button-1">SAIBA MAIS</a>
					<div class="controls">
						<a href="#" class="button prev"><</a>
						<a href="#" class="button next">></a>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-title">
			<?php
			$slider = get_the_title();
			$args = array(
			'post_type' => 'slider',
			'order'		=> 'ASC'
			);
			$inner_query = new WP_Query( $args );
			$count=0;
			while ($inner_query->have_posts()): $inner_query->the_post();
			$active = get_the_title();
			?>
			<h2 class="
			<?php if ($active == $slider): ?> is-active<?php endif; ?>
			"><a class="data-slide" href="#" data-slide="<?php echo $count; ?>"><?php the_title(); ?></a></h2>
			<?php $count++;endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
	<?php endwhile; ?>
</div>
<div class="mouse"></div>

<?php endif; ?>
</header>

<main id="content" tabindex="-1" role="main">
<?php while ( have_posts() ) : the_post(); ?>

<?php if(get_field('subsections')): ?>
<?php while(has_sub_field('subsections')): ?>
<section class="subsections" style="background-color: <?php the_sub_field('background-color'); ?>; background-image: url('<?php the_sub_field('background'); ?>');color: <?php the_sub_field('color'); ?>;">
<div class="content">
	<?php the_sub_field('content'); ?>
</div>
</section>
<?php endwhile; ?>
<?php endif; ?>

<section class="homepage">
	<div class="content">
		<?php the_content(); ?>
	</div>
</section>
<?php if(get_field('services')): ?>
<section class="services">
	<div class="wrapper">
		<article class="content">
			<div class="underline"></div>
			<?php the_field('contentservices') ?>
		</article>
		<div id="slider-services" class="owl-carousel owl-theme">
		<?php while(has_sub_field('services')): ?>
			<div class="item">
				<figure class="icon">
					<img src="<?php the_sub_field('icon') ?>" alt="<?php the_sub_field('content') ?>">
				</figure>
				<?php the_sub_field('content') ?>
				<a href="<?php the_sub_field('url') ?>" title="<?php the_sub_field('titleurl') ?>"><?php the_sub_field('titleurl') ?> <i class="icon icon-arrow"></i></a>
			</div>
		<?php endwhile; ?>
		</div>
	</div>
</section>
<?php endif; ?>


<?php 
$args = array(
	'post_type' => 'clientes',
	'order'		=> 'ASC'
);
$inner_query = new WP_Query( $args );
if ($inner_query->have_posts()):
?>
<section class="slider-clients-wrapper">
	<div id="slider-clients" class="owl-carousel wrapper">
		<?php while ($inner_query->have_posts()): $inner_query->the_post(); ?>
		<?php $logo = get_field('logo'); ?>
		<figure class="item">
			<img src="<?php echo $logo; ?>" alt="<?php the_title(); ?>">
		</figure>
		<?php endwhile; ?>
	</div>
</section>
<?php endif; ?>

<?php endwhile; ?>

</main><!-- #content -->

<?php
get_footer();
