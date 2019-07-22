$(document).ready(function(){
    $("#formEntrarAdm").validate({
        rules:{
            userLogin: {
                required: true,
                maxlength: 25,
                depends: function(){
                    $("#userLogin").css("border", "1px solid #8C1717"); }
            },
            senhaLogin: {
                required: true,
                maxlength: 10,
                depends: function(){
                    $("#senhaLogin").css("border", "1px solid #8C1717"); }
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
                depends: function(){
                    $("#userLogin").css("border", "1px solid #8C1717"); }
            },
            senhaLogin: {
                required: true,
                maxlength: 10,
                depends: function(){
                    $("#senhaLogin").css("border", "1px solid #8C1717"); }
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
                depends: function(){
                    $("#userLogin").css("border", "1px solid #8C1717"); }
            },
            emailLogin: {
                required: true,
                email: true,
                depends: function(){
                    $("#emailLogin").css("border", "1px solid #8C1717"); }
            },
            senhaLoginCad: {
                required: true,
                maxlength: 10,
                depends: function(){
                    $("#senhaLoginCad").css("border", "1px solid #8C1717"); }
            },
            senhaLoginCon: {
                required: true,
                maxlength: 10,
                depends: function(){
                    $("#senhaLoginCon").css("border", "1px solid #8C1717"); }
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