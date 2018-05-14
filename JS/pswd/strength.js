$(document).ready(function() {
    //PasswordStreghtBar
    $('#pwd').strengthMeter('progressBar', {
        container: $('#progress-bar-container')
    });
    
    $('#pwdc').change(function () {
        var password = $("#pwd").val();
        var confirmPassword = $("#pwdc").val();
        alert('test');
        if (password != confirmPassword) {
            $('#pwdc').addClass("has-error");
            alert("not same");
            return false;
        }
        $('#pwdc').addClass("has-success");
        $('#signup').prop('disabled', false);
        return true;
    });

});