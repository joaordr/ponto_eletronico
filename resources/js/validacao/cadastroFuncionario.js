$(document).ready(function () {
    $("#cpf").mask("000.000.000-00", {reverse:true});
    $("#rg").mask("00.000.000-0", {reverse:true});
    $("#telefone").mask("(00)00000-0000", {reverse:true});

    $("#cadFuncionario1").validate({
        errorPlacement: function(error, element){
            error.insertAfter('#erroNome');
        }
        
        rules:{
            nome: {
                required: true,
                maxlength: 3,
                depends: function(){
                    $("#nome").css("border", "1px solid red");                }
            },
            cpf: {
                cpfBR: true,
                required: true,
            },
            rg:{
                required: true,
            },
            dtNasc:{
                required: true,
                date: true
            },
            email:{
                required: true,
                email: true
            },
            telefone:{
                required: true,
                maxlength: 14
            },
            cargo:{
                required: true,
                maxlength: 100
            },
            setor:{
                required: true,
                maxlength: 100
            },
            nomeUsuario:{
                required: true,
                maxlength: 100
            },
            senhaFunc:{
                required: true,
                maxlength: 10

            }
        },
        messages: {
            nome: {
                required: "Campo Obrigatorio",
                maxlength: "O campo pode ter no maximo 80 caracteres",
            },
            cpf: {
                required: "Campo Obrigatorio",
                cpfBR: "Informe um cpf valido"
            },
            rg:{
                required: "Campo Obrigatorio",
            },
            dtNasc:{
                required: "Campo Obrigatorio",
                date: "Informe uma data valida"
            },
            email:{
                required: "Campo Obrigatorio",
                email: "Informe um email valido"
            },
            telefone:{
                required: "Campo Obrigatorio",
                maxlength: "O campo pode ter no maximo 14 caracteres",
            },
            cargo:{
                required: "Campo Obrigatorio",
                maxlength: "O campo pode ter no maximo 100 caracteres",
            },
            setor:{
                required: "Campo Obrigatorio",
                maxlength: "O campo pode ter no maximo 100 caracteres",
            },
            nomeUsuario:{
                required: "Campo Obrigatorio",
                maxlength: "O campo pode ter no maximo 100 caracteres",
            },
            senhaFunc:{
                required: "Campo Obrigatorio",
                maxlength: "O campo pode ter no maximo 10 caracteres",

            }
        }
    })
});


