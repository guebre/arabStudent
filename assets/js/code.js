jQuery.noConflict();

jQuery(document).ready(function ($) {

    // profile 
    $('#frm_profile2').submit(function (event) {
        event.preventDefault();
        let input = $(this);
        alert($("#usr_lname").val());

    });

});