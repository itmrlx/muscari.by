<?php /*
template name: Услуги
*/ ?>
<?php get_header(); ?>
	<div class="container">
		<hr class="pages">
	</div>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

	<div class="container services-page">
		<h1 class="title-hr"><span>Наши услуги</span></h1>
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2">
				<div class="centered">
					<span class="tab-btn tab-btn1 active">Шторы</span>
					<span class="tab-btn tab-btn2">Ковры</span>
				</div>
				<div class="row tab-block tab-block1 active">
					<?php if( have_rows('s_shtori') ):while ( have_rows('s_shtori') ) : the_row(); ?>
						<div class="col-xs-4 services-page-item">
							<?php $img = get_sub_field('s_shtori_img'); ?>
							<img src="<?php echo $img['sizes']['thumbnail']; ?>" alt="<?php echo $img['alt']; ?>">
							<h2 class="title"><?php the_sub_field('s_shtori_title'); ?></h2>
							<p><?php the_sub_field('s_shtori_text'); ?></p>
						</div>
					<?php endwhile; endif; ?>
				</div>
				<div class="row tab-block tab-block2">
					<?php if( have_rows('s_kovri') ):while ( have_rows('s_kovri') ) : the_row(); ?>
						<div class="col-xs-4 services-page-item">
							<?php $img = get_sub_field('s_kovri_img'); ?>
							<img src="<?php echo $img['sizes']['thumbnail']; ?>" alt="<?php echo $img['alt']; ?>">
							<h2 class="title"><?php the_sub_field('s_kovri_title'); ?></h2>
							<p><?php the_sub_field('s_kovri_text'); ?></p>
						</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>