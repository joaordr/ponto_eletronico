var empresa;

function load_modal() {
    $("#nome").val(empresa.nome);
    $("#razaoSocial").val(empresa.razaoSocial);
    $("#cnpj1").val(empresa.cnpj);
    $("#ramo").val(empresa.ramoAtividade);
    $("#telefone").val(empresa.telefone);
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
    load_info();

});