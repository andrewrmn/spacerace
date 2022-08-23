<?php
/**
 * spacerace2021 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package spacerace2021
 */

// update_option( 'siteurl', 'http://local.spacerace' );
// update_option( 'home', 'http://local.spacerace' );

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'spacerace2021_setup' ) ) :
	function spacerace2021_setup() {
		load_theme_textdomain( 'spacerace2021', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'spacerace2021' ),
				'menu-2' => esc_html__( 'Slide out', 'spacerace2021' ),
				'footer-1' => esc_html__( 'Footer column 1', 'spacerace2021' ),
				'footer-2' => esc_html__( 'Footer column 2', 'spacerace2021' ),
				'footer-legal' => esc_html__( 'Footer legal menu', 'spacerace2021' )
			)
		);

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'spacerace2021_setup' );


function spacerace2021_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'spacerace2021' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'spacerace2021' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'spacerace2021_widgets_init' );


// Enqueue scripts and styles.
function spacerace2021_scripts() {
	wp_enqueue_style( 'spacerace2021-css', get_template_directory_uri() . '/build/main.css', '', '1.0.0' );
	wp_enqueue_script( 'gsap-js', get_template_directory_uri() . '/build/gsap.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'spacerace2021-js', get_template_directory_uri() . '/build/main.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'spacerace2021_scripts' );

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/theme-extras.php';
require get_template_directory() . '/inc/cpt.php';
