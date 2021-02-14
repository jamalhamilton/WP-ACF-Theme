<?php 
$color = get_sub_field('color');
$text_color=get_sub_field('text_color');
$body = get_sub_field('body');

?>
<?php if(! empty($body)):?>
<div class="module_contact_us" style="background-color:<?php echo $color; ?>">
	<div class="content-flexible">
		<div class="contact_us_module_content">
			<?php echo $body; ?>
		</div>
</div>
<?php endif; ?>