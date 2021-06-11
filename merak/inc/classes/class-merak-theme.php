<?php

namespace MERAK_THEME\Inc;

use MERAK_THEME\Inc\Traits\Singleton;

class MERAK_THEME {
	use Singleton;

	/**
	 * MERAK_THEME constructor.
	 */
	protected function __construct() {
		Assets::get_instance();
		Menus::get_instance();
		Meta_Boxes::get_instance();
		Sidebars::get_instance();
		Blocks::get_instance();
		Block_Patterns::get_instance();

		$this->setup_hooks();
	}

	/**
	 * Setup_hooks.
	 */
	protected function setup_hooks() {

		add_action( 'after_setup_theme', array( $this, 'support_theme' ) );
	}

	/**
	 * Support_theme.
	 */
	public function support_theme() {
		add_theme_support( 'title-tag' );
		add_theme_support(
			'custom-logo',
			array(
				'height' => 60,
				'width'  => 145,
			)
		);
		add_theme_support(
			'custom-background',
			array(
				'default-image'  => '',
				'default-color'  => '',
				'default-repeat' => 'no-repeat',
			)
		);
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'align-wide' );
		add_image_size( 'post-thumbnail', 373, 206, true );
	}
}
