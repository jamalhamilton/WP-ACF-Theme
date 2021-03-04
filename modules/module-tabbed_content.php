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
					<div class="tab-pane <?php if($k == 1) {?>  active<?php }?>" id="<?php echo $string; ?>" role="tabpanel" aria-labelledby="<?php echo $string; ?>-tab"> 
						
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
						 
						<span> <a href="<?php echo $cta['url'];?>" class="learn_more">Learn More
							<svg xmlns="http://www.w3.org/2000/svg" width="59.382" height="22.001" viewBox="0 0 59.382 22.001"><defs><style>.k{fill:<?php echo $text_color;?>;stroke-width: 2px;stroke: <?php echo $text_color;?>;}</style></defs><path class="k" d="M64.359,40.636h-53.8l7.646-7.646a1.033,1.033,0,1,0-1.461-1.461l-9.3,9.3a1.03,1.03,0,0,0-.439.843c0,.005,0,.01,0,.016s0,.022,0,.033a1.025,1.025,0,0,0,.056.289,1,1,0,0,0,.075.165,1.037,1.037,0,0,0,.088.132.97.97,0,0,0,.079.119l9.5,9.5a1.033,1.033,0,1,0,1.461-1.461L10.515,42.7H64.359a1.033,1.033,0,0,0,0-2.067Z" transform="translate(65.892 52.727) rotate(180)"/></svg>
 						</a></span>						 
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