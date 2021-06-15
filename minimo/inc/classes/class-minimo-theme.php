<?php
/**
 * Main class template.
 *
 * @package Minimo
 */

namespace MINIMO_THEME\Inc;

use MINIMO_THEME\Inc\Traits\Singleton;

/**
 * MINIMO_THEME main class .
 */
class MINIMO_THEME {
	use Singleton;

	/**
	 * MINIMO_THEME constructor.
	 */
	protected function __construct() {
		Assets::get_instance();
		Menus::get_instance();
		Sidebars::get_instance();

		$this->setup_hooks();
	}

	/**
	 * Setup_hooks.
	 */
	protected function setup_hooks() {
		add_action( 'after_setup_theme', array( $this, 'support_theme' ) );
	}

	/**
	 * Add support theme.
	 */
	public function support_theme() {
		add_theme_support( 'post-thumbnails' );
	}
}
