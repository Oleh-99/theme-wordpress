<?php
/**
 * Blocks
 *
 * @package Merak
 */

namespace MERAK_THEME\Inc;

use MERAK_THEME\Inc\Traits\Singleton;

class Block_Patterns {
	use Singleton;

	protected function __construct() {

		$this->setup_hooks();
	}

	protected function setup_hooks() {
		add_filter( 'init', array( $this, 'register_block_pattern_category' ) );
		add_filter( 'init', array( $this, 'register_block_patterns' ) );
	}

	public function register_block_patterns() {
		if ( function_exists( 'register_block_pattern' ) ) {

			$cover_content = $this->get_patent_content( 'template-parts/pattern/cover' );

			register_block_pattern(
				'merak/cover',
				array(
					'title'       => __( 'merak cover', 'merak' ),
					'description' => __( 'merak cover block', 'merak' ),
					'category'    => array( 'cover' ),
					'content'     => $cover_content,
				)
			);
		}
	}

	public function get_patent_content( $template_part ) {
		ob_start();

		get_template_part( $template_part );
		$cover_content = ob_get_contents();
		ob_end_clean();

		return $cover_content;
	}

	public function register_block_pattern_category() {
		$pattern_categories = array(
			'cover'    => __( 'Cover', 'merak' ),
			'carousel' => __( 'Carousel', 'merak' ),
		);

		if ( ! empty( $pattern_categories ) ) {
			foreach ( $pattern_categories as $category => $category_label ) {
				register_block_pattern_category( $category, array( 'label' => $category_label ) );
			}
		}
	}
}
