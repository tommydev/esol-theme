<?php
 if ( function_exists( 'add_image_size' ) ) 
 { 
	
	//Blog Images
	add_image_size('footer_news_widget_img',80,90,true);
}
// code for home slider post types 
add_filter( 'intermediate_image_sizes', 'esol_image_resize');

function esol_image_resize($sizes){
   $type = get_post_type($_REQUEST['post_id']);	
    foreach($sizes as $key => $value){
		if($type=='post'  && $value !='footer_news_widget_img' )
		 { unset($sizes[$key]); } 
    }
    return $sizes; 
}
?>