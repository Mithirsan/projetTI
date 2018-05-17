$(document).ready(function() {
    $('.carousel').carousel({
        interval: 5000
    });
    
    //contact
    $('#contact').submit(function(e) {
        e.preventDefault();
        $('.comments').empty();
        var postdata = $('#contact-form').serialize();
        
        $.ajax({
            type: 'POST',
            url: 'PHP/contactform.php',
            data: postdata,
            dataType: 'json',
            success: function(json) {

                if(json.isSuccess) 
                {
                    $('#contact-form').append("<p class='thank-you'>Your message has been sended, Thanks :)</p>");
                    $('#contact-form')[0].reset();
                }
                else
                {
                    $('#firstname + .comments').html(json.firstnameError);
                    $('#name + .comments').html(json.nameError);
                    $('#email + .comments').html(json.emailError);
                    $('#phone + .comments').html(json.phoneError);
                    $('#message + .comments').html(json.messageError);
                }                
            }
        });
    });
    
    
});