<?php /************ Home slider meta post ****************/
add_action('admin_init','esol_init');
function esol_init()
	{
		add_meta_box('home_slider_meta', 'Description', 'becorp_meta_slider', 'slider', 'normal', 'high');
		add_meta_box('home_service_meta', 'featured Service', 'becorp_meta_service', 'service', 'normal', 'high');
		add_meta_box('team_meta', 'featured Team', 'esol_meta_team', 'esol_team', 'normal', 'high');
		add_meta_box('portfolio_meta', 'featured Portfolio', 'becorp_meta_portfolio', 'portfolio', 'normal', 'high');
		add_meta_box('client_meta', 'client', 'becorp_meta_client', 'client', 'normal', 'high');
		add_meta_box('client_meta', 'client', 'esol_social_media', 'social_media', 'normal', 'high');
		
		add_meta_box('aboutus_meta_box', 'About Us Details', 'aboutus_meta', 'about_us', 'normal', 'high');
		add_meta_box('testimonial_meta_box', 'Testimonial Details', 'testimonial_meta', 'testimonial', 'normal', 'high');
		add_meta_box('pricing_meta_box', 'Item Details', 'pricing_table_meta', 'pricing_table', 'normal', 'high');
		
		add_meta_box('achievement_meta_box', 'Achievemens Details', 'achievement_meta', 'achievement', 'normal', 'high');
		
		add_action('save_post','becorp_meta_save');
		
	}
	function aboutus_meta()
	{
		global $post ;
		$aboutus_description   = sanitize_text_field( get_post_meta( get_the_ID(), 'aboutus_description', true ));
		?>
		<p><label><?php _e('About Us Description','becorp');?></label>	</p>
		<p><textarea name="aboutus_description" id="aboutus_description" style="width: 480px; height: 56px; padding: 0px;" placeholder="Enter About Us description"  rows="3" cols="10" ><?php if (!empty($aboutus_description)) echo esc_textarea( $aboutus_description ); ?></textarea></p>	
	<?php } 
	// code for slider banner description
	function becorp_meta_slider()
	{	global $post ;
		$image_description   = sanitize_text_field( get_post_meta( get_the_ID(), 'image_description', true ));
		$meta_more_info_text = sanitize_text_field( get_post_meta( get_the_ID(), 'meta_more_info_text', true ));
		$meta_more_info_url = sanitize_text_field( get_post_meta( get_the_ID(), 'meta_more_info_url', true ));
		$meta_buy_now_text = sanitize_text_field( get_post_meta( get_the_ID(), 'meta_buy_now_text', true ));
		$meta_buy_now_url = sanitize_text_field( get_post_meta( get_the_ID(), 'meta_buy_now_url', true ));
		?>	
		<p><label><?php _e('Image Description','becorp');?></label>	</p>
		<p><textarea name="meta_image_description" id="meta_image_description" style="width: 480px; height: 56px; padding: 0px;" placeholder="Enter slider description (Use max word length 150 words)"  rows="3" cols="10" ><?php if (!empty($image_description)) echo esc_textarea( $image_description ); ?></textarea></p>		
		
		<p><label><?php _e('More Info Button Title','becorp');?></label>	</p>
		<p><input type="text" name="meta_more_info_text" id="meta_more_info_text" style="width: 480px; height: 56px; padding: 0px;" placeholder="Enter More Info Button Text Title" value="<?php if (!empty($meta_more_info_text)) echo esc_attr( $meta_more_info_text ); ?>" ></p>		
		<p><label><?php _e('More Info Button URL','becorp');?></label>	</p>
		<p><input type="text" name="meta_more_info_url" id="meta_more_info_url" style="width: 480px; height: 56px; padding: 0px;" placeholder="Enter More Info Button URL" value="<?php if (!empty($meta_more_info_url)) echo esc_attr( $meta_more_info_url ); ?>" ></p>		
		
		<p><label><?php _e('Buy Now Button Text Title','becorp');?></label>	</p>
		<p><input type="text" name="meta_buy_now_text" id="meta_buy_now_text" style="width: 480px; height: 56px; padding: 0px;" placeholder="Enter Buy Now Button Text Title" value="<?php if (!empty($meta_buy_now_text)) echo esc_attr( $meta_buy_now_text ); ?>" ></p>		
		
		<p><label><?php _e('Buy Now Button URL','becorp');?></label>	</p>
		<p><input type="text" name="meta_buy_now_url" id="meta_buy_now_url" style="width: 480px; height: 56px; padding: 0px;" placeholder="Enter Buy Now Button URL" value="<?php if (!empty($meta_buy_now_url)) echo esc_attr( $meta_buy_now_url ); ?>" ></p>		
<?php }


