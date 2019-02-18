jQuery.noConflict();

jQuery(document).ready(function ($) {
    $('#error').html(" ");
    $("#profile1").html("");
    $('#error2').html(" ");
    $("#profile2").html("");
    getDiplome();

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

    // /Les options des date
    $('#usr_date_diplome').append(options());

    function options() {
        let elements = [];
        let year = (new Date()).getFullYear();
        let startYear = 1980;
        /* elements.push(
             $('<option value="0">Choose year </option>')
         );*/
        for (let i = startYear; i <= year; i++) {
            elements.push(
                $('<option value=' + i + '>' + i + '</option>')
            );
        }
        return elements;
    }


    // Profile3 

    $("#frm_profile3").submit(function (event) {
        event.preventDefault();
        $("#submit_profile3").addClass("ld ld-ext-right running");
        $("#submit_profile3").children().addClass('ld ld-ring ld-spin-fast');

        $("#profile3").html("");
        $('.error').html(" ");
        if ($("#usr_lib_diplome").hasClass('is-valid')) {
            $('#usr_lib_diplome').removeClass('is-valid')
        }
        if ($("#usr_lib_diplome").hasClass('is-invalid')) {
            $('#usr_lib_diplome').removeClass('is-invalid')
        }
        if ($("#usr_date_diplome").hasClass('is-valid')) {
            $("#usr_date_diplome").removeClass('is-valid')
        }
        if ($("#usr_date_diplome").hasClass('is-invalid')) {
            $("#usr_date_diplome").removeClass('is-invalid')
        }
        //console.log($(this).serialize());
        $.ajax({
            url: base_url + 'me/profile3',
            method: "POST",
            dataType: 'json',
            data: $(this).serialize(),
        })
            .done(function (data) {
                //console.log(data);
                $("#submit_profile3").removeClass("ld ld-ext-right running");
                $("#submit_profile3").children().removeClass('ld ld-ring ld-spin-fast');
                $.each(data, function (key, value) {

                    if (key === 'ok') {
                        $("#profile3").html(value);
                        if ($("#frm_profile3 input").hasClass('is-valid')) $("#frm_profile3 input").removeClass('is-valid');
                        if ($("#frm_profile3 input").hasClass('is-invalid')) $("#frm_profile3 input").removeClass('is-invalid');
                        $('.error').html(" ");
                        $("#usr_lib_diplome").val("");
                        $("#usr_date_diplome").val("undefined");
                        getDiplome();
                        return false;
                    } else {
                        if (value !== "") {
                            $('#' + key).addClass('is-invalid');
                            $('#' + key).parents('.form-group').find('.error').html(value);

                        } else {
                            //$('#' + key).addClass('is-valid');
                            /*if ($("#" + key).hasClass('is-invalid')) {
                                $("#" + key).removeClass('is-invalid').addClass('is-valid');

                            }*/


                            //$("#frm_profile1 input").addClass('is-valid');

                        }
                    }


                });

            })
            .fail(function () {
                alert("Erreur");
                $("#submit_profile3").removeClass("ld ld-ext-right running");
                $("#submit_profile3").children().removeClass('ld ld-ring ld-spin-fast');
            })

    });


    function getDiplome() {
        let url = base_url + "me/diplome";
        $("#list_diplome").load(url);
    }

    $('body').on('click', '.del_diplome', function () {
        let idDiplome = $(this).data("diplome");
        //alert(idDiplome);

        $.ajax({
            url: base_url + 'me/del_diplome',
            method: "POST",
            dataType: 'json',
            data: { diplome: idDiplome }
        })
            .done(function (data) {
                console.log(data);
                getDiplome();
            })
            .fail(function () {
                alert("error");
            })

    });


});