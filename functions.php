<?php
  function custom_styles() {
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_script('script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', false);
  }
  add_action( 'wp_enqueue_scripts', 'custom_styles' );

  // Register Custom Navigation Walker
  function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu', __('WP starter template'));
  }
  add_action('init', 'wpb_custom_new_menu');

  // Add theme support for custom logo
  function themename_custom_logo_setup() {
    $defaults = array(
      'height'               => 100,
      'width'                => 250,
      'flex-height'          => true,
      'flex-width'           => true,
      'header-text'          => array( 'site-title', 'site-description' ),
      'unlink-homepage-logo' => true, 
    );
    add_theme_support( 'custom-logo', $defaults );
  }
  add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
?>
