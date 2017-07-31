<?php get_header(); ?>

	<div class="content-page">
			<?php get_template_part('pages/block_after_header_2'); ?>
		<div class="container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="post_content">
					<?php the_content(); ?>
				</div>

			<?php endwhile; endif; ?>
		</div>
	</div>
	
<?php get_footer(); ?>