<?php get_header(); ?>

<?php if (have_posts()) {
  while (have_posts()) {
    the_post();
    include(locate_template('components/page_header.php'));
    include(locate_template('components/blog_header.php')); ?>
    <div class="blog">
      <div class="container blog-container">
        <div class="content single">
            <?php get_template_part('entry'); ?>
            <?php get_template_part('nav', 'below-single'); ?>

        </div>

        <?php get_sidebar(); ?>
      </div>
    </div>
  <?php }
} ?>

<?php get_footer(); ?>
