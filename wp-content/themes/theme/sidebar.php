<?php
/**
 * The sidebar containing the secondary widget area, displays on homepage, archives and posts.
 *
 * If no active widgets in this sidebar, it will shows Recent Posts, Archives and Tag Cloud widgets.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<aside id="sidebar" class="sidebar" role="complementary">



<div class="widget sidebar-newsletter">
	<div class="header">
		<?php $newsletter = '<!--:en-->Sign up for our newsletter<!--:--><!--:pb-->Assine nossa Newsletter<!--:-->'; ?>
		<strong class="title"><?php _e(do_shortcode($newsletter)); ?></strong>
	</div>
	<div class="content">
		<form action="">
			<div class="inputs-group">
				<?php $name = '<!--:en-->Name<!--:--><!--:pb-->Digite seu nome<!--:-->'; ?>
				<input type="text" placeholder="<?php _e(do_shortcode($name)); ?>" required>
			</div>
			<div class="inputs-group">
				<?php $email = '<!--:en-->E-mail<!--:--><!--:pb-->Digite seu e-mail<!--:-->'; ?>
				<input type="email" placeholder="<?php _e(do_shortcode($email)); ?>" required>
			</div>
			<div class="inputs-button">
				<?php $submit = '<!--:en-->Sign up<!--:--><!--:pb-->Cadastrar<!--:-->'; ?>
				<input type="submit" class="button" value="<?php _e(do_shortcode($submit)); ?>">
			</div>
		</form>
	</div>
</div>

<div class="widget sidebar-lista">
	<div class="header">
		<?php $populares = '<!--:en-->Popular articles<!--:--><!--:pb-->Artigos populares<!--:-->'; ?>
		<strong class="title"><?php _e(do_shortcode($populares)); ?></strong>
	</div>
	<div class="content">
	<?php
	$query = new WP_Query( 
	array(
	    'posts_per_page'      => 5,                 // Máximo de 5 artigos
	    'no_found_rows'       => true,              // Não conta linhas
	    'ignore_sticky_posts' => true,              // Ignora posts fixos
	    'orderby'             => 'meta_value_num',  // Ordena pelo valor da post meta
	    'meta_key'            => 'tp_post_counter', // A nossa post meta
	    'order'               => 'DESC'             // Ordem decrescente
	)
	);
	?>
	<?php if ( $query->have_posts() ): ?>
	<ul>
	<?php while ( $query->have_posts() ): $query->the_post(); ?>

	<?php $tp_post_counter = get_post_meta( $post->ID, 'tp_post_counter', true );?>
	<li><a href="<?php the_permalink(); ?>" title="<?php the_title( ); ?>"><?php the_title( ); ?></a></li>
	<?php endwhile; ?>
	</ul>
	<?php endif; wp_reset_postdata();?>
	</div>
</div><!-- .widget -->

<div class="widget sidebar-lista">
	<div class="header">
		<?php $categorias = '<!--:en-->Categories<!--:--><!--:pb-->Categorias<!--:-->'; ?>
		<strong class="title"><?php _e(do_shortcode($categorias)); ?></strong>
	</div>
	<div class="content">
		<?php $argumentos=array(
		'title_li'=> false,
		); ?>
		<?php wp_list_categories($argumentos); ?>
	</div>
</div><!-- .widget -->

</aside><!-- #sidebar -->
