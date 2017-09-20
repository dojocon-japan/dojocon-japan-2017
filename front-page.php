<?php get_header(); ?>

<main class="main">

	<?php for ( $i = 1; $i <= 10; $i++ ) : ?>

		<?php if ( get_theme_mod( 'front_page_content_' . $i ) ) : ?>

			<?php
			$post = get_post( get_theme_mod( 'front_page_content_' . $i ) );
			setup_postdata( $post );
			set_query_var( 'front_page_content', $id );
			?>

			<?php if ( get_the_ID() === (int) get_option( 'page_for_posts' ) ) :
				get_template_part( 'templates/front-page-content/posts' );
			elseif ( locate_template( 'templates/front-page-content/' . $post->post_name . '.php' ) ) :
				get_template_part( 'templates/front-page-content/' . $post->post_name );
			else : ?>

				<section id="front-page-<?php echo esc_attr( $post->post_name ); ?>" class="front-page-content page-<?php echo esc_attr( $post->post_name ); ?>">

					<h1 class="page-title"><?php the_title(); ?></h1>

					<?php if ( get_the_excerpt() ) : ?>
						<div class="page-excerpt">
							<?php the_excerpt(); ?>
						</div>
					<?php endif; ?>

					<?php if ( has_post_thumbnail() ) : ?>
						<div class="post-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
					<?php endif; ?>

					<div class="entry-content">
						<?php the_content(); ?>
					</div>

				</section>

			<?php endif; ?>

		<?php endif; ?>

	<?php endfor; ?>

	<?php wp_reset_postdata(); ?>

</main>

<?php get_footer(); ?>
