<?php
/**
* Author bio box
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function clean_gallery_add_author_bio_box() {
    $content='';
    if (is_single()) {
        $content .= '
            <div class="clean-gallery-author-bio clean-gallery-box">
            <div class="clean-gallery-author-bio-top">
            <div class="clean-gallery-author-bio-gravatar">
                '. get_avatar( get_the_author_meta('email') , 80 ) .'
            </div>
            <div class="clean-gallery-author-bio-text">
                <h2>'.esc_html__( 'Author: ', 'clean-gallery' ).'<span>'. get_the_author_link() .'</span></h2><div class="clean-gallery-author-bio-text-description">'. get_the_author_meta('description',get_query_var('author') ) .'</div>
            </div>
            </div>
            </div>
        ';
    }
    return $content;
}