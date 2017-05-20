<?php get_header(); ?>

  <div class="container">
    <div class="content">
      <?php if (have_posts()) { ?>
        <header>
        <h1><?php printf(__('Search Results for: %s', 'tacocatracing'), get_search_query()); ?></h1>
        </header>
        <?php while (have_posts()) {
          the_post();
          get_template_part('entry');
        }
        get_template_part('nav', 'below');
      } else { ?>
        <article id="post-0" class="post no-results not-found">
          <header class="header">
            <h2><?php _e('Nothing Found', 'tacocatracing'); ?></h2>
          </header>
          <section class="entry-content">
            <p><?php _e('Sorry, nothing matched your search. Please try again.', 'tacocatracing'); ?></p>
          </section>
        </article>
      <?php } ?>
    </div>
    <?php get_sidebar(); ?>
  </div>

<?php get_footer(); ?>
