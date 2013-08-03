<?php get_header(); ?>

	<main id="main" class="produtos content-area centralizar" role="main">	
	<?php		
		//echo 'Pagina: ' . current_page_url() . '<br />';

		$termsquery = get_terms( 'fabricantes', 'hide_empty=0&parent=0' );
		
		echo '<ul id="Grid">';
		foreach ($termsquery as $terms) {
			echo ciii_term_images( 'fabricantes', 'term_ids=' . $terms->term_id );
		}
		echo '<li class="placeholder"></li>';
		echo '</ul>';
	?>
	
	</main>

<?php get_footer(); ?>