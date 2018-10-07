<?php /* Template Name: tanks-page-home */ ?>
<?php get_header(); ?>

<div class="mods-feature-section">
    <div class="social-icons">
        <ul>
            <li><i class="fa fa-facebook-square fa2x"></i></li>
            <li><i class="fa fa-instagram fa2x"></i></li>
            <li><i class="fa fa-twitter-square fa2x"></i></li>
        </ul>
    </div>
    <div class="mods-feature-image">
        <?php the_post_thumbnail('full', ['class' => 'home-header-image']); ?>
    </div>
</div>
<div class="mods-submenu">
    <?php 
    wp_nav_menu( array(
        'menu'   => 'tanks-submenu',
    ) );
 ?>
</div>

<div class="vape-products">
    <?php echo do_shortcode( '[products limit="4" columns="4"]' ); ?>
    <div class="temp-image">
        <img src="http://localhost/wordpress/wp-content/uploads/2018/10/RDA-TANKS.png" alt="tempature control vaporizer">
    </div>
    <?php echo do_shortcode( '[products limit="4" columns="4"]' ); ?>
    <div class="temp-image">
        <img src="http://localhost/wordpress/wp-content/uploads/2018/10/RTA-TANKS.png" alt="tempature control vaporizer">
    </div>
    <?php echo do_shortcode( '[products limit="4" columns="4"]' ); ?>
    <div class="temp-image">
        <img src="http://localhost/wordpress/wp-content/uploads/2018/10/Clearomizers.png" alt="tempature control vaporizer">
    </div>
    <?php echo do_shortcode( '[products limit="4" columns="4"]' ); ?>
</div>

<?php get_footer(); ?>