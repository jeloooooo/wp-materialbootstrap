<?php
/* Main Footer File */

?>
<!-- Dont display on front-page -->
<?php if (!is_front_page()) : ?>
<div class="nav-scroller py-1 mb-2">
            <?php
                wp_nav_menu( $arg = array (
                    'menu_class' => 'nav d-flex justify-content-between',
                    'theme_location' => 'footer'
                ));
            ?>
  </div>
  <?php endif; ?> 
<footer class="blog-footer">

  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>

<script>
  Holder.addTheme('thumb', {
    bg: '#55595c',
    fg: '#eceeef',
    text: 'Thumbnail'
  });
</script>
<!-- Indicate this is the footer part -->
<?php wp_footer(); ?>
</body>
</html>