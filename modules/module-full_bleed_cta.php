
<?php
$settings = get_sub_field('settings');
$headline = get_sub_field('headline');
$image = get_sub_field('image');
$copy = get_sub_field('copy');
$cta = get_sub_field('cta');
?>


<?php if(empty($image)): ?>
  <div class="fullbleed_with_text">
	  <div class="intro_text">
	  	<h2><?php echo $headline; ?></h2>
      <p><?php echo $copy; ?></p>
      <?php if(!empty($cta)){ ?>          
        <a class="fullbleed_cta_link" href="<?php print_r($cta['url']); ?>"><?php print_r($cta['title']); ?> <i class="fas fa-long-arrow-alt-right"></i></a>
    <?php } ?>
     </div>
	  </div>
   <?php elseif(!empty($image)):?>
    <div class="fullbleed_with_text image">
        <div class="intro_text left_block">
          <h2><?php echo $headline; ?></h2>
          <?php if(!empty($cta)){ ?>          
            <a class="fullbleed_cta_link" href="<?php print_r($cta['url']); ?>"><?php print_r($cta['title']); ?> <i class="fas fa-long-arrow-alt-right"></i></a>
        <?php } ?>
        </div>       
        <div class="fullbleed_image right_block" style="background-image: url(<?php echo  $image ['url'] ; ?>);"></div>
        </div>  
    <?php endif; ?>

    

