<?php
  $subheadline = get_sub_field('subheadline');
  $headline = get_sub_field('headline');

  ?>

  <div class="container">
<section class="c__spirits">
  <div class="c__spirits-container">
    <div class="c__spirits-heading">
      <?php if ($subheadline) { ?><h2 class="c__hero-subheadline"><?php echo $subheadline; ?></h2><?php } ?>
      <?php if ($headline) { ?><h1 class="c__spirit-headline"><?php echo $headline; ?></h1><?php } ?>
    </div>

    <div class="c__spirits-content">
          <div class="c__spirits-selector">
            <div class="c__spirits-selector-outer">
            <div class="c__spirits-selector-wrapper">
              <?php if( have_rows('spirits_repeater') ): ?>
                <?php while( have_rows('spirits_repeater') ): the_row();
                $image = get_sub_field('image');
  $name = get_sub_field('name'); ?>
                <div class="c__spirit is-selected">
                    <img src="<?php echo the_sub_field('image'); ?>" />
                    <hr class="c__spirit-border" />

                    <div class="c__spirit-name"><?php echo $name ?></div>
                </div>
                <?php endwhile; ?>
              <?php endif; ?>

              </div>
            </div>
              <div class="controlls">
                <a href="#" class="scrollRight"><div class="arrow-left"><img src="<?php echo get_theme_root_uri().'/tacocatracing/assets/images/arrow-left.png'; ?>" /></div>

                <a href="#" class="scrollLeft"><div class="arrow-right"><img src="<?php echo get_theme_root_uri().'/tacocatracing/assets/images/arrow-right.png'; ?>" /></div></a>
              </div>

          </div>
        </div>
        <div class="c__spirits-body">
          <div class="c__spirits-details-outer">
            <div class="c__spirits-details-container">
              <!-- repeater info -->
              <?php if( have_rows('spirits_repeater') ): ?>
                <?php while( have_rows('spirits_repeater') ): the_row();
                $image = get_sub_field('description_image');
                $name = get_sub_field('name');
      $body = get_sub_field('body');
      $notes = get_sub_field('notes'); ?>
            <div class="c__spirits-details">

                <div class="c__spirits-details-content typography" style="background-image:url(<?php echo $image ?>)">
                  <div class="c__spirits-copy">
                    <h1 class="h1 c__spirit-detail-name"><?php echo $name ?></h1>
                    <?php echo $body ?>
                    <h4 class="h4 c__tasting-notes">Tasting notes:</h4>
                    <em><?php echo $notes ?></em>
                  </div>
                </div>
            </div>
            <?php endwhile; ?>
          <?php endif; ?>
            </div>
          </div>
        </div>
    </div>

</section>
</div>
