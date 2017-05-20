<article id="post-<?php the_ID(); ?>" <?php post_class('blog__post'); ?>>
  <?php if (has_post_thumbnail()) { ?>
    <div class="blog__featured-image">
      <?php the_post_thumbnail('full'); ?>
    </div>
  <?php } ?>
  <h1 class="blog__post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
  <div class="blog__post-date"><?php the_time(get_option('date_format')); ?></div>

  <div class="blog__post-content typography">
    <?php get_template_part('entry', (is_home() || is_archive() || is_search() ? 'summary' : 'content' )); ?>
  </div>
  <?php if (!is_search()) {
    get_template_part('entry-footer');
  } ?>
</article>
