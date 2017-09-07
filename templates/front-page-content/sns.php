<section id="front-page-<?php echo esc_attr( $post->post_name ); ?>" class="front-page-content page page-<?php echo esc_attr( $post->post_name ); ?>">

	<h1 class="page-title"><?php the_title(); ?></h1>

	<p class="follow-us"><span class="follow">Follow</span> <span class="us">Us!</span></p>

	<?php if ( get_the_excerpt() ) : ?>
		<div class="page-excerpt">
			<?php the_excerpt(); ?>
		</div>
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

</section>
