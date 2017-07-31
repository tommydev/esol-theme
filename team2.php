<?php 
//Template Name:Team template2
?>
<?php get_header(); ?>	

<!-- Page heading Section -->
<?php get_template_part('title','strip'); ?>
<!-- /Page heading Section -->
<?php 
	$team_setting=theme_default_data(); 
	$team_setting = wp_parse_args(  get_option( 'esol_option', array() ), $esol_option );
	?>
<!-- team section -->
<section class="home-team-section">
	<div class="container">
	<?php if($team_setting['about_team_temp_enabled'] == 1) { ?>
		<div class="main-title">
	      <h2 class="wow fadeInLeft animated animated" data-wow-duration="4s"><?php echo $team_setting['team_title_one']; ?> <span><?php echo $team_setting['team_title_two']; ?></span> </h2> 
	   </div>
	   <?php } ?>
      <div class="clearfix"></div>
	  
		<div class="team-grid row">
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
				<div class="col-lg-3 col-md-3 col-sm-3 es-team-col" data-aos="zoom-in">
				<div class="view view-seventh">
						<?php
							if(has_post_thumbnail()) {
									$post_thumbnail_id = get_post_thumbnail_id();
									$post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id );
									?>
								<img alt="<?php the_title(); ?>" src="<?php echo $post_thumbnail_url; ?>" class="img-responsive" />
								<?php } ?>
					<div class="mask1">
						<h4><?php the_title(); ?></h4>
						<ul class="team-social">
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
						<p class="info"><?php echo $occupation; ?></p>
					</div>
				</div>
			</div>
		<?php endwhile ; } else { ?>
			<div class="col-lg-3 col-md-3 col-sm-3 es-team-col" data-aos="zoom-in">
				<div class="view view-seventh">
					<img src="<?php echo get_template_directory_uri(); ?>/images/team/1.jpg" alt="" class="img-responsive"/>
					<div class="mask1">
						<h4>Patrick</h4>
						<ul class="team-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>		
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
						<p class="info">Chairman</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 es-team-col" data-aos="zoom-in">
				<div class="view view-seventh">
					<img src="<?php echo get_template_directory_uri(); ?>/images/team/2.jpg" alt="" class="img-responsive"/>
					<div class="mask2">
						<h4>Robert</h4>
						<ul class="team-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>		
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
						<p class="info">Founder</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 es-team-col" data-aos="zoom-in">
				<div class="view view-seventh">
					<img src="<?php echo get_template_directory_uri(); ?>/images/team/3.jpg" alt="" class="img-responsive"/>
					<div class="mask3">
						<h4>Johnny Cage</h4>
						<ul class="team-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>		
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
						<p class="info">Secretary</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 es-team-col" data-aos="zoom-in">
				<div class="view view-seventh">
					<img src="<?php echo get_template_directory_uri(); ?>/images/team/4.jpg" alt="" class="img-responsive"/>
					<div class="mask4">
						<h4>Max Payne</h4>
						<ul class="team-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>		
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
						<p class="info">Director</p>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="team-grid row">
			<div class="col-lg-3 col-md-3 col-sm-3 es-team-col" data-aos="zoom-in">
				<div class="view view-seventh">
					<img src="<?php echo get_template_directory_uri(); ?>/images/team/1.jpg" alt="" class="img-responsive"/>
					<div class="mask1">
						<h4>Patrick</h4>
						<ul class="team-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>		
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
						<p class="info">Chairman</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 es-team-col" data-aos="zoom-in">
				<div class="view view-seventh">
					<img src="<?php echo get_template_directory_uri(); ?>/images/team/2.jpg" alt="" class="img-responsive"/>
					<div class="mask2">
						<h4>Robert</h4>
						<ul class="team-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>		
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
						<p class="info">Founder</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 es-team-col" data-aos="zoom-in">
				<div class="view view-seventh">
					<img src="<?php echo get_template_directory_uri(); ?>/images/team/3.jpg" alt="" class="img-responsive"/>
					<div class="mask3">
						<h4>Johnny Cage</h4>
						<ul class="team-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>		
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
						<p class="info">Secretary</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 es-team-col" data-aos="zoom-in">
				<div class="view view-seventh">
					<img src="<?php echo get_template_directory_uri(); ?>/images/team/4.jpg" alt="" class="img-responsive"/>
					<div class="mask4">
						<h4>Max Payne</h4>
						<ul class="team-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>		
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
						<p class="info">Director</p>
					</div>
				</div>
			</div>
			<?php } ?>
			<div class="clearfix"></div>
		</div>
	</div>	
</section>
<!-- /team section -->

<?php get_footer(); ?>