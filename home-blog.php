<?php 
	$esol_option=theme_default_data(); 
	$blog_setting = wp_parse_args(  get_option( 'esol_option', array() ), $esol_option );
	?>
<div class="contain-wrapp paddingbot-clear">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main-title">
				     <h2 class="wow fadeInLeft animated" data-wow-duration="4s">Latest  <span>Blog</span> </h2> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 owl-column-wrapp">
					<div id="home-blog" class="owl-carousel topControls owl-theme">
						<!-- Start article post 1 -->
						<?php   $post_display_count = $blog_setting['post_display_count'];
						$blog_args=array('post_type'=>'post','posts_per_page' =>$post_display_count);
						$blog= new WP_Query($blog_args);
						if($blog->have_posts()):
							while($blog->have_posts()):
									$blog->the_post();
									?>
									
						<div class="item">
							<div class="blog-area single-recent-blog wow animated fadeInUp">
							<?php 
							$default=array('class'=>'img-responsive');
							if(has_post_thumbnail())
									{ ?>
							<div class="blog_img">
								 <div class="blog-showcase-overlay">
									<div class="blog-showcase-overlay-inner">
										<div class="blog-showcase-icons">							
											 <a href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
										</div>
									</div>
								  </div>
								<?php the_post_thumbnail('',$default); ?>
							</div>
							<?php } ?>
							<div class="srb-content gray-container">
								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<ul class="post-meta">
									<li><a href="#"><i class="fa fa-calendar"></i><span><?php the_date('j'); ?></span><?php echo get_the_date('M'); ?></a></li>
									<li><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><i class="fa fa-user"></i><?php echo get_the_author(); ?> </a></li>
									<li><a href="<?php the_permalink(); ?>"><i class="fa fa-tags"></i><?php the_tags('', ', '); ?></a></li>
									<li><a href="#"><i class="fa fa-comments"></i> <?php comments_popup_link( '0', '1', '%', '', '-'); ?></a></li>
								</ul>
								<p><?php echo esol_blog_excerpt(); ?></p>
								<a class="read_more" href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-double-right"> </i></a>
							</div>
						</div>
						</div> 
						<!--/item------------>
						<?php endwhile; endif; ?>
						
				</div>
			</div>
		</div>
	</div>
</div>	
<div class="clearfix"></div>		