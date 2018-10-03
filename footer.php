<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vape_theme
 */

?>

</div><!-- #content -->
<footer>
    <div id="footer-title">
        <h3>Vape The Rainbow</h3>
    </div>
    <div id="footer-icons">
        <ul>
            <li><i class="fa fa-facebook-square fa-2x"></i></li>
            <li><i class="fa fa-instagram fa-2x"></i></li>
            <li><i class="fa fa-twitter-square fa-2x"></i></li>
        </ul>
    </div>
    <div id="author-credit">
        <h6>Theme Developed By Atero Marketing Group</h6>
    </div>
</footer>
</div><!-- #page -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(window).on('scroll', function () {
        if ($(window).scrollTop()) {
            $('div.sticky-logo').addClass('site-logo');
            $('div.sticky-logo ul.logo').css('display', 'inherit');
            $('div.sticky-logo ul.logo').css('grid-area', 'logo');
        } else if ($(window).scrollTop(0)) {
            $('div.sticky-logo').removeClass('site-logo');
            $('div.sticky-logo ul.logo').css('display', 'none');
        }
    })
</script>

<?php wp_footer(); ?>

</body>
</html>
