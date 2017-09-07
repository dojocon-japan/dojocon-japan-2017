<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

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

<div class="hero" <?php if ( get_header_image() ) : ?>
	style="background-image: <?php header_image(); ?>;"
<?php endif; ?>>
	<div class="hero-text">
		<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
		<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		<?php if ( get_theme_mod( 'dojocon_date' ) && get_theme_mod( 'dojocon_day' ) ) : ?>
			<p class="dojocon-day">
				<span class="date"><?php echo esc_html( get_theme_mod( 'dojocon_date' ) ); ?></span>
				<span class="day"><?php echo esc_html( get_theme_mod( 'dojocon_day' ) ); ?></span>
			</p>
		<?php endif; ?>
		<?php if ( get_theme_mod( 'dojocon_venue' ) ) : ?>
			<p class="dojocon-venue">
				<span class="preposition">in</span>
				<span class="venue"><?php echo esc_html( get_theme_mod( 'dojocon_venue' ) ); ?></span>
			</p>
		<?php endif; ?>
	</div>
	<?php if ( ! get_header_image() ) : ?>
		<div class="hero-image">
			<img class="neon" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-neon.svg' ) ); ?>" alt="DojoCon Japan">
			<div class="shadow">
				<img class="bigtop-shadow" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-bigtop-shadow.svg' ) ); ?>">
				<img class="people-shadow" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-people-shadow.svg' ) ); ?>">
			</div>
			<img class="bigtop" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-bigtop.svg' ) ); ?>">
			<img class="people" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-people.svg' ) ); ?>">
			<img class="andyou" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-andyou.svg' ) ); ?>">
		</div>
	<?php endif; ?>
</div>
