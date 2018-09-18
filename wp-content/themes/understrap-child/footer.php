<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
<footer class="site-footer" id="colophon">
	<div class="wrapper" id="wrapper-footer">
		<div class="<?php echo esc_attr( $container ); ?>">
			<div class="row">
				<div class="col-md-6">
					<div class="site-info">
					    &copy; Copyright Collins Groundworks <?php echo date("Y"); ?>. Site by <a href="https://www.bigplanemedia.co.uk">Big Plane Media</a><span class="sep"></span>
					</div><!-- .site-info -->
				</div><!--col end -->
				<div class="col-md-6 footer-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
				</div>
			</div><!-- row end -->
		</div><!-- container end -->
	</div><!-- wrapper end -->
</footer><!-- #colophon -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
