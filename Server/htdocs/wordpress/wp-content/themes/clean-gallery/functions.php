<?php
/**
* Clean Gallery functions and definitions.
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

define( 'CLEAN_GALLERY_PROURL', 'https://themesdna.com/clean-gallery-pro-wordpress-theme/' );
define( 'CLEAN_GALLERY_CONTACTURL', 'https://themesdna.com/contact/' );
define( 'CLEAN_GALLERY_THEMEOPTIONSDIR', get_template_directory() . '/inc/admin' );

// Add new constant that returns true if WooCommerce is active
define( 'CLEAN_GALLERY_WOOCOMMERCE_ACTIVE', class_exists( 'WooCommerce' ) );

require_once( CLEAN_GALLERY_THEMEOPTIONSDIR . '/customizer.php' );

function clean_gallery_get_option($option) {
    $clean_gallery_options = get_option('clean_gallery_options');
    if ((is_array($clean_gallery_options)) && (array_key_exists($option, $clean_gallery_options))) {
        return $clean_gallery_options[$option];
    }
    else {
        return '';
    }
}

if ( ! function_exists( 'clean_gallery_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function clean_gallery_setup() {

    global $wp_version;

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Clean Gallery, use a find and replace
     * to change 'clean-gallery' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'clean-gallery', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    add_theme_support( 'post-thumbnails' );

    // Set the default Post Thumbnail size by cropping the image from top left:
    //set_post_thumbnail_size( 198, 198, array( 'top', 'left')  ); // 50 pixels wide by 50 pixels tall, crop from the top left corner
    if ( function_exists( 'add_image_size' ) ) {
        add_image_size( 'clean-gallery-featured-image',  248, 248, true );
        add_image_size( 'clean-gallery-mini-image',  130, 130, true );
        add_image_size( 'clean-gallery-large-image',  769, 9999, false );
        add_image_size( 'clean-gallery-larger-image',  1144, 9999, false );
    }

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
    'primary' => esc_html__('Primary Menu', 'clean-gallery')
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    $markup = array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' );
    add_theme_support( 'html5', $markup );

    add_theme_support( 'custom-logo', array(
        'height'      => 90,
        'width'       => 420,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'clean-gallery-site-title', 'clean-gallery-site-description' ),
    ) );

    // Support for Custom Header
    add_theme_support( 'custom-header', apply_filters( 'clean_gallery_custom_header_args', array(
    'default-image'          => '',
    'default-text-color'     => '333333',
    'width'                  => 1920,
    'flex-width'            => true,
    'height'                 => 500,
    'flex-height'            => true,
    'wp-head-callback'       => 'clean_gallery_header_style',
    'uploads'                => true,
    ) ) );

    // Set up the WordPress core custom background feature.
    $background_args = array(
            'default-color'          => 'eeeeee',
            'default-image'          => '',
            'default-repeat'         => 'repeat',
            'default-position-x'     => 'left',
            'wp-head-callback'       => '_custom_background_cb',
            'admin-head-callback'    => 'admin_head_callback_func',
            'admin-preview-callback' => 'admin_preview_callback_func',
    );
    add_theme_support( 'custom-background', apply_filters( 'clean_gallery_custom_background_args', $background_args) );

    // Support for Custom Editor Style
    add_editor_style( 'css/editor-style.css' );

}
endif;
add_action( 'after_setup_theme', 'clean_gallery_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function clean_gallery_content_width() {
    $content_width = 769;

    if( is_singular() ) {
        if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php', 'template-full-width.php' ) ) ) {
           $content_width = 1144;
        }
    } else {
        if ( is_404() ) {
            $content_width = 1144;
        }
    }

    $GLOBALS['content_width'] = apply_filters( 'clean_gallery_content_width', $content_width ); // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
}
add_action( 'template_redirect', 'clean_gallery_content_width', 0 );


/**
 * Other theme functions
 */
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/enqueue-scripts.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/widgets-init.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/social-buttons.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/post-author-bio-box.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/postmeta.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/posts-navigation.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/menu.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/custom-hooks.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/other.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/custom.php' );