<?php
$blog_posts = new WP_Query( array(
	'posts_per_page' => 6,
	'post_status'    => 'publish',
	'no_found_rows'  => true,
) );

if ( $blog_posts->have_posts() ) : ?>

	<section id="front-page-posts" class="front-page-content page page-posts">

		<h1 class="page-title"><?php the_title(); ?></h1>

		<?php if ( get_the_excerpt() ) : ?>
			<div class="page-excerpt">
				<?php the_excerpt(); ?>
			</div>
		<?php endif; ?>

		<ul class="posts">

			<?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>

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

			<?php endwhile; ?>

		</ul>

	</section>

<?php endif; ?>
