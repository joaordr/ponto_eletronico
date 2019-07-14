$(document).ready(function () {
    $("#cadFuncionario1").validate({
        rules:{
            nome: {
                required: true,
                maxlength: 100
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
    });

    $("#cadFuncionario1").submit(function (e) {
        let dados = $(this).serialize() + "&create_func=true";
        let retorno = request("funcionario", dados);
        if (retorno) {
            alert("ok!");
            $("#cadFuncionario1 input").val("");
        } else {
            alert("Erro ao realizar login!");
        }
        e.preventDefault();
        return false;
    });


});