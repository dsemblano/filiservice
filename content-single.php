<?php
/**
 * @package filiservice
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php // Breadcrumb usando Yoast SEO, funciona para todas as páginas
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<p id="breadcrumbs">','</p>');	
			}
	?>

	<figure>
		<?php if ( has_post_thumbnail() ) : ?>
			<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'your_thumb_handle' ); ?>
			<img src="<?php echo $thumbnail['0']; ?>" width="<?php echo $thumbnail[1]; ?>" height="<?php echo $thumbnail[2]; ?>" />
		<?php else: ?>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Default.png" alt="imagem em branco">
		<?php endif; ?>
	</figure>
	
	<div class="entry-content">
		<header class="entry-header">
	
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php $terms_as_text = strip_tags( get_the_term_list( $wp_query->post->ID, 'fabricantes', '', ', ', '' ) ); ?>
			<h2 class="entry-tax">Fabricante: <?php echo $terms_as_text; ?></h2>		

		</header><!-- .entry-header -->
	
		<?php the_content(); ?>
		<h6 class="entry-tax-outros">Outros produtos do fabricante <?php $tax_link = get_the_term_list( $wp_query->post->ID, 'fabricantes', '', ', ', '' ); echo ($tax_link); ?>
		</h6>	
	
	</div><!-- .entry-content -->

</article><!-- #post-## -->
