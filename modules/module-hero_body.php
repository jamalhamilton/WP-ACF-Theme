<?php
$color = get_sub_field('color');
$text_color=get_sub_field('text_color');
$vertical_title = get_sub_field('vertical_title');
$hero_image = get_sub_field('hero_image');
$headline_copy = get_sub_field('headline_copy');
$body_copy = get_sub_field('body_copy');
$body_copy_2nd_column = get_sub_field('body_copy_2nd_column'); ?>

<div class="content-flexible">
<?php if(! empty($hero_image ['url'])): ?>
<div class="hero_image" style="background-image: url(<?php echo  $hero_image ['url'] ; ?>);"></div>
<?php endif; ?>
	<div class="" style="background-color:<?php echo $color;?>">
			<div class="hero_image_with_text">
				<?php if(! empty($vertical_title)):?>
				<div class="vertcial_text"><?php echo $vertical_title; ?>
				</div>
				<?php endif; ?>
				<div class="intro_text">
					<h1><?php echo $headline_copy; ?></h1>

					<?php echo $body_copy; ?>
						<?php if ($body_copy_2nd_column): ?>
							<?php echo $body_copy_2nd_column; ?>
						<?php endif; ?>

				</div>
			</div>
	</div>
	  </div>
