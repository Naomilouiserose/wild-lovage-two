<?php
/**
* Sprout & Spoon Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
*
*/

// Enqueue scripts and styles
function sprout_spoon_child_scripts(){
	wp_enqueue_style( 'sprout_spoon_style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'sprout_spoon_style' ));
  wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/css/fontawesome-all.min.css');
	wp_enqueue_style('sprout_spoon_respon', get_template_directory_uri() . '/css/responsive.css');
	wp_enqueue_style( 'sprou_spoon_child-google-fonts', '//fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet');

}
add_action( 'wp_enqueue_scripts', 'sprout_spoon_child_scripts' );

add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
 $defaults = array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

function create_custom_post_types() {
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'case-studies' ),
        )
    );
}
add_action( 'init', 'create_custom_post_types' );

function num_posts_archive_project_ie($query) {
    if (!is_admin() && $query->is_archive('projects-ie') && $query->is_main_query()) {
            $query->set('posts_per_page', 6);
   }
    return $query;
}


function disable_woo_commerce_sidebar() {
	remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
}
add_action('init', 'disable_woo_commerce_sidebar');
