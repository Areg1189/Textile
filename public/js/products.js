$(document).on('click', '.products_filter',function () {
    $(".filter-loader-container").fadeIn();
    $('.products_filter').attr('disabled', true);
})