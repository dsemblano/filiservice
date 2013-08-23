<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package filiservice
 */

get_header(); ?>


		<main id="main" class="site-main content-area centralizar" role="main">

			<section class="no-results not-found">
				<header class="page-header">
					<h1 class="entry-title"><?php _e( 'Erro 404 - P&aacute;gina n&atilde;o encontrada', 'filiservice' ); ?></h1>
				</header><!-- .page-header -->

				<div class="entry-content-noresults">	

					<p>
						<?php _e( 'Essa p&aacute;gina n&atilde;o existe. Tente uma outra p&aacute;gina, uma busca ou talvez um de nossos &uacute;ltimos produtos abaixo?', 'filiservice' ); ?>
					</p>
					
					<?php get_search_form(); ?>
								
					<?php if ( filiservice_categorized_blog() ) : // Lista categorias e termos - Only show the widget if site has multiple categories. ?>
					
						<ul class="widget widget_categories">
							<ol class="widgettitle"><?php _e( 'Categorias: ', 'filiservice' ); ?>
							<?php					
								$termsquery = get_terms( 'fabricantes', 'parent=0&hide_empty=0&hierarchical=0' );						
								foreach ($termsquery as $terms) {							
									echo '<li>' . '<a href="' . get_term_link( $terms->slug, 'fabricantes' ) . '">' . $terms->name . '</a>' . '</li>';
								}							
							?>
							</ol>
						</ul>
					
					<?php endif; ?>

					<?php //the_widget( 'WP_Widget_Recent_Posts', 'title= ' ); ?>
					
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Nao Encontrado') ) : // Posts?><?php endif; ?>
				</div>
			</section><!-- .no-results -->

	</main><!-- #main -->

<?php get_footer(); ?>