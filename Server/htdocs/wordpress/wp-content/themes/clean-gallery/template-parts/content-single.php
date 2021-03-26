<?php
/**
* Template part for displaying single posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<?php clean_gallery_before_single_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clean-gallery-singularitem clean-gallery-box'); ?>>

    <header class="entry-header">
        <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

        <?php clean_gallery_single_postmeta(); ?>
    </header><!-- .entry-header -->

    <?php clean_gallery_after_single_post_title(); ?>

    <div class="entry-content clearfix">
        <?php
        clean_gallery_singular_thumbnail();

        the_content( sprintf(
            wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                __( 'Continue reading<span class="screen-reader-text"> "%s"</span> <span class="meta-nav">&rarr;</span>', 'clean-gallery' ),
                array(
                    'span' => array(
                        'class' => array(),
                    ),
                )
            ),
            get_the_title()
        ) );

        wp_link_pages( array(
         'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'clean-gallery' ) . '</span>',
         'after'       => '</div>',
         'link_before' => '<span>',
         'link_after'  => '</span>',
         ) );
        ?>
    </div><!-- .entry-content -->

    <?php clean_gallery_after_single_post_content(); ?>

    <footer class="entry-footer">
        <?php clean_gallery_entry_footer(); ?>
    </footer><!-- .entry-footer -->

</article>

<?php clean_gallery_after_single_post(); ?>