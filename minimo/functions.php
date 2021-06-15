<?php
/**
 * Functions.
 *
 * @package Minimo
 */

use MINIMO_THEME\Inc\MINIMO_THEME;

if ( ! defined( 'MINIMO_DIR_PATH' ) ) {
	define( 'MINIMO_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'MINIMO_DIR_URI' ) ) {
	define( 'MINIMO_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'MINIMO_DIR_URI_CSS' ) ) {
	define( 'MINIMO_DIR_URI_CSS', untrailingslashit( get_template_directory_uri() ) . '/assets/css' );
}

require MINIMO_DIR_PATH . '/inc/traits/trait-singleton.php';
require MINIMO_DIR_PATH . '/inc/classes/class-minimo-theme.php';
require MINIMO_DIR_PATH . '/inc/classes/class-assets.php';
require MINIMO_DIR_PATH . '/inc/classes/class-menus.php';
require MINIMO_DIR_PATH . '/inc/classes/class-sidebars.php';

if ( ! function_exists( 'minimo_get_theme_instance' ) ) {
	/**
	 * Initialization of the main class of the template.
	 */
	function minimo_get_theme_instance() {
		MINIMO_THEME::get_instance();
	}

	minimo_get_theme_instance();
}

/**
 * Ar.
 *
 * @param mixed $data Data output.
 */
function ar( $data ) {
	echo '<pre>';
	echo $data;
	echo '</pre>';
}

/**
 * Displays a post description if available or part of the content.
 *
 * @param int $count Number of characters.
 *
 * @return string
 */
function ol_get_the_excerpt( $count = 0 ) {
	if ( has_excerpt() || 0 === $count ) {
		return get_the_excerpt();
	}

	$excerpt = wp_strip_all_tags( get_the_excerpt() );
	$excerpt = substr( $excerpt, 0, $count );

	return substr( $excerpt, 0, strrpos( $excerpt, ' ' ) ) . '... ';
}
