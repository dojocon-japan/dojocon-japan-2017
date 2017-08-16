<?php if ( is_page( 'about' ) ): ?>

	<?php
	$photos  = get_field( '2016-archive-photos' );
	$movie   = get_field( '2016-archive-movie' );
	$outline = get_field( 'outline' );
	?>

	<?php if ( $photos || $movie ) : ?>

		<div class="dojocon-japan-2016-archive">

			<h3 class="dojocon-japan-2016-archive-title"><span>DojoCon Japan 2016 Archives</span></h3>

			<?php if ( $photos ) : ?>

				<h4 class="dojocon-japan-2016-archive-photo-title">Photo</h4>

				<?php foreach ( $photos as $photo ) : ?>

					<img src="<?php echo esc_url( $photo['sizes']['2016-archive-photo'] ); ?>">

				<?php endforeach; ?>

			<?php endif; ?>

			<?php if ( $movie ) : ?>

				<h4 class="dojocon-japan-2016-archive-movie-title">Movie</h4>

				<div class="dojocon-japan-2016-archive-movie">
					<?php the_field( '2016-archive-movie' ); ?>
				</div>

			<?php endif; ?>

		</div>

	<?php endif; ?>

	<?php if ( $outline ) : ?>

		<?php the_field( 'outline' ); ?>

	<?php endif; ?>

<?php endif;
