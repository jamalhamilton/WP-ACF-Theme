<?php 
$color = get_sub_field('color');
$text_color=get_sub_field('text_color');
$title = get_sub_field('title');
$body = get_sub_field('body');
$cta = get_sub_field('cta');
$image = get_sub_field('image');


?>
    <div class="left_content_right_image_cta_2">
        <div class="intro_text left_block" style="background-color:<?php echo $color; ?>">
        <h2 style="color:<?php echo $text_color; ?>"><?php echo $title; ?></h2>
          <p style="color:<?php echo $text_color; ?>"><?php echo $body; ?></p>
          <?php if(!empty($cta)){ ?>          
            <a class="contained_cta_link" style="color:<?php echo $text_color; ?>" href="<?php print_r($cta['url']); ?>"><?php print_r($cta['title']); ?> <i class="fas fa-long-arrow-alt-right"></i></a>
          <?php } ?>          
        </div>       
        <div class="contained_cta right_block" style="background-image: url(<?php echo  $image ['url'] ; ?>);">
          <!-- <img src="<?php echo  $image ['url'] ; ?>"> -->
        </div>
      </div>  