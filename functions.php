<?php
/**
 * our-child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package our-child
 * @since 1.6.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_OUR_CHILD_VERSION', '1.6.0' );

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}


