<?php get_header();

the_post_thumbnail('full', ['class' => 'home-header-image']);

?>


<div class="product-icons">
    <ul>
        <li>
            <p>Mods</p>
        </li>
        <li>
            <p>Tanks</p>
        </li>
        <li>
            <p>E-Juice</p>
        </li>
    </ul>
</div>

<div class="seperator-two"></div>

<div class="home-shop-section">
    <div>
        <?php get_sidebar(); ?>
    </div>
    <div>
        <?php echo do_shortcode( '[products limit="20" columns="3" orderby="popularity" class="quick-sale" on_sale="true" ]' ); ?>
    </div>
</div>

<?php get_footer(); ?>
