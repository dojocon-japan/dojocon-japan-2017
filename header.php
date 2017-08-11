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

			<button class="entry-nav-box-close button-close" type="button">Close</button>

		</div>
		<button class="entry-nav-box-toggle" type="button">Entry</button>
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

<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
