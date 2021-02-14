
<?php
$color = get_sub_field('color');
$text_color=get_sub_field('text_color');
$left_title = get_sub_field('left_title');
$left_copy = get_sub_field('left_copy');
$left_cta = get_sub_field('left_cta');
$right_title = get_sub_field('right_title');
$right_copy = get_sub_field('right_copy');
$right_cta = get_sub_field('right_cta');
?>



    <div class="fullbleed_with_text5050" style="background-color:<?php echo $color;?>">
        <div class="left_block">
          <h2 style="color:<?php echo $text_color;?>"><?php echo $left_title; ?></h2>
          <p style="color:<?php echo $text_color;?>"><?php echo $left_copy; ?></p>
          <?php if(!empty($left_cta)){ ?>          
            <a style="color:<?php echo $text_color;?>" class="fullbleed_cta_link5050" href="<?php print_r($left_cta['url']); ?>"><?php print_r($left_cta['title']); ?> <i class="fas fa-long-arrow-alt-right"></i></a>
        <?php } ?>
        </div>       
        <div class="right_block">        
          <h2 style="color:<?php echo $text_color;?>"><?php echo $left_title; ?></h2>
          <p style="color:<?php echo $text_color;?>"><?php echo $left_copy; ?></p>
          <?php if(!empty($left_cta)){ ?>          
            <a style="color:<?php echo $text_color;?>" class="fullbleed_cta_link5050" href="<?php print_r($left_cta['url']); ?>"><?php print_r($left_cta['title']); ?> <i class="fas fa-long-arrow-alt-right"></i></a>
        <?php } ?>      
        </div>  


    

