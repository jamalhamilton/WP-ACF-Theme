<?php
$color = get_sub_field('color');
$text_color=get_sub_field('text_color');
$title = get_sub_field('title');
?>
<?php if(have_rows('tabs')):?>
<div class="tabbed_content" style="background-color:<?php echo $color; ?>">
	<div class="content-flexible">
		
		<div class="tabbed_content_section">
			
			<div class="tabbed_left_side">
				<h2><?php echo $title; ?></h2>
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<?php $k=1; while( have_rows('tabs') ): the_row();
					$title = get_sub_field('title');
					$result = preg_replace("/[^a-zA-Z]+/", "", $title);
					$string = strtolower( str_replace(' ', '', $result));
					?>
					<li class="nav-item" role="presentation">
						<button class="nav-link <?php if($k == 1) {?>active<?php }?>" id="<?php echo $string; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $string; ?>" type="button" role="tab" aria-controls="<?php echo $string; ?>" aria-selected="<?php if($k == 1) {?>true<?php } else{?>false <?php }?>">
						<?php echo   $title; ?>
						</button>
					</li>
					<?php  $k++; endwhile; ?>
				</ul>
			</div>
			<div class="tabbed_right_side">
				<div class="tab-content" id="myTabContent">
					<?php $k=1; while( have_rows('tabs') ): the_row();
					$title = get_sub_field('title');
					$location = get_sub_field('location');
					$body = get_sub_field('body');
					$cta = get_sub_field('cta');
					$image = get_sub_field('image');
					$result = preg_replace("/[^a-zA-Z]+/", "", $title);
					$string = strtolower( str_replace(' ', '', $result));
					?>
					<div class="tab-pane <?php if($k == 1) {?> show active<?php }?>" id="<?php echo $string; ?>" role="tabpanel" aria-labelledby="<?php echo $string; ?>-tab"> 
						
					<?php
					if(! empty( $image['url'])):
					?>
					<figure>
						<?php echo wp_get_attachment_image( $image['ID'], 'tabbed_content_img' ); ?>
					</figure>
					<div class="tabbed_box_content">
						<h3><?php echo   $title; ?></h3>
						 <div class="tabbed_location"><strong>Location:</strong> <?php echo $location; ?></div>
						<p> <?php echo $body; ?></p>
						 
<span> <a href="<?php echo $cta['url'];?>" class="learn_more">Learn More </a>
	<img src="<?php bloginfo('template_url')?>/assets/images/arrow_white.svg" alt=""></span>						 
					</div>
					<?php endif; ?>
					</div>

					
					<?php  $k++; endwhile; ?>
				</div>
			</div>
			
		</div>
		
	</div>
</div>
</div>
<?php endif; ?>