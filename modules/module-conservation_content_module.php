
<?php
$color = get_sub_field('color');
$text_color=get_sub_field('text_color');
$title = get_sub_field('title');
$bannerimage = get_sub_field('image');
$body = get_sub_field('body');
?>


<div class="content-flexible">
  <?php if($bannerimage ['url']): ?>
    <div class="conservation_banner_image" style="background-image: url('<?php echo  $bannerimage ['url'] ; ?>');height: 655px;">
      <!-- <img src="<?php echo  $bannerimage ['url'] ; ?>"> -->
      <?php endif; ?>
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
                //print_r($image['url']);
        ?>  
        <div class="left_block <?php if($i%3==0){echo "last"; $i=0;} ?> <?php if($i==1){echo "first"; } ?>">
        <h2 style="color:<?php echo $text_color;?>"><?php echo $title; ?></h2>
        <?php if(empty($bannerimage)): ?>
              <?php if(!empty($image['url'])): ?>
              <div class="card_image" style="background-image: url('<?php echo $image ['url'] ; ?>');"></div>
              <?php endif; ?>
          <?php endif; ?>
          
          <?php if(!empty($bannerimage)): ?>
              <p style="color:<?php echo $text_color;?>"><?php echo $body; ?></p>
            <?php endif; ?>
          <a style="color:<?php echo $text_color;?>" class="conservation_contentlink" href="<?php echo $link; ?>"> Learn More 
            <svg xmlns="http://www.w3.org/2000/svg" width="59.382" height="22.001" viewBox="0 0 59.382 22.001"><defs><style>.c{fill:<?php echo $text_color;?>;stroke-width: 2px;stroke: <?php echo $text_color;?>;}</style></defs><path class="c" d="M64.359,40.636h-53.8l7.646-7.646a1.033,1.033,0,1,0-1.461-1.461l-9.3,9.3a1.03,1.03,0,0,0-.439.843c0,.005,0,.01,0,.016s0,.022,0,.033a1.025,1.025,0,0,0,.056.289,1,1,0,0,0,.075.165,1.037,1.037,0,0,0,.088.132.97.97,0,0,0,.079.119l9.5,9.5a1.033,1.033,0,1,0,1.461-1.461L10.515,42.7H64.359a1.033,1.033,0,0,0,0-2.067Z" transform="translate(65.892 52.727) rotate(180)"/></svg>
          </a>
       
              
    </div>  

<?php endwhile;
 endif; ?>

        </div>  
</div>

    

