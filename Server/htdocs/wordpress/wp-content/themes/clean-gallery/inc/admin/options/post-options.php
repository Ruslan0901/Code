<?php
/**
* Post options
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function clean_gallery_post_options($wp_customize) {

    $wp_customize->add_section( 'clean_gallery_section_posts', array( 'title' => esc_html__( 'Post Options', 'clean-gallery' ), 'panel' => 'clean_gallery_main_options_panel', 'priority' => 260 ) );

    $wp_customize->add_setting( 'clean_gallery_options[hide_post_snippet]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'clean_gallery_sanitize_checkbox', ) );

    $wp_customize->add_control( 'clean_gallery_hide_post_snippet_control', array( 'label' => esc_html__( 'Hide Post Summaries', 'clean-gallery' ), 'section' => 'clean_gallery_section_posts', 'settings' => 'clean_gallery_options[hide_post_snippet]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'clean_gallery_options[hide_posted_date]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'clean_gallery_sanitize_checkbox', ) );

    $wp_customize->add_control( 'clean_gallery_hide_posted_date_control', array( 'label' => esc_html__( 'Hide Posted Date', 'clean-gallery' ), 'section' => 'clean_gallery_section_posts', 'settings' => 'clean_gallery_options[hide_posted_date]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'clean_gallery_options[hide_post_author]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'clean_gallery_sanitize_checkbox', ) );

    $wp_customize->add_control( 'clean_gallery_hide_post_author_control', array( 'label' => esc_html__( 'Hide Post Author', 'clean-gallery' ), 'section' => 'clean_gallery_section_posts', 'settings' => 'clean_gallery_options[hide_post_author]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'clean_gallery_options[hide_post_categories]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'clean_gallery_sanitize_checkbox', ) );

    $wp_customize->add_control( 'clean_gallery_hide_post_categories_control', array( 'label' => esc_html__( 'Hide Post Categories', 'clean-gallery' ), 'section' => 'clean_gallery_section_posts', 'settings' => 'clean_gallery_options[hide_post_categories]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'clean_gallery_options[hide_post_tags]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'clean_gallery_sanitize_checkbox', ) );

    $wp_customize->add_control( 'clean_gallery_hide_post_tags_control', array( 'label' => esc_html__( 'Hide Post Tags', 'clean-gallery' ), 'section' => 'clean_gallery_section_posts', 'settings' => 'clean_gallery_options[hide_post_tags]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'clean_gallery_options[hide_comments_link]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'clean_gallery_sanitize_checkbox', ) );

    $wp_customize->add_control( 'clean_gallery_hide_comments_link_control', array( 'label' => esc_html__( 'Hide Comment Link', 'clean-gallery' ), 'section' => 'clean_gallery_section_posts', 'settings' => 'clean_gallery_options[hide_comments_link]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'clean_gallery_options[hide_read_more]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'clean_gallery_sanitize_checkbox', ) );

    $wp_customize->add_control( 'clean_gallery_hide_read_more_control', array( 'label' => esc_html__( 'Hide Read More Button', 'clean-gallery' ), 'section' => 'clean_gallery_section_posts', 'settings' => 'clean_gallery_options[hide_read_more]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'clean_gallery_options[hide_post_navigation]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'clean_gallery_sanitize_checkbox', ) );

    $wp_customize->add_control( 'clean_gallery_hide_post_navigation_control', array( 'label' => esc_html__( 'Hide Post Navigation', 'clean-gallery' ), 'section' => 'clean_gallery_section_posts', 'settings' => 'clean_gallery_options[hide_post_navigation]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'clean_gallery_options[hide_thumbnail_single]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'clean_gallery_sanitize_checkbox', ) );

    $wp_customize->add_control( 'clean_gallery_hide_thumbnail_single_control', array( 'label' => esc_html__( 'Hide Thumbnails from Posts/Pages', 'clean-gallery' ), 'section' => 'clean_gallery_section_posts', 'settings' => 'clean_gallery_options[hide_thumbnail_single]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'clean_gallery_options[posts_navigation_type]', array( 'default' => 'numberednavi', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'clean_gallery_sanitize_posts_navigation_type' ) );

    $wp_customize->add_control( 'clean_gallery_posts_navigation_type_control', array( 'label' => esc_html__( 'Posts Navigation Type', 'clean-gallery' ), 'description' => esc_html__('Select posts navigation type you need. If you activate WP-PageNavi plugin, this navigation will be replaced by WP-PageNavi navigation.', 'clean-gallery'), 'section' => 'clean_gallery_section_posts', 'settings' => 'clean_gallery_options[posts_navigation_type]', 'type' => 'select', 'choices' => array( 'normalnavi' => esc_html__('Normal Navigation', 'clean-gallery'), 'numberednavi' => esc_html__('Numbered Navigation', 'clean-gallery') ) ) );

    $wp_customize->add_setting( 'clean_gallery_options[hide_author_bio_box]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'clean_gallery_sanitize_checkbox', ) );

    $wp_customize->add_control( 'clean_gallery_hide_author_bio_box_control', array( 'label' => esc_html__( 'Hide Author Bio Box', 'clean-gallery' ), 'section' => 'clean_gallery_section_posts', 'settings' => 'clean_gallery_options[hide_author_bio_box]', 'type' => 'checkbox', ) );


    $wp_customize->add_setting( 'clean_gallery_options[read_more_length]', array( 'default' => 12, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'clean_gallery_sanitize_positive_integer' ) );

    $wp_customize->add_control( 'clean_gallery_read_more_length_control', array( 'label' => esc_html__( 'Post Summaries Length', 'clean-gallery' ), 'description' => esc_html__('Enter the number of words need to display in the post summary. Default is 12 words.', 'clean-gallery'), 'section' => 'clean_gallery_section_posts', 'settings' => 'clean_gallery_options[read_more_length]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[read_more_text]', array( 'default' => 'Read More', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field', ) );

    $wp_customize->add_control( 'clean_gallery_read_more_text_control', array( 'label' => esc_html__( 'Read More Text', 'clean-gallery' ), 'section' => 'clean_gallery_section_posts', 'settings' => 'clean_gallery_options[read_more_text]', 'type' => 'text', ) );

}