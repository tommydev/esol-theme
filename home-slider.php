<div class="homepage-mycarousel">
	<div id="main-slider" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		<?php
				$i=1;
				//$count_posts = wp_count_posts( 'becorp_slider')->publish;
				$args = array( 'post_type' => 'slider','posts_per_page'=>-1); 	
				$slider = new WP_Query( $args );
				if ( $slider->have_posts() ) {
				while ( $slider->have_posts() ) {
				
				$slider->the_post(); ?>
		<li data-target="#main-slider" data-slide-to="<?php echo $i;?>" class="<?php if($i==1){ echo 'active';} ?>"></li>
		<?php $i++; } } else { ?>
			<li data-target="#main-slider" data-slide-to="0" class="active"></li>
		<li data-target="#main-slider" data-slide-to="1"></li>
		<li data-target="#main-slider" data-slide-to="2"></li>
	<?php } ?>
		</ol>

	 <div class="carousel-inner" role="listbox">
		<?php $t=true;
				if ( $slider->have_posts() ) {
				while ( $slider->have_posts() ) {
				$slider->the_post();  ?>
		<div class="item <?php if($t==true){ echo 'active';}$t=false; ?>">
		<?php 
		$default=array('class' => 'img-responsive');
		if(has_post_thumbnail()){
			
				the_post_thumbnail('',$default);
		
		} ?>
		 <!-- Caption -->
				<div class="carousel-caption header-text">
					<div class="col-md-12 text-center">
						<h2 class="wow fadeInLeft" data-wow-duration="2s"><?php the_title(); ?></h2>
						<?php 
							$sliderimg_description = sanitize_text_field( get_post_meta( get_the_ID(),'image_description', true ));
							$meta_more_info_text = sanitize_text_field( get_post_meta( get_the_ID(),'meta_more_info_text', true ));
							$meta_more_info_url = sanitize_text_field( get_post_meta( get_the_ID(),'meta_more_info_url', true ));
							
							$meta_buy_now_text = sanitize_text_field( get_post_meta( get_the_ID(),'meta_buy_now_text', true ));
							$meta_buy_now_url = sanitize_text_field( get_post_meta( get_the_ID(),'meta_buy_now_url', true ));
							
							
						?>
						<p class="wow fadeInRight" data-wow-duration="4s"><span><?php echo $sliderimg_description; ?></p>
						<div class="slide-btn">
						  <a class="main-btn animate fadeInUp" href="<?php echo $meta_more_info_url; ?>"><?php echo $meta_more_info_text; ?></a>
						  <a class="main-btn solid-btn animate fadeInUp" href="<?php echo $meta_buy_now_url; ?>"><?php echo $meta_buy_now_text; ?></a>
						</div>  
					</div>
				 </div>
			<!-- /Caption -->
		</div>
		<?php $i++; } } else { ?>
				<div class="item active">
		  <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slide1.jpg" class="img-responsive" alt="img">
		 <!-- Caption -->
				<div class="carousel-caption header-text">
					<div class="col-md-12 text-center">
						<h2 class="wow fadeInLeft" data-wow-duration="2s">Multipurpose Wordpress Theme</h2>
						<p class="wow fadeInRight" data-wow-duration="4s"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<div class="slide-btn">
						  <a class="main-btn animate fadeInUp" href="#">More Info</a>
						  <a class="main-btn solid-btn animate fadeInUp" href="#">Buy Now</a>
						</div>  
					</div>
				 </div>
			<!-- /Caption -->
		</div>
		<div class="item">
		  <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slide2.jpg" class="img-responsive" alt="img">
				 <!-- Caption -->
				<div class="carousel-caption header-text">
					<div class="col-md-12 text-center">
						<h2 class="wow fadeInLeft" data-wow-duration="2s">Responsive Wordpress Theme</h2>
						<p class="wow fadeInRight" data-wow-duration="4s"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<div class="slide-btn">
						  <a class="main-btn animate fadeInUp" href="#">More Info</a>
						  <a class="main-btn solid-btn animate fadeInUp" href="#">Buy Now</a>
						</div> 
					</div>
				 </div>
			<!-- /Caption -->
		</div>
		<div class="item">
		  <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slide3.jpg" class="img-responsive" alt="img">
			 <!-- Caption -->
			  <div class="carousel-caption header-text">
					<div class="col-md-12 text-center">
						<h2 class="wow fadeInLeft" data-wow-duration="2s">Multipurpose Wordpress Theme</h2>
						<p class="wow fadeInRight" data-wow-duration="4s"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<div class="slide-btn">
						  <a class="main-btn animate fadeInUp" href="#">More Info</a>
						  <a class="main-btn solid-btn animate fadeInUp" href="#">Buy Now</a>
						</div> 
					</div>
				 </div>
		<!-- /Caption -->
		</div>
		<?php } ?>
		</div>  
		
		<!-- Pagination --> 
		<ul class="carou-direction-nav">
			<li><a class="carou-prev" href="#main-slider" data-slide="prev"></a></li>
			<li><a class="carou-next" href="#main-slider" data-slide="next"></a></li>
		</ul> 
		<!-- /Pagination -->
	</div>
	<div class="bottom-shadow"></div>	
</div>
<!-- /Slider Section -->

 <div class="clearfix"></div>