$(document).ready(function(){
    $("#formEntrarAdm").validate({
        rules:{
            userLogin: {
                required: true,
                maxlength: 25
            },
            senhaLogin: {
                required: true,
                maxlength: 10
            }
        }
    });

    $("#formEntrarFunc").validate({
        rules:{
            userLogin: {
                required: true,
                maxlength: 25
            },
            senhaLogin: {
                required: true,
                maxlength: 10
            }
        }
    });

    $("#formNovoUsuario").validate({
        rules:{
            userLogin: {
                required: true,
                maxlength: 25
            },
            emailLogin: {
                required: true,
                email: true
            },
            senhaLoginCad: {
                required: true,
                maxlength: 10,
            },
            senhaLoginCon: {
                required: true,
                maxlength: 10
            }
        }
    });
});