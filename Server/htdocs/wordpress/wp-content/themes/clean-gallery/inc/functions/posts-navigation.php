<?php
/**
* Posts navigation functions
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'clean_gallery_wp_pagenavi' ) ) :
function clean_gallery_wp_pagenavi() {
    ?>
    <nav class="navigation posts-navigation clearfix" role="navigation">
        <?php wp_pagenavi(); ?>
    </nav><!-- .navigation -->
    <?php
}
endif;


if ( ! function_exists( 'clean_gallery_posts_navigation' ) ) :
function clean_gallery_posts_navigation() {
    if ( function_exists( 'wp_pagenavi' ) ) {
        clean_gallery_wp_pagenavi();
    } else {
        if ( clean_gallery_get_option('posts_navigation_type') === 'normalnavi' ) {
            the_posts_navigation(array('prev_text' => esc_html__( '&larr; Older posts', 'clean-gallery' ), 'next_text' => esc_html__( 'Newer posts &rarr;', 'clean-gallery' )));
        } else {
            the_posts_pagination(array('mid_size' => 2, 'prev_text' => esc_html__( '&larr; Older posts', 'clean-gallery' ), 'next_text' => esc_html__( 'Newer posts &rarr;', 'clean-gallery' )));
        }
    }
}
endif;


if ( ! function_exists( 'clean_gallery_post_navigation' ) ) :
function clean_gallery_post_navigation() {
    if ( !(clean_gallery_get_option('hide_post_navigation')) ) {
        the_post_navigation(array('prev_text' => esc_html__( '&larr; %title', 'clean-gallery' ), 'next_text' => esc_html__( '%title &rarr;', 'clean-gallery' )));
    }
}
endif;