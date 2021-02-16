<?php
$settings = get_sub_field('settings');

if( have_rows('accordians') ): ?>
<div class="events_accordion_section">
<div class="accordion-container">
    <div class="content-flexible">
        <?php while( have_rows('accordians') ): the_row();
        $title = get_sub_field('title');
        $body = get_sub_field('body');
        ?>  
    <div class="set">
        <a href="#">
           <?php echo $title; ?>
            <i class="fa fa-pluss plus-icon"></i>
        </a>
        <div class="content">
            <p><?php echo $body; ?></p>
            <?php if( have_rows('events') ): ?>
            <ul class="events_section">
                <?php while( have_rows('events') ): the_row();
                $title = get_sub_field('title');
                $link = get_sub_field('link');
                $virtual_event = get_sub_field('virtual_event');
                $by = get_sub_field('by:');
                $date = get_sub_field('date');
                ?>                 
                <li>
                   <div class="event_detail_section">
                    
                      <figure>
                        <?php if($virtual_event == 1) :?>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/virtual_event.png" alt="virtual_event">
                        <?php endif; ?>
                      </figure>

                      <div class="event_detail">
                        <span class="event_title"><?php echo $title; ?></span>
                        <span class="event_author">by <?php echo $by; ?></span>
                        <span class="event_date"><?php echo $date; ?></span>
                      </div>
                   </div> 
                </li>
                <?php   endwhile; ?>
            </ul>
        <?php endif; ?>
        </div>
    </div>
   <?php   endwhile; ?>
</div>
</div>

</div>
<?php endif; ?>