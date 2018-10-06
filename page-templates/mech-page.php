<?php /* Template Name: mods-mech-page */ ?>
<?php get_header(); ?>

<div class="mods-sub-image">
    <img src="http://localhost/wordpress/wp-content/uploads/2018/10/mech-mods-image.png" alt="tempature control vaporizer">
</div>

<div class="mods-submenu">
    <?php 
    wp_nav_menu( array(
        'menu'   => 'mods-submenu',
    ) );
 ?>
</div>

<div class="home-shop-section">
    <div>
        <?php get_sidebar(); ?>
    </div>
    <div>
        <?php echo do_shortcode( '[products limit="12" columns="3"]' ); ?>
    </div>
</div>

<?php get_footer(); ?>