<?php

namespace MERAK_THEME\Inc;

use MERAK_THEME\Inc\Traits\Singleton;

class Sidebars {
	use Singleton;

	protected function __construct() {
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		add_action( 'widgets_init', array( $this, 'register_sidebars' ) );
		add_action( 'widgets_init', array( $this, 'register_category_with_image_widget' ) );
	}

	public function register_sidebars() {
		register_sidebar(
			array(
				'name'          => __( 'Browse Categories', 'merak' ),
				'id'            => 'sidebar-1',
				'description'   => __( 'Main category', 'merak' ),
				'before_widget' => '<li id="%1$s" class="widget %2$s"><a><span>',
				'after_widget'  => '</span></a></li>',
				'before_title'  => '',
				'after_title'   => '',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Single sidebar', 'merak' ),
				'id'            => 'sidebar-2',
				'description'   => __( 'Single sidebar', 'merak' ),
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'after_widget'  => '</li>',
			)
		);
	}
	public function register_category_with_image_widget() {
		register_widget( 'MERAK_THEME\Inc\Widget' );
	}
}
