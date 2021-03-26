<?php
/**
* Other options
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function clean_gallery_other_options($wp_customize) {

    $wp_customize->add_section( 'clean_gallery_section_other_options', array( 'title' => esc_html__( 'Other Options', 'clean-gallery' ), 'panel' => 'clean_gallery_main_options_panel', 'priority' => 560 ) );

    $wp_customize->add_setting( 'clean_gallery_options[enable_sticky_mobile_menu]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'clean_gallery_sanitize_checkbox', ) );

    $wp_customize->add_control( 'clean_gallery_enable_sticky_mobile_menu_control', array( 'label' => esc_html__( 'Enable Sticky Menu on Small Screen', 'clean-gallery' ), 'section' => 'clean_gallery_section_other_options', 'settings' => 'clean_gallery_options[enable_sticky_mobile_menu]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'clean_gallery_options[disable_primary_menu]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'clean_gallery_sanitize_checkbox', ) );

    $wp_customize->add_control( 'clean_gallery_disable_primary_menu_control', array( 'label' => esc_html__( 'Disable Primary Menu', 'clean-gallery' ), 'section' => 'clean_gallery_section_other_options', 'settings' => 'clean_gallery_options[disable_primary_menu]', 'type' => 'checkbox', ) );

}