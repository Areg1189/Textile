/**
 * Created by Tatev on 6/13/2017.
 */
var token = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function () {


    $('#table').DataTable();


    $('.blockUser').change(function () {
        var public = false;
        var url = $(this).data('href');
        var user = $(this).data('user');

        if ($(this).is(':checked')) {
            public = 1;
        } else {
            public = 0;
        }


        $.ajax({
            url: url,
            type: 'post',
            data: {user: user, public: public, _token: token},

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
$(document).ajaxStart(function () {
    $(".loaderSite").show();
});
$(document).ajaxStop(function () {
    $(".loaderSite").hide();
});

$(document).on('click', '.spanClose', function () {
    $('.info_modal').fadeOut().find('image_section').html('');
});


//  ==================== INPUT FILE =======================//


$(document).on('click', '.js-labelFile', function () {
    $('.input-file').each(function () {
        var $input = $(this),
            $label = $input.next('.js-labelFile'),
            labelVal = $label.html();

        $input.on('change', function (element) {
            var fileName = '';
            if (element.target.value) fileName = element.target.value.split('\\').pop();
            fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label.removeClass('has-file').html(labelVal);
        });
    });
});

// })();
$(document).on('click', ".span_reset_file", function () {
    $(".cr-image").fadeOut();
    $('.upload2').val('');
    $('.js-labelFile').removeClass('has-file').find('.js-fileName').text('Change a Image');
    $(this).fadeOut();
});

//=============================  IMAGE CROP ========================//

// $(document).on('click', '.basic-result', function () {
//     var w = parseInt($w.val(), 10),
//         h = parseInt($h.val(), 10), s
//     size = 'viewport';
//     if (w || h) {
//         size = {width: w, height: h};
//     }
//     $uploadCrop.croppie('result', {
//         type: 'canvas',
//         size: size
//     }).then(function (resp) {
//         popupResult({
//             src: resp
//         });
//     });
// });
//
// function popupResult(result) {
//     var html;
//     if (result.html) {
//         html = result.html;
//     }
//     if (result.src) {
//         html = '<img src="' + result.src + '" />';
//         $(".info_modal").fadeIn();
//         $('.image_section').html(html);
//
//     }
//
// }

$(document).on("change", '.upload2', function () {
    $(".span_reset_file").fadeIn();
    $(".cr-image").fadeIn();
    var reader = new FileReader();
    reader.onload = function (e) {
        $uploadCrop.croppie("bind", {
            url: e.target.result,
        }).then(function () {
            $w = $('.basic-width'),
                $h = $('.basic-height'),

                $uploadCrop.croppie('bind', {
                    url: e.target.result,

                });
        });

    };
    reader.readAsDataURL(this.files[0]);
});



$(document).on('submit', "#generalImage", function (form) {
    $uploadCrop.croppie('result', {
        type: 'canvas',
        size: 'viewport'
    }).then(function (resp) {
        if ($('input[type="file"]').val()) {
            resp = resp;
            $('input[name="image"]').val(resp);
        }
    });
});

$(document).on('submit', "#addSubCategory", function (form) {
    $uploadCrop.croppie('result', {
        type: 'canvas',
        size: 'viewport'
    }).then(function (resp) {
        if ($('input[type="file"]').val()) {
            $('input[name="image"]').val(resp);
        }
    });
});







