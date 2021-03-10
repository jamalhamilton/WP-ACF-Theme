<div class="weather-colomn-container">
  <div class="weather-column weather-image-column" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
  <div class="weather-column weather-text-column">
    <h2><?php the_title(); ?></h2>
    <div class="weather-section">
      <h4 class="weather-section-label">Status:</h4>
      <div class="weather-section-body"><?php if (get_field('status')) {echo 'Open';} else {echo 'Closed';} ?></div>
    </div>
    <div class="weather-section">
      <h4 class="weather-section-label">Elevation:</h4>
      <div class="weather-section-body"><?php echo number_format(get_field('elevation'));?>'</div>
    </div>
    <div class="weather-section">
      <?php
      $current_temp = get_field('current_temp');
      $current_celsius = round(($current_temp - 32) * 5 / 9);
      $max_temp = get_field('max_temp');
      $max_celsius = round(($max_temp - 32) * 5 / 9);
      $min_temp = get_field('min_temp');
      $min_celsius = round(($min_temp - 32) * 5 / 9);
      ?>
      <h4 class="weather-section-label">Temperature:</h4>
      <div class="weather-section-body">
        Current: <?php echo $current_temp; ?>°F (<?php echo $current_celsius; ?>°C)<br/>
        Max: <?php echo $max_temp; ?>°F (<?php echo $max_celsius; ?>°C)<br/>
        Min: <?php echo $min_temp; ?>°F (<?php echo $min_celsius; ?>°C)
      </div>
    </div>
    <div class="weather-section">
      <h4 class="weather-section-label">Trails:</h4>
      <div class="weather-section-body"><?php the_field('trails'); ?></div>
    </div>
    <div class="weather-section">
      <h4 class="weather-section-label">Snow:</h4>
      <div class="weather-section-body">
        Past 24 Hours: <?php the_field('snow_past_24'); ?>"<br/>
        Measured Snowpack: <?php the_field('snow_pack'); ?>"
      </div>
    </div>
    <?php
    $link = get_field('info_link');
    if( $link ):
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <div class="weather-section">
          <a class="weather-info-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><img src="<?php echo get_template_directory_uri(); ?>/assets/images/LongArrow.png"></a>
        </div>
    <?php endif; ?>


  </div>
</div>
