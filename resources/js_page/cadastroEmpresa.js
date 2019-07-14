$(document).ready(function () {
    $("#cadFuncionario").submit(function (e) {
        let dados = $(this).serialize() + "&create_adm=true";
        let retorno = request("funcionario", dados);
        if (retorno) {
            alert("ok!");
            window.location.replace("cadastroEmpresa.php");
        } else {
            alert("Erro ao realizar login!");
        }
        e.preventDefault();
        return false;
    });

});