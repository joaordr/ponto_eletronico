$(document).ready(function () {
    $("#formEntrarFunc").submit(function (e) {
        let dados = $(this).serialize() + "&login_func=true";
        let retorno = request("login", dados, true);
        if (retorno) {
            let retorno = request("login", "load_func_info=true", true);
            if (retorno) {
                window.location.replace("view/MenuFunc.php");
            }
        } else {
            $.confirm({
                columnClass: 'small',
                title: 'Erro ao realizar login',
                content: 'Informe ao suporte técnico.',
                type: 'red',
                typeAnimated: true,
                buttons: {
                    Fechar: {
                        text: 'Fechar',
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

    $("#formEntrarAdm").submit(function (e) {
        let dados = $(this).serialize() + "&login_adm=true";
        let retorno = request("login", dados, true);
        if (retorno) {
            let retorno = request("login", "load_adm_info=true", true);
            if (retorno == "cadFunc") {
                window.location.replace("view/cadFuncionario.php");
            } else if (retorno == "cadEmpresa") {
                window.location.replace("view/cadastroEmpresa.php");
            } else if (retorno == "menu") {
                window.location.replace("view/MenuAdm.php");
            }
            console.log(retorno);
        } else {
            $.confirm({
                columnClass: 'small',
                title: 'Erro ao realizar login',
                content: 'Informe ao suporte técnico.',
                type: 'red',
                typeAnimated: true,
                buttons: {
                    fechar: {
                        text: 'Fechar',
                        btnClass: 'btn-red',
                        action: function(){}
                    }
                }
            });
            console.log();
            alert(retorno);
        }
        e.preventDefault();
        return false;
    });

    $("#formNovoUsuario").submit(function (e) {
        let dados = $(this).serialize() + "&create_adm=true";
        let retorno = request("usuario", dados, true);
        if (retorno) {
            $.confirm({
                columnClass: 'small',
                title: 'Confirmação!',
                icon: 'fa fa-check-circle',
                content: 'Novo usuário cadastrado com sucesso',
                type: 'green',
                typeAnimated: true,
                buttons: {
                    ok: {
                        text: 'Ok',
                        btnClass: 'btn-green',
                        action: function(){}
                    }
                }
            });
            $("#formNovoUsuario input").val("");
        } else {
            $.confirm({
                columnClass: 'small',
                title: 'Erro!',
                icon: 'fa fa-exclamation',
                content: 'Erro ao salvar novo usuário.',
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

    $("#senhaLoginCon").keyup(function () {
        let val1 = $("#senhaLoginCad").val();
        let val2 = $("#senhaLoginCon").val();
        if (val2.length >= val1.length && val1 != val2) {
            $("#senhaLoginCon").css("border-color", "red");
            $("#senhasDiferentesMsg").show();
        } else if (val1.length >= 1 && val1 == val2) {
            $("#senhaLoginCon").css("border-color", "green");
            $("#senhasDiferentesMsg").hide();
        } else {
            $("#senhaLoginCon").removeAttr('style');
            $("#senhasDiferentesMsg").hide();
        }
    })

});