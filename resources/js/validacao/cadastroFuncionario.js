$(document).ready(function () {
    $("#cadFuncionario1").validate({
        rules:{
            nome: {
                required: true,
                maxlength: 3
            },
            cpf: {
                cpfBR: true,
                required: true
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
                maxlength: 10
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