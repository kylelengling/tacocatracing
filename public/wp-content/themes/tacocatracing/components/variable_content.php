<?php
  $backgroundImage = get_sub_field('background-image');
  ?>

<section class="c__sliders" style="background-image: url('<?php echo $backgroundImage ?>');">
  <div class="container">
    <div class="c__sliders-selector-container">
      <div class="c__sliders-selector">
        <div class="c__sliders-container"><!-- overflow hidden -->
          <div class="c__sliders-wrapper"> <!-- contains all sliders  -->
            <?php if( have_rows('sliders') ): ?>
              <?php while( have_rows('sliders') ): the_row();
              $image = get_sub_field('image');
    $headline = get_sub_field('headline');
    $body = get_sub_field('body'); ?>
              <div class="c__slider">
                  <div class="c_slider-image">
                    <img src="<?php echo the_sub_field('image'); ?>" />
                  </div>
                  <div class="c_slider-content typography">
                    <h2 class="h2 slider-headline"><?php echo $headline ?></h2>
                    <?php echo $body ?>
                  <a href="<?php the_sub_field('url'); ?>" class="btn btn--slider">Learn More</a>
                  </div>
              </div>
              <?php endwhile; ?>
            <?php endif; ?>

          </div>
      </div>
    </div>
    <div class="controlls">
      <div class="arrow-left"><a href="#" class="scrollRight"><img src="<?php echo get_theme_root_uri().'/tacocatracing/assets/images/arrow-left-home.png'; ?>" /></a></div>
      <div class="arrow-right"><a href="#" class="scrollLeft"><img src="<?php echo get_theme_root_uri().'/tacocatracing/assets/images/arrow-right-home.png'; ?>" /></a></div>
    </div>
</div>
  </div>
</section>
