var token = $('meta[name="csrf-token"]').attr('content');

$("#messageSend").submit(function (event) {
    event.preventDefault();
    var text = $(".messageText").val();
    var url = $(this).attr('action');
    if (!text) {
        return false
    } else {
        $(".messageText").val('');
    }
    $.ajax({
        url: url,
        type: 'post',
        data: {text: text, _token: token},
        success: function (e) {
            messge(e);
        }
    })
});

function messge(e) {
    if (e['user_id'] != 1) {
        var message = '' +
            '<li class="right clearfix msg" data-message="'+e['id']+'">' +
            '<div class="chat-body clearfix">' +
            '<div class="">' +
            '<strong class="pull-right primary-font">' +
            // e['user']['name'] +
            '</strong>' +
            '<div class="col-sm-12">' +
            '<div class="pull-right text-muted">' +
            '<span class="glyphicon glyphicon-time"></span>' + e['created_at'] +
            '</div>' +
            '</div>' +
            '<div class="col-sm-6 col-sm-offset-6">' +
            '<div class="pull-right ">' +
            '<p>' + e['text'] + '</p>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</li>'
    } else {
        var message = '' +
            '<li class=" left clearfix msg" data-message="'+e['id']+'">' +
            '<div class="chat-body clearfix">' +
            '<div class="">' +
            '<strong class=" primary-font">' +
            // e['user']['name'] +
            '</strong>' +
            '<div class="col-sm-12">' +
            '<div class=" text-muted">' +
            '<span class="glyphicon glyphicon-time"></span>' + e['created_at'] +
            '</div>' +
            '</div>' +
            '<div class="col-sm-6">' +
            '<div>' +
            '<p>' + e['text'] + '</p>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</li>'
    }
    $('.chat').append(message);

}

setInterval(function () {
    var message = $('.msg:last').data('message');
    var url = $("#messageSend").attr('action');
    $.ajax({
        url:url,
        type:'post',
        data:{message:message, key:'set', _token:token},
        success:function (e) {
            if (!e[0]){
                return false
            }else {
                $(e).each(function (i) {

                    messge(e[i]);
                })
            }
        }
    })

}, 3000);