function becorp_meta_service()
	{	global $post ;
		
		$service_icon_awesome =sanitize_text_field( get_post_meta( get_the_ID(), 'service_icon_awesome', true ));
		$meta_service_description =sanitize_text_field( get_post_meta( get_the_ID(), 'meta_service_description', true ));
		$meta_service_navigation =sanitize_text_field( get_post_meta( get_the_ID(), 'meta_service_navigation', true ));
		$meta_service_target =sanitize_text_field( get_post_meta( get_the_ID(), 'meta_service_target', true ));	
	
	?>	
		<p><h4 class="heading"><?php _e('Service Icon (Using Font Awesome icons name) like: fa-rub .','becorp');?> <label style="margin-left:10px;"><a target="_blank" href="http://fontawesome.io/icons/"> <?php _e('Get your fontawesome icons.','becorp') ;?></a></label></h4>
		<p><input   name="service_icon_awesome" id="service_icon_awesome" style="width: 480px" placeholder="Enter the fontawesome icon" type="text" value="<?php if (!empty($service_icon_awesome)) echo esc_attr($service_icon_awesome);?>"> </input></p>
		<p><h4 class="heading"><?php _e('Enter the service icon link','becorp');?></h4></p>
		<p><input style="width:480px;" name="meta_service_navigation" id="meta_service_navigation" placeholder="Enter the service icon link" type="text" value="<?php if (!empty($meta_service_navigation)) echo esc_attr($meta_service_navigation);?>"></p>
		<p><input type="checkbox" id="meta_service_target" name="meta_service_target" <?php if($meta_service_target) echo "checked"; ?> > <?php _e('Open link in a new window/tab','becorp'); ?></p>	
		<p><h4 class="heading"><?php _e('Service Descritpion','becorp');?></h4>
		<p><textarea name="meta_service_description" id="meta_service_description" style="width: 480px; height: 56px; padding: 0px;" placeholder="Enter the Service description (Use max-word 115)"  rows="3" cols="10" ><?php if (!empty($meta_service_description)) echo esc_textarea( $meta_service_description ); ?></textarea></p>	
<?php }

