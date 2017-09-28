<?php

if ( ! function_exists( 'dojoconjapan2017_setup' ) ) {
/**
 * Set up theme defaults and registers support for various WordPress feaures.
 */
function dojoconjapan2017_setup() {
	load_theme_textdomain( 'dojocon-japan-2017', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_image_size( 'post-thumbnail', 300, 200, true );

	add_image_size( '2016-archive-photo', 940, 517, true );

	register_nav_menus( array(
		'global'    => esc_html__( 'Global',    'dojocon-japan-2017' ),
		'entry'     => esc_html__( 'Entry',     'dojocon-japan-2017' ),
		'workshop'  => esc_html__( 'Workshop',  'dojocon-japan-2017' ),
		'coderdojo' => esc_html__( 'CoderDojo', 'dojocon-japan-2017' ),
		'footer'    => esc_html__( 'Footer',    'dojocon-japan-2017' ),
	) );

	add_post_type_support( 'page', 'excerpt' );
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
		'name'          => esc_html__( 'Sidebar', 'dojocon-japan-2017' ),
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

	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' );

	wp_enqueue_style( 'dojocon-japan-2017-style', get_template_directory_uri() . '/assets/css/main.css' );

	wp_enqueue_script( 'dojocon-japan-2017-script', get_template_directory_uri() . '/assets/js/main.js', array(), '20170925191704', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dojoconjapan2017_scripts' );

/**
 * Customizer
 */
function dojoconjapan2017_customize_register( $wp_customize ) {
	// Date
	$wp_customize->add_setting( 'dojocon_date', array(
		'capability' => 'manage_options',
	) );

	$wp_customize->add_control( 'dojocon_date', array(
		'label'    => __( 'Date', 'dojocon-japan-2017' ),
		'section'  => 'title_tagline',
		'priority' => 100,
	) );

	// Date
	$wp_customize->add_setting( 'dojocon_day', array(
		'capability' => 'manage_options',
	) );

	$wp_customize->add_control( 'dojocon_day', array(
		'label'    => _x( 'Day', 'Day of the week', 'dojocon-japan-2017' ),
		'section'  => 'title_tagline',
		'priority' => 110,
	) );

	// Venue
	$wp_customize->add_setting( 'dojocon_venue', array(
		'capability' => 'manage_options',
	) );

	$wp_customize->add_control( 'dojocon_venue', array(
		'label'    => __( 'Venue', 'dojocon-japan-2017' ),
		'section'  => 'title_tagline',
		'priority' => 120,
	) );

	// Copyright
	$wp_customize->add_setting( 'copyright', array(
		'default'    => __( 'DojoCon Japan 2017 Organization', 'dojocon-japan-2017' ),
		'capability' => 'manage_options',
	) );

	$wp_customize->add_control( 'copyright', array(
		'label'    => __( 'Copyright', 'dojocon-japan-2017' ),
		'section'  => 'title_tagline',
		'priority' => 130,
	) );

	// CoderDojo Foundation Title
	$wp_customize->add_setting( 'coderdojo_foundation_title', array(
		'default'    => __( 'Under the Auspices of', 'dojocon-japan-2017' ),
		'capability' => 'edit_theme_options',
	) );

	$wp_customize->add_control( 'coderdojo_foundation_title', array(
		'label'    => __( 'CoderDojo Foundation Title', 'dojocon-japan-2017' ),
		'section'  => 'title_tagline',
		'priority' => 140,
	) );

	// CoderDojo Foundation Descritption
	$wp_customize->add_setting( 'coderdojo_foundation_description', array(
		'default'    => _x( 'Under the Auspices of', 'CoderDojo Foundation description', 'dojocon-japan-2017' ),
		'capability' => 'edit_theme_options',
	) );

	$wp_customize->add_control( 'coderdojo_foundation_description', array(
		'label'    => __( 'CoderDojo Foundation Descritption', 'dojocon-japan-2017' ),
		'section'  => 'title_tagline',
		'priority' => 150,
	) );

	// CoderDojo Foundation Logo
	$wp_customize->add_setting( 'coderdojo_foundation_logo', array(
		'default'    => '',
		'capability' => 'edit_theme_options',
		'type'       => 'theme_mod',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'coderdojo_foundation_logo', array(
		'label'    => __( 'CoderDojo Foundation Logo', 'dojocon-japan-2017' ),
		'section'  => 'title_tagline',
		'priority' => 160,
	) ) );

	// CoderDojo Foundation URL
	$wp_customize->add_setting( 'coderdojo_foundation_url', array(
		'default'    => 'https://coderdojo.com/',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'coderdojo_foundation_url', array(
		'label'    => __( 'CoderDojo Foundation URL', 'dojocon-japan-2017'),
		'section'  => 'title_tagline',
		'priority' => 170,
	));

	// CoderDojo Fundation Background Image
	$wp_customize->add_setting( 'coderdojo_foundation_background_image', array(
		'default'    => '',
		'capability' => 'edit_theme_options',
		'type'       => 'theme_mod',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'coderdojo_foundation_background_image', array(
		'label'    => __( 'CoderDojo Foundation Background Image', 'dojocon-japan-2017' ),
		'section'  => 'title_tagline',
		'priority' => 180,
	) ) );

	// Theme Options
	$wp_customize->add_section( 'theme_options', array(
		'title'    => __( 'Theme Options' ),
		'priority' => 130,
	) );

	for ( $i = 1; $i <= 10; $i++ ) {
		$wp_customize->add_setting( 'front_page_content_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'absint',
		) );

		$wp_customize->add_control( 'front_page_content_' . $i, array(
			'label'          => __( 'Front Page Content ', 'dojocon-japan-2017' ) . $i,
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
		) );
	}
}
add_action( 'customize_register', 'dojoconjapan2017_customize_register' );

function dojoconjapan2017_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template', 'dojoconjapan2017_front_page_template' );

function dojoconjapan2017_auto_embed_container( $content ) {
	$content = preg_replace( '#<p>(\s*<iframe[^>]+src=["\'](https?:)?//www\.google\.com/maps/embed\?)#', '<p class="googlemaps-container">$1', $content );
	return $content;
}
add_filter( 'the_content', 'dojoconjapan2017_auto_embed_container' );

function dojoconjapan2017_single_post_type_title() {
	$page_for_posts_id = (int) get_option( 'page_for_posts' );
	if ( is_singular( 'post' ) && $page_for_posts_id ) {
		echo get_the_title( $page_for_posts_id );
	} elseif ( is_page( 'workshops/main-event' ) ) {
		echo 'Workshops';
	} elseif ( is_page() ) {
		the_title();
	} else {
		$post_type_obj = get_post_type_object( get_post_type() );
		$ja = array( 'スピーカー', 'ワークショップ', 'セッション' );
		$en = array( 'Speaker', 'Workshop', 'Session' );
		echo str_replace( $ja, $en, $post_type_obj->labels->singular_name );
	}
}

function dojoconjapan2017_foundation_background_image_url() {
	$id = get_theme_mod( 'coderdojo_foundation_background_image' );

	if ( $id ) {
		$url = wp_get_attachment_url( $id );
		echo esc_url( $url );
	}
}

function dojoconjapan2017_foundation() {
	$title = get_theme_mod( 'coderdojo_foundation_title' );
	$desc  = get_theme_mod( 'coderdojo_foundation_description' );
	$logo  = get_theme_mod( 'coderdojo_foundation_logo' );
	$url   = get_theme_mod( 'coderdojo_foundation_url' );
	$bg    = get_theme_mod( 'coderdojo_foundation_background_image' );
	$bg    = $bg ? ' style="background-image: url(' . esc_url( $bg ) . ');"' : $bg;
	$html  = '';

	if ( $logo ) {
		$html .= $url ? '<a class="coderdojo-foundation-outer" href="' . esc_url( $url ) . '" target="_blank">' : '';
		$html .= '<div class="coderdojo-foundation"' . $bg . '>';
		$html .= '<h1 class="coderdojo-foundation-title js-coderdojo-foundation-title">' . esc_html( $title ) . '</h1>';
		$html .= '<h2 class="coderdojo-foundation-description">' . esc_html( $desc ) . '</h2>';
		$html .= '<p class="coderdojo-foundation-logo">';
		$html .= '<img src="' . esc_url( $logo ) . '" alt="CoderDojo Foundation">';
		$html .= '</p>';
		$html .= '</div>';
		$html .= $url ? '</a>' : '';
		echo $html;
	}
}
