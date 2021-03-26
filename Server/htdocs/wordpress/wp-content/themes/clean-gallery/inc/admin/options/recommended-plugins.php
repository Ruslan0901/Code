<?php
/**
* Recommended plugins options
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function clean_gallery_recomm_plugin_options($wp_customize) {

    $wp_customize->add_section( 'clean_gallery_section_recommended_plugins', array( 'title' => esc_html__( 'Recommended Plugins', 'clean-gallery' ), 'panel' => 'clean_gallery_main_options_panel', 'priority' => 880 ));

    $wp_customize->add_setting( 'clean_gallery_options[recommended_plugins]', array( 'type' => 'option', 'capability' => 'install_plugins', 'sanitize_callback' => 'clean_gallery_sanitize_recommended_plugins' ) );

    $wp_customize->add_control( new Clean_Gallery_Customize_Recommended_Plugins( $wp_customize, 'clean_gallery_recommended_plugins_control', array( 'label' => esc_html__( 'Recommended Plugins', 'clean-gallery' ), 'section' => 'clean_gallery_section_recommended_plugins', 'settings' => 'clean_gallery_options[recommended_plugins]', 'type' => 'tdna-recommended-wpplugins', 'capability' => 'install_plugins' ) ) );

}