<?php
/**
 * The main template file.
 *
 * Template Name: O que fazemos
 *
 */
get_header();
// Vars
$ebook = get_field('ebook');
$servicos = get_field('servicos');
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

<main id="content" class="mod-page o-que-fazemos" tabindex="-1" role="main">
	<?php if (get_the_content()):?>
	<article class="page-content">
		<div class="wrapper">
			<div class="underline"></div>
			<?php the_content(); ?>
		</div>
	</article>
	<?php endif; ?>


<?php if ($servicos): ?>
<!-- Sistema de abas -->
<section class="mod-abas">
	<div class="page-header">
		<div class="underline"></div>
	 	<h1><?php echo $servicos; ?></h1>
	</div>
	<!-- Nav tabs -->
	<div class="wrapper-nav-tabs">
	<ul class="nav nav-tabs" role="tablist">
	<?php 
		$args = array(
			'post_type' => 'servicos',
			'posts_per_page' => 8,
			'order'		=> 'ASC'
		);
		$count=0;
		$inner_query = new WP_Query( $args );
		while ($inner_query->have_posts()): $inner_query->the_post();
		$icone = get_field('icone');
		$count++;
		?>
		<li role="presentation" <?php if($count == 1): ?> class="active" <?php endif; ?>>
			<a href="#servico<?php echo $count; ?>" aria-controls="servico<?php echo $count; ?>" role="tab" data-toggle="tab">
				<div class="content">
					<i class="icon <?php echo $icone; ?>"></i>
					<strong class="title"><?php the_title(); ?></strong>
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
				'post_type' => 'servicos',
				'posts_per_page' => 8,
				'order'		=> 'ASC'
			);
			
			$inner_query = new WP_Query( $args );
			$count=0;
			while ($inner_query->have_posts()): $inner_query->the_post();
			$icone = get_field('icone');
			$count++;
			?>
			<article role="tabpanel" class="tab-pane fade <?php if($count == 1): ?>in active<?php endif; ?>" id="servico<?php echo $count; ?>">
				<div class="page-header">
					<h1><i class="icon <?php echo $icone; ?>"></i> <?php the_title(); ?></h1>
				</div>
				<?php the_content(); ?>
				<?php if( have_rows('janelas') ): ?>
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<?php $inner_count=0; while ( have_rows('janelas') ) : the_row(); $inner_count++;?>
				<?php
					$titulo = get_sub_field('titulo');
					$texto = get_sub_field('texto');
				?>
				  <div class="panel-content">
			        <h2><a class="panel-button <?php if($inner_count != 1): ?>collapsed<?php endif; ?>" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $inner_count; ?>" aria-expanded="true" aria-controls="collapse<?php echo $inner_count; ?>">
			          <div class="titulo"><?php echo $titulo; ?></div>
			          <div class="panel-caret-wrapper"><span class="panel-caret">  <i class="fa fa-caret-up" aria-hidden="true"></i></span></div>
			        </a></h2>
				    <div id="collapse<?php echo $inner_count; ?>" class="panel-collapse collapse <?php if($inner_count == 1): ?>in<?php endif; ?>" role="tabpanel" aria-labelledby="collapse<?php echo $inner_count; ?>">
				      <?php echo $texto; ?>
				    </div>
				  </div><!-- .panel-content -->
				<?php endwhile; ?>
				</div><!-- .panel-group -->
				<?php endif; ?>
			</article>
			<?php endwhile; ?>
		</div><!-- /.tab-content -->
	</div><!-- wrapper-abas -->
</section>
<!-- ./ Sistema de abas -->
<?php endif; ?>



<?php if ($ebook): ?>
<section class="mod-ebook">
	<header class="page-header" role="heading">
		<div class="underline"></div>
		<h1><?php echo $ebook; ?></h1>
	</header>
	<form action="#" class="form">
		<div class="radio-group">
			<input type="radio" id="logistica" name="ebook" value="logistica" checked>
			<label for="logistica"> Receba nosso E-book sobre Logística Estratégica</label><br>
			<input type="radio" id="ebook" name="ebook" value="ebook">
			<label for="ebook"> Receba nosso E-book completo</label>
		</div>
		<div class="inputs-group">
			<div class="inputs-two">
				<input type="text" class="input" placeholder="Nome" required>
				<input type="text" class="input" placeholder="Função" required>
			</div>
			<div class="inputs-two">
				<input type="email" class="input" placeholder="E-mail" required>
				<input type="tel" class="input" placeholder="Telefone" required>
			</div>
			<div class="inputs-three">
				<input type="text" class="input" placeholder="Cidade" required>
				<input type="text" class="input" placeholder="Estado" required>
				<input type="text" class="input" placeholder="Pais" required>
			</div>
			<div class="inputs-two">
				<input type="text" class="input" placeholder="Empresa" required>
				<input type="text" class="input" placeholder="Seguimento" required>
			</div>
			<div class="input-submit">
				<input type="submit" class="submit" value="ENVIAR">
			</div>
		</div>
	</form>
</section>
<?php endif; ?>

</main><!-- #main -->
<?php endwhile; ?>
<?php
get_footer();
