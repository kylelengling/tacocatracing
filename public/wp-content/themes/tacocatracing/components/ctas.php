<?php if (have_rows('ctas')) { ?>
  <div class="c__ctas">
    <?php while (have_rows('ctas')) {
      the_row();
      include(locate_template('components/cta.php'));
    } ?>
  </div>
<?php } ?>
