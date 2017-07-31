<div class="contain-wrapp paddingbot-clear">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main-title">
				     <h2 class="wow fadeInLeft animated" data-wow-duration="4s">Our <span>Default pricing table</span> </h2> 
					</div>
				</div>
			</div>
		<div class="clearfix"></div>
		
		<!-- Start Pricing -->
			<div class="row">
			<?php 
		// $count_posts=$service_setting['service_display_count'];
		$argus=array('post_type' => 'pricing_table');
		$service=new WP_Query($argus);
		  if($service->have_posts())
		  {
			while($service->have_posts()) : $service->the_post(); 
			$item_pricing=get_post_meta(get_the_id(),'item_pricing',true);
			$time_duration=get_post_meta(get_the_id(),'time_duration',true);
			
			$item_one_details=get_post_meta(get_the_id(),'item_one_details',true);
			$item_two_details=get_post_meta(get_the_id(),'item_two_details',true);
			$item_three_details=get_post_meta(get_the_id(),'item_three_details',true);
			$item_four_details=get_post_meta(get_the_id(),'item_four_details',true);
			$item_button_text=get_post_meta(get_the_id(),'item_button_text',true);
			$item_button_url=get_post_meta(get_the_id(),'item_button_url',true);
			?>
			<div class="col-md-4">
					<!-- Start Pricing 01 -->
					<div class="pricing-item secondary">
						<h3 class="pricing-title"><?php the_title(); ?></h3>
						<div class="pricing-price">
							<span class="pricing-anim pricing-anim-1">
								<span class="pricing-currency">$</span><?php echo $item_pricing; ?>
							</span>
							<span class="pricing-anim pricing-anim-2">
								<span class="pricing-period">./<?php echo $time_duration; ?></span>
							</span>
						</div>
						<ul class="pricing-feature-list">
							<li class="list-style1"><?php echo $item_one_details; ?></li>
							<li class="list-style2"><?php echo $item_two_details; ?></li>
							<li class="list-style1"><?php echo $item_three_details; ?></li>
							<li class="list-style2"><?php echo $item_four_details; ?></li>
							<li class="list-style1"><?php echo $item_five_details; ?></li>
						</ul>
						<div class="pricing-footer">
							<a href="<?php echo $item_button_url; ?>" target="__blank" class="main-btn hvr-s-b"><?php echo $item_button_text; ?></a>
						</div>
					</div>
					<!-- End Pricing 01 -->
				</div>
			
			<?php endwhile; } else { ?>
				<div class="col-md-4">
					<!-- Start Pricing 01 -->
					<div class="pricing-item secondary">
						<h3 class="pricing-title">Free</h3>
						<div class="pricing-price">
							<span class="pricing-anim pricing-anim-1">
								<span class="pricing-currency">$</span>0
							</span>
							<span class="pricing-anim pricing-anim-2">
								<span class="pricing-period">.00/ year</span>
							</span>
						</div>
						<ul class="pricing-feature-list">
							<li class="list-style1">1 GB of space</li>
							<li class="list-style2">1 user access</li>
							<li class="list-style1">Support at $25/hour</li>
							<li class="list-style2">Small social media package</li>
							<li class="list-style1">$5 for update</li>
						</ul>
						<div class="pricing-footer">
							<a href="#" class="main-btn hvr-s-b">Choose plan</a>
						</div>
					</div>
					<!-- End Pricing 01 -->
				</div>
				<div class="col-md-4">
					<!-- Start Pricing 02 -->
					<div class="pricing-item secondary active">
						<h3 class="pricing-title">Personal</h3>
						<div class="pricing-price">
							<span class="pricing-anim pricing-anim-1">
								<span class="pricing-currency">$</span>49
							</span>
							<span class="pricing-anim pricing-anim-2">
								<span class="pricing-period">.99/ year</span>
							</span>
						</div>
						<ul class="pricing-feature-list">
							<li class="list-style1">20 GB of space</li>
							<li class="list-style2">5 user access</li>
							<li class="list-style1">Free support</li>
							<li class="list-style2">Full social media package</li>
							<li class="list-style1">Free for update</li>
						</ul>
						<div class="pricing-footer">
							<a href="#" class="main-btn hvr-s-b">Choose plan</a>
						</div>
					</div>
					<!-- End Pricing 02 -->
				</div>
				<div class="col-md-4">
					<!-- Start Pricing 03 -->
					<div class="pricing-item secondary">
						<h3 class="pricing-title">Business</h3>
						<div class="pricing-price">
							<span class="pricing-anim pricing-anim-1">
								<span class="pricing-currency">$</span>99
							</span>
							<span class="pricing-anim pricing-anim-2">
								<span class="pricing-period">.99/ year</span>
							</span>
						</div>
						<ul class="pricing-feature-list">
							<li class="list-style1">Unlimited space</li>
							<li class="list-style2">Unlimited user access</li>
							<li class="list-style1">Free support</li>
							<li class="list-style2">Full social media package</li>
							<li class="list-style1">Free for update</li>
						</ul>
						<div class="pricing-footer">
							<a href="#" class="main-btn hvr-s-b">Choose plan</a>
						</div>
					</div>
					<!-- End Pricing 03 -->
				</div>
				<?php } ?>
			</div>
			<!-- End Pricing -->
	</div>
</div>	
<div class="clearfix"></div>		