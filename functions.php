<?php 


if ( ! function_exists ( 'mdbs_setup') ) :

    function mdbs_setup() {
        /* ---- Title Tag Support ---- 
        // let WordPress handle the Titles tags
        add_theme_support( 'title-tag' );*/

        /* ---- Post Featured Image Support ---- */
        add_theme_support( 'post-thumbnails' );
    }
endif;

add_action( 'after_setup_theme', 'mdbs_setup' );

/* ---- Add Stylesheets ---- */
function mdbs_scripts() { 
    // Enqueue Main Stylesheet
    wp_enqueue_style( 'mdbs_styles', get_stylesheet_uri() );
    // Enqueue Google Fonts, Playfair
    wp_enqueue_style( 'mdbs_google_fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display:700,900' );
    /*-- Bootstrap core CSS */
    wp_enqueue_style( 'MDBS', 'https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css' );
    /*  -- Bootstrap core JavaScript
    ================================================== -->
    -- Placed at the end of the document so the pages load faster */
    wp_enqueue_script( 'jQuery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js' );
    wp_enqueue_script( 'Popper', 'https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js' );
    wp_enqueue_script( 'MDBS', 'https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js' );
    wp_enqueue_script( 'Holder', 'https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js' );
}

add_action( 'wp_enqueue_scripts', 'mdbs_scripts' );

/* ---- Register Menus ---- */
function register_mdbs_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'MDBS Primary Menu' ),
            'footer' => __( 'MDBS Footer Menu' )
        )
    );
}
add_action( 'init', 'register_mdbs_menus' );


/* ---- Posts excerpt length control ----
http://www.wpbeginner.com/wp-tutorials/how-to-display-a-read-more-link-in-wordpress-excerpts/
 */
function mdbbs_excerpt_lengths(){
    return 50;
}

// Changing excerpt more
function mdbs_excerpt_more($more) {
    global $post;
    return '… <a href="'. get_permalink($post->ID) . '">' . 'Read More &raquo;' . '</a>';
    }
    add_filter('excerpt_more', 'mdbs_excerpt_more');

function mdbs_init_widgets($id){
    register_sidebar(array(
        'id'    => 'mdbs_sidebar',
        'name'  => 'MDBS Sidebar',
        'description' => 'Default widget for the Material Design Bootstrap Theme',
        'before_title'  => '<h4 class="font-italic">',
        'after_title'   => '</h4>',
        'before_widget' => '<div id="%1$s" class="p-3 %2$s">',
        'after_widget'  => '</div>'     
    ));
}

add_action( 'widgets_init', 'mdbs_init_widgets' );

// Customizer support
require get_template_directory(  ). '/inc/customizer.php';