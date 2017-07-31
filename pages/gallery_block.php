<div class="gallery-block">
	<div class="empty-block">
		<div class="container">
			<span></span>
			Мы поможем Вам почувствовать себя лучше уже после 1-го посещения
		</div>
	</div>
	<?php $k=1;?>
	<?php $query = new WP_Query(array('page_id'=>8)); ?>
	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
	<div class="slider owl-carousel">
	<?php if(get_field('slider_main')): ?>
	<?php while(has_sub_field('slider_main')): ?>
		<div class="slide">
			<div class="blockText rightBlock">
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="title">Галерея</a>
				<p><?php the_sub_field('text_for_slider') ?></p>
				<div class="number">
					<hr>
					<?php echo ($k<10)?"0".$k++:$k++; ?>
				</div>
			</div>
			<div class="blockImg leftBlock">
				<?php $photo = get_sub_field('img_for_slider') ?>
				<img src="<?php echo $photo['url']; ?>" alt="" class="img-responsive">
			</div>
		</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>
</div>