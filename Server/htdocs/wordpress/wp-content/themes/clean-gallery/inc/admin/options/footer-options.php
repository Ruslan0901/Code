<?php
/**
* Footer options
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function clean_gallery_footer_options($wp_customize) {

    $wp_customize->add_section( 'clean_gallery_section_footer', array( 'title' => esc_html__( 'Footer', 'clean-gallery' ), 'panel' => 'clean_gallery_main_options_panel', 'priority' => 440 ) );

    $wp_customize->add_setting( 'clean_gallery_options[hide_footer_widgets]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'clean_gallery_sanitize_checkbox', ) );

    $wp_customize->add_control( 'clean_gallery_hide_footer_widgets_control', array( 'label' => esc_html__( 'Hide Footer Widgets', 'clean-gallery' ), 'section' => 'clean_gallery_section_footer', 'settings' => 'clean_gallery_options[hide_footer_widgets]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'clean_gallery_options[footer_text]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'clean_gallery_sanitize_html', ) );

    $wp_customize->add_control( 'clean_gallery_footer_text_control', array( 'label' => esc_html__( 'Footer copyright notice', 'clean-gallery' ), 'section' => 'clean_gallery_section_footer', 'settings' => 'clean_gallery_options[footer_text]', 'type' => 'text', ) );

}