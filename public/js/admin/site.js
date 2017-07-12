var token = $('meta[name="csrf-token"]').attr('content');


$(document).on('click', ".add_top_icon", function () {
    $(".add_top_div").toggle();
});

$(document).on('click', '.add_top_save', function () {
    if ($(".add_top_select").val()) {
        var cat = $(".add_top_select").val();
        var url = $(".add_top_select").data('href');
        $.ajax({
            url: url,
            type: 'post',
            data: {cat: cat, key: 'add', _token: token},
            success: function (e) {
                if (e == 1) {
                    location.reload();
                }
            }
        })
    }
});

$(document).on('click', ".edit_top_icon", function () {
    top_cat = $(this).data('parent');
    $('.edit_top_div[data-status="' + top_cat + '"]').toggle();
});

$(document).on('click', '.edit_top_save', function () {
    if ($('.edit_top_select[data-select="' + top_cat + '"]').val()) {
        var newCat = $('.edit_top_select[data-select="' + top_cat + '"]').val();
        var oldCat = $('[data-old_cat="' + top_cat + '"]').data('cat_old');
        var number = $('[data-old_cat="' + top_cat + '"]').data('number');
        var url = $(".add_top_select").data('href');
        $.ajax({
            url: url,
            type: 'post',
            data: {newCat: newCat, oldCat: oldCat, number: number, key: 'edit', _token: token},
            success: function (e) {
                if (e == 1) {
                    location.reload();
                }
            }
        });
    }
});

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


$(document).on('submit', ".formImage", function (form) {
    form = form;
    $uploadCrop.croppie('result', {

        type: 'canvas',
        size: {
            width: w,
            height: h
        },
    }).then(function (resp) {
        if ($('input[type="file"]').val()) {
            resp = resp;
            $('input[name="image"]').val(resp);
        }
    });
});
//=============================  UPDATE ========================//


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
        }

    });
});
