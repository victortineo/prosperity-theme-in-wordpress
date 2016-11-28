<?php
/**
 * The main template file.
 *
 * Template Name: Nossa cultura
 *
 */
get_header();
// Vars
$equipe = get_field('equipe');
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
	<?php if( have_rows('zigzag') ): ?>
	<?php while ( have_rows('zigzag') ) : the_row(); ?>
	<?php 
		$titulo = get_sub_field('titulo');
		$texto = get_sub_field('texto');
		$imagem = get_sub_field('imagem');
	?>
	<!-- Zigzag -->
	<section class="zig zig__n1">
	  <div class="row">
	    <div class="col-xs-12 col-sm-6 zig__content-n1" style="background-image: url('<?php echo $imagem; ?>');">
	    </div>
	    <div class="col-xs-12 col-sm-6 zig__content-n2">
	      <div class="row">
	        <div class="col-xs-12 zig__content__icons " >
	          <span class="icons icon-peoples2"></span>
	        </div>
	        <div class="col-xs-12">
				<div class="page-header">
					<h1><?php echo $titulo; ?></h1>
				</div>
				<?php echo $texto; ?>
				<?php if( have_rows('itens') ): ?>
				<ul>
				<?php while ( have_rows('itens') ) : the_row(); ?>
					<?php 
						$imagem = get_sub_field('imagem');
						$titulo = get_sub_field('titulo');
						$descricao = get_sub_field('descricao');
					?>
					<li>
						<figure class="image">
							<img src="<?php echo $imagem; ?>" alt="<?php echo $titulo; ?>">
						</figure>
						<div class="content">
							<strong><?php echo $titulo; ?></strong><?php echo $descricao; ?>
						</div>
					</li>
				<?php endwhile;?>
				</ul>
				<?php endif; ?>
	        </div>
	      </div>
	    </div>
	  </div>
	</section>
	<?php endwhile; ?>
	<?php endif; ?>

	<?php if ($equipe): ?>
	<section class="mod-pessoas">
		<div class="wrapper">
			<header class="page-header">
				<div class="underline"></div>
				<h1><?php echo $equipe ?></h1>
			</header>
			<?php 
			$args = array(
				'post_type' => 'pessoas',
				'order'		=> 'ASC'
			);
			$inner_query = new WP_Query( $args );
			while ($inner_query->have_posts()): $inner_query->the_post();
			$cargo = get_field('cargo');
			$perfil = get_field('perfil');
			?>
			<figure class="content">
				<img src="<?php echo $perfil; ?>" alt="<?php the_title(); ?>">
				<figcaption class="description">
					<strong class="nome"><?php the_title(); ?></strong>
					<div class="description-content">
						<?php the_content(); ?>
					</div>
				</figcaption>
			</figure>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</section>
	<?php endif ?>
</main><!-- #main -->
<?php endwhile; ?>
<?php
get_footer();
