$(document).ready(function () {
    $("#cadFuncionario").submit(function (e) {
        let dados = $(this).serialize() + "&login_func=true";
        let retorno = request("login", dados);
        if (retorno) {
            alert("ok!");
            $("#formEntrarFunc input").val("");
        } else {
            alert("Erro ao cadastra adm!");
        }
        e.preventDefault();
        return false;
    });

});