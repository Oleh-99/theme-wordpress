<?php

namespace MERAK_THEME\Inc;

use MERAK_THEME\Inc\Traits\Singleton;

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
	 *
	 */
	protected function setup_hooks() {
		add_action( 'wp_enqueue_scripts', array( $this, 'register_style' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'register_script' ) );
//		add_action( 'admin_enqueue_scripts', array( $this, 'admin_register_script' ) );
		add_action( 'enqueue_block_assets', [ $this, 'enqueue_editor_assets' ] );
	}

	public function register_style() {
		wp_enqueue_style( 'ol_fontawesome_5', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css', array(), '5.10', 'all' );
		wp_enqueue_style( 'ol_fontsize', 'https://fonts.googleapis.com/css2?family=Archivo&family=Hind:wght@400;500;600&family=Spartan:wght@400;500;600;700&display=swap', array(), null, 'all' );
		wp_enqueue_style( 'ol_swiper_bundle', MERAK_DIR_URI . '/assets/css/swiper-bundle.min.css', array(), null, 'all' );
		wp_enqueue_style( 'ol_magnific_popup', MERAK_DIR_URI . '/assets/css/magnific-popup.css', array(), wp_get_theme()->get( 'Version' ), 'all' );
		wp_enqueue_style( 'ol_style', MERAK_DIR_URI . '/style.css', array(), wp_get_theme()->get( 'Version' ), 'all' );
	}

	public function register_script() {
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'ol_bootstrap_bundle', MERAK_DIR_URI . '/assets/lib/bootstrap.bundle.min.js', array(), null, true );
		wp_enqueue_script( 'ol_jq_waypoint', MERAK_DIR_URI . '/assets/lib/jquery.waypoints.js', array(), null, true );
		wp_enqueue_script( 'ol_swiper_bundle', MERAK_DIR_URI . '/assets/lib/swiper-bundle.min.js', array(), null, true );
		wp_enqueue_script( 'ol_isotope', MERAK_DIR_URI . '/assets/lib/isotope.pkgd.min.js', array(), null, true );
		wp_enqueue_script( 'ol_magnific_popup', MERAK_DIR_URI . '/assets/lib/magnific-popup.js', array(), null, true );
		wp_enqueue_script( 'ol_autocomplete', MERAK_DIR_URI . '/assets/lib/jquery.autocomplete.min.js', array(), null, true );
		wp_enqueue_script( 'ol_mockjax', MERAK_DIR_URI . '/assets/lib/jquery.mockjax.js', array(), null, true );
		wp_enqueue_script( 'ol_js', MERAK_BUILD_JS_URI . '/main.js', array(), wp_get_theme()->get( 'Version' ), true );
	}

	public function admin_register_script() {
		wp_enqueue_script( 'ol_js', MERAK_DIR_URI . '/assets/js/main.js', array( 'jQuery' ), wp_get_theme()->get( 'Version' ), true );
	}

	public function enqueue_editor_assets() {

		$asset_config_file = sprintf( '%s/assets.php', MERAK_BUILD_PATH );

		if ( ! file_exists( $asset_config_file ) ) {
			return;
		}

		$asset_config = require_once $asset_config_file;

		if ( empty( $asset_config['js/editor.js'] ) ) {
			return;
		}

		$editor_asset    = $asset_config['js/editor.js'];
		$js_dependencies = ( ! empty( $editor_asset['dependencies'] ) ) ? $editor_asset['dependencies'] : [];
		$version         = ( ! empty( $editor_asset['version'] ) ) ? $editor_asset['version'] : filemtime( $asset_config_file );

		if ( is_admin() ) {
			wp_enqueue_script(
				'merak-blocks-js',
				MERAK_BUILD_JS_URI . '/editor.js',
				$js_dependencies,
				$version,
				true
			);
		}

		$css_dependencies = [
			'wp-block-library-theme',
			'wp-block-library',
		];

		wp_enqueue_style(
			'merak-blocks-css',
			MERAK_BUILD_CSS_URI . '/sass_editor_scss.css',
			$css_dependencies,
			filemtime( MERAK_BUILD_CSS_DIR_PATH . '/sass_editor_scss.css' ),
			'all'
		);
	}
}
