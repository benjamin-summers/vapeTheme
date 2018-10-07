<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vape_theme
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar( 'Sidebar2' ); ?>
    <div>
        <h5>click here for a short video about the benefits of vaping</h5>
        <a href="#">Dont Smoke VAPE!</a>
    </div>
</aside><!-- #secondary -->