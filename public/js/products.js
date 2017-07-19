var token = $('meta[name="csrf-token"]').attr('content');
$(document).on('click', '.products_filter', function () {
    var filter = [];
    $(".filter-loader-container").fadeIn();
    $('.products_filter').attr('disabled', true);
    $(".products_filter").each(function (i) {
        if($(this).is(':checked')){
            filter.push($(this).val());
        }
    });
    var url = $('.filter_href').data('href');
    var cat = $('.filter_href').data('cat');
    $.ajax({
        url:url,
        type:'post',
        data:{filter:filter, cat:cat, _token:token},
        success:function (e) {
            $('.shop-list').html('e');

        }
    });
    $(".filter-loader-container").fadeOut();
    $('.products_filter').attr('disabled', false);
});