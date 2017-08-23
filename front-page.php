<?php get_header(); ?>

<main class="main">

	<?php for ( $i = 1; $i <= 10; $i++ ) : ?>

		<?php if ( get_theme_mod( 'front_page_content_' . $i ) ) : ?>

			<?php
			$post = get_post( get_theme_mod( 'front_page_content_' . $i ) );
			setup_postdata( $post );
			?>

			<section class="front-page-content page page-<?php echo esc_attr( $post->post_name ); ?>">

				<h1 class="page-title"><?php the_title(); ?></h1>

				<?php if ( get_the_excerpt() ) : ?>
					<div class="page-excerpt">
						<?php the_excerpt(); ?>
					</div>
				<?php endif; ?>

				<?php get_template_part( 'templates/front-page-content/about' ); ?>

			</section>

		<?php endif; ?>

	<?php endfor; ?>

	<?php wp_reset_postdata(); ?>

</main>

<?php get_footer(); ?>