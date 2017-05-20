<?php
  $headline = get_sub_field('headline_1');
  $headlineRowTwo = get_sub_field('headline_2');
  $subheadline = get_sub_field('subheadline');
  $footer = get_sub_field('footer');
  $backgroundVideos = get_sub_field('background_video_files');
?>

<section class="c__hero">

   <div class="c__hero-bg">


      <div class="c__hero-bg-item" style="background-image: url(<?php the_sub_field('image'); ?>); background-position: <?php the_sub_field('position'); ?>">
        <?php if ($backgroundVideos) {  ?>
          <video autoplay loop muted class="bg-video" poster="<?php the_sub_field('image'); ?>">
            <source src="<?php echo $backgroundVideos[0]['webm'] ?>" type="video/webm">
            <source src="<?php echo $backgroundVideos[0]['mp4'] ?>" type="video/mp4">
          </video>
          <div class="bg-overlay"></div>
        <?php } ?>
        <div class="c__hero-bg-item-title"><?php the_sub_field('title'); ?></div>
      </div>

</div>

  <div class="container">
    <div class="c__hero-content">
      <?php if ($subheadline) { ?><h2 class="c__hero-subheadline"><?php echo $subheadline; ?></h2><?php } ?>
      <?php if ($headline) { ?><h1 class="c__hero-headline"><?php echo $headline; ?></h1><?php } ?>
      <?php if ($headlineRowTwo) { ?><h1 class="c__hero-headline-2"><?php echo $headlineRowTwo; ?></h1><?php } ?>
      <?php get_template_part('components/homepage_icon'); ?>
      <?php get_template_part('components/ctas'); ?>
      <?php if ($footer) { ?><div class="c__hero-footer typography"><?php echo $footer; ?></div><?php } ?>
    </div>
  </div>
</section>
