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
    <div class="seperator"></div>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
    <div>
        <ul class="social-sidebar-icons">
            <li><img src="<?php bloginfo('template_url'); ?>/assets/images/facebook-finished.png" /></li>
            <li><img src="<?php bloginfo('template_url'); ?>/assets/images/instagram-finished.png" /></li>
            <li><img src="<?php bloginfo('template_url'); ?>/assets/images/twitter-finished.png" /></li>
        </ul>
    </div>
    <div class="seperator"></div>
</aside><!-- #secondary -->
