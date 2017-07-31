<?php
add_action( 'widgets_init','businesso_footer_latest_news_widget'); 
   function businesso_footer_latest_news_widget() { return   register_widget( 'businesso_footer_sidbar_latest_news_widget' ); }
function esol_widget_excerpt(){
	global $post;
	$excerpt = get_the_content();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$original_len = strlen($excerpt);
	$excerpt = substr($excerpt, 0, 25);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	$len=strlen($excerpt);
	 if($original_len>150)
	return $excerpt;
	return $excerpt;
}
/*
 ******** Businesso Blog Sidebar Latest News widget********
 */
class businesso_footer_sidbar_latest_news_widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'businesso_footer_sidbar_latest_news_widget', // Base ID
			__('businesso Footer Latest News', 'businesso'), // Widget Name
			array( 'description' => __( 'The Recent post display on footer in your site ', 'businesso' ), ) // Arguments
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		$number_of_posts = apply_filters( 'widget_title', $instance['number_of_posts'] );
		if($number_of_posts=='') { $number_of_posts = 2; }
		
		echo $args['before_widget'];
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title']; ?>		
		<?php $loop = new WP_Query(array( 'post_type' => 'post', 'showposts' => $number_of_posts,'post__not_in'=>get_option("sticky_posts") ));
			if( $loop->have_posts() ) : 
			while ( $loop->have_posts() ) : $loop->the_post();?>				
			
					
							<div class="c-post">
								<div class="c-post-img">
								<?php $default_thumb=array('class'=>"img-responsive");
									if(has_post_thumbnail()) { ?>
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('esol_image_resize',$default_thumb); ?></a>
								<?php } ?>
								</div>
								<div class="c-post-content">
									<h4 class="c-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<p class="c-text"><?php echo esol_widget_excerpt(); ?><br>
                <span>By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> / <?php echo get_the_date('F m'); ?></span></p>
									
								</div>
							</div>
					
				
			<?php endwhile; endif; 	
		echo $args['after_widget']; // end of sidbar usefull links widget		
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] )  && isset( $instance[ 'number_of_posts' ] )) {
			$title = $instance[ 'title' ];
			$number_of_posts = $instance[ 'number_of_posts' ];
		}
		else {
			$title = __( 'Blog Post', 'businesso' );
			$number_of_posts = 2;
		}
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:','businesso' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'number_of_posts' ); ?>"><?php _e( 'Number of pages to show:','businesso' ); ?></label> 
		<input size="3" maxlength="2"id="<?php echo $this->get_field_id( 'number_of_posts' ); ?>" name="<?php echo $this->get_field_name( 'number_of_posts' ); ?>" type="text" value="<?php echo esc_attr( $number_of_posts ); ?>" />
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
		$instance['number_of_posts'] = ( ! empty( $new_instance['number_of_posts'] ) ) ? strip_tags( $new_instance['number_of_posts'] ) : '';
		return $instance;
	}

} // class Foo_Widget
?>