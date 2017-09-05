<section class="front-page-content page page-<?php echo esc_attr( $post->post_name ); ?>">

	<h1 class="page-title"><?php the_title(); ?></h1>

	<?php if ( get_the_excerpt() ) : ?>
		<div class="page-excerpt">
			<?php the_excerpt(); ?>
		</div>
	<?php endif; ?>

	<div class="entry-content">

		<?php the_post_thumbnail( 'full' ); ?>

		<h2 class="main-event-title"><?php the_field( 'main-event-title' ); ?></h2>

		<?php the_content( '' ); ?>

	</div>

</section>
