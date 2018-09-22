<?php get_header();

the_post_thumbnail(full, ['class' => 'home-header-image']);

?>


<div class="product-icons">
    <ul>
        <li><img src="https://cdn2.bigcommerce.com/server6000/h4q06/product_images/uploaded_images/what-is-temperature-contol-vaping.jpg?t=1444244165" alt=""></li>
        <li><img src="https://www.elementvape.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/w/a/watermelon_red_s_apple_ejuice_by_7_daze_eliquid.jpg" alt=""></li>
        <li><img src="https://cdn2.bigcommerce.com/server6000/h4q06/products/1613/images/15403/SMOK_Resa_Prince_Tank_Black__28314.1523565762.1280.1280.jpg?c=2" alt=""></li>
    </ul>
</div>

<div class="seperator"></div>

<div class="home-shop-section">
    <div>
        <?php woocommerce_content(); ?>
    </div>
    <div>
        <?php get_sidebar(); ?>
    </div>
</div>


