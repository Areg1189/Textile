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
    f = $(this);
    $uploadCrop.croppie('result', {

        type: 'canvas',
        size: {
            width: w,
            height: h
        },
    }).then(function (resp) {
        if ($(f).find('input[type="file"]').val()) {
            resp = resp;
            $(f).find('input[name="image"]').val(resp);
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


/*UPDATE EMPLOYEE*/

$(document).on('click', '.update_employee', (function (e) {
        $('.modal-content').html('');
        $.ajax({
            type: 'post',
            url: $(this).data('href'),
            data: {href: href, _token: token},
            success: function (e) {
                $('.modal-content').html(e);
            }
        })
    })
)


$(function () {

    $(document).on('click', '.image', function (e) {
        $('[data-xname="' + $(this).data('name') + '"]').html('');

    });

    basic = [];
    $(document).on('change', '.image', function (e) {
        basic = [];
        this_file = $(this).data('name');
        var files = e.target.files;
        for (i = 0; i <= files.length; i++) {
            // when i == files.length reorder and break
            if (i == files.length) {

                // need timeout to reorder beacuse prepend is not done
                setTimeout(function () {
                    reorderImages();
                }, 100);
                break;
            }

            var file = files[i];
            var reader = new FileReader();
            // $('.sort').html('');
            reader.onload = (function (file) {

                return function (event) {
                    $('[data-xname="' + this_file + '"]').prepend('' +
                        '<div class="col-sm-4">' +
                        '<input type="text" name="text_hy[]" required>' +
                        '<input type="text" name="text_en[]" required>' +
                        '<input type="text" name="text_ru[]" required>' +
                        '<div class=" demo"   data-id="' + file.lastModified + '">' +
                        '</div>' +
                        '</div>' +
                        '');
                    $('.demo').each(function (i) {
                        if ($(this).data('crop') != 1) {

                            basic.push($(this).croppie({

                                url: event.target.result,
                                viewport: {
                                    width: 250,
                                    height: 162.5
                                },
                                boundary: {
                                    width: 300,
                                    height: 200
                                }
                            }));
                        }
                        $(this).data('crop', 1);

                    });
                    $(".cr-slider").remove();
                };
            })(file);
            reader.readAsDataURL(file);
        }// end for;
    });


    $('.sort, #sortable').disableSelection();
    $('.sort, #sortable').on('sortbeforestop', function (event) {
        reorderImages();
    });
    function reorderImages() {
        var images = $('.sort');
        var i = 0, nrOrder = 0;
        for (i; i < images.length; i++) {
            var image = $(images[i]);
            if (image.hasClass('ui-state-default') && !image.hasClass('ui-sortable-placeholder')) {
                image.attr('data-order', nrOrder);
                var orderNumberBox = image.find('.order-number');
                orderNumberBox.html(nrOrder + 1);
                nrOrder++;
            }// end if;
        }// end for;
    }
});
// $(".productMulty").validate({
//     rules: {
//         img: {
//             required: true,
//             accept: "jpeg,JPEG,png,PNG,jpg,JPG,gif,svg"
//         }
//     },
//
// });
$(document).on('submit', '.productMulty', function (form) {
    f = $(this);
    $(basic).each(function (index) {
        basic[index].croppie('result', {
            type: 'canvas',
            size: {
                width: prodImageW,
                height: prodImageH
            },
        }).then(function (resp) {
            f.find('.imageContainer').append('' +
                '<input type="hidden" name="image[]" value="' + resp + '"/>' +
                '');
        });
    });

})
