<?php
/**
 * The main template file.
 *
 * Template Name: Quem atendemos
 *
 */
get_header();
while ( have_posts() ) : the_post();
// Vars
$cases = get_field('cases');
?>
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

<!-- <?php if( have_rows('depoimentos') ): ?>
	
	<section class="mod-cases-slider">
		<div id="quem-atendemos-owl" class="owl-carousel">
			<?php while ( have_rows('depoimentos') ) : the_row(); ?>
			<div class="item">
				<div class="background" style="background-image: url('<?php the_sub_field('imagem'); ?>');">
					
				</div>
				<div class="content">
					<?php the_sub_field('conteudo'); ?>
					<span class="autor">
						<?php the_sub_field('nome'); ?>
					</span>
					<span class="cargo">
						<?php the_sub_field('cargo'); ?>
					</span>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
		<ul id='carousel-custom-dots' class='owl-dots'>
			<li class='owl-dot'></li>
			<li class='owl-dot'></li>
		</ul>
	</section>
<?php endif; ?> -->

<?php if ($cases): ?>
	<!-- Sistema de abas -->
	<section class="mod-abas quem-atendemos">
		<div class="page-header">
			<div class="underline"></div>
		 	<h1><?php echo $cases; ?></h1>
		</div>
		<!-- Nav tabs -->
		<div class="wrapper-nav-tabs">
		<ul class="nav nav-tabs" role="tablist">
		<?php 
			$args = array(
				'post_type' => 'depoimentos',
				'posts_per_page' => 8,
				'order'		=> 'ASC'
			);
			$count=0;
			$inner_query = new WP_Query( $args );
			while ($inner_query->have_posts()): $inner_query->the_post();
			$count++;
			?>
			<li role="presentation" <?php if($count == 1): ?> class="active" <?php endif; ?>>
				<a href="#depoimento<?php echo $count; ?>" aria-controls="depoimento<?php echo $count; ?>" role="tab" data-toggle="tab">
					<div class="content">
						<strong class="title quem-atendemos"><?php the_title(); ?></strong>
					</div>
				</a>
			</li>
		<?php endwhile; ?>
		</ul> <!-- /.nav-tabs -->	
		</div>

		<div class="wrapper-abas">
			<!-- Tab panes -->
			<div class="tab-content">
				<?php 
				$args = array(
					'post_type' => 'depoimentos',
					'posts_per_page' => 8,
					'order'		=> 'ASC'
				);
				
				$inner_query = new WP_Query( $args );
				$count=0;
				while ($inner_query->have_posts()): $inner_query->the_post();
				$count++;
				?>
				<article role="tabpanel" class="tab-pane fade <?php if($count == 1): ?>in active<?php endif; ?>" id="depoimento<?php echo $count; ?>">
					<div class="page-header">
						<h1><?php the_title(); ?></h1>
					</div>
					<?php the_content(); ?>
				</article>
				<?php endwhile; ?>
			</div><!-- /.tab-content -->
		</div><!-- wrapper-abas -->
	</section>
	<!-- ./ Sistema de abas -->
<?php endif ?>

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

</main><!-- #main -->
<?php endwhile; ?>
<?php
get_footer();
