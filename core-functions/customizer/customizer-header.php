<?php
add_action( 'customize_register', 'esol_header_customizer' );
function esol_header_customizer( $wp_customize ) {
wp_enqueue_style('esol-customizr', ESOL_TEMPLATE_DIR_URI .'/css/customizr.css');
$wp_customize->remove_control('header_textcolor');

/* Header Section */
	$wp_customize->add_panel( 'header_options', array(
		'priority'       => 1,
		'capability'     => 'edit_theme_options',
		'title'      => __('Theme Options Settings', 'esol'),
	) );
	
	
	// Theme General Settings
   	$wp_customize->add_section( 'theme_general_setting' , array(
		'title'      => __('Theme Layout & Color Settings', 'businesso'),
		'panel'  => 'header_options',
		'priority'   => 19,
   	) );
	
	$wp_customize->add_setting(
    'esol_option[theme_layout_options]',
    array(
        'default' => __('Wide','businesso'),
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		
    ));

	$wp_customize->add_control(
    'esol_option[theme_layout_options]',
    array(
        'type' => 'select',
        'label' => __('Theme Layout Setting','businesso'),
        'section' => 'theme_general_setting',
		 'choices' => array('wide'=>__('Wide', 'businesso'), 'boxed'=>__('Boxed', 'businesso')),
		 //'priority'   => 167,
		));
		
	// Theme Color Scheme 
	$wp_customize->add_setting(
    'esol_option[theme_color_scheme_options]',
    array(
        'default' => __('Defalt CSS','businesso'),
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		
    ));

	$wp_customize->add_control(
    'esol_option[theme_color_scheme_options]',
    array(
        'type' => 'select',
        'label' => __('Theme Colors Scheme Setting','businesso'),
        'section' => 'theme_general_setting',
		 'choices' => array('default.css'=>__('Default Css', 'businesso'),'teal.css'=>__('Teal Css', 'businesso'), 'dark_blue.css'=>__('Dark Blue Css', 'businesso'),'light_green.css'=>__('Light-Green Css', 'businesso'),'purple.css'=>__('purple Css', 'businesso'),'orange.css'=>__('Orange Css', 'businesso'),'light_red.css'=>__('light Red Css', 'businesso'),'purple.css'=>__('Purple Css', 'businesso'),'yellow.css'=>__('Yellow Css', 'businesso')),
		 //'priority'   => 167,
		));
		
	
	
   	$wp_customize->add_section( 'header_front_data' , array(
		'title'      => __('Custom Header Settings', 'esol'),
		'panel'  => 'header_options',
		'priority'   => 20,
   	) );
	
	//Show and hide Header Email and Phone
	$wp_customize->add_setting(
	'esol_option[header_phone_email_enabled]',
    array(
        'default' => 0,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[header_phone_email_enabled]',
    array(
        'label' => __('Enable/Disable Mobile and Email','esol'),
        'section' => 'header_front_data',
        'type' => 'checkbox',
    )
	);
	
	//Email and Mobile
	$wp_customize->add_setting(
	'esol_option[header_info_phone]', array(
        'default'        => __('(2)245 23 68','esol'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('esol_option[header_info_phone]', array(
        'label'   => __('Header Headline :', 'esol'),
        'section' => 'header_front_data',
        'type'    => 'text',
    ));
	$wp_customize->add_setting('esol_option[header_info_mail]'
		, array(
        'default'        => 'info@asiathemes.com',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'esol_option[header_info_mail]', array(
        'label'   => __('Header Text :', 'esol'),
        'section' => 'header_front_data',
        'type'    => 'text',
    ));
	
	//Show and hide Header Social Icons
	$wp_customize->add_setting(
	'esol_option[header_social_media_enabled]'
    ,
    array(
        'default' => 0,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[header_social_media_enabled]',
    array(
        'label' => __('Show Social icons','esol'),
        'section' => 'header_front_data',
        'type' => 'checkbox',
    )
	);
	
	// Facebook link
	$wp_customize->add_setting(
    'esol_option[social_media_facebook_link]',
    array(
        'default' => '#',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'esol_option[social_media_facebook_link]',
    array(
        'label' => __('Facebook URL','esol'),
        'section' => 'header_front_data',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
	'esol_option[facebook_media_enabled]',array(
	'default' => 0,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$wp_customize->add_control(
    'esol_option[facebook_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','esol'),
        'section' => 'header_front_data',
    )
);

//twitter link
	
	$wp_customize->add_setting(
    'esol_option[social_media_twitter_link]',
    array(
        'default' => '#',
		'type' => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'esol_option[social_media_twitter_link]',
    array(
        'label' => __('Twitter URL','esol'),
        'section' => 'header_front_data',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
	'esol_option[twitter_media_enabled]'
    ,array(
	'default' => 0,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$wp_customize->add_control(
    'esol_option[twitter_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','esol'),
        'section' => 'header_front_data',
    )
);
	//googlelink
	
	$wp_customize->add_setting(
	'esol_option[social_media_google_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'esol_option[social_media_google_link]',
    array(
        'label' => __('Google URL','esol'),
        'section' => 'header_front_data',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
	'esol_option[google_media_enabled]'
	,array(
	'default' => 0,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$wp_customize->add_control(
    	'esol_option[google_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','esol'),
        'section' => 'header_front_data',
    )
);

// Linkedin 
	
	$wp_customize->add_setting(
	'esol_option[social_media_linkedin_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'esol_option[social_media_linkedin_link]',
    array(
        'label' => __('Linkedin URL','esol'),
        'section' => 'header_front_data',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
	'esol_option[linkedin_media_enabled]'
	,array(
	'default' => 0,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$wp_customize->add_control(
    	'esol_option[linkedin_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','esol'),
        'section' => 'header_front_data',
    )
);

	//Header logo setting
	$wp_customize->add_section( 'header_logo' , array(
		'title'      => __('Header Logo setting', 'businesso'),
		'panel'  => 'header_options',
		'priority' => 21,
   	) );
	$wp_customize->add_setting(
		'esol_option[upload_image_logo]'
		, array(
        'default' => ESOL_TEMPLATE_DIR_URI.'/images/logo.png',
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    ));
	
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'esol_option[upload_image_logo]',
			   array(
				   'label'          => __( 'Upload a 250x50 for Logo Image', 'businesso' ),
				   'section'        => 'header_logo',
			   )));

	//Enable/Disable logo text
	$wp_customize->add_setting(
    'esol_option[text_title]',array(
	'default'    => 1,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option'
	));

	$wp_customize->add_control(
    'esol_option[text_title]',
    array(
        'type' => 'checkbox',
        'label' => __('Enable/Disabe Logo','businesso'),
        'section' => 'header_logo',
		'priority' => 10,
    ));
			 
	//Logo width
	
	$wp_customize->add_setting(
    'esol_option[width]',array(
	'sanitize_callback' => 'sanitize_text_field',
	'default' => 200,
	'type' => 'option',
	
	));

	$wp_customize->add_control(
    'esol_option[width]',
    array(
        'type' => 'text',
        'label' => __('Enter Logo Width','businesso'),
        'section' => 'header_logo',
    ));
	
	//Logo Height
	$wp_customize->add_setting(
    'esol_option[height]',array(
	'sanitize_callback' => 'sanitize_text_field',
	'default' => 50,
	'type'=>'option',
	
	));

	$wp_customize->add_control(
    'esol_option[height]',
    array(
        'type' => 'text',
        'label' => __('Enter Logo Height','businesso'),
        'section' => 'header_logo',
    ));
	
	//Text logo
	$wp_customize->add_setting(
	'esol_option[enable_header_logo_text]'
    ,array(
	'default' => 1,
	'sanitize_callback' => 'sanitize_text_field',
	'type' =>'option',
	'priority' => 2,
	
	));

	$wp_customize->add_control(
    'esol_option[enable_header_logo_text]',
    array(
        'type' => 'checkbox',
        'label' => __('Show Logo text','businesso'),
        'section' => 'header_logo',
    ));
			 

	// Footer social Icon
	$wp_customize->add_section(
        'header_social_icon',
        array(
            'title' => 'Social Link ',
			'panel' => 'header_options',
			'priority' => 23,
        )
    );
	//Show and hide Footer Social Icons
	$wp_customize->add_setting(
	'esol_option[footer_social_media_enabled]'
    ,
    array(
        'default' => 0,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[footer_social_media_enabled]',
    array(
        'label' => __('Show Social icons','esol'),
        'section' => 'header_social_icon',
        'type' => 'checkbox',
    )
	);
	
	// Facebook link
	$wp_customize->add_setting(
    'esol_option[footer_social_media_facebook_link]',
    array(
        'default' => '#',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'esol_option[footer_social_media_facebook_link]',
    array(
        'label' => __('Facebook URL','esol'),
        'section' => 'header_social_icon',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
	'esol_option[footer_facebook_media_enabled]',array(
	'default' => 0,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$wp_customize->add_control(
    'esol_option[footer_facebook_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','esol'),
        'section' => 'header_social_icon',
    )
);
	//twitter link
	
	$wp_customize->add_setting(
    'esol_option[footer_social_media_twitter_link]',
    array(
        'default' => '#',
		'type' => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'esol_option[footer_social_media_twitter_link]',
    array(
        'label' => __('Twitter URL','esol'),
        'section' => 'header_social_icon',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
	'esol_option[footer_twitter_media_enabled]'
    ,array(
	'default' => 0,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$wp_customize->add_control(
    'esol_option[footer_twitter_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','esol'),
        'section' => 'header_social_icon',
    )
);

	//googlelink
	
	$wp_customize->add_setting(
	'esol_option[footer_social_media_google_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'esol_option[footer_social_media_google_link]',
    array(
        'label' => __('Google URL','esol'),
        'section' => 'header_social_icon',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
	'esol_option[footer_google_media_enabled]'
	,array(
	'default' => 0,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$wp_customize->add_control(
    	'esol_option[footer_google_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','esol'),
        'section' => 'header_social_icon',
    )
);


	//Linkdin link
	
	$wp_customize->add_setting(
	'esol_option[footer_social_media_linkedin_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'esol_option[footer_social_media_linkedin_link]',
    array(
        'label' => __('Linkdin URL','esol'),
        'section' => 'header_social_icon',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
	'esol_option[footer_linkedin_media_enabled]'
	,array(
	'default' => 0,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$wp_customize->add_control(
    	'esol_option[footer_linkedin_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','esol'),
        'section' => 'header_social_icon',
    )
);
	
	//Flicker  link
	
	$wp_customize->add_setting(
	'esol_option[footer_social_media_flicker_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'esol_option[footer_social_media_flicker_link]',
    array(
        'label' => __('Flicker URL','esol'),
        'section' => 'header_social_icon',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
	'esol_option[footer_flicker_media_enabled]'
	,array(
	'default' => 0,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$wp_customize->add_control(
    	'esol_option[footer_flicker_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','esol'),
        'section' => 'header_social_icon',
    )
);

	//Youtube  link
	
	$wp_customize->add_setting(
	'esol_option[footer_social_media_youtube_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'esol_option[footer_social_media_youtube_link]',
    array(
        'label' => __('Youtube URL','esol'),
        'section' => 'header_social_icon',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
	'esol_option[footer_youtube_media_enabled]'
	,array(
	'default' => 0,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$wp_customize->add_control(
    	'esol_option[footer_youtube_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','esol'),
        'section' => 'header_social_icon',
    )
);


	//Vimeo square link
	
	$wp_customize->add_setting(
	'esol_option[footer_social_media_vimeo_square_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'esol_option[footer_social_media_vimeo_square_link]',
    array(
        'label' => __('Vimeo URL','esol'),
        'section' => 'header_social_icon',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
	'esol_option[footer_vimeo_square_media_enabled]'
	,array(
	'default' => 0,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$wp_customize->add_control(
    	'esol_option[footer_vimeo_square_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','esol'),
        'section' => 'header_social_icon',
    )
);


	//rss link
	
	$wp_customize->add_setting(
	'esol_option[footer_social_media_rss_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'esol_option[footer_social_media_rss_link]',
    array(
        'label' => __('rss URL','esol'),
        'section' => 'header_social_icon',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
	'esol_option[footer_rss_media_enabled]'
	,array(
	'default' => 0,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$wp_customize->add_control(
    	'esol_option[footer_rss_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','esol'),
        'section' => 'header_social_icon',
    )
);
	//Custom css
	
	
	// Footer Copyright Option Settings
	$wp_customize->add_section( 'footer_copyright_setting' , array(
		'title'      => __('Footer Customization', 'esol'),
		'panel'  => 'header_options',
		'priority' => 39,
   	) );
	$wp_customize->add_setting(
	'esol_option[footer_customization_text]'
		, array(
        'default'        => __('@ 2016 esol Theme ','esol'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=> 'option',
    ));
    $wp_customize->add_control( 'esol_option[footer_customization_text]', array(
        'label'   => __('Footer Customization Text', 'esol'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    ));	
	
	$wp_customize->add_setting(
	'esol_option[footer_customization_develop]'
		, array(
        'default'        => __('Asiathemes ','esol'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=> 'option',
    ));
    $wp_customize->add_control( 'esol_option[footer_customization_develop]', array(
        'label'   => __('Footer Customization Reserved By', 'esol'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
	'esol_option[develop_by_name]'
		, array(
        'default'        => __('All rights reserved','esol'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=> 'option',
    ));
    $wp_customize->add_control( 'esol_option[develop_by_name]', array(
        'label'   => __('Theme Reserved By Content', 'esol'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
	'esol_option[develop_by_link]'
		, array(
        'default'        => 'https://asiathemes.com/',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type'=> 'option',
    ));
    $wp_customize->add_control( 'esol_option[develop_by_link]', array(
        'label'   => __('Theme Developed By Link', 'esol'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    ));
			
	// Home Service Section 		
			
	$wp_customize->add_section( 'home_service_section' , array(
		'title'      => __('Home Service Settings', 'esol'),
		'panel'  => 'header_options',
		'priority'   => 22,
   	) );
	
	// Home Service Title Section Two
	$wp_customize->add_setting(
	'esol_option[service_section_enabled]',
    array(
        'default' =>1,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[service_section_enabled]',
    array(
        'label' => __('Enable/Disabe Service Title','esol'),
        'section' => 'home_service_section',
        'type' => 'checkbox',
    )
	);
	
	// Home Service Title Section One
	$wp_customize->add_setting(
	'esol_option[service_title_one]',
    array(
        'default' =>  __('WE ARE CREATING ','businesso'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[service_title_one]',
    array(
        'label' => __('Service Title One','esol'),
        'section' => 'home_service_section',
        'type' => 'text',
    )
	);
	
	
	
	// Home Service Title Section Two
	$wp_customize->add_setting(
	'esol_option[service_title_two]',
    array(
        'default' =>  __('MINIMAL DESIGNS','businesso'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[service_title_two]',
    array(
        'label' => __('Service Title Two','esol'),
        'section' => 'home_service_section',
        'type' => 'text',
    )
	);
	
	// Home Service Display Settings
	
	$wp_customize->add_setting(
    'esol_option[service_display_count]',
    array(
		'type' => 'option',
        'default' => __('3','businesso'),
		'sanitize_callback' => 'sanitize_text_field',
    ));

	$wp_customize->add_control(
    'esol_option[service_display_count]',
    array(
        'type' => 'select',
        'label' => __('Select Number of Services On Home Section','businesso'),
        'section' => 'home_service_section',
		 'choices' => array('3'=>__('3', 'businesso'), '6'=>__('6', 'businesso'), '9' => __('9','businesso'), '12' => __('12','businesso'),'15'=> __('15','businesso'), '18'=> __('18','businesso'),'21'=> __('21','businesso'), '24' =>__('24','businesso')),
		 'priority'   => 142,
		));
	
	
	// Home Gallery Section 		
			
			$wp_customize->add_section( 'home_gallery_section' , array(
		'title'      => __('Home Portfolio Settings', 'esol'),
		'panel'  => 'header_options',
		'priority'   => 24,
   	) );
	
	// Home Portfolio Title Section Two
	$wp_customize->add_setting(
	'esol_option[enable_home_portfolio]',
    array(
        'default' =>1,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[enable_home_portfolio]',
    array(
        'label' => __('Enable/Disabe Portfolio Title','esol'),
        'section' => 'home_gallery_section',
        'type' => 'checkbox',
    )
	);
	
	// Home Portfolio Title Section Two
	$wp_customize->add_setting(
	'esol_option[gallery_title_one]',
    array(
        'default' =>  __('Latest Gallery','businesso'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[gallery_title_one]',
    array(
        'label' => __('Portfolio Title One','esol'),
        'section' => 'home_gallery_section',
        'type' => 'text',
    )
	);
	
	// Home Portfolio Title Section Two
	$wp_customize->add_setting(
	'esol_option[gallery_title_two]',
    array(
        'default' =>  __('MINIMAL DESIGNS','businesso'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[gallery_title_two]',
    array(
        'label' => __('Portfolio Title  Two','esol'),
        'section' => 'home_gallery_section',
        'type' => 'text',
    )
	);
	
	//Select number of Portfolio on front page
	
	$wp_customize->add_setting(
    'esol_option[portfolio_display_count]',
    array(
		'type' => 'option',
        'default' => __('3','businesso'),
		'sanitize_callback' => 'sanitize_text_field',
    ));

	$wp_customize->add_control(
    'esol_option[portfolio_display_count]',
    array(
        'type' => 'select',
        'label' => __('Select Number of Portfolio On Home','businesso'),
        'section' => 'home_gallery_section',
		 'choices' => array('3'=>__('3', 'businesso'), '6'=>__('6', 'businesso'), '9' => __('9','businesso'), '12' => __('12','businesso'),'15'=> __('15','businesso'), '18'=> __('18','businesso'),'21'=> __('21','businesso'), '24' =>__('24','businesso')),
		 'priority'   => 142,
		));
	
	
	// Home Testimonial Section 		
			
			$wp_customize->add_section( 'home_testimonial_section' , array(
		'title'      => __('Home Testimonial Settings', 'esol'),
		'panel'  => 'header_options',
		'priority'   => 26,
   	) );
	
	// Home Testimonial Enable/Disabe Section 
	$wp_customize->add_setting(
	'esol_option[enable_home_testimonial]',
    array(
        'default' =>1,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[enable_home_testimonial]',
    array(
        'label' => __('Enable/Disabe Templates Title','esol'),
        'section' => 'home_testimonial_section',
        'type' => 'checkbox',
    )
	);
	
	// Home Testimonial Title Section One
	$wp_customize->add_setting(
	'esol_option[testimo_heading_title]',
    array(
        'default' =>  __('Our','businesso'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[testimo_heading_title]',
    array(
        'label' => __('Testimonial Title One','esol'),
        'section' => 'home_testimonial_section',
        'type' => 'text',
    )
	);
	
	// Home Testimonial Title Section Two
	$wp_customize->add_setting(
	'esol_option[testimo_heading_two]',
    array(
        'default' =>  __('MINIMAL DESIGNS','businesso'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[testimo_heading_two]',
    array(
        'label' =>  __('Clients Say','businesso'),
        'section' => 'home_testimonial_section',
        'type' => 'text',
    )
	);
	
	// Home Bloog Section 		
			
			$wp_customize->add_section( 'home_blog_section' , array(
		'title'      => __('Home Blog Settings', 'esol'),
		'panel'  => 'header_options',
		'priority'   => 28,
   	) );
	
	// Home Blog Enable/Disabe Section 
	$wp_customize->add_setting(
	'esol_option[home_blog_enabled]',
    array(
        'default' =>1,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[home_blog_enabled]',
    array(
        'label' => __('Enable/Disabe Blog Title','esol'),
        'section' => 'home_blog_section',
        'type' => 'checkbox',
    )
	);
	
	// Home Blog Title Section One
	$wp_customize->add_setting(
	'esol_option[blog_title_one]',
    array(
        'default' =>  __('Our','businesso'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[blog_title_one]',
    array(
        'label' => __('Title','esol'),
        'section' => 'home_blog_section',
        'type' => 'text',
    )
	);
	
	// Home Blog Title Section Two
	$wp_customize->add_setting(
	'esol_option[blog_title_two]',
    array(
        'default' =>  __('Latest News','businesso'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[blog_title_two]',
    array(
        'label' =>  __('Sub Title','businesso'),
        'section' => 'home_blog_section',
        'type' => 'text',
    )
	);
	
	// Home Blog Posts per Page
	$wp_customize->add_setting(
	'esol_option[post_display_count]',
    array(
        'default' =>3,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[post_display_count]',
    array(
        'label' =>  __('Per Page Posts','businesso'),
        'section' => 'home_blog_section',
        'type' => 'text',
    )
	);
	
	// Home Client Section 		
			
			$wp_customize->add_section( 'home_client_section' , array(
		'title'      => __('Home Client Settings', 'esol'),
		'panel'  => 'header_options',
		'priority'   => 30,
   	) );
	
	// Home Client Enable/Disabe Section 
	$wp_customize->add_setting(
	'esol_option[home_client_enabled]',
    array(
        'default' =>1,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[home_client_enabled]',
    array(
        'label' => __('Enable/Disabe Client Title','esol'),
        'section' => 'home_client_section',
        'type' => 'checkbox',
    )
	);
	
	// Home Blog Title Section One
	$wp_customize->add_setting(
	'esol_option[home_client_title_one]',
    array(
        'default' =>  __('Our','businesso'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[home_client_title_one]',
    array(
        'label' => __('Title One','esol'),
        'section' => 'home_client_section',
        'type' => 'text',
    )
	);
	
	// Home Client Title Section Two
	$wp_customize->add_setting(
	'esol_option[home_client_title_two]',
    array(
        'default' =>  __('Clients','businesso'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[home_client_title_two]',
    array(
        'label' =>  __('Title Two','businesso'),
        'section' => 'home_client_section',
        'type' => 'text',
    )
	);
	
	
	// Home Client Section 		
			
			$wp_customize->add_section( 'home_team_section' , array(
		'title'      => __('Team Settings', 'esol'),
		'panel'  => 'header_options',
		'priority'   => 32,
   	) );
	
	// Home Client Enable/Disabe Section 
	$wp_customize->add_setting(
	'esol_option[about_team_enabled]',
    array(
        'default' =>1,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[about_team_enabled]',
    array(
        'label' => __('Enable/Disabe About Team Title','esol'),
        'section' => 'home_team_section',
        'type' => 'checkbox',
    )
	);
	
	// Team Templates Enable/Disabe Section 
	$wp_customize->add_setting(
	'esol_option[about_team_temp_enabled]',
    array(
        'default' =>1,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[about_team_temp_enabled]',
    array(
        'label' => __('Enable/Disabe Team Templates Title','esol'),
        'section' => 'home_team_section',
        'type' => 'checkbox',
    )
	);
	
	// Team Title Section One
	$wp_customize->add_setting(
	'esol_option[team_title_one]',
    array(
        'default' =>  __('Our','businesso'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[team_title_one]',
    array(
        'label' => __('Title One','esol'),
        'section' => 'home_team_section',
        'type' => 'text',
    )
	);
	
	// Team  Title Section Two
	$wp_customize->add_setting(
	'esol_option[team_title_two]',
    array(
        'default' =>  __('Team','businesso'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[team_title_two]',
    array(
        'label' =>  __('Title Two','businesso'),
        'section' => 'home_team_section',
        'type' => 'text',
    )
	);
	
	// Home Bottom   Title Strip  Section
	$wp_customize->add_section( 'home_bottom_title_strip' , array(
		'title'      => __('Home Bottom Title Strip Settings', 'esol'),
		'panel'  => 'header_options',
		'priority'   =>34,
   	) );
	$wp_customize->add_setting(
	'esol_option[home_bottom_strip_enabled]',
    array(
        'default' =>1,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[home_bottom_strip_enabled]',
    array(
        'label' =>  __('Enable / Disabe Title Strip Section','businesso'),
        'section' => 'home_bottom_title_strip',
        'type' => 'checkbox',
    )
	);
	
	$wp_customize->add_setting(
	'esol_option[home_bottom_title_strips]', array(
        'default'        => __('Advantages of Esol Wordpress themes','esol'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('esol_option[home_bottom_title_strips]', array(
        'label'   => __('Title', 'esol'),
        'section' => 'home_bottom_title_strip',
        'type'    => 'text',
    ));
	
	$wp_customize->add_setting(
	'esol_option[home_bottom_strip_description]', array(
        'default'        => __('Build a professional website system and great user experience','esol'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('esol_option[home_bottom_strip_description]', array(
        'label'   => __('Description', 'esol'),
        'section' => 'home_bottom_title_strip',
        'type'    => 'text',
    ));
	
	$wp_customize->add_setting(
	'esol_option[home_bottom_strip_button_text]', array(
        'default'        => __('Purchase Now','esol'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('esol_option[home_bottom_strip_button_text]', array(
        'label'   => __('Botton Text', 'esol'),
        'section' => 'home_bottom_title_strip',
        'type'    => 'text',
    ));
	
	
	$wp_customize->add_setting(
	'esol_option[home_bottom_strip_buton_url]',
    array(
        'default' => __('https://asiathemes.com/','businesso'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	); 
	$wp_customize->add_control(
    'esol_option[home_bottom_strip_buton_url]', 
    array(
        'label' =>  __('Button URL','businesso'),
        'section' => 'home_bottom_title_strip',
        'type' => 'text',
    )
	);
	
	// Home Acheiments Section
	$wp_customize->add_section( 'home_achiements_section' , array(
		'title'      => __('Home Acheiments Section Enable/Disabe', 'esol'),
		'panel'  => 'header_options',
		'priority'   =>36,
   	) );
	$wp_customize->add_setting(
	'esol_option[achievement_section_enabled]',
    array(
        'default' =>1,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'esol_option[achievement_section_enabled]',
    array(
        'label' =>  __('Enable / Disabe','businesso'),
        'section' => 'home_achiements_section',
        'type' => 'checkbox',
    )
	);
	
} 
