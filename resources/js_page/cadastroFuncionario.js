$(document).ready(function () {
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