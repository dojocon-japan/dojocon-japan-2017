<section id="front-page-<?php echo esc_attr( $post->post_name ); ?>" class="front-page-content page-<?php echo esc_attr( $post->post_name ); ?>">

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
			<?php foreach ( $gold_sponsors as $sponsor ) : ?>
				<li>
					<a href="<?php echo esc_url( $sponsor['url'] ); ?>" target="_blank">
						<img src="<?php echo esc_attr( $sponsor['logo']['sizes']['sponsor-logo'] ); ?>" alt="<?php esc_attr( $sponsor['logo']['alt'] ); ?>">
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>

	<?php $silver_sponsors = get_field( 'silver-sponsors' );
	if ( $silver_sponsors ) : ?>
		<h2>Silver Sponsors</h2>
		<ul class="silver-sponsors">
			<?php foreach ( $silver_sponsors as $sponsor ) : ?>
				<li>
					<a href="<?php echo esc_url( $sponsor['url'] ); ?>" target="_blank">
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
			<?php foreach ( $bronze_sponsors as $sponsor ) : ?>
				<li>
					<a href="<?php echo esc_url( $sponsor['url'] ); ?>" target="_blank">
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
			<?php foreach ( $inkind_sponsors as $sponsor ) : ?>
				<li>
					<a href="<?php echo esc_url( $sponsor['url'] ); ?>" target="_blank">
						<img src="<?php echo esc_attr( $sponsor['logo']['sizes']['sponsor-logo'] ); ?>" alt="<?php esc_attr( $sponsor['logo']['alt'] ); ?>">
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>

	<?php $individual_sponsors = get_field( 'individual-sponsors' );
	if ( $individual_sponsors ) : ?>
		<h2>Individual Sponsors</h2>
		<ul class="individual-sponsors">
			<?php foreach ( $individual_sponsors as $sponsor ) : ?>
				<li><?php echo esc_html( $sponsor['name'] ); ?></li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

</section>
