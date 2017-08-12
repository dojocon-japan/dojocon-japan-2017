<?php get_header(); ?>

<main class="main">

	<?php for ( $i = 1; $i <= 10; $i++ ) : ?>

		<?php if ( get_theme_mod( 'front_page_content_' . $i ) ) : ?>

			<?php
			$post = get_post( get_theme_mod( 'front_page_content_' . $i ) );
			setup_postdata( $post );
			?>

			<section class="front-page-content page-<?php echo esc_attr( $post->post_name ); ?>">

				<h2>
					<span><?php the_title(); ?></span>
					<?php the_excerpt(); ?>
				</h2>

				<div class="entry-content">

					<?php the_content(); ?>

				</div>

			</section>

		<?php endif; ?>

	<?php endfor; ?>

	<?php wp_reset_postdata(); ?>

</main>

<?php get_footer(); ?>