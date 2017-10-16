<?php
$sessions = new WP_Query( array(
	'posts_per_page' => -1,
	'post_status'    => 'publish',
	'post_type'      => 'session',
	'no_found_rows'  => true,
) );

if ( get_the_content() || $sessions->have_posts() ) : ?>

	<section id="front-page-<?php echo esc_attr( $post->post_name ); ?>" class="front-page-content page-<?php echo esc_attr( $post->post_name ); ?>">

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
					<?php $session_categories = get_the_terms( get_the_ID(), 'session-category' );
					if ( $session_categories ) : ?>
						<p class="session-category">
							<?php foreach ( $session_categories as $cat ) : ?>
								<span><?php echo esc_html( $cat->name ); ?></span>
							<?php endforeach; ?>
						</p>
					<?php endif; ?>
					<h2><?php the_title(); ?></h2>
					<div class="flex">
						<p class="session-time">[<?php the_field( 'start-time' ); ?>-<?php the_field( 'ending-time' ); ?>]</p>
						<?php $speakers = get_posts( array(
							'post_type' => 'speaker',
							'post__in'  => get_field( 'speakers' ),
						) );
						if ( $speakers ) : ?>
							<ul class="speakers">
								<?php foreach ( $speakers as $speaker ) : ?>
									<li><?php echo esc_html( $speaker->post_title); ?></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</div>
					<a href="<?php the_permalink(); ?>" class="button button-mid-night session-more-button">More</a>
				</li>

			<?php endwhile; ?>

		</ul>

		<div class="entry-content">
			<?php $timetable = get_page_by_path( 'timetable' );
			if ( 'publish' == get_post_status( $timetable ) ) : ?>
				<div class="timetable-button-outer">
					<a href="<?php echo esc_url( get_the_permalink( $timetable ) ); ?>" class="button button-mid-night button-block timetable-button">Timetable</a>
					<p>セッション・ワークショップのタイムテーブル</p>
				</div>
			<?php endif; ?>
		</div>

	</section>

<?php endif; ?>
