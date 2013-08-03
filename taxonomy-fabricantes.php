<?php get_header(); ?>

	<main id="main" class="fabricantes_pagina content-area centralizar" role="main">
		<?php 
			if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<p id="breadcrumbs">','</p>');	
			}
		?>
		
		<?php // Mostra a taxonomia filha (FABRICANTES) só nas páginas filhas
		
			$parent_term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
			
			// Pegando fabricante da taxonomia escolhida
			$taxonomy_name = 'fabricantes';
			$termchildren = get_term_children( $parent_term->term_id, $taxonomy_name );
			
			// Mostrando fabricantes da taxonomia escolhida
			//echo '<ul class="fabricantes-breadcrumb">';
				//foreach ( $termchildren as $child ) {					
					//$fabricante = get_term_by( 'id', $child, $taxonomy_name );
					//echo '<li class="entry-tax"><a href="' . get_term_link( $fabricante->name, $taxonomy_name ) . '">' . $fabricante->name . '</a></li>';
					//print_r ($fabricante);
				//}
			//echo '</ul>';
		?>
		
		<?php	
			$args = array(
				'post_type' => 'produtos',
				'fabricantes' => $parent_term->slug,
				'orderby' => 'post_date'
			);				
			$posts_tax = get_posts($args);
		?>
		
		<ul id="Grid">
			<?php foreach ($posts_tax as $terms) : ?>			
			<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $terms->ID ), 'medium' ); ?>
				<?php if ( has_post_thumbnail($terms->ID) ) : ?>				
					<li>
						<a href="<?php echo $terms->guid; ?>">
							<img src="<?php echo $thumbnail[0]; ?>"/>
							<h4><?php echo substr($terms->post_title, 0, 33); ?></h4>
						</a>
					</li>
				<?php else :?>
					<li>					
						<a href="<?php echo $terms->guid; ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Default-medium.png" alt="imagem em branco" />
							<h4><?php echo substr($terms->post_title, 0, 33); ?></h4>
						</a>
					</li>
				<?php endif; ?>				
			<?php endforeach ; ?>
			<li class="placeholder"></li>
		</ul>
		
	</main>
		
<?php get_footer(); ?>