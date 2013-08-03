<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?>
	<?php foreach( $terms AS & $term ) { ?>	
		<li id="<?php echo $term[ 'name' ]; ?>" class="fabricantes">
			<a href="<?php echo esc_attr( get_term_link( $term[ 'id' ], $taxonomy ) ); ?>">
				<h4 class="entry-title"><?php echo $term[ 'name' ]; ?></h2>			
				<img src="<?php echo $term[ 'image' ]; ?>" alt="<?php echo $term[ 'name' ]; ?>">
			</a>
		</li>
<?php } ?>