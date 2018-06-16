<?php
/* Main Template File*/
    get_header();
?>

    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">

    </div>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">

             <!-- Start the loop -->
             <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <!-- start the display of blog posts -->
                    <div class="blog-post">
                    <h2 class="blog-post-title"><?php echo get_the_title(); ?></h2>
                    <br>
                    
                      <?php the_content(); ?>
                    </div>
                    <!-- /.blog-post -->
                    <?php endwhile; ?>

               <?php else : ?> 
                  <p><?php __('No Page Found'); ?> </p>
               <?php endif; ?> 

        </div><!-- /.blog-main -->

        <!-- display widgets or sidebar.php -->
        <?php get_sidebar(); ?><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

<?php get_footer(); ?>