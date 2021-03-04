
<?php
$color = get_sub_field('color');
$text_color=get_sub_field('text_color');
?>


<div class="content-flexible">
    <div class="fullbleed_grid_3column" style="background-color:<?php echo $color;?>">
    <?php if( have_rows('locations') ): $i=0; ?>
      <?php while( have_rows('locations') ): the_row(); 
              $i++;
                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $link = get_sub_field('link');               
        ?>  
        <div class="left_block <?php if($i%3==0){echo "last"; $i=0;} ?>">
          <div class="overlay"></div>
          <div class="card_image" style="background-image: url(<?php echo  $image ['url'] ; ?>);">
                <h2><a style="color:<?php echo $text_color;?>" class="fullbleed_grid_3columnlink" href="<?php print_r($cta['url']); ?>">
                  <?php echo $title; ?></a>
                </h2>
          </div>              
        </div>  

<?php endwhile;
 endif; ?>

        </div>  
</div>

    

