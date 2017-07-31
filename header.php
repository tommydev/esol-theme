<html <?php language_attributes(); ?> >
<head>
<?php
$esol_option = theme_default_data(); 
	$header_setting = wp_parse_args(  get_option( 'esol_option', array() ), $esol_option );
 ?>
<title>Esol | Wordpress Thems</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/css/default.css" type="text/css" media="screen" /> 
	<?php wp_head(); ?>
</head>
<?php 

if($header_setting['theme_layout_options'] == "boxed")
{	
	$classs="boxed"; }
	else
	{ $classs="wide"; }
 ?>
<body <?php body_class($classs); ?> >
<div class="wrapper">

<!-- Start header top -->
	<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="top-share">
						<li><a href="#" class="hvr-s-b facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="hvr-s-b twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="hvr-s-b google"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="hvr-s-b linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" class="hvr-s-b pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" class="hvr-s-b dribbble"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#" class="hvr-s-b instagram"><i class="fa fa-instagram"></i></a></li>
					</ul>
					<ul class="top-link">
						<li><a href="#"><i class="fa fa-lock"></i> login</a></li>
						<li class="top-register"><a href="#" class="hvr-s-b"><i class="fa fa-sign-in"></i> Register</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- End header top -->
 
<!------Menu section-------->
<!-- start header -->
  <div class="header sticky-navigation">
  
    <span class="bottom-shadow1"></span>
  
    <div class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="site-logo">
           	<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php if($header_setting['text_title'] == 1) { ?>
				<img class="img-responsive" src="<?php  echo esc_url($header_setting['upload_image_logo']); ?>" title="Esol" style="height:<?php if($header_setting['height']!='') { echo esc_html($header_setting['height']); } ?>px; width:<?php if($header_setting['width']!='') { echo esc_html($header_setting['width']); } ?>px;">
				<?php } else
					{ 
						echo get_bloginfo('name');
					} ?>
				</a>
		  </div>
        </div>
        <div class="collapse navbar-collapse">
			<?php	wp_nav_menu( array(  
									'theme_location' => 'primary',
									'container'  => 'collapse navbar-collapse',
									'menu_class' => 'nav navbar-nav navbar-right',
									'fallback_cb' => 'asiathemes_fallback_page_menu',
									'walker' => new asiathemes_nav_walker()
		     						)
		);	?> 
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>