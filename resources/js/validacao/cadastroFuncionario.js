$(document).ready(function () {
    $("#cpf").mask("000.000.000-00", {reverse:true});
    $("#rg").mask("00.000.000-0", {reverse:true});
    $("#telefone").mask("(00)00000-0000", {reverse:true});

    $("#cadFuncionario1").validate({
        rules:{
            nome: {
                required: true,
                maxlength: 3,
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
        }
    })
});


