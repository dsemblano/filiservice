<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package filiservice
 */

get_header(); ?>


	<main id="main" class="site-main content-area centralizar" role="main">

		<div id="first_content" class="site-content" role="main">
		<?php get_template_part('template/sidebar', 'esquerdahome'); ?>
		<?php get_template_part('template/slideshow', 'home'); ?>		
		</div>		

		<div id="second_content" class="site-content" role="main">
			<?php get_template_part('template/descricoes', 'marcashome'); ?>
			<?php //dynamic_sidebar('infohome-1') ?>
		</div>

	</main><!-- #main -->

<?php get_footer(); ?>