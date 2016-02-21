<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Landing_Page_One_Pager
 */

?>


<!--Footer Section-->
<section class="vertical-scrolling" id="footer-section">
	<footer class="footer" role="contentinfo">
		<p>
                    <span id="footer-span">
                    <img id="footer-logo" src="<?php the_field( 'footer_logo' ); ?>">
	                    <?php the_field( 'footer_text' ); ?>
                    </span>
		</p>
	</footer>
</section>


<?php wp_footer(); ?>

</body>
</html>
