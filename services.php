<?php 
//Template Name:Service Template
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
	
 <div class="clearfix"></div>
	
	<div class="row padding-top30">
	
	 <?php $clr=1;
		$count_posts=$service_setting['service_display_count'];
		$argus=array('post_type' => 'service','posts_per_page'=>$count_posts);
		$service=new WP_Query($argus);
		  if($service->have_posts())
		  {
			while($service->have_posts()) : $service->the_post(); 
				$nav=1;
			$service_icon_awesome=get_post_meta(get_the_id(),'service_icon_awesome',true);
			$meta_service_description=get_post_meta(get_the_id(),'meta_service_description',true);
			if(get_post_meta(get_the_id(),'meta_service_navigation',true))
			{
				$meta_service_navigation=sanitize_text_field(get_post_meta(get_the_id(),'meta_service_navigation',true));
			}
			else{ $nav=0; } ?>
			
		<div class="col-md-4 col-sm-6 service2">
		   <div class="service-box">
				<i class="fa <?php echo $service_icon_awesome; ?>"></i>
				<h2><?php the_title(); ?></h2>
				<p><?php echo $meta_service_description; ?>.</p>
				<?php if($nav==1) { ?>
				<a href="<?php echo $meta_service_navigation;?>" target="<?php if(get_post_meta( get_the_ID(),'meta_service_target', true )) echo "_blank";  ?>"  class="ser-redmore"><i class="fa fa-angle-double-left"></i></a>
				<?php } else { ?>
				<a href="<?php echo $meta_service_navigation;?>" target="<?php if(get_post_meta( get_the_ID(),'meta_service_target', true )) echo "_blank";  ?>"  class="ser-redmore"><i class="fa fa-angle-double-left"></i></a>
				<?php }
				?>
			</div>
		</div>
		 <?php if($clr%3==0){	echo "<div class='clearfix'></div>"; } $clr++;  endwhile; 
		  } else { ?>
	
	    <div class="col-md-4 col-sm-6 service2">
		   <div class="service-box">
				<i class="fa fa-tablet"></i>
				<h2>Responsive Design</h2>
				<p>Lorem ipsum dolor sit amet conse ctetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
				
				<a href="#" class="ser-redmore"><i class="fa fa-angle-double-left"></i></a>
			</div>
		</div>
		
	    <div class="col-md-4 col-sm-6 service2">
		   <div class="service-box">
				<i class="fa fa-coffee"></i>
				<h2>Flexibility Servers</h2>
				<p>Lorem ipsum dolor sit amet conse ctetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
				
				<a href="#" class="ser-redmore"><i class="fa fa-angle-double-left"></i></a>
			</div>
		</div>
		
	     <div class="col-md-4 col-sm-6 service2">
		   <div class="service-box">
				<i class="fa fa-rocket"></i>
				<h2>Powerful Performance</h2>
				<p>Lorem ipsum dolor sit amet conse ctetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
				
				<a href="#" class="ser-redmore"><i class="fa fa-angle-double-left"></i></a>
			</div>
		</div>
		
		 <div class="clearfix"></div>
		
		 <div class="col-md-4 col-sm-6 service2">
		   <div class="service-box">
				<i class="fa fa-cogs"></i>
				<h2>Free Support</h2>
				<p>Lorem ipsum dolor sit amet conse ctetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
				
				<a href="#" class="ser-redmore"><i class="fa fa-angle-double-left"></i></a>
			</div>
		</div>
		
	    <div class="col-md-4 col-sm-6 service2">
		   <div class="service-box">
				<i class="fa fa-magic"></i>
				<h2>Creative Design</h2>
				<p>Lorem ipsum dolor sit amet conse ctetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
				
				<a href="#" class="ser-redmore"><i class="fa fa-angle-double-left"></i></a>
			</div>
		</div>
		
	     <div class="col-md-4 col-sm-6 service2">
		   <div class="service-box">
				<i class="fa fa-leaf"></i>
				<h2>Flexibility Servers</h2>
				<p>Lorem ipsum dolor sit amet conse ctetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
				
				<a href="#" class="ser-redmore"><i class="fa fa-angle-double-left"></i></a>
			</div>
		</div>
		
  </div>
  <!-----/Services Section------->
 </div>	
</div>
<!-----/Services Section------->
<?php get_footer(); ?>