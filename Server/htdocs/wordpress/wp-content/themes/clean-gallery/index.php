<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class="clean-gallery-outer-wrapper">
<div id="clean-gallery-content" class="clean-gallery-site-content clearfix">

<div class="clean-gallery-fullwidth-area clearfix" id="clean-gallery-fullwidth-area">
<?php dynamic_sidebar( 'top-fullwidth-area' ); ?>
</div>

<div class="clean-gallery-site-content-inside clearfix">
<div id="clean-gallery-sitemain-wrapper" class="clean-gallery-sitemain-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">

<?php clean_gallery_before_main_content(); ?>

<div class="clean-gallery-content-top clearfix" id="clean-gallery-content-top">
<?php dynamic_sidebar( 'top-content' ); ?>
</div>

<div id="clean-gallery-primary" class="clean-gallery-content-area">
<div id="clean-gallery-main" class="clean-gallery-site-main clearfix" role="main">

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

    <?php
    /*
     * Include the Post-Format-specific template for the content.
     * If you want to override this in a child theme, then include a file
     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
     */
    get_template_part( 'template-parts/content', get_post_format() );
    ?>

<?php endwhile; ?>
<div class="clear"></div>

    <?php clean_gallery_posts_navigation(); ?>

<?php else : ?>

    <?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

</div><!-- #clean-gallery-main -->
</div><!-- #clean-gallery-primary -->

<div class="clean-gallery-content-bottom clearfix" id="clean-gallery-content-bottom">
<?php dynamic_sidebar( 'bottom-content' ); ?>
</div>

<?php clean_gallery_after_main_content(); ?>

</div>
</div>

<?php get_sidebar(); ?>
</div>

<div class="clear"></div>
<div class="clean-gallery-fullwidth-area-bottom clearfix" id="clean-gallery-fullwidth-area-bottom">
<?php dynamic_sidebar( 'bottom-fullwidth-area' ); ?>
</div>

</div><!-- #content -->
</div>

<?php get_footer(); ?>