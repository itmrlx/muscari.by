<?php get_header(); ?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>





<!-- news -->
<?php if (get_field('news_img') || get_field('news_short') || get_field('news_long')): ?>
	<div class="container">
		<hr class="pages">
	</div>
	<div class="container news-page single-news">
		<h1 class="title-hr"><span><?php the_title(); ?></span></h1>
		<?php the_field('news_long'); ?>
	</div>

<!-- shtori -->
<?php elseif (get_field('sh_img') || get_field('sh_gallery')):?>
	<div class="container">
		<hr class="pages">
	</div>
	<div class="container shtori">
		<h1 class="title-hr"><span><?php the_title(); ?></span></h1>
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1">
				<div class="row">
					<?php $images = get_field('sh_gallery'); if( $images ): ?>
					<?php foreach( $images as $image ): ?>
						<div class="col-xs-3 cat-shtori cat-shtori-item">
							<a href="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>" data-fancybox-group="fancy1" class="image-container fancybox"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>"></a>
						</div>
					<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

<!-- kovri -->
<?php elseif (get_field('k_img') || get_field('k_short') || get_field('k_full') || get_field('k_size') || get_field('k_gallery')):?>
	<div class="container">
		<hr class="pages">
	</div>

	<div class="container item-page">
		<h1 class="title title-name"><?php the_title(); ?></h1>
		<div class="row">
			<div class="col-xs-6 item-page-left">
				<div class="item-slider">
					<?php $counnn = 0; ?>
					<?php  $images1 = get_field('k_gallery');
					if( $images1 ): ?>
						<img id="img_01" class="zoom-plugin zoomslider<?php echo $counnn; ?>" src="<?php echo $images1[0]['sizes']['item-slider']; ?>" data-zoom-image="<?php echo $images1[0]['sizes']['item-slider']; ?>" alt="<?php echo $images1[0]['alt']; ?>"/>
					<?php endif; ?>
				</div>
				<div class="item-slider-nav" id="gallery_01">
					<?php  $images = get_field('k_gallery');
					if( $images ): ?>
						<?php foreach( $images as $image ): ?>
							<a class="slide" href="#" data-image="<?php echo $image['sizes']['item-slider']; ?>" data-zoom-image="<?php echo $image['sizes']['item-slider']; ?>">
								<img id="img_01" src="<?php echo $image['sizes']['item-slider']; ?>" />
							</a>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-xs-6 item-page-right">
				<?php if(get_field('k_full')): ?>
				<h3 class="title title-first">Описание</h3>
				<hr>
				<?php the_field('k_full'); ?>
				<br>
				<?php endif; ?>
				<?php if(get_field('k_size')): ?>
				<h3 class="title">Размеры:</h3>
				<p><?php the_field('k_size'); ?></p>
				<br>
				<?php endif; ?>
				<hr>
				<p class="phones">
					Оставить заявку можно по телефонам:<br>
					<a href="callto:<?php the_field(phone1,option); ?>"><?php the_field(phone1,option); ?></a><br>
					<a href="callto:<?php the_field(phone2,option); ?>"><?php the_field(phone2,option); ?></a><br>
					<br>
					<strong>E-mail:</strong> <a class="hover-text" href="mailto:<?php the_field('email','option'); ?>"><?php the_field('email','option'); ?></a> 
				</p>
			</div>
		</div>
	</div>
<?php endif; ?>






<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>