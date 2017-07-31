<!-------------Blog Section------------------->
<?php 
	$esol_option=theme_default_data(); 
	$blog_setting = wp_parse_args(  get_option( 'esol_option', array() ), $esol_option );
	?>
 <section class="blog_area section_padding wow fadeInUp" data-wow-duration="2s">
	<div class="container">
			 <div class="col-md-12">
				<div class="main-title">
				<?php if($blog_setting['home_blog_enabled'] == 1) { ?>
				   <h2 class="wow fadeInLeft" data-wow-duration="4s"><?php echo $blog_setting['team_title_one']; ?> <span><?php echo $blog_setting['team_title_two']; ?></span> </h2>
				   <?php } ?>
				   <div class="seperator wow fadeInRight" data-wow-duration="6s"></div>
				</div>
			  </div>		  
        <div class="clearfix"></div>
        <div class="col-md-10 col-md-offset-1 col-sm-12">

			<div id="blog-carousel">
			<?php   $post_display_count = $blog_setting['post_display_count'];
			$blog_args=array('post_type'=>'post','posts_per_page' =>$post_display_count);
			$blog= new WP_Query($blog_args);
			if($blog->have_posts()):
				while($blog->have_posts()):
						$blog->the_post();
			
			?>
				<div class="item">
						<div class="home-blog-area wow fadeInUp" data-wow-duration="2s">
						
						  <figure class="blog_img">
							<a href="<?php the_permalink(); ?>"><?php
							$default=array('class'=>'img-responsive');
							if(has_post_thumbnail()){
							
										the_post_thumbnail('',$default);
							} ?>
							</a>
							 <div class="blog_round">
								<p><span><?php echo get_the_date('j') ?></span><?php echo get_the_date('M') ?></p>
							 </div> 
							  <div class="blog-showcase-overlay">
								<div class="blog-showcase-overlay-inner">
									<div class="blog-showcase-icons">							
										 <a href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
									</div>
								</div>
							  </div>
							 
							
						   </figure>
						  
							<div class="blog_text">
								<h3 class="content_headings_black"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p><?php the_excerpt(0,15); ?></p>
								<div class="blog-poast-info">
									<ul>
										<li><i class="fa fa-user"> </i><a class="admin" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <?php echo get_the_author(); ?> </a></li>
										<li><i class="fa fa-comment"> </i><a class="p-blog" href="#"><?php comments_popup_link( '0', '1', '%', '', '-'); ?></a></li>
										<?php $categories_list = get_the_category_list( __( ', ', 'becorp' ) ); ?>
										<li><i class="fa fa-tags"> </i><a class="p-blog" href="#"><?php echo $categories_list; ?></a></li>
										<li><a class="read_more pull-right" href="#">Read More <i class="fa fa-angle-double-right"> </i></a></li>
									</ul>
								 </div>
							</div>
						</div> <!-- single_blog end -->
				</div> <!-- blog_main_content end -->
				<?php endwhile; endif; ?>
			</div> <!-- col-md-10 end -->

		</div> <!-- blog_area_slider_lists end --> 
	</div> <!-- container end -->
</section>
<div class="clearfix"></div>		