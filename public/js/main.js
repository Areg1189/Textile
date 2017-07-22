// Plugin options and our code
$("#modal_trigger").leanModal({
    top: 100,
    overlay: 0.6,
    closeButton: ".modal_close"
});

$(function () {
    // Calling Login Form
    $("#login_form").click(function () {
        $(".social_login").hide();
        $(".user_login").show();
        return false;
    });

    // Calling Register Form
    $("#register_form").click(function () {
        $(".social_login").hide();
        $(".user_register").show();
        $(".header_title").text('Register');
        return false;
    });

    // Going back to Social Forms
    $(".back_btn").click(function () {
        $(".user_login").hide();
        $(".user_register").hide();
        $(".social_login").show();
        $(".header_title").text('Login');
        return false;
    });
});
$(".edit_dannie").click(function () {
    $(".first_name_dennie, .last_name_dennie, .address_dennie, .phone_dennie, .save_dennie").attr('disabled', false);
});

$(document).ready(function () {
    cartHeight();
});


function cartHeight() {
    var h = parseInt($(window).height() / 1.8);
    if ($('.cart-content').height() > h) {
        $('.cart-content').css({
            'overflow-y': 'scroll',
            'max-height': parseInt(h) + 'px',
        })


    }
}

