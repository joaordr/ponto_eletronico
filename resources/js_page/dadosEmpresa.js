var empresa;

function load_modal() {
    $("#").val(empresa.nome);
}

function load_info() {
    let retorno = request("empresa", 'load=true');
    if (retorno) {
        $("#nomeEmpresa").text(retorno.nome);
        $("#cnpj").text(retorno.cnpj);
        empresa = retorno;
    } else {
        alert("Erro ao carregar dados da empresa!");
    }
}

$(document).ready(function () {


});