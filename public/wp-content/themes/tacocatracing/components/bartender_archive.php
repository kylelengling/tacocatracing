<section class="c__tending-archive">
  <div class="container">
  <div class="c__tending-container">
    <div class="c__tending-heading">
      <h4 class="c__tending-headline h4">SPOTLIGHT ARCHIVE</h4>
    </div>

    <div class="c__tending-content">
          <div class="c__tending-selector">
            <div class="c__tending-selector-outer">
            <div class="c__tending-selector-wrapper">
              <?php if( have_rows('bartenders') ): ?>
                <?php while( have_rows('bartenders') ): the_row();
                $image = get_sub_field('image');
                $name = get_sub_field('name');
                $tagline = get_sub_field('tagline');
                $link = get_sub_field('url'); ?>
                <div class="c__tender">
                    <a href="<?php echo $link ?>"><img src="<?php echo the_sub_field('image'); ?>" /></a>

                    <div class="c__tender-name"><?php echo $name ?></div>
                    <div class="c__tender-tag"><?php echo $tagline ?></div>

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
</section>
