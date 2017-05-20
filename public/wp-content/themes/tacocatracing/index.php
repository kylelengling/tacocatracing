<?php
/*
Template Name: Archive
*/

get_header(); ?>

  <?php $page_id = get_queried_object_id();
  if (have_rows('content', $page_id)) {
    $first = get_field('content');
    if ($first[0]['acf_fc_layout'] !== 'hero') {
      include(locate_template('components/page_header.php'));
    }
    while (have_rows('content', $page_id)) {
      the_row();
      include(locate_template('components/'. get_row_layout() .'.php'));
    }
  } else {
    include(locate_template('components/page_header.php'));
    include(locate_template('components/blog_header.php'));


  } ?>
  <div class="blog">
    <div class="container blog-container archive-container">
        <?php
        global $wp_query;
        $posts = $wp_query->posts;
         ?>

        <?php if (count($posts)) { ?>
          <div class="content content-archive">
            <?php if ( is_archive() ) { ?>
              <h1 class="c__post-archive-headline h1"><?php single_month_title(); ?></h1>
            <?php } ?>
            <?php $i = 0;
            while ($i < count($posts)) {
              the_post($posts[$i]->ID); ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class('blog__post'); ?>>
                <?php if (has_post_thumbnail()) { ?>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><div class="blog__featured-image">
                    <?php the_post_thumbnail('full'); ?>
                  </div>
                </a>
                <?php } ?>

                  <h1 class="blog__post-title">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
                  </h1>
                  <div class="blog__post-date"><?php the_time(get_option('date_format')); ?></div>
                <div class="typography blog__post-content"><?php the_excerpt(); ?></div>

                <!-- ARCHIVE -->
              </article>
          <?php $i++;
        } ?>
      </div>

          <?php get_sidebar();
        } ?>
    </div>
  </div>
<?php get_footer(); ?>
