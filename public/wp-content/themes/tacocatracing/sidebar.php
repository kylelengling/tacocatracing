<aside class="sidebar" id="sidebar" role="complementary">
  <ul>
    <li class="widget-container">
      <h3 class="widget-title">Popular Posts</h3>
      <?php $recent_posts = wp_get_recent_posts();
      if (count($recent_posts)) { ?>
        <ul>
          <?php foreach($recent_posts as $recent) {
            if ($recent['post_status'] === 'publish') {?>
              <li class="widget__recent-post">
                <a class="post-sidebar-link" href="<?php echo get_permalink($recent['ID']); ?>" title="<?php echo esc_attr($recent['post_title']); ?>">
                  <div class="post-sidebar-image"><?php echo get_the_post_thumbnail($recent['ID']); ?></div>
                  <div class="post-sidebar-title"><?php echo $recent['post_title']; ?></div>
                </a>
              </li>
            <?php }
          } ?>
        </ul>
      <?php } ?>
		</li>
    <?php dynamic_sidebar('primary-widget-area'); ?>
  </ul>
  <ul>
    <ul>
      <li class="widget-container">
        <h3 class="widget-title">ARCHIVES</h3>

          <ul class="posts-archive">
            <?php wp_get_archives( array( 'type' => 'monthly', 'show_post_count' => 'true' ) ); ?>
          </ul>
  		</li>

    </ul>
    <ul>

</aside>
