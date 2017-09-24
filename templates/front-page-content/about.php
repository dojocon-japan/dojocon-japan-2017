<section id="front-page-<?php echo esc_attr( $post->post_name ); ?>" class="front-page-content page-<?php echo esc_attr( $post->post_name ); ?>">

	<h1 class="page-title"><?php the_title(); ?></h1>

	<?php if ( get_the_excerpt() ) : ?>
		<div class="page-excerpt">
			<?php the_excerpt(); ?>
		</div>
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<?php
	$photos  = get_field( '2016-archive-photos' );
	$movie   = get_field( '2016-archive-movie' );
	$outline = get_field( 'outline' );
	?>

	<?php if ( $photos || $movie ) : ?>

		<div class="dojocon-japan-2016-archive">

			<h3 class="dojocon-japan-2016-archive-title"><span>DojoCon Japan 2016 Archives</span></h3>

			<?php if ( $photos ) : ?>

				<h4 class="dojocon-japan-2016-archive-photo-title">Photo
					<?php if ( get_field( '2016-archive-photos-more-link') ) : ?>
						<a href="<?php the_field( '2016-archive-photos-more-link' ); ?>" class="button" target="_blank">More</a>
					<?php endif; ?>
				</h4>

				<ul class="dojocon-japan-2016-archive-photos js-dojocon-japan-2016-archive-photos">
					<?php foreach ( $photos as $photo ) : ?>
						<li><img src="<?php echo esc_url( $photo['sizes']['2016-archive-photo'] ); ?>"></li>
					<?php endforeach; ?>
				</ul>

			<?php endif; ?>

			<?php if ( $movie ) : ?>

				<h4 class="dojocon-japan-2016-archive-movie-title">Movie</h4>

				<div class="dojocon-japan-2016-archive-movie-outer">
					<div class="dojocon-japan-2016-archive-movie">
						<?php the_field( '2016-archive-movie' ); ?>
					</div>
				</div>

			<?php endif; ?>

		</div>

	<?php endif; ?>

	<?php if ( $outline ) : ?>
		<div class="entry-content outline-outer">
			<?php the_field( 'outline' ); ?>
		</div>
	<?php endif; ?>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="background-image">
			<?php the_post_thumbnail( 'full' ); ?>
		</div>
	<?php endif; ?>

</section>
