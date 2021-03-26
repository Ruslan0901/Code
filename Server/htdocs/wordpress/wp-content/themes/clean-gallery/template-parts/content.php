<?php
/**
* Template part for displaying posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'clean-gallery-postbox' ); ?>>

<div class="clean-gallery-postbox-content">

<?php if(has_post_thumbnail()) { ?>
    <a href="<?php echo esc_url( get_permalink() ); ?>" class="clean-gallery-thumbnail-link"><?php the_post_thumbnail('clean-gallery-featured-image', array('class' => 'clean-gallery-thumbnail', 'title' => get_the_title(), 'itemprop' => 'image')); ?></a>
<?php } else { ?>
    <a href="<?php echo esc_url( get_permalink() ); ?>" class="clean-gallery-thumbnail-link"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/no-thumbnail.png' ); ?>" class="clean-gallery-thumbnail"/></a>
<?php } ?>

<div class="clean-gallery-postbox-mask">
    <?php if ( !(clean_gallery_get_option('hide_posted_date')) ) { ?>
        <p class="clean-gallery-postbox-mask-date"><?php clean_gallery_posted_date(); ?></p>
    <?php } ?>
    <?php if ( !(clean_gallery_get_option('hide_post_snippet')) ) { ?>
        <div class="clean-gallery-postbox-mask-description"><?php echo esc_html(get_the_excerpt()); ?></div>
    <?php } ?>
    <?php if ( !(clean_gallery_get_option('hide_read_more')) ) { ?>
        <a href="<?php echo esc_url( get_permalink() ); ?>" class="clean-gallery-postbox-mask-rmore"><?php echo esc_html(clean_gallery_excerpt_more()); ?><span class="screen-reader-text"> <?php the_title(); ?></span></a>
    <?php } ?>
</div>

</div>

<?php the_title( sprintf( '<h2 class="clean-gallery-postbox-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

</article>