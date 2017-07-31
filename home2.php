<?php 
//Template Name: Homepage-2
?>
<?php get_header(); ?>

<?php 

/****** Home Slider ******/
get_template_part('home','slider');
/*==== Services Section ====*/
get_template_part('home','service2');
/****** Home gallery ******/
get_template_part('home','gallery');
/****** Home testimonial ******/
get_template_part('home','testimonial2');
get_template_part('home','team2');
get_template_part('home','blog2');
/****** Home clients ******/
get_template_part('home','client');

// get_template_part('home','client_strip');
?>
<?php get_footer(); ?>	
