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
		</div>

	<?php endwhile ?>

</main>
