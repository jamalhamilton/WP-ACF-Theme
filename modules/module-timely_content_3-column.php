
<?php
$color = get_sub_field('color');
$text_color=get_sub_field('text_color');
$title = get_sub_field('title');
if(empty($text_color)) {
    $text_color = '#000';  
}
$id = wp_unique_id( 'tc' );
?>


<div class="content-flexible">
    <div class="timely_content_3column" id="<?php echo $id;?>" style="background-color:<?php echo $color;?>">
    <div class="main_title"><h2 style="color:<?php echo $text_color;?>"><?php echo $title; ?></h2></div>
    <?php if( have_rows('article_cards') ): $i=0; ?>
      <?php while( have_rows('article_cards') ): the_row(); 
              $i++;
                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $body = get_sub_field('body');
                $cta = get_sub_field('cta');
        ?>  
        <div class="left_block <?php if($i%3==0){echo "last"; $i=0;} ?> <?php if($i==1){echo "first";} ?>">
          <div class="card_image" style="background-image: url(<?php echo  $image ['url'] ; ?>);"></div>
        
            <h3 style="color:<?php echo $text_color;?>"><?php echo $title; ?></h3>
            <p style="color:<?php echo $text_color;?>"><?php echo $body; ?></p>
            <a style="color:<?php echo $text_color;?>" class="timely_content_3columnlink" href="<?php print_r($cta['url']); ?>"><?php print_r($cta['title']); ?> 
            <svg xmlns="http://www.w3.org/2000/svg" width="59.382" height="22.001" viewBox="0 0 59.382 22.001"><defs><style>.m{fill:<?php echo $text_color;?>;stroke-width: 2px;stroke: <?php echo $text_color;?>;}</style></defs><path class="m" d="M64.359,40.636h-53.8l7.646-7.646a1.033,1.033,0,1,0-1.461-1.461l-9.3,9.3a1.03,1.03,0,0,0-.439.843c0,.005,0,.01,0,.016s0,.022,0,.033a1.025,1.025,0,0,0,.056.289,1,1,0,0,0,.075.165,1.037,1.037,0,0,0,.088.132.97.97,0,0,0,.079.119l9.5,9.5a1.033,1.033,0,1,0,1.461-1.461L10.515,42.7H64.359a1.033,1.033,0,0,0,0-2.067Z" transform="translate(65.892 52.727) rotate(180)"/></svg>
            </a>
      </div>  

<?php endwhile;
 endif; ?>
 <div id="loadMore_<?php echo $id;?>" class="loadMore">Show more results + </div>

        </div>  
</div>

  <style type="text/css">
    .timely_content_3column div.left_block {
      display: none;
    }
    .loadMore {
      cursor: pointer;
      width: 257px;
      height: 47px;
      border: 1px solid #8D8C8C;
      border-radius: 20px;
      opacity: 1;
      margin: 20px auto;
      font-family: "Swiss721BT-Bold";
      font-size: 18px;
      padding: 10px 0;
      text-align: center;
      color: #8D8C8C;
      letter-spacing:0.7px;
    }
  </style>

<script type="text/javascript">
  jQuery(document).ready(function () {

    /*var size_li = jQuery(".timely_content_3column div.left_block").size();
    var x=3;
    if(size_li < 3) {
      jQuery("#loadMore").hide();
    }
    jQuery('.timely_content_3column div.left_block:lt('+x+')').show();
    jQuery('#loadMore').click(function () {
        console.log(size_li);
        x= (x+3 <= size_li) ? x+3 : size_li;

        jQuery('.timely_content_3column div.left_block:lt('+x+')').show();
        if(x == size_li || x > size_li) {
          jQuery("#loadMore").hide();
        }
    });
    if(x == size_li || x > size_li) {
      jQuery("#loadMore").hide();
    }*/
    jQuery("#<?php echo $id;?>"+" div.left_block").size();
    if(jQuery("#<?php echo $id;?>"+" div.left_block").size() < 3 || jQuery("#<?php echo $id;?>"+" div.left_block").size() == 3) {
      jQuery("#loadMore_<?php echo $id;?>").hide();
    }
    jQuery('#<?php echo $id;?>'+' div.left_block:lt('+3+')').show();
    x=3;
    jQuery('#loadMore_<?php echo $id;?>').click(function () {
        x= (x+3 <= jQuery("#<?php echo $id;?>"+" div.left_block").size()) ? x+3 : jQuery("#<?php echo $id;?>"+" div.left_block").size();
        jQuery('#<?php echo $id;?>'+' div.left_block:lt('+x+')').show();
        console.log(x);
        if(x == jQuery("#<?php echo $id;?>"+" div.left_block").size() || x > jQuery("#<?php echo $id;?>"+" div.left_block").size()) {
          jQuery("#loadMore_<?php echo $id;?>").hide();
        }
    });
});
</script>