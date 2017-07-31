<?php
if(! function_exists('esol_gravatar_class')) :
	add_filter('get_avatar','esol_gravatar_class');
	function esol_gravatar_class($class) {
    $class = str_replace("class='avatar", "class='author-image", $class);
    return $class;
	}
 endif;
if ( ! function_exists( 'esol_archive_title' ) ) :
function esol_archive_title( $before = '<div class="page-title"><h1>', $after = '</h1></div>' ) {
	if( is_archive() )
	{
	
	if ( is_category() ) {
		$title = sprintf( __( 'Category Archives: %s', 'esol' ), '<span>' . single_cat_title( '', false ) . '</span>' );
	} elseif ( is_tag() ) {
		$title = sprintf( __( 'Tag Archives: %s', 'esol' ), '<span>' . single_tag_title( '', false ) . '</span>' ); 
	} elseif ( is_author() ) {
		$title = sprintf( __( 'Author Archives: %s', 'esol' ), '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a>' ); 
	} elseif ( is_year() ) {
		$title = sprintf( __( 'Yearly Archives: %s', 'esol' ), get_the_date( _x( 'Y', 'yearly archives date format', 'esol' ) ) );
	} elseif ( is_month() ) {
		$title = sprintf( __( 'Monthly Archives: %s', 'esol' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'esol' ) ) );
	} elseif ( is_day() ) {
		$title = sprintf( __( 'Daily Archives: %s', 'esol' ), get_the_date( _x( 'F j, Y', 'daily archives date format', 'esol' ) ) );
	}  elseif ( is_post_type_archive() ) {
		$title = sprintf( __( 'Archives: %s', 'esol' ), post_type_archive_title( '', false ) );
	}
	} elseif( is_search() )
	{
		$title = sprintf( __( 'Search Results for : %s', 'esol' ), get_search_query() );
	}
	elseif( is_404() )
	{
		$title = sprintf( __( 'Error 404  : Page Not Found', 'esol' ) );
	}
	else
	{
		echo '<div class="page-title"><h1>'.get_the_title().'</h1></div>';
	}	
	/**
	 * Filter the archive title.
	 *
	 * @param string $title Archive title to be displayed.
	 */
	//$title = apply_filters( 'get_the_archive_title', $title );

	if ( ! empty( $title ) ) {
		echo $before . $title . $after;
	}
}
endif;
 
