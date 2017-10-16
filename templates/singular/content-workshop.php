<main class="main">

	<?php while( have_posts() ): the_post(); ?>

		<div class="post-meta">
			<h1 class="post-title"><?php the_title(); ?></h1>
			<?php $labels = get_field( 'labels' );
			if ( $labels ) :?>
				<p class="workshop-labels">
					<?php foreach ( $labels as $label ) : ?>
						<span class="label-<?php echo esc_attr( $label['value'] ); ?>"><?php echo esc_html( $label['label'] ); ?></span>
					<?php endforeach; ?>
				</p>
			<?php endif; ?>
			<time>[<?php the_field( 'start-time' ); ?> - <?php the_field( 'ending-time' ); ?>]</time>
			<?php $area = get_field( 'area');
			if ( $area ) : ?>
				<p class="area"><span><?php echo esc_html( $area['label'] ); ?>エリア</span></p>
			<?php endif; ?>
		</div>

		<?php if ( ! get_field( 'hide-post-thumbnail' ) && has_post_thumbnail() ) : ?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail( 'full' ); ?>
			</div>
		<?php endif; ?>

		<div class="entry-content">
			<?php the_content(); ?>

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
