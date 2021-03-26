<?php
/**
* Upgrade to pro options
*
* @package Clean Gallery  WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

function clean_gallery_upgrade_to_pro($wp_customize) {

    $wp_customize->add_section( 'clean_gallery_section_upgrade', array( 'title' => esc_html__( 'Upgrade to Pro Version', 'clean-gallery' ), 'priority' => 400 ) );
    
    $wp_customize->add_setting( 'clean_gallery_options[upgrade_text]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );
    
    $wp_customize->add_control( new Clean_Gallery_Customize_Static_Text_Control( $wp_customize, 'clean_gallery_upgrade_text_control', array(
        'label'       => esc_html__( 'Clean Gallery  Pro', 'clean-gallery' ),
        'section'     => 'clean_gallery_section_upgrade',
        'settings' => 'clean_gallery_options[upgrade_text]',
        'description' => esc_html__( 'Do you enjoy Clean Gallery ? Upgrade to Clean Gallery  Pro now and get:', 'clean-gallery' ).
            '<ul class="clean-gallery-customizer-pro-features">' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Color Options', 'clean-gallery' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Font Options', 'clean-gallery' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Layout Options (separate options for singular and non-singular pages)', 'clean-gallery' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Custom Page Templates', 'clean-gallery' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Custom Post Templates', 'clean-gallery' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Recent/Category/Tag based Featured Posts Widgets with capability to display posts according to Comments/Dates and more...', 'clean-gallery' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Tabbed Widget with capability to display posts according to Comments/Dates and more...', 'clean-gallery' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Social Profiles Widget and About Me Widget', 'clean-gallery' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( '3 Header Layouts', 'clean-gallery' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Footer with Layout Options (1/2/3/4 columns)', 'clean-gallery' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Post Share Buttons', 'clean-gallery' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Related Posts with Thumbnails', 'clean-gallery' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Author Bio Box with Social Buttons', 'clean-gallery' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Sticky Menu/Sticky Sidebars with enable/disable capability', 'clean-gallery' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Advanced Post Navigation with Thumbnails', 'clean-gallery' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Random Posts Button in Header', 'clean-gallery' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Built-in Contact Form', 'clean-gallery' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'WooCommerce Support', 'clean-gallery' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Search Engine Optimized', 'clean-gallery' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'More Customizer options', 'clean-gallery' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'More Features...', 'clean-gallery' ) . '</li>' .
            '</ul>'.
            '<strong><a href="'.CLEAN_GALLERY_PROURL.'" class="button button-primary" target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i> ' . esc_html__( 'Upgrade To Clean Gallery  PRO', 'clean-gallery' ) . '</a></strong>'
    ) ) );

}