// Site Footer Function
// Contains the closing of the #content div and all content after
function esol_wp_footer () { ?>
	<div class="clearfix"></div>
	<?php 
	$esol_option=theme_default_data(); 
	$bottom_strip_setting = wp_parse_args(  get_option( 'esol_option', array() ), $esol_option );
	if($bottom_strip_setting['home_bottom_strip_enabled'] == 1) { ?>
<div class="call-to-action-area">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-12">
				<div class="call-to-text">
					<h2><?php echo $bottom_strip_setting['home_bottom_title_strips']; ?></h2>
					<p><?php echo $bottom_strip_setting['home_bottom_strip_description']; ?></p>
				</div>
			</div>
			<div class="col-md-3 col-sm-12">
				<div class="coll-to-btn text-right">
					<a class="call-btn hvr-s-b" href="<?php echo $bottom_strip_setting['home_bottom_strip_buton_url'];?>"><?php echo $bottom_strip_setting['home_bottom_strip_button_text']; ?><i class="fa fa-shopping-cart"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>	
	<?php } ?>
 <!-------Footer Section----->  
  <footer class="footer-bg m-top0">
    <div class="container">
      <div class="row">
	  <?php if ( is_active_sidebar( 'footer-widget-area' ) )
			{?>
			<div>
				<?php dynamic_sidebar( 'footer-widget-area' ); ?>
			</div>	
			<?php } else { ?>  
				
        <div class="col-md-3 col-sm-6 m-bottom3 wow fadeInUp" data-wow-duration="3s">
          <h4 class="white font20 font-thin">About Company</h4>
          <div class="title-line"></div>
          <p class="m-bottom3">Pellentesque mi purus, eleifend sedt commodo vel, sagittis elts vestibulum dui sagittis mlste sagittis elts.</p>
          <ul class="address-info map">
            <li><i class="fa fa-map-marker"></i> 15 Barnes Wallis Way, 358744, USA</li>
            <li><i class="fa fa-phone"></i> +1 (012) 345 6789</li>
            <li><i class="fa fa-envelope"></i> info@yourdomain.com</li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 m-bottom3 wow fadeInUp" data-wow-duration="3s">
          <h4 class="white font20 font-thin">Usefull Links</h4>
          <div class="title-line"></div>
          <ul class="list-info one">
            <li><a href="#"><i class="fa fa-angle-right"></i> Customer Support</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Documentation</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Resources</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> General FAQs</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Rackspace Community</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Developer Center</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 m-bottom3 wow fadeInUp" data-wow-duration="3s">
          <h4 class="white font20 font-thin">Recent Posts</h4>
          <div class="title-line"></div>
          <div class="c-post">
            <div class="c-post-img"><img class="img-responsive" alt="" src="<?php echo  get_template_directory_uri(); ?>/images\post-sm1.jpg"></div>
            <div class="c-post-content">
              <h4 class="c-post-title"><a href="#">Quisque convallis nec</a></h4>
              <p class="c-text">Lorem ipsum dolor sit<br>
                <span>By <a href="#">John Deo</a> / Feb 15</span></p>
            </div>
          </div>
          <div class="c-post c-post-last m-bottom3">
            <div class="c-post-img"><img class="img-responsive" alt="" src="<?php echo  get_template_directory_uri(); ?>/images\post-sm2.jpg"></div>
            <div class="c-post-content">
              <h4 class="c-post-title"><a href="#">Quisque convallis nec</a></h4>
              <p class="c-text">Lorem ipsum dolor sit<br>
                <span>By <a href="#">John Deo</a> / Feb 15</span></p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 m-bottom3 wow fadeInUp" data-wow-duration="3s">
          <h4 class="white font20 font-thin">Flickr Photos</h4>
          <div class="title-line"></div>
          <div class="flickr-widget">
			  <div class="flickr-img">
				<a href="#" title=""><img src="<?php echo  get_template_directory_uri(); ?>/images/instagram/1.jpg" alt=""></a>
				<a href="#" title=""><img src="<?php echo  get_template_directory_uri(); ?>/images/instagram/2.jpg" alt=""></a>
				<a href="#" title=""><img src="<?php echo  get_template_directory_uri(); ?>/images/instagram/3.jpg" alt=""></a>
				<a href="#" title=""><img src="<?php echo  get_template_directory_uri(); ?>/images/instagram/4.jpg" alt=""></a>
				<a href="#" title=""><img src="<?php echo  get_template_directory_uri(); ?>/images/instagram/5.jpg" alt=""></a>
				<a href="#" title=""><img src="<?php echo  get_template_directory_uri(); ?>/images/instagram/6.jpg" alt=""></a>
			    <a href="#" title=""><img src="<?php echo  get_template_directory_uri(); ?>/images/instagram/3.jpg" alt=""></a>
				<a href="#" title=""><img src="<?php echo  get_template_directory_uri(); ?>/images/instagram/4.jpg" alt=""></a>
			 </div>
        </div>
      </div>
			<?php } ?>
	  </div>
    </div>
	
  </footer>
  <?php 
	$esol_options=theme_default_data(); 
	$footer_setting = wp_parse_args(  get_option( 'esol_option', array() ), $esol_options ); ?>	 
<div class="copyrights">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-top1 wow fadeInLeft" data-wow-duration="4s"><p> <?php if($footer_setting['footer_customization_text'] !='') { echo esc_attr($footer_setting['footer_customization_text']); } ?> <a target="_blank" href="<?php if($footer_setting['develop_by_link'] !='') { echo esc_url($footer_setting['develop_by_link']); } ?>"><?php if($footer_setting['footer_customization_develop'] !='') { echo "-" .esc_attr($footer_setting['footer_customization_develop']); } ?></a> <?php if($footer_setting['develop_by_name'] !='') { echo "-" .esc_attr($footer_setting['develop_by_name']); }  ?> </p></div>
        <div class="col-md-6 wow fadeInRight" data-wow-duration="6s">
          <ul class="top-share bottom-share pull-right">
			<li><a href="#" class="hvr-s-b facebook"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#" class="hvr-s-b twitter"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#" class="hvr-s-b google"><i class="fa fa-google-plus"></i></a></li>
			<li><a href="#" class="hvr-s-b linkedin"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="#" class="hvr-s-b pinterest"><i class="fa fa-pinterest"></i></a></li>
			<li><a href="#" class="hvr-s-b dribbble"><i class="fa fa-dribbble"></i></a></li>
			<li><a href="#" class="hvr-s-b instagram"><i class="fa fa-instagram"></i></a></li>
		  </ul>
        </div>
      </div>
    </div>
  </div>
  
  <!--Scroll To Top--> 

<!--/Scroll To Top-->  
</div><!---/wrapper---->

<!--Scroll To Top--> 
<a href="#" class="hc_scrollup"><i class="fa fa-chevron-up"></i></a>
<!--/Scroll To Top-->
<?php
} // end of esol_wp_footer

if ( ! function_exists( 'esol_the_custom_logo' ) ) :

function esol_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

	// code to change length of service two column excerpt
function esol_blog_excerpt(){
	global $post;
	$excerpt = get_the_content();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$original_len = strlen($excerpt);
	$excerpt = substr($excerpt, 0, 250);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	$len=strlen($excerpt);
	 if($original_len>150)
	return $excerpt;
	return $excerpt;
}
?>