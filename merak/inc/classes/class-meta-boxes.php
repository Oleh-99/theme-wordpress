<?php

namespace MERAK_THEME\Inc;

use MERAK_THEME\Inc\Traits\Singleton;

class Meta_Boxes {
	use Singleton;

	/**
	 * Meta_Boxes constructor.
	 */
	protected function __construct() {
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		add_action( 'add_meta_boxes', array( $this, 'add_custom_meta_box' ) );
		add_action( 'save_post', array( $this, 'save_post_meta_data' ) );
	}

	public function add_custom_meta_box() {
		$screens = array( 'post' );

		foreach ( $screens as $screen ) {
			add_meta_box(
				'hide-page-title',
				__( 'Hide page title', 'merak' ),
				array( $this, 'custom_meta_box_html' ),
				$screen,
				'side',
			);
		}
	}

	public function custom_meta_box_html( $post ) {
		$value = get_post_meta( $post->ID, '_hide-page-title', true );

		wp_nonce_field( plugin_basename( __FILE__ ), 'hide_title_meta_box' );
		?>
		<label for="merak-field">
			<?php esc_html_e( 'Page title', 'merak' ); ?>
		</label>
		<select name="merak_field" id="merak-field">
			<option value="true" <?php selected( $value, 'true' ); ?>>
				<?php esc_html_e( 'Show', 'merak' ); ?>
			</option>
			<option value="false" <?php selected( $value, 'false' ); ?>>
				<?php esc_html_e( 'Hide', 'merak' ); ?>
			</option>
		</select>
		<?php
	}

	public function save_post_meta_data( $post_id ) {

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}

		if ( ! isset( $_POST['hide_title_meta_box'] ) || ! wp_verify_nonce( wp_unslash( $_POST['hide_title_meta_box'] ), plugin_basename( __FILE__ ) ) ) {
			return;
		}

		if ( array_key_exists( 'merak_field', $_POST ) ) {
			update_post_meta(
				$post_id,
				'_hide-page-title',
				esc_html( wp_unslash( $_POST['merak_field'] ) ),
			);
		}
	}
}