function esol_meta_team()
	{	global $post ;
		
		$occupation = sanitize_text_field( get_post_meta( get_the_ID(), 'occupation', true ));
		$team_description =sanitize_text_field( get_post_meta( get_the_ID(), 'team_description', true ));
		$twt_meta_save = sanitize_text_field( get_post_meta( get_the_ID(), 'twt_meta_save', true ));
		$twt_meta_save_chkbx = sanitize_text_field( get_post_meta( get_the_ID(), 'twt_meta_save_chkbx', true ));
		
		$fb_meta_save = sanitize_text_field( get_post_meta( get_the_ID(),'fb_meta_save', true ));
		$fb_meta_save_chkbx = sanitize_text_field( get_post_meta( get_the_ID(),'fb_meta_save_chkbx', true ));
		
		$google_meta_save = sanitize_text_field( get_post_meta( get_the_ID(), 'google_meta_save', true ));
		$google_meta_save_chkbx = sanitize_text_field( get_post_meta( get_the_ID(), 'google_meta_save_chkbx', true ));
		
		$lnkd_meta_save = sanitize_text_field( get_post_meta( get_the_ID(), 'lnkd_meta_save', true ));
		$lnkd_meta_save_chkbx = sanitize_text_field( get_post_meta( get_the_ID(), 'lnkd_meta_save_chkbx', true ));
			
	
	?>	
		<p><h4 class="heading"><?php _e('Enter the team occupation/designation','becorp');?></h4></p>
		
		
		<p><input style="width:480px;"  name="occupation" id="occupation" placeholder="Enter the occupation" type="text" value="<?php if(!empty($occupation)) echo esc_attr($occupation); ?>"/>	
		</p>
		
		<p><h4 class="heading"><?php _e('Enter the Team Description','becorp');?></h4></p>
		<p><textarea name="team_description" id="team_description" style="width: 480px; height: 56px; padding: 0px;" placeholder="Enter the Team Description"  rows="3" cols="10" ><?php if (!empty($team_description)) echo esc_textarea( $team_description ); ?></textarea></p>
		
		<p><h4 class="heading"><?php _e('Twitter Url','becorp')?></h4>	 
		<p><input style="width:70%; padding: 10px;"  name="twt_meta_save" id="twt_meta_save" placeholder="Enter Your Twitter's URL in https formate"  value="<?php if(!empty($twt_meta_save)) echo esc_attr($twt_meta_save); ?>"/>	
		<input type="checkbox" name="twt_meta_save_chkbx" id="twt_meta_save_chkbx" <?php if($twt_meta_save_chkbx){echo "checked";}?> /><?php _e('Open link in a new window/tab','becorp'); ?></p>	
		<p><h4 class="heading"><?php _e('Facebook Url','becorp')?></h4>	 
		<p><input style="width:70%; padding: 10px;"  name="fb_meta_save" id="fb_meta_save" placeholder="Enter Your Facebook URL in https formate"  value="<?php if(!empty($fb_meta_save)) echo esc_attr($fb_meta_save); ?>"/>	
		<input type="checkbox" name="fb_meta_save_chkbx" id="fb_meta_save_chkbx" <?php if($fb_meta_save_chkbx){ echo "checked";} ?> ><?php _e('Open link in a new window/tab','becorp'); ?></p>
		<p><h4 class="heading"><?php _e('Google+ Url','becorp')?></h4>	 
		<p><input style="width:70%; padding: 10px;"  name="google_meta_save" id="google_meta_save" placeholder="Enter Your Google+ URL in https formate"  value="<?php if(!empty($google_meta_save)) echo esc_attr($google_meta_save); ?>"/>	
		<input type="checkbox" name="google_meta_save_chkbx" id="google_meta_save_chkbx" <?php if($google_meta_save_chkbx){echo "checked";}?> ><?php _e('Open link in a new window/tab','becorp'); ?></p>
		<p><h4 class="heading"><?php _e('Linkden Url','becorp')?></h4>	 
		<p><input style="width:70%; padding: 10px;"  name="lnkd_meta_save" id="lnkd_meta_save" placeholder="Enter Your Linkden URL in https formate"  value="<?php if(!empty($lnkd_meta_save)) echo esc_attr($lnkd_meta_save); ?>"/>	
		<input type="checkbox" name="lnkd_meta_save_chkbx" id="lnkd_meta_save_chkbx" <?php if($lnkd_meta_save_chkbx){ echo "checked"; } ?> ><?php _e('Open link in a new window/tab','becorp'); ?></p>
<?php }

function becorp_meta_portfolio()
	{	global $post ;
		
		$portfolio_project_link =sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_project_link', true ));
		$portfolio_project_target =sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_project_target', true ));	
	?>	
		<p><h4 class="heading"><?php _e('Enter the portfolio project link .','becorp');?></h4>
		<p><input   name="portfolio_project_link" id="portfolio_project_link" style="width: 480px" placeholder="Enter the portfolio project link" type="text" value="<?php if (!empty($portfolio_project_link)) echo esc_attr($portfolio_project_link);?>"> </input></p>
		<p><input type="checkbox" id="portfolio_project_target" name="portfolio_project_target" <?php if($portfolio_project_target) echo "checked"; ?> > <?php _e('Open link in a new window/tab','becorp'); ?></p>
<?php }

