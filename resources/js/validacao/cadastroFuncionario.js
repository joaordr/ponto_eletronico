$(document).ready(function () {
    $("#cpf").mask("000.000.000-00", {reverse:true});
    $("#rg").mask("00.000.000-0", {reverse:true});
    $("#telefone").mask("(00)00000-0000", {reverse:true});

    $("#cadFuncionario1").validate({
        rules:{
            nome: {
                required: true,
                maxlength: 80,
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
                date: true,
            },
            email:{
                required: true,
                email: true,
            },
            telefone:{
                required: true,
                maxlength: 14,
            },
            cargo:{
                required: true,
                maxlength: 100,
            },
            setor:{
                required: true,
                maxlength: 100,
            },
            nomeUsuario:{
                required: true,
                maxlength: 100,
                depends: function(){
                    $("#nomeUsuario").css("border", "1px solid #8C1717"); }
            },
            senhaFunc:{
                required: true,
                maxlength: 10,
                depends: function(){
                    $("#senhaFunc").css("border", "1px solid #8C1717"); }

            }
        },
        messages: {
            nome: {
                required: "Campo Obrigatório",
                maxlength: "O campo pode ter no máximo 80 caracteres",
            },
            cpf: {
                required: "Campo Obrigatório",
                cpfBR: "Informe um cpf válido"
            },
            rg:{
                required: "Campo Obrigatório",
            },
            dtNasc:{
                required: "Campo Obrigatório",
                date: "Informe uma data válida"
            },
            email:{
                required: "Campo Obrigatório",
                email: "Informe um email válido"
            },
            telefone:{
                required: "Campo Obrigatório",
                maxlength: "O campo pode ter no máximo 14 caracteres",
            },
            cargo:{
                required: "Campo Obrigatório",
                maxlength: "O campo pode ter no máximo 100 caracteres",
            },
            setor:{
                required: "Campo Obrigatório",
                maxlength: "O campo pode ter no máximo 100 caracteres",
            },
            nomeUsuario:{
                required: "Campo Obrigatório",
                maxlength: "O campo pode ter no máximo 100 caracteres",
            },
            senhaFunc:{
                required: "Campo Obrigatório",
                maxlength: "O campo pode ter no máximo 10 caracteres",

            }
        }
    })
});


