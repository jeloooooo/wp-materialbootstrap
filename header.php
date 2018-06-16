<?php
 /*  Main Header Template */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

     <!-- Handles the window titles -->
    <title>
    <?php bloginfo('name'); ?> |
    <?php is_front_page() ? bloginfo('description') : wp_title(''); ?> 
    </title>

    <!-- Indicate this is the header part -->
    <?php wp_head(); ?>
    <style>
      .jumbotron{
        background:url(<?php echo get_theme_mod( 'materialdesign_image', get_bloginfo( 'template_directory'). '/img/bg.jpg' ); ?>) no-repeat center center;
      }
    </style>
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="#">Subscribe</a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#"><?php echo get_bloginfo( 'name' ); ?></a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
            <?php
                wp_nav_menu( $arg = array (
                    'menu_class' => 'nav d-flex justify-content-between',
                    'theme_location' => 'primary'
                ));
            ?>
      </div>