<main class="main">

	<?php while( have_posts() ): the_post(); ?>

		<div class="post-meta">
			<h1 class="post-title"><?php the_title(); ?></h1>
			<?php $categories = get_the_terms( $post->ID, 'session-category' );
			if ( $categories ) : ?>
				<p>
					<?php foreach ( $categories as $cat ) : ?>
						<span class="session-category"><?php echo esc_html( $cat->name ); ?></span>
					<?php endforeach; ?>
				</p>
			<?php endif; ?>
			<time>[<?php the_field( 'start-time' ); ?> - <?php the_field( 'ending-time' ); ?>]</time>
		</div>

		<?php if ( ! get_field( 'hide-post-thumbnail' ) && has_post_thumbnail() ) : ?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail( 'full' ); ?>
			</div>
		<?php endif; ?>

		<div class="entry-content">

			<?php the_content(); ?>

			<?php $speakers = new WP_Query( array(
				'post_type' => 'speaker',
				'post__in'  => get_field( 'speakers' ),
			) );

			if ( $speakers->have_posts() ) : ?>

				<h2><?php _e( 'Speaker', 'dojocon-japan-2017' ); ?></h2>

				<div class="speakers">

					<?php while ( $speakers->have_posts() ) : $speakers->the_post(); ?>

						<div class="speaker">

							<?php if ( ! get_field( 'hide-post-thumbnail' ) && has_post_thumbnail() ) : ?>
								<div class="speaker-avatar">
									<?php the_post_thumbnail( 'speaker-avatar' ); ?>
								</div>
							<?php endif; ?>

							<h3 class="speaker-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

							<div class="speaker-description">
								<?php the_excerpt(); ?>
							</div>

						</div>

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
