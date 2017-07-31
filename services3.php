<?php 
//Template Name:Service Template3
?>
<?php get_header(); ?>
<!-- Page heading Section -->
<?php get_template_part('title','strip'); ?>
<?php 
	$esol_option=theme_default_data(); 
	$service_setting = wp_parse_args(  get_option( 'esol_option', array() ), $esol_option );
	?>
<!-----Services Section------->
<div class="home_services_section">
  <div class="container">
    <div class="row">
     <div class="col-md-12">
		<div class="main-title">
			   <h2 class="wow fadeInLeft" data-wow-duration="4s"><?php echo $service_setting['service_title_one']; ?> <span><?php echo $service_setting['service_title_two']; ?></span> </h2>
			   <div class="seperator wow fadeInRight" data-wow-duration="4s"></div>
		</div>	
      </div>	
    </div>	
	
	<div class="row">
	<?php
	 $clr=1;
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
			
		  <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="service3">
				   <div class="ser-image">
                       <?php 
						$default=array('class' => 'img-responsive');
						if(has_post_thumbnail()){
							
								the_post_thumbnail('',$default);
						
						} ?>
                    </div>
                    
			   <div class="ser-caption">		
				  <?php if($nav==1) { ?>
				<h3><a href="<?php echo $meta_service_navigation;?>" target="<?php if(get_post_meta( get_the_ID(),'meta_service_target', true )) echo "_blank";  ?>" > <?php echo the_title(); ?></a></h3>
				<p><?php echo $service_description; ?></p>
				<?php } 
				else { ?>
				     
                 </div>
				<?php } ?>
     
           </div>
         </div>
			
		<?php if($clr%3==0){	echo "<div class='clearfix'></div>"; } $clr++;  endwhile; 
		  } else { ?>	
		  
		<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="service3">
                    <div class="ser-image">
                     <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/images/service/1.jpg" class="img-responsive"></a>
                    </div>
                    <div class="ser-caption">
                        <h3><a href="#">Flexibility Service</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                    </div>
                </div>
            </div>
		 
		  <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="service3">
                    <div class="ser-image">
                       <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/images/service/2.jpg" class="img-responsive"></a>
                    </div>
                    <div class="ser-caption">
                        <h3><a href="#">Powerful Performance</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                    </div>
                </div>
            </div>
			
			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="service3">
                    <div class="ser-image">
                       <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/images/service/3.jpg" class="img-responsive"></a>
                    </div>
                    <div class="ser-caption">
                        <h3><a href="#">Free Support</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                    </div>
                </div>
            </div>
			
		<div class="clearfix"></div>	
		
			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="service3">
                    <div class="ser-image">
                       <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/images/service/4.jpg" class="img-responsive"></a>
                    </div>
                    <div class="ser-caption">
                        <h3><a href="#">Responsive Design</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                    </div>
                </div>
            </div>
			
			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="service3">
                    <div class="ser-image">
                      <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/images/service/5.jpg" class="img-responsive"></a>
                    </div>
                    <div class="ser-caption">
                        <h3><a href="#">Creative Design</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                    </div>
                </div>
            </div>
			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="service3">
                    <div class="ser-image">
                      <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/images/service/6.jpg" class="img-responsive"></a>
                    </div>
                    <div class="ser-caption">
                        <h3><a href="#">Unlimited Features</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                    </div>
                </div>
            </div>
			
	     <div class="clearfix"></div>
		  <?php } ?>

	  </div>
 </div>	
</div>
<!-----/Services Section------->
<?php get_footer(); ?>