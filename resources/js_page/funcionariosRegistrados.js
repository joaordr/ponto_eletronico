var funcionarios;

var table = $("#tabela1");



function load_funcionarios() {
    let retorno = request("funcionario", "list_func=true");
    $("#tabela1>tbody>tr").remove(); // limpa a tabela
    if (retorno) {
        funcionarios = retorno;
        $.each(funcionarios, function (index, value) {
            var newRow = $("<tr>");
            var cols = "";
            cols += '<th scope="row">' + (index + 1) + '</th>';
            cols += '<td>' + value.nome + '</td>';
            cols += '<td>' + value.cpf + '</td>';
            cols += '<td>' + value.telefone + '</td>';
            cols += '<td>' + value.cargo + '</td>';
            cols += '<td>' + value.setor + '</td>';
            cols += '<td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalTabela" onclick="load_modal_registros();"><i class="fa fa-eye"></i></button></td>';
            cols += '<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalUpdateFunc" onclick="load_modal_editar('+ index +');"><i class="fa fa-pencil"></i> Editar</button></td>';
            cols += '<td><button type="button" onclick="delete_func(' + index + ')" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</button></td>';

            newRow.append(cols);
            table.append(newRow);
        });

    }
    console.log(retorno);
}

function delete_func(index) {
    if (confirm("Tem certeza que deseja excluir esse funcionário?")) {
        let user_id = funcionarios[index].usuario;
        let retorno = request("funcionario", ("userId=" + user_id + "&delete=true"));
        if (retorno) {
            load_funcionarios();
        } else {
            alert("Erro ao excluir funcionario!");
        }
    }
}

function load_modal_editar(funcionario) {
    let func = funcionarios;
    let retorno = request("funcionario", ("funcionario=" + func + "&update=true"));
    if (retorno) {
        $("#nome").val(funcionarios.nome);
        $("#cpf").val(funcionarios.cpf);
        $("#rg").val(funcionarios.rg);
        $("#dtNasc").val(funcionarios.dataNascimento);
        $("#email").val(funcionarios.email);
        $("#telefone").val(funcionarios.telefone);
        $("#cargo").val(funcionarios.cargo);
        $("#setor").val(funcionarios.setor);
    } else {
        alert("Deu Errado");
    }
   
}


$(document).ready(function () {
    $("#updateFuncionario").submit(function (f) {
        let dados = $(this).serialize() + "&update=true";
        let retorno = request("funcionario", dados);
        if (retorno) {
            $("#modalUpdateFunc").modal("hide");
        } else {
            alert("Erro ao editar funcionario!");
        }
        e.preventDefault();
        return false;
    });

});



function load_modal_registros(index) {
    let id = funcionarios[index];
    let retorno = request("registro.funcionario->getId()", "load_registro_func=true");
    if (retorno == true) {
        alert("deu certo");
    }
}


$(document).ready(function () {
    load_funcionarios();

});