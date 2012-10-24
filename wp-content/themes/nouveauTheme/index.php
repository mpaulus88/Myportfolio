<?php get_header(); ?>
<?php query_posts( 'cat=7' );?>
<div id="corpsBody">
<section id="imgNav">
	<div class="gradient"></div>
	<div id="cap" class="imgElement"></div>
	<div id="pen" class="imgElement" href="#"></div>
	<a id="laptop" class="imgElement" href="<?php bloginfo('wpurl'); ?>/portfolio/#web"></a>
	<a id="agenda" class="imgElement" href="<?php bloginfo('wpurl'); ?>/news"></a>
	<a id="folders" class="imgElement" href="<?php bloginfo('wpurl'); ?>/portfolio/#2d"></a>
	<a id="phone" class="imgElement" href="<?php bloginfo('wpurl'); ?>/contact-2"></a>
	<a id="drawing" class="imgElement" href="<?php bloginfo('wpurl'); ?>/portfolio/#dessins"></a>
	<div class="gradient"></div>
</section>
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
<?php get_footer(); ?>

<!-- <p><?php the_terms($post->ID, 'techniques'); ?></p>