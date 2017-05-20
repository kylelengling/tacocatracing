<?php
  add_filter('the_title', 'tacocatracing_title');
  add_filter('wp_title', 'tacocatracing_filter_wp_title');
  add_filter('next_posts_link_attributes', 'next_links_attributes');
  add_filter('previous_posts_link_attributes', 'previous_links_attributes');

  add_filter('next_post_link', 'next_link_attributes');
  add_filter('previous_post_link', 'previous_link_attributes');




  function tacocatracing_title($title) {
    if ($title == '') {
      return '&rarr;';
    } else {
      return $title;
    }
  }

  function tacocatracing_filter_wp_title($title) {
    return $title . esc_attr(get_bloginfo('name'));
  }

  function next_links_attributes() {
    return 'class="blog__pagination-next"';
  }
  function previous_links_attributes() {
    return 'class="blog__pagination-previous"';
  }

  function next_link_attributes($output) {
    $code = 'class="blog__pagination-next"';
    return str_replace('<a href=', '<a '.$code.' href=', $output);
  }
  function previous_link_attributes($output) {
    $code = 'class="blog__pagination-previous"';
    return str_replace('<a href=', '<a '.$code.' href=', $output);
  }

  function custom_excerpt_length( $length ) {
  	return 35;
  }
  add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
