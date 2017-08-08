<?php

if ( ! function_exists( 'dojoconjapan2017_setup' ) ) {
/**
 * Set up theme defaults and registers support for various WordPress feaures.
 */
function dojoconjapan2017_setup() {
	load_theme_textdomain( 'bathe', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );
	add_theme_support( 'custom-background', apply_filters( 'dojoconjapan2017_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	register_nav_menus( array(
		'global'    => esc_html__( 'Global',    'dojoconjapna2017' ),
		'entry'     => esc_html__( 'Entry',     'dojoconjapna2017' ),
		'workshop'  => esc_html__( 'Workshop',  'dojoconjapna2017' ),
		'coderdojo' => esc_html__( 'CoderDojo', 'dojoconjapna2017' ),
		'footer'    => esc_html__( 'Footer',    'dojoconjapna2017' ),
	) );
}

}
add_action( 'after_setup_theme', 'dojoconjapan2017_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dojoconjapan2017_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dojoconjapan2017_content_width', 960 );
}
add_action( 'after_setup_theme', 'dojoconjapan2017_content_width', 0 );

/**
 * Register widget area.
 */
function dojoconjapan2017_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bathe' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'dojoconjapan2017_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dojoconjapan2017_scripts() {

	wp_enqueue_style( 'bathe-style', get_template_directory_uri() . '/assets/css/main.css' );

	wp_enqueue_script( 'bathe-script', get_template_directory_uri() . '/assets/js/main.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dojoconjapan2017_scripts' );
