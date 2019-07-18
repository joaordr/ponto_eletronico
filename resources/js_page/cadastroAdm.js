$(document).ready(function () {
    $("#cadFuncionario").submit(function (e) {
        let dados = $(this).serialize() + "&create_adm=true";
        let retorno = request("funcionario", dados);
        if (retorno) {
            $.confirm({
                columnClass: 'small',
                title: 'Confirmação!',
                icon: 'fa fa-check-circle',
                content: 'Cadastrado com sucesso',
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
            window.location.replace("cadastroEmpresa.php");
        } else {
            $.confirm({
                columnClass: 'small',
                title: 'Erro!',
                icon: 'fa fa-exclamation',
                content: 'Erro ao cadastrar funcionario administrador.',
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