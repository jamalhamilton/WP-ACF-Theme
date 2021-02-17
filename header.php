<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amc-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/fonts/MyFontsWebfontsKit.css">

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<?php wp_head(); ?>
	<script>
	jQuery(document).ready(function() {
		jQuery(".content-flexible .set:first-child a").addClass("active");
		jQuery(".content-flexible .set:first-child").addClass("active");
  jQuery(".set > a").on("click", function() {
    if (jQuery(this).hasClass("active")) {
		jQuery(this).removeClass("active");
		jQuery(this).siblings(".content").slideUp(200);
		jQuery(".set > a i").removeClass("minus-icon").addClass("plus-icon");
    } else {
		jQuery(".set > a i").removeClass("minus-icon").addClass("plus-icon");
		jQuery(this).find("i").removeClass("plus-icon").addClass("minus-icon");
		jQuery(".set > a").removeClass("active");
		jQuery(this).addClass("active");
		jQuery(".content").slideUp(200);
		jQuery(this).siblings(".content").slideDown(200);
    }
	return false;
  });
});
</script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'amc-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/amc-logo-black.png" alt="logo">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$amc_theme_description = get_bloginfo( 'description', 'display' );
			if ( $amc_theme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $amc_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'amc-theme' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
			<ul class="icon-links">
				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bus-icon.png" alt=""></a></li>
				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bus-icon.png" alt=""></a></li>
				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bus-icon.png" alt=""></a></li>
			</ul>
			<ul class="right-links">
				<li><a href="#">Join</a></li>
				<li><a href="#">Renew</a></li>
				<li><a href="#">Donate</a></li>
			</ul>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
