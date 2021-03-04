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
				<span><a href="<?php echo $cta['url'];?>">Learn More  
					<svg xmlns="http://www.w3.org/2000/svg" width="59.382" height="22.001" viewBox="0 0 59.382 22.001"><defs><style>.g{fill:<?php echo $text_color;?>;stroke-width: 2px;stroke: <?php echo $text_color;?>;}</style></defs><path class="g" d="M64.359,40.636h-53.8l7.646-7.646a1.033,1.033,0,1,0-1.461-1.461l-9.3,9.3a1.03,1.03,0,0,0-.439.843c0,.005,0,.01,0,.016s0,.022,0,.033a1.025,1.025,0,0,0,.056.289,1,1,0,0,0,.075.165,1.037,1.037,0,0,0,.088.132.97.97,0,0,0,.079.119l9.5,9.5a1.033,1.033,0,1,0,1.461-1.461L10.515,42.7H64.359a1.033,1.033,0,0,0,0-2.067Z" transform="translate(65.892 52.727) rotate(180)"/></svg>
				</a>

				</span>
				<?php endif; ?>
			</div>
			<?php $i++; endwhile; ?>
		</div>
	</div>
</div>
<?php endif;