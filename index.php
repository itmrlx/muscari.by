<?php get_header(); ?>

	<!-- slider -->
	<section class="container slider-container">
		<div class="slider">
			<?php if( have_rows('m_slide','option') ):while ( have_rows('m_slide','option') ) : the_row(); ?>
				<div class="slide">
					<?php $img = get_sub_field('m_slide_img'); ?>
					<img src="<?php bloginfo('template_url'); ?>/img/blank.png" data-lazy="<?php echo $img['sizes']['main-slider']; ?>" alt="<?php echo $img['alt']; ?>">
					<div class="slide-text-container">
						<?php if(get_sub_field('m_slide_title')): ?><h2><?php the_sub_field('m_slide_title'); ?></h2><?php endif; ?>
						<?php the_sub_field('m_slide_text'); ?>
					</div>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</section>
	
	<!-- about us -->
	<section class="container about-us">
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1">
				<h1 class="title-hr"><span>Салон штор Muscari</span></h1>
				<div class="text-str"><?php the_field('about_short','option'); ?></div>
				<div class="more-text"><?php the_field('about_long','option'); ?></div>
				<span class="more-btn hover-text">Подробнее...</span>
			</div>
		</div>
	</section>

	<!-- last news -->
	<section class="container last-news-container">
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1">
				<h2 class="title-hr"><span>Блог</span></h2>
				<div class="row">
					<?php query_posts('category_name=main&posts_per_page=4'); ?>
					<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>
						<div class="col-xs-3">
							<h3 class="title"><a class="hover-text" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php $img = get_field('news_img'); ?>
							<a class="image-container" href="<?php the_permalink(); ?>">
								<img src="<?php echo $img['sizes']['thumbnail'] ?>" alt="<?php echo $img['alt'] ?>" />
							</a>
							<p><?php echo wp_trim_words( get_field('news_short'), 20, '...' ); ?></p>
							<a href="<?php the_permalink(); ?>" class="read-more hover-text">Читать полностью...</a>
						</div>
					<?php endwhile; ?>
					<?php endif; wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>