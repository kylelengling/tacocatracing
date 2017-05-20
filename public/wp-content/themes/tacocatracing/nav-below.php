<?php global $wp_query;
  if ($wp_query->max_num_pages > 1) { ?>
    <nav id="nav-below" class="blog__pagination" role="navigation">
      <div class="blog__pagination-content">
        <?php next_posts_link('<span class="meta-nav-next">&larr;</span>', sprintf(__('%s older', 'tacocatracing'))) ?>
        <?php previous_posts_link(sprintf(__('newer %s', 'tacocatracing'), '<span class="meta-nav-previous">&rarr;</span>')) ?>
      </div>
    </nav>
<?php } ?>
