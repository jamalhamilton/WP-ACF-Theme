<script>
    jQuery(document).ready(function() {
    jQuery(".faqaccord .faq_set:first-child").addClass("active");
    jQuery(".faqaccord .faq_set:first-child a").addClass("active");  
    jQuery(".faq_set > a").on("click", function() {
    if (jQuery(this).hasClass("active")) {
		jQuery(this).removeClass("active");
		jQuery(this).siblings(".faq_content").slideUp(200);
		jQuery(".faq_set > a i").removeClass("minus-icon").addClass("plus-icon");
    } else {
		jQuery(".faq_set > a i").removeClass("minus-icon").addClass("plus-icon");
		jQuery(this).find("i").removeClass("plus-icon").addClass("minus-icon");
		jQuery(".faq_set > a").removeClass("active");
		jQuery(this).addClass("active");
		jQuery(".faq_content").slideUp(200);
		jQuery(this).siblings(".faq_content").slideDown(200);
    }
	return false;
  });
});
</script>
<?php
$settings = get_sub_field('settings');
$title = get_sub_field('title');
if( have_rows('accordions') ): ?>
<div class="faq_accordion_section">
<div class="accordion-container">
    
    <div class="content-flexible">
    <h2 class="faq_title"><?php echo $title; ?></h2>
    <div class="faqaccord">
        <?php while( have_rows('accordions') ): the_row();
                $subtitle = get_sub_field('title'); 
        ?>  
    <div class="faq_set">
        <a href="#">
           <?php echo $subtitle; ?>
            <i class="fa fa-pluss plus-icon"></i>
        </a>
        <div class="faq_content">        
            <?php if( have_rows('questions') ): ?>
            <ul class="faq_events_section">
                <?php while( have_rows('questions') ): the_row();
                $question = get_sub_field('question');
                $answer = get_sub_field('answer');
                ?>                 
                <li>
                   <div class="event_detail_section">
                      <div class="event_detail">
                        <h2 class="event_title"><?php echo $question; ?></h2>
                        <div class="event_detail"><?php echo $answer; ?></div>
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

</div>
<?php endif; ?>