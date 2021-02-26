
<?php
$color = get_sub_field('color');
$text_color=get_sub_field('text_color');
$title = get_sub_field('title');
?>


<div class="content-flexible">
    <div class="timely_content_3column" style="background-color:<?php echo $color;?>">
    <div class="main_title"><h2 style="color:<?php echo $text_color;?>"><?php echo $title; ?></h2></div>
    <?php if( have_rows('article_cards') ): $i=0; ?>
      <?php while( have_rows('article_cards') ): the_row(); 
              $i++;
                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $body = get_sub_field('body');
                $cta = get_sub_field('cta');
        ?>  
        <div class="left_block <?php if($i%3==0){echo "last"; $i=0;} ?> <?php if($i==1){echo "first";} ?>">
        <div class="card_image" style="background-image: url(<?php echo  $image ['url'] ; ?>);"></div>
      
          <h3 style="color:<?php echo $text_color;?>"><?php echo $title; ?></h3>
          <p style="color:<?php echo $text_color;?>"><?php echo $body; ?></p>
          <a style="color:<?php echo $text_color;?>" class="timely_content_3columnlink" href="<?php print_r($cta['url']); ?>"><?php print_r($cta['title']); ?> <i class="fas fa-long-arrow-alt-right"></i>
          </a>
       
              
    </div>  

<?php endwhile;
 endif; ?>

        </div>  
</div>

    

