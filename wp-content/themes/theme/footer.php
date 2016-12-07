<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<footer id="contato" class="footer" role="contentinfo">
<div class="wrapper">
	<div class="widget form">
		<strong class="title">FALE CONOSCO</strong>
		<form action="">
			<div class="input-group">
				<input type="text" placeholder="Nome" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Empresa" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="E-mail" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Telefone" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Cidade" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Estado" required>
			</div>
			<div class="textarea">
				<textarea placeholder="Mensagem" required></textarea>
			</div>
			<div class="input-submit">
				<input class="submit" type="submit" value="ENVIAR">
			</div>
		</form>
	</div>
	<div class="widget">
		<strong class="title">ARTIGOS RECENTES</strong>
		<ul>
		<?php 
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 5
		);
		$inner_query = new WP_Query( $args );
		while ($inner_query->have_posts()): $inner_query->the_post(); ?>
			<li>> <a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
		<?php endwhile ?>
		</ul>
	</div>
	<div class="widget">
		<strong class="title">CASES DE SUCESSOS</strong>
		<ul>
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
			<li>> <a href="<?php bloginfo('url'); ?>/o-que-fazemos/#depoimento<?=$count?>"><?php the_title() ?></a></li>
		<?php endwhile ?>
		</ul>
	</div>
	<div class="widget">
		<strong class="title">SERVIÇOS</strong>
		<ul>
		<?php 
			$args = array(
				'post_type' => 'servicos',
				'posts_per_page' => 8,
				'order'		=> 'ASC'
			);
			$inner_query = new WP_Query( $args );
			$count=0;
			while ($inner_query->have_posts()): $inner_query->the_post();
			$count++;
			?>
			<li>> <a href="<?php bloginfo('url'); ?>/o-que-fazemos/#servico<?=$count?>"><?php the_title() ?></a></li>
		<?php endwhile ?>
		</ul>
	</div>

	<div class="widgetfull locale">
		<strong class="title">ESCRITÓRIO</strong>
		<div class="content">
			<i class="icon-marker"></i>
			<a>Rua Lorem impsum, 123, São Paulo - SP</a>
		</div>
		<div class="content">
			<i class="icon-phone"></i>
			<a href="tel:(11) 3566-1234">(11) 3566-1234</a>
		</div>
		<div class="content">
			<i class="icon-envelope"></i>
			<a href="mailto:contato@prosperity.com.br">contato@prosperity.com.br</a>
		</div>
	</div>
</div>
<div class="widgetfull corporate">
<div class="wrapper">
	<div class="content">
		<i class="icon-prosperity-logo"></i>
		<p>Copyright © 2016 Prosperity Consultoria em Logística e Supply Chain.</p>
	</div>
	<div class="content">
		<span class="creditos">
			by <strong><a href="http://madgo.com.br" target="_blank">MadGO</a></strong>
		</span>
	</div>
</div><!-- .wrapper -->
</div><!-- .corporate -->
</footer><!-- #footer -->

<div class="mod-postits link">
<a href="#contato"><i class="icon-phone"></i></a>
<a href="#contato"><i class="icon-marker"></i></a>
</div>

<?php wp_footer(); ?>
</body>
</html>
