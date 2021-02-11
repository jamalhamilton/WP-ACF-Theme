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
		endif;
	?>


	</section>
	<?php endwhile; ?>
<?php endif; ?>
