<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package filiservice
 */

get_header(); ?>

	<main id="main" class="busca content-area centralizar" role="main">

	<?php if ( have_posts() ) : ?>

		<header class="page-header">
		
			<div id="nova-busca">
				<h1>Nova busca: </h1>
				<?php get_search_form(); ?>
			</div>
			
			<h1 class="entry-title"><?php printf( __( 'Resultados para: %s', 'filiservice' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

		</header><!-- .page-header -->

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'search' ); ?>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part( 'no-results', 'search' ); ?>

	<?php endif; ?>
	
	<div id="nova-busca">
		<h1>Nova busca: </h1>
		<?php get_search_form(); ?>
	</div>

	</main><!-- #main -->

<?php get_footer(); ?>