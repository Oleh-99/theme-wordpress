<?php
/**
 * Sidebars class template.
 *
 * @package Minimo
 */

namespace MINIMO_THEME\Inc;

use MINIMO_THEME\Inc\Traits\Singleton;
/**
 * Assets.
 */
class Sidebars {
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
		add_action( 'widgets_init', array( $this, 'register_sidebars' ) );
	}

	/**
	 * Register sidebars for template.
	 */
	public function register_sidebars() {
		register_sidebar(
			array(
				'name'          => __( 'Single category', 'minimo' ),
				'id'            => 'sidebar-1',
				'description'   => __( 'Single category', 'minimo' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Footer link', 'minimo' ),
				'id'            => 'sidebar-2',
				'description'   => __( 'Footer link', 'minimo' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
			)
		);
	}
}
