<main class="main">

	<?php while( have_posts() ): the_post(); ?>

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
