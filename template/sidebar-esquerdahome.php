<aside id="sidebar-left" class="rounded">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sidebar-esquerdo.jpg" alt="busca imagem">
	<h4>Encontre o que voc&ecirc; procura</h4>
	<div id="sidebar-left-wrapper">		
		<!-- Busca Wordpress padrao -->
		<div id="busca_encontre">
			<h6>Fa&ccedil;a sua busca digitando no campo abaixo</h6>
			<?php get_search_form(); ?>
		</div>

		<!-- Busca Ajax -->
		<hr>
		<div id="busca_taxonomia">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home') ) : ?><?php endif; ?>
			<?php //parent_child_cat_select('produtos'); ?>
		</div>
		
	</div>
</aside>