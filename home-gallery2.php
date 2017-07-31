<?php 
	$esol_option=theme_default_data(); 
	$gallery_setting = wp_parse_args(  get_option( 'esol_option', array() ), $esol_option );
	if($gallery_setting['enable_home_portfolio'] == 1) { ?>
<section class="section-gallery">

   <div class="row">
		<div class="col-md-12">
			<div class="main-title">
			 <h2 class="wow fadeInLeft animated" data-wow-duration="4s"><?php echo $gallery_setting['gallery_title_one']; ?><span><?php echo $gallery_setting['gallery_title_two']; ?></span> </h2> 
			</div>
		</div>
	</div>
 <?php
	//for a given post type, return all
	$post_type = 'portfolio';
	$tax = 'portfolio_categories'; 
	$term_args=array( 'hide_empty' => true,'orderby' => 'id');
	$tax_terms = get_terms($tax,$term_args);
	$defualt_tex_id = get_option('custom_tax_becorp');
	$j=1;
		$tab='';
		if(isset($_GET['div']))
		{
			$tab=$_GET['div'];
		}
	?>
   <div class="container"> 	
	  <!--Protfolio Filter-->
		<div class="row">
			<div class="col-md-12 wow fadeInUp" data-wow-duration="1s">
				<div class="protfolio-tabs-section wow animated fadeInLeft">
				<?php 
				$ik=1;
				$all='';
			 ?>
					<ul id="mytabs" class="portfolio-filter protfolio-filter">
					
						
				<?php $tab = '';
					
						foreach ($tax_terms  as $tax_term) {
										
						if($ik==1)
						{ $all = $tax_term->slug;
						?>
						   <li> <a class="<?php if($tab==''){ echo 'active'; } else { echo 'deactive'; } ?>  main-btn hvr-s-b" data-filter="*" href="#" id="tab1"><?php echo $tax_term->name;  ?></a></li>
						<?php $ik = $ik+1;}
						else{
						?>
						<li> <a class="main-btn hvr-s-b" data-filter=".<?php echo $tax_term->slug; ?>" href="#"><?php echo $tax_term->name; ?></a></li>
						<?php }
						} ?>
					
					</ul>
					
				</div>
			</div>		
		</div>
	</div>	
	 <!--/Protfolio Filter-->
  <div class="clearfix"></div>
 
      <div  class="row esol_portfolio_page esol_photo_gallery portfolio " id="isotope-portfolio-container" style="width:100%;">
	      <?php 
		global $paged; $norecord=1;
			$curpage = $paged ? $paged : 1;
	if ($tax_terms) 
	{ 	 
			global $k;
			$k=1; 
		$args = array (
			'post_type' => $post_type,
			'posts_per_page' => 8,'paged' =>$curpage,
			'post_status' => 'publish'); 
			$portfolio_query = null;
			$portfolio_query = new WP_Query($args);				
			if( $portfolio_query->have_posts() ) { ?>
			<?php	while ( $portfolio_query->have_posts() ) : 
								$portfolio_query->the_post(); 
								$terms_names = wp_get_post_terms($post->ID, "portfolio_categories", array("fields" => "names"));
	
				?>
		    <div class="col-xs-12 col-sm-6 col-md-3 portfolio-item-wrapper  <?php foreach ($terms_names as $term) {   $tax_term = str_replace(' ', '_', $term);  echo preg_replace('~[^A-Za-z\d\s-]+~u', 'wl', $tax_term). " "; } ?> gallery-grid padding0"> 
                    <figure>
					<?php $post_thumbnail_id = get_post_thumbnail_id();
									$post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id );
							if(has_post_thumbnail()) {
									
									if(get_post_meta( get_the_ID(),'portfolio_project_link', true )) 
										{ $portfolio_project_link = get_post_meta( get_the_ID(),'portfolio_project_link', true ); }
										else 
										{ $portfolio_project_link = get_post_permalink(); } 
									//the_post_thumbnail('portfolio-thumb');
								
							?>
                        <img src="<?php echo $post_thumbnail_url; ?>" class="img-responsive" alt="">
                        <div class="overlay-background">
                            <div class="inner"></div>
                        </div>
                        <div class="overlay">
                            <div class="inner-overlay">
                                <div class="inner-overlay-content with-icons">
                                    <a class="sb" href="<?php echo $post_thumbnail_url; ?>"><i class="fa fa-search"></i></a>
                                    <a href="<?php echo $portfolio_project_link;?>"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
						<?php } ?>
                    </figure>
			    </div>
				  <?php endwhile ; } }  ?>
               </div>				
</section>	
<div class="clearfix"></div>	
<?php } ?>