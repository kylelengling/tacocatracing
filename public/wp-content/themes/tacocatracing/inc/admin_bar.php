<?php

function tacocatracing_admin_bar() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('comments'); //remove comments
  $wp_admin_bar->remove_menu('wp-logo'); //remove the whole wordpress logo, help etc part
}
