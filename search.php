<?php get_header(); 
esol_breadcrumbs(); 
?>	
<div class="clearfix"></div>
<section class="blog-section">
	<div class="container ">
	<div class="row">
		<div class="col-md-8">
		<?php
			if(have_posts()) :
				while(have_posts()) :
					the_post();
			get_template_part('content','post');
			endwhile;
			else :
			get_template_part('content','none');
			?>
			<?php get_search_form();  
			endif;
			esol_paginate_link(); ?>
	</div>	
<?php get_sidebar(); ?>
</div>
</div>
</section>		
<?php get_footer();