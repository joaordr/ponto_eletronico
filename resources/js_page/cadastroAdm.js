$(document).ready(function () {
    $("#cadFuncionario").submit(function (e) {
        let dados = $(this).serialize() + "&create_adm=true";
        let retorno = request("funcionario", dados);
        console.log(retorno);
        if (retorno) {
            alert("ok!");
            // $("#formEntrarFunc input").val("");
        } else {
            alert("Erro ao realizar login!");
        }
        e.preventDefault();
        return false;
    });

});