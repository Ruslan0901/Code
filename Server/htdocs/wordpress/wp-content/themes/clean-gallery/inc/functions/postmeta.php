<?php
/**
* Post meta functions
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'clean_gallery_posted_date' ) ) :
/**
 * Prints HTML with meta information for the current post-date.
 */
function clean_gallery_posted_date() {
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
    if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
    }
    $time_string = sprintf( $time_string, esc_attr( get_the_date( 'c' ) ), esc_html( get_the_date() ), esc_attr( get_the_modified_date( 'c' ) ), esc_html( get_the_modified_date() ) );
    $posted_on = sprintf( /* translators: %s: post date. */ _x( '<span class="screen-reader-text">Posted on </span>%s', 'post date', 'clean-gallery' ), '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>&nbsp;&nbsp;' );
    if ( !(clean_gallery_get_option('hide_posted_date')) ) {
        echo '<span class="clean-gallery-single-post-date">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }
}
endif;


if ( ! function_exists( 'clean_gallery_post_comments' ) ) :
/**
 * Prints HTML with meta information for the comments.
 */
function clean_gallery_post_comments() {
    if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
        echo '<span class="clean-gallery-single-post-comments"><i class="fa fa-comments" aria-hidden="true"></i> ';
        comments_popup_link(
                        sprintf(
                            wp_kses(
                                /* translators: %s: post title */
                                __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'clean-gallery' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            get_the_title()
                        )
                    );
        echo '</span>';
    }
}
endif;


if ( ! function_exists( 'clean_gallery_single_postmeta' ) ) :
function clean_gallery_single_postmeta() { ?>
    <div class="clean-gallery-entry-meta-single">
    <?php
    $posted_on = sprintf(
        /* translators: %s: post date. */ _x( '<i class="fa fa-calendar" aria-hidden="true"></i> Posted on <a href="%1$s" rel="bookmark"><time class="entry-date published updated" datetime="%2$s" itemprop="datePublished">%3$s</time></a>', 'post date', 'clean-gallery' ), esc_url( get_permalink() ), esc_attr( get_the_date( 'c' ) ), esc_html( get_the_date() )
    );

    $byline = sprintf(
        /* translators: %s: post author. */ _x( '<i class="fa fa-user" aria-hidden="true"></i> by <span class="author vcard" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a class="url fn n" href="%1$s"><span itemprop="name">%2$s</span></a></span>', 'post author', 'clean-gallery' ), esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ), esc_html( get_the_author() )
    );

    if ( !(clean_gallery_get_option('hide_posted_date')) ) {
        echo '<span class="clean-gallery-single-post-date">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }
    if ( !(clean_gallery_get_option('hide_post_author')) ) {
        echo '<span class="clean-gallery-single-post-author"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }

    if ( !(clean_gallery_get_option('hide_comments_link')) ) {
        if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
            echo '<span class="clean-gallery-single-post-comments"><i class="fa fa-comments" aria-hidden="true"></i> ';
            comments_popup_link(
                            sprintf(
                                wp_kses(
                                    /* translators: %s: post title */
                                    __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'clean-gallery' ),
                                    array(
                                        'span' => array(
                                            'class' => array(),
                                        ),
                                    )
                                ),
                                get_the_title()
                            )
                        );
            echo '</span>';
        }
    }
    ?>
    </div>
<?php }
endif;


if ( ! function_exists( 'clean_gallery_entry_footer' ) ) :
function clean_gallery_entry_footer() {
    if ( 'post' == get_post_type() ) {
        if ( !(clean_gallery_get_option('hide_post_categories')) ) {
            /* translators: used between list items, there is a space after the comma */
            $categories_list = get_the_category_list( esc_html__( ', ', 'clean-gallery' ) );
            if ( $categories_list ) {
                /* translators: 1: list of categories. */
                printf( '<span class="cat-links">' . __( '<i class="fa fa-folder-open" aria-hidden="true"></i> Posted in %1$s', 'clean-gallery' ) . '</span>', $categories_list ); /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */
            }
        }
        if ( !(clean_gallery_get_option('hide_post_tags')) ) {
            /* translators: used between list items, there is a space after the comma */
            $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'clean-gallery' ) );
            if ( $tags_list ) {
                /* translators: 1: list of tags. */
                printf( '<span class="tags-links">' . __( '<i class="fa fa-tags" aria-hidden="true"></i> Tagged %1$s', 'clean-gallery' ) . '</span>', $tags_list ); /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */
            }
        }
    }
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
}
endif;