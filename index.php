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
                    <a href="<?php the_permalink(); ?> ">
                      <h2 class="blog-post-title"><?php echo get_the_title(); ?></h2>
                    </a>
                    
                    <p class="blog-post-meta">
                      <!-- get datetime of post -->
                      <?php echo get_post_time( 'F j, Y g:i' ); ?>  by 
                      <!-- get author of post -->
                      <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                        <?php echo the_author(); ?>
                      </a>
                    </p>
                      <?php if(has_post_thumbnail()) : ?>
                        <div class="blog-post-thumb">
                          <?php the_post_thumbnail(); ?>
                        </div>
                      <?php endif; ?>
                      <?php the_excerpt(); ?>
                    </div>
                    <!-- /.blog-post -->
                    <?php endwhile; ?>

                    <nav class="blog-pagination">
                      <a class="btn btn-outline-secondary" href="<?php previous_posts(); ?>">Older</a>
                      <a class="btn btn-outline-primary" href="<?php next_posts(); ?>">Newer</a>                  
                    </nav>

               <?php else : ?> 
                  <p><?php __('No Posts Found'); ?> </p>
               <?php endif; ?> 

        </div><!-- /.blog-main -->

         <!-- display widgets or sidebar.php -->
        <?php get_sidebar(); ?><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

<?php get_footer(); ?>