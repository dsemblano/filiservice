<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package filiservice
 */
?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="footer-info"><?php bloginfo(); ?> &copy; <?php echo date( 'Y' ); ?></div>
			<a href="http://totalle.net"><span>Produzido por Totalle Edi&ccedil;&otilde;es Ltda</a> - (81) 3471.3705</span>
		</div><!-- .site-info -->
		<div id="footer-img" class="pagewidth">
			<a href="<?php echo get_option('home'); ?>/">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-filiservice-footer.png" class="logo" alt="logo">
			</a>
		</div>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>