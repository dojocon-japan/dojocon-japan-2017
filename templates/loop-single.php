<main class="main">

	<?php while( have_posts() ): the_post(); ?>

		<div class="post-meta">
			<h1><?php the_title(); ?></h1>
			<time><?php the_date(); ?></time>
		</div>

		<div class="entry-content">
			<?php the_content(); ?>
		</div>

	<?php endwhile ?>

</main>
