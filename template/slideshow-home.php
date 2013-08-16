	<div class="flexslider">
				<ul class="slides">
				<?php
					$termsquery = get_terms( 'fabricantes', 'parent=0&hide_empty=0&hierarchical=0' );
					foreach ($termsquery as $terms) :
				?>
				<li>
				<a href="<?php echo site_url() . '/fabricantes/' . $terms->slug ;?>">
					<?php s8_taxonomy_image($terms, 'full'); ?>					
						<h5 class="gallery-title">
							<a href="<?php the_permalink(); ?>" title="<?php $terms->name; ?>">
								<?php echo $terms->name; ?>
							</a>
						</h5>
						<div class="flex-caption">						
							<?php echo term_description( $terms->term_id, 'fabricantes' ) ?>
						</div>
				</a>
				</li>
				<?php endforeach; ?>
				</ul>
	</div>