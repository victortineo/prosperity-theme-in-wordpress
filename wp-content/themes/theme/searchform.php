<?php
/**
 * The template for displaying Search Form.
 *
 * @package Odin
 * @since 2.2.0
 */
?>
<aside id="search" class="mod-search">
	<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<img src="<?php the_field('logo', 'option') ?>" alt="">
		<label for="menu-search" class="sr-only">
			<?php _e( 'Search:', 'odin' ); ?>
		</label>
		<div class="form-group">
			<input type="search" placeholder="Pesquise em nosso site" value="<?php echo get_search_query(); ?>" class="form-control" name="s" id="menu-search" />
		</div>
		<button id="submit-search" type="submit" class="submit"><?php _e( 'Search', 'odin' ); ?></button>
	</form>
	<a href="#" id="search-toggle" class="toggle">X</a>
</aside>