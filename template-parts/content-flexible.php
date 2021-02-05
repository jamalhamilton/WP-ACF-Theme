<?php if ( have_rows( 'content' ) ): $i = 1 ?>
	<?php while ( have_rows( 'content' ) ) : the_row(); ?>
	<section id="content-<?php echo $i++ ?>-<?php echo get_the_ID(); ?>" class="row content-flexible content-flexible-<?php echo get_row_layout(); ?>">
		<?php get_template_part( '/modules/module', get_row_layout() ); ?>
	</section>
	<?php endwhile; ?>
<?php endif; ?>
