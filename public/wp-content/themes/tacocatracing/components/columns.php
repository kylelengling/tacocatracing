<?php
  $backgroundColor = get_sub_field('background_color') ? ' bg--'. get_sub_field('background_color') : ' bg--white';
  $textAlignment = get_sub_field('text_alignment') ? ' text--'. get_sub_field('text_alignment') : ' text--left';

?>

<section class="c__columns bg--dark">
  <div class="container">
    <div class="c__columns-header">
      <h1 class="c__columns-headline h1"><?php echo the_sub_field('headline'); ?></h1>
      <?php if (get_sub_field('body')) { ?>
        <div class="c__columns-body typography<?php echo $textAlignment; ?>">
          <?php echo the_sub_field('body'); ?>
        </div>
      <?php } ?>
    </div>
    <?php
    $columnCount = count(get_sub_field('column'));
    if (have_rows('column')) { ?>
      <div class="c__columns-content c__columns--<?php echo $columnCount; ?>">
        <?php while (have_rows('column')) {
          the_row(); ?>
          <div class="c__column">
            <h2 class="c__column-headline h3"><?php the_sub_field('headline'); ?></h2>
            <div class="c__column-body typography"><?php the_sub_field('body'); ?></div>

          </div>
        <?php } ?>
      </div>
    <?php } ?>
    <?php get_template_part('components/ctas'); ?>
  </div>
</section>
