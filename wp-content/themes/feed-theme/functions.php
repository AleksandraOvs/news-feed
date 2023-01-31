<?php

add_action( 'admin_enqueue_scripts', 'crb_enqueue_custom_carbon_fields_styles' );
function crb_enqueue_custom_carbon_fields_styles() {
	wp_enqueue_style( 'carbon-fields-custom-theme', get_stylesheet_directory_uri() . '/inc/carbon-fields-theme.css' );
}

add_theme_support( 'post-thumbnails' ); 


add_filter('show_admin_bar', '__return_false'); 

add_action ('wp_enqueue_scripts', 'ft_scripts');
function ft_scripts(){
    wp_enqueue_style ('bootstrp-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
    wp_enqueue_style ('normalize', get_stylesheet_directory_uri() . '/assets/css/normalize.css');
    wp_enqueue_style ('fonts', get_stylesheet_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_style ('styles', get_stylesheet_directory_uri() . '/assets/css/style.css');
    // wp_enqueue_style ('dark-styles', get_stylesheet_directory_uri() . '/assets/css/dark.css');
    // wp_enqueue_style ('light-styles', get_stylesheet_directory_uri() . '/assets/css/light.css');
    wp_enqueue_script ('jquery', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), null, true );
    wp_enqueue_script ('bootstrp-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js');
    wp_enqueue_script ('scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js');
}

register_nav_menus( array(
    'head_menu' => 'Header Menu'
));

function my_customize_register( $wp_customize ) {
    $wp_customize->add_setting('header_logo', array(
        'default' => '',
        'sanitize_callback' => 'absint',
    ));
	$wp_customize->add_setting('footer_logo', array(
        'default' => '',
        'sanitize_callback' => 'absint',
    ));
	
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'header_logo', array(
        'section' => 'title_tagline',
        'label' => 'Логотип'
    )));
	$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'footer_logo', array(
        'section' => 'title_tagline',
        'label' => 'Логотип Footer'
    )));

    $wp_customize->selective_refresh->add_partial('header_logo', array(
        'selector' => '.header-logo',
        'render_callback' => function() {
            $logo = get_theme_mod('header_logo');
            $img = wp_get_attachment_image_src($logo, 'full');
            if ($img) {
                return '<img src="' . $img[0] . '" alt="">';
            } else {
                return '';
            }
        }
    ));



	$wp_customize->selective_refresh->add_partial('footer_logo', array(
        'selector' => '.footer-logo',
        'render_callback' => function() {
            $footer_logo = get_theme_mod('header_logo');
            $footer_img = wp_get_attachment_image_src($footer_logo, 'full');
            if ($footer_img) {
                return '<img src="' . $footer_img[0] . '" alt="">';
            } else {
                return '';
            }
        }
    ));
}
add_action( 'customize_register', 'my_customize_register' );

