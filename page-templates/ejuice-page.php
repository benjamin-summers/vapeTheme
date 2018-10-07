<?php /* Template Name: ejuice-page-home */ ?>
<?php get_header(); 
    the_post_thumbnail('full', ['class' => 'ejuice-header-image']);
?>

<div class="ejuice-page">
    <?php echo do_shortcode('[logoshowcase]'); ?>
    <div class="ejuice-page-content">
        <div class="ejuice-sidebar">
            <?php get_sidebar('ejuice-sidebar') ?>
        </div>
        <div class="ejuice-products">
        <?php echo do_shortcode( '[products limit="60" columns="3"]' ); ?>
        </div>
    </div>
</div>




<?php get_footer(); ?>