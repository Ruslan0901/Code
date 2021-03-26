<?php
/**
* Social buttons
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function clean_gallery_header_social_buttons() { ?>

<div class="clean-gallery-social-icons clearfix">
<div class="clean-gallery-outer-wrapper">

    <?php if ( clean_gallery_get_option('twitterlink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('twitterlink') ); ?>" target="_blank" class="clean-gallery-social-icon-twitter" title="<?php esc_attr_e('Twitter','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Twitter Button','clean-gallery'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('facebooklink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('facebooklink') ); ?>" target="_blank" class="clean-gallery-social-icon-facebook" title="<?php esc_attr_e('Facebook','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Facebook Button','clean-gallery'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('googlelink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('googlelink') ); ?>" target="_blank" class="clean-gallery-social-icon-google-plus" title="<?php esc_attr_e('Google Plus','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Google Plus Button','clean-gallery'); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('pinterestlink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('pinterestlink') ); ?>" target="_blank" class="clean-gallery-social-icon-pinterest" title="<?php esc_attr_e('Pinterest','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Pinterest Button','clean-gallery'); ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('linkedinlink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('linkedinlink') ); ?>" target="_blank" class="clean-gallery-social-icon-linkedin" title="<?php esc_attr_e('Linkedin','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Linkedin Button','clean-gallery'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('instagramlink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('instagramlink') ); ?>" target="_blank" class="clean-gallery-social-icon-instagram" title="<?php esc_attr_e('Instagram','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Instagram Button','clean-gallery'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('flickrlink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('flickrlink') ); ?>" target="_blank" class="clean-gallery-social-icon-flickr" title="<?php esc_attr_e('Flickr','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Flickr Button','clean-gallery'); ?>"><i class="fa fa-flickr" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('youtubelink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('youtubelink') ); ?>" target="_blank" class="clean-gallery-social-icon-youtube" title="<?php esc_attr_e('Youtube','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Youtube Button','clean-gallery'); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('vimeolink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('vimeolink') ); ?>" target="_blank" class="clean-gallery-social-icon-vimeo" title="<?php esc_attr_e('Vimeo','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Vimeo Button','clean-gallery'); ?>"><i class="fa fa-vimeo" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('soundcloudlink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('soundcloudlink') ); ?>" target="_blank" class="clean-gallery-social-icon-soundcloud" title="<?php esc_attr_e('SoundCloud','clean-gallery'); ?>" aria-label="<?php esc_attr_e('SoundCloud Button','clean-gallery'); ?>"><i class="fa fa-soundcloud" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('lastfmlink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('lastfmlink') ); ?>" target="_blank" class="clean-gallery-social-icon-lastfm" title="<?php esc_attr_e('Lastfm','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Lastfm Button','clean-gallery'); ?>"><i class="fa fa-lastfm" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('githublink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('githublink') ); ?>" target="_blank" class="clean-gallery-social-icon-github" title="<?php esc_attr_e('Github','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Github Button','clean-gallery'); ?>"><i class="fa fa-github" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('bitbucketlink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('bitbucketlink') ); ?>" target="_blank" class="clean-gallery-social-icon-bitbucket" title="<?php esc_attr_e('Bitbucket','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Bitbucket Button','clean-gallery'); ?>"><i class="fa fa-bitbucket" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('tumblrlink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('tumblrlink') ); ?>" target="_blank" class="clean-gallery-social-icon-tumblr" title="<?php esc_attr_e('Tumblr','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Tumblr Button','clean-gallery'); ?>"><i class="fa fa-tumblr" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('digglink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('digglink') ); ?>" target="_blank" class="clean-gallery-social-icon-digg" title="<?php esc_attr_e('Digg','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Digg Button','clean-gallery'); ?>"><i class="fa fa-digg" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('deliciouslink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('deliciouslink') ); ?>" target="_blank" class="clean-gallery-social-icon-delicious" title="<?php esc_attr_e('Delicious','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Delicious Button','clean-gallery'); ?>"><i class="fa fa-delicious" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('stumblelink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('stumblelink') ); ?>" target="_blank" class="clean-gallery-social-icon-stumbleupon" title="<?php esc_attr_e('Stumbleupon','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Stumbleupon Button','clean-gallery'); ?>"><i class="fa fa-stumbleupon" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('redditlink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('redditlink') ); ?>" target="_blank" class="clean-gallery-social-icon-reddit" title="<?php esc_attr_e('Reddit','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Reddit Button','clean-gallery'); ?>"><i class="fa fa-reddit" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('dribbblelink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('dribbblelink') ); ?>" target="_blank" class="clean-gallery-social-icon-dribbble" title="<?php esc_attr_e('Dribbble','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Dribbble Button','clean-gallery'); ?>"><i class="fa fa-dribbble" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('behancelink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('behancelink') ); ?>" target="_blank" class="clean-gallery-social-icon-behance" title="<?php esc_attr_e('Behance','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Behance Button','clean-gallery'); ?>"><i class="fa fa-behance" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('vklink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('vklink') ); ?>" target="_blank" class="clean-gallery-social-icon-vk" title="<?php esc_attr_e('VK','clean-gallery'); ?>" aria-label="<?php esc_attr_e('VK Button','clean-gallery'); ?>"><i class="fa fa-vk" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('codepenlink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('codepenlink') ); ?>" target="_blank" class="clean-gallery-social-icon-codepen" title="<?php esc_attr_e('Codepen','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Codepen Button','clean-gallery'); ?>"><i class="fa fa-codepen" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('jsfiddlelink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('jsfiddlelink') ); ?>" target="_blank" class="clean-gallery-social-icon-jsfiddle" title="<?php esc_attr_e('JSFiddle','clean-gallery'); ?>" aria-label="<?php esc_attr_e('JSFiddle Button','clean-gallery'); ?>"><i class="fa fa-jsfiddle" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('stackoverflowlink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('stackoverflowlink') ); ?>" target="_blank" class="clean-gallery-social-icon-stackoverflow" title="<?php esc_attr_e('Stack Overflow','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Stack Overflow Button','clean-gallery'); ?>"><i class="fa fa-stack-overflow" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('stackexchangelink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('stackexchangelink') ); ?>" target="_blank" class="clean-gallery-social-icon-stackexchange" title="<?php esc_attr_e('Stack Exchange','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Stack Exchange Button','clean-gallery'); ?>"><i class="fa fa-stack-exchange" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('bsalink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('bsalink') ); ?>" target="_blank" class="clean-gallery-social-icon-buysellads" title="<?php esc_attr_e('BuySellAds','clean-gallery'); ?>" aria-label="<?php esc_attr_e('BuySellAds Button','clean-gallery'); ?>"><i class="fa fa-buysellads" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('slidesharelink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('slidesharelink') ); ?>" target="_blank" class="clean-gallery-social-icon-slideshare" title="<?php esc_attr_e('SlideShare','clean-gallery'); ?>" aria-label="<?php esc_attr_e('SlideShare Button','clean-gallery'); ?>"><i class="fa fa-slideshare" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('skypeusername') ) : ?>
            <a href="skype:<?php echo esc_html( clean_gallery_get_option('skypeusername') ); ?>?chat" class="clean-gallery-social-icon-skype" title="<?php esc_attr_e('Skype','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Skype Button','clean-gallery'); ?>"><i class="fa fa-skype" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('emailaddress') ) : ?>
            <a href="mailto:<?php echo esc_html( clean_gallery_get_option('emailaddress') ); ?>" class="clean-gallery-social-icon-email" title="<?php esc_attr_e('Email Us','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Email Us Button','clean-gallery'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('telephonenumber') ) : ?>
            <a href="tel:<?php echo esc_html( clean_gallery_get_option('telephonenumber') ); ?>" class="clean-gallery-social-icon-phone" title="<?php esc_attr_e('Phone','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Phone Button','clean-gallery'); ?>"><i class="fa fa-phone" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( clean_gallery_get_option('rsslink') ) : ?>
            <a href="<?php echo esc_url( clean_gallery_get_option('rsslink') ); ?>" target="_blank" class="clean-gallery-social-icon-rss" title="<?php esc_attr_e('RSS','clean-gallery'); ?>" aria-label="<?php esc_attr_e('RSS Button','clean-gallery'); ?>"><i class="fa fa-rss" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( !(clean_gallery_get_option('hide_login_button')) ) { ?><?php if (is_user_logged_in()) : ?><a href="<?php echo esc_url( wp_logout_url( get_permalink() ) ); ?>" class="clean-gallery-social-icon-login" title="<?php esc_attr_e( 'Logout', 'clean-gallery' ); ?>" aria-label="<?php esc_attr_e( 'Logout Button', 'clean-gallery' ); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i></a><?php else : ?><a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" class="clean-gallery-social-icon-login" title="<?php esc_attr_e( 'Login / Register', 'clean-gallery' ); ?>" aria-label="<?php esc_attr_e( 'Login / Register Button', 'clean-gallery' ); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i></a><?php endif;?><?php } ?>
    <?php if ( !(clean_gallery_get_option('hide_search_button')) ) { ?><a href="<?php echo esc_url( '#' ); ?>" class="clean-gallery-social-icon-search" title="<?php esc_attr_e('Search','clean-gallery'); ?>" aria-label="<?php esc_attr_e('Search Button','clean-gallery'); ?>"><i class="fa fa-search" aria-hidden="true"></i></a><?php } ?>

    <div class="social-search-box">
    <?php get_search_form( array(
        'echo'       => true,
        'aria_label' => esc_attr__('Header Search Box','clean-gallery'),
    ) ); ?>
    </div>

</div>
</div>

<?php }