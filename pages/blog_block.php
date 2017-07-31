<div class="blog-block">
	<div class="container">
		<div class="leftBlock choose">
			<div class="title">Блог. Полезная информация</div>
			<div>
				<div class="chBlock active">
					<hr>Питание
				</div>
				<div class="chBlock">
					<hr>Занятия физкультурой
				</div>
				<div class="chBlock">
					<hr>Двигательный стререотип
				</div>
			</div>
		</div>
		<div class="rightBlock posts">
			<div class="blog_1 active">
			<?php $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
			query_posts("paged=$page&cat=4&showposts=3");
			?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?>
			</div>
			<div class="blog_2">
				<?php $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts("paged=$page&cat=5&showposts=3");
				?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?>
			</div>
			<div class="blog_3">
				<?php $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts("paged=$page&cat=6&showposts=3");
				?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>