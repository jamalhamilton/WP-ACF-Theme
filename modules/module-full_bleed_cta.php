
<?php
$color = get_sub_field('color');
$text_color=get_sub_field('text_color');
$headline = get_sub_field('headline');
$image = get_sub_field('image');
$copy = get_sub_field('copy');
$cta = get_sub_field('cta');
?>


<?php if(empty($image)): ?>
  <div class="fullbleed_with_text" style="background-color:<?php echo $color;?>">
	  <div class="intro_text">
	  	<h2 style="color:<?php echo $text_color;?>"><?php echo $headline; ?></h2>
      <p style="color:<?php echo $text_color;?>"><?php echo $copy; ?></p>
      <?php if(!empty($cta)){ ?>          
        <a class="fullbleed_cta_link" href="<?php print_r($cta['url']); ?>" style="color:<?php echo $text_color;?>"><?php print_r($cta['title']); ?> 
        <?php 
        if($text_color == '#000000') {
          ?>
        <img src="<?php bloginfo('template_directory');?>/assets/images/noun_Long Arrow_2596838.png" alt=""></a>
        <?php  
        } else {
        ?>
        <img src="<?php bloginfo('template_directory');?>/assets/images/LongArrow.png" alt=""></a>
    <?php }} ?>
     </div>
	  </div>
   <?php elseif(!empty($image)):?>
    <div class="fullbleed_with_text image" style="background-color:<?php echo $color;?>">
        <div class="intro_text left_block">
          <h2 style="color:<?php echo $text_color;?>"><?php echo $headline; ?></h2>
          <?php if(!empty($cta)){ ?>          
            <a class="fullbleed_cta_link" href="<?php print_r($cta['url']); ?>" style="color:<?php echo $text_color;?>"><?php print_r($cta['title']); ?>
            <img src="<?php bloginfo('template_directory');?>/assets/images/noun_Long Arrow_2596838.png" alt=""></a>
        <?php } ?>
        </div>       
        <div class="fullbleed_image right_block" style="background-image: url(<?php echo  $image ['url'] ; ?>);"></div>
        </div>  
    <?php endif; ?>

    

