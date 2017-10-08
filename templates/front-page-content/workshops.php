<section id="front-page-<?php echo esc_attr( $post->post_name ); ?>" class="front-page-content page-<?php echo esc_attr( $post->post_name ); ?>">

	<h1 class="page-title"><?php the_title(); ?></h1>

	<?php if ( get_the_excerpt() ) : ?>
		<div class="page-excerpt">
			<?php the_excerpt(); ?>
		</div>
	<?php endif; ?>

	<div class="entry-content">

		<?php
		$children = get_posts( array(
			'post_parent' => get_the_ID(),
			'post_type'   => 'page',
			'post_status' => 'publish',
			'name'        => 'main-event',
		) );

		if ( $children ) :
			$post = array_shift( $children );
			setup_postdata( $post ); ?>

			<?php the_post_thumbnail( 'full' ); ?>

			<h2 class="main-event-title"><?php the_title(); ?></h2>

			<?php the_content( '' ); ?>

		<?php endif; ?>

		<?php $_post = $post;
		$args = array(
			'numberposts' => -1,
			'post_type'   => 'main-event',
		);
		$main_events = get_posts( $args );

		if ( $main_events ) : ?>

			<ul class="main-events">
				<?php foreach ( $main_events as $post ) : setup_postdata( $post );
					$labels = get_field( 'labels' ); ?>
					<li>
						<p class="event-time">[<?php the_field( 'start-time' ); ?>-<?php the_field( 'ending-time' ); ?>]</p>
						<h2 class="event-title"><?php the_title(); ?></h2>
						<?php if ( $labels ) : ?>
							<p class="workshop-labels">
								<?php foreach ( $labels as $label ) : ?>
									<span class="label-<?php echo esc_attr( $label['value'] ); ?>"><?php echo esc_html( $label['label'] ); ?></span>
								<?php endforeach; ?>
							</p>
						<?php endif; ?>
					</li>
				<?php endforeach; wp_reset_postdata(); ?>
			</ul>

		<?php endif; ?>

		<?php
		$post = $_post;
		setup_postdata( $post );
		?>

		<a href="<?php the_permalink(); ?>" class="button button-white main-event-more-button">More</a>

		<?php $args = array(
			'numberposts' => -1,
			'post_type'   => 'workshop',
		);
		$workshops = get_posts( $args );

		if ( $workshops ) : ?>

			<ul class="workshops">
				<?php foreach ( $workshops as $post ) : setup_postdata( $post );
					$labels = get_field( 'labels' ); ?>
					<li>
						<div class="post-thumbnail">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'workshop-post-thumbnail' ); ?>
							<?php else : ?>
								<img src="//via.placeholder.com/600x400/eee">
							<?php endif; ?>
						</div>
						<h2 class="workshop-title"><?php the_title(); ?></h2>
						<?php if ( $labels ) : ?>
							<p class="workshop-labels">
								<?php foreach ( $labels as $label ) : ?>
									<span class="label-<?php echo esc_attr( $label['value'] ); ?>"><?php echo esc_html( $label['label'] ); ?></span>
								<?php endforeach; ?>
							</p>
						<?php endif; ?>
						<a href="<?php the_permalink(); ?>" class="button button-white workshop-more-button">More</a>
					</li>
				<?php endforeach; wp_reset_postdata(); ?>
			</ul>

		<?php endif; ?>

		<?php
		$post = $_post;
		setup_postdata( $post );

		$timetable = get_page_by_path( 'timetable' );
		if ( $timetable ) : ?>
			<a href="<?php echo esc_url( get_the_permalink( $timetable ) ); ?>" class="button button-white timetable-button">Timetable</a>
		<?php endif; ?>

	</div>

</section>
