<?php
/**
* The file for displaying the sidebars.
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<div id="clean-gallery-sidebar-wrapper" class="clean-gallery-sidebar-wrapper" itemscope="itemscope" itemtype="http://schema.org/WPSideBar" role="complementary" aria-label="<?php esc_attr_e( 'Sidebar Widgets', 'clean-gallery' ); ?>">
<div class="theiaStickySidebar">

<div class="clean-gallery-sidebar-widgets clearfix" id="main-sidebar">
<?php dynamic_sidebar( 'main-sidebar' ); ?>
</div>

<div class="clearfix" id="middle-sidebar">
<div class="clean-gallery-sidebar-widgets" id="sidebar-left">
<?php dynamic_sidebar( 'left-sidebar' ); ?>
</div>

<div class="clean-gallery-sidebar-widgets" id="sidebar-right">
<?php dynamic_sidebar( 'right-sidebar' ); ?>
</div>
</div>

<div class="clean-gallery-sidebar-widgets clearfix" id="bottom-sidebar">
<?php dynamic_sidebar( 'bottom-sidebar' ); ?>
</div>

</div>
</div>