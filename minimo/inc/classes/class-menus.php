<?php
/**
 * Menu class template.
 *
 * @package Minimo
 */

namespace MINIMO_THEME\Inc;

use MINIMO_THEME\Inc\Traits\Singleton;

/**
 * Menus.
 */
class Menus {
	use Singleton;

	/**
	 * Menus constructor.
	 */
	protected function __construct() {
		$this->setup_hooks();
	}

	/**
	 * Setup hooks
	 */
	protected function setup_hooks() {
		add_action( 'init', array( $this, 'register_menus' ) );
	}

	/**
	 * Register menus for template.
	 */
	public function register_menus() {
		register_nav_menus(
			array(
				'minimo-header-menu' => esc_html__( 'Header menu', 'minimo' ),
				'minimo-footer-menu' => esc_html__( 'Footer menu', 'minimo' ),
			)
		);
	}
}
