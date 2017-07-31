<?php get_header(); 
esol_breadcrumbs(); ?>	
<!-- Page heading Section -->

<div class="clearfix"></div>
<section class="blog-section">
	<div class="container ">
	<div class="row">
	<!-------Sidebar Section------------------------->	

<!-----Blog Area Section------------------------->	
		<div class="col-md-8">
		<?php
			if(have_posts()) :
				while(have_posts()) :
					the_post();
			get_template_part('content','post');
			endwhile; endif; ?><!--/.blog-item-->	
	 <!---Pagination------->	
	<?php esol_paginate_link(); ?>
 <!---/Pagination------->
	</div>	
<!-----/Blog Area Section------------------------>
<?php get_sidebar(); ?>
</div>
</div>
</section>		
<?php get_footer(); ?>