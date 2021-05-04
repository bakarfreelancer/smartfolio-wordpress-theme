<?php
/**
 * This is functions
 */
function sf_theme_setup(){
  add_theme_support( 'custom-logo');
  add_theme_support('title-tag');
  add_theme_support( 'post-thumbnails');
  add_theme_support( 'automatic-feed-links');
  add_image_size( 'post-featured-full', 600, 400, array('center', 'center') );
  add_image_size( 'img255by170', 255, 170, array('center', 'center') );
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      )
    );
}

add_action('after_setup_theme', 'sf_theme_setup');

function sf_theme_scripts(){
  wp_enqueue_style('animate-css', get_template_directory_uri(  )."/assets/css/animate.css" );
  wp_enqueue_style('owel-carousel-css', get_template_directory_uri(  )."/assets/css/owl.carousel.min.css" );
  wp_enqueue_style('owel-carousel-default-css', get_template_directory_uri(  )."/assets/css/owl.theme.default.min.css" );
  wp_enqueue_style('magnific-popup-css', get_template_directory_uri(  )."/assets/css/magnific-popup.css" );
  wp_enqueue_style('main-css', get_template_directory_uri(  )."/assets/css/style.css" );
  wp_enqueue_style('fontawesome-css', get_template_directory_uri(  )."/assets/css/fontawesome/css/all.min.css" );
  wp_enqueue_style('style', get_stylesheet_uri(  ) );

//  wp_enqueue_script( 'jquery');
  wp_enqueue_script( 'jquery-js', get_template_directory_uri(  )."/assets/js/jquery.min.js");
  wp_enqueue_script( 'medornizer-js', get_template_directory_uri(  )."/assets/js/modernizr-2.6.2.min.js");
  wp_enqueue_script( 'easing-js', get_template_directory_uri(  )."/assets/js/jquery.easing.1.3.js");
  wp_enqueue_script( 'bootstrap-js', "https://kit.fontawesome.com/93ea02073a.js");
  wp_enqueue_script( 'waypoints-js', get_template_directory_uri(  )."/assets/js/jquery.waypoints.min.js");
  wp_enqueue_script( 'stellar-js', get_template_directory_uri(  )."/assets/js/jquery.stellar.min.js");
  wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri(  )."/assets/js/owl.carousel.min.js");
  wp_enqueue_script( 'jquery.magnific-popup-js', get_template_directory_uri(  )."/assets/js/jquery.magnific-popup.min.js");
  wp_enqueue_script( 'theme-main-js', get_template_directory_uri(  )."/assets/js/main.js");
  wp_enqueue_script( 'main-js', get_template_directory_uri(  )."/js/main.js");
}
add_action( 'wp_enqueue_scripts', 'sf_theme_scripts');

//  SIDE BAR ADDING
function sf_widgets_init(){
  register_sidebar( array(
    'name'          => __('Primary Sidebar', 'theme_name'),
    'id'            => 'main-sidebar',
    'description'   => 'Main sidebar on Right Side',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h5 class"widget-title">',
    'after_title'   => '</h5>',
  ) );

  register_sidebar( array(
    'name'          => __('Footer Widget One', 'theme_name'),
    'id'            => 'footer-widget-one',
    'before_widget' => '<div id="%1$s" class="footer-widget fh5co-footer-widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="fh5co-footer-logo">',
    'after_title'   => '</h2>',
  ) );

  register_sidebar( array(
    'name'          => __('Footer Widget Two', 'theme_name'),
    'id'            => 'footer-widget-two',
    'description'   => 'Footer Two',
    'before_widget' => '<div id="%1$s" class="footer-widget fh5co-footer-widget top-level %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="fh5co-footer-lead ">',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => __('Footer Widget Three', 'theme_name'),
    'id'            => 'footer-widget-three',
    'description'   => 'Footer Three',
    'before_widget' => '<div id="%1$s" class="footer-widget fh5co-footer-widget top-level %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="fh5co-footer-lead ">',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => __('Footer Widget Four', 'theme_name'),
    'id'            => 'footer-widget-four',
    'description'   => 'Footer Four',
    'before_widget' => '<div id="%1$s" class="footer-widget fh5co-footer-widget top-level %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="fh5co-footer-lead ">',
    'after_title'   => '</h4>',
  ) );
  
}

add_action( 'widgets_init', 'sf_widgets_init' );

// Custom post type pagination function 
	
function cpt_pagination($pages = '', $range = 4){

  $showitems = ($range * 2)+1;
  global $paged;
  if(empty($paged)) $paged = 1;
  if($pages == ''){
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if(!$pages){
      $pages = 1;
    }
  }

  if(1 != $pages){
    echo "<nav aria-label='Page navigation'>  <ul class='pagination'>";
    if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
    if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
    for ($i=1; $i <= $pages; $i++){
      if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
        echo ($paged == $i)? "<li class=\"page-item active\"><a class='page-link'>".$i."</a></li>":"<li class='page-item'> <a href='".get_pagenum_link($i)."' class=\"page-link\">".$i."</a></li>";
      }
    }
    if ($paged < $pages && $showitems < $pages) echo " <li class='page-item'><a class='page-link' href=\"".get_pagenum_link($paged + 1)."\">i class='flaticon flaticon-back'></i></a></li>";
    if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo " <li class='page-item'><a class='page-link' href='".get_pagenum_link($pages)."'><i class='flaticon flaticon-arrow'></i></a></li>";
    echo "</ul></nav>\n";
  }
}

// Installing Recommended and required plugins
require get_template_directory().'/inc/plugins/kirki/kirki.php';
include get_template_directory().'/inc/kirki-customizer.php';

// custom post type project
include get_template_directory().'/inc/projects.php';
include get_template_directory().'/inc/services.php';

// custom widgets
include get_template_directory().'/inc/custom-widgets.php';
