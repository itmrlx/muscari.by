<?php /*
category template: Ковры
*/ ?>
<?php get_header(); ?>
	<div class="container">
		<hr class="pages">
	</div>

	<!-- about us -->
	<section class="container about-us">
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1">
				<?php
					// acf category fields
					$queried_object = get_queried_object(); 
					$taxonomy = $queried_object->taxonomy;
					$term_id = $queried_object->term_id; 
				?>
				<h2 class="title-hr"><span><?php the_field('cat_title',$queried_object); ?></span></h2>
				<div class="text-str"><?php the_field('cat_short',$queried_object); ?></div>
				<?php if(get_field('cat_long',$queried_object)): ?>
					<div class="more-text"><?php the_field('cat_long',$queried_object); ?></div>
					<span class="more-btn hover-text">Подробнее...</span>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<!-- kovri -->
	<div class="wrapper brand-wr brand-item">
		<div class="container">
			<h2 class="title-hr"><span>Товары</span></h2>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<div class="row">
						<?php $cat_ID = get_query_var('cat'); ?>
						<?php 
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$args = array(
								'cat' => $cat_ID,
								'posts_per_page' => 30,
								'paged' => $paged
								); query_posts($args); 
						?>
						<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>
							<div class="col-xs-2-5 item-brand-item">
								<?php $img = get_field('k_img'); ?>
								<a href="<?php the_permalink(); ?>" class="image-container"><img src="<?php echo $img['sizes']['thumbnail']; ?>" alt="<?php echo $img['alt'] ?>"></a>
								<h2 class="title"><?php the_title(); ?></h2>
							</div>
						<?php endwhile; ?>
							<div class="clearfix"></div>
							<nav class="centered">
								<?php if(function_exists('proPagination')) { proPagination(); } ?>
							</nav>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>