jQuery(document).ready(function($){
  function ccCloseModal() {
    $('.ccModal').remove();
    $('body').removeClass('noscroll');
  }

  function ccModal(content) {
    $('.ccModal').append(content);
    $('.ccModal').addClass('loaded');
  }




  $(".weather-popup").click(function (event) {
    event.preventDefault();
    var id_post = $(this).data('weather-popup');
    $('body').addClass('noscroll');
    $('body').append("<div class='ccModal'><button class='ccCloseModal'>X</button></div>");
    $('.ccCloseModal').click(function(){
      ccCloseModal();
    });
    console.log(id_post);
    $.ajax( {
        type: 'POST',
        url: WPURLS.ajaxurl,
        data: {
            'post_id': id_post,
            'action': 'f711_get_post_content' //this is the name of the AJAX method called in WordPress
        },
        success: function (result) {
           ccModal(result);
        },
        error: function () {
            alert("error");
        }
    } );
  });
});
