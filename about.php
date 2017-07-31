<?php 
//Template Name:About Us
 get_header(); 
 esol_breadcrumbs(); ?>
<!-- /Page heading Section -->
<div class="section-lg">
  <div class="container">
    <div class="row">
      <div class="col-md-6 m-bottom5 wow fadeInLeft" data-wow-duration="4s">
        <div data-ride="carousel" class="carousel slide" id="carousel-example-generic1"> 
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#carousel-example-generic1"></li>
            <li data-slide-to="1" data-target="#carousel-example-generic1" class=""></li>
            <li data-slide-to="2" data-target="#carousel-example-generic1" class=""></li>
          </ol>
          
          <!-- Wrapper for slides -->
          <div role="listbox" class="carousel-inner">
            <div class="item active"><img class="img-responsive" alt="" src="<?php echo get_template_directory_uri(); ?>/images\about2.jpg"></div>
            <div class="item"><img class="img-responsive" alt="" src="<?php echo get_template_directory_uri(); ?>/images\about1.jpg"></div>
            <div class="item"><img class="img-responsive" alt="" src="<?php echo get_template_directory_uri(); ?>/images\about2.jpg"></div>
          </div>
        </div>
      </div>
      <div class="col-md-6 m-bottom5 ser-panel wow fadeInRight" data-wow-duration="6s">
        <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
		<?php
		$argus=array('post_type' => 'about_us');
		$service=new WP_Query($argus);
		  if($service->have_posts())
		  {
			while($service->have_posts()) : $service->the_post(); 
				$nav=1;
			$aboutus_description = get_post_meta(get_the_id(),'aboutus_description',true);
		?>
		
          <div class="panel panel-default">
            <div id="heading<?php echo get_the_ID(); ?>" role="tab" class="panel-heading">
              <h4 class="panel-title"> <a aria-controls="collapse<?php echo get_the_ID(); ?>" aria-expanded="false" href="#collapse<?php echo get_the_ID(); ?>" data-parent="#accordion" data-toggle="collapse" role="button" class="collapsed"> <?php the_title(); ?> </a> </h4>
            </div>
            <div aria-labelledby="heading<?php echo get_the_ID(); ?>" role="tabpanel" class="panel-collapse collapse" id="collapse<?php echo get_the_ID(); ?>" aria-expanded="false" style="height: 0px;">
              <div class="panel-body">
                <p><?php echo $aboutus_description; ?></p>
              </div>
            </div>
          </div>
          <?php  endwhile; } ?>
          
          
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
<?php get_template_part('about','service'); ?>
<div class="clearfix"></div>
<?php get_template_part('about','team'); ?>
<?php get_footer(); ?>	