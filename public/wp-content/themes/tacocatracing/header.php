<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php if (get_field('background_image')) { ?>
      <img class="page-bg" src="<?php the_field('background_image'); ?>" alt="" />
    <?php } ?>
     <?php if ( is_home() ) { ?>
      <img class="page-bg" src="<?php echo get_theme_root_uri().'/tacocatracing/assets/images/blog_bg.png'; ?>" alt="tacocatracing" />

<?php } ?>
    <?php if ( is_single() || ( is_archive() ) ) { ?>
      <img class="page-bg" src="<?php echo get_theme_root_uri().'/tacocatracing/assets/images/blog_bg.png'; ?>" alt="tacocatracing" />
    <?php } ?>
    <header class="site__header" role="banner">
      <div class="menu-main-container">
        <ul class="nav" id="mainMenu">
          <li class="menu-item logo"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_html(get_bloginfo('name')); ?>" rel="home">
            <img class="site__header-logo" src="<?php echo get_theme_root_uri().'/tacocatracing/assets/images/logo__tacocatracing--header.png'; ?>" alt="tacocatracing" />
          </a></li>
          <?php wp_nav_menu( array(
    'menu'           => 'nav', // Do not fall back to first non-empty menu.
    'container' => '',
    'items_wrap' => '%3$s'

) ); ?>
        <a href="#mainMenu" class="site__header-menu-toggle nav-open">&#9776;</a>
        <a href="#0" class="site__header-menu-toggle nav-close">&times;</a>
        </ul>
      </div>
    </header>
    <main role="main" class="main-content-container">
