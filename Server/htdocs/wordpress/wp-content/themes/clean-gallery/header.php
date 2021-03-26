<?php
/**
* The header for Clean Gallery theme.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class('animated fadeIn'); ?> id="sitemainbody" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#clean-gallery-primary"><?php esc_html_e( 'Skip to content', 'clean-gallery' ); ?></a>

<?php if ( !(clean_gallery_get_option('hide_top_bar')) ) { clean_gallery_header_social_buttons(); } ?>

<div class="clean-gallery-container" id="clean-gallery-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
<div class="clean-gallery-head-content clearfix" id="clean-gallery-head-content">

<?php if ( get_header_image() ) : ?>
<div class="clean-gallery-header-image clearfix">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="clean-gallery-header-img-link">
    <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="" class="clean-gallery-header-img"/>
</a>
<?php if ( !(clean_gallery_get_option('hide_header_image_title')) ) { ?>
<div class="clean-gallery-header-image-info">
<div class="clean-gallery-header-image-info-inside">
    <p class="clean-gallery-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
    <p class="clean-gallery-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
</div>
</div>
<?php } ?>
</div>
<?php endif; ?>

<div class="clean-gallery-outer-wrapper">

<?php clean_gallery_before_header(); ?>

<?php if ( !(clean_gallery_get_option('hide_header_content')) ) { ?>
<div class="clean-gallery-header-inside clearfix">
<div class="clean-gallery-header-inside-content clearfix">

<div class="clean-gallery-logo">
<?php if ( has_custom_logo() ) : ?>
    <div class="site-branding">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="clean-gallery-logo-img-link">
        <img src="<?php echo esc_url( clean_gallery_custom_logo() ); ?>" alt="" class="clean-gallery-logo-img"/>
    </a>
    <div class="clean-gallery-custom-logo-info"><?php clean_gallery_site_title(); ?></div>
    </div>
<?php else: ?>
    <div class="site-branding">
      <?php clean_gallery_site_title(); ?>
    </div>
<?php endif; ?>
</div>

<div class="clean-gallery-header-ad">
<?php dynamic_sidebar( 'header-right' ); ?>
</div><!--/.clean-gallery-header-ad -->

</div>
</div>
<?php } else { ?>
<div class="clean-gallery-no-header-content">
  <?php clean_gallery_site_title(); ?>
</div>
<?php } ?>

<?php clean_gallery_after_header(); ?>

</div>

</div><!--/#clean-gallery-head-content -->
</div><!--/#clean-gallery-header -->

<?php if ( !(clean_gallery_get_option('disable_primary_menu')) ) { ?>
<div class="clean-gallery-container clean-gallery-primary-menu-container clearfix">
<div class="clean-gallery-primary-menu-container-inside clearfix">

<nav class="clean-gallery-nav-primary" id="clean-gallery-primary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'clean-gallery' ); ?>">
<div class="clean-gallery-outer-wrapper">
<button class="clean-gallery-primary-responsive-menu-icon" aria-controls="clean-gallery-menu-primary-navigation" aria-expanded="false"><?php esc_html_e( 'Menu', 'clean-gallery' ); ?></button>
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'clean-gallery-menu-primary-navigation', 'menu_class' => 'clean-gallery-primary-nav-menu clean-gallery-menu-primary', 'fallback_cb' => 'clean_gallery_fallback_menu', 'container' => '', ) ); ?>
</div>
</nav>

</div>
</div>
<?php } ?>

<?php clean_gallery_after_primary_menu(); ?>