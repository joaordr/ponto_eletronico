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
            $("#cadFuncionario1 input").val("");
            $.confirm({
                columnClass: 'small',
                title: 'Confirmação!',
                icon: 'fa fa-check-circle',
                content: 'Cadastrado com sucesso com sucesso',
                type: 'green',
                typeAnimated: true,
                buttons: {
                    ok: {
                        text: 'Ok',
                        btnClass: 'btn-green',
                        action: function(){
                        }
                    }
                }
            });
        } else {
            $.confirm({
                columnClass: 'small',
                title: 'Erro!',
                icon: 'fa fa-exclamation',
                content: 'Erro ao cadastrar funcionario.',
                type: 'red',
                typeAnimated: true,
                buttons: {
                    ok: {
                        text: 'Ok',
                        btnClass: 'btn-red',
                        action: function(){
                        }
                    }
                }
            });
        }
        e.preventDefault();
        return false;
    });


});