<?php
/************* Home Slider custom post type ***********************/
function esol_slider() {
	register_post_type( 'slider',
		array(
			'labels' => array(
			'name' => 'Featured Slider',
			//'singular_name' => 'Featured Services',
			'add_new' => __('Add New Slide', 'esol'),
			'add_new_item' => __('Add New Slider','esol'),
			'edit_item' => __('Add New Slide','esol'),
			'new_item' => __('New Link','esol'),
			'all_items' => __('All Featured Sliders','esol'),
			'view_item' => __('View Link','esol'),
			'search_items' => __('Search Links','esol'),
			'not_found' =>  __('No Links found','esol'),
			'not_found_in_trash' => __('No Links found in Trash','esol'), 
			),
		'supports' => array('title','thumbnail'),
		'show_in' => true,
		'public' => true,
		//'rewrite' => array('slug' => $GLOBALS['slug_slide']),
		'menu_position' =>20,
		'public' => true,
		'menu_icon' => ESOL_TEMPLATE_DIR_URI . '/images/slider.png',
		)
	);
}
add_action( 'init', 'esol_slider' );


/************* Home Slider custom post type ***********************/
function esol_aboutus_detail() {
	register_post_type( 'about_us',
		array(
			'labels' => array(
			'name' => 'About Us Details',
			//'singular_name' => 'Featured Services',
			'add_new' => __('Add New About Us Title', 'esol'),
			'add_new_item' => __('Add New About Us Title','esol'),
			'edit_item' => __('Add New About Us Title','esol'),
			'new_item' => __('New Link','esol'),
			'all_items' => __('All About Us Title','esol'),
			'view_item' => __('View Link','esol'),
			'search_items' => __('Search Links','esol'),
			'not_found' =>  __('No Links found','esol'),
			'not_found_in_trash' => __('No Links found in Trash','esol'), 
			),
		'supports' => array('title'),
		'show_in' => true,
		'public' => true,
		//'rewrite' => array('slug' => $GLOBALS['slug_slide']),
		'menu_position' =>20,
		'public' => true,
		'menu_icon' => ESOL_TEMPLATE_DIR_URI . '/images/slider.png',
		)
	);
}
add_action( 'init', 'esol_aboutus_detail' );

function esol_social_share() {
	register_post_type( 'social_media',
		array(
			'labels' => array(
			'name' => 'Featured Social Media',
			//'singular_name' => 'Featured Services',
			'add_new' => __('Add New Social Media', 'esol'),
			'add_new_item' => __('Add New Social Media','esol'),
			'edit_item' => __('Add New Social Media','esol'),
			'new_item' => __('New Link','esol'),
			'all_items' => __('All Social Media','esol'),
			'view_item' => __('View Link','esol'),
			'search_items' => __('Search Links','esol'),
			'not_found' =>  __('No Links found','esol'),
			'not_found_in_trash' => __('No Links found in Trash','esol'), 
			),
		'supports' => array('title'),
		'show_in' => true,
		'public' => true,
		//'rewrite' => array('slug' => $GLOBALS['slug_slide']),
		'menu_position' =>20,
		'public' => true,
		'menu_icon' => ESOL_TEMPLATE_DIR_URI . '/images/slider.png',
		)
	);
}
// add_action( 'init', 'esol_social_share' );

/************* Home Service custom post type ***********************/	
function service_type()
{	register_post_type( 'service',
		array(
			'labels' => array(
			'name' => 'Service',
			//'singular_name' => 'Featured Services',
			'add_new' => __('Add New service', 'esol'),
			'add_new_item' => __('Add New Service','esol'),
			'edit_item' => __('Add New service','esol'),
			'new_item' => __('New Link','esol'),
			'all_items' => __('All Services','esol'),
			'view_item' => __('View Link','esol'),
			'search_items' => __('Search Links','esol'),
			'not_found' =>  __('No Links found','esol'),
			'not_found_in_trash' => __('No Links found in Trash','esol'), 
			),
		'supports' => array('title'),
		'show_in' => true,
		'public' => true,
		//'rewrite' => array('slug' => $GLOBALS['slug_service']),
		'menu_position' =>20,
		'public' => true,
		'menu_icon' => ESOL_TEMPLATE_DIR_URI . '/images/service.png',
		)
	);
}
add_action( 'init', 'service_type' );

/************* Client strip custom post type ***********************/	
function esol_team_type()
{	register_post_type( 'esol_team',
		array(
			'labels' => array(
			'name' => 'Our Team',
			//'singular_name' => 'Featured Services',
			'add_new' => __('Add New team', 'esol'),
			'add_new_item' => __('Add New Team','esol'),
			'edit_item' => __('Add New team','esol'),
			'new_item' => __('New Link','esol'),
			'all_items' => __('All Team','esol'),
			'view_item' => __('View Link','esol'),
			'search_items' => __('Search Links','esol'),
			'not_found' =>  __('No Links found','esol'),
			'not_found_in_trash' => __('No Links found in Trash','esol'), 
			),
		'supports' => array('title','thumbnail'),
		'show_in' => true,
		'public' => true,
		//'rewrite' => array('slug' => $GLOBALS['slug_team']),
		'menu_position' =>20,
		'public' => true,
		'menu_icon' => ESOL_TEMPLATE_DIR_URI . '/images/team.png',
		)
	);
}
add_action( 'init', 'esol_team_type' );

/************* Portfolio custom post type ***********************/	
function esol_portfolio_type()
{	register_post_type( 'portfolio',
		array(
			'labels' => array(
			'name' => 'Portfolio Feature',
			//'singular_name' => 'Featured Services',
			'add_new' => __('Add New portfolio', 'esol'),
			'add_new_item' => __('Add New Portfolio','esol'),
			'edit_item' => __('Add New portfolio','esol'),
			'new_item' => __('New Link','esol'),
			'all_items' => __('All Portfolio','esol'),
			'view_item' => __('View Link','esol'),
			'search_items' => __('Search Links','esol'),
			'not_found' =>  __('No Links found','esol'),
			'not_found_in_trash' => __('No Links found in Trash','esol'), 
			),
		'supports' => array('title','editor','thumbnail'),
		'show_in' => true,
		'public' => true,
		//'rewrite' => array('slug' => $GLOBALS['slug_portfolio']),
		'menu_position' =>20,
		'public' => true,
		'menu_icon' => ESOL_TEMPLATE_DIR_URI. '/images/option-icon-media.png',
		)
	);
}
add_action( 'init', 'esol_portfolio_type' );

/************* Portfolio custom post type ***********************/	
function esol_testimonial_type()
{	register_post_type( 'testimonial',
		array(
			'labels' => array(
			'name' => 'Testimonial',
			//'singular_name' => 'Featured Services',
			'add_new' => __('Add New Testimonial', 'esol'),
			'add_new_item' => __('Add New Testimonial','esol'),
			'edit_item' => __('Add New Testimonial','esol'),
			'new_item' => __('New Link','esol'),
			'all_items' => __('All Testimonial','esol'),
			'view_item' => __('View Link','esol'),
			'search_items' => __('Search Links','esol'),
			'not_found' =>  __('No Links found','esol'),
			'not_found_in_trash' => __('No Links found in Trash','esol'), 
			),
		'supports' => array('title','editor','thumbnail'),
		'show_in' => true,
		'public' => true,
		//'rewrite' => array('slug' => $GLOBALS['slug_testimonial']),
		'menu_position' =>20,
		'public' => true,
		'menu_icon' => ESOL_TEMPLATE_DIR_URI. '/images/testi.png',
		)
	);
}
add_action( 'init', 'esol_testimonial_type' );

/************* Client custom post type ***********************/	
function esol_client_type()
{	register_post_type( 'client',
		array(
			'labels' => array(
			'name' => 'Client',
			//'singular_name' => 'Featured Services',
			'add_new' => __('Add New Client', 'esol'),
			'add_new_item' => __('Add New Client','esol'),
			'edit_item' => __('Add New Client','esol'),
			'new_item' => __('New Link','esol'),
			'all_items' => __('All Client','esol'),
			'view_item' => __('View Link','esol'),
			'search_items' => __('Search Links','esol'),
			'not_found' =>  __('No Links found','esol'),
			'not_found_in_trash' => __('No Links found in Trash','esol'), 
			),
		'supports' => array('title','thumbnail'),
		'show_in' => true,
		'public' => true,
		//'rewrite' => array('slug' => $GLOBALS['slug_client']),
		'menu_position' =>20,
		'public' => true,
		'menu_icon' => ESOL_TEMPLATE_DIR_URI. '/images/client.png',
		)
	);
}
add_action( 'init', 'esol_client_type' );

/************* Pricing Table custom post type ***********************/	
function esol_pricing_table()
{	register_post_type( 'pricing_table',
		array(
			'labels' => array(
			'name' => 'Pricing Table',
			//'singular_name' => 'Featured Services',
			'add_new' => __('Add New Item', 'esol'),
			'add_new_item' => __('Add New Item','esol'),
			'edit_item' => __('Add New Item','esol'),
			'new_item' => __('New Link','esol'),
			'all_items' => __('All Item','esol'),
			'view_item' => __('View Link','esol'),
			'search_items' => __('Search Links','esol'),
			'not_found' =>  __('No Links found','esol'),
			'not_found_in_trash' => __('No Links found in Trash','esol'), 
			),
		'supports' => array('title','thumbnail'),
		'show_in' => true,
		'public' => true,
		//'rewrite' => array('slug' => $GLOBALS['slug_client']),
		'menu_position' =>20,
		'public' => true,
		'menu_icon' => ESOL_TEMPLATE_DIR_URI. '/images/client.png',
		)
	);
}
add_action( 'init', 'esol_pricing_table' );

/************* achievement custom post type ***********************/	
function esol_acheivements()
{	register_post_type( 'achievement',
		array(
			'labels' => array(
			'name' => 'Our Achievement',
			//'singular_name' => 'Featured Services',
			'add_new' => __('Add New Achievement', 'esol'),
			'add_new_item' => __('Add New Achievement','esol'),
			'edit_item' => __('Add New Achievement','esol'),
			'new_item' => __('New Link','esol'),
			'all_items' => __('All Achievement','esol'),
			'view_item' => __('View Link','esol'),
			'search_items' => __('Search Links','esol'),
			'not_found' =>  __('No Links found','esol'),
			'not_found_in_trash' => __('No Links found in Trash','esol'), 
			),
		'supports' => array('title'),
		'show_in' => true,
		'public' => true,
		//'rewrite' => array('slug' => $GLOBALS['slug_client']),
		'menu_position' =>20,
		'public' => true,
		'menu_icon' => ESOL_TEMPLATE_DIR_URI. '/images/client.png',
		)
	);
}
add_action( 'init', 'esol_acheivements' );

?>