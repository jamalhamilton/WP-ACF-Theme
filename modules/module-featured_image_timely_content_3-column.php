<?php
$settings = get_sub_field('settings');
$headline = get_sub_field('headline');
$image = get_sub_field('image');
if( have_rows('columns') ):
?>
<div class="featured_image_timely_content_3_column_section">
	
	<div class="content-flexible">
		<h2><?php echo $headline; ?></h2>
		<?php
		if(! empty( $image['url'])):
		?>
		<figure style=" background-image:url(<?php echo wp_get_attachment_image_url( $image['ID'], 'timely_content_3-column' ); ?>);">
			
		</figure>
		<?php endif; ?>
		<div class="timely_content_row">
			<?php $i=0;
			while( have_rows('columns') ): the_row();
			$title = get_sub_field('title');
			$copy = get_sub_field('copy');
			$cta = get_sub_field('cta');
			?>
			<div class="timely_content_3_column <?php if($i==0){echo 'first';} ?>">
				<h3><?php echo $title; ?></h3>
				<p><?php echo  $copy; ?></p>
				<?php if($cta['url']!=''):?>
				<span><a href="<?php echo $cta['url'];?>">Learn More </a><img src="<?php bloginfo('template_directory');?>/assets/images/noun_Long Arrow_2596838.svg" alt=""></span>
				<?php endif; ?>
			</div>
			<?php $i++; endwhile; ?>
		</div>
	</div>
</div>
<?php endif;