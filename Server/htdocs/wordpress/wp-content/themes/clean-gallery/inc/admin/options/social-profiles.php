<?php
/**
* Social profiles options
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function clean_gallery_social_profiles($wp_customize) {

    $wp_customize->add_section( 'clean_gallery_section_sociallinks', array( 'title' => esc_html__( 'Social Links', 'clean-gallery' ), 'panel' => 'clean_gallery_main_options_panel', 'priority' => 480, ));

    $wp_customize->add_setting( 'clean_gallery_options[hide_top_bar]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'clean_gallery_sanitize_checkbox', ) );

    $wp_customize->add_control( 'clean_gallery_hide_top_bar_control', array( 'label' => esc_html__( 'Hide Top Social Bar', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[hide_top_bar]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'clean_gallery_options[hide_search_button]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'clean_gallery_sanitize_checkbox', ) );

    $wp_customize->add_control( 'clean_gallery_hide_search_button_control', array( 'label' => esc_html__( 'Hide Search Button', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[hide_search_button]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'clean_gallery_options[hide_login_button]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'clean_gallery_sanitize_checkbox', ) );

    $wp_customize->add_control( 'clean_gallery_hide_login_button_control', array( 'label' => esc_html__( 'Hide Login Button', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[hide_login_button]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'clean_gallery_options[facebooklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_facebooklink_control', array( 'label' => esc_html__( 'Facebook URL', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[facebooklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[twitterlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_twitterlink_control', array( 'label' => esc_html__( 'Twitter URL', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[twitterlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[googlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) ); 

    $wp_customize->add_control( 'clean_gallery_googlelink_control', array( 'label' => esc_html__( 'Google Plus URL', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[googlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[pinterestlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_pinterestlink_control', array( 'label' => esc_html__( 'Pinterest URL', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[pinterestlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[linkedinlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_linkedinlink_control', array( 'label' => esc_html__( 'Linkedin Link', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[linkedinlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[instagramlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_instagramlink_control', array( 'label' => esc_html__( 'Instagram Link', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[instagramlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[flickrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_flickrlink_control', array( 'label' => esc_html__( 'Flickr Link', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[flickrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[youtubelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_youtubelink_control', array( 'label' => esc_html__( 'Youtube URL', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[youtubelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[vimeolink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_vimeolink_control', array( 'label' => esc_html__( 'Vimeo URL', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[vimeolink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[soundcloudlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_soundcloudlink_control', array( 'label' => esc_html__( 'Soundcloud URL', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[soundcloudlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[lastfmlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_lastfmlink_control', array( 'label' => esc_html__( 'Lastfm URL', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[lastfmlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[githublink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_githublink_control', array( 'label' => esc_html__( 'Github URL', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[githublink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[bitbucketlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_bitbucketlink_control', array( 'label' => esc_html__( 'Bitbucket URL', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[bitbucketlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[tumblrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_tumblrlink_control', array( 'label' => esc_html__( 'Tumblr URL', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[tumblrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[digglink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_digglink_control', array( 'label' => esc_html__( 'Digg URL', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[digglink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[deliciouslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_deliciouslink_control', array( 'label' => esc_html__( 'Delicious URL', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[deliciouslink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[stumblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_stumblelink_control', array( 'label' => esc_html__( 'Stumbleupon Link', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[stumblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[redditlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_redditlink_control', array( 'label' => esc_html__( 'Reddit Link', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[redditlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[dribbblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_dribbblelink_control', array( 'label' => esc_html__( 'Dribbble Link', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[dribbblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[behancelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_setting( 'clean_gallery_options[vklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_vklink_control', array( 'label' => esc_html__( 'VK Link', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[vklink]', 'type' => 'text' ) );

    $wp_customize->add_control( 'clean_gallery_behancelink_control', array( 'label' => esc_html__( 'Behance Link', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[behancelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[codepenlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_codepenlink_control', array( 'label' => esc_html__( 'Codepen Link', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[codepenlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[jsfiddlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_jsfiddlelink_control', array( 'label' => esc_html__( 'JSFiddle Link', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[jsfiddlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[stackoverflowlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_stackoverflowlink_control', array( 'label' => esc_html__( 'Stack Overflow Link', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[stackoverflowlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[stackexchangelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_stackexchangelink_control', array( 'label' => esc_html__( 'Stack Exchange Link', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[stackexchangelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[bsalink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_bsalink_control', array( 'label' => esc_html__( 'BuySellAds Link', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[bsalink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[slidesharelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_slidesharelink_control', array( 'label' => esc_html__( 'SlideShare Link', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[slidesharelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[skypeusername]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field' ) );

    $wp_customize->add_control( 'clean_gallery_skypeusername_control', array( 'label' => esc_html__( 'Skype Username', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[skypeusername]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[emailaddress]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'clean_gallery_sanitize_email' ) );

    $wp_customize->add_control( 'clean_gallery_emailaddress_control', array( 'label' => esc_html__( 'Email Address', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[emailaddress]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[telephonenumber]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field' ) );

    $wp_customize->add_control( 'clean_gallery_telephonenumber_control', array( 'label' => esc_html__( 'Telephone Number', 'clean-gallery' ), 'section' => 'clean_gallery_section_social', 'settings' => 'clean_gallery_options[telephonenumber]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'clean_gallery_options[rsslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'clean_gallery_rsslink_control', array( 'label' => esc_html__( 'RSS Feed URL', 'clean-gallery' ), 'section' => 'clean_gallery_section_sociallinks', 'settings' => 'clean_gallery_options[rsslink]', 'type' => 'text' ) );

}