jQuery(document).ready(function ($) {
    "use strict";
    $('#send_message').click(function (e) {
        
        //Stop form submission & check the validation
        e.preventDefault();

        var frm = $(this).parents('form:first');

        // Variable declaration
        var error = false;
        // var jw_name_company = $('#name_company').val();
        // var jw_department = $('#department').val();
        var jw_furikana = $('#furikana').val();
        var jw_name = $('#name').val();
        var jw_email = $('#email').val();
        var jw_phone = $('#phone').val();
        // var jw_fax = $('#fax').val();
        var jw_message = $('#your_message').val();
        var jw_token = $('input[name="_csrfToken"]').val();
        var target_url = $(this).data('url');

        // Form field validation
        // if (jw_name_company.length == 0) {
        //     var error = true;
        //     $('#name_company_error').fadeIn(500);
        // } else {
        //     $('#name_company_error').fadeOut(500);
        // }
        // if (jw_department.length == 0) {
        //     var error = true;
        //     $('#department_error').fadeIn(500);
        // } else {
        //     $('#department_error').fadeOut(500);
        // }
        if (jw_name.length == 0) {
            var error = true;
            $('#name_error').fadeIn(500);
        } else {
            $('#name_error').fadeOut(500);
        }
        if (jw_furikana.length == 0) {
            var error = true;
            $('#furikana_error').fadeIn(500);
        } else {
            $('#furikana_error').fadeOut(500);
        }
        if (jw_email.length == 0) {
            var error = true;
            $('#email_error').fadeIn(500);
        } else {
            $('#email_error').fadeOut(500);
        }
        if (jw_email.length > 0 && jw_email.indexOf('@') == '-1') {
            var error = true;
            $('#email_invalid_error').fadeIn(500);
        } else {
            $('#email_invalid_error').fadeOut(500);
        }
        if (jw_phone.length == 0) {
            var error = true;
            $('#phone_error').fadeIn(500);
        } else {
            $('#phone_error').fadeOut(500);
        }
        // if (jw_fax.length == 0) {
        //     var error = true;
        //     $('#fax_error').fadeIn(500);
        // } else {
        //     $('#fax_error').fadeOut(500);
        // }
        if (jw_message.length == 0) {
            var error = true;
            $('#your_message_error').fadeIn(500);
        } else {
            $('#your_message_error').fadeOut(500);
        }
        if ($('input[name=type]').is(":checked") == false) {
            // var error = true;
            $('#choosen_error').fadeIn(500);
        }
        if ($('#check_agree').is(":checked") == false) {
            // var error = true;
            // alert('You have not agreed to the terms');
            $('#check_agree_error').fadeIn(500);
            return false;
        }

        // If there is no validation error, next to process the mail function
        if (error == false) {
            // Disable submit button just after the form processed 1st time successfully.
            $('#send_message').prop('disabled', true).html('送信中。。。');
            
            $.ajax({
                headers: {
                    "X-CSRF-Token": jw_token
                },
                url: target_url,
                type: "POST",
                data: $("#contact-form").serialize(),
                success: function (response) {
                    $('#send_message').prop('disabled', false).html('送信する');
                    $('#mail_fail').hide();
                    console.log(response);
                    if (response == 'sent') {
                        //If the email is sent successfully, remove the submit button
                        $('.list-item-contact').remove();
                        $('#send_message').remove();
                        //Display the success message
                        $('#mail_success').fadeIn(500);
                        return;
                    }

                    if (response == 'token_expired') {
                        $('#mail_token_expired').fadeIn(500);
                        return;
                    }
                    $('#mail_token_expired').hide();

                    //Display the error message
                    $('#mail_fail').fadeIn(500);
                    // Enable the submit button again
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log('k gui duoc js');
                    console.log(textStatus, errorThrown);
                }
            });
        }
    });
});