<div class="gallery-page">
	<div class="container">
	<?php $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
	query_posts( array( 'paged' => $page, 'posts_per_page' => 4, 'page_id' => 8,'nopaging' => false) );
	?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="img-wrapper clearfix">
		<?php if(get_field('photo_page_main')): ?>
		<?php while(has_sub_field('photo_page_main')): ?>
			<div class="block">
				<div class="img">
				<?php $gallery_photo = get_sub_field('gallery_page_img') ?>
				<a href="<?php echo $gallery_photo['url']; ?>" data-fancybox="group" class='fancybox'>
					<img src="<?php echo $gallery_photo['url']; ?>" alt="" class="img-responsive">
				</a>
				</div>
				<div class="text"><?php the_sub_field('gallery_page_description') ?></div>
			</div>
		<?php endwhile; ?>
		<?php endif; ?>
		</div>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
		<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
	</div>
</div>