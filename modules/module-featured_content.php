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
            <?php print_r($cta['title']); ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="59.382" height="22.001" viewBox="0 0 59.382 22.001"><defs><style>.f{fill:<?php echo $text_color;?>;stroke-width: 2px;stroke: <?php echo $text_color;?>;}</style></defs><path class="f" d="M64.359,40.636h-53.8l7.646-7.646a1.033,1.033,0,1,0-1.461-1.461l-9.3,9.3a1.03,1.03,0,0,0-.439.843c0,.005,0,.01,0,.016s0,.022,0,.033a1.025,1.025,0,0,0,.056.289,1,1,0,0,0,.075.165,1.037,1.037,0,0,0,.088.132.97.97,0,0,0,.079.119l9.5,9.5a1.033,1.033,0,1,0,1.461-1.461L10.515,42.7H64.359a1.033,1.033,0,0,0,0-2.067Z" transform="translate(65.892 52.727) rotate(180)"/></svg>
          </a>  
	  </div>
</div>
	  </div>