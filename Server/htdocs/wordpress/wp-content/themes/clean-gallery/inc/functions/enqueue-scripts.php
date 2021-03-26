<?php
/**
* Enqueue scripts and styles
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function clean_gallery_scripts() {

    wp_enqueue_style('clean-gallery-maincss', get_stylesheet_uri(), array(), NULL);
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), NULL );
    wp_enqueue_style('clean-gallery-webfont', '//fonts.googleapis.com/css?family=Domine:400,700|Playfair+Display:400,400i,700,700i|Oswald:400,700', array(), NULL);
    wp_enqueue_script('fitvids', get_template_directory_uri() .'/assets/js/jquery.fitvids.min.js', array( 'jquery' ), NULL, true);

    $clean_gallery_primary_menu_active = FALSE;
    if ( !clean_gallery_get_option('disable_primary_menu') ) {
        $clean_gallery_primary_menu_active = TRUE;
    }

    $clean_gallery_backtotop_active = TRUE;

    $clean_gallery_sticky_menu = TRUE;
    $clean_gallery_sticky_mobile_menu = TRUE;
    if ( !clean_gallery_get_option('enable_sticky_mobile_menu') ) {
        $clean_gallery_sticky_mobile_menu = FALSE;
    }

    $clean_gallery_sticky_sidebar_active = TRUE;
    if( is_singular() ) {
        if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php', 'template-full-width.php' ) ) ) {
           $clean_gallery_sticky_sidebar_active = FALSE;
        }
    } else {
        if ( is_404() ) {
            $clean_gallery_sticky_sidebar_active = FALSE;
        }
    }
    if ( $clean_gallery_sticky_sidebar_active ) {
        wp_enqueue_script('ResizeSensor', get_template_directory_uri() .'/assets/js/ResizeSensor.min.js', array( 'jquery' ), NULL, true);
        wp_enqueue_script('theia-sticky-sidebar', get_template_directory_uri() .'/assets/js/theia-sticky-sidebar.min.js', array( 'jquery' ), NULL, true);
    }

    wp_enqueue_script('clean-gallery-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), NULL, true );
    wp_enqueue_script('clean-gallery-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), NULL, true );
    wp_enqueue_script('clean-gallery-customjs', get_template_directory_uri() .'/assets/js/custom.js', array( 'jquery', 'imagesloaded', 'masonry' ), NULL, true);
    wp_localize_script( 'clean-gallery-customjs', 'clean_gallery_ajax_object',
        array(
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'primary_menu_active' => $clean_gallery_primary_menu_active,
            'sticky_menu' => $clean_gallery_sticky_menu,
            'sticky_menu_mobile' => $clean_gallery_sticky_mobile_menu,
            'sticky_sidebar_active' => $clean_gallery_sticky_sidebar_active,
            'backtotop_active' => $clean_gallery_backtotop_active,
        )
    );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'clean_gallery_scripts' );

/**
 * Enqueue IE compatible scripts and styles.
 */
function clean_gallery_ie_scripts() {
    wp_enqueue_script( 'html5shiv', get_template_directory_uri(). '/assets/js/html5shiv.min.js', array(), NULL, false);
    wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

    wp_enqueue_script( 'respond', get_template_directory_uri(). '/assets/js/respond.min.js', array(), NULL, false );
    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'clean_gallery_ie_scripts' );

/**
 * Enqueue customizer styles.
 */
function clean_gallery_enqueue_customizer_styles() {
    wp_enqueue_style( 'clean-gallery-customizer-styles', get_template_directory_uri() . '/inc/admin/css/customizer-styles.css', array(), NULL );
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), NULL );
}
add_action( 'customize_controls_enqueue_scripts', 'clean_gallery_enqueue_customizer_styles' );