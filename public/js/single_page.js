$(".comment_form").validate({
    rules: {
        comment: {
            required: true
        }
    },
    submitHandler: function (form) {
        $.ajax({
            url: $(".comment_form").attr('action'),
            type: $(".comment_form").attr('method'),
            data: $(".comment_form").serialize(),
            success: function (data) {
                if (data['success']) {
                    $('.comment_form').css('display','none').find('[name="comment"]').val('');
                    $('.contact_form_container').append('' +
                        '<div class="row comment_success">' +
                        '<div class="col-sm-12 text-center">' +
                        data['success'] +
                        '</div>' +
                        '</div>' +
                        '');

                } else {
                    window.location.href = 'not-found';
                }
            },
            error: function (data) {
                window.location.href = 'not-found';
            }
        });
    }
});
$(document).on('click', '.again_comment', function () {
    $('.comment_success').remove();
    $('.comment_form').fadeIn();
});

(function ($) {
    "use strict";
    $('a[data-gal]').each(function () {
        $(this).attr('rel', $(this).data('gal'));
    });
    $("a[data-rel^='prettyPhoto']").prettyPhoto({
        animationSpeed: 'slow',
        theme: 'light_square',
        slideshow: true,
        overlay_gallery: true,
        social_tools: false,
        deeplinking: false
    });
})($);


$('.product_filter').change(function () {
   var value = $(this).val();
    url = $(this).data('href');
    prod = $(this).data('prod');
   filter = [];
   if (value){
       $('.product_filter').each(function (i) {
          if ($(this).val()){
              filter.push($(this).val());
          }
       });
       $.ajax({
           url:url,
           type:'post',
           data:{filter:filter, prod:prod, _token:token},
           success:function (e) {
               if (e['price']){
                   $('.prod_price').text(e['price'])
               }
           }
       })
   }
});
$('.prod_color').click(function () {
    $('.prod_color_active').removeClass('prod_color_active').addClass('prod_color');
    $(this).removeClass('prod_color').addClass('prod_color_active');

});
