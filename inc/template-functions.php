<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package amc-theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function amc_theme_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'amc_theme_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function amc_theme_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'amc_theme_pingback_header' );

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    
    add_image_size( 'hero-image', 1676, 655, true ); 
}
add_image_size( 'hero-image', 1676, 655, true );
add_image_size( 'annual-report-image', 326, 410, true );
add_image_size( 'timely_content_3-column', 1426, 768, true );
add_image_size( 'tabbed_content_img', 974, 599, true );
add_image_size( 'single_featured_img', 1425, 625, true );


/*Related Post Function*/
function example_cats_related_post() {
		global $post;
		$current_category = get_the_category();

		$same_category = new WP_Query(array(
			'cat'            => $current_category[0]->cat_ID,
			'post__not_in'   => array($post->ID),
			'orderby'        => 'DESC',
			'posts_per_page' => 3
		));
		?>
			<div class="related_title"><h1>Recommended Posts</h1></div>
			<div class="related_posts">		
			<?php while ( $same_category->have_posts() ) : $same_category->the_post(); ?>
			
				<div class="box_container">
						<?php 
								if ( has_post_thumbnail() ) {?>
									<figure class="box_featured_img" style="background-image: url('<?php the_post_thumbnail_url();?>');">
								</figure>
						<?php 	}
						?>
				<p class="reading_time_title"><?php echo do_shortcode('[rt_reading_time label="" postfix="minute read" postfix_singular="minute read"]');  ?></p>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</div>
			
			<?php endwhile; ?>
			</div>
		<?php
}