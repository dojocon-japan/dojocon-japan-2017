<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site-container">

<header class="header sliding-panel-content">

	<?php if ( has_nav_menu( 'global' ) ) : ?>
		<div class="global-nav-box">
			<h1 class="menu-title">Menu</h1>
			<?php wp_nav_menu( array(
				'theme_location'  => 'global',
				'menu_id'         => 'global-menu',
				'container'       => 'nav',
				'container_class' => 'global-nav',
			) ); ?>
		</div>
	<?php endif; ?>

	<?php if ( has_nav_menu( 'entry' ) || has_nav_menu( 'workshop' ) ) : ?>
		<div class="entry-nav-box">

			<?php if ( has_nav_menu( 'entry' ) ) : ?>
				<h1 class="menu-title">Entry</h1>
				<?php wp_nav_menu( array(
					'theme_location'  => 'entry',
					'menu_id'         => 'entry-menu',
					'container'       => 'nav',
					'container_class' => 'entry-nav',
				) ); ?>
			<?php endif; ?>

			<?php if ( has_nav_menu( 'workshop' ) ) : ?>
				<p class="workshop-note">以下は、DojoCon Japan 2017参加登録後、お申込みください。</p>
				<?php wp_nav_menu( array(
					'theme_location'  => 'workshop',
					'menu_id'         => 'workshop-menu',
					'container'       => 'nav',
					'container_class' => 'workshop-nav',
				) ); ?>
			<?php endif; ?>

			<button class="entry-nav-box-close button-close js-entry-nav-box-close" type="button">Close</button>

		</div>
		<button class="entry-nav-box-toggle js-entry-nav-box-toggle" type="button">Entry</button>
		<div class="entry-nav-fade-screen js-entry-nav-fade-screen"></div>
	<?php endif; ?>

	<?php if ( has_nav_menu( 'coderdojo' ) ) : ?>
		<?php wp_nav_menu( array(
			'theme_location'  => 'coderdojo',
			'menu_id'         => 'coderdojo-menu',
			'container'       => 'nav',
			'container_class' => 'coderdojo-nav',
		) ); ?>
	<?php endif; ?>

</header>

<button class="hamburger-box js-sliding-panel-toggle" type="button">
	<span class="hamburger">
		<span class="hamburger-inner">Menu</span>
	</span>
</button>

<?php if ( is_home() ) : ?>
	<header class="archive-header">
		<h1 class="site-title js-site-title"><?php bloginfo( 'name' ); ?></h1>
		<h2 class="archive-title"><?php $page_for_posts = get_option( 'page_for_posts' );
		if ( $page_for_posts ) : ?>
			<?php echo get_the_title( $page_for_posts ); ?>
		<?php else : ?>
			<?php _e( 'Posts' ); ?>
		<?php endif; ?></h2>
	</header>

<?php elseif ( is_archive() ) : ?>
	<header class="archive-header">
		<h1 class="site-title js-site-title"><?php bloginfo( 'name' ); ?></h1>
		<h2 class="archive-title"><?php post_type_archive_title(); ?></h2>
	</header>

<?php elseif ( ! ( is_home() || is_front_page() ) && is_singular() ) : ?>
	<header class="post-header">
		<h1 class="site-title js-site-title"><?php bloginfo( 'name' ); ?></h1>
		<h2 class="post-type-title"><?php dojoconjapan2017_single_post_type_title(); ?></h2>
	</header>

<?php elseif ( is_404() ) : ?>
	<header class="post-header">
		<h1 class="site-title js-site-title"><?php bloginfo( 'name' ); ?></h1>
		<h2 class="post-type-title">404</h2>
	</header>

<?php endif ?>
