
  <?php
  $type = get_sub_field('type');

  if ($type === 'vimeo') { ?>

    <iframe class="c__video-iframe" src="https://player.vimeo.com/video/<?php the_sub_field('vimeo_id'); ?>/" height="600" width="900" allowfullscreen="" frameborder="0"></iframe>
    <?php } elseif ($type === 'youtube') { ?>

      <iframe class="c__video-iframe" src="https://www.youtube.com/embed/<?php the_sub_field('youtube_id'); ?>/" height="600" width="900" allowfullscreen="" frameborder="0"></iframe>

      <?php } ?>
