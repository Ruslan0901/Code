<?php
/**
* The template for displaying 404 pages (not found).
*
* @link https://codex.wordpress.org/Creating_an_Error_404_Page
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

<div class="clean-gallery-site-content-inside">
<div id="clean-gallery-sitemain-wrapper" class="clean-gallery-sitemain-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">

<?php clean_gallery_before_main_content(); ?>

<div id="clean-gallery-primary" class="clean-gallery-content-area">
<div id="clean-gallery-main" class="clean-gallery-site-main clearfix" role="main">

<header class="clean-gallery-page-header">
        <h1 class="clean-gallery-page-title"><?php esc_html_e( 'Oops! That page can not be found.', 'clean-gallery' ); ?></h1>
</header><!-- .clean-gallery-page-header -->
 
<div class="clean-gallery-page-content clean-gallery-box">
        <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'clean-gallery' ); ?></p>

        <?php get_search_form( array(
            'echo'       => true,
            'aria_label' => esc_attr__('404 Page Search Box','clean-gallery'),
        ) ); ?>

        <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

        <div>
            <h2><?php esc_html_e( 'Most Used Categories', 'clean-gallery' ); ?></h2>
            <ul>
            <?php
                    wp_list_categories( array(
                            'orderby'    => 'count',
                            'order'      => 'DESC',
                            'show_count' => 1,
                            'title_li'   => '',
                            'number'     => 10,
                    ) );
            ?>
            </ul>
        </div>

        <?php
            /* translators: %1$s: smiley */
            $clean_gallery_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'clean-gallery' ), convert_smilies( ':)' ) ) . '</p>';
            the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$clean_gallery_archive_content" );
        ?>

        <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
</div>

</div><!-- #clean-gallery-main -->
</div><!-- #clean-gallery-primary -->

<?php clean_gallery_after_main_content(); ?>

</div>
</div>
</div>

<?php //get_sidebar(); ?>

<div class="clear"></div>
<div class="clean-gallery-fullwidth-area-bottom clearfix" id="clean-gallery-fullwidth-area-bottom">
<?php dynamic_sidebar( 'bottom-fullwidth-area' ); ?>
</div>

</div><!-- #content -->
</div>

<?php get_footer(); ?>