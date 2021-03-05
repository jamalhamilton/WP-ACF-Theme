<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script>
    jQuery(document).ready(function() {
      jQuery(".leadership_tab .leadership_set:first-child").addClass("active");
      jQuery(".leadership_tab .leadership_set:first-child a").addClass("active");  
      jQuery(".leadership_set > a").on("click", function() {
          if (jQuery(this).hasClass("active")) {
        		jQuery(this).removeClass("active");
        		jQuery(this).siblings(".faq_contenta").slideUp(200);
        		jQuery(".leadership_set > a i").removeClass("minus-icon").addClass("plus-icon");
          } else {
        		jQuery(".leadership_set > a i").removeClass("minus-icon").addClass("plus-icon");
        		jQuery(this).find("i").removeClass("plus-icon").addClass("minus-icon");
        		jQuery(".leadership_set > a").removeClass("active");
        		jQuery(this).addClass("active");
        		jQuery(".faq_contenta").slideUp(200);
        		jQuery(this).siblings(".faq_contenta").slideDown(200);
          }
      	return false;
      });
    });
</script>
<style>
  .close { float: right; font-size: 60px; font-weight: 100; line-height: 1; color: #fff; opacity: 1; margin: -53px -47px;}
  .modal-dialog { margin: 5% auto; }
  .modal-body { padding: 0px;}
.container-fluid { padding-right: 0px; padding-left: 0px;}
.col-md-7.ml-auto { padding: 25px 102px;}
h1.popupname { margin-top: 66px;font-size: 55px; color: #000;font-family: "Swiss721BT-Bold";line-height: 66px;letter-spacing: 1.1px;}
h3.popup-title {margin-top: 0;margin-bottom: 30px; font-size: 35px;color: #000;line-height: 42px;letter-spacing: 0.88px;font-family: "Swiss721BT-Regular";}
p.popupbio { font-size: 22px!important; margin: 0 0 45px 0!important;marcolor: #000;line-height: 45px !important;letter-spacing: 0.55px;font-family: "Swiss721BT-Regular";}
span.popupsocial { float: left; margin: 20px 7px;}
span.popupsocial img{width: 30px;height: 24px; }
a.btn.btn-primary.active {background-color: #fff; border: 0; box-shadow: none;padding: 0px 0px;
    margin: 0px 0px;}
    .modal-dialog.modal-lg {
      width:1288px !important;
    }
    .modal-dialog.modal-lg .modal-body {
      height: 803px;
    }
    .popupimage, .popupimage {
      height: 803px;
      width: 536px;
      background-size: cover;
      background-position: center;
    }

</style>
<?php
$settings = get_sub_field('settings');
if( have_rows('accordions') ): ?>
<div class="leadership_accordion_section">
<div class="accordion-container">
    
    <div class="content-flexible">
    <div class="leadership_tab">
        <?php while( have_rows('accordions') ): the_row();
                $subtitle = get_sub_field('title'); 
        ?>  
    <div class="leadership_set">
        <a href="#">
           <?php echo $subtitle; ?>
            <i class="fa fa-pluss plus-icon"></i>
        </a>
        <div class="faq_contenta">        
            <?php if( have_rows('people') ): ?>
            <ul class="faq_events_section">
                <?php $k=0;
                while( have_rows('people') ): the_row();
                $k++;
                $name = get_sub_field('name');
                $title2 = get_sub_field('title');
                $bio = get_sub_field('bio');                
                $image = get_sub_field('image');
                ?>                 
                <li>
                   <div class="event_detail_section">
                      <div class="event_detail">
                      <h2 class="event_title">
                        <?php 
                          $visible = "visibility: hidden;";
                        if(!empty($bio)) {
                          $visible = "visibility: visible;";
                        } ?> 
                        <a href="#exampleModalCenter-<?php echo $k; ?>" style="margin-right: 3px;" class="btn btn-primary" data-toggle="modal" >

                          <img class="eyeicon" style="<?php echo $visible; ?>" src="<?php bloginfo('template_url')?>/assets/images/noun_Eye_585509.svg" alt=""></a>
                        
                        
                              <?php echo $name; ?>
                      </h2>
                        <p><?php echo $title2; ?></p>

                      <!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter-<?php echo $k; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter-<?php echo $k; ?>Title" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <div class="modal-body">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-5 ml-auto col-xs-12">
           <div class="popupimage" style="background-image: url('<?php echo  $image ['url'] ; ?>');">
            <!-- <img src="<?php echo  $image ['url'] ; ?>"> -->
          </div>           
        </div>
        <div class="col-md-7 ml-auto col-xs-12">
        <h1 class="popupname"><?php echo $name; ?></h1>
      <h3 class="popup-title"><?php echo $title2; ?></h3>
      <p class="popupbio"><?php echo $bio; ?></p>
      <?php if( have_rows('social_links') ): 
              while( have_rows('social_links') ): the_row();
              $url = get_sub_field('url');
              $icon = get_sub_field('icon');
              ?>
                <span class="popupsocial"><a href="<?php echo $url; ?>"><img src="<?php echo $icon['url']; ?>"></a></span>
              <?php endwhile; 
              endif; ?>
            </div>
      </div></div>
      
      </div>      
    </div>
  </div>
</div>
 


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