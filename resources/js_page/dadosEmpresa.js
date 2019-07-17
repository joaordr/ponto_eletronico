var empresa;

function load_modal() {
    $("#nome").val(empresa.nome);
    $("#razaoSocial").val(empresa.razaoSocial);
    $("#cnpj").val(empresa.cnpj);
    $("#ramo").val(empresa.ramoAtividade);
    $("#telefone").val(empresa.telefone);
}

function load_info() {
    let retorno = request("empresa", 'load=true');
    if (retorno) {
        $("#nomeEmpresa").text(retorno.nome);
        $("#razaoSocialEmp").text(retorno.razaoSocial);
        $("#cnpj_value").text(retorno.cnpj);
        empresa = retorno;
    } else {
        alert("Erro ao carregar dados da empresa!");
    }
}

$(document).ready(function () {
    load_info();

    $("#updateEmpresa").submit(function (e) {
        let dados = $(this).serialize() + "&update=true";
        let retorno = request("empresa", dados);
        if (retorno) {
            load_info();
            $("#modalUpdateEmpresa").modal("hide");
        } else {
            alert("Erro ao editar empresa!");
        }
        e.preventDefault();
        return false;
    });

});