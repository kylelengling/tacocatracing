<?php

global $wpdb;

require_once('inc/admin_bar.php');
require_once('inc/admin_menu.php');
require_once('inc/actions.php');
require_once('inc/filters.php');

if (function_exists('add_theme_support')) { 
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(640, 360);
}
