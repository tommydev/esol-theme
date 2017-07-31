<!-----Home Gallery------->
<?php 
	$esol_option=theme_default_data(); 
	$gallery_setting = wp_parse_args(  get_option( 'esol_option', array() ), $esol_option );
	?>
<section class="home-gallery-section gallery wow fadeInUp" data-wow-duration="1s" id="gallery">
   <div class="container">
     <div class="col-md-12">
		<div class="main-title">
		<?php if($gallery_setting['enable_home_portfolio'] == 1) { ?>
		   <h2 class="wow fadeInLeft" data-wow-duration="4s"><?php echo $gallery_setting['gallery_title_one']; ?> <span><?php echo $gallery_setting['gallery_title_two']; ?></span> </h2>
		 
		   <div class="seperator wow fadeInRight" data-wow-duration="6s"></div>
		</div>
      </div>	
    </div>
   <div class="container-fluid">	
	  <div id="gallery-carousel" class="owl-carousel">
	   <?php
			$t=true;
		$count_posts=$gallery_setting['portfolio_display_count'];
		$argus=array('post_type' => 'service');
		 $args = array (
			'post_type' => 'portfolio','posts_per_page'=>$count_posts);
			$portfolio_query = new WP_Query($args);
							
			if( $portfolio_query->have_posts() ) { 
				while($portfolio_query->have_posts()) : 
						$portfolio_query->the_post(); ?>
		<div class="item <?php if($t==true){echo 'active';} $t=false;  ?>">
		   <div class="single gallery-col wow animated zoomIn">
			<div class="home-gallery-showcase">
			<?php $default=array('class'=>'img-responsive');
					if(has_post_thumbnail()) {
									$post_thumbnail_id = get_post_thumbnail_id();
									$post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id );
									if(get_post_meta( get_the_ID(),'portfolio_project_link', true )) 
										{ $portfolio_project_link = get_post_meta( get_the_ID(),'portfolio_project_link', true ); }
										else 
										{ $portfolio_project_link = get_post_permalink(); } 
											the_post_thumbnail('',$default);	?>
				<div class="home-gallery-showcase-overlay">
					<div class="home-gallery-showcase-overlay-inner ">
						<div class="home-gallery-showcase-icons">
							<a title="Esol" href="<?php echo $portfolio_project_link;  if(get_post_meta( get_the_ID(),'portfolio_project_target', true )) { echo "target='_blank'"; }?>"><i class="fa fa-link"></i></a>
							 <a class="sb" href="<?php echo $post_thumbnail_url; ?>"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<?php } ?>
			  </div>
			 </div>
		  </div>
		  <?php endwhile; } else { ?>
			
				<div class="item">
		   <div class="single gallery-col wow animated zoomIn">
			<div class="home-gallery-showcase">
				<img class="gallery-image" alt="Home" src="<?php echo  get_template_directory_uri(); ?>/images/protfolio/1.jpg">
				<div class="home-gallery-showcase-overlay">
					<div class="home-gallery-showcase-overlay-inner ">
						<div class="home-gallery-showcase-icons">
							<a title="Esol" href="#"><i class="fa fa-link"></i></a>
							 <a class="sb" href="<?php echo $post_thumbnail_url; ?>"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
			  </div>
			 </div>
		  </div>
		 <div class="item">
		   <div class="single gallery-col wow animated zoomIn">
			<div class="home-gallery-showcase">
				<img class="gallery-image" alt="Home" src="<?php echo  get_template_directory_uri(); ?>/images/protfolio/2.jpg">
				<div class="home-gallery-showcase-overlay">
					<div class="home-gallery-showcase-overlay-inner ">
						<div class="home-gallery-showcase-icons">
							<a title="Esol" href="#"><i class="fa fa-link"></i></a>
						 <a class="sb" href="<?php echo $post_thumbnail_url; ?>"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
			  </div>
			 </div>
		  </div>
		<div class="item">
		   <div class="single gallery-col wow animated zoomIn">
			<div class="home-gallery-showcase">
				<img class="gallery-image" alt="Home" src="<?php echo  get_template_directory_uri(); ?>/images/protfolio/3.jpg">
				<div class="home-gallery-showcase-overlay">
					<div class="home-gallery-showcase-overlay-inner ">
						<div class="home-gallery-showcase-icons">
							<a title="Esol" href="#"><i class="fa fa-link"></i></a>
							 <a class="sb" href="<?php echo $post_thumbnail_url; ?>"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
			  </div>
			 </div>
		  </div>
		<div class="item">
		   <div class="single gallery-col wow animated zoomIn">
			<div class="home-gallery-showcase">
				<img class="gallery-image" alt="Home" src="<?php echo  get_template_directory_uri(); ?>/images/protfolio/4.jpg">
				<div class="home-gallery-showcase-overlay">
					<div class="home-gallery-showcase-overlay-inner ">
						<div class="home-gallery-showcase-icons">
							<a title="Esol" href="#"><i class="fa fa-link"></i></a>
						  <a class="sb" href="<?php echo $post_thumbnail_url; ?>"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
			  </div>
			 </div>
		  </div>
		<div class="item">
		   <div class="single gallery-col wow animated zoomIn">
			<div class="home-gallery-showcase">
				<img class="gallery-image" alt="Home" src="<?php echo  get_template_directory_uri(); ?>/images/protfolio/5.jpg">
				<div class="home-gallery-showcase-overlay">
					<div class="home-gallery-showcase-overlay-inner ">
						<div class="home-gallery-showcase-icons">
							<a title="Esol" href="#"><i class="fa fa-link"></i></a>
							 <a class="sb" href="<?php echo $post_thumbnail_url; ?>"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
			  </div>
			 </div>
		  </div>
		<div class="item">
		   <div class="single gallery-col wow animated zoomIn">
			<div class="home-gallery-showcase">
				<img class="gallery-image" alt="Home" src="<?php echo  get_template_directory_uri(); ?>/images/protfolio/6.jpg">
				<div class="home-gallery-showcase-overlay">
					<div class="home-gallery-showcase-overlay-inner ">
						<div class="home-gallery-showcase-icons">
							<a title="Esol" href="#"><i class="fa fa-link"></i></a>
							 <a class="sb" href="<?php echo $post_thumbnail_url; ?>"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
			  </div>
			 </div>
		  </div>
		 <?php } ?>
		  </div>
	   </div>
	     <?php } ?>
</section> 
<!----/Home Gallery-------> 
<div class="clearfix"></div>
