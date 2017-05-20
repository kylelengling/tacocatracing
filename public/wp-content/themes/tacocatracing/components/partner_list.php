<?php
  $studiosJSON = file_get_contents('studios.json', true);
  $studios = json_decode($studiosJSON, true);
?>

<section class="c__partner-list">
  <div class="container">
    <ul class="c__partner-logo-list">
      <?php
        $i = 0;
        for ($i = 0; $i < count($studios); $i++) {
          if (isset($studios[$i]['logo'])) {
            echo '<li class="c__partner-logo-list-item"><div class="c__partner-logo-list-item-content"><img src="'. get_theme_root_uri().'/tacocatracing/assets/images/studios/'. $studios[$i]['logo'] .'"/></div></li>';
          }
        }
      ?>
    </ul>
    <ul class="c__partner-text-list">
      <?php
        $i = 0;
        for ($i = 0; $i < count($studios); $i++) {
          echo '<li class="c__partner-text-list-item">'. $studios[$i]['partner']. '</li>';
        }
      ?>
    </ul>
    <div class="c__partner-list-btn">
      <button type="button" name="button" class="btn btn--small btn--secondary js-toggle-partner-list">View All</button>
    </div>
  </div>
</section>
