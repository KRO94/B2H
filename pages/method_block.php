<div class="method-block">
	<div class="container">
	<?php $query = new WP_Query(array('page_id'=>6)); ?>
	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		<div class="leftBlock method">
			<div class="title"><hr><?php the_title(); ?></div>
			<?php the_content(); ?>
		</div>
		<div class="rightBlock img">
			<img src="<?php echo get_template_directory_uri(); ?>/img/method_block_girl.png" alt="" class="img-responsive">
			<div class="text-v">Состояние позвоночника на 80% определяет здоровье человека в целом <hr></div>
		</div>
		<?php endwhile; endif; ?>
	</div>
</div>