<?php if ( have_rows( 'content' ) ): $i = 1 ?>
	<?php while ( have_rows( 'content' ) ) : the_row();
		if(get_row_layout() == 'featured_image_&_timely_content_3-column') {
			$cls = 'fitc3c';
		}else{
			$cls = '';
		}
		?>

	<section id="content-<?php echo $i++ ?>-<?php echo get_the_ID(); ?>" class="contained-width content-flexible-<?php echo get_row_layout(); ?> <?php echo $cls; ?>">
	<?php //get_template_part( '/modules/module', get_row_layout() ); ?>

	<?php if( get_row_layout() == 'contained_cta' ):
		 	    get_template_part( '/modules/module', 'contained_cta' );

		elseif(get_row_layout() == 'full_bleed_cta'):
			    get_template_part( '/modules/module', 'full_bleed_cta' );

		elseif(get_row_layout() == 'hero_body'):
				get_template_part( '/modules/module', 'hero_body' );

		elseif(get_row_layout() == '5050_full_bleed_cta'):
				get_template_part( '/modules/module', '5050_full_bleed_cta' );

		elseif(get_row_layout() == 'left_content_right_image_cta'):
				get_template_part( '/modules/module', 'left_content_right_image_cta' );

		elseif(get_row_layout() == 'logo_farm'):
				get_template_part( '/modules/module', 'logo_farm' );

		elseif(get_row_layout() == 'full_bleed_content'):
				get_template_part( '/modules/module', 'full_bleed_content' );

		elseif(get_row_layout() == 'featured_image_&_timely_content_3-column'):
				get_template_part( '/modules/module', 'featured_image_timely_content_3-column' );

		elseif(get_row_layout() == 'contact_us'):
				get_template_part( '/modules/module', 'contact_us' );

		elseif(get_row_layout() == 'left_content_right_image_cta_2'):
				get_template_part( '/modules/module', 'left_content_right_image_cta_2' );

		elseif(get_row_layout() == 'events_accordion'):
				get_template_part( '/modules/module', 'events_accordion' );

		elseif(get_row_layout() == 'flexible_content'):
				get_template_part( '/modules/module', 'flexible_content' );

		elseif(get_row_layout() == 'timely_content_2-column'):
				get_template_part( '/modules/module', 'timely_content_2-column' );

		elseif(get_row_layout() == 'featured_content'):
				get_template_part( '/modules/module', 'featured_content' );

		elseif(get_row_layout() == 'timely_content_3-column'):
				get_template_part( '/modules/module', 'timely_content_3-column' );

		elseif(get_row_layout() == 'faq_accordions'):
				get_template_part( '/modules/module', 'faq_accordions' );

		elseif(get_row_layout() == 'conservation_content_module'):
				get_template_part( '/modules/module', 'conservation_content_module' );

		elseif(get_row_layout() == 'full_bleed_grid_3-column'):
				get_template_part( '/modules/module', 'full_bleed_grid_3-column' );

		elseif(get_row_layout() == 'hero_carousel'):
				get_template_part( '/modules/module', 'hero_carousel' );

		elseif(get_row_layout() == 'leadership_accordions'):
				get_template_part( '/modules/module', 'leadership_accordions' );

		elseif(get_row_layout() == 'tabbed_content'):
				get_template_part( '/modules/module', 'tabbed_content' );

		endif;
	?>


	</section>
	<?php endwhile; ?>
<?php endif; ?>
