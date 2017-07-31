<div class="price-block">
	<div class="container">
		<?php $query = new WP_Query(array('page_id'=>10)); ?>
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<?php if(get_field('service_page')): ?>
			<?php while(has_sub_field('service_page')): ?>
		<div class="block-service clearfix">
			<div class="topBlock">
				<span><hr> <?php the_sub_field('service_name'); ?></span>
				<div class="right">
					<div class="price"><?php the_sub_field('service_price') ?> <span>грн</span></div>
					<a href="#" class="btn-press reserve">Записаться на сеанс</a>
				</div>
			</div>
			<div class="bottomBlock">
				<div class="blockImg leftBlock">
					<div class="img">
						<?php $photo_service = get_sub_field('service_img'); ?>
						<img src="<?php echo $photo_service['url']; ?>" alt="" class="img-responsive">
					</div>
				</div>
				<div class="blockText leftBlock">
					<?php the_sub_field('service_description') ?>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
	</div>
</div>