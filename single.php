<?php
/**
 * The Template for displaying all single posts.
 *
 * @package filiservice
 */

get_header(); ?>


	<main id="main" class="single content-area centralizar" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

		<?php filiservice_content_nav( 'nav-below' ); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>

	<?php endwhile; // end of the loop. ?>

	</main><!-- #main -->

<?php get_footer(); ?>