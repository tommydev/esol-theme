<?php 
	$esol_option=theme_default_data(); 
	$achievement_setting = wp_parse_args(  get_option( 'esol_option', array() ), $esol_option );
	if($achievement_setting['achievement_section_enabled'] == 1) { ?>
<!--facts-->
		<div class="stats" id="stats">
		 <div class="overlay">
			<div class="container">
				<div class="stats-info">
				<?php $clr=1;
		// $count_posts=$service_setting['service_display_count'];
		$argus=array('post_type' => 'achievement');
		$our_achievement=new WP_Query($argus);
		  if($our_achievement->have_posts())
		  {
			while($our_achievement->have_posts()) : $our_achievement->the_post(); 
			$fa_icon_name=sanitize_text_field(get_post_meta(get_the_id(),'fa_icon_name',true));
			$total_achieve=sanitize_text_field(get_post_meta(get_the_id(),'total_achieve',true));
				?>
				<div class="col-md-3 col-sm-3 stats-grid slideanim">
					  <i class="fa <?php echo $fa_icon_name; ?>" style="color:#3fc35f"></i>
						<div><span class="count"><?php echo $total_achieve; ?></span></div> 
						<h4 class="stats-info"><?php the_title(); ?></h4>
					</div>
				
		 <?php if($clr%4==0){	echo "<div class='clearfix'></div>"; } $clr++;  endwhile; 
		  } else { ?>
					<div class="col-md-3 col-sm-3 stats-grid slideanim">
					  <i class="fa fa-check-square-o" style="color:#3fc35f"></i>
						<div><span class="count">8070</span></div> 
						<h4 class="stats-info">Followers</h4>
					</div>
					<div class="col-md-3 col-sm-3 stats-grid slideanim">
					  <i class="fa fa-trophy" style="color:#ff2851" aria-hidden="true"></i>
						<div><span class="count">1000</span></div>
						<h4 class="stats-info">Awards</h4>
					</div>
					<div class="col-md-3 col-sm-3 stats-grid slideanim">
					  <i class="fa fa-heart-o" style="color:#ff871c" aria-hidden="true"></i>
						<div><span class="count">1980</span></div>
						<h4 class="stats-info">Happy Clients</h4>
					</div>
					<div class="col-md-3 col-sm-3 stats-grid slideanim">
					    <i class="fa fa-share-square-o" style="color:#ffd133" aria-hidden="true"></i>
						<div><span class="count">4070</span></div>
						<h4 class="stats-info">Share</h4>
					</div>
					<div class="clearfix"></div>
					<?php } ?>
				</div>
			</div>
		   </div>
		</div>
	<!--//facts-->
	<?php } ?>