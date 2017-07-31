<?php
function becorp_scripts()
{
	$style_options = get_option('esol_option');	
	$class=$style_options['theme_color_scheme_options'];
	wp_enqueue_style('style', ESOL_TEMPLATE_DIR_URI . '/style.css');
	wp_enqueue_style('default', ESOL_TEMPLATE_DIR_URI . '/css/'.$class);
	//wp_enqueue_style('becorp-switcher-css',ESOL_TEMPLATE_DIR_URI. '/css/switcher/switcher.css');
	wp_enqueue_style('becorp-bootstrap', ESOL_TEMPLATE_DIR_URI . '/css/bootstrap.css');
	wp_enqueue_style('becorp-media-responsive', ESOL_TEMPLATE_DIR_URI .'/css/media-responsive.css');
	wp_enqueue_style('becorp-animations',ESOL_TEMPLATE_DIR_URI .'/css/animate.css');
	wp_enqueue_style('becorp-font',ESOL_TEMPLATE_DIR_URI .'/css/font/font.css');
	wp_enqueue_style('becorp-carousel',ESOL_TEMPLATE_DIR_URI .'/css/owl.carousel.css');
	wp_enqueue_style('becorp-custom' ,ESOL_TEMPLATE_DIR_URI .'/css/customizr.css');
	wp_enqueue_style('becorp-smoothbox',ESOL_TEMPLATE_DIR_URI .'/css/smoothbox.css');
	 
	/*-- Css Font Awesome------*/
	wp_enqueue_style('becorp-font-awesome',ESOL_TEMPLATE_DIR_URI . '/css/font-awesome-4.7.0/css/font-awesome.min.css');
	/*------Js-------------*/
	wp_enqueue_script('becorp-jquery-1.11.0', ESOL_TEMPLATE_DIR_URI .'/js/jquery-1.11.0.js');
	wp_enqueue_script('becorp-bootstrap', ESOL_TEMPLATE_DIR_URI .'/js/bootstrap.min.js');
	wp_enqueue_script('becorp-jquery.isotope-js', ESOL_TEMPLATE_DIR_URI .'/js/isotope.pkgd.min.js');
	wp_enqueue_script('becorp-owl.carousel.min', ESOL_TEMPLATE_DIR_URI .'/js/owl.carousel.min.js');
	//wp_enqueue_script('becorp-jsstorage-js',ESOL_TEMPLATE_DIR_URI.'/js/switcher/jsstorage.js');
	//wp_enqueue_script('becorp-switcher-js',ESOL_TEMPLATE_DIR_URI.'/js/switcher/switcher.js');
	wp_enqueue_script('becorp-custom-js',ESOL_TEMPLATE_DIR_URI.'/js/custom.js');
	wp_enqueue_script('becorp-wow.min',ESOL_TEMPLATE_DIR_URI.'/js/wow.min.js');
    wp_enqueue_script('becorp-smoothbox.jquery', ESOL_TEMPLATE_DIR_URI .'/js/smoothbox.jquery2.js');
	//wp_enqueue_script('becorp-glossy', ESOL_TEMPLATE_DIR_URI .'/js/glossy.js');
	
	
	
	if ( is_singular() ){ wp_enqueue_script( "comment-reply" );	}
}
add_action('wp_enqueue_scripts', 'becorp_scripts');
add_action( 'admin_enqueue_scripts', 'admin_enqueue_script_function' );
function admin_enqueue_script_function()
{
wp_enqueue_style('businesso-drag-drop',ESOL_TEMPLATE_DIR_URI.'/css/drag-drop.css');
wp_enqueue_style('businesso-font-css',ESOL_TEMPLATE_DIR_URI.'/css/jquery-ui.css');
wp_enqueue_script('businesso-jquery-ui' , ESOL_TEMPLATE_DIR_URI.'/js/jquery-ui.js',array('jquery'));
wp_enqueue_script('businesso-jquery-ui-drag' , ESOL_TEMPLATE_DIR_URI.'/js/layout-drag-drop.js');
}
