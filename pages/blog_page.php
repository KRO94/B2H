<div class="blog-page">
	<div class="container">
		<div class="row">
			<div class="post-wrapper">
			<?php $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
			query_posts("paged=$page&cat=3&showposts=4");
			?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-sm-6">
					<div class="postBlogBlock">
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="blockImg">
							<?php echo get_the_post_thumbnail(); ?>
							<span class="btn-press more">Подробнее <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
						</a>
						<div class="blockText">
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="name"><?php the_title(); ?></a>
							<div class="date"><?php the_time('j F Y'); ?></div>
							<p><?php the_field('brief_description'); ?></p>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?>
			</div>
		</div>
		<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
	</div>
</div>