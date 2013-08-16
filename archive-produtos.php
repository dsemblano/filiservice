<?php get_header(); ?>

	<main id="main" class="produtos content-area centralizar" role="main">
		<ul id="Grid" class="produtos_grid">
	<?php		
		//echo 'Pagina: ' . current_page_url() . '<br />';
		$termsquery = get_terms( 'fabricantes', 'parent=0&hide_empty=0&hierarchical=0' );		
		foreach ($termsquery as $terms) : ?>
			<li>
				<a href="<?php echo get_term_link( $terms->slug, 'fabricantes' ); ?>">
					<?php s8_taxonomy_image($terms, 'medium'); ?>
					<h5 class="produtos-title">
						<?php echo $terms->name; ?>							
					</h5>
				</a>
			</li>
		<?php endforeach; ?>
		<li class="placeholder"></li>
		</ul>
	</main>

<?php get_footer(); ?>