$(document).ready(function () {
    

    let retorno = request("empresa", 'load=true');
    if (retorno) {
        $("#nomeEmpresa").text(retorno.nome);
        $("#cnpj").text(retorno.cnpj);
    } else {
        alert("Erro ao carregar dados da empresa!");
    }
});