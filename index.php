<?php get_header(); 
 esol_breadcrumbs(); ?>	
<div class="clearfix"></div>
<section class="blog-section">
	<div class="container ">
	<div class="row">
		<div class="col-md-8">
		<?php
			the_post(); ?>
			    <div class="blog-area wow animated fadeInUp" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				  <figure class="blog_img">
				    <?php $default_img = array('class' => "img-responsive");?>
					<?php if(has_post_thumbnail()) : ?>
							<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('',$default_img);?> </a>
							<?php endif; ?>
	                 <div class="blog_round">
						<p><span><?php echo get_the_date('M'); ?></span><?php echo get_the_date('j'); ?></p>
					 </div> 
				  </figure>
			 
				<div class="blog_text">
					<h3 class="content_headings_black"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p><?php the_content(); ?></p>
					<div class="blog-poast-info">
						<ul>
							<li><i class="fa fa-user"> </i>
							<a class="admin" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <?php echo get_the_author(); ?> </a>
							</li>
							<li><i class="fa fa-comment"> </i><a class="p-blog" href="#"><?php comments_popup_link( '0', '1', '%', '', '-'); ?></a></li>
							<?php if(get_the_category_list() != '') { ?>
							<li><i class="fa fa-tags"> </i><a class="p-blog" href="#"><?php the_category(' '); ?></a></li>
							<?php } ?>
						</ul>
					 </div>
				</div>
			  </div><!--/.blog-item-->	
	</div>	
<!-----/Blog Area Section------------------------>
<?php get_sidebar(); ?>
</div>
</div>
</section>		
<?php get_footer(); ?>