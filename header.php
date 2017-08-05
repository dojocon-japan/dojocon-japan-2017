<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">

	<?php if ( has_nav_menu( 'header-menu' ) ) : ?>
		<?php wp_nav_menu( array(
			'theme_location'  => 'header-menu',
			'menu_id'         => 'header-menu',
			'container'       => 'nav',
			'container_class' => 'header-nav',
		) ); ?>
	<?php endif; ?>

</header>

<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
