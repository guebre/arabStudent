jQuery.noConflict();

jQuery(document).ready(function ($) {
    $('#error').html(" ");
    $("#profile1").html("");
    $('#error2').html(" ");
    $("#profile2").html("");


    // profile 1
    $("#frm_profile1").submit(function (event) {

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
                $("#submit_profile").removeClass("ld ld-ext-right running");
                $("#submit_profile").children().removeClass('ld ld-ring ld-spin-fast');
            })

    });

    /*$('#frm_profile1 input').on('keyup', function () {
        $(this).removeClass('is-invalid').addClass('is-valid');
        $(this).parents('.form-group').find('#error').html(" ");
    });*/

    // Profile2 

    $("#form_profile2").submit(function (event) {
        event.preventDefault();
        $("#submit_profile2").addClass("ld ld-ext-right running");
        $("#submit_profile2").children().addClass('ld ld-ring ld-spin-fast');
        $("#profile2").html('');
        $.ajax({
            url: base_url + 'me/profile2',
            method: 'POST',
            dataType: 'json',
            data: $(this).serialize()
        })
            .done(function (data) {
                $("#submit_profile2").removeClass("ld ld-ext-right running");
                $("#submit_profile2").children().removeClass('ld ld-ring ld-spin-fast');
                $.each(data, function (key, value) {
                    if (key === 'ok') {
                        alert('update ok');
                        $("#profile2").html(value);
                    } else {
                        alert('Erreur de traitement');
                        $("#profile2").html(value);
                    }

                });
            })
            .fail(function () {
                alert("Une erreur s'est produite");
                $("#submit_profile2").removeClass("ld ld-ext-right running");
                $("#submit_profile2").children().removeClass('ld ld-ring ld-spin-fast');

            })
    });

});