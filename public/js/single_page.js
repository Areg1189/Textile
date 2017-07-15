$(".comment_form").validate({
    rules: {
        comment: {
            required: true
        }
    },
    submitHandler: function (form) {
        $.ajax({
            url: $(".comment_form").attr('action'),
            type: $(".comment_form").attr('method'),
            data: $(".comment_form").serialize(),
            success: function (data) {

                if (data[1]) {
                    alert(1);
                } else {
                    window.location.href = 'not-found';
                }
            },
            error: function (data) {
                window.location.href = 'not-found';
            }
        });
    }
});

(function ($) {
    "use strict";
    $('a[data-gal]').each(function () {
        $(this).attr('rel', $(this).data('gal'));
    });
    $("a[data-rel^='prettyPhoto']").prettyPhoto({
        animationSpeed: 'slow',
        theme: 'light_square',
        slideshow: true,
        overlay_gallery: true,
        social_tools: false,
        deeplinking: false
    });
})($);
