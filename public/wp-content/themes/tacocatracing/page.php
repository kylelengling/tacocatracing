<?php
/* Template Name: Page

*/
?>

<?php
  get_header();

  if (have_rows('content')) {
    $first = get_field('content');
    if ($first[0]['acf_fc_layout'] !== 'hero') {
      include(locate_template('components/page_header.php'));
    }
    while (have_rows('content')) {
      the_row();
      include(locate_template('components/'. get_row_layout() .'.php'));
    }
  } else {
    include(locate_template('components/page_header.php'));
  }

  get_footer();
?>
