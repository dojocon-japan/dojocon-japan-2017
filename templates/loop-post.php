<section class="archive archive-posts">

	<?php $page_for_posts = get_option( 'page_for_posts' );
	if ( $page_for_posts ) : ?>

		<h1 class="archive-title js-archive-title"><?php echo get_the_title( $page_for_posts ); ?></h1>

		<?php if ( get_the_excerpt( $page_for_posts ) ) : ?>
			<div class="archive-excerpt">
				<?php echo apply_filters( 'the_excerpt', get_the_excerpt( $page_for_posts ) ); ?>
			</div>
		<?php endif; ?>

	<?php else : ?>
		<h1 class="archive-title"><?php _e( 'Posts' ); ?></h1>
	<?php endif; ?>

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

	<?php endif; ?>

</section>
