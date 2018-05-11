$(document).ready(function() {
    //PasswordStreghtBar
    $('#pwd').strengthMeter('progressBar', {
        container: $('#progress-bar-container')
    });
    
    $("#pwdc").change(function () {
        var password = $("#pwd").val();
        var confirmPassword = $("#pwdc").val();
        if (password != confirmPassword) {
            $('#pwdc').addClass("has-error");
            return false;
        }else{
            $('#pwdc').addClass("has-success");
        }
        return true;
    });
});