function esol_social_media()
	{	global $post ;
		$social_media_fa_icon = sanitize_text_field( get_post_meta( get_the_ID(), 'social_media_fa_icon', true ));	
		$social_media_link = sanitize_text_field( get_post_meta( get_the_ID(), 'social_media_link', true ));
		$social_media_target = sanitize_text_field( get_post_meta( get_the_ID(), 'social_media_target', true ));	
		
	?>	
		<p><h4 class="heading"><?php _e('Enter the Social Media Fa Icon Name.','becorp');?></h4>
		<p><input   name="social_media_fa_icon" id="social_media_fa_icon" style="width: 480px" placeholder="Enter the social media Icon" type="text" value="<?php if (!empty($social_media_fa_icon)) echo esc_attr($social_media_fa_icon);?>"> </input></p>
		
		<p><h4 class="heading"><?php _e('Enter the Social Media link .','becorp');?></h4>
		<p><input   name="social_media_link" id="social_media_link" style="width: 480px" placeholder="Enter the social media link" type="text" value="<?php if (!empty($social_media_link)) echo esc_attr($social_media_link);?>"> </input></p>
		<p><input type="checkbox" id="social_media_target" name="social_media_target" <?php if($social_media_target) echo "checked"; ?> > <?php _e('Open link in a new window/tab','becorp'); ?></p>
<?php }

function becorp_meta_client()
	{	global $post ;
		
		$client_link =sanitize_text_field( get_post_meta( get_the_ID(), 'client_link', true ));
		$client_target =sanitize_text_field( get_post_meta( get_the_ID(), 'client_target', true ));	
	?>	
		<p><h4 class="heading"><?php _e('Enter the portfolio project link .','becorp');?></h4>
		<p><input   name="client_link" id="client_link" style="width: 480px" placeholder="Enter the portfolio project link" type="text" value="<?php if (!empty($client_link)) echo esc_attr($client_link);?>"> </input></p>
		<p><input type="checkbox" id="client_target" name="client_target" <?php if($client_target) echo "checked"; ?> > <?php _e('Open link in a new window/tab','becorp'); ?></p>
<?php }

