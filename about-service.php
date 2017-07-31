<?php 
	$businesso_options=theme_default_data(); 
	$service_setting = wp_parse_args(  get_option( 'businesso_option', array() ), $businesso_options );
?>
<div class="bg-parallax padding60">
 <div class="overlay">
  <div class="container">
  	 <div class="main-title white">
		   <h2 class="wow fadeInLeft" data-wow-duration="4s">
		   <?php echo $service_setting['service_title_one']; ?> 
		   <span><?php echo $service_setting['service_title_two']; ?>
		   </span> </h2>
		   <div class="seperator wow fadeInRight" data-wow-duration="4s"></div>
		</div>	
    <div class="clearfix"></div>
    <div class="row padding-top60"> 
	<?php
	$clr = 1 ;
	$argus=array('post_type' => 'service','posts_per_page'=>-1);
		$service=new WP_Query($argus);
		  if($service->have_posts())
		  {
			while($service->have_posts()) : $service->the_post(); 
			$nav=1;
			$service_icon_awesome=get_post_meta(get_the_id(),'service_icon_awesome',true);
			$meta_service_description=get_post_meta(get_the_id(),'meta_service_description',true);
			// Excerpt
			$service_description_larg = $meta_service_description ;
			$service_description = wp_trim_words( $service_description_larg, $num_words = 30, $read_more_ = '… ' );
			
			if(get_post_meta(get_the_id(),'meta_service_navigation',true))
			{
				$meta_service_navigation=sanitize_text_field(get_post_meta(get_the_id(),'meta_service_navigation',true));
			}
			else{ $nav=0; } ?>
		<div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="cdns-service-container media">
                 <div class="cdns-theme-feature-icon">
					<?php if($nav==1) { ?>
                        <a href="<?php echo $meta_service_navigation;?>" target="<?php if(get_post_meta( get_the_ID(),'meta_service_target', true )) echo "_blank";  ?>" > <i class="fa <?php echo $service_icon_awesome; ?>"></i></a>
			<?php }  else { ?>
				<i class="<?php echo $service_icon_awesome; ?>"></i>
			<?php } ?>
                    </div>
                    <div id="service-1" class="white media-body">
                        <?php if($nav==1) { ?>
			<h3>
			<?php  the_title(); ?>
			</h3>
			<p class="white"><?php echo $service_description; ?></p>
			<?php } else { ?>
			<h3><?php the_title(); ?></h3>
            
			 <p class="white">
			<?php 
			
			echo $service_description;
			?>
						 
			 </p>
			<?php } ?>
                    </div>
                </div>
            </div>
			<?php if($clr%2==0){	echo "<div class='clearfix'></div>"; } $clr++;  endwhile; 
		  } else { ?>
		  <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="cdns-service-container media">
                    <div class="cdns-theme-feature-icon">
                        <i class="fa fa-rocket"></i>
                    </div>
                    <div id="service-1" class="white media-body">
                        <h3>Powerful Performance</h3>
                        <p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
	       <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="cdns-service-container media">
                    <div class="cdns-theme-feature-icon">
                        <i class="fa fa-cogs"></i>
                    </div>
                    <div id="service-1" class="white media-body">
                        <h3>Free Support</h3>
                        <p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
		    <div class="clearfix"></div>
		  <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="cdns-service-container media">
                    <div class="cdns-theme-feature-icon">
                        <i class="fa fa-picture-o"></i>
                    </div>
                    <div id="service-1" class="white media-body">
                        <h3>Fresh Design</h3>
                        <p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
		  
		  <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="cdns-service-container media">
                    <div class="cdns-theme-feature-icon">
                        <i class="fa fa-tablet"></i>
                    </div>
                    <div id="service-1" class="white media-body">
                        <h3>Fully Responsive</h3>
                        <p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
			<?php } ?>
	   </div>
  </div>
 </div>
</div>
