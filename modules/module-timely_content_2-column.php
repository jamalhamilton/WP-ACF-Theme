
<?php
$color = get_sub_field('color');
$text_color=get_sub_field('text_color');
$title = get_sub_field('title');
?>


<div class="content-flexible">
    <div class="timely_content_2column" style="background-color:<?php echo $color;?>">
    <div class="main_title"><h2 style="color:<?php echo $text_color;?>"><?php echo $title; ?></h2></div>
    <?php if( have_rows('initiative_cards') ): $i=0; ?>
      <?php while( have_rows('initiative_cards') ): the_row(); 
              $i++;
                $image = get_sub_field('image');
                $subtitle = get_sub_field('title');
                $cta = get_sub_field('cta');
        ?>  
        <div class="left_block <?php if($i%2==1){echo "left";} else{echo "right";} ?>">
        <div class="card_image" style="background-image: url(<?php echo  $image ['url'] ; ?>);">
      <img src="<?php //echo  $image ['url'] ; ?>"></div>
      
          <h3 style="color:<?php echo $text_color;?>"><?php echo $subtitle; ?></h3>
          <a style="color:<?php echo $text_color;?>" class="timely_content_2columnlink" href="<?php print_r($cta['url']); ?>">
            <?php print_r($cta['title']); ?> <i class="fas fa-long-arrow-alt-right"></i>
          </a>
       
              
    </div>  

<?php endwhile;
 endif; ?>

        </div>  
</div>

    

