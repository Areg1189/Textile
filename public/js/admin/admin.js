/**
 * Created by Tatev on 6/13/2017.
 */
$(document).ready(function(){
    var token = $('meta[name="csrf-token"]').attr('content');


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


