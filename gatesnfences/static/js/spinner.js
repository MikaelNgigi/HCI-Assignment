// Add spinner to register button on onClick event
$(document).ready(function (){
    $('#register_button').click(function () {
        //disable button
        $(this).prop("disabled", true);
        //add spinner effect
        $(this).html(
            `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Registering...`
        );
    setTimeout(function (){
        document.getElementById('register_form').submit();
    }, 4000)
    });
});

//Add loading spinning effect on login button
$(document).ready(function () {
    $('#login_button').click(function (){
        //disable button
        $(this).prop("disabled", true);
        // Add spinner effect
        $(this).html(
            `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Logging...`
        );
    setTimeout(function (){
        document.getElementById('login_form').submit();
    }, 4000)
    });
});

//Add loading spinning effect on forgot password button
$(document).ready(function () {
    $('#reset_button').click(function (){
        //disable button
        $(this).prop("disabled", true);
        // Add spinner effect
        $(this).html(
            `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...`
        );
    setTimeout(function (){
        document.getElementById('reset_form').submit();
    }, 4000)
    });
});

$(document).ready(function () {
    $('#reset_pass_button').click(function (){
        //disable button
        $(this).prop("disabled", true);
        // Add spinner effect
        $(this).html(
            `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Resetting...`
        );
    setTimeout(function (){
        document.getElementById('reset_pass_form').submit();
    }, 4000)
    });
});