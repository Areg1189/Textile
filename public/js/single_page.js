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
            error:function (data) {
                window.location.href = 'not-found';
            }
        });
    }
});