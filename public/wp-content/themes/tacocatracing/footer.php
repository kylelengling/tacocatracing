    </main>
    <footer class="site__footer" role="contentinfo">
          <div class="container">
              <div class="site__footer-content">
                <div class="site__footer-column"> <!--left column -->
                  <img class="site__footer-logo" src="<?php echo get_theme_root_uri().'/tacocatracing/assets/images/tacocatracing-Logo-Compact-REV.png'; ?>" alt="" />
                  <div class="footer-nav">
                    <?php wp_nav_menu( array(
              'menu'           => 'footer', // Do not fall back to first non-empty menu.
              'container' => 'footer-menu',

          ) ); ?>
                  </div>
                  <ul class="social">
                    <li class="social-icon-list">
                      <a href="https://www.instagram.com/tacocatracingdistilling/" target="_blank" class=" icon-instagram" title="Instagram">
                        <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 385.944 385.413"><defs><path id="a" d="M0 0h385.944v385.413H0z"/></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"/></clipPath><path clip-path="url(#b)" fill-rule="evenodd" clip-rule="evenodd" d="M385.66 290.334V91.557c0-33.808 3.184-66.318-15.753-81.012-18.91-14.672-62.99-9.752-96.015-9.75H39.862C23.54 8.437 11.453 11.068 4.605 27.797c-7.2 17.586-3 50.757-3 73.51V262.58c0 26.486-5.152 75.253 3 95.264 11.968 29.378 43.91 27.004 85.512 27.003h191.276c31.506 0 70.634 4.096 88.514-9.75 19.474-15.083 15.752-50.127 15.75-84.763M122.373 171.818c10.532-35.28 29.744-39.064 61.51-52.508 104.882-1.516 109.004 131.207 19.502 147.02-51.523 9.104-96.128-43.875-81.012-94.512m213.78 165.773c-10.415 7.83-44.418 3-60.76 3h-161.27c-17.353 0-57.403 5.203-65.26-5.25-6.372-8.477-3-33.526-3-47.256V163.567h33.004c-7.485 65.655 12.01 106.32 55.508 132.018 70.427 41.608 147.974-3.953 170.273-60.758 8.324-21.206 6.572-47.077 3.75-71.26h33.006v129.018c0 14.367 3.197 38.655-5.25 45.006m-1.5-220.53c-13.196 3.44-57.985 5.59-64.51-3.75-4.648-6.653-2.25-24.752-2.25-35.255 0-7.687-1.42-19.567 1.5-24.754 2.173-4.687 5.538-5.66 9.75-8.25 14.85-.33 43.275-4.295 54.76 1.5 14.81 7.476 8.32 60.702.75 70.51"/></svg>                      </a>
                    </li>
                    <li class="social-icon-list">
                      <a href="https://www.facebook.com/tacocatracingdistilling" target="_blank" class=" icon-instagram" title="Instagram">
                        <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300"><path d="M121.35 294.947V154.062H74.9v-48.537h46.45V52.81C121.35 21.217 149.993 0 173.103 0H225.1v44.158h-23.986c-11.82 0-27.578 9.596-27.578 21.395v39.972h46.85v48.537h-46.85v140.886H121.35z"/></svg>
                       </a>
                    </li>
                    <li class="social-icon-list">
                      <a href="https://twitter.com/tacocatracingco" target="_blank" class=" icon-instagram" title="Instagram">
                        <svg class="social-icon" id="instagram" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300"><path d="M250.564 98.42c.1 2.228.15 4.466.15 6.715 0 68.568-52.19 147.632-147.63 147.632-29.304 0-56.578-8.592-79.54-23.314 4.06.48 8.19.727 12.378.727 24.31 0 46.684-8.295 64.44-22.213-22.704-.416-41.867-15.42-48.47-36.033 3.17.605 6.42.932 9.763.932 4.73 0 9.315-.635 13.67-1.82-23.736-4.768-41.623-25.74-41.623-50.878 0-.22 0-.437.005-.653 6.995 3.888 14.997 6.222 23.502 6.49-13.925-9.305-23.084-25.188-23.084-43.188 0-9.51 2.56-18.423 7.025-26.085 25.593 31.392 63.826 52.05 106.95 54.213-.886-3.798-1.344-7.758-1.344-11.824 0-28.654 23.232-51.886 51.887-51.886 14.924 0 28.41 6.3 37.873 16.385 11.82-2.327 22.924-6.646 32.95-12.592-3.874 12.117-12.1 22.285-22.813 28.707 10.496-1.254 20.496-4.044 29.8-8.17-6.953 10.402-15.75 19.54-25.89 26.856z"/></svg>
                      </a>
                    </li>
                    <li class="social-icon-list">
                      <a href="https://vimeo.com/tacocatracingco" target="_blank" class="icon-instagram" title="Instagram">
                        <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 134 134"><defs><path id="a" d="M1.04 10.114h131.92v113.77H1.04z"/></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"/></clipPath><path clip-path="url(#b)" fill-rule="evenodd" clip-rule="evenodd" d="M132.396 31.286c.985-5.524.964-11.204-2.448-15.5-4.76-6.022-14.89-6.244-21.83-5.18-5.646.863-24.743 9.288-31.24 29.46 11.512-.876 17.546.83 16.437 13.506-.465 5.302-3.143 11.115-6.133 16.683-3.455 6.42-9.93 19.03-18.42 9.942-7.65-8.18-7.077-23.824-8.825-34.242-.974-5.846-2.003-13.13-3.92-19.142-1.65-5.17-5.435-11.403-10.063-12.753-4.97-1.46-11.116.82-14.724 2.946-11.49 6.752-20.25 16.36-30.188 24.288v.742c1.97 1.882 2.5 4.97 5.402 5.39 6.842 1.01 13.362-6.375 17.913 1.308 2.767 4.693 3.63 9.842 5.402 14.902 2.368 6.742 4.196 14.082 6.133 21.833 3.276 13.127 7.306 32.745 18.654 37.55 5.79 2.457 14.492-.83 18.898-3.444 11.934-7.062 21.234-17.303 29.194-27.72 18.198-24.656 28.242-52.588 29.756-60.57"/></svg>
                      </a>
                    </li>
            </ul>
                </div>
                <div class="site__footer-column footer-right"> <!-- right column -->
                      <h5 class="h5 site__footer-heading">Visit Us</h5>
                      <p class="p">1620 Central Ave NE Ste 150</p>
                      <p class="p">Minneapolis, MN 55413</p>
                      <h5 class="h5 site__footer-heading">Call Us</h5>
                      <p class="p">612.584.4152</p>
                      <h5 class="h5 site__footer-heading">Email Us</h5>
                      <p class="p"><a href="mailto:info@tacocatracingdistilling.com">info@tacocatracingdistilling.com</a></p>
                </div>
              </div>
          </div>
        </div>
        <div class="site__footer-map js-map">
        </div>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlydvLOr6U9zuc3Hb9BFp0yaKNGwTomJ0&callback=initMap" async defer></script>


    </footer>
    <!-- <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-73643302-1');ga('send','pageview');
    </script> -->
    <?php wp_footer(); ?>
  </body>
</html>
