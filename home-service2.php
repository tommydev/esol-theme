<div class="home_services_section">
  <div class="container">
    <div class="row">
	<?php 
	$esol_option=theme_default_data(); 
	$service_setting = wp_parse_args(  get_option( 'esol_option', array() ), $esol_option );
	?>
     <div class="col-md-12">
		<div class="main-title">
		<?php 
		if($service_setting['service_section_enabled'] == 1) { ?>
		   <h2 class="wow fadeInLeft" data-wow-duration="4s"><?php echo $service_setting['service_title_one']; ?><span><?php echo $service_setting['service_title_two']; ?></span> </h2>
		  
		   <div class="seperator wow fadeInRight" data-wow-duration="6s"></div>
		</div>
      </div>	
    </div>	
	
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
		 <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="cdns-service-container media">
                    <div class="cdns-theme-feature-icon">
					<?php if($nav==1) { ?>
                        <a href="<?php echo $meta_service_navigation;?>" target="<?php if(get_post_meta( get_the_ID(),'meta_service_target', true )) echo "_blank";  ?>" > <i class="fa <?php echo $service_icon_awesome; ?>"></i></a>
			<?php }  else { ?>
				<i class="<?php echo $service_icon_awesome; ?>"></i>
			<?php } ?>
                    </div>
                    <div id="service-1" class="media-body">
                        <?php if($nav==1) { ?>
			<h3><a href="<?php echo $meta_service_navigation;?>" target="<?php if(get_post_meta( get_the_ID(),'meta_service_target', true )) echo "_blank";  ?>" > <?php echo the_title(); ?></a></h3>
			<p><?php echo $meta_service_description; ?></p>
			<?php } else { ?>
			<h3><?php the_title(); ?></h3>
                        <p><?php echo $meta_service_description; ?></p>
						<?php } ?>
                    </div>
                </div>
            </div>
		  <?php if($clr%3==0){	echo "<div class='clearfix'></div>"; } $clr++;  endwhile; 
		  } else {
											$fontowsome_icon = array('fa fa-tablet', 'fa fa-coffee', 'fa fa-leaf', 'fa fa-rocket', 'fa fa-cogs', 'fa fa-magic');
											$service_title= array('Responsive Design','Flexibility Servers','Unlimited Features', 'Powerful Performance', 'Free Support', 'Creative Design');
											$service_description =array('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
											'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
											'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
											'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
											'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
											'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
			for($i=1; $i<=6 ; $i++)
				{
		  ?>
		 <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="cdns-service-container media">
                    <div class="cdns-theme-feature-icon">
                        <i class="<?php echo $fontowsome_icon[$i-1]; ?>"></i>
                    </div>
                    <div id="service-1" class="media-body">
                        <h3><?php echo $service_title[$i-1]; ?></h3>
                        <p><?php echo $service_description[$i-1]; ?></p>
                    </div>
                </div>
            </div>
			<?php } } ?>
	</div>
	 <?php } ?>
</div>	
</div>
  <div class="clearfix"></div>