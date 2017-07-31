<?php get_header(); 
get_template_part('title','strip'); ?>
<section class="blog-section single-blog-page">
	<div class="container ">
		<div class="row">
<!-------Sidebar Section------------------------->	
<?php get_sidebar(); ?>
<!------/sidebar Section--------->	
<!--------blog-area--------------------->
<div class="col-md-8">
  <div class="blog-post">
	<div class="row">
	<?php the_post(); ?>
		<div class="col-md-12">
			<div class="blog-item">
			 <?php $default_img = array('class' => "img-responsive");?>
					<?php if(has_post_thumbnail()) : ?>
							<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('',$default_img);?> </a>
							<?php endif; ?>
				<div class="text-content">
					<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
					<span><?php the_author(); ?> / <?php the_date(); ?></span>
					<p><?php the_content(); ?>.</p>
					<?php wp_link_pages( array( 'before' => '<div class="blog-pagination wow animated fadeInLeft">' . __( 'Pages:', 'esol' ), 'after' => '</div>' ) ); ?>
				</div>
				
			</div>
		</div>
		<?php comments_template( '', true );?></div></div></div>

</div>
</div>	
	</section>	
<?php get_footer(); ?>	