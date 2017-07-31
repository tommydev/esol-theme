<?php 
	$esol_option=theme_default_data(); 
	$client_setting = wp_parse_args(  get_option( 'esol_option', array() ), $esol_option );
	?>
<section class="padding60 gallery wow animated fadeInUp" id="gallery">
  <div class="container">
     <div class="col-md-12">
		<div class="main-title">
		<?php if($client_setting['home_client_enabled'] == 1) { ?>
		   <h2 class="wow fadeInLeft" data-wow-duration="4s"><?php echo $client_setting['home_client_title_one']; ?> <span><?php echo $client_setting['home_client_title_two']; ?></span> </h2>
		   <?php } ?>
		   <div class="seperator wow fadeInRight" data-wow-duration="6s"></div>
		</div>
      </div>	
    </div>
   <div class="container-fluid">
	  <div class="clearfix"></div>
	   <div id="clients-carousel">
	   <?php 	$t=true;
					//$count_posts=wp_count_posts('becorp_client')->publish;
					$args = array (
					'post_type' => 'client','post__not_in'=>get_option("sticky_posts"));
					$client_query = new WP_Query($args);
									
					if( $client_query->have_posts() ) { 
						while($client_query->have_posts()) : 
								$client_query->the_post();
							    $client_link=get_post_meta( get_the_ID(), 'client_link', true );?>
		   <div class="item">
			  <div class="single">
				<?php $default=array('class'=>'img-responsive');
						if(has_post_thumbnail()){ ?>
						
							<a href="<?php echo $client_link;?>" target="<?php if(get_post_meta( get_the_ID(),'client_target', true )) echo "_blank";  ?>"><?php the_post_thumbnail('',$default);?> </a>
						<?php }	?>
			  </div>
			</div>
			<?php endwhile; }  else { ?>
				<div class="item">
			  <div class="single">
				<img alt="Home" src="<?php echo  get_template_directory_uri(); ?>/images/clients/1.jpg">
			  </div>
			</div>
		  <div class="item">
			  <div class="single">
				<img alt="Home" src="<?php echo  get_template_directory_uri(); ?>/images/clients/2.jpg">
			  </div>
			</div>
		   <div class="item">
			  <div class="single">
				<img alt="Home" src="<?php echo  get_template_directory_uri(); ?>/images/clients/3.jpg">
			  </div>
			</div>
		  <div class="item">
			  <div class="single">
				<img alt="Home" src="<?php echo  get_template_directory_uri(); ?>/images/clients/4.jpg">
			  </div>
			</div>
		   <div class="item">
			  <div class="single">
				<img alt="Home" src="<?php echo  get_template_directory_uri(); ?>/images/clients/5.jpg">
			  </div>
			</div>
		  <div class="item">
			  <div class="single">
				<img alt="Home" src="<?php echo  get_template_directory_uri(); ?>/images/clients/6.jpg">
			  </div>
			</div>
			<div class="item">
			  <div class="single">
				<img alt="Home" src="<?php echo  get_template_directory_uri(); ?>/images/clients/4.jpg">
			  </div>
			</div>
		   <div class="item">
			  <div class="single">
				<img alt="Home" src="<?php echo  get_template_directory_uri(); ?>/images/clients/5.jpg">
			  </div>
			</div>
			 <div class="item">
			  <div class="single">
				<img alt="Home" src="<?php echo  get_template_directory_uri(); ?>/images/clients/6.jpg">
			  </div>
			</div>
			 <div class="item">
			  <div class="single">
				<img alt="Home" src="<?php echo  get_template_directory_uri(); ?>/images/clients/7.jpg">
			  </div>
			</div>
			 <div class="item">
			  <div class="single">
				<img alt="Home" src="<?php echo  get_template_directory_uri(); ?>/images/clients/8.jpg">
			  </div>
			</div>
			<?php } ?>
		  </div>
   </div>
</section>
