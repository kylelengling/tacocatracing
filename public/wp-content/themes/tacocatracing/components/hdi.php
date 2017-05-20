<?php
  $backgroundColor = get_sub_field('background_color') ? ' bg--'. get_sub_field('background_color') : ' bg--white';
  $location = get_sub_field('image_location') ? ' image--'. get_sub_field('image_location') : '';
  $imageOverlap = get_sub_field('image_overlap') ? ' image--overlap' : ' image--normal';
?>

<section class="c__hdi<?php echo $backgroundColor. $location. $imageOverlap; ?>">
  <div class="c__hdi-container">
    <div class="c__hdi-content">
      <h1 class="c__hdi-headline h1"><?php echo the_sub_field('headline'); ?></h1>
      <?php if (get_sub_field('description')) { ?>
        <div class="c__hdi-description typography">
          <?php echo the_sub_field('description'); ?>
        </div>
      <?php } ?>
      <?php get_template_part('components/ctas'); ?>
      <?php if (get_sub_field('footer')) { ?>
        <div class="c__hdi-footer typography">
          <?php echo the_sub_field('footer'); ?>
        </div>
      <?php } ?>
    </div>
    
    <?php if (get_sub_field('image')) { ?>
      <div class="c__hdi-image">
        <img src="<?php echo the_sub_field('image'); ?>" alt="" />
      </div>
    <?php } ?>
  </div>
</section>
