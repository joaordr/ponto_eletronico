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
            alert(retorno);
            load_info();
            $.confirm({
                columnClass: 'small',
                title: 'Confirmação!',
                icon: 'fa fa-check-circle',
                content: 'Alterado com sucesso',
                type: 'green',
                typeAnimated: true,
                buttons: {
                    ok: {
                        text: 'Ok',
                        btnClass: 'btn-green',
                        action: function(){
                        }
                    }
                }
            });
            $("#modalUpdateEmpresa").modal("hide");
        } else {
            $.confirm({
                columnClass: 'small',
                title: 'Erro!',
                icon: 'fa fa-exclamation',
                content: 'Erro ao alterar dados',
                type: 'red',
                typeAnimated: true,
                buttons: {
                    ok: {
                        text: 'Ok',
                        btnClass: 'btn-red',
                        action: function(){
                        }
                    }
                }
            });
        }
        e.preventDefault();
        return false;
    });

});