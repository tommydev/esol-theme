<?php 
//Template Name:About Us-v2
 get_header(); 
 esol_breadcrumbs(); ?>
<!-- /Page heading Section -->
<div class="about2-section">
  <div class="container">
  <?php if(have_posts()) {
  the_post(); ?>
    <div class="row">
      <div class="col-md-6 m-bottom5 wow fadeInLeft" data-wow-duration="4s">
	  	<?php $default=array('class'=>'img-responsive');
				if(has_post_thumbnail())
						{ ?>
         <div class="about-img">
		 	<?php the_post_thumbnail('',$default); ?>
				</div>
				<?php } ?>
		 
      </div>
	  
      <div class="col-md-6 m-bottom5 ser-panel wow fadeInRight" data-wow-duration="6s">
		  <div class="about-content2">
              <?php the_content(); ?>
           </div>          
      </div>
	  
    </div>
	<?php } else { ?>
		   <div class="row">
      <div class="col-md-6 m-bottom5 wow fadeInLeft" data-wow-duration="4s">
         <div class="about-img"><img class="img-responsive" alt="" src="<?php echo get_template_directory_uri(); ?>/images\about1.jpg"></div>
      </div>
	  
      <div class="col-md-6 m-bottom5 ser-panel wow fadeInRight" data-wow-duration="6s">
		  <div class="about-content2">
              <h2>Lorem Ipsum is simply dummy text</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged, </p>
           </div>          
      </div>
	  
    </div>
	<?php } ?>
  </div>
  </div>
<div class="clearfix"></div>
<?php get_template_part('home','service'); ?>
<div class="clearfix"></div>
<?php get_template_part('home','facts'); ?>
<div class="clearfix"></div>
<?php get_template_part('home','team'); ?>
<div class="clearfix"></div>
<?php get_template_part('home','testimonial'); ?>
<div class="clearfix"></div>
<?php get_template_part('home','client'); ?>
<div class="clearfix"></div>
<?php get_footer(); ?>	