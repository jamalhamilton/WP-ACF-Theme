<?php
$color = get_sub_field('color');
$text_color=get_sub_field('text_color');
$featured_image = get_sub_field('featured_image');
$headline_copy = get_sub_field('headline_copy');
$body_copy = get_sub_field('body_copy');
$body_copy_2nd_column = get_sub_field('body_copy_2nd_column'); ?>
<style>
    .flexible_content_with_text .intro_text p{color:<?php echo $text_color; ?>}
</style>
<div class="content-flexible">
<?php if(! empty($featured_image ['url'])): ?>
<div class="flexible_content_hero_image" style="background-image: url(<?php echo  $featured_image ['url'] ; ?>);"></div>
<?php endif; ?>

<div class="flexible_content_with_text" style="background-color:<?php echo $color;?>">
	  <div class="intro_text">
        <?php/* if(!empty($body_copy_2nd_column)): ?>
          <div class="half_width"><?php echo $body_copy; ?></div>
        <?php elseif(empty($body_copy_2nd_column)): ?>
            <?php echo $body_copy; ?>
        <?php endif; ?>
          <?php echo $body_copy_2nd_column; */?>
          <?php
          if(!empty($body_copy_2nd_column)) { ?>
            <div class="half_width" style="float: left;padding-right: 15px;">
              <h2 style="color:<?php echo $text_color; ?>"><?php echo $headline_copy; ?></h2>
              <?php echo $body_copy; ?></div>
            <div class="half_width" style="float: left;padding-left: 15px;"><?php echo $body_copy_2nd_column; ?></div>
          <?php
            } else {
            ?>
              <h2 style="color:<?php echo $text_color; ?>"><?php echo $headline_copy; ?></h2>
            <?php
              echo $body_copy;
            }
          ?>
	  </div>
</div>
</div>
