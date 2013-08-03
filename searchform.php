<?php
/**
 * The template for displaying search forms in filiservice
 *
 * @package filiservice
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Busca para:', 'label', 'filiservice' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Busca', 'placeholder', 'filiservice' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'filiservice' ); ?>">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( '', 'submit button', 'filiservice' ); ?>">
</form>
