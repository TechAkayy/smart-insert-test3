<?php
if ( ! function_exists( 'bakersdelight_setup' ) ) :

function bakersdelight_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'bakersdelight', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    //Support custom logo
    add_theme_support( 'custom-logo' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'bakersdelight' ),
        'social'  => __( 'Social Links Menu', 'bakersdelight' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // bakersdelight_setup

add_action( 'after_setup_theme', 'bakersdelight_setup' );


if ( ! function_exists( 'bakersdelight_init' ) ) :

function bakersdelight_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // bakersdelight_setup

add_action( 'init', 'bakersdelight_init' );


if ( ! function_exists( 'bakersdelight_custom_image_sizes_names' ) ) :

function bakersdelight_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'bakersdelight_custom_image_sizes_names' );
endif;// bakersdelight_custom_image_sizes_names



if ( ! function_exists( 'bakersdelight_widgets_init' ) ) :

function bakersdelight_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'bakersdelight_widgets_init' );
endif;// bakersdelight_widgets_init



if ( ! function_exists( 'bakersdelight_customize_register' ) ) :

function bakersdelight_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'bakersdelight_customize_register' );
endif;// bakersdelight_customize_register


if ( ! function_exists( 'bakersdelight_enqueue_scripts' ) ) :
    function bakersdelight_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_register_script( 'inline-script-1', '', [], '1.0.1', false );
    wp_enqueue_script( 'inline-script-1' );
    wp_add_inline_script( 'inline-script-1', '/* Pinegrow Interactions, do not remove */ (function () {
        try {
          if (!document.documentElement.hasAttribute("data-pg-ia-disabled")) {
            window.pgia_small_mq =
              typeof pgia_small_mq == "string"
                ? pgia_small_mq
                : "(max-width:767px)";
            window.pgia_large_mq =
              typeof pgia_large_mq == "string"
                ? pgia_large_mq
                : "(min-width:768px)";
            var style = document.createElement("style");
            var pgcss =
              \'html:not(.pg-ia-no-preview) [data-pg-ia-hide=""] {opacity:0;visibility:hidden;}html:not(.pg-ia-no-preview) [data-pg-ia-show=""] {opacity:1;visibility:visible;display:block;}\';
            if (
              document.documentElement.hasAttribute("data-pg-id") &&
              document.documentElement.hasAttribute("data-pg-mobile")
            ) {
              pgia_small_mq = "(min-width:0)";
              pgia_large_mq = "(min-width:99999px)";
            }
            pgcss +=
              "@media " +
              pgia_small_mq +
              \'{ html:not(.pg-ia-no-preview) [data-pg-ia-hide="mobile"] {opacity:0;visibility:hidden;}html:not(.pg-ia-no-preview) [data-pg-ia-show="mobile"] {opacity:1;visibility:visible;display:block;}}\';
            pgcss +=
              "@media " +
              pgia_large_mq +
              \'{html:not(.pg-ia-no-preview) [data-pg-ia-hide="desktop"] {opacity:0;visibility:hidden;}html:not(.pg-ia-no-preview) [data-pg-ia-show="desktop"] {opacity:1;visibility:visible;display:block;}}\';
            style.innerHTML = pgcss;
            document.querySelector("head").appendChild(style);
          }
        } catch (e) {
          console && console.log(e);
        }
      })();');

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'bakersdelight-tailwind' );
    wp_enqueue_style( 'bakersdelight-tailwind', get_template_directory_uri() . '/tailwind_theme/tailwind.css', [], '1.0.1', 'all');

    wp_deregister_style( 'bakersdelight-style' );
    wp_enqueue_style( 'bakersdelight-style', get_bloginfo('stylesheet_url'), [], '1.0.1', 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'bakersdelight_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
if( !class_exists( 'PG_Helper_v2' ) ) { require_once "inc/wp_pg_helpers.php"; }

    /* Pinegrow generated Include Resources End */

/* Setting up theme supports options */

function bakersdelight_setup_theme_supports() {
    // Don't edit anything between the following comments.
    /* Pinegrow generated Theme Supports Begin */
    
//Enable site editor                    
add_theme_support('block-templates');
add_theme_support('block-template-parts');
    /* Pinegrow generated Theme Supports End */
}
add_action('after_setup_theme', 'bakersdelight_setup_theme_supports');

/* End of setting up theme supports options */


/* Register Blocks Categories */

function bakersdelight_register_blocks_categories( $categories ) {

    // Don't edit anything between the following comments.
    /* Pinegrow generated Register Blocks Category Begin */

$categories = array_merge( $categories, array( array(
        'slug' => 'my_blocks',
        'title' => __( 'My Blocks', 'bakersdelight' )
    ) ) );

    /* Pinegrow generated Register Blocks Category End */
    
    return $categories;
}
add_action( version_compare('5.8', get_bloginfo('version'), '<=' ) ? 'block_categories_all' : 'block_categories', 'bakersdelight_register_blocks_categories');

/* End of registering Blocks Categories */

?>