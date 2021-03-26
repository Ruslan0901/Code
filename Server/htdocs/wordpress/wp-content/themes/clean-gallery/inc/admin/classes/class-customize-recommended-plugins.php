<?php
/**
* Clean_Gallery_Customize_Recommended_Plugins class
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

class Clean_Gallery_Customize_Recommended_Plugins extends WP_Customize_Control {
    public $type = 'tdna-recommended-wpplugins';
    
    public function render_content() {
        $plugins = array(
        'wp-pagenavi' => array( 
            'link'  => esc_url( admin_url('plugin-install.php?tab=plugin-information&plugin=wp-pagenavi' ) ),
            'text'  => esc_html__( 'WP-PageNavi', 'clean-gallery' ),
            'desc'  => esc_html__( 'WP-PageNavi plugin helps to display numbered page navigation of this theme. Just install and activate the plugin.', 'clean-gallery' ),
            ),
        'regenerate-thumbnails' => array( 
            'link'  => esc_url( admin_url('plugin-install.php?tab=plugin-information&plugin=regenerate-thumbnails' ) ),
            'text'  => esc_html__( 'Regenerate Thumbnails', 'clean-gallery' ),
            'desc'  => esc_html__( 'Regenerate Thumbnails plugin helps you to regenerate your thumbnails to match with this theme. Install and activate the plugin. From the left hand navigation menu, click Tools &gt; Regen. Thumbnails. On the next screen, click Regenerate All Thumbnails.', 'clean-gallery' ),
            ),
        'widget-context' => array( 
            'link'  => esc_url( admin_url('plugin-install.php?tab=plugin-information&plugin=widget-context' ) ),
            'text'  => esc_html__( 'Widget Context', 'clean-gallery' ),
            'desc'  => esc_html__( 'Widget Context plugin helps you to show or hide widgets on certain sections of your site - front page, posts, pages, archives, search, etc.', 'clean-gallery' ),
            ),
        );
        foreach ( $plugins as $plugin) {
            echo wp_kses_post( force_balance_tags( '<p style="background:#fff;border:1px solid #ddd;color:#000;padding:10px;font-size:120%;font-style:normal;font-weight:bold;"><a style="margin-left:8px;font-weight:bold;color:#000;text-decoration:none;" href="' . esc_url($plugin['link']) .'" target="_blank"><i class="fa fa-wordpress" aria-hidden="true"></i> ' . esc_attr($plugin['text']) .' </a></p>' ) );
            echo wp_kses_post( force_balance_tags( '<p>'.$plugin['desc'].'</p>' ) );
        }
    }
}