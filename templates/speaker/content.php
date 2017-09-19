<main class="main">

	<?php while( have_posts() ): the_post(); ?>

		<div class="post-meta">
			<h1 class="post-title"><?php the_title(); ?></h1>
			<p><?php the_field( 'name-alphabet' ); ?></p>
			<?php $links = get_field('external-links');
			if ( $links ) : ?>
				<ul>
					<?php foreach ( $links as $link ) : ?>
						<li>
							<a href="<?php echo esc_url( $link['url'] ); ?>" target="_blank">
								<?php echo esc_html( $link['type']['value'] ); ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>

		<div class="entry-content">

			<?php if ( ! get_field( 'hide-post-thumbnail' ) && has_post_thumbnail() ) : ?>
				<div class="speaker-avatar">
					<?php the_post_thumbnail( 'speaker-avatar' ); ?>
				</div>
			<?php endif; ?>

			<div class="speaker-description">
				<?php the_content(); ?>
			</div>

		</div>

	<?php endwhile ?>

</main>
