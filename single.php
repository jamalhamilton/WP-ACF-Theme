<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package amc-theme
 */

get_header();
?>

	<main id="primary" class="site-main">
	<div class="contained-width">	
       <div class="content-flexible"> 
		<?php
		while ( have_posts() ) :
			the_post();

			//get_template_part( 'template-parts/content', get_post_type() );

		/*	the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'amc-theme' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'amc-theme' ) . '</span> <span class="nav-title">%title</span>',
				)
			);*/

			
			/*if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;*/?>
			<article class="post-<?php echo get_the_ID(); ?>">
					<h1> <?php the_title();?></h1>
				<div class="post_header">
					<div class="postmeta">
					<div class="post_author head_col">
			          <?php
					  if ( function_exists( 'coauthors_posts_links' ) ) {
						coauthors_posts_links();
					} else {
						the_author_posts_link();
					}
						//$author_id = get_post_field( 'post_author', get_the_ID() );
						//echo $author_name = get_the_author_meta('display_name', $author_id);
					 ?>
			        </div>
			        <div class="post_date head_col">
			        	/ <?php echo  get_the_date( 'F j, Y ' ).' ';?> 
			        </div>
				<div class="post_reading head_col">
					/
					<?php 
                      
					 echo do_shortcode('[rt_reading_time label="" postfix="minute read" postfix_singular="minute read"]'); ?>
					
				</div>
			  </div>
			  <div class="social_share">

                     <?php 
                      
					 echo do_shortcode('[Sassy_Social_Share]'); ?>
			  </div>
			</div>
			    <!--<?php 
						if ( has_post_thumbnail() ) {?>
							<figure class="featured_img">
						  <?php   //the_post_thumbnail('single_featured_img'); ?>
						</figure>
					<?php 	}
			    ?>-->
              <div class="post_detail">
			     <?php the_content(); ?>
              </div>

			
<?php //echo wpautop( get_the_author_meta( 'description' ) ); ?>

<div class="author_section">
	<?php if ( function_exists( 'get_coauthors' ) ) { ?>
		<h2 class="author_details">About the Author…</h2>
		<?php
		$coauthors = get_coauthors();
		//print_r($coauthors);
		$number= count($coauthors);
		foreach ( $coauthors as $coauthor ) {
			//print_r($coauthor);
			$custom_title = get_user_meta( $coauthor->ID, 'wpseo_title', true ); echo $titleeee;
		?>
		<div id="authorboxsingle-<?php echo $coauthor->ID; ?>" class="authorboxsingle <?php if($number>1){ echo 'authormulti'; } ?>">
		<p><span class="authorboxsinglename"><?php echo ( $coauthor->display_name ); ?></span> 
		<?php if($custom_title){ ?> 
				<p class="custom_title"><?php echo $custom_title; ?> </p>
		<?php } ?>
		<!--<span class="authorboxsinglelink">(<a href="<?php echo get_author_posts_url( get_the_author_meta( '$coauthor->ID' ), get_the_author_meta( '$coauthor->user_login' ) ); ?><?php echo ( $coauthor->user_login ); ?>">See all</a>)</span></p>-->
		<p class="authorboxsinglebio"><?php echo ( $coauthor->description ); ?></p>
		</div>
		<?php
		}
		// treat author output normally
		} else {

		?>
		<div class="authorboxsingle">
			<p><span class="authorboxsinglename"><?php esc_html(the_author_meta('display_name')); ?></span> <span class="authorboxsinglelink">(<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">See all</a>)</span></p>
			<p class="authorboxsinglebio"><?php esc_textarea(the_author_meta('description')); ?></p>
		</div>
		<?php } ?>
</div>

</article>
		<?php endwhile; // End of the loop.	?>

		<?php example_cats_related_post() ?>
</div>



	</div>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
