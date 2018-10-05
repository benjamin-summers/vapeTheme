<?php /* Template Name: Mods Page Home */ ?>
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

<?php get_footer(); ?>
