var token = $('meta[name="csrf-token"]').attr('content');

$(".messageSend").click(function () {
    var text = $(".messageText").val();
    var url = $(this).data('href');
    $.ajax({
        url: url,
        type: 'post',
        data: {text: text, _token: token},
        success: function (e) {
            message(e);
        }
    })
});

function message(e) {
    if (e['user_id'] == 1) {
        var message = '<li class="right clearfix">' +
            '<div class="chat-body clearfix">' +
            '<div class="">' +
            '<small class=" text-muted"><span class="glyphicon glyphicon-time"></span>' + e['created_at'] + '</small>' +
            '<strong class="pull-right primary-font">Admin</strong>' +
            '</div>' +
            '<p>' + e['text'] + '</p>' +
            '</div>' +
            '</li>'
    } else {
        var message = '<li class="left clearfix">' +
            '<div class="chat-body clearfix">' +
            '<div class="">' +
            '<small class=" text-muted"><span class="glyphicon glyphicon-time"></span>' + e['created_at'] + '</small>' +
            '</div>' +
            '<p>' + e['text'] + '</p>' +
            '</div>' +
            '</li>'
    }
    $('.chat').append(message);

}