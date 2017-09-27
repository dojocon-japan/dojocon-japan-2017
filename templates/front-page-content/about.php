<section id="front-page-<?php echo esc_attr( $post->post_name ); ?>" class="front-page-content has-hero page-<?php echo esc_attr( $post->post_name ); ?>">

	<div class="hero">

		<div class="hero-text">
			<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
			<p class="site-description"><a href="<?php echo esc_url( home_url( '#front-page-about' ) ); ?>"><?php bloginfo( 'description' ); ?></a></p>
			<?php if ( get_theme_mod( 'dojocon_date' ) && get_theme_mod( 'dojocon_day' ) ) : ?>
				<p class="dojocon-day">
					<span class="date"><?php echo esc_html( get_theme_mod( 'dojocon_date' ) ); ?></span>
					<span class="day"><?php echo esc_html( get_theme_mod( 'dojocon_day' ) ); ?></span>
				</p>
			<?php endif; ?>
			<?php if ( get_theme_mod( 'dojocon_venue' ) ) : ?>
				<p class="dojocon-venue">
					<span class="preposition">in</span>
					<span class="venue"><?php echo esc_html( get_theme_mod( 'dojocon_venue' ) ); ?></span>
				</p>
			<?php endif; ?>
		</div>
		<?php if ( ! get_header_image() ) : ?>
			<div class="hero-image">
				<img class="neon" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-neon.svg' ) ); ?>" alt="DojoCon Japan">
				<div class="shadow">
					<img class="bigtop-shadow" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-bigtop-shadow.svg' ) ); ?>">
					<img class="people-shadow" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-people-shadow.svg' ) ); ?>">
				</div>
				<img class="bigtop" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-bigtop.svg' ) ); ?>">
				<img class="people" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-people.svg' ) ); ?>">
				<img class="andyou" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-andyou.svg' ) ); ?>">
			</div>
		<?php endif; ?>
	</div>

	<div class="page-content">
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

	</div>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="background-image">
			<?php the_post_thumbnail( 'full' ); ?>
		</div>
	<?php endif; ?>
</section>
