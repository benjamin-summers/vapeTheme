<?php /* Template Name: ejuice-page-home */ ?>
<?php get_header(); 
    the_post_thumbnail('full', ['class' => 'home-header-image']);
?>

<?php get_sidebar('ejuice-sidebar') ?>


<?php get_footer(); ?>