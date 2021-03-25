<?php
$color = get_sub_field('color');
$text_color=get_sub_field('text_color');
$headline_copy = get_sub_field('title');
$body_copy = get_sub_field('copy');
$form_shortcode = get_sub_field('form');
?>


<style>
    .flexible_content_with_text .intro_text p{color:<?php echo $text_color; ?>}
</style>

<div class="content-flexible">

<div class="flexible_content_with_text" style="background-color:<?php echo $color;?>">

<?php if (!empty($headline_copy)) { ?>
<h2 style="color:<?php echo $text_color; ?>"><?php echo $headline_copy; ?></h2>
<?php } ?>


  <?php if (!empty($body_copy)) {
    echo '<div>';
    echo $body_copy;
    echo '</div>';
  } ?>



  <?php if (!empty($form_shortcode)) {
    if ( is_ssl() ) {
      echo '<div>';
      echo $form_shortcode;
      echo '</div>';
    } else {
      echo 'FORM ERROR: No SSL';
    }

  } ?>



</div>
</div>
