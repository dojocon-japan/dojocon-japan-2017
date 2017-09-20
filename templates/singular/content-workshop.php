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
			<p class="area"><span><?php echo esc_html( get_field( 'area')['label'] ); ?>エリア</span></p>
		</div>

		<?php if ( ! get_field( 'hide-post-thumbnail' ) && has_post_thumbnail() ) : ?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail( 'full' ); ?>
			</div>
		<?php endif; ?>

		<div class="entry-content">
			<?php the_content(); ?>

			<?php // $entry_url = get_field( 'entry-url' );
			$entry_url = true;
			if ( $entry_url ) : ?>
				<div class="workshop-entry">
					<h2><?php _e( 'Workshop Entry', 'dojocon-japan-2017' ); ?></h2>
					<a href="<?php echo esc_url( $entry_url ); ?>" class="button button-primary workshop-entry-button" target="_blank">Entry</a>
				</div>
			<?php endif; ?>
		</div>

	<?php endwhile ?>

</main>
