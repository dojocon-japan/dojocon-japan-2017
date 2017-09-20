<?php
$blog_posts = new WP_Query( array(
	'posts_per_page' => -1,
	'post_status'    => 'publish',
	'post_type'      => 'speaker',
	'no_found_rows'  => true,
) );

if ( $blog_posts->have_posts() ) : ?>

	<section id="front-page-<?php echo esc_attr( $post->post_name ); ?>" class="front-page-content page page-<?php echo esc_attr( $post->post_name ); ?>">

		<h1 class="page-title"><?php the_title(); ?></h1>

		<?php if ( get_the_excerpt() ) : ?>
			<div class="page-excerpt">
				<?php the_excerpt(); ?>
			</div>
		<?php endif; ?>

		<ul class="speakers">

			<?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>

				<li>
					<div class="speaker-avatar">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'speaker-avatar' ); ?>
						<?php else : ?>
							<img src="//via.placeholder.com/400/eee">
						<?php endif; ?>
					</div>
					<h2><?php the_title(); ?></h2>
					<p><?php the_field( 'name-alphabet' ); ?></p>
					<a class="button button-white" href="<?php the_permalink(); ?>">More</a>
				</li>

			<?php endwhile; ?>

		</ul>

	</section>

<?php endif; ?>
