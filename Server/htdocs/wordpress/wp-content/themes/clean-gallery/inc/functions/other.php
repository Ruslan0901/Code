<?php
/**
* More Custom Functions
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Get custom-logo URL
function clean_gallery_custom_logo() {
    if ( ! has_custom_logo() ) {return;}
    $clean_gallery_custom_logo_id = get_theme_mod( 'custom_logo' );
    $clean_gallery_logo = wp_get_attachment_image_src( $clean_gallery_custom_logo_id , 'full' );
    return $clean_gallery_logo[0];
}

// Site Title
function clean_gallery_site_title() {
    if ( is_front_page() && is_home() ) { ?>
            <h1 class="clean-gallery-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="clean-gallery-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_home() ) { ?>
            <h1 class="clean-gallery-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="clean-gallery-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_singular() ) { ?>
            <p class="clean-gallery-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="clean-gallery-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_category() ) { ?>
            <p class="clean-gallery-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="clean-gallery-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_tag() ) { ?>
            <p class="clean-gallery-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="clean-gallery-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_author() ) { ?>
            <p class="clean-gallery-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="clean-gallery-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_archive() && !is_category() && !is_tag() && !is_author() ) { ?>
            <p class="clean-gallery-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="clean-gallery-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_search() ) { ?>
            <p class="clean-gallery-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="clean-gallery-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_404() ) { ?>
            <p class="clean-gallery-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="clean-gallery-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } else { ?>
            <h1 class="clean-gallery-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="clean-gallery-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php }
}

// Singular Thumbnail
function clean_gallery_singular_thumbnail() {
    global $post;
    if ( has_post_thumbnail() ) {
        if ( !(clean_gallery_get_option('hide_thumbnail_single')) ) {
            if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php', 'template-full-width.php' ) ) ) { ?>
               <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail('clean-gallery-larger-image', array('class' => 'clean-gallery-single-post-thumbnail', 'title' => the_title_attribute( 'echo=0' ), 'itemprop' => 'image')); ?></a>
            <?php } else { ?>
                <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail('clean-gallery-large-image', array('class' => 'clean-gallery-single-post-thumbnail', 'title' => the_title_attribute( 'echo=0' ), 'itemprop' => 'image')); ?></a>
            <?php }
        }
    }
}

// Category ids in post class
function clean_gallery_category_id_class($classes) {
        global $post;
        foreach((get_the_category($post->ID)) as $category) {
            $classes [] = 'wpcat-' . $category->cat_ID . '-id';
        }
        return $classes;
}
add_filter('post_class', 'clean_gallery_category_id_class');

// Change excerpt length
function clean_gallery_excerpt_length($length) {
    if ( is_admin() ) {
        return $length;
    }
    $read_more_length = 12;
    if ( clean_gallery_get_option('read_more_length') ) {
        $read_more_length = clean_gallery_get_option('read_more_length');
    }
    return $read_more_length;
}
add_filter('excerpt_length', 'clean_gallery_excerpt_length');

// Change excerpt more word
function clean_gallery_excerpt_more() {
       $readmoretext = esc_html__('Read More', 'clean-gallery');
        if ( clean_gallery_get_option('read_more_text') ) {
                $readmoretext = esc_html(clean_gallery_get_option('read_more_text'));
        }
       return $readmoretext;
}

function clean_gallery_footer_grid_cols() {
       $footer_column = 'clean-gallery-footer-4-col';
       return $footer_column;
}

// Adds custom classes to the array of body classes.
function clean_gallery_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'clean-gallery-group-blog';
    }

    if ( get_header_image() ) {
        $classes[] = 'clean-gallery-header-image-active';
    }

    if ( has_custom_logo() ) {
        $classes[] = 'clean-gallery-custom-logo-active';
    }

    if( is_singular() ) {
        if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php', 'template-full-width.php' ) ) ) {
           $classes[] = 'clean-gallery-layout-full-width';
        }
    } else {
        if ( is_404() ) {
            $classes[] = 'clean-gallery-layout-full-width';
        }
    }

    if ( is_404() ) {
        $classes[] = 'clean-gallery-404-page';
    }

    if ( !is_active_sidebar( 'clean-gallery-home-bottom-widgets' ) && !is_active_sidebar( 'clean-gallery-single-bottom-widgets' ) && !is_active_sidebar( 'clean-gallery-singular-bottom-widgets' ) && !is_active_sidebar( 'clean-gallery-bottom-widgets' ) ) {
        $classes[] = 'clean-gallery-no-bottom-widgets';
    }

    return $classes;
}
add_filter( 'body_class', 'clean_gallery_body_classes' );

if ( ! function_exists( 'wp_body_open' ) ) :
    /**
     * Fire the wp_body_open action.
     *
     * Added for backwards compatibility to support pre 5.2.0 WordPress versions.
     */
    function wp_body_open() { // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedFunctionFound
        /**
         * Triggered after the opening <body> tag.
         */
        do_action( 'wp_body_open' ); // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedHooknameFound
    }
endif;


// Fix for empty widgets titles
function clean_gallery_widget_title($title){
    if( empty( $title ) ) {
        return ' ';
    } else {
        return $title;
    }
}
//add_filter('widget_title', 'clean_gallery_widget_title');