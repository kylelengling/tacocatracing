<?php

function tacocatracing_admin_menu() {
  remove_meta_box('dashboard_right_now', 'dashboard', 'core'); // right now overview box
  remove_meta_box('dashboard_incoming_links', 'dashboard', 'core'); // incoming links box
  remove_meta_box('dashboard_quick_press', 'dashboard', 'core'); // quick press box
  remove_meta_box('dashboard_plugins', 'dashboard', 'core'); // new plugins box
  remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core'); // recent drafts box
  remove_meta_box('dashboard_recent_comments', 'dashboard', 'core'); // recent comments box
  remove_meta_box('dashboard_primary', 'dashboard', 'core'); // wordpress development blog box
  remove_meta_box('dashboard_secondary', 'dashboard','core'); // other wordpress news box

  remove_menu_page('index.php'); // Dashboard
  // remove_menu_page('edit.php'); // Posts
  // remove_menu_page('upload.php'); // Media
  remove_menu_page('edit-comments.php'); // Comments
  remove_menu_page('tools.php'); // Tools
}

function tacocatracing_admin_menu_init() {
  remove_submenu_page('themes.php', 'theme-editor.php');
}
