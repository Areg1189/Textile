/**
 * Created by Tatev on 6/13/2017.
 */
var token = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){



    $('#table').DataTable();


    $('.blockUser').change(function () {
        var public = false;
        var url = $(this).data('href');
        var user = $(this).data('user');

        if($(this).is(':checked')){
            public = 1;
        } else {
            public = 0;
        }


        $.ajax({
            url:url,
            type:'post',
            data:{user:user,public:public, _token:token},

        })

    })

});
//=============================  UPDATE ========================//
$(document).on('click', '.iconUpdate', function () {
    $('.updateForm').html('');
    parent = $(this).data('status');
    url = $('[data-target="' + parent + '"]').data('href_update');
    prod = $('[data-target="' + parent + '"]').data('prod');
    data = {prod: prod, key: 'one', _token: token};
    $.ajax({
        url: url,
        type: 'post',
        data: data,
        success: function (data) {
            if (data != 0) {
                $('.updateForm').html(data);

            }
            else {
                $(".msj-success").html(data);
                $(".msj-success").fadeIn();
                setTimeout(function () {
                    $(".msj-success").fadeOut();
                    $(".msj-success").html('<ul></ul>');
                }, 5000);
            }
        },
    error: function (e) {
        // ajaxError(e);
        }
    });
});
//=============================  DELETE ========================//

$(document).on('click', '.iconDelete', function () {
    alert
    parent = $(this).data('status');
    url = $('[data-target="' + parent + '"]').data('href_delete');
    prod = $('[data-target="' + parent + '"]').data('prod');
    key = $('[data-target="' + parent + '"]').data('key');
    cat = $('[data-target="' + parent + '"]').data('category');
    data = {folder: cat, prod: prod, key: key, _token: token};
    if (parent && url && prod && data) {
        $('#modalDelete').modal('sow', true);
    }
    alert(prod)
});

$(document).on('click', '.modalDelete', function () {
    $.ajax({
        url: url,
        type: 'delete',
        data: data,
        success: function (data) {
            if (data == 1) {
                $('[data-target="' + parent + '"]').fadeOut(500, function () {
                    $(this).remove();
                })
            } else {
                $(".msj-success").html(data);
                $(".msj-success").fadeIn();
                setTimeout(function () {
                    $(".msj-success").fadeOut();
                    $(".msj-success").html('<ul></ul>');
                }, 5000);
            }
        },
        error: function (e) {
            ajaxError(e);
        }
    })
});
$( document ).ajaxStart(function() {
    $( ".loaderSite" ).show();
});
$( document ).ajaxStop(function() {
    $( ".loaderSite" ).hide();
});










