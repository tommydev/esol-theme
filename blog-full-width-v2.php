<?php 
//Template Name:Blog-FullWidth-v2
?>
<?php get_header(); ?>	
<!-- Page heading Section -->
<?php get_template_part('title','strip'); ?>	
<!-- /Page heading Section -->
<div class="clearfix"></div>
<section class="blog-section">
	<div class="container ">
	<div class="row">
<!-----Blog Area Section------------------------->	
		<div class="col-md-8 col-sm-offset-2">
			<?php $sl=true; $clr=1;
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args=array('post_type'=>'post','paged'=>$paged);
					$post_type=new WP_Query($args);
					if($post_type->have_posts()) :
					while($post_type->have_posts()) :
					$post_type->the_post();
					$blog_description_larg = get_the_excerpt();
			$blog_description = wp_trim_words( $blog_description_larg, $num_words = 30, $read_more_ = '… ' );
			?>
			
			<div class="blog-area wow animated fadeInUp">
				<?php 
				$default=array('class'=>'img-responsive');
				if(has_post_thumbnail())
						{ ?>
				<div class="blog_img">
					<?php the_post_thumbnail('',$default); ?>
					<div class="blog_round">
						<p><span><?php the_date('j'); ?></span><?php echo get_the_date('M'); ?></p>
					</div> <!-- blog_round end -->
				 <div class="blog-showcase-overlay">
					<div class="blog-showcase-overlay-inner">
						<div class="blog-showcase-icons">							
							 <a href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
						</div>
					</div>
				  </div>	
				</div>
				<?php } ?>
				<div class="blog_text">
					<h3 class="content_headings_black"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p><?php echo $blog_description; ?></p>
					<div class="blog-poast-info">
						<ul>
							<li><i class="fa fa-user"> </i><a class="admin" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <?php echo get_the_author(); ?> </a></li>
							<li><i class="fa fa-comment"> </i><a class="p-blog" href="#"><?php comments_popup_link( '0', '1', '%', '', '-'); ?></a></li>
							<li><i class="fa fa-tags"> </i><a class="p-blog" href="<?php the_permalink(); ?>"><?php the_tags('', ', '); ?></a></li>
							<li><a class="read_more pull-right" href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-double-right"> </i></a></li>
						</ul>
					 </div>
				</div>
			</div>
			<?php endwhile; endif; ?>
	 <!---Pagination------->	
	 <?php	$becorp_pagination = new becorp_pagination();
					$becorp_pagination->becorp_page($paged,$post_type); ?>
 <!---/Pagination------->
	</div>	
<!-----/Blog Area Section------------------------>	
	</section>		
<?php include 'footer.php' ?>	