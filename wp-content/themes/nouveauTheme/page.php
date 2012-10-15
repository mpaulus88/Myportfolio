<?php get_header(); ?>
<h1 id="maintitle">
	<a href="<?php bloginfo('wpurl');?>"<?php bloginfo('name');?>></a>
</h1>
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
<a href="<?php the_permalink(); ?>">
<h2><?php the_title(); ?></h2>
</a>
<h3><?php _e('Posté par')?> <?php the_author();?> <?php _e('le')?> <?php echo get_the_date(); ?></h3>
<div class="content">
	<?php the_content(); ?>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php comments_template(); ?>
<p>Je suis dans une page</p>
<?php get_footer(); ?>