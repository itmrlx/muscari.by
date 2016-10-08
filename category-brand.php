<?php /*
category template: Брэнды
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
	<div class="wrapper brand-wr">
		<div class="container">
			<h2 class="title-hr"><span>Каталог производителей</span></h2>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<div class="row">
						<?php 
						/* вывод списка рубрик */
						$args = array(
							'parent' => get_query_var( 'cat' ),
							'hide_empty' => 0,
							'exclude' => '', // ID рубрики, которую нужно исключить
							'number' => '0',
							'taxonomy' => 'category', // таксономия, для которой нужны изображения
							'pad_counts' => true,
							'orderby' => 'name',
							'sortby' => 'ASC',
						);
						$catlist = get_categories($args); // получаем список рубрик
						 
						foreach($catlist as $categories_item)
							{
							// получаем данные из плагина Taxonomy Images
							$terms = apply_filters('taxonomy-images-get-terms', '', array(
								'taxonomy' => 'category' // таксономия, для которой нужны изображения
							));
							if (!empty($terms))
								{
								foreach((array)$terms as $term)
									{
									if ($term->term_id == $categories_item->term_id)
										{
										?>
											<div class="col-xs-3 item-brand">
												<a href="<?php echo esc_url(get_term_link($term, $term->taxonomy)); ?>" class="image-container"><?php echo wp_get_attachment_image($term->image_id, 'thumbnail'); ?></a>
												<h2 class="title"><?php echo $categories_item->cat_name; ?></h2>
											</div>
										<?php
										}
									}
								}
							// выводим описание и название рубрики
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>