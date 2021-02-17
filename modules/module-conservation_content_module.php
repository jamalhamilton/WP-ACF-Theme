
<?php
$color = get_sub_field('color');
$text_color=get_sub_field('text_color');
$title = get_sub_field('title');
$bannerimage = get_sub_field('image');
$body = get_sub_field('body');
?>


<div class="content-flexible">
    <div class="conservation_banner_image ">
      <img src="<?php echo  $bannerimage ['url'] ; ?>">
</div>
    <div class="conservation_content" style="background-color:<?php echo $color;?>">
    <div class="main_title"><h2 style="color:<?php echo $text_color;?>"><?php echo $title; ?></h2>
    <?php echo $body; ?>
  </div>
    
    <?php if( have_rows('project_cards') ): $i=0; ?>
      <?php while( have_rows('project_cards') ): the_row(); 
              $i++;
                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $body = get_sub_field('body');
                $link = get_sub_field('link');
        ?>  
        <div class="left_block <?php if($i%3==0){echo "last"; $i=0;} ?>">
        <?php if(empty($bannerimage)): ?>
              <?php if(!empty($image)): ?>
              <div class="card_image" style="background-image: url(<?php echo  $image ['url'] ; ?>);"></div>
              <?php endif; ?>
          <?php endif; ?>
          <h2 style="color:<?php echo $text_color;?>"><?php echo $title; ?></h2>
          <?php if(!empty($bannerimage)): ?>
              <p style="color:<?php echo $text_color;?>"><?php echo $body; ?></p>
            <?php endif; ?>
          <a style="color:<?php echo $text_color;?>" class="conservation_contentlink" href="<?php echo $link; ?>"> Learn More <i class="fas fa-long-arrow-alt-right"></i>
          </a>
       
              
    </div>  

<?php endwhile;
 endif; ?>

        </div>  
</div>

    

