$(document).ready(function(){

    $('#mostrarSenha').on('click', function(){
        var passwordField = $('#password');
        var icon = $('#icon');
        var passwordFieldType = passwordField.attr('type');

        if(passwordFieldType == 'password')
        {
            passwordField.attr('type', 'text');
            icon.attr('class', 'bi bi-eye');

        } else {
            passwordField.attr('type', 'password');
            icon.attr('class', 'bi bi-eye-slash');

            $(this).val('Show');
        }

    });
});
