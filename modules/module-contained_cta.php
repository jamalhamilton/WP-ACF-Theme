<?php 
$settings = get_sub_field('settings');
$headline = get_sub_field('headline');
$vertical_title = get_sub_field('vertical_title');
$copy = get_sub_field('copy');
$cta = get_sub_field('cta');
$image = get_sub_field('image');


?>
    <div class="contained_cta">
        <div class="intro_text left_block">
        <?php if(!empty($vertical_title)): ?>
        <div class="vertcial_text">
	          	<span><?php echo $vertical_title; ?></span>
	      </div>        
        <?php endif; ?>
        <h2><?php echo $headline; ?></h2>
          <p><?php echo $copy; ?></p>
          <?php if(!empty($cta)){ ?>          
            <a class="contained_cta_link" href="<?php print_r($cta['url']); ?>"><?php print_r($cta['title']); ?> <i class="fas fa-long-arrow-alt-right"></i></a>
          <?php } ?>
          
        </div>       
        <div class="contained_cta right_block" style="background-image: url(<?php //echo  $image ['url'] ; ?>);">
      <img src="<?php echo  $image ['url'] ; ?>">


    </div>
        </div>  