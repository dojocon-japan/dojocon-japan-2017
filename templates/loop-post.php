<section class="archive archive-posts">

	<?php if( have_posts() ): ?>

		<ul class="posts">

			<?php while( have_posts() ): the_post(); ?>

				<li>
					<a href="<?php the_permalink(); ?>">
						<div class="post-thumbnail">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'post-thumbnail' ); ?>
							<?php else : ?>
								<img src="//via.placeholder.com/300x200/eee">
							<?php endif; ?>
						</div>
						<time datetime="<?php echo get_the_date( DATE_W3C ); ?>"><?php echo get_the_date(); ?></time>
						<h2><?php the_title(); ?></h2>
					</a>
				</li>

			<?php endwhile ?>

		</ul>

		<?php the_posts_pagination(); ?>

	<?php endif; ?>

</section>
