<?php
/**
 * @package filiservice
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

	<?php if ( 'post' == get_post_type() ) : ?>
	<div class="entry-meta">
		<?php filiservice_posted_on(); ?>
	</div><!-- .entry-meta -->
	<?php endif; ?>
	
	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>" rel="bookmark">
			<?php the_post_thumbnail( 'category-pages', array( 'title' => ''.get_the_title().'' )); ?>
		</a>
	<?php else: ?>
		<a href="<?php the_permalink(); ?>" rel="bookmark">
			<img class="nao-encontrada" src="<?php echo get_template_directory_uri(); ?>/assets/images/Default.png" alt="imagem em branco">
		</a>
	<?php endif; ?>

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<a href="<?php the_permalink(); ?>" rel="bookmark">
			<?php the_excerpt(); ?>
		</a>
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'filiservice' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'filiservice' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>
</article><!-- #post-## -->
