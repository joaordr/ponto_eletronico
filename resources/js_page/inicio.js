$(document).ready(function () {
    $("#formEntrarAdm").submit(function (e) {
        let dados = $(this).serialize() + "&login_adm=true";
        let retorno = request("login", dados);
        if (retorno) {
            alert("ok!");
            $("#formEntrarAdm input").val("");
        } else {
            alert("Erro ao realizar login!");
        }
        e.preventDefault();
        return false;
    });

    $("#formNovoUsuario").submit(function (e) {
        let dados = $(this).serialize() + "&create_adm=true";
        let retorno = request("usuario", dados);
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