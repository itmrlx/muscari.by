<?php get_header(); ?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
	<div class="container news-page">
		<h1 class="title-hr"><span><?php the_title(); ?></span></h1>
		<?php the_content(); ?>
	</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>