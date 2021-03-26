<?php
/**
* Template part for displaying page content in page.php.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<?php clean_gallery_before_single_page(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clean-gallery-singularitem clean-gallery-box'); ?>>

    <header class="entry-header">
        <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
    </header><!-- .entry-header -->

    <?php clean_gallery_after_single_page_title(); ?>

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

    <?php clean_gallery_after_single_page_content(); ?>

    <footer class="entry-footer">
        <?php
        edit_post_link(
            sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Edit <span class="screen-reader-text">%s</span>', 'clean-gallery' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            ),
            '<span class="edit-link">&nbsp;&nbsp;<i class="fa fa-pencil" aria-hidden="true"></i> ',
            '</span>'
        );
        ?>
    </footer><!-- .entry-footer -->

</article>

<?php clean_gallery_after_single_page(); ?>