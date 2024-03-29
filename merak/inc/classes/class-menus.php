<?php

namespace MERAK_THEME\Inc;

use MERAK_THEME\Inc\Traits\Singleton;

class Menus {
	use Singleton;

	protected function __construct() {
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		add_action( 'init', array( $this, 'register_menus' ) );
	}

	public function register_menus() {
		register_nav_menus(
			array(
				'merak-header-menu' => esc_html__( 'Header menu', 'merak' ),
				'merak-footer-menu' => esc_html__( 'Footer menu', 'merak' ),
			)
		);
	}

	public function get_menu_id( $location ) {

		$locations = get_nav_menu_locations();

		$menu_id = ! empty( $locations[ $location ] ) ? $locations[ $location ] : '';

		return ! empty( $menu_id ) ? $menu_id : '';
	}

	public function get_child_menu_items( $menu_array, $parent_id ) {

		$child_menus = array();

		if ( ! empty( $menu_array ) && is_array( $menu_array ) ) {

			foreach ( $menu_array as $menu ) {
				if ( intval( $menu->menu_item_parent ) === $parent_id ) {
					array_push( $child_menus, $menu );
				}
			}
		}

		return $child_menus;
	}}