function testimonial_meta()
	{
		global $post ;
		$testimonial_designation   = sanitize_text_field( get_post_meta( get_the_ID(), 'testimonial_designation', true ));
		?>
		<p><label><?php _e('Designation','becorp');?></label>	</p>
		<p><input type="text" name="testimonial_designation" id="testimonial_designation" style="width: 480px; height: 56px; padding: 0px;" placeholder="Enter Designation"  value="<?php if (!empty($testimonial_designation)) echo esc_textarea( $testimonial_designation ); ?>"></p>	
	<?php }

	function pricing_table_meta()
	{
		global $post ;
		$item_pricing   = sanitize_text_field( get_post_meta( get_the_ID(), 'item_pricing', true ));
		$time_duration   = sanitize_text_field( get_post_meta( get_the_ID(), 'time_duration', true ));
		$item_one_details   = sanitize_text_field( get_post_meta( get_the_ID(), 'item_one_details', true ));
		$item_two_details   = sanitize_text_field( get_post_meta( get_the_ID(), 'item_two_details', true ));
		$item_three_details   = sanitize_text_field( get_post_meta( get_the_ID(), 'item_three_details', true ));
		$item_four_details   = sanitize_text_field( get_post_meta( get_the_ID(), 'item_four_details', true ));
		$item_five_details   = sanitize_text_field( get_post_meta( get_the_ID(), 'item_five_details', true ));
		
		$item_button_text   = sanitize_text_field( get_post_meta( get_the_ID(), 'item_button_text', true ));
		$item_button_url   = sanitize_text_field( get_post_meta( get_the_ID(), 'item_button_url', true ));
		?>
		<p>
		<label><?php _e('Price','becorp');?></label></p>
		<p><input type="text" name="item_pricing" id="item_pricing" style="width: 480px; height: 56px; padding: 0px;" placeholder="Enter Price"  value="<?php if (!empty($item_pricing)) echo esc_textarea( $item_pricing ); ?>">
		</p>
		
		<p>
		<label><?php _e('Time Durations','becorp');?></label></p>
		<p><input type="text" name="time_duration" id="time_duration" style="width: 480px; height: 56px; padding: 0px;" placeholder="Enter Time Durations"  value="<?php if (!empty($time_duration)) echo esc_textarea( $time_duration ); ?>">
		</p>	
		
		<p>
		<label><?php _e('Item One Details','becorp');?></label></p>
		<p><input type="text" name="item_one_details" id="item_one_details" style="width: 480px; height: 56px; padding: 0px;" placeholder="Enter Price & Time Durations"  value="<?php if (!empty($item_one_details)) echo esc_textarea( $item_one_details ); ?>">
		</p>
			
		<p>
		<label><?php _e('Item Two Details','becorp');?></label></p>
		<p><input type="text" name="item_two_details" id="item_two_details" style="width: 480px; height: 56px; padding: 0px;" placeholder="Enter Price & Time Durations"  value="<?php if (!empty($item_two_details)) echo esc_textarea( $item_two_details ); ?>">
		</p>
		
		<p>
		<label><?php _e('Item Three Details','becorp');?></label></p>
		<p><input type="text" name="item_three_details" id="item_three_details" style="width: 480px; height: 56px; padding: 0px;" placeholder="Enter Price & Time Durations"  value="<?php if (!empty($item_three_details)) echo esc_textarea( $item_three_details ); ?>">
		</p>
		
		<p>
		<label><?php _e('Item Four Details','becorp');?></label></p>
		<p><input type="text" name="item_four_details" id="item_four_details" style="width: 480px; height: 56px; padding: 0px;" placeholder="Enter Price & Time Durations"  value="<?php if (!empty($item_four_details)) echo esc_textarea( $item_four_details ); ?>">
		</p>
		
		<p>
		<label><?php _e('Item Five Details','becorp');?></label></p>
		<p><input type="text" name="item_five_details" id="item_five_details" style="width: 480px; height: 56px; padding: 0px;" placeholder="Enter Price & Time Durations"  value="<?php if (!empty($item_five_details)) echo esc_textarea( $item_five_details ); ?>">
		</p>
		<p>
		<label><?php _e('Button Text','becorp');?></label></p>
		<p><input type="text" name="item_button_text" id="item_button_text" style="width: 480px; height: 56px; padding: 0px;" placeholder="Enter Price & Time Durations"  value="<?php if (!empty($item_button_text)) echo esc_textarea( $item_button_text ); ?>">
		</p>
		
		<p>
		<label><?php _e('Button URL','becorp');?></label></p>
		<p><input type="text" name="item_button_url" id="item_button_url" style="width: 480px; height: 56px; padding: 0px;" placeholder="Enter Price & Time Durations"  value="<?php if (!empty($item_button_url)) echo esc_textarea( $item_button_url ); ?>">
		</p>
	<?php }
	
	function achievement_meta()
	{	global $post ;
		
		$fa_icon_name =sanitize_text_field( get_post_meta( get_the_ID(), 'fa_icon_name', true ));
		$total_achieve =sanitize_text_field( get_post_meta( get_the_ID(), 'total_achieve', true ));
		
	?>	
		<p><h4 class="heading"><?php _e('Enter font awesome icon name','becorp');?></h4>
		<input   name="fa_icon_name" id="fa_icon_name" style="width: 480px" placeholder="Enter font awesome icon name" type="text" value="<?php if (!empty($fa_icon_name)) echo esc_attr($fa_icon_name);?>"> </input></p>
		
		<p><h4 class="heading"><?php _e('Number Of Achievemens','becorp');?></h4>
		<input   name="total_achieve" id="total_achieve" style="width: 480px" placeholder="Enter Total No. of Achievemens" type="text" value="<?php if (!empty($total_achieve)) echo esc_attr($total_achieve);?>"> </input></p>
<?php }

function becorp_meta_save($post_id) 
{	if ( ! current_user_can( 'edit_page', $post_id ) )
		{     return ;	} 		
		if(isset( $_POST['post_ID']))
		{ 	
		
			$post_ID = $_POST['post_ID'];				
			$post_type = get_post_type($post_ID);
			if($post_type=='slider'){
				update_post_meta($post_ID, 'image_description', sanitize_text_field($_POST['meta_image_description']));
				update_post_meta($post_ID, 'meta_more_info_text', sanitize_text_field($_POST['meta_more_info_text']));
				update_post_meta($post_ID, 'meta_more_info_url', sanitize_text_field($_POST['meta_more_info_url']));
								
				update_post_meta($post_ID, 'meta_buy_now_text', sanitize_text_field($_POST['meta_buy_now_text']));
				update_post_meta($post_ID, 'meta_buy_now_url', sanitize_text_field($_POST['meta_buy_now_url']));
			}
			else if($post_type=='about_us') {
				update_post_meta($post_ID, 'aboutus_description', sanitize_text_field($_POST['aboutus_description'])); 
			}
			else if($post_type=='service') {
				update_post_meta($post_ID, 'service_icon_awesome', sanitize_text_field($_POST['service_icon_awesome']));				
				update_post_meta($post_ID, 'meta_service_description', sanitize_text_field($_POST['meta_service_description']));
				update_post_meta($post_ID, 'meta_service_navigation', sanitize_text_field($_POST['meta_service_navigation']));
				update_post_meta($post_ID, 'meta_service_target', sanitize_text_field($_POST['meta_service_target']));
			}
		else if($post_type == 'esol_team') {
				update_post_meta($post_ID,'occupation',sanitize_text_field($_POST['occupation']));
				update_post_meta($post_ID,'team_description',sanitize_text_field($_POST['team_description']));
				update_post_meta($post_ID,'twt_meta_save',sanitize_text_field($_POST['twt_meta_save']));
				update_post_meta($post_ID,'twt_meta_save_chkbx',sanitize_text_field($_POST['twt_meta_save_chkbx']));
				update_post_meta($post_ID,'fb_meta_save',sanitize_text_field($_POST['fb_meta_save']));
				update_post_meta($post_ID,'fb_meta_save_chkbx',sanitize_text_field($_POST['fb_meta_save_chkbx']));
				update_post_meta($post_ID,'google_meta_save',sanitize_text_field($_POST['google_meta_save']));
				update_post_meta($post_ID,'google_meta_save_chkbx',sanitize_text_field($_POST['google_meta_save_chkbx']));
				update_post_meta($post_ID,'lnkd_meta_save',sanitize_text_field($_POST['lnkd_meta_save']));
				update_post_meta($post_ID,'lnkd_meta_save_chkbx',sanitize_text_field($_POST['lnkd_meta_save_chkbx']));
			}
			else if($post_type=='portfolio') {
				update_post_meta($post_ID, 'portfolio_project_link', sanitize_text_field($_POST['portfolio_project_link']));
				update_post_meta($post_ID, 'portfolio_project_target', sanitize_text_field($_POST['portfolio_project_target']));
			}
			else if($post_type=='client') {
				update_post_meta($post_ID, 'client_link', sanitize_text_field($_POST['client_link']));
				update_post_meta($post_ID, 'client_target', sanitize_text_field($_POST['client_target']));
			}
			else if($post_type=='social_media'){
				update_post_meta($post_ID, 'social_media_link', sanitize_text_field($_POST['social_media_link']));
				update_post_meta($post_ID, 'social_media_target', sanitize_text_field($_POST['social_media_target']));
				update_post_meta($post_ID, 'social_media_fa_icon', sanitize_text_field($_POST['social_media_fa_icon']));
		}
		else if($post_type=='testimonial')
		{
			update_post_meta($post_ID, 'testimonial_designation', sanitize_text_field($_POST['testimonial_designation']));
		}
		else if($post_type=='pricing_table')
		{
			update_post_meta($post_ID, 'item_pricing', sanitize_text_field($_POST['item_pricing']));
			update_post_meta($post_ID, 'time_duration', sanitize_text_field($_POST['time_duration']));
			update_post_meta($post_ID, 'item_two_details', sanitize_text_field($_POST['item_two_details']));
			update_post_meta($post_ID, 'item_three_details', sanitize_text_field($_POST['item_three_details']));
			update_post_meta($post_ID, 'item_four_details', sanitize_text_field($_POST['item_four_details']));
			update_post_meta($post_ID, 'item_five_details', sanitize_text_field($_POST['item_five_details'])); 
			update_post_meta($post_ID, 'item_button_text', sanitize_text_field($_POST['item_button_text'])); 
			update_post_meta($post_ID, 'item_button_url', sanitize_text_field($_POST['item_button_url'])); 
		}
		else if($post_type == 'achievement')
		{
			update_post_meta($post_ID, 'fa_icon_name', sanitize_text_field($_POST['fa_icon_name']));
			update_post_meta($post_ID, 'total_achieve', sanitize_text_field($_POST['total_achieve']));
		}
			
		
}
}