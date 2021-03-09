<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amc-theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-column-container">
			<div class="footer-column">
				<img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/AMC_MainLockup-white_RGB.png" alt="">
				<div class="footer-address">10 City Square Boston, MA 02129</div>
				<a href='#' class='weather-popup' data-weather-popup='117104'>Test Weather Popup</a>
			</div>
			<div class="footer-column">
				<h3 class="footer-menu-header">More Information</h3>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'footer-menu',
					)
				);
				 ?>
				 <div class="footer-copyright-info">Copyright © 2020 All Rights Reserved</div>
			</div>
			<div class="footer-column footer-column-right">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/four-star-charity@2x.png" alt="">
				<div class="social-icons">
					<a href="https://instagram.com/appalachianmountainclub/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt=""></a>
					<a href="https://twitter.com/AppMtnClub"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.svg" alt=""></a>
					<a href="https://www.facebook.com/AppalachianMountainClub"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt=""></a>
					<a href="https://www.youtube.com/AppalachianMtnClub"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.svg" alt=""></a>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
