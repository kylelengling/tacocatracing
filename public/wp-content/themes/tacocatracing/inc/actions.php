<?php
  add_action('after_setup_theme', 'tacocatracing_setup');
  add_action('wp_enqueue_scripts', 'tacocatracing_load_scripts');
  add_action('widgets_init', 'tacocatracing_widgets_init');
  add_action('wp_before_admin_bar_render', 'tacocatracing_admin_bar');
  add_action('admin_init', 'tacocatracing_admin_menu_init');
  add_action('admin_menu', 'tacocatracing_admin_menu');
  add_action('init', 'tacocatracing_register_menu');



  function tacocatracing_register_menu() {
    register_nav_menu('legal', __('Legal Menu'));
  }

  function tacocatracing_setup() {
    load_theme_textdomain('tacocatracing', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');

    global $content_width;
    if (!isset($content_width)) {
      $content_width = 640;
    }
    register_nav_menus(
      array('main-menu' => __('Main Menu', 'tacocatracing'))
    );
  }

  function tacocatracing_load_scripts() {
    wp_register_script('tacocatracing_main', get_template_directory_uri() . '/assets/scripts/build/main.min.js');

    wp_enqueue_script('jquery');
    wp_enqueue_script('tacocatracing_main', array('jquery'), '', 'true');

    $style_dir = array('templateUrl' => get_template_directory_uri());
    wp_localize_script('tacocatracing_main', 'tacocatracing', $style_dir);
  }

  function tacocatracing_widgets_init() {
    register_sidebar(array(
      'name' => __('Sidebar Widget Area', 'tacocatracing'),
      'id' => 'primary-widget-area',
      'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
      'after_widget' => "</li>",
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ));
  }
