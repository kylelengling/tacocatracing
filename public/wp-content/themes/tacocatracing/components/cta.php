<?php
$type = get_sub_field('type');

if ($type === 'ios_app_store') { ?>
  <a href="<?php the_sub_field('ios_app_store_url'); ?>"><img src="<?php echo get_theme_root_uri().'/tacocatracing/assets/images/ios-badge.svg'; ?>" alt="Available on the App Store" /></a>

<?php } elseif ($type === 'google_play_store') { ?>
  <a href="<?php the_sub_field('google_play_store_url'); ?>"><img src="<?php echo get_theme_root_uri().'/tacocatracing/assets/images/google-play-badge.png'; ?>" srcset="<?php echo get_theme_root_uri().'/tacocatracing/assets/images/google-play-badge.png'; ?> 1x, <?php echo get_theme_root_uri().'/tacocatracing/assets/images/google-play-badge@2x.png'; ?> 2x" alt="Get it on Google Play" /></a>

<?php } elseif ($type === 'vimeo') { ?>
  <a href="#" data-remodal-target="videoOverlay" data-vimeo-id="<?php the_sub_field('vimeo_id'); ?>" class="btn btn--video  js-video"><?php the_sub_field('text'); ?></a>

<?php } elseif ($type === 'url') { ?>
  <a href="<?php the_sub_field('url'); ?>" class="btn btn--small"><?php the_sub_field('text'); ?></a>

<?php } elseif ($type === 'page') { ?>
  <a href="<?php the_sub_field('page'); ?>" class="btn btn--small"><?php the_sub_field('text'); ?></a>

<?php } ?>
