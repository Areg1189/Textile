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
                $('.sort, #sortable').sortable();
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
    parent = $(this).data('status');
    url = $('[data-target="' + parent + '"]').data('href_delete');
    prod = $('[data-target="' + parent + '"]').data('prod');
    key = $('[data-target="' + parent + '"]').data('key');
    data = { prod: prod, key: key, _token: token};

});

$(document).on('click', '.modalDelete', function () {
    $.ajax({
        url: url,
        type: 'post',
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
                        '<div class=" demo"   data-id="' + file.lastModified + '">' +
                        // '<div class="demo col-sm-3">' +
                        // '<img class="my-image" src="' + event.target.result + '" style="width:100%;" /> ' +
                        // '</div>' +
                        '</div>' +
                        '</div>' +
                        '');
                    $('.demo').each(function (i) {
                        if ($(this).data('crop') != 1) {

                            basic.push($(this).croppie({

                                url: event.target.result,
                                viewport: {
                                    width: 250,
                                    height: 250
                                },
                                boundary: {
                                    width: 300,
                                    height: 300
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
$(".productMulty").validate({
    rules: {
        img: {
            required: true,
            accept: "jpeg,JPEG,png,PNG,jpg,JPG,gif,svg"
        }
    }
});

// $(document).on('validate', '.productMulty',{
//     rules: {
//         "image.*": {
//             accept: "jpeg,JPEG,png,PNG,jpg,JPG,gif,svg"
//         }
//
//     },
//     // range:
//     submitHandler: function(form) {
//         console.log(basic)
//
//     }
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
});

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

// $(document).on('submit', "#addSubCategory", function (form) {
//     $uploadCrop.croppie('result', {
//         type: 'canvas',
//         size: 'viewport'
//     }).then(function (resp) {
//         if ($('input[type="file"]').val()) {
//             $('input[name="image"]').val(resp);
//         }
//     });
// });



// =================================== FILTER =========================================//
var number = 0;
$(document).on('click', '.add_sub_filter', function () {
    $('.sub_filter_content').fadeIn();
    $('.sub_filter_content').append('' +
        '<div  data-name="number' + number + '" data-status="delete' + number + '">' +
        '<div class="row" >' +
        '<div class="col-xs-3">' +
        '<div class="form-group text-center">' +
        '<label>Հայերեն</label>' +
        '<input type="text" name="hy_name_sub[]" class="form-control" placeholder="Հայերեն" required>' +
        '</div>' +
        '</div>' +
        '<div class="col-xs-3">' +
        '<div class="form-group text-center">' +
        '<label>English</label>' +
        '<input type="text" name="en_name_sub[]" class="form-control" placeholder="English" required>' +
        '</div>' +
        '</div>' +
        '<div class="col-xs-3">' +
        '<div class="form-group text-center">' +
        '<label>Русский</label>' +
        '<input type="text" name="ru_name_sub[]" class="form-control" placeholder="Русский" required>' +
        '</div>' +
        '</div>' +
        '<button data-target="number' + number + '" type="button" class="btn btn-info add_filter_value" title="Add Child">' +
        '<i class="fa fa-plus"></i>' +
        '</button>' +
        '<button data-target="delete' + number + '" type="button" class="btn btn-danger delete_filter" title="Delete">' +
        '<i class="fa fa-times" aria-hidden="true"></i>' +
        '</button>' +
        '</div>' +
        '</div>' +
        '');
    number++
});
var dell = 0;
$(document).on('click', '.add_filter_value', function () {
    var data = $(this).data('target');
    $('[data-name="' + data + '"]').append('' +
        '<div class="row" data-status="delete' + number + '" data-dell="delete' + number + dell + '">' +
        '<div class="col-xs-1">' +
        '</div>' +
        '<div class="col-xs-3">' +
        '<div class="form-group text-center">' +
        '<label>Հայերեն</label>' +
        '<input type="text" name="hy_sub[' + parseInt(number - 1) + '][]" class="form-control" placeholder="Հայերեն" required>' +
        '</div>' +
        '</div>' +
        '<div class="col-xs-3">' +
        '<div class="form-group text-center">' +
        '<label>English</label>' +
        '<input type="text" name="en_sub[' + parseInt(number - 1) + '][]" class="form-control" placeholder="English" required>' +
        '</div>' +
        '</div>' +
        '<div class="col-xs-3">' +
        '<div class="form-group text-center">' +
        '<label>Русский</label>' +
        '<input type="text" name="ru_sub[' + parseInt(number - 1) + '][]" class="form-control" placeholder="Русский" required>' +
        '</div>' +
        '</div>' +
        '<div class="col-xs-2">' +
        '<button data-target="delete' + number + '" type="button" class="btn btn-danger delete_filter_find" data-dell_button="delete' + number + dell + '" title="Delete">' +
        '<i class="fa fa-times" aria-hidden="true"></i>' +
        '</button>' +
        '</div>' +

        '</div>' +
        '');
    dell++;
});

$(document).on('click', '.delete_filter', function () {
    var data = $(this).data('target');
    $('[data-status="' + data + '"]').fadeOut().remove();
});


$(document).on('click', '.delete_filter_find', function () {
    var data = $(this).data('dell_button');
    $('[data-dell="' + data + '"]').fadeOut().remove();
});


//=================================  COLOR  ===========================//
var color = 2;
$(document).on('click', ".add_color", function () {
    var data = $(this).data('color');
    $('div[data-color_container="' + data + '"]').append('' +
        '<div class="col-sm-1"  data-status="color_' + color + '">' +
        '<span class=" delete_color cursor_pointer" data-target="color_' + color + '">' +
        '<i class="fa fa-times" aria-hidden="true"></i>' +
        '</span>' +
        '<input type="color" name="color[]" >' +
        '</div>' +
        '');
    color++;
});

$(document).on('click', '.delete_color', function () {
    var data = $(this).data('target');
    $('[data-status="' + data + '"]').fadeOut().remove();
});

// ================================ FILTER CHECKBOX =======================//

$(document).on('change', '.filter_checkbox', function () {
    var data = $(this).data('target');
    if ($(this).is(':checked')) {
        $('[data-status="' + data + '"]').attr({
            'required': true,
            'disabled': false
        }).focus();
    } else {
        $('[data-status="' + data + '"]')
            .val('').attr({
            'required': false,
            'disabled': true
        });
    }
});

$(document).on('click', '.delete_update_image', function () {

    $(this).parent().append(
        '<div class="modal_delete_image">' +
        '<div class="box box-danger">' +
        '<div class="box-body">' +
        '<div class="row">' +
        '<div class="col-sm-12">' +
        '<p>Do you really want to delete</p>' +
        '</div>' +
        '<div class="btn-group">' +
        '<button type="button" class="btn btn-danger modalDelete dellImage">delete</button>' +
        '<button type="button" class="btn btn-default closeDell">Close</button>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>'
    )
});