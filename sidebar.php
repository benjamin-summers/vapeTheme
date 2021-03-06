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
    <hr>
    <ul class="social-sidebar-icons">
        <li><img src="<?php blogInfo('template_directory')?>/assets/images/facebook-logo-finished.png" /></li>
        <li><img src="<?php blogInfo('template_directory')?>/assets/images/instagram-logo-finished.png" /></li>
        <li><img src="<?php blogInfo('template_directory')?>/assets/images/twitter-logo-finished.png" /></li>
    </ul>
    <hr>
    <div>
        <h5>click here for a short video about the benefits of vaping</h5>
        <a href="#">Dont Smoke VAPE!</a>
    </div>
</aside><!-- #secondary -->
