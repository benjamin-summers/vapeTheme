<?php /* Template Name: ejuice-page-home */ ?>
<?php get_header(); 
    the_post_thumbnail('full', ['class' => 'ejuice-header-image']);
?>

<div class="ejuice-page">
    <?php echo do_shortcode('[logoshowcase]'); ?>
    <div class="ejuice-page-content">
        
    </div>
</div>




<?php get_footer(); ?>