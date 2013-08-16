<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package filiservice
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="entry-title"><?php _e( 'Nenhum Resultado Encontrado', 'filiservice' ); ?></h1>
	</header><!-- .page-header -->

	<div class="entry-content">	

			<?php _e( 'Por favor, tente novamente usando outros termos.', 'filiservice' ); ?><br>
			<p><?php _e( 'Ou tente uma das categorias ou mat&eacute;rias mais recentes abaixo, ou talvez novamente a busca acima?', 'filiservice' ); ?></p>		
					
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
