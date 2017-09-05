<section class="front-page-content page page-<?php echo esc_attr( $post->post_name ); ?>">

	<h1 class="page-title"><?php the_title(); ?></h1>

	<?php if ( get_the_excerpt() ) : ?>
		<div class="page-excerpt">
			<?php the_excerpt(); ?>
		</div>
	<?php endif; ?>

	<div class="entry-content">

		<?php the_post_thumbnail( 'full' ); ?>

		<h2 class="main-event-title"><?php the_field( 'main-event-title' ); ?></h2>

		<?php the_content( '' ); ?>

		<?php $_post = $post;
		$args = array(
			'numberposts' => -1,
			'post_type'   => 'main-event',
		);
		$main_events = get_posts( $args );

		if ( $main_events ) : ?>

			<ul class="main-events">
				<?php foreach ( $main_events as $post ) : setup_postdata( $post );
					$labels = get_field( 'labels' );
					?>
					<li>
						<p class="event-time">[<?php the_field( 'start-time' ); ?>−<?php the_field( 'ending-time' ); ?>]</p>
						<h2 class="event-title"><?php the_title(); ?></h2>
						<p class="labels">
							<?php foreach ( $labels as $label ) : ?>
								<span class="label-<?php echo esc_attr( $label['value'] ); ?>"><?php echo esc_html( $label['label'] ); ?></span>
							<?php endforeach; ?>
						</p>
					</li>
				<?php endforeach; wp_reset_postdata(); ?>
			</ul>

		<?php endif; ?>

		<?php
		$post = $_post;
		setup_postdata( $post );
		?>

		<a href="<?php the_permalink(); ?>" class="button button-white">More</a>

	</div>

</section>
