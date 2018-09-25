<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vape_theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
    <ul class="social-sidebar-icons">
        <li><img src="<?php blogInfo('template_directory')?>/assets/images/facebook-finished.png" /></li>
        <li><img src="<?php blogInfo('template_directory')?>/assets/images/twitter-finished" /></li>
        <li><img src="<?php blogInfo('template_directory')?>/assets/images/instagram-finished" /></li>
    </ul>
</aside><!-- #secondary -->
