$(document).ready(function () {
    $("#formEntrarFunc").submit(function (e) {
        let dados = $(this).serialize() + "&login_func=true";
        let retorno = request("login", dados, true);
        if (retorno) {
            window.location.replace("view/MenuFunc.php");
        } else {
            alert("Erro ao realizar login!");
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
            alert("Erro ao realizar login!");
        }
        e.preventDefault();
        return false;
    });

    $("#formNovoUsuario").submit(function (e) {
        let dados = $(this).serialize() + "&create_adm=true";
        let retorno = request("usuario", dados, true);
        if (retorno) {
            alert("Salvo com sucesso!");
            $("#formNovoUsuario input").val("");
        } else {
            alert("Erro ao salvar!");
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