$(document).ready(function(){
    $('.parallax').parallax();
    $('.modal').modal();
    Materialize.updateTextFields();

    $('.dropdown-button').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrainWidth: false, // Does not change width of dropdown to that of the activator
            hover: true, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: true, // Displays dropdown below the button
            alignment: 'left', // Displays dropdown with edge aligned to the left of button
            stopPropagation: false // Stops event propagation
        }
    );
    $("#formValidate").validate({
        rules: {
            name: {
                required: true,
                minlength: 3
            },
            vv: {
                required: true,
                minlength: 50
            },
            password: {
                required: true,
                minlength: 5
            },
            cpassword: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            },
            curl: {
                required: true,
                url:true
            },
            crole:"required",
            ccomment: {
                required: true,
                minlength: 15
            },
            cgender:"required",
            cagree:"required",
        },
        //For custom messages
        messages: {
            name:{
                required: "Por favor, insira um nome.",
                minlength: "Informe um nome válido!"
            },
            curl: "Enter your website",
        },
        errorElement : 'div',
        errorPlacement: function(error, element) {
            var placement = $(element).data('error');
            if (placement) {
                $(placement).append(error)
            } else {
                error.insertAfter(element);
            }
        }
    });
    $('select').material_select();
});
$( document ).ready(function(){
    $(".button-collapse").sideNav();
});