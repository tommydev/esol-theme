<?php
/*
* @Theme Name	:	Becorp
* @file         :	taxonomy.php
* @package      :	Becorp
* @author       :	Asiathemes
* @license      :	license.txt* 
 * Add custom taxonomies
 * Additional custom taxonomies can be defined here
 * http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function portfolio_taxonomy() {
    register_taxonomy('portfolio_categories','portfolio',
    array(  'hierarchical' => true,
			'show_in_nav_menus' => false,
            'label' => 'Portfolio Categories',
            'query_var' => true));
	
	// Get Default Category Id 
	$defualt_categories_id = get_option('portfolio_default_categories_id');	
	//quick update category
	if((isset($_POST['action'])) && (isset($_POST['taxonomy']))){		
		wp_update_term($_POST['tax_ID'], 'portfolio_categories', array(
		  'name' => $_POST['name'],
		  'slug' => $_POST['slug']
		));	
		update_option('portfolio_default_categories_id', $defualt_categories_id);
	} 
	else 
	{ 	// Add default taxonomy 
		if(!$defualt_categories_id){
			wp_insert_term('ALL','portfolio_categories', array('description'=> 'Default Category','slug' => 'ALL'));
			$Current_text_id = term_exists('ALL', 'portfolio_categories');
			update_option('portfolio_default_categories_id', $Current_text_id['term_id']);		
		}
		
	}
	 // update  default taxonomy 
	if(isset($_POST['submit']) && isset($_POST['action']) )
	{
		if(isset($_POST['tag_ID']) && isset($_POST['name']) && isset($_POST['slug']) && isset($_POST['description']) ) {
		wp_update_term($_POST['tag_ID'], 'portfolio_categories', array(
			  'name' => $_POST['name'],
			  'slug' => $_POST['slug'],
			  'description' =>$_POST['description']
			));
		}
	}
	// Delete default category
	if(isset($_POST['action']) && isset($_POST['tag_ID']) )
	{	if(($_POST['tag_ID'] == $defualt_tex_id) && $_POST['action'] == "delete-tag")
		{	
			delete_option('portfolio_default_categories_id'); 
		} 
	}	
}
add_action( 'init', 'portfolio_taxonomy' );

add_action( 'save_post', 'set_default_category_project' );
function set_default_category_project( $post_id ) {
    $terms = wp_get_post_terms( $post_id, 'portfolio_categories');	
    // Only set default if no terms are set yet
    if (!$terms)
	{    // Assign the default category
        $default_term = get_term_by('slug', 'ALL', 'portfolio_categories','ARRAY_A');		
        wp_set_post_terms( $post_id, $default_term, 'portfolio_categories' );
    }
}
?>