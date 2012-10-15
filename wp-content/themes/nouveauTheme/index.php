<?php get_header(); ?>
<?php query_posts( 'cat=7' );?>
<div id="corps">
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
				<section class="accueil">
					<article>
					<header>
						<h2><?php the_title(); ?></h2>
					</header>
						<div><?php the_content(); ?>
						</div>
					</article>
				</section>
<?php endwhile; ?>
<?php endif; ?>
</div>
<p>Je suis dans index</p>
<?php get_footer(); ?>

<!-- <p><?php the_terms($post->ID, 'techniques'); ?></p>