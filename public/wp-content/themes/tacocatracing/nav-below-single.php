<nav id="nav-below" class="blog__pagination" role="navigation">
  <div class="blog__share">  <ul class="social">
    <li class="social-icon-list list-share">
      <h5 class="h5">Share</h5>
    </li>
      <li class="social-icon-list">
        <a href="http://www.facebook.com/sharer/sharer.php?u=<?php print(urlencode(get_permalink())); ?>&title=<?php print(urlencode(the_title())); ?>" target="_blank" class=" icon-instagram" title="Instagram">
          <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300"><path d="M121.35 294.947V154.062H74.9v-48.537h46.45V52.81C121.35 21.217 149.993 0 173.103 0H225.1v44.158h-23.986c-11.82 0-27.578 9.596-27.578 21.395v39.972h46.85v48.537h-46.85v140.886H121.35z"/></svg>
         </a>
      </li>
      <li class="social-icon-list">
        <a href="http://twitter.com/intent/tweet?status=<?php print(urlencode(the_title())); ?>
+<?php print(urlencode(get_permalink())); ?>" target="_blank" class=" icon-instagram" title="Instagram">
          <svg class="social-icon" id="instagram" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300"><path d="M250.564 98.42c.1 2.228.15 4.466.15 6.715 0 68.568-52.19 147.632-147.63 147.632-29.304 0-56.578-8.592-79.54-23.314 4.06.48 8.19.727 12.378.727 24.31 0 46.684-8.295 64.44-22.213-22.704-.416-41.867-15.42-48.47-36.033 3.17.605 6.42.932 9.763.932 4.73 0 9.315-.635 13.67-1.82-23.736-4.768-41.623-25.74-41.623-50.878 0-.22 0-.437.005-.653 6.995 3.888 14.997 6.222 23.502 6.49-13.925-9.305-23.084-25.188-23.084-43.188 0-9.51 2.56-18.423 7.025-26.085 25.593 31.392 63.826 52.05 106.95 54.213-.886-3.798-1.344-7.758-1.344-11.824 0-28.654 23.232-51.886 51.887-51.886 14.924 0 28.41 6.3 37.873 16.385 11.82-2.327 22.924-6.646 32.95-12.592-3.874 12.117-12.1 22.285-22.813 28.707 10.496-1.254 20.496-4.044 29.8-8.17-6.953 10.402-15.75 19.54-25.89 26.856z"/></svg>
        </a>
      </li>
</ul></div>
  <div class="blog__pagination-content">
    <?php previous_post_link('%link', 'Previous'); ?>
    <?php next_post_link('%link', 'Next'); ?>
  </div>
</nav>
