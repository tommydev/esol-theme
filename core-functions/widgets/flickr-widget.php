<?php
add_action( 'widgets_init','child_flicker_widget'); 
   function child_flicker_widget() { return   register_widget( 'child_footer_flicker_widget' ); }
/**
 * Adds widget for recent Post in footer.
 */
class child_footer_flicker_widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'child_footer_flicker_widget', // Base ID
			__('Child-Care Flickr widget', 'child'), // Name
			array( 'description' => __( 'Displays your latest Flicker photos.', 'child' ), ) // Args
		);
	}
	
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		$number_of_image = apply_filters( 'widget_title', $instance['number_of_image'] );
		$flicker_id = apply_filters( 'widget_title', $instance['flicker_id'] );
		
		if($number_of_image=='') { $number_of_image = 8; }
		if($flicker_id=='') { $flicker_id ='140047837@N03'; }
		
		echo $args['before_widget'];
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title']; ?>
			<div class="flickr-widget">
			  <div class="flickr-img">
				<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo $number_of_image; ?>&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=<?php echo $flicker_id; ?>"></script>
			  </div>
			</div>
				
		<?php		
		echo $args['after_widget']; 
	}
	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] )  && isset( $instance[ 'number_of_image' ] ) && isset( $instance[ 'flicker_id' ] )) {
			$title = $instance[ 'title' ];
			$number_of_image = $instance[ 'number_of_image' ];
			$flicker_id = $instance[ 'flicker_id' ];
		}
		else {
			$title = __( 'FLICKR IMAGES', 'child' );
			$number_of_image = 8;
			$flicker_id= "140047837@N03";
		}
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:','child' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('flicker_id'); ?>"><?php _e('Flickr ID (use <a target="_blank" href="http://www.idgettr.com">idGettr</a>):', ''); ?>
		<input class="widefat" id="<?php echo $this->get_field_id( 'flicker_id' ); ?>" name="<?php echo $this->get_field_name( 'flicker_id' ); ?>" type="text" value="<?php echo esc_attr( $flicker_id ); ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('number_of_image' ); ?>"><?php _e( 'Number of images to display:','child' ); ?></label> 
		<input size="3" maxlength="2" id="<?php echo $this->get_field_id( 'number_of_image' ); ?>" name="<?php echo $this->get_field_name( 'number_of_image' ); ?>" type="text" value="<?php echo esc_attr( $number_of_image ); ?>" />
		</p>		
		<?php 
	}
	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['number_of_image'] = ( ! empty( $new_instance['number_of_image'] ) ) ? strip_tags( $new_instance['number_of_image'] ) : '';
		$instance['flicker_id'] = ( ! empty( $new_instance['flicker_id'] ) ) ? strip_tags( $new_instance['flicker_id'] ) : '';
		return $instance;
	}
}
?>