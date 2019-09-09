<?php

function parking_setup(){

register_nav_menus(
			array(
				'primary' => __( 'Primary', 'parking' ),
				'left-menu' => __( 'Footer Menu', 'parking' ),
			)
		);

add_theme_support(
			'custom-logo',
			array(
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support('post-formats',array('aside','image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'));

}
add_action( 'after_setup_theme', 'parking_setup' );

function parking_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer1', 'parking' ),
			'id'            => 'footer1',
			'before_widget' => '<div  class="widget-item">',
			'after_widget'  => '</div>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Footer2', 'parking' ),
			'id'            => 'footer2',
			'before_widget' => '<div  class="widget-item">',
			'after_widget'  => '</div>',
		)
	);

}
add_action( 'widgets_init', 'parking_widgets_init' );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}
function parking_customize_register($wp_customize){

$wp_customize->add_section('copyright_section',array(
		'title' => 'Copyright',
		'priority'=>'30'
	));
$wp_customize->add_setting('footer_copyright',array(
	'default' => ''
	));
$wp_customize->add_control(new WP_Customize_control($wp_customize,'copyright_text',array(
	'label' => 'Copyright Text',
	'section' =>'copyright_section',
	'settings'=>'footer_copyright',

	)));


# footer copyright designed by Link

$wp_customize->add_setting('designed_text',array(
	'default' => ''
	));
$wp_customize->add_control(new WP_Customize_control($wp_customize,'designed_text',array(
	'label' => 'Copyright Design Text',
	'section' =>'copyright_section',
	'settings'=>'designed_text',

	)));

$wp_customize->add_setting('designed_link',array(
	'default' => '#'
	));
$wp_customize->add_control(new WP_Customize_control($wp_customize,'designed_link',array(
	'label' => 'Copyright Design Link',
	'section' =>'copyright_section',
	'settings'=>'designed_link',

	)));



# Add New Section for Social Link 

$wp_customize->add_section('social_link_section',array(
		'title' => 'Social Link Section',
		'priority'=>'30'
	));

# Facebook Link

$wp_customize->add_setting('facebook_link',array(
	'default' => '#'
	));
$wp_customize->add_control(new WP_Customize_control($wp_customize,'facebook_link',array(
	'label' => 'Facebook Link',
	'section' =>'social_link_section',
	'settings'=>'facebook_link',

	)));

# Twitter Link

$wp_customize->add_setting('twitter_link',array(
	'default' => '#'
	));
$wp_customize->add_control(new WP_Customize_control($wp_customize,'twitter_link',array(
	'label' => 'Twitter Link',
	'section' =>'social_link_section',
	'settings'=>'twitter_link',

	)));

# Google Link

$wp_customize->add_setting('google_link',array(
	'default' => '#'
	));
$wp_customize->add_control(new WP_Customize_control($wp_customize,'google_link',array(
	'label' => 'Google Link',
	'section' =>'social_link_section',
	'settings'=>'google_link',

	)));

# Linkdin Link

$wp_customize->add_setting('linkdin_link',array(
	'default' => '#'
	));
$wp_customize->add_control(new WP_Customize_control($wp_customize,'linkdin_link',array(
	'label' => 'Linkdin Link',
	'section' =>'social_link_section',
	'settings'=>'linkdin_link',

	)));

}
add_action( 'customize_register', 'parking_customize_register' );

function mycustompost(){

echo'hiiiiiiiiiii';

}
add_action('mycustompost','mycustompost');

?>