<?php 
$color = get_sub_field('color');
$text_color=get_sub_field('text_color');
$image = get_sub_field('image');
$title = get_sub_field('title');
$copy = get_sub_field('copy');
$cta = get_sub_field('cta'); ?>

<div class="content-flexible">
<?php if(! empty($image ['url'])): ?>
<div class="featured_content_image" style="background-image: url(<?php echo  $image ['url'] ; ?>);"></div>
<?php endif; ?>

<div class="featured_content_with_text" style="background-color:<?php echo $color;?>">
	  <div class="intro_text">
	  	<h2 style="color:<?php echo $text_color; ?>"><?php echo $title; ?></h2>
          <p><?php echo $copy; ?></p>
          <a style="color:<?php echo $text_color;?>" class="featured_content_link" href="<?php print_r($cta['url']); ?>">
            <?php print_r($cta['title']); ?> <i class="fas fa-long-arrow-alt-right"></i>
          </a>  
	  </div>
</div>
	  </div>