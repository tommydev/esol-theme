<?php 
//Template Name: Portfolio-2-column-v2
get_header();
get_template_part('title','strip'); ?>
<!-- /Page heading Section -->
<section class="section-gallery portfolio-page">	
	<div class="container">
	  <!--Protfolio Filter-->
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
		<div class="row">
			<div class="col-md-12 wow fadeInUp" data-wow-duration="1s">
				<div class="protfolio-tabs-section wow animated fadeInLeft">
				<?php 
				$ik=1;
				$all='';
				if($tax_terms) { ?>
					<ul id="mytabs" class="portfolio-filter protfolio-filter">
					<?php foreach ($tax_terms  as $tax_term) {	?>
						
						<?php if($ik==1)
						{ $all = $tax_term->slug;
						?>
						   <li> <a class="<?php if($tab==''){if($j==1){echo 'active';$j=2;}}else if($tab==$tax_term->slug){echo 'active';}?>  main-btn hvr-s-b" data-filter="*" href="#" id="tab1"><?php echo $tax_term->name; ?></a></li>
						<?php $ik = $ik+1;}
						else{
						?>
						<li> <a class="main-btn hvr-s-b" data-filter=".<?php echo $tax_term->slug; ?>" href="#"><?php echo $tax_term->name; ?></a></li>
						<?php }
						} ?>
					</ul>
					<?php } ?>
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
			'posts_per_page' => -1,'paged' =>$curpage,
			'post_status' => 'publish'); 
			$portfolio_query = null;
			$portfolio_query = new WP_Query($args);				
			if( $portfolio_query->have_posts() ) { ?>
			<?php	while ( $portfolio_query->have_posts() ) : 
								$portfolio_query->the_post(); 
								$tax_terms = wp_get_post_terms($post->ID, "portfolio_categories", array("fields" => "names"));
				?>
		   <div class="col-xs-12 col-sm-6 col-md-6 portfolio-item-wrapper gallery-col <?php foreach ($tax_terms as $term) {   $tax_term = str_replace(' ', '_', $term);  echo preg_replace('~[^A-Za-z\d\s-]+~u', 'wl', $tax_term). " "; } ?>">
		
				<div class="home-gallery-showcase">
				<?php $post_thumbnail_id = get_post_thumbnail_id();
									$post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id );
							if(has_post_thumbnail()) {
									
									if(get_post_meta( get_the_ID(),'portfolio_project_link', true )) 
										{ $portfolio_project_link = get_post_meta( get_the_ID(),'portfolio_project_link', true ); }
										else 
										{ $portfolio_project_link = get_post_permalink(); } 
									the_post_thumbnail('portfolio-thumb');
								
							?>
					
					<div class="home-gallery-showcase-overlay">
						<div class="home-gallery-showcase-overlay-inner ">
							<div class="home-gallery-showcase-icons">
								<a title="<?php the_title(); ?>" href="<?php echo $portfolio_project_link;?>" <?php  if(get_post_meta( get_the_ID(),'portfolio_project_target', true )) { echo "target='_blank'"; } ?>><i class="fa fa-link"></i></a>
							    <a class="sb" href="<?php echo $post_thumbnail_url; ?>"><i class="fa fa-search-plus"></i></a>
							</div>
						</div>
					</div>
					<?php } ?>
				  </div>
			   </div>
				  <?php endwhile ; }  } ?>
               </div>
     </div>   
</section>	
<?php get_footer(); ?>	