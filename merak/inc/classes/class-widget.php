<?php
/**
 * Widget
 *
 * @package MERAK
 */

namespace MERAK_THEME\Inc;

use MERAK_THEME\Inc\Traits\Singleton;

use WP_Widget;

class Widget extends WP_Widget {

	use Singleton;

	/**
	 * Widget constructor.
	 */
	function __construct() {
		parent::__construct(
			'category-img',
			__( 'Category with photo', 'merak' ),
			array( 'description' => 'Category with photo' )
		);
	}

	/**
	 *
	 *
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		$img   = apply_filters( 'widget_title', $instance['img'] );

		echo $args['before_widget'];

		if ( ! empty( $title ) ) {
			echo '<img src="' . $img . '">' . $args['before_title'] . $title . $args['after_title'];
		}
		echo $args['after_widget'];
	}

	/**
	 *
	 *
	 * @param array $instance
	 */
	function form( $instance ) {
		$title   = @ $instance['title'] ?: 'Title';
		$img_src = @ $instance['img'] ?: '';

		?>
		<div class="meta-box-id">
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
			<button class="upload-custom-img <?php echo ( ! $img_src ) ? 'hidden' : ''; ?>">Add icon</button>
			<button class="delete-custom-img <?php echo ( $img_src ) ? 'hidden' : ''; ?>">Delete icon</button>
			<div class="custom-img-container">
				<?php if ( $img_src ) : ?>
					<img src="<?php echo $img_src; ?>" alt="">
				<?php endif; ?>
			</div>
			<input class="custom-img-id" id="<?php echo $this->get_field_id( 'img' ); ?>" name="<?php echo $this->get_field_name( 'img' ); ?>" type="hidden" value="<?php echo esc_attr( $img_src ); ?>">
		</div>
		<?php
	}

	/**
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance
	 * @param array $old_instance
	 *
	 * @return array
	 */
	function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['img']   = ( ! empty( $new_instance['img'] ) ) ? strip_tags( $new_instance['img'] ) : '';

		return $instance;
	}
}
