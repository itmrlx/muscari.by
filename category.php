<?php get_header(); ?>
	<div class="container">
		<hr class="pages">
	</div>

	<div class="container news-page">
		<h1 class="title-hr"><span><?php single_cat_title(); ?></span></h1>
		<div class="row">
			<?php if(is_category('news') || 
               is_category('video') || 
				 			 is_category('articles')
			){ ?>
				<div class="col-xs-12">
					<div class="centered">
					<a href="/category/news/video/" class="tab-btn tab-btn1<?php if(is_category('video')){echo ' active';};?>">Видео</a>
					<a href="/category/news/articles/" class="tab-btn tab-btn2<?php if(is_category('articles')){echo ' active';};?>">Статьи</a>
					</div>
				</div>
			<?php }; ?>
			<div class="col-xs-10 col-xs-offset-1">
				<div class="row">
					<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
						<div class="col-xs-12 news-page-item">
							<?php $img = get_field('news_img'); ?>
							<a href="<?php the_permalink(); ?>"><img class="alignleft" src="<?php echo $img['sizes']['thumbnail'] ?>" alt="<?php echo $img['alt'] ?>" width="200px" height="200px"></a>
							<h2><a href="<?php the_permalink(); ?>" class="hover-text"><?php the_title(); ?></a></h2>
							<p><?php the_field('news_short'); ?> <a class="hover-text" href="<?php the_permalink(); ?>">Подробнее...</a></p>
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

<?php get_footer(); ?>