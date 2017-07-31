<?php 
function theme_default_data()
  	{
	return $esol_option=array(
	// activation data 
	'esol_activation_key'=>'',
	//Front-page 
	'front_page_enabled'=> 1,
	'theme_layout_options' => 'wide',
	'theme_color_scheme_options' => 'default.css',
	'theme_dark_color_scheme_options' => 'default.css',
	'animation_ena_dis' => 1,
	'front_page_data'=> 'service,achievement,gallery,testimonial,team,blog,pricing,client,social',
	
	//Header Settings
	'header_social_media_enabled' => 0,
	'social_media_facebook_link' =>__('#','businesso'),
	'facebook_media_enabled' => 0,
	
	'social_media_twitter_link' =>__('#','businesso'),
	'twitter_media_enabled' => 0,
	
	'social_media_google_link' =>__('#','businesso'),
	'google_media_enabled' => 0,
	
	'social_media_linkedin_link' =>__('#','businesso'),
	'linkedin_media_enabled' => 0,
	
	'header_phone_email_enabled' => 0,
	'header_info_phone' =>__('(2)245 23 68','businesso'),
	'header_info_mail'=> 'asiathemes.com',
	
	//header logo setting
	'upload_image_logo'=> ESOL_TEMPLATE_DIR_URI.'/images/logo.png',
	'upload_image_favicon' => get_template_directory_uri().'/images/favicon.png',
	'text_title' =>1,
	'height' => '50',
	'width' => '250',
	'businesso_custom_css'=> '',
		
	//Slider settings
	'home_banner_enabled' => 1,
	'slider_options' => __('slide','businesso'),
	'slider_transition_delay' => __('4000','businesso'),
	'slider_button_text' => __('More Details!','businesso'),
	'slider_image_link' => '#',
	'slider_button_tab' => 1,
	
	// achievement section enabled 
	'achievement_section_enabled' =>1,
	
	//Service section settings
	'service_section_enabled' => 1,
	'service_title_one' => __('WE ARE CREATING ','businesso'),
	'service_title_two' => __('MINIMAL DESIGNS','businesso'),
	'service_display_count' => 3,
	//Home  Portfolio Section
	'enable_home_portfolio' => 1,
	'gallery_title_one' => __('Our','businesso'),
	'gallery_title_two' => __('Latest Gallery','businesso'),
	'portfolio_display_count' => 3,
	
	//Testimonial Section Settings
	'enable_home_testimonial' => 1,
	'testimo_heading_title' => __('Our','businesso'),
	'testimo_heading_two' => __(' Clients Say','businesso'),
	
	//Home Latest Blog Post
	'home_blog_enabled' => 1,
	'blog_title_one' => __('Our','businesso'),
	'blog_title_two' => __('Latest News','businesso'),
	'post_display_count' => 3,
	
	// Team Settings
	'about_team_enabled' => 1,
	'about_team_temp_enabled' => 1,
	'team_title_one' => __('Our','businesso'),
	'team_title_two' => __('Team','businesso'),
	
	// Home Client Section
	'home_client_enabled' => 1,
	'home_client_title_one' => __('Our','businesso'),
	'home_client_title_two' => __('Clients','businesso'),
	
	// Home Bottom Title Strip
	'home_bottom_strip_enabled' => 1, 
	'home_bottom_title_strips' => __('Advantages of Esol Wordpress themes','businesso'),
	'home_bottom_strip_description' => __('Build a professional website system and great user experience','businesso'),
	'home_bottom_strip_button_text' => __('Purchase Now','businesso'),
	'home_bottom_strip_buton_url' => __('https://asiathemes.com/','businesso'),
	
	// About-us Page Template Default Settings
	'about_us_title' => __('About Businesso Multipurpose Wordpress Theme ','businesso'),
	'about_us_team_title' => __('Meet Our Team ','businesso'),
	'about_us_team_desc' => __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod. ','businesso'),
		
	//Contact Page Template Settings
	'contact_message_title' => __('Contact Us','businesso'),
	'contact_information_details_title'=> __('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor.','businesso'),
	'contact_information_details_descriprtion' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.','businesso'),
	'contact_information_address_title' => __('Address Details','businesso'),
	'contact_information_address' => __('My company name,Lorem ipsum dolor,Jasmin Dr 40 Fe 72.','businesso'),
	'personal_contact_detail_title' => __('Personal Contact Details','businesso'),
	'personal_contact_phone' => __('Tel:1115550001','businesso'),
	'personal_contact_fax' => __('Fax:190-4509-494','businesso'),
	'personal_contact_email' => __('mail@example.com','businesso'),
	'google_map_enabled' => 1,
	'contact_map_url' => __('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771','businesso'),
	
	// Team Page Template Setting
	'team_title' => __('Meet Our Team','businesso'),
	'team_description' => __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod .','businesso'),
	
	// Fooetr Customization
	'footer_customization_text' => __('@ 2015 businesso Theme','businesso'),
	'footer_customization_develop' => __('Developed By','businesso'),
	'develop_by_name' => __('Asisa Themes fdgfddg ','businesso'),
	'develop_by_link' => 'http://asiathemes.com/',
	
	);
  	}
  ?>