<?php
//Pro Button

function esol_layout_customizer( $wp_customize ) {
class WP_layout_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
		
	$esol_option = wp_parse_args( get_option('esol_option',array()),theme_default_data());
	
	$data_enable = explode(",",$esol_option['front_page_data']);	

	$defaultenableddata=array('service','achievement','gallery','testimonial','team','blog','pricing','client','social');
	$layout_disable=array_diff($defaultenableddata,$data_enable);

    ?>
 <h3><?php _e('Enable','esol'); ?></h3>
  <ul class="sortable customizer_layout" id="enable">
  <?php if( !empty($data_enable[0]) )    { foreach( $data_enable as $value ){ ?>
  <li class="ui-state" id="<?php echo $value; ?>"><?php echo $value; ?></li>
  <?php } } ?>
  </ul>
  
  
 <h3><?php _e('Disable','esol');?></h3> 
 <ul class="sortable customizer_layout" id="disable">
 <?php if(!empty($layout_disable)){ foreach($layout_disable as $val){ ?>
  <li class="ui-state" id="<?php echo $val; ?>"><?php echo $val; ?></li>
  <?php } } ?>
 </ul>
 <div class="section">
		<p> <b><?php _e('Slider section always top on the home page','esol'); ?></b></p>
		<p> <b><?php _e('Note:','esol'); ?> </b> <?php _e('By default all the section are enable on homepage. If you do not want to display any section just drag that section to the disabled box.','esol'); ?><p>
		</div>
<script>
jQuery(document).ready(function($) {
    $( ".sortable" ).sortable({
		connectWith: '.sortable'
	});
  });
   
jQuery(document).ready(function($){	
	
	// Get items id you can chose
	function asiathemesItems(asiathemes)
	{
		var columns = [];
		$(asiathemes + ' #enable').each(function(){
			columns.push($(this).sortable('toArray').join(','));
		});
		return columns.join('|');
	}
	
	function asiathemesItems_disable(asiathemes)
	{
		var columns = [];
		$(asiathemes + ' #disable').each(function(){
			columns.push($(this).sortable('toArray').join(','));
		});
		return columns.join('|');
	}
	
	//onclick check id
	$('#enable .ui-state,#disable .ui-state').mouseleave(function(){ 
		var enable = asiathemesItems('#customize-control-esol_option-layout_manager');
		var disable = asiathemesItems_disable('#customize-control-esol_option-layout_manager');

		$("#customize-control-esol_option-front_page_data input[type = 'text']").val(enable);
		$("#customize-control-esol_option-layout_textbox_disable input[type = 'text']").val(disable);
		$("#customize-control-esol_option-front_page_data input[type = 'text']").change();		
	});

  });
</script>

    <?php
    }
}

$wp_customize->add_panel( 'esol_layout_setting', array(
		'priority'       => 1000,
		'capability'     => 'edit_theme_options',
		'title'      => __('Layout Manager Setting', 'esol'),
	) );


$wp_customize->add_section( 'esol_layout_section' , array(
		'title'      => __('Theme Layout Manager', 'esol'),
		'panel' => 'esol_layout_setting',
   	) );

$wp_customize->add_setting(
    'esol_option[layout_manager]',
    array(
        'default' => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		
    )	
);
$wp_customize->add_control( new WP_layout_Customize_Control( $wp_customize, 'esol_option[layout_manager]', array(
		'label' => __('Discover esol Pro','esol'),
        'section' => 'esol_layout_section',
		'setting' => 'esol_option[layout_manager]',
    ))
);

$wp_customize->add_setting(
    'esol_option[front_page_data]', 
    array(
        'default' =>'service','achievement','gallery','testimonial','team','blog','pricing','client','social',
		'type'=>'option'
    )
	
);
$wp_customize->add_control(
    'esol_option[front_page_data]',
    array(
        'label' => __('Enable','esol'),
        'section' => 'esol_layout_section',
        'type' => 'text',
		));
		
	
$wp_customize->add_setting(
    'esol_option[layout_textbox_disable]',
    array(
        'default' =>'',
		'type'=>'option'
    )
	
);
$wp_customize->add_control(
    'esol_option[layout_textbox_disable]',
    array(
        'label' => __('Disable','esol'),
        'section' => 'esol_layout_section',
        'type' => 'text	',
		));	


}
add_action( 'customize_register', 'esol_layout_customizer' );
?>