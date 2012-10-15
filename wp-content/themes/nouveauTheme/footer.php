
			<footer id="main-footer">
				<section id="ressoc">
					<h4><?php _e('REJOIGNEZ MOI SUR');?>:</h4>
					<?php
						$args = array( 'post_type' => 'ressoc', 'order'=>'ASC');
						$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<section>
						<?php the_post_thumbnail('post-thumbnail',array('class'=>'ressoc')); ?>
						<a href="<?php echo get_post_custom_values($url); ?>"><?php the_title(); ?></a>
					</section>
				<?php endwhile; ?>
					
				</section>

				<section id="MLE">
					<?php
					$args = array( 'post_type' => 'foot', 'order'=>'ASC');
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<article>
					<h4><?php the_title(); ?></h4>
					<?php the_content(); ?>
				</article>
			<?php endwhile; ?>
				</section> 
				<p id="copyright">&copy; 20011-2012 Martin Paulus. All Rights Reserved</p>
			</footer>
</div>
</body>

</html>