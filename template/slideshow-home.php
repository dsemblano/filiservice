	<div class="flexslider">
				<ul class="slides">
				<?php
				$args = array(
				'post_type' => 'produtos',
				'posts_per_page' => 6,
				'meta_query' => array(
					array(
						'key' => 'wpcf-slideshow-cf',
						'value' => 1,
						'compare' => '=='
						)
					)	
				);
				query_posts ($args);

				if(have_posts()) :
				while(have_posts()) : the_post();
				?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'slider2', array( 'class' => 'flexslider_img', 'title' => ''.get_the_title().'' )); // Imagem do Slider ?>
						</a>
						<h5 class="gallery-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo the_title(); ?></a></h5>
						<p class="flex-caption">						
							<a href="<?php the_permalink(); ?>">
								<?php $excerpt = get_the_excerpt();								  
									if (empty($post->post_excerpt)) {
										$excerpt = ucfirst(strtolower($excerpt));
										echo string_limit_words($excerpt,20) . (' ...');
									}
									else { echo string_limit_words($excerpt,20); }
								?>
							</a>
						</p>
					</li>
				<?php endwhile;endif; wp_reset_query(); ?>
				</ul>
	</div>