<main class="main">

	<?php while( have_posts() ): the_post(); ?>

		<div class="post-meta">
			<h1 class="post-title"><?php the_title(); ?></h1>
			<p><?php the_field( 'name-alphabet' ); ?></p>
			<?php $links = get_field('external-links');
			if ( $links ) : ?>
				<ul class="links">
					<?php foreach ( $links as $link ) : ?>
						<li>
							<a href="<?php echo esc_url( $link['url'] ); ?>" target="_blank">
								<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icon-' . $link['type']['value'] . '.svg' ) ); ?>" alt="<?php echo esc_html( $link['type']['value'] ); ?>">
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>

		<div class="entry-content">

			<div class="speaker-detail">
				<?php if ( ! get_field( 'hide-post-thumbnail' ) && has_post_thumbnail() ) : ?>
					<div class="speaker-avatar">
						<?php the_post_thumbnail( 'speaker-avatar' ); ?>
					</div>
				<?php endif; ?>

				<div class="speaker-description">
					<?php the_content(); ?>
				</div>
			</div>

			<?php $sessions = new WP_Query( array(
				'post_type' => 'session',
				'post__in'  => get_field( 'sessions' ),
			) );

			if ( $sessions->have_posts() ) : ?>

				<h2><?php _e( 'Session', 'dojocon-japan-2017' ); ?></h2>

				<div class="sessions">

					<?php while ( $sessions->have_posts() ) : $sessions->the_post(); ?>


						<h3 class="session-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

						<p class="session-meta">
							<?php $categories = get_the_terms( $post->ID, 'session-category' );
							if ( $categories ) : ?>
								<?php foreach ( $categories as $cat ) : ?>
									<span class="session-category"><?php echo esc_html( $cat->name ); ?></span>
								<?php endforeach; ?>
							<?php endif; ?>
							<span class="session-time">[<?php the_field( 'start-time' ); ?> - <?php the_field( 'ending-time' ); ?>]</span>
						</p>

					<?php endwhile; ?>

				</div>

			<?php endif; wp_reset_postdata(); ?>

			<?php $timetable = get_page_by_path( 'timetable' );
			if ( 'publish' == get_post_status( $timetable ) ) : ?>
				<div class="timetable-button-outer">
					<a href="<?php echo esc_url( get_the_permalink( $timetable ) ); ?>" class="button button-secondary button-block timetable-button">Timetable</a>
					<p>セッション・ワークショップのタイムテーブル</p>
				</div>
			<?php endif; ?>

		</div>

	<?php endwhile ?>

</main>
