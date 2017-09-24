<?php get_header(); ?>

<main class="main">

	<?php while( have_posts() ): the_post(); ?>

		<div class="post-meta">
			<h1 class="post-title"><?php the_title(); ?></h1>
			<?php $area = get_field( 'space' );
			if ( $area ) : ?>
				<p class="area"><span><?php echo esc_html( $area ); ?></span></p>
			<?php endif; ?>
		</div>

		<?php if ( ! get_field( 'hide-post-thumbnail' ) && has_post_thumbnail() ) : ?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail( 'full' ); ?>
			</div>
		<?php endif; ?>

		<div class="entry-content">
			<?php the_content(); ?>

			<?php $args = array(
				'numberposts' => -1,
				'post_type'   => 'main-event',
			);
			$main_events = get_posts( $args );

			if ( $main_events ) : ?>

				<?php foreach ( $main_events as $post ) : setup_postdata( $post );
					$labels = get_field( 'labels' ); ?>

					<div class="event keep-margin">
						<h2><?php the_title(); ?></h2>
						<div class="event-meta">
							<?php if ( $labels ) : ?>
								<p class="workshop-labels">
									<?php foreach ( $labels as $label ) : ?>
										<span class="label-<?php echo esc_attr( $label['value'] ); ?>"><?php echo esc_html( $label['label'] ); ?></span>
									<?php endforeach; ?>
								</p>
							<?php endif; ?>
							<p class="event-time">[<?php the_field( 'start-time' ); ?>−<?php the_field( 'ending-time' ); ?>]</p>
						</div>

						<div class="event-description">
							<?php the_content(); ?>
						</div>

						<?php $entry_url = get_field( 'entry-url' );
						if ( $entry_url ) : ?>
							<div class="workshop-entry">
								<h2><?php _e( 'Workshop Entry', 'dojocon-japan-2017' ); ?></h2>
								<?php $notes = get_field( 'notes' );
								if ( $notes ) : ?>
									<ul class="notes">
										<?php foreach ( $notes as $note ) : ?>
											<li><?php echo esc_html( $note['item'] ); ?></li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
								<a href="<?php echo esc_url( $entry_url ); ?>" class="button button-primary workshop-entry-button" target="_blank">Entry</a>
							</div>
						<?php endif; ?>

					</div>

				<?php endforeach; ?>

			<?php endif; ?>
		</div>

	<?php endwhile ?>

</main>


<?php get_footer(); ?>
