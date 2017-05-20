 <?php
//subfield variables here

 ?>

 <section class="c__squares">
      <div class="container">
        <?php

        if (have_rows('sq_columns')) { ?>
          <div class="c__squares-content">
            <?php
             while (have_rows('sq_columns')) {
              the_row();
              $pageLink = get_sub_field('page_link');
              $backgroundImage = get_sub_field('background_image');  ?>
              <div class="c__sq-column">
                <a class="c__column-link" href="<?php echo $pageLink; ?>">
                  <div class="c__column-link-bg" style="background-image:url(<?php the_sub_field('background_image'); ?>)"></div>
                  <h2 class="c__column-headline"><?php the_sub_field('title'); ?></h2>
                </a>
              </div>
            <?php } ?>
          </div>
        <?php } ?>
      </div>
 </section>
