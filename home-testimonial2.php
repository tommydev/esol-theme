<!---Testimonial Section----->
<?php 
	$esol_option=theme_default_data(); 
	$testimonial_setting = wp_parse_args(  get_option( 'esol_option', array() ), $esol_option );
	?>
<div class="testimonial_section  wow fadeInUp" data-wow-duration="1s">
	  <div class="testimonial-section">
		  <div class="solid-callout">
		   <div id="quote-carousel"  class="container">
			  <div class="col-md-12">
			    <div class="main-title testi-title">
				<?php
				if( $testimonial_setting['enable_home_testimonial'] == 1) {?>
				   <h2 class="white wow fadeInLeft" data-wow-duration="4s"><?php echo $testimonial_setting['testimo_heading_title']; ?> <span><?php echo $testimonial_setting['testimo_heading_two']; ?></span> </h2>
				   <?php } ?>
				   <div class="seperator wow fadeInRight" data-wow-duration="6s"></div>
				</div>
			  </div>	
           <div class="clearfix"></div>			
		   <div id="testimonials2">
				  <?php
			$t=true;
		 //$count_posts=wp_count_posts('becorp_portfolio')->publish;
		 $args = array (
			'post_type' => 'testimonial');
			$testimonial = new WP_Query($args);
							
			if( $testimonial->have_posts() ) { 
				while($testimonial->have_posts()) : 
						$testimonial->the_post(); ?>
				<div class="item">
					 <div class="row">
					  <div class="col-md-8 col-sm-offset-2 text-center">
						<div class="testi-img wow fadeInUp" data-wow-duration="2s">
						  <?php
							//$testi=array('class'=>'img-responsive');
						  if(has_post_thumbnail()){
						  
								the_post_thumbnail();
						  } ?>
						</div>
						  <?php the_content(); ?>
						  <small>- <?php the_title(); ?></small>
					  </div>
					  </div>
				  </div>
				  <?php endwhile; } else { ?>
				  <div class="item">
					 <div class="row">
					  <div class="col-md-8 col-sm-offset-2 text-center">
						<div class="testi-img wow fadeInUp" data-wow-duration="2s">
						  <img  src="<?php echo  get_template_directory_uri(); ?>/images/1.jpg">
						</div>
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non metus. pulvinar.
								Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						  <small>- Someone famous</small>
					  </div>
					  </div>
				  </div>
				  <!-- Quote 2 -->
				 <div class="item">
					 <div class="row">
					  <div class="col-md-8 col-sm-offset-2 text-center">
						<div class="testi-img wow fadeInUp" data-wow-duration="2s">
						  <img  src="<?php echo  get_template_directory_uri(); ?>/images/2.jpg">
						</div>
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non metus. pulvinar.
								Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						  <small>- Someone famous</small>
					  </div>
					  </div>
				  </div>
				  <!-- Quote 3 -->
				  <div class="item">
					 <div class="row">
					  <div class="col-md-8 col-sm-offset-2 text-center">
						<div class="testi-img wow fadeInUp" data-wow-duration="2s">
						  <img  src="<?php echo  get_template_directory_uri(); ?>/images/3.jpg">
						</div>
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non metus. pulvinar.
								Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						  <small>- Someone famous</small>
					  </div>
					  </div>
				  </div>
		                  
				  <?php } ?>
			  </div>                          
		  </div>
  </div>
 </div>
</div>
 <!---/Testimonial Section----->
 
<div class="clearfix"></div>
