<?php
/**
 * Assets class template.
 *
 * @package Minimo
 */

namespace MINIMO_THEME\Inc;

use MINIMO_THEME\Inc\Traits\Singleton;
/**
 * Assets.
 */
class Assets {
	use Singleton;

	/**
	 * Assets constructor.
	 */
	protected function __construct() {
		$this->setup_hooks();
	}

	/**
	 * Setup hooks.
	 */
	protected function setup_hooks() {
		add_action( 'wp_enqueue_scripts', array( $this, 'register_style' ) );
	}

	/**
	 * Register style for template.
	 */
	public function register_style() {
		wp_enqueue_style( 'ol_font1', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap', array(), wp_get_theme()->get( 'Version' ), 'all' );
		wp_enqueue_style( 'ol_font2', 'https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;1,300&display=swap', array(), wp_get_theme()->get( 'Version' ), 'all' );
		wp_enqueue_style( 'ol_font_awesome', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css', array(), '5.10.0', 'all' );
		wp_enqueue_style( 'ol_style', MINIMO_DIR_URI . '/assets/css/style.css', array(), wp_get_theme()->get( 'Version' ), 'all' );
	}
}
