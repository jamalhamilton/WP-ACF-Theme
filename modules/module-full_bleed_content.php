
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
            <a style="color:<?php echo $text_color;?>" class="fullbleed_content_link" href="<?php print_r($cta['url']); ?>"><?php print_r($cta['title']); ?> 
              <svg xmlns="http://www.w3.org/2000/svg" width="59.382" height="22.001" viewBox="0 0 59.382 22.001"><defs><style>.a{fill:<?php echo $text_color;?>;stroke-width: 2px;stroke: <?php echo $text_color;?>;}</style></defs><path class="a" d="M64.359,40.636h-53.8l7.646-7.646a1.033,1.033,0,1,0-1.461-1.461l-9.3,9.3a1.03,1.03,0,0,0-.439.843c0,.005,0,.01,0,.016s0,.022,0,.033a1.025,1.025,0,0,0,.056.289,1,1,0,0,0,.075.165,1.037,1.037,0,0,0,.088.132.97.97,0,0,0,.079.119l9.5,9.5a1.033,1.033,0,1,0,1.461-1.461L10.515,42.7H64.359a1.033,1.033,0,0,0,0-2.067Z" transform="translate(65.892 52.727) rotate(180)"/></svg>
            </a>
        <?php } ?>
        </div>     
        
        </div> 
    <?php elseif($image_side=="Right"):?> 
      <div class="fullbleed_content">
        <div class="intro_text left_block" style="background-color:<?php echo $color;?>">
          <h2 style="color:<?php echo $text_color;?>"><?php echo $title; ?></h2>
          <p style="color:<?php echo $text_color;?>"><?php echo $body; ?></p>
          <?php if(!empty($cta)){ ?>          
            <a style="color:<?php echo $text_color;?>" class="fullbleed_content_link" href="<?php print_r($cta['url']); ?>"><?php print_r($cta['title']); ?> 
            
            <svg xmlns="http://www.w3.org/2000/svg" width="59.382" height="22.001" viewBox="0 0 59.382 22.001"><defs><style>.a{fill:<?php echo $text_color;?>;stroke-width: 2px;stroke: <?php echo $text_color;?>;}</style></defs><path class="a" d="M64.359,40.636h-53.8l7.646-7.646a1.033,1.033,0,1,0-1.461-1.461l-9.3,9.3a1.03,1.03,0,0,0-.439.843c0,.005,0,.01,0,.016s0,.022,0,.033a1.025,1.025,0,0,0,.056.289,1,1,0,0,0,.075.165,1.037,1.037,0,0,0,.088.132.97.97,0,0,0,.079.119l9.5,9.5a1.033,1.033,0,1,0,1.461-1.461L10.515,42.7H64.359a1.033,1.033,0,0,0,0-2.067Z" transform="translate(65.892 52.727) rotate(180)"/></svg>
          </a>

        <?php } ?>
        </div>       
        <div class="fullbleed_content_image right_block" style="background-image: url(<?php echo  $image ['url'] ; ?>);"></div>
        </div> 
    <?php endif; ?>

    

