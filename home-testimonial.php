<?php 
	$esol_option=theme_default_data(); 
	$testimonial_setting = wp_parse_args(  get_option( 'esol_option', array() ), $esol_option );
	if($testimonial_setting['enable_home_testimonial'] == 1) { ?>
 <!-- Start contain wrapp -->
	<div class="contain-wrapp gray-container padding-bot50">	
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="main-title">
				     <h2 class="wow fadeInLeft animated" data-wow-duration="4s"><?php echo $testimonial_setting['testimo_heading_title'].'&nbsp'; ?><span><?php echo $testimonial_setting['testimo_heading_two']; ?></span> </h2> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 owl-column-wrapp">
					<div id="home-testimonial" class="owl-carousel">
					<?php
					$count_posts=$testimonial_setting['service_display_count'];
					$argus=array('post_type' => 'testimonial','posts_per_page'=>$count_posts);
					$testimonial=new WP_Query($argus);
					  if($testimonial->have_posts())
					  {
						while($testimonial->have_posts()) : $testimonial->the_post(); 
						$testimonial_designation = get_post_meta(get_the_id(),'testimonial_designation',true);
					?>
					   	<div class="item">
							<div class="testimoni-wrapp centered">
								<div class="testimoni-contain">
									<p>
									<?php the_content(); ?>
									</p>
								</div>
								<div class="testimo-author">
								<?php $default=array('class'=>'testimo-avatar');
							if(has_post_thumbnail())
							{ ?>
							<a href="#">
							<?php the_post_thumbnail('',$default); ?></a>
							<?php } ?>
							<span><?php the_title(); ?></span>
							<a href="#"><?php echo $testimonial_designation; ?></a>
								</div>
							</div>
						</div>
						<!-- Start testimoni 1 -->
						<?php endwhile; } else { ?>
						<div class="item">
							<div class="testimoni-wrapp centered">
								<div class="testimoni-contain">
									<p>
									Debet error everti ex pri, an vis soluta alienum intellegat. Nusquam praesent ea per, sit no nibh fabulas, pri modo tibique percipitur an pri utinam legere antiopam et.
									</p>
								</div>
								<div class="testimo-author">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/team/1.jpg" class="testimo-avatar" alt=""/></a>
									<span>Lasmini</span>
									<a href="#">Saursepuh corp.</a>
								</div>
							</div>
						</div>
						<!-- End testimoni 1 -->
						
						<!-- Start testimoni 2 -->
						<div class="item">
							<div class="testimoni-wrapp centered">
								<div class="testimoni-contain">
									<p>
									Omnesque atomorum, pro integre nibh sale meis eam cu. Ut vim modus zril, ex cum erat dictas urbanitas pertinacia eu eum. Usu in ullum omnesque atomoru pro integre imperdiet.
									</p>
								</div>
								<div class="testimo-author">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/team/2.jpg" class="testimo-avatar" alt=""/></a>
									<span>Sangkuriang</span>
									<a href="#">TB parahu inc.</a>
								</div>
							</div>
						</div>
						<!-- End testimoni 2 -->
						
						<!-- Start testimoni 3 -->
						<div class="item">
							<div class="testimoni-wrapp centered">
								<div class="testimoni-contain">
									<p>
									Eu vel reque eripuit sanctus. Mei ei erant soleat percipitur. Eam ipsum feugait eu, nec vero verear aliquid ex eripuit sanctus. Prima tation impetus at his zril antiopam.
									</p>
								</div>
								<div class="testimo-author">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/team/3.jpg" class="testimo-avatar" alt=""/></a>
									<span>Sembara</span>
									<a href="#">MG Merapi corp.</a>
								</div>
							</div>
						</div>
						<!-- End testimoni 3 -->
						
						<!-- Start testimoni 4 -->
						<div class="item">
							<div class="testimoni-wrapp centered">
								<div class="testimoni-contain">
									<p>
									Eu vel reque eripuit sanctus. Mei ei erant soleat percipitur. Eam ipsum feugait eu, nec vero verear aliquid ex eripuit sanctus. Prima tation impetus at his zril antiopam.
									</p>
								</div>
								<div class="testimo-author">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/team/4.jpg" class="testimo-avatar" alt=""/></a>
									<span>Sembara</span>
									<a href="#">MG Merapi corp.</a>
								</div>
							</div>
						</div>
						<!-- End testimoni 4 -->
						
						<!-- Start testimoni 5 -->
						<div class="item">
							<div class="testimoni-wrapp centered">
								<div class="testimoni-contain">
									<p>
									Eu vel reque eripuit sanctus. Mei ei erant soleat percipitur. Eam ipsum feugait eu, nec vero verear aliquid ex eripuit sanctus. Prima tation impetus at his zril antiopam.
									</p>
								</div>
								<div class="testimo-author">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/team/1.jpg" class="testimo-avatar" alt=""/></a>
									<span>Sembara</span>
									<a href="#">MG Merapi corp.</a>
								</div>
							</div>
						</div>
						<!-- End testimoni 5 -->
						
						<!-- Start testimoni 6 -->
					    <div class="item">
							<div class="testimoni-wrapp centered">
								<div class="testimoni-contain">
									<p>
									Eu vel reque eripuit sanctus. Mei ei erant soleat percipitur. Eam ipsum feugait eu, nec vero verear aliquid ex eripuit sanctus. Prima tation impetus at his zril antiopam.
									</p>
								</div>
								<div class="testimo-author">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/team/2.jpg" class="testimo-avatar" alt=""/></a>
									<span>Sembara</span>
									<a href="#">MG Merapi corp.</a>
								</div>
							</div>
						</div>
						<?php } ?>
						<!-- End testimoni 6 -->
					</div>
				</div>
			</div>
		</div>
	</div>
 <!---/Testimonial Section----->
 
<div class="clearfix"></div>
<?php } ?>