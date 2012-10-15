<?php get_header(); ?>
<div id="corps">
					<section class="gauche">
						<?php
						$args = array( 'post_type' => 'news', 'news_type' => 'Travaux');
						$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<section>
							<header>
								<h3><?php the_title(); ?></h3>
							</header>
							<artcile>
								<?php the_content(); ?>
							</article>
							<footer>
								<p>ajouté le <?php echo get_the_date(); ?></p>
							</footer>
						</section>
					<?php endwhile; ?>
					</section>
					<section class="droite">
						<?php
						$args = array( 'post_type' => 'news', 'news_type' => 'Like');
						$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<section>
							<header>
								<h3><?php the_title(); ?></h3>
							</header>
							<artcile>
								<?php the_content(); ?>
							</article>
							<footer>
								<p>ajouté le <?php echo get_the_date(); ?></p>
							</footer>
						</section>
					<?php endwhile; ?>
				</div>
<?php get_footer(); ?>


