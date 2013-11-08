$(document).ready(function() {

    $("#form_contact").click(function(){$("#form_contact.error").remove()});
    
    $('#form_contact').validate({
        rules: {
            name: {
                required: true,
                minlength: 2,
                maxlenght: 255
            },
            email:{
                required: true,
                email: true
            }
        }
    });

});