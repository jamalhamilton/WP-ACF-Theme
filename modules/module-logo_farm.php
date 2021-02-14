<?php
 if( have_rows('logos') ): ?>
  <div class="farm_logos_section">
    <div class="content-flexible">
    <ul class="farm_logos">
    <?php while( have_rows('logos') ): the_row(); 
             $image = get_sub_field('image');
             $alt_text = get_sub_field('alt_text');
             $link = get_sub_field('link');
              
                 if(! empty( $image['url'])):
        ?>
        <li>

            <?php  if(! empty($link)):?>
            <a href="<?php echo $link; ?>" target="_blank"><img src="<?php echo $image['url']; ?>" alt="<?php echo $alt_text; ?>"></a>
            <?php else:?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $alt_text; ?>">
             <?php endif; ?>
           
        </li>
    <?php  endif; endwhile; ?>
    </ul>
  </div>
  </div>
<?php endif; ?>
 