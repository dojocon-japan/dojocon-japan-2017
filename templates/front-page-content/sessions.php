<?php
$sessions = new WP_Query( array(
	'posts_per_page' => 6,
	'post_status'    => 'publish',
	'post_type'      => 'session',
	'no_found_rows'  => true,
) );

if ( get_the_content() || $sessions->have_posts() ) : ?>

	<section id="front-page-<?php echo esc_attr( $post->post_name ); ?>" class="front-page-content page page-<?php echo esc_attr( $post->post_name ); ?>">

		<h1 class="page-title"><?php the_title(); ?></h1>

		<?php if ( get_the_excerpt() ) : ?>
			<div class="page-excerpt">
				<?php the_excerpt(); ?>
			</div>
		<?php endif; ?>

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail( 'full' ); ?>
			</div>
		<?php endif; ?>

		<?php if ( get_the_content() ) : ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		<?php endif; ?>

		<ul class="sessions">

			<?php while ( $sessions->have_posts() ) : $sessions->the_post(); ?>

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
