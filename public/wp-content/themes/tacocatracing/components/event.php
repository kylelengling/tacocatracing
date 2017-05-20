


    <div class="c__event-date">
        <div class="c__event-date-content">
        <p class="c__event-day"><?php echo the_sub_field('weekday'); ?></p>
        <h2 class="c__event-number h2"><?php echo the_sub_field('date'); ?></h2>
        <p class="c__event-month"><?php echo the_sub_field('month'); ?></p>
      </div>
    </div>
    <div class="c__event-content">
      <h2 class="c__event-headline h2"><?php echo the_sub_field('headline'); ?></h2>
      <?php if (get_sub_field('subheadline')) ?>
        <div class="c__event-description typography">
          <p><?php echo the_sub_field('subheadline'); ?></p>
          <h4 class="c__event-headline h4"><?php echo the_sub_field('time'); ?></h4>
          <?php echo the_sub_field('body'); ?>

          <div class="c__event-links">
            <a href="<?php echo the_sub_field('facebook_url'); ?>" class="btn btn--small">VIEW FACEBOOK EVENT</a>
            <a href="<?php echo the_sub_field('calendar_url'); ?>" class="btn btn--small">ADD TO CALENDAR</a>
          </div>
        </div>
