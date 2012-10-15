<?php get_header(); ?>
<?php query_posts( 'cat=7' );?>
<div id="corps">
<div id="portfolio">
<?php  $work_types=get_terms('techniques');
				foreach($work_types as $work_type):?>
				<section class="pannel">
				<?php $cat = $work_type->name; ?>
				<p><?php echo $cat; ?></p>
				</section>
				<section class="galery">
					<?php
					$args = array( 'post_type' => 'works', 'techniques' => $cat);
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<article>
						<a href="<?php echo get_post_custom_values($url);?>"><?php the_post_thumbnail(); ?></a>
						<p class="titre"><?php the_title(); ?></p>
						<p class="description"><?php the_content(); ?></p>
						<p class="date">ajouté le <?php echo get_the_date(); ?></p>  
					</article>
				<?php endwhile; ?>
				</section>
			<?php endforeach; ?>
			</section>
</div>
<?php get_footer(); ?>