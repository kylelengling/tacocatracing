<?php
  $type = get_sub_field('type');

  ?>

<div class="container">
<section class="c__recipes">
  <div class="c__recipes-container">
    <div class="c__recipes-heading typography">
      <h1 class="c__recipes-headline h1"><?php echo the_sub_field('headline'); ?></h1>
      <?php echo the_sub_field('heading_copy'); ?>
    </div>

    <div class="c__recipes-content">

      <?php if( have_rows('liquor') ): ?>
        <div class="c__liquor-types">
          <ul class="c__liquor-list">
        <?php while( have_rows('liquor') ): the_row();
        $name = get_sub_field('name'); ?>
          <a href="#" class="c__liquor-link"><li class="c__liquor-type"><?php echo $name ?></li></a>
      <?php endwhile; ?>
          </ul>
        </div>
      <?php endif; ?>


  <?php if( have_rows('liquor') ): ?>
    <?php while( have_rows('liquor') ): the_row(); ?>
      <div class="c__liquor-recipes-container is-selected">


      <?php if( have_rows('recipe') ): ?>
        <div class="c__liquor-recipes">
          <ul class="c__liquor-recipes-list">
        <?php while( have_rows('recipe') ): the_row();
        $name = get_sub_field('name'); ?>
          <a href="#" class="c__liquor-recipe-link"><li class="c__liquor-recipe"><?php echo $name ?></li></a>


        <?php endwhile; ?>
      </ul></div>
        <?php endif; ?>


      <?php if( have_rows('recipe') ): ?>
        <div class="c__recipes-details-container">
        <?php while( have_rows('recipe') ): the_row();
        $name = get_sub_field('name');
        $image = get_sub_field('image');
        $instructions = get_sub_field('instructions');?>
        <div class="c__recipes-details typography">
          <div class="c__recipes-instructions">
            <h1 class="c__recipe-name h1"><?php echo $name ?></h1>
            <?php echo $instructions ?>
          </div>
          <div class="c__recipe-image">
            <img src="<?php echo $image ?>" />
          </div>
        </div>
      <?php endwhile; ?>
    </div>
      <?php endif; ?>
</div>
<?php endwhile; ?>

<?php endif; ?>
<div class="controlls">
  <a href="#" class="scrollRight"><div class="arrow-left"><img src="<?php echo get_theme_root_uri().'/tacocatracing/assets/images/arrow-left.png'; ?>" /></div>
  <a href="#" class="scrollLeft"><div class="arrow-right"><img src="<?php echo get_theme_root_uri().'/tacocatracing/assets/images/arrow-right.png'; ?>" /></div></a>
</div>
    </div>

</section>
</div>
