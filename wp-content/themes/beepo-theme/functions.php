<?php
/**
 * Theme Functions
 */
//Enqueue Styles and Scripts
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
function beepo_career_scripts() {
    wp_enqueue_style( 'beepo-career-main-style', get_stylesheet_uri() );
    // wp_enqueue_style( 'beepo-careers-ie', get_stylesheet_directory_uri() . "/css/ie.css", array( 'beepo-careers' ) );
    // wp_style_add_data( 'beepo-careers-ie', 'conditional', 'IE' );
    wp_enqueue_style( 'font-awesome-style', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css' );
    wp_enqueue_style( 'linearicons-style', 'https://cdn.linearicons.com/free/1.0.0/icon-font.min.css' );

    // wp_deregister_script( 'jquery' );
    // wp_register_script('jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js',false ,null ,true );
    // wp_enqueue_script('jQuery');
    wp_register_script('bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js','','1.1', true);
    wp_enqueue_script('bootstrap-script');
    wp_register_script('bootstrap-bundle-script', get_template_directory_uri() . '/js/bootstrap.bundle.min.js','','1.1', true);
    wp_enqueue_script('bootstrap-bundle-script');
    wp_register_script('beepo-career-script', get_template_directory_uri() . '/js/beepo-career-script.js','','1.1', true);
    wp_enqueue_script('beepo-career-script');
    wp_script_add_data( 'script', 'async/defer' , true );
}
add_action( 'wp_enqueue_scripts', 'beepo_career_scripts' );

//Add Menus on Beepo Careers
function beepo_career_menus() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Main Menu' ),
            'career-page-featured-jobs' => __( 'Careers Page Featured Jobs' )
            // 'an-extra-menu' => __( 'An Extra Menu' )
        )
    );
}
add_action( 'init', 'beepo_career_menus' );

// Added Class 'nav-item' class on li tag on main menu
function add_classes_on_li($classes, $item, $args) {
    $classes[] = 'nav-item';
    return $classes;
}

// Added 'nav-link' class on A tag on Main Menu
add_filter( 'nav_menu_link_attributes', function($atts) {
    $atts['class'] = "nav-link";
    return $atts;
}, 100, 1 );

add_filter('nav_menu_css_class','add_classes_on_li',1,3);
add_theme_support( 'post-thumbnails' );

require_once(dirname(__FILE__).'/includes/widgets.php');
require_once(dirname(__FILE__).'/includes/role_profiles-post.php');
require_once(dirname(__FILE__).'/includes/theme_options.php');

// MINIFY HTML OUTPUT
// add_action('get_header', 'pt_html_minify_start');
// function pt_html_minify_start()  {
//     ob_start( 'pt_html_minyfy_finish' );
// }

// function pt_html_minyfy_finish( $html )  {
//     $html = preg_replace('/<!--(?!s*(?:[if [^]]+]|!|>))(?:(?!-->).)*-->/s', '', $html);
//     $html = str_replace(array("\r\n", "\r", "\n", "\t"), '', $html);
//     while ( stristr($html, '  '))
//         $html = str_replace('  ', ' ', $html);
//     return $html;
// }

//Get Category Slug name
function get_cat_slug( $id ){
    $term = get_term_by('id', $id, 'yakadanda_jobadder_category', 'ARRAY_A');
    return $term['slug'];       
}

//Get Post Image source set.
function getBeepoCareersFeaturedPostImgNewsAndBlogs($id, $class = '', $title = ''){

    if(has_post_thumbnail($id)){
        return get_the_post_thumbnail( $id, array( 430, 270), array( 'class' => $class )  ); 
    }else{
        return '<img 
                    width="412" 
                    height="270" 
                    src="'.get_template_directory_uri().'/images/beepo-career-default-featured-image-891w.png 891w" 
                    class="'.$class.' wp-post-image" 
                    alt="'.$title.'" 
                    srcset='.get_template_directory_uri().'/images/beepo-career-default-featured-image-1024w.png 1024w, 
                    '.get_template_directory_uri().'/images/beepo-career-default-featured-image-891w.png 891w, 
                    '.get_template_directory_uri().'/images/beepo-career-default-featured-image-891w.png 357w" 
                    sizes="(max-width: 412px) 100vw, 430px">';
    }
}

function getRoleProfilesFeaturedImg($id, $class = ''){
    if(has_post_thumbnail($id)){
        // $url = str_replace('.jpg','-768x512.jpg', wp_get_attachment_url( get_post_thumbnail_id($id), 'post-thumbnail' ));
        $url = get_the_post_thumbnail_url($id, 'large' );
    }else{
        $url = get_template_directory_uri().'/images/home-page/role-profiles-img-placeholder.png';
    }
    return $url;
}

function add_image_class($class){
    $class .= ' img-responsive';
    return $class;
}
add_filter('get_image_tag_class','add_image_class');

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

/* Custom Login Logo and design */
function beepo_custom_login() { 
    ?> 
        <style type="text/css"> 
            body.login div#login h1 a {
                background-image: url('<?php echo get_template_directory_uri(); ?>/images/beepo-logo-icon.png');
                padding-bottom: 30px; 
            } 
            .wp-core-ui .button-primary{
                background: #f8951d !important;
                border-color: #f8951d !important;   
            }
            .wp-core-ui .button-secondary:hover, 
            .wp-core-ui .button.hover, 
            .wp-core-ui .button:hover{
                color: #f8951d !important;
            }
        </style>
    <?php 
} 
add_action( 'login_enqueue_scripts', 'beepo_custom_login' );


function wpse_11826_search_by_title( $search, $wp_query ) {
    if ( ! empty( $search ) && ! empty( $wp_query->query_vars['search_terms'] ) ) {
        global $wpdb;

        $q = $wp_query->query_vars;
        $n = ! empty( $q['exact'] ) ? '' : '%';

        $search = array();

        foreach ( ( array ) $q['search_terms'] as $term )
            $search[] = $wpdb->prepare( "$wpdb->posts.post_title LIKE %s", $n . $wpdb->esc_like( $term ) . $n );

        if ( ! is_user_logged_in() )
            $search[] = "$wpdb->posts.post_password = ''";

        $search = ' AND ' . implode( ' AND ', $search );
    }

    return $search;
}

add_filter( 'posts_search', 'wpse_11826_search_by_title', 10, 2 );