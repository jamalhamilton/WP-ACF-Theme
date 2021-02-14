
<?php
$color = get_sub_field('color');
$text_color=get_sub_field('text_color');
$image_side = get_sub_field('image_side');
$title = get_sub_field('title');
$image = get_sub_field('image');
$body = get_sub_field('body');
$cta = get_sub_field('cta');
?>



   <?php if($image_side=="Left"):?>
    <div class="fullbleed_content">
        <div class="fullbleed_content_image left_block" style="background-image: url(<?php echo  $image ['url'] ; ?>);"></div>
        <div class="intro_text right_block" style="background-color:<?php echo $color;?>">
          <h2 style="color:<?php echo $text_color;?>"><?php echo $title; ?></h2>
          <p style="color:<?php echo $text_color;?>"><?php echo $body; ?></p>
          <?php if(!empty($cta)){ ?>          
            <a style="color:<?php echo $text_color;?>" class="fullbleed_content_link" href="<?php print_r($cta['url']); ?>"><?php print_r($cta['title']); ?> <i class="fas fa-long-arrow-alt-right"></i></a>
        <?php } ?>
        </div>     
        
        </div> 
    <?php elseif($image_side=="Right"):?> 
      <div class="fullbleed_content">
        <div class="intro_text left_block" style="background-color:<?php echo $color;?>">
          <h2 style="color:<?php echo $text_color;?>"><?php echo $title; ?></h2>
          <p style="color:<?php echo $text_color;?>"><?php echo $body; ?></p>
          <?php if(!empty($cta)){ ?>          
            <a style="color:<?php echo $text_color;?>" class="fullbleed_content_link" href="<?php print_r($cta['url']); ?>"><?php print_r($cta['title']); ?> <i class="fas fa-long-arrow-alt-right"></i></a>
        <?php } ?>
        </div>       
        <div class="fullbleed_content_image right_block" style="background-image: url(<?php echo  $image ['url'] ; ?>);"></div>
        </div> 
    <?php endif; ?>

    

