<?php
	define('ESOL_TEMPLATE_DIR_URI',get_template_directory_uri());
	define('ESOL_TEMPLATE_DIR',get_template_directory());
	define('ESOL_THEME_FUNCTIONS_PATH',ESOL_TEMPLATE_DIR.'/core-functions');
	define('ESOL_THEME_OPTIONS_PATH' , ESOL_TEMPLATE_DIR_URI.'/core-functions/option-panel');
	require( ESOL_THEME_FUNCTIONS_PATH . '/menu/default_menu_walker.php' ); // for Default Menus
	require( ESOL_THEME_FUNCTIONS_PATH . '/menu/asiathemes_nav_walker.php' ); // for Custom Menus	
	require( ESOL_THEME_FUNCTIONS_PATH . '/cpt/custom-post-type.php' );// for becorp-pro cpt
	require( ESOL_THEME_FUNCTIONS_PATH . '/meta-box/post-meta.php' );// for becorp-pro meta box
	require( ESOL_THEME_FUNCTIONS_PATH . '/scripts/scripts.php' );
	require( ESOL_THEME_FUNCTIONS_PATH . '/comment-section/comment-function.php' ); //for comments sections
	require( ESOL_THEME_FUNCTIONS_PATH . '/widgets/register-sidebar.php' ); //for widget register
	require( ESOL_THEME_FUNCTIONS_PATH . '/pagination/becorp_pagination.php' ); //becorp pagination class
	require( ESOL_THEME_FUNCTIONS_PATH . '/resize-image/image_resize.php' ); //image resize 
	require( ESOL_THEME_FUNCTIONS_PATH . '/becorp-taxonomy/taxonomy.php' );// for becorp taxonomies
	//require( ESOL_THEME_FUNCTIONS_PATH . '/widgets/esol-footer-aboutus.php' ); //for Sidebar category custom widgets
	require( ESOL_THEME_FUNCTIONS_PATH . '/widgets/flickr-widget.php' ); //for Sidebar category custom widgets
	require( ESOL_THEME_FUNCTIONS_PATH . '/widgets/businesso-footer-latest-news-widget.php' );
		
	// Fonts
	require( ESOL_THEME_FUNCTIONS_PATH . '/fonts/font.php');
	//Customizer
	require( ESOL_THEME_FUNCTIONS_PATH . '/customizer/customizer-header.php');
	require( ESOL_THEME_FUNCTIONS_PATH . '/customizer/customizer-layout.php');
	require('template-tags.php');
	require_once('asia_breadcrumbs.php');

add_action( 'after_setup_theme', 'esol_setup' ); 	
		function esol_setup()
		{
		
		// Load text domain for translation-ready
			load_theme_textdomain( 'esol', ESOL_THEME_FUNCTIONS_PATH . '/lang' );
			add_theme_support( 'title-tag' );
			// This theme uses wp_nav_menu() in one location.
			add_theme_support('post-thumbnails');
			// This theme uses wp_nav_menu() in one location.
			register_nav_menu( 'primary', __( 'Primary Menu', 'becorp' ) );
			// theme Background support
			add_theme_support( 'custom-background');
			add_theme_support( 'automatic-feed-links');
			//Default Data
			require_once('theme_default_data.php');
			 $esol_option=theme_default_data();
			 $current_theme_options = get_option('esol_option');
			 if($current_theme_options)	{ 	
				 $esol_option = array_merge($esol_option, $current_theme_options);
				 update_option('esol_option',$esol_option);			
		 }
		else
		 {
			 add_option('esol_option', $esol_option);
		 }		
}	//Excerpt Length function
			function custom_excerpt_length( $length ) {
			return 40;
			}
			add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	add_filter('get_avatar','becorp_gravatar_class');
	function becorp_gravatar_class($class) {
    $class = str_replace("class='avatar", "class='author-image", $class);
    return $class;
	}