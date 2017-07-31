<?php $esol_option=theme_default_data(); 
$front_page_options = wp_parse_args(  get_option( 'esol_option', array() ), $esol_option );
if ($front_page_options['front_page_enabled']=="1" && is_front_page()) {
get_header(); 
get_template_part('home','slider2');
		$data =is_array($front_page_options['front_page_data']) ? $front_page_options['front_page_data'] : explode(",",$front_page_options['front_page_data']);		
		
		if($data) 
		{
			foreach($data as $key=> $value)
			{
				switch($value) 
				{  
					/*==== Services Section ====*/
					case 'service':
					 get_template_part('home','service');
					break;
					case 'achievement':
					 get_template_part('home','achievement');
					break;	  	  
					/****** Home gallery ******/
					case 'gallery':
					get_template_part('home','gallery2');
					break;
					
					/****** Home testimonial ******/
					case 'testimonial':
					get_template_part('home','testimonial');
					break;
					case 'team':
					get_template_part('home','team');
					break;	
					
					/****** Home blog ******/
					case 'blog':
					get_template_part('home','blog');
					break;
					case 'pricing':
					get_template_part('home','pricing');
					break;
					
					/****** Home clients ******/
					case 'client':
					get_template_part('home','client');
					break;
					case 'social':
					//get_template_part('home','social');
					break;
					
						}
						  }
						}
 get_footer(); 
 }  else {
		if(is_page())
		{ get_template_part('page'); } 
		else { get_template_part('index'); } }?>
 <!-- /main-wrapper -->
