<?php 
//Template Name:Team template
?>
<?php get_header(); ?>	
<?php 
	$team_setting=theme_default_data(); 
	$team_setting = wp_parse_args(  get_option( 'esol_option', array() ), $esol_option );
	?>
<!-- Page heading Section -->
<?php get_template_part('title','strip'); ?>
<div class="clearfix"></div>
<div class="team-section padding60">
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<?php if($team_setting['about_team_temp_enabled'] == 1) { ?>
			<div class="main-title">
			   <h2 class="wow fadeInLeft" data-wow-duration="4s"><?php echo $team_setting['team_title_one']; ?> <span><?php echo $team_setting['team_title_two']; ?></span> </h2>
			   <div class="seperator wow fadeInRight" data-wow-duration="4s"></div>
			</div>	
			 <?php } ?>
          <div class="clearfix"></div>

			<div class="our-team">
				<div class="row">
				<?php
			$argus= array('post_type' => 'esol_team');
			$team_data = new WP_Query($argus);
			  if($team_data->have_posts())
			  {
				while($team_data->have_posts()) : $team_data->the_post(); 
					$nav=1;
				$occupation = get_post_meta(get_the_id(),'occupation',true);
				$team_description = get_post_meta(get_the_id(),'team_description',true);
				
				$fb_meta_save = get_post_meta(get_the_id(),'fb_meta_save',true);
				$fb_meta_save_chkbx = get_post_meta(get_the_id(),'fb_meta_save_chkbx',true);
				
				$twt_meta_save = get_post_meta(get_the_id(),'twt_meta_save',true);
				$twt_meta_save_chkbx = get_post_meta(get_the_id(),'twt_meta_save_chkbx',true);
				
				$google_meta_save = get_post_meta(get_the_id(),'google_meta_save',true);
				$google_meta_save_chkbx = get_post_meta(get_the_id(),'google_meta_save_chkbx',true);
				
				$lnkd_meta_save = get_post_meta(get_the_id(),'lnkd_meta_save',true);
				$lnkd_meta_save_chkbx = get_post_meta(get_the_id(),'lnkd_meta_save_chkbx',true);
			?>
				
							<div class="col-md-4 wow fadeInUp" data-wow-duration="1s">
						<div class="team-member">
							<div class="team-img">
								<?php
							if(has_post_thumbnail()) {
									$post_thumbnail_id = get_post_thumbnail_id();
									$post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id );
									?>
								<img alt="<?php the_title(); ?>" src="<?php echo $post_thumbnail_url; ?>" />
								<?php } ?>
								<div class="team-hover">
									<p><?php echo $team_description; ?></p>
								</div>
							</div>
							<div class="team-name">
								<span><?php echo $occupation; ?></span>
								<h5><a title="" href="#"><?php the_title(); ?></a></h5>
							</div>
							<ul class="social-media">
								<?php if($fb_meta_save) {
						if($fb_meta_save_chkbx){
							$target ="_blank"; } else{ $target ="_self"; } ?>
								<li><a title="" href="<?php if($fb_meta_save){ echo esc_html($fb_meta_save); } ?>" target="<?php echo $target; ?>" ><i class="fa fa-facebook"></i></a></li>
						<?php } ?>	

					<?php if($twt_meta_save) {
						if($twt_meta_save_chkbx){
							$target ="_blank"; } else{ $target ="_self"; } ?>
								<li><a title="" href="<?php if($twt_meta_save){ echo esc_html($twt_meta_save); } ?>" target="<?php echo $target; ?>" ><i class="fa fa-twitter"></i></a></li>
						<?php } ?>	

						<?php if($google_meta_save) {
						if($google_meta_save_chkbx){
							$target ="_blank"; } else{ $target ="_self"; } ?>
								<li><a title="" href="<?php if($google_meta_save){ echo esc_html($google_meta_save); } ?>" target="<?php echo $target; ?>" ><i class="fa fa-google-plus"></i></a></li>
						<?php } ?>
						
						<?php if($lnkd_meta_save) {
						if($lnkd_meta_save_chkbx){
							$target ="_blank"; } else{ $target ="_self"; } ?>
								<li><a title="" href="<?php if($lnkd_meta_save){ echo esc_html($lnkd_meta_save); } ?>" target="<?php echo $target; ?>" ><i class="fa fa-linkedin"></i></a></li>
						<?php } ?>
							</ul>
						</div><!-- Team Member -->
					</div>
				
				<?php endwhile ; } else { ?>
					<div class="col-md-4 wow fadeInUp" data-wow-duration="1s">
						<div class="team-member">
							<div class="team-img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/t1.jpg" alt="" />
								<div class="team-hover">
									<p>Curabitur blandit tempus portt et non magna. Fusce dapib nibh, ut fermentum</p>
								</div>
							</div>
							<div class="team-name">
								<span>Chife Excutive Officer</span>
								<h5><a title="" href="#">James Walter</a></h5>
							</div>
							<ul class="social-media">
								<li><a title="" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a title="" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a title="" href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a title="" href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div><!-- Team Member -->
					</div>
					<div class="col-md-4 wow fadeInUp" data-wow-duration="1s">
						<div class="team-member">
							<div class="team-img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/t2.jpg" alt="" />
								<div class="team-hover">
									<p>Curabitur blandit tempus portt et non magna. Fusce dapib nibh, ut fermentum</p>
								</div>
							</div>
							<div class="team-name">
								<span>Chife Excutive Officer</span>
								<h5><a title="" href="#">Nikki Walter</a></h5>
							</div>
							<ul class="social-media">
								<li><a title="" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a title="" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a title="" href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a title="" href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div><!-- Team Member -->
					</div>
					<div class="col-md-4 wow fadeInUp" data-wow-duration="1s">
						<div class="team-member">
							<div class="team-img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/t3.jpg" alt="" />
								<div class="team-hover">
									<p>Curabitur blandit tempus portt et non magna. Fusce dapib nibh, ut fermentum</p>
								</div>
							</div>
							<div class="team-name">
								<span>Chife Excutive Officer</span>
								<h5><a title="" href="#">Mic Waltainer</a></h5>
							</div>
							<ul class="social-media">
								<li><a title="" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a title="" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a title="" href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a title="" href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div><!-- Team Member -->
					</div>
				  <div class="clearfix"></div>
                   <div class="col-md-4 wow fadeInUp" data-wow-duration="1s">
						<div class="team-member">
							<div class="team-img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/t1.jpg" alt="" />
								<div class="team-hover">
									<p>Curabitur blandit tempus portt et non magna. Fusce dapib nibh, ut fermentum</p>
								</div>
							</div>
							<div class="team-name">
								<span>Chife Excutive Officer</span>
								<h5><a title="" href="#">James Walter</a></h5>
							</div>
							<ul class="social-media">
								<li><a title="" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a title="" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a title="" href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a title="" href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div><!-- Team Member -->
					</div>
					<div class="col-md-4 wow fadeInUp" data-wow-duration="1s">
						<div class="team-member">
							<div class="team-img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/t2.jpg" alt="" />
								<div class="team-hover">
									<p>Curabitur blandit tempus portt et non magna. Fusce dapib nibh, ut fermentum</p>
								</div>
							</div>
							<div class="team-name">
								<span>Chife Excutive Officer</span>
								<h5><a title="" href="#">Nikki Walter</a></h5>
							</div>
							<ul class="social-media">
								<li><a title="" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a title="" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a title="" href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a title="" href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div><!-- Team Member -->
					</div>
					<div class="col-md-4 wow fadeInUp" data-wow-duration="1s">
						<div class="team-member">
							<div class="team-img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/t3.jpg" alt="" />
								<div class="team-hover">
									<p>Curabitur blandit tempus portt et non magna. Fusce dapib nibh, ut fermentum</p>
								</div>
							</div>
							<div class="team-name">
								<span>Chife Excutive Officer</span>
								<h5><a title="" href="#">Mic Waltainer</a></h5>
							</div>
							<ul class="social-media">
								<li><a title="" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a title="" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a title="" href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a title="" href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div><!-- Team Member -->
					</div>	
				<?php } ?>
				</div>
			</div><!-- our-staff -->
		</div>
	</div>
</div>
</div>
<?php get_footer(); ?>