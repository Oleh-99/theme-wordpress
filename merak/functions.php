<?php

if ( ! defined( 'MERAK_DIR_PATH' ) ) {
	define( 'MERAK_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'MERAK_BUILD_PATH' ) ) {
	define( 'MERAK_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
}

if ( ! defined( 'MERAK_BUILD_JS_URI' ) ) {
	define( 'MERAK_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/js' );
}

if ( ! defined( 'MERAK_DIR_URI' ) ) {
	define( 'MERAK_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'MERAK_BUILD_CSS_URI' ) ) {
	define( 'MERAK_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/css' );
}

if ( ! defined( 'MERAK_BUILD_CSS_DIR_PATH' ) ) {
	define( 'MERAK_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/css' );
}

require_once MERAK_DIR_PATH . '/inc/helpers/autoloader.php';

function merak_get_theme_instance() {
	\MERAK_THEME\Inc\MERAK_THEME::get_instance();
}

function custom_admin_js() {
	$url = get_bloginfo( 'template_directory' ) . '/assets/js/main.js';
	echo '"<script type="text/javascript" src="' . $url . '"></script>"';
}
add_action( 'admin_footer', 'custom_admin_js' );

merak_get_theme_instance();

function ar( $data ) {
	echo '<pre>';
	print_r( $data );
	echo '</pre>';
}

function ol_get_the_excerpt( $count = 0 ) {
	if ( has_excerpt() || 0 === $count ) {
		return get_the_excerpt();
	}

	$excerpt = wp_strip_all_tags( get_the_excerpt() );
	$excerpt = substr( $excerpt, 0, $count );

	return substr( $excerpt, 0, strrpos( $excerpt, ' ' ) ) . '... ';
}
