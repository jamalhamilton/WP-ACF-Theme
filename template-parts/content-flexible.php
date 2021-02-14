<?php if ( have_rows( 'content' ) ): $i = 1 ?>
	<?php while ( have_rows( 'content' ) ) : the_row(); ?>
	<section id="content-<?php echo $i++ ?>-<?php echo get_the_ID(); ?>" class="row content-flexible-<?php echo get_row_layout(); ?>">
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
		endif;
	?>


	</section>
	<?php endwhile; ?>
<?php endif; ?>
