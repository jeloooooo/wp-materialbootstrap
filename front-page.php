<?php
/* Front Page Template File*/
    get_header();
?>

      <div class="jumbotron p-3 p-md-5 text-white rounded">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic"><?php echo get_theme_mod( 'materialdesign_heading', 'Custom Material Bootstrap Wordpresss Theme - Frontend' )?></h1>
          <p class="lead my-3"><?php echo get_theme_mod( 'materialdesign_heading_desc', 'Multiple lines of text that form the lede, informing new readers quickly and efficiently about whats most interesting in this posts contents.' )?></p>
          <p class="lead mb-0"><a href="<?php echo get_theme_mod( 'materialdesign_link_url', 'http://alpha.local/blog' )?>" class="text-white font-weight-bold"><?php echo get_theme_mod( 'materialdesign_link_text', 'See more...' )?></a></p>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Post title</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
          </div>
        </div>
      </div>
    </div>
      
<?php get_footer(); ?>