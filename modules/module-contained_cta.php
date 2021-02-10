<section class="container">

<?php if( get_row_layout() == 'contained_cta' ): ?>        
  <div class="left-half">
    <article>
    <?php if(get_sub_field('vertical_title')!=''){ ?>
      <h2 class="verticle_title"><?php  echo the_sub_field('vertical_title'); ?></h2>
    <?php } ?>
    <?php if(get_sub_field('headline')!=''){ ?> 
      <h1><?php echo the_sub_field('headline'); ?></h1>
    <?php } ?> 
    <?php if(get_sub_field('copy')!=''){ ?>   
      <p><?php echo the_sub_field('copy'); ?></p> 
    <?php } ?>    
    <?php if(get_sub_field('cta')!=''){ ?>  
        <?php $array= get_sub_field('cta'); ?>  
        <a class="cta_link" href="<?php print_r($array['url']); ?>"><?php print_r($array['title']); ?></a>
    <?php } ?>
    </article>
  </div>
  <div class="right-half">
    <?php if(get_sub_field('image')!=''){ ?>
        <?php  $image = get_sub_field('image'); ?>
        <?php echo wp_get_attachment_image($image); ?>
    <?php } ?>    
  </div> 
  <?php endif; ?> 
  
</section>