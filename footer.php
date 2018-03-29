<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package basestrap
 */

?>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h5 class="text-left"><strong><?php esc_html_e('&copy; Copyright', 'basestrap')?><?php echo date("o");?> - <?php bloginfo('name'); ?></strong></h5>
				</div>
				<div class="col-lg-6">
					<h5 class="text-right"><strong>Powered by <a href="https://www.fiorillodesign.it" target="_blank">FiorilloDesign</a></h5>
				</div>
			</div>
		</div>
	</footer>


<?php wp_footer(); ?>

</body>
</html>
