var token = $('meta[name="csrf-token"]').attr('content');

$(document).on('click', '#searchButton', function () {

    var search = $('#searchArea').val();
    var url = $(this).data('result_page');

    $.ajax({
        url:url,
        type:'get',
        data:{search: search, _token: token},

        success: function (e) {

            alert(11);
        }
    });
});