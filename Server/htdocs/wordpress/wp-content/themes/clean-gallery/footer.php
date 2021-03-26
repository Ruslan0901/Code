<?php
/**
* The template for displaying the footer
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<?php if ( !(clean_gallery_get_option('hide_footer_widgets')) ) { ?>
<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) || is_active_sidebar( 'top-footer' ) || is_active_sidebar( 'bottom-footer' ) ) : ?>
<div id="clean-gallery-footer-blocks" class="clean-gallery-footer-blocks" itemscope="itemscope" itemtype="http://schema.org/WPSideBar" role="complementary" aria-label="<?php esc_attr_e( 'Footer Widgets', 'clean-gallery' ); ?>">
<div class="clean-gallery-outer-wrapper">
<div class="clean-gallery-footer-blocks-inside clearfix">

<?php if ( is_active_sidebar( 'top-footer' ) ) : ?>
<div class="clean-gallery-top-footer-block clearfix">
<?php dynamic_sidebar( 'top-footer' ); ?>
</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) : ?>
<div class="clean-gallery-footer-block-cols clearfix">

<div class="clean-gallery-footer-block-col <?php echo esc_attr( clean_gallery_footer_grid_cols() ); ?>" id="clean-gallery-footer-block-1">
<?php dynamic_sidebar( 'footer-1' ); ?>
</div>

<div class="clean-gallery-footer-block-col <?php echo esc_attr( clean_gallery_footer_grid_cols() ); ?>" id="clean-gallery-footer-block-2">
<?php dynamic_sidebar( 'footer-2' ); ?>
</div>

<div class="clean-gallery-footer-block-col <?php echo esc_attr( clean_gallery_footer_grid_cols() ); ?>" id="clean-gallery-footer-block-3">
<?php dynamic_sidebar( 'footer-3' ); ?>
</div>

<div class="clean-gallery-footer-block-col <?php echo esc_attr( clean_gallery_footer_grid_cols() ); ?>" id="clean-gallery-footer-block-4">
<?php dynamic_sidebar( 'footer-4' ); ?>
</div>

</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'bottom-footer' ) ) : ?>
<div class="clean-gallery-bottom-footer-block clearfix">
<?php dynamic_sidebar( 'bottom-footer' ); ?>
</div>
<?php endif; ?>

</div>
</div>
</div><!-- #clean-gallery-footer-blocks -->
<?php endif; ?>
<?php } ?>

<div id="clean-gallery-site-info" class="clean-gallery-site-info" itemscope="itemscope" itemtype="http://schema.org/WPFooter" role="contentinfo" aria-label="<?php esc_attr_e( 'Footer Copyrights', 'clean-gallery' ); ?>">
<div class="clean-gallery-outer-wrapper">
<div class="clean-gallery-site-info-inside clearfix">
<?php if ( clean_gallery_get_option('footer_text') ) : ?>
  <?php echo wp_kses_post( force_balance_tags( clean_gallery_get_option('footer_text') ) ); ?> | <a href="<?php echo esc_url( __( 'https://themesdna.com/', 'clean-gallery' ) ); ?>"><?php /* translators: %s: Theme author. */ printf( esc_html__( 'Design by %s', 'clean-gallery' ), 'ThemesDNA.com' ); ?></a>
<?php else : ?>
  <?php /* translators: %s: Year and site name. */ printf( esc_html__( 'Copyright &copy; %s', 'clean-gallery' ), esc_html(date_i18n(__('Y','clean-gallery'))) . ' ' . esc_html(get_bloginfo( 'name' )  )); ?> | <a href="<?php echo esc_url( __( 'https://themesdna.com/', 'clean-gallery' ) ); ?>"><?php /* translators: %s: Theme author. */ printf( esc_html__( 'Design by %s', 'clean-gallery' ), 'ThemesDNA.com' ); ?></a>
<?php endif; ?>
</div>
</div>
</div><!-- #clean-gallery-site-info -->

<button class="clean-gallery-scroll-top" title="<?php esc_attr_e('Scroll to Top','clean-gallery'); ?>"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e('Scroll to Top', 'clean-gallery'); ?></span></button>

<?php wp_footer(); ?>
</body>
</html>