<?php 
$color = get_sub_field('color');
$text_color=get_sub_field('text_color');
$title = get_sub_field('title');
$copy = get_sub_field('copy');
$cta = get_sub_field('cta');
$cta_2 = get_sub_field('cta_2'); 
$image = get_sub_field('image');
?>
<?php if(! empty($title)):?>
<div class="module_left_content_right_image_cta" style="background-color:<?php echo $color;?>">
	<div class="content-flexible">
		<div class="left_content_right_image_cta_section">
			<div class="left_area">
				<h2 style="color:<?php echo $text_color;?>"><?php echo $title; ?></h2>
				<p style="color:<?php echo $text_color;?>"><?php echo $copy; ?></p>
				<?php if(!empty($cta) || !empty($cta_2)):?>
				<ul>
					<?php  if(! empty($cta['url'])):?>
					<li><a style="color:<?php echo $text_color;?>" href="<?php echo $cta['url'];?>"><?php echo $cta['title'];?> 
					   </a>
					   <img src="<?php bloginfo('template_directory');?>/assets/images/noun_Long Arrow_2596838.svg" alt="">
				   </li>
				<?php endif; ?>
					<?php  if(! empty($cta_2['url'])):?>
					<li>
					  <a style="color:<?php echo $text_color;?>" href="<?php echo $cta_2['url'];?>"><?php echo $cta_2['title'];?>
					 
					</a><img src="<?php bloginfo('template_directory');?>/assets/images/noun_Long Arrow_2596838.svg" alt=""></li>
				<?php endif; ?>

				</ul>
			<?php endif; ?>
			</div>
			<?php 
                 if(! empty( $image['url'])):
					?>
			<div class="right_area">
				<?php echo wp_get_attachment_image( $image['ID'], 'annual-report-image' ); ?>
			</div>
		<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>