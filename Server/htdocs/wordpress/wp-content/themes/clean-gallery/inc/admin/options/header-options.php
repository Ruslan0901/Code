<?php
/**
* Header options
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function clean_gallery_header_options($wp_customize) {

    $wp_customize->add_section( 'clean_gallery_section_header', array( 'title' => esc_html__( 'Header', 'clean-gallery' ), 'panel' => 'clean_gallery_main_options_panel', 'priority' => 400 ) );

    $wp_customize->add_setting( 'clean_gallery_options[hide_header_content]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'clean_gallery_sanitize_checkbox', ) );

    $wp_customize->add_control( 'clean_gallery_hide_header_content_control', array( 'label' => esc_html__( 'Hide Header Content', 'clean-gallery' ), 'section' => 'clean_gallery_section_header', 'settings' => 'clean_gallery_options[hide_header_content]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'clean_gallery_options[hide_header_image_title]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'clean_gallery_sanitize_checkbox', ) );

    $wp_customize->add_control( 'clean_gallery_hide_header_image_title_control', array( 'label' => esc_html__( 'Hide Site Title and Description from Header Image', 'clean-gallery' ), 'section' => 'header_image', 'settings' => 'clean_gallery_options[hide_header_image_title]', 'type' => 'checkbox', ) );

}