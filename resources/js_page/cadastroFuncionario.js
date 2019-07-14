$(document).ready(function () {
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