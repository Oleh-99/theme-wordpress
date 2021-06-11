<?php
/**
 * Blocks
 *
 * @package Merak
 */

namespace MERAK_THEME\Inc;

use MERAK_THEME\Inc\Traits\Singleton;

class Blocks {
	use Singleton;

	protected function __construct() {

		$this->setup_hooks();
	}

	protected function setup_hooks() {

		add_filter( 'block_categories', array( $this, 'add_block_categories' ) );
	}

	/**
	 * Add a block category.
	 *
	 * @param array $categories Block categories.
	 *
	 * @return array
	 */
	public function add_block_categories( $categories ) {
		$category_slugs = wp_list_pluck( $categories, 'slug' );

		return in_array( 'merak', $category_slugs, true ) ? $categories : array_merge(
			$categories,
			array(
				array(
					'slug'  => 'merak',
					'title' => __( 'Merak Blocks', 'merak' ),
					'icon'  => 'table-row-after',
				),
			)
		);

	}

}
