<div class="services-block">
	<div class="container">
		<div class="title"><hr>Услуги и цены</div>
		<?php $query = new WP_Query(array('page_id'=>10)); ?>
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		<div class="service-wrapper clearfix">
		<?php if(get_field('service_block')): ?>
		<?php while(has_sub_field('service_block')): ?>
			<div class="serviceBlock">
				<div class="service">
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="name"><?php the_sub_field('service_name') ?><br><hr></a>
					<?php $photo_service = get_sub_field('service_img'); ?>
					<img src="<?php echo $photo_service['url']; ?>" alt="" class="img-responsive">
					<div class="price"><?php the_sub_field('service_price') ?> <span>грн.</span></div>
					<span><?php the_sub_field('service_duration') ?></span>
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
</div>