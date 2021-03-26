<?php
/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function clean_gallery_widgets_init() {

register_sidebar(array(
    'id' => 'header-right',
    'name' => esc_html__( 'Header Right', 'clean-gallery' ),
    'description' => esc_html__( 'Widgets of this sidebar are located on the right-hand side of the site-header.', 'clean-gallery' ),
    'before_widget' => '<div id="%1$s" class="header-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="clean-gallery-widget-title">',
    'after_title' => '</h3>'));

register_sidebar(array(
    'id' => 'main-sidebar',
    'name' => esc_html__( 'Main Sidebar', 'clean-gallery' ),
    'description' => esc_html__( 'Widgets of this sidebar are located at the TOP of your site-sidebar.', 'clean-gallery' ),
    'before_widget' => '<div id="%1$s" class="clean-gallery-side-widget clean-gallery-box widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="clean-gallery-widget-title"><span>',
    'after_title' => '</span></h3>'));

register_sidebar(array(
    'id' => 'left-sidebar',
    'name' => esc_html__( 'Left Sidebar', 'clean-gallery' ),
    'description' => esc_html__( 'Widgets of this sidebar are located on the left-hand side of your site-sidebar.', 'clean-gallery' ),
    'before_widget' => '<div id="%1$s" class="clean-gallery-side-widget clean-gallery-box widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="clean-gallery-widget-title"><span>',
    'after_title' => '</span></h3>'));

register_sidebar(array(
    'id' => 'right-sidebar',
    'name' => esc_html__( 'Right Sidebar', 'clean-gallery' ),
    'description' => esc_html__( 'Widgets of this sidebar are located on the right-hand side of your site-sidebar.', 'clean-gallery' ),
    'before_widget' => '<div id="%1$s" class="clean-gallery-side-widget clean-gallery-box widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="clean-gallery-widget-title"><span>',
    'after_title' => '</span></h3>'));

register_sidebar(array(
    'id' => 'bottom-sidebar',
    'name' => esc_html__( 'Bottom Sidebar', 'clean-gallery' ),
    'description' => esc_html__( 'Widgets of this sidebar are located at the bottom of your site-sidebar.', 'clean-gallery' ),
    'before_widget' => '<div id="%1$s" class="clean-gallery-side-widget clean-gallery-box widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="clean-gallery-widget-title">',
    'after_title' => '</h3>'));

register_sidebar(array(
    'id' => 'top-fullwidth-area',
    'name' => esc_html__( 'Top Full Width Area', 'clean-gallery' ),
    'description' => esc_html__( 'Widgets of this sidebar are located at the bottom of the site-header.', 'clean-gallery' ),
    'before_widget' => '<div id="%1$s" class="clean-gallery-side-widget clean-gallery-box full-width-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="clean-gallery-widget-title">',
    'after_title' => '</h3>'));

register_sidebar(array(
    'id' => 'bottom-fullwidth-area',
    'name' => esc_html__( 'Bottom Full Width Area', 'clean-gallery' ),
    'description' => esc_html__( 'Widgets of this sidebar are located above the site-footer.', 'clean-gallery' ),
    'before_widget' => '<div id="%1$s" class="clean-gallery-side-widget clean-gallery-box full-width-bottom-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="clean-gallery-widget-title">',
    'after_title' => '</h3>'));

register_sidebar(array(
    'id' => 'top-content',
    'name' => esc_html__( 'Top Content', 'clean-gallery' ),
    'description' => esc_html__( 'Widgets of this sidebar are located at the top of the posts/pages.', 'clean-gallery' ),
    'before_widget' => '<div id="%1$s" class="clean-gallery-side-widget clean-gallery-box top-content-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="clean-gallery-widget-title">',
    'after_title' => '</h3>'));

register_sidebar(array(
    'id' => 'bottom-content',
    'name' => esc_html__( 'Bottom Content', 'clean-gallery' ),
    'description' => esc_html__( 'Widgets of this sidebar are located at the bottom of the posts/pages.', 'clean-gallery' ),
    'before_widget' => '<div id="%1$s" class="clean-gallery-side-widget clean-gallery-box bottom-content-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="clean-gallery-widget-title">',
    'after_title' => '</h3>'));

register_sidebar(array(
    'id' => 'top-footer',
    'name' => esc_html__( 'Top Footer', 'clean-gallery' ),
    'description' => esc_html__( 'Widgets of this sidebar are located at the top of the footer.', 'clean-gallery' ),
    'before_widget' => '<div id="%1$s" class="clean-gallery-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="clean-gallery-widget-title">',
    'after_title' => '</h3>'));

register_sidebar(array(
    'id' => 'bottom-footer',
    'name' => esc_html__( 'Bottom Footer', 'clean-gallery' ),
    'description' => esc_html__( 'Widgets of this sidebar are located at the bottom of the footer.', 'clean-gallery' ),
    'before_widget' => '<div id="%1$s" class="clean-gallery-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="clean-gallery-widget-title">',
    'after_title' => '</h3>'));

register_sidebar(array(
    'id' => 'footer-1',
    'name' => esc_html__( 'Footer 1', 'clean-gallery' ),
    'description' => esc_html__( 'Widgets of this sidebar are located on the column 1 in the footer.', 'clean-gallery' ),
    'before_widget' => '<div id="%1$s" class="clean-gallery-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="clean-gallery-widget-title">',
    'after_title' => '</h3>'));

register_sidebar(array(
    'id' => 'footer-2',
    'name' => esc_html__( 'Footer 2', 'clean-gallery' ),
    'description' => esc_html__( 'Widgets of this sidebar are located on the column 2 in the footer.', 'clean-gallery' ),
    'before_widget' => '<div id="%1$s" class="clean-gallery-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="clean-gallery-widget-title">',
    'after_title' => '</h3>'));

register_sidebar(array(
    'id' => 'footer-3',
    'name' => esc_html__( 'Footer 3', 'clean-gallery' ),
    'description' => esc_html__( 'Widgets of this sidebar are located on the column 3 in the footer.', 'clean-gallery' ),
    'before_widget' => '<div id="%1$s" class="clean-gallery-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="clean-gallery-widget-title">',
    'after_title' => '</h3>'));

register_sidebar(array(
    'id' => 'footer-4',
    'name' => esc_html__( 'Footer 4', 'clean-gallery' ),
    'description' => esc_html__( 'Widgets of this sidebar are located on the column 4 in the footer.', 'clean-gallery' ),
    'before_widget' => '<div id="%1$s" class="clean-gallery-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="clean-gallery-widget-title">',
    'after_title' => '</h3>'));

}
add_action( 'widgets_init', 'clean_gallery_widgets_init' );