$(document).ready(function () {
    $("#cadEmpresa").submit(function (e) {
        let dados = $(this).serialize() + "&create=true";
        let retorno = request("empresa", dados);
        if (retorno) {
            alert("ok!");
            window.location.replace("MenuAdm.php");
        } else {
            alert("Erro ao cadastrar empresa!");
        }
        e.preventDefault();
        return false;
    });

});