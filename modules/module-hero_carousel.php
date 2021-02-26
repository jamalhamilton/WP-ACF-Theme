<style>
@import "https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/flexslider.min.css";
.flex-control-nav {width: 10%; position: absolute; bottom: 40px; text-align: center; background: rgb(0 0 0 / 70%); margin: 0 45%; padding: 4px; border-radius: 15px;}
.flex-control-nav li {    margin: 6px 6px; display: inline-block; zoom: 1;}
.flex-control-paging li a { width: 14px; height: 14px; border: 3px solid #fff; background: rgb(0 0 0 / 0%);}
.flex-control-paging li a.flex-active { background: rgb(255 255 255); }

.flexslider .slides img {
    height: 655px;
}
</style>
<?php 
$color = get_sub_field('color');
$text_color=get_sub_field('text_color');
$images = get_sub_field('images');
?>
<div class="content-flexible">
<?php 
if( $images ): ?>
    <div id="slider" class="flexslider">
        <ul class="slides">
            <?php foreach( $images as $image ): ?>
                <li>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </li>
            <?php endforeach; ?>
        </ul>
    </div>   
<?php endif; ?>


<script type="text/javascript">
	$('.flexslider').flexslider({
		animation: "slide",
		directionNav: false
	});
</script>