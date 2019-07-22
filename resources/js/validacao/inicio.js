$(document).ready(function(){
    $("#formEntrarAdm").validate({
        rules:{
            userLogin: {
                required: true,
                maxlength: 25,
            },
            senhaLogin: {
                required: true,
                maxlength: 10,
            }
        },
        messages: {
            userLogin: {
                required: "Campo obrigatório",
                maxlength: "O campo pode ter no máximo 25 caracteres"
            },
            senhaLogin: {
                required: "Campo obrigatório",
                maxlength: "O campo pode ter no máximo 10 caracteres"
            }
        }
    });

    $("#formEntrarFunc").validate({
        rules:{
            userLogin: {
                required: true,
                maxlength: 25,
            },
            senhaLogin: {
                required: true,
                maxlength: 10,
            }
        },
        messages: {
            userLogin: {
                required: "Campo obrigatório",
                maxlength: "O campo pode ter no máximo 25 caracteres"
            },
            senhaLogin: {
                required: "Campo obrigatório",
                maxlength: "O campo pode ter no máximo 10 caracteres"
            }
        }
    });

    $("#formNovoUsuario").validate({
        rules:{
            userLogin: {
                required: true,
                maxlength: 25,
            },
            emailLogin: {
                required: true,
                email: true,
            },
            senhaLoginCad: {
                required: true,
                maxlength: 10,
            },
            senhaLoginCon: {
                required: true,
                maxlength: 10,
            }
        },
        messages: {
            userLogin: {
                required: "Campo obrigatório",
                maxlength: "O campo pode ter no máximo 25 caracteres"
            },
            emailLogin: {
                required: "Campo obrigatório",
                email: "Informe um email válido"
            },
            senhaLoginCad: {
                required: "Campo obrigatório",
                maxlength: "O campo pode ter no máximo 10 caracteres",
            },
            senhaLoginCon: {
                required: "Campo obrigatório",
                maxlength: "O campo pode ter no máximo 10 caracteres"
            }
        }
    });
});