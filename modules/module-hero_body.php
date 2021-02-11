<?php 
$settings = get_sub_field('settings');
$vertical_title = get_sub_field('vertical_title');
$hero_image = get_sub_field('hero_image');
$headline_copy = get_sub_field('headline_copy');
$body_copy = get_sub_field('body_copy');
$body_copy_2nd_column = get_sub_field('body_copy_2nd_column'); ?>

<div class="content-flexible">
<?php
if(! empty($hero_image ['url'])):
?>
<div class="hero_image" style="background-image: url(<?php echo  $hero_image ['url'] ; ?>);"></div>
<?php endif; ?>

<div class="hero_image_with_text">
	<?php if(! empty($vertical_title)):?>
	 <div class="vertcial_text">
	 	<span><?php echo $vertical_title; ?></span>
	 </div>
	<?php endif; ?>
	  <div class="intro_text">
	  	<h2><?php echo $headline_copy; ?></h2>
      <h2><?php echo $body_copy; ?></h2>
      <?php if(empty($hero_image ['url'])): ?>
      <p><?php echo $body_copy_2nd_column; ?></p>
      <?php endif; ?>
	  </div>
</div>
	  </div>
