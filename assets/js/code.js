jQuery.noConflict();

jQuery(document).ready(function ($) {
    $('#error').html(" ");
    $("#profile1").html("");
    // profile 
    $("#frm_profile1").submit(function (event) {

        //alert(event.isDefaultPrevented()); // false
        event.preventDefault();
        $("#submit_profile").addClass("ld ld-ext-right running");
        $("#submit_profile").children().addClass('ld ld-ring ld-spin-fast');

        $("#profile1").html("");
        $.ajax({
            url: base_url + 'me/profile1',
            method: "POST",
            dataType: 'json',
            data: $(this).serialize(),
        })
            .done(function (data) {
                $("#submit_profile").removeClass("ld ld-ext-right running");
                $("#submit_profile").children().removeClass('ld ld-ring ld-spin-fast');
                //console.log(data);
                /*if (data == 'ok') {
                    alert("update ok");
                } else {
                    $("#profile1").html(data);
                }*/
                console.log(data);
                $.each(data, function (key, value) {
                    if (key === 'ok') {
                        $("#profile1").html(value);
                        if ($("#frm_profile1 input").hasClass('is-valid')) $("#frm_profile1 input").removeClass('is-valid');
                        if ($("#frm_profile1 input").hasClass('is-invalid')) {
                            $("#frm_profile1 input").removeClass('is-invalid');
                            //$("#frm_profile1 input").addClass('is-valid');
                        }
                        $('.error').html(" ");
                        return false;
                    } else {
                        if (value !== "") {
                            $('#' + key).addClass('is-invalid');
                            $('#' + key).parents('.form-group').find('.error').html(value);
                        } else {
                            $('#' + key).addClass('is-valid');
                        }
                    }


                });

            })
            .fail(function () {
                alert("Erreur");
            })

    });

    /*$('#frm_profile1 input').on('keyup', function () {
        $(this).removeClass('is-invalid').addClass('is-valid');
        $(this).parents('.form-group').find('#error').html(" ");
    });*/

});