<section class="front-page-content page page-<?php echo esc_attr( $post->post_name ); ?>">

	<h1 class="page-title"><?php the_title(); ?></h1>

	<?php if ( get_the_excerpt() ) : ?>
		<div class="page-excerpt">
			<?php the_excerpt(); ?>
		</div>
	<?php endif; ?>

	<?php $gold_sponsors = get_field( 'gold-sponsors' );
	if ( $gold_sponsors ) : ?>
		<h2>Gold Sponsors</h2>
		<ul class="gold-sponsors">
			<?php foreach ( $gold_sponsors as $key => $sponsor ) : ?>
				<li>
					<a href="<?php echo esc_url( $sponsor['url'] ); ?>">
						<img src="<?php echo esc_attr( $sponsor['logo']['sizes']['sponsor-logo'] ); ?>" alt="<?php esc_attr( $sponsor['logo']['alt'] ); ?>">
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>

	<?php $silver_sponsors = get_field( 'silver-sponsors' );
	if ( $silver_sponsors ) : ?>
		<h2 class="silver-sponsors">Silver Sponsors</h2>
		<ul>
			<?php foreach ( $silver_sponsors as $key => $sponsor ) : ?>
				<li>
					<a href="<?php echo esc_url( $sponsor['url'] ); ?>">
						<img src="<?php echo esc_attr( $sponsor['logo']['sizes']['sponsor-logo'] ); ?>" alt="<?php esc_attr( $sponsor['logo']['alt'] ); ?>">
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>

	<?php $bronze_sponsors = get_field( 'bronze-sponsors' );
	if ( $bronze_sponsors ) : ?>
		<h2>Bronze Sponsors</h2>
		<ul class="bronze-sponsors">
			<?php foreach ( $bronze_sponsors as $key => $sponsor ) : ?>
				<li>
					<a href="<?php echo esc_url( $sponsor['url'] ); ?>">
						<img src="<?php echo esc_attr( $sponsor['logo']['sizes']['sponsor-logo'] ); ?>" alt="<?php esc_attr( $sponsor['logo']['alt'] ); ?>">
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>

	<?php $inkind_sponsors = get_field( 'inkind-sponsors' );
	if ( $inkind_sponsors ) : ?>
		<h2>In-kind Sponsors</h2>
		<ul class="inkind-sponsors">
			<?php foreach ( $inkind_sponsors as $key => $sponsor ) : ?>
				<li>
					<a href="<?php echo esc_url( $sponsor['url'] ); ?>">
						<img src="<?php echo esc_attr( $sponsor['logo']['sizes']['sponsor-logo'] ); ?>" alt="<?php esc_attr( $sponsor['logo']['alt'] ); ?>">
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>

</section>
