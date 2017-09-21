<?php get_header(); ?>

<main class="main">

	<?php while( have_posts() ): the_post(); ?>

		<div class="post-meta">
			<h1 class="post-title"><?php the_title(); ?></h1>
			<?php $area = get_field( 'space' );
			if ( $area ) : ?>
				<p class="area"><span><?php echo esc_html( $area ); ?></span></p>
			<?php endif; ?>
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


<?php get_footer(); ?